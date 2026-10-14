#!/usr/bin/env php
<?php
/**
 * update_sitemap.php
 * - Loads sitemap.xml, removes <script> elements, updates all <lastmod> elements to today's date (Asia/Kolkata, YYYY-MM-DD)
 * - Writes sitemap.xml atomically and writes sitemap.xml.gz (highest compression)
 * - Appends run output to update_sitemap.log in same directory
 * - Pings Google and Bing using robust_ping()
 *
 * Usage (cron): /usr/bin/php /path/to/dir/update_sitemap.php
 */

date_default_timezone_set('Asia/Kolkata');
$today = date('Y-m-d');

$scriptDir  = dirname(__FILE__);
$targetFile = $scriptDir . DIRECTORY_SEPARATOR . 'sitemap.xml';
$gzFile     = $scriptDir . DIRECTORY_SEPARATOR . 'sitemap.xml.gz';
$logFile    = $scriptDir . DIRECTORY_SEPARATOR . 'update_sitemap.log';

// Whether to ping search engines after update
$pingSearchEngines = true;

// Simple logger
function logMessage($message) {
    global $logFile;
    $ts = date('Y-m-d H:i:s');
    $line = "[$ts] $message\n";
    echo $line;
    @file_put_contents($logFile, $line, FILE_APPEND | LOCK_EX);
}

// Start
logMessage('#!/usr/bin/env php');

if (!file_exists($targetFile)) {
    logMessage("ERROR: sitemap not found at $targetFile");
    exit(1);
}

$contents = @file_get_contents($targetFile);
if ($contents === false) {
    logMessage("ERROR: failed to read $targetFile");
    exit(1);
}

// Load into DOMDocument and update lastmod nodes
libxml_use_internal_errors(true);
$doc = new DOMDocument();
$doc->preserveWhiteSpace = false;
$doc->formatOutput = true;

// Attempt to load as XML; if that fails, try to strip problematic characters then reattempt
if (!@$doc->loadXML($contents)) {
    // Try to remove any stray control characters that break the parser and retry
    $clean = preg_replace('/[^\x09\x0A\x0D\x20-\xFF]/', '', $contents);
    if (!@$doc->loadXML($clean)) {
        logMessage("ERROR: failed to parse sitemap XML (loadXML failed).");
        foreach (libxml_get_errors() as $err) {
            logMessage("libxml: " . trim($err->message));
        }
        libxml_clear_errors();
        exit(1);
    }
}
libxml_clear_errors();

// Remove any <script> elements (e.g. chrome-extension leftover)
$xpath = new DOMXPath($doc);
$scriptNodes = $xpath->query('//script');
$removedScripts = 0;
foreach ($scriptNodes as $snode) {
    $snode->parentNode->removeChild($snode);
    $removedScripts++;
}
if ($removedScripts > 0) {
    logMessage("Removed $removedScripts script node(s) from sitemap (invalid for sitemap XML).");
}

// Find all lastmod elements regardless of namespace
$lastmodNodes = $xpath->query('//*[local-name()="lastmod"]');
$changed = 0;
foreach ($lastmodNodes as $node) {
    if ($node->textContent !== $today) {
        $node->nodeValue = $today;
        $changed++;
    }
}

logMessage("Will replace/ensure $changed <lastmod> tag(s) with $today");

// Prepare XML for writing
// If the document has an XML declaration, saveXML will include it
$newContents = $doc->saveXML();
if ($newContents === false) {
    logMessage("ERROR: failed to serialize updated XML.");
    exit(1);
}

// Atomic write
$tempFile = $targetFile . '.tmp';
if (@file_put_contents($tempFile, $newContents, LOCK_EX) === false) {
    logMessage("ERROR: failed to write temp file $tempFile");
    @unlink($tempFile);
    exit(1);
}
if (!@rename($tempFile, $targetFile)) {
    // fallback: copy + unlink
    if (!@copy($tempFile, $targetFile) || !@unlink($tempFile)) {
        logMessage("ERROR: failed to move temp file into place");
        exit(1);
    }
}
logMessage("Wrote updated sitemap to $targetFile");

// Create compressed sitemap.xml.gz (highest compression)
$xmlData = @file_get_contents($targetFile);
if ($xmlData === false) {
    logMessage("WARNING: unable to read sitemap after write; skipping gz creation");
} else {
    $gzData = @gzencode($xmlData, 9);
    if ($gzData === false || @file_put_contents($gzFile, $gzData, LOCK_EX) === false) {
        logMessage("WARNING: failed to create $gzFile");
    } else {
        logMessage("Created compressed sitemap: $gzFile");
    }
}

// ---------- Robust ping implementation ----------
function robust_ping($url, &$httpCode = null, &$error = null) {
    $error = null;
    $httpCode = null;

    if (function_exists('curl_version')) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 8);
        curl_setopt($ch, CURLOPT_TIMEOUT, 12);
        curl_setopt($ch, CURLOPT_USERAGENT, 'easyhomeservice-bot/1.0 (+https://easyhomeservice.com)');

        curl_exec($ch);
        $errno = curl_errno($ch);
        if ($errno) {
            $error = 'curl error ' . $errno . ': ' . curl_error($ch);
            curl_close($ch);
            return false;
        }
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return ($httpCode >= 200 && $httpCode < 400);
    }

    // Fallback to file_get_contents
    $opts = [
        'http' => [
            'method'  => 'GET',
            'header'  => "User-Agent: easyhomeservice-bot/1.0\r\n",
            'timeout' => 10
        ],
        'ssl' => [
            'verify_peer' => true,
            'verify_peer_name' => true,
        ]
    ];
    $ctx = stream_context_create($opts);
    $res = @file_get_contents($url, false, $ctx);
    if ($res === false) {
        $error = 'file_get_contents failed (allow_url_fopen may be disabled or outbound blocked)';
        return false;
    }
    if (!empty($http_response_header) && preg_match('#HTTP/\d+\.\d+\s+(\d+)#', $http_response_header[0], $m)) {
        $httpCode = intval($m[1]);
        return ($httpCode >= 200 && $httpCode < 400);
    }
    $httpCode = 200;
    return true;
}

// Ping search engines (if enabled)
if ($pingSearchEngines) {
    $sitemapUrl = 'https://easyhomeservice.com/sitemap.xml';
    $pingTargets = [
        'Google' => 'https://www.google.com/ping?sitemap=' . urlencode($sitemapUrl),
        'Bing'   => 'https://www.bing.com/ping?sitemap='   . urlencode($sitemapUrl),
    ];

    foreach ($pingTargets as $name => $url) {
        $httpCode = null;
        $err = null;
        $ok = robust_ping($url, $httpCode, $err);
        $msg = sprintf("Pinged %s: %s - %s (http=%s, err=%s)",
            $name,
            $url,
            $ok ? 'OK' : 'FAILED',
            $httpCode ?? 'N/A',
            $err ?? 'none'
        );
        logMessage($msg);
    }
}

logMessage("update_sitemap.php finished successfully.");
exit(0);

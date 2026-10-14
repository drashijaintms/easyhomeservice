<?php
/**
 * Replace hard-coded thank-you.php redirects with getThankYouUrl() 
 * in all *-steps.php files. Keeps a log of modified files.
 */

$directory   = __DIR__; // project root
$logFile     = $directory . '/log.txt';
$changedFiles = [];

/**
 * Recursively find files matching pattern (*-steps.php)
 */
function rglob($pattern, $flags = 0) {
    $files = glob($pattern, $flags);
    foreach (glob(dirname($pattern) . '/*', GLOB_ONLYDIR|GLOB_NOSORT) as $dir) {
        $files = array_merge($files, rglob($dir . '/' . basename($pattern), $flags));
    }
    return $files;
}

// Find all *-steps.php files (recursive)
$files = rglob($directory . '/*-steps.php');

foreach ($files as $file) {
    $content = file_get_contents($file);
    if ($content === false) continue;

    // Only replace the target redirect line
    $search  = "window.location.href = 'thank-you.php';";
    $replace = "window.location.href = getThankYouUrl();";

    if (strpos($content, $search) !== false) {
        $newContent = str_replace($search, $replace, $content);

        if ($newContent !== $content) {
            file_put_contents($file, $newContent);
            $changedFiles[] = str_replace($directory . '/', '', $file);
        }
    }
}

// Write log
if (!empty($changedFiles)) {
    $logContent = "Modified files on " . date('Y-m-d H:i:s') . ":\n" 
        . implode("\n", $changedFiles) . "\n\n";
    file_put_contents($logFile, $logContent, FILE_APPEND);
    echo "✅ Updated " . count($changedFiles) . " file(s). Log written to log.txt\n";
} else {
    echo "ℹ️ No files updated.\n";
}

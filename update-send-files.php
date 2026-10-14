<?php
/**
 * update-send-files.php
 *
 * Automatically injects centralized logger include
 * into every PHP file beginning with 'send-' in this directory.
 *
 * Run it once from the web or CLI.
 */

$baseDir = __DIR__;
$files = glob($baseDir . '/send-*.php');

if (!$files) {
    echo "No send-*.php files found in $baseDir\n";
    exit;
}

$insertCode = <<<PHP

include_once __DIR__ . '/form-logger.php';
log_form_data(\$mapped);

PHP;

foreach ($files as $file) {
    $content = file_get_contents($file);
    if ($content === false) {
        echo "❌ Failed to read $file\n";
        continue;
    }

    // Skip if already patched
    if (strpos($content, 'form-logger.php') !== false) {
        echo "⚠️ Already contains logger: " . basename($file) . "\n";
        continue;
    }

    // Find end of `$mapped = array(...);`
    $pattern = '/(\$mapped\s*=\s*array\s*\([^;]+?\);)/is';

    if (preg_match($pattern, $content, $matches)) {
        $replacement = $matches[1] . $insertCode;
        $newContent = preg_replace($pattern, $replacement, $content, 1);

        if ($newContent && file_put_contents($file, $newContent)) {
            echo "✅ Updated: " . basename($file) . "\n";
        } else {
            echo "❌ Failed to write changes to " . basename($file) . "\n";
        }
    } else {
        echo "⚠️ No \$mapped array found in " . basename($file) . "\n";
    }
}

echo "\nDone.\n";

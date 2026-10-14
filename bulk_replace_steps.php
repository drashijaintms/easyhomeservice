<?php
/**
 * Bulk replace script for files starting with send-
 * Replaces any form of:
 *   $description = $_GET['description'] ?? "Seeking for service";
 *   $description= $_GET["description"] ?? "Seeking for service";
 *   (with any spacing)
 * With:
 *   $description = trim($_GET['description'] ?? '') ?: "Seeking for service";
 * Logs changes to bulk_replace_log.txt
 */

$directory = __DIR__;
$logFile = $directory . '/bulk_replace_log.txt';

// The regex pattern (flexible spaces and quotes)
$pattern = '/\$description\s*=\s*\$_GET\s*\[\s*[\'"]description[\'"]\s*\]\s*\?\?\s*"Seeking for service"\s*;/';
$replace = '$description = trim($_GET[\'description\'] ?? \'\') ?: "Seeking for service";';

// open log
$log = fopen($logFile, 'a');
fwrite($log, "=== Bulk replace run: " . date('Y-m-d H:i:s') . " ===\n");

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($directory, RecursiveDirectoryIterator::SKIP_DOTS)
);

foreach ($iterator as $file) {
    if ($file->isFile() && preg_match('/^send-.*\.php$/', $file->getFilename())) {
        $path = $file->getPathname();
        $content = file_get_contents($path);

        // Check if it matches the old code using regex
        if (preg_match($pattern, $content)) {
            $newContent = preg_replace($pattern, $replace, $content);
            file_put_contents($path, $newContent);
            fwrite($log, "Updated: $path\n");
        }
    }
}

fwrite($log, "=== End of run ===\n\n");
fclose($log);

echo "Replacement complete! Check 'bulk_replace_log.txt' for details.\n";
?>

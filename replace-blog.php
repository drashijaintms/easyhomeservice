<?php

$rootDir = __DIR__;

function processFiles($dir) {
    $files = scandir($dir);

    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;

        $fullPath = $dir . '/' . $file;

        if (is_dir($fullPath)) {
            processFiles($fullPath);
        } else {

            if (pathinfo($fullPath, PATHINFO_EXTENSION) !== 'php') continue;

            $content = file_get_contents($fullPath);

            // EXACT replace only this string
            $updatedContent = str_replace(
                'gallery.php',
                'gallery.php',
                $content
            );

            if ($content !== $updatedContent) {
                file_put_contents($fullPath, $updatedContent);
                echo "✔ Updated: $fullPath<br>";
            }
        }
    }
}

processFiles($rootDir);

echo "<br>✅ Done!";
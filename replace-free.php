<?php

// Public HTML folder path
$folderPath = $_SERVER['DOCUMENT_ROOT']; // Automatically gets public_html path

// Text to find and replace
$findText = "Get A Quote";
$replaceText = "Get A Quote";

// Allowed file extensions
$allowedExtensions = ['html', 'php', 'js', 'css', 'txt'];

// Store updated files
$updatedFiles = [];

function scanFolder($folderPath, $findText, $replaceText, $allowedExtensions, &$updatedFiles)
{
    $files = scandir($folderPath);

    foreach ($files as $file) {

        if ($file == '.' || $file == '..') {
            continue;
        }

        $fullPath = $folderPath . DIRECTORY_SEPARATOR . $file;

        // Skip system folders if needed
        if (is_dir($fullPath)) {

            scanFolder($fullPath, $findText, $replaceText, $allowedExtensions, $updatedFiles);

        } else {

            $extension = strtolower(pathinfo($fullPath, PATHINFO_EXTENSION));

            if (in_array($extension, $allowedExtensions)) {

                $content = file_get_contents($fullPath);

                if (strpos($content, $findText) !== false) {

                    $updatedContent = str_replace($findText, $replaceText, $content);

                    file_put_contents($fullPath, $updatedContent);

                    $updatedFiles[] = $fullPath;
                }
            }
        }
    }
}

// Run replacement
scanFolder($folderPath, $findText, $replaceText, $allowedExtensions, $updatedFiles);

// Output results
echo "<h2>Updated Files</h2>";

if (!empty($updatedFiles)) {

    echo "<ul>";

    foreach ($updatedFiles as $file) {
        echo "<li>" . $file . "</li>";
    }

    echo "</ul>";

    echo "<strong>Total Files Updated: " . count($updatedFiles) . "</strong>";

} else {

    echo "No files were updated.";
}

?>
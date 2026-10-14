<?php

$directory = __DIR__; // Current directory
$files = glob($directory . '/send-*.php'); // Get all files starting with send-

$updatedFiles = [];
$baseUrl = 'https://call.toppermarketing.com/store_entry.php?Key=67cf8963-b9d1-45bb-a580-b7b52937ee87&category=';

foreach ($files as $file) {
    $filename = basename($file);
    if (preg_match('/send-(.+)\.php$/', $filename, $matches)) {
        $category = $matches[1];
        $newUrl = '$server_url = "' . $baseUrl . $category . '";';

        $contents = file_get_contents($file);

        // Replace any existing $server_url line
        $newContents = preg_replace(
            '/\$server_url\s*=\s*"(.*?)";/',
            $newUrl,
            $contents
        );

        if ($newContents !== $contents) {
            file_put_contents($file, $newContents);
            $updatedFiles[] = $filename;
        }
    }
}

// Display updated file names
if (!empty($updatedFiles)) {
    echo "Updated files:\n";
    foreach ($updatedFiles as $file) {
        echo " - $file\n";
    }
} else {
    echo "No files were updated.\n";
}

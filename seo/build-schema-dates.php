<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
/* ===============================
   ROOT DIRECTORY
=============================== */

$rootDir  = realpath($_SERVER['DOCUMENT_ROOT']);
$jsonFile = $rootDir . '/seo/page-dates.json';

/* ===============================
   LOAD EXISTING JSON
=============================== */

$data = [];

if (file_exists($jsonFile)) {

    $data = json_decode(file_get_contents($jsonFile), true);

    if (!is_array($data)) {
        $data = [];
    }
}

/* ===============================
   IGNORE RULES
=============================== */

$ignoreFolders = [
    '/seo/',
    '/backup/',
    '/backups/',
    '/zip/',
    '/archive/',
    '/blog/',
    '/vonage/',
    '/section-include/',
    '/unsub/',
    '/gallery-sec/',
    '/blog-sec/',
    
];

$ignoreFileKeywords = [
    'test',
    'send',
    'header',
    'footer',
    'steps',
    
];

/* ===============================
   SCAN ALL PHP FILES RECURSIVELY
=============================== */

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootDir, RecursiveDirectoryIterator::SKIP_DOTS)
);

foreach ($iterator as $file) {

    if (!$file->isFile()) continue;

    if (strtolower($file->getExtension()) !== 'php') continue;

    $filePath = $file->getRealPath();
    $fileName = strtolower($file->getFilename());
    $pathLower = strtolower($filePath);

    /* ===============================
       SKIP FOLDERS
    =============================== */

    foreach ($ignoreFolders as $ignore) {
        if (strpos($pathLower, $ignore) !== false) {
            continue 2; // skip to next file
        }
    }

    /* ===============================
       SKIP FILE KEYWORDS
    =============================== */

    foreach ($ignoreFileKeywords as $keyword) {
        if (strpos($fileName, $keyword) !== false) {
            continue 2;
        }
    }

    /* ===============================
       ADD NEW FILE ONLY
    =============================== */

    if (!isset($data[$filePath])) {

        $stat = stat($filePath);

        $birthTime = !empty($stat['ctime'])
            ? $stat['ctime']
            : filemtime($filePath);

        $url = str_replace($rootDir, '', $filePath);
        $url = str_replace('.php', '', $url);

        $data[$filePath] = [
            'url'       => $url,
            'published' => date('c', $birthTime)
        ];
    }
}

/* ===============================
   SAVE JSON
=============================== */

file_put_contents(
    $jsonFile,
    json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
);

echo "✅ Auto scan completed";

?>

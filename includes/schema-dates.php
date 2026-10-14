<?php

function getSchemaDates() {

    /* ===============================
       GET CURRENT FILE PATH
    =============================== */

    $file = realpath($_SERVER['SCRIPT_FILENAME']);

    $jsonFile = $_SERVER['DOCUMENT_ROOT'].'/seo/page-dates.json';

    /* ===============================
       LOAD JSON DATA
    =============================== */

    $data = [];

    if (file_exists($jsonFile)) {

        $data = json_decode(file_get_contents($jsonFile), true);

        if (!is_array($data)) {
            $data = [];
        }
    }

    /* ===============================
       PUBLISHED DATE FROM JSON ONLY
    =============================== */

    $published = null;

    if (isset($data[$file]['published'])) {

        $published = $data[$file]['published'];
    }

    /* ===============================
       MODIFIED DATE FROM STAT COMMAND
    =============================== */

    $modified = null;

    if (function_exists('shell_exec')) {

        $cmd = "stat " . escapeshellarg($file);
        $output = shell_exec($cmd);

        if ($output) {

            preg_match('/Modify:\s+([^\n]+)/', $output, $modifyMatch);

            if (!empty($modifyMatch[1])) {

                $modifyTime = strtotime(trim($modifyMatch[1]));

                if ($modifyTime) {
                    $modified = date('c', $modifyTime);
                }
            }
        }
    }

    /* ===============================
       FALLBACK IF STAT FAILS
    =============================== */

    if (!$modified) {

        $modified = date('c', filemtime($file));
    }

    if (!$published) {

        // fallback only if missing from JSON
        $published = date('c', filemtime($file));
    }

    /* ===============================
       SAFETY RULE
       published must be <= modified
    =============================== */

    $publishedTs = strtotime($published);
    $modifiedTs  = strtotime($modified);

    if ($publishedTs > $modifiedTs) {

        // make both same (your requirement)
        $published = $modified;
    }

    /* ===============================
       RETURN FINAL VALUES
    =============================== */

    return [
        'published' => $published,
        'modified'  => $modified
    ];
}

?>

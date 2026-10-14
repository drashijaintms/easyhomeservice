<?php

function asset($file) {

    $path = $_SERVER['DOCUMENT_ROOT'] . '/' . $file;

    if (file_exists($path)) {
        $version = filemtime($path);
        return '/' . $file . '?v=' . $version;
    }

    return '/' . $file;
}
<?php

// Path (same folder as this file)
$logFile = __DIR__ . '/short-forms-log.txt';

// Create file if not exists
if (!file_exists($logFile)) {
    file_put_contents($logFile, '');
}

// Only log the event (no form data)
$entry = sprintf(
    "[%s] HIT | IP: %s | UA: %s\n",
    date('Y-m-d H:i:s'),
    $_SERVER['REMOTE_ADDR'] ?? '-',
    $_SERVER['HTTP_USER_AGENT'] ?? '-'
);

// Write log
file_put_contents($logFile, $entry, FILE_APPEND | LOCK_EX);

// Response
echo json_encode(['status' => 'logged']);
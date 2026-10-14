<?php
// form-logger.php — lightweight centralized request logger

function log_form_data(array $mapped)
{
    try {
        // ✅ Set timezone to Indian Standard Time (IST)
        date_default_timezone_set('Asia/Kolkata');

        $logDir = __DIR__ . '/logs';
        if (!is_dir($logDir)) {
            @mkdir($logDir, 0775, true);
        }

        // Format log entry with IST time
        $logEntry = sprintf(
            "[%s] %s | %s\n%s\n----\n",
            date('c'), // ISO 8601 format, now in IST
            $_SERVER['REMOTE_ADDR'] ?? 'unknown',
            $_SERVER['SCRIPT_NAME'] ?? '(no script)',
            json_encode($mapped, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
        );

        @file_put_contents($logDir . '/form-outgoing.log', $logEntry, FILE_APPEND | LOCK_EX);
    } catch (Throwable $e) {
        // fallback to PHP error_log if something goes wrong
        error_log("Form logger failed: " . $e->getMessage());
    }
}

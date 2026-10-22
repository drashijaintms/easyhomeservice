<?php
error_reporting(0);
ini_set('display_errors', '0');
ini_set('display_startup_errors', '0');

if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
    @session_start();
}

$servername = "localhost";
$username = "qqoophoh_easyhomeservice_blog";
$password = "qqoophoh_easyhomeservice_blog";
$dbname = "qqoophoh_easyhomeservice_blog";

mysqli_report(MYSQLI_REPORT_OFF);
$conn = @new mysqli($servername, $username, $password, $dbname);

if ($conn && !$conn->connect_error) {
    $conn->set_charset("utf8mb4");
}
?>
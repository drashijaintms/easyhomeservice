<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$servername = "localhost";
$username = "qqoophoh_easyhomeservice_blog";
$password = "qqoophoh_easyhomeservice_blog";
$dbname = "qqoophoh_easyhomeservice_blog";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ADD THIS
$conn->set_charset("utf8mb4");

error_reporting(E_ERROR);
ini_set('display_errors', 1);
?>
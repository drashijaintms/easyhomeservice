<?php
$host = 'localhost';
$db   = 'easyhomeservi_contactform';
$user = 'easyhomeservi_contactform';
$pass = 'easyhomeservi_contactform';
$secret_key = '098f6bcd4621d373cade4e832627b4f6'; // must match export.php

// Security check
if (!isset($_GET['key']) || $_GET['key'] !== $secret_key) {
    http_response_code(403);
    exit('Unauthorized access.');
}

// Get category safely
$category = isset($_GET['c']) ? trim($_GET['c']) : 'general';

// Database connection
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    http_response_code(500);
    exit('Database connection failed.');
}

// Sanitize input
$category = $conn->real_escape_string($category);

// Example table: "unsubscribes" with columns `email_hash`, `category`
$query = "SELECT email_hash FROM category_suppression WHERE category = '$category'";

$result = $conn->query($query);
if (!$result) {
    http_response_code(500);
    exit('Query failed.');
}

// CSV headers
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="unsubscribes_' . $category . '.csv"');

$output = fopen('php://output', 'w');
fputcsv($output, ['email_hash']);

while ($row = $result->fetch_assoc()) {
    fputcsv($output, $row);
}

fclose($output);
$result->free();
$conn->close();
?>

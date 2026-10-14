<?php
$host = 'localhost';
$db = 'easyhomeservi_contactform';
$user = 'easyhomeservi_contactform';
$pass = 'easyhomeservi_contactform';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    http_response_code(500);
    echo "Database connection failed.";
    exit;
}

// Set headers to force download of CSV
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="unsubscribes.csv"');

$output = fopen('php://output', 'w');

// CSV column headers
fputcsv($output, ['email_hash']);

// Fetch data
$result = $conn->query("SELECT email_hash FROM unsubscribes");

if ($result) {
    while ($row = $result->fetch_assoc()) {
        fputcsv($output, $row);
    }
    $result->free();
} else {
    http_response_code(500);
    echo "Failed to fetch data.";
}

fclose($output);
$conn->close();
?>

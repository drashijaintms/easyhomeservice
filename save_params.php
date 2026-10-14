<?php
// save_params.php
header('Content-Type: application/json');

// Connect to your database
$conn = new mysqli("localhost", "db_user", "db_pass", "db_name");
if ($conn->connect_error) {
    die(json_encode(["error" => "DB connection failed: " . $conn->connect_error]));
}

// Read JSON body
$data = json_decode(file_get_contents("php://input"), true);

// Prepare JSON string
$json = json_encode($data['params'], JSON_UNESCAPED_UNICODE);
$timestamp = $conn->real_escape_string($data['timestamp'] ?? date('Y-m-d H:i:s'));
$userAgent = $conn->real_escape_string($data['userAgent'] ?? '');

// Insert into DB
$stmt = $conn->prepare("INSERT INTO call_params (params_json, timestamp, user_agent) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $json, $timestamp, $userAgent);
$stmt->execute();

$stmt->close();
$conn->close();

echo json_encode(["status" => "success"]);
?>

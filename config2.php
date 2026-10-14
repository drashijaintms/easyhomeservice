<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$servername = "localhost";
$username   = "easyhomeservi_contactform";
$password   = "easyhomeservi_contactform";
$dbname     = "easyhomeservi_contactform";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["error" => "DB connection failed"]);
    exit;
}

// collect parameters from query string
$params    = $_GET;
$userAgent = $conn->real_escape_string($_SERVER['HTTP_USER_AGENT'] ?? '');
$timestamp = date('Y-m-d H:i:s');
$ip        = $_SERVER['REMOTE_ADDR'];

if (!empty($params)) {
    $params_json = json_encode($params, JSON_UNESCAPED_UNICODE);
    $stmt = $conn->prepare("INSERT INTO captured_params (params_json, user_agent, ip_address, timestamp) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $params_json, $userAgent, $ip, $timestamp);
    $stmt->execute();
    $stmt->close();
    echo json_encode(["status" => "ok"]);
} else {
    http_response_code(400);
    echo json_encode(["error" => "No params"]);
}

$conn->close();
?>

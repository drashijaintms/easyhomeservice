<?php
// check the OTP against the stored request_id
session_start();
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(['error' => 'Method not allowed']);
  exit;
}

$input = json_decode(file_get_contents('php://input'), true) ?: [];
$code  = $input['code'] ?? null;
$reqId = $_SESSION['verify_request_id'] ?? null;

if (!$reqId) {
  http_response_code(400);
  echo json_encode(['error' => 'No active verification request']);
  exit;
}
if (!$code) {
  http_response_code(400);
  echo json_encode(['error' => 'code is required']);
  exit;
}

$config = require __DIR__ . '/config.php';

$url = 'https://api.nexmo.com/v2/verify/' . urlencode($reqId);
$payload = [ 'code' => $code ];

$ch = curl_init($url);
curl_setopt_array($ch, [
  CURLOPT_POST           => true,
  CURLOPT_POSTFIELDS     => json_encode($payload),
  CURLOPT_HTTPHEADER     => [
    'Content-Type: application/json',
    'Authorization: Basic ' . base64_encode($config['09bde122'] . ':' . $config['X1LFsfynBqHu7Kl07YwN5bKL'])
  ],
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT        => 15
]);

$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$err      = curl_error($ch);
curl_close($ch);

if ($err) {
  http_response_code(500);
  echo json_encode(['error' => 'cURL error: ' . $err]);
  exit;
}

http_response_code($httpcode ?: 200);
echo $response ?: json_encode(['error' => 'Empty response from Verify']);

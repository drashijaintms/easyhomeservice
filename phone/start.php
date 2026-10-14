<?php
// start a Verify v2 request (SMS via 10DLC), store request_id in session
session_start();
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(['error' => 'Method not allowed']);
  exit;
}

$input = json_decode(file_get_contents('php://input'), true) ?: [];
$phone = $input['phoneNumber'] ?? null;

if (!$phone) {
  http_response_code(400);
  echo json_encode(['error' => 'phoneNumber is required']);
  exit;
}

$config = require __DIR__ . '/config.php';

$payload = [
  'brand'    => $config['BRAND'],
  'workflow' => [[
    'channel'             => 'sms',
    'to'                  => $phone,
    'channel_properties'  => ['from' => $config['TEN_DLC_FROM']]
  ]],
  'code_length' => 6,
  'locale'      => 'en-us'
];

$ch = curl_init('https://api.nexmo.com/v2/verify');
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

$data = json_decode($response, true);
if ($httpcode >= 200 && $httpcode < 300) {
  // save request_id for this session
  $_SESSION['verify_request_id'] = $data['request_id'] ?? null;
  echo json_encode(['request_id' => $_SESSION['verify_request_id']]);
} else {
  http_response_code($httpcode ?: 500);
  echo $response ?: json_encode(['error' => 'Verify start failed']);
}

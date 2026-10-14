<?php
header('Content-Type: application/json; charset=utf-8');

$VONAGE_API_KEY    = "09bde122";
$VONAGE_API_SECRET = ""; // <-- secret

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
  exit;
}

$requestId = trim($_POST['request_id'] ?? '');
if ($requestId === '') {
  http_response_code(400);
  echo json_encode(['success' => false, 'message' => 'Request ID is required.']);
  exit;
}

$base = 'https://api.nexmo.com/verify/control/json';
$q = http_build_query([
  'api_key'    => $VONAGE_API_KEY,
  'api_secret' => $VONAGE_API_SECRET,
  'request_id' => $requestId,
  'cmd'        => 'cancel',
]);

$ch = curl_init($base . '?' . $q);
curl_setopt_array($ch, [
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT        => 20,
]);
$raw  = curl_exec($ch);
$err  = curl_error($ch);
curl_close($ch);

if ($err) {
  http_response_code(502);
  echo json_encode(['success' => false, 'message' => 'Network error while cancelling.']);
  exit;
}

$data = json_decode($raw, true);
if (($data['status'] ?? null) === '0') {
  echo json_encode(['success' => true, 'message' => 'Cancelled.']);
} else {
  http_response_code(400);
  echo json_encode(['success' => false, 'message' => $data['error_text'] ?? 'Cancel failed.']);
//
}

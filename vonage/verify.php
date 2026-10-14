<?php
/**
 * verify.php — Single-file Vonage Verify endpoint (cURL + GET)
 * Actions (auto-detected from POST fields):
 *   START  -> POST: phone[, brand]
 *   CHECK  -> POST: request_id, code
 *   CANCEL -> POST: request_id, cmd=cancel
 */

session_start();

// ---------------- CONFIG ----------------
$VONAGE_API_KEY    = "09bde122";   // keep or replace
$VONAGE_API_SECRET = "X1LFsfynBqHu7Kl07YwN5bKL";           // <-- put your real secret here
$DEFAULT_BRAND     = "EasyHomeService";

// -------------- RESPONSE HEADERS --------------
header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

// ---- CORS (keep if page origin ≠ this file’s origin; safe to keep anyway) ----
$origin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : '*';
header('Access-Control-Allow-Origin: ' . $origin);
header('Vary: Origin');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: Content-Type, X-Requested-With');
header('Access-Control-Allow-Methods: POST, OPTIONS');
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
  http_response_code(204);
  exit;
}

// Enforce POST for actual work
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
  exit;
}

// ---------------- GUARDS ----------------
if ($VONAGE_API_SECRET === '') {
  http_response_code(500);
  echo json_encode(['success' => false, 'message' => 'Server not configured for OTP.']);
  exit;
}

// ---------------- HELPERS ----------------
function call_vonage_get($baseUrl, $params) {
  $url = $baseUrl . '?' . http_build_query($params);
  $ch  = curl_init($url);
  curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => 20,
  ]);
  $raw = curl_exec($ch);
  $err = curl_error($ch);
  curl_close($ch);
  return [$raw, $err];
}

function fail($code, $msg) {
  http_response_code($code);
  echo json_encode(['success' => false, 'message' => $msg]);
  exit;
}

// ---------------- ACTION: CHECK (request_id + code) ----------------
if (!empty($_POST['request_id']) && isset($_POST['code'])) {
  $requestId = trim((string)$_POST['request_id']);
  $code      = preg_replace('/\D+/', '', (string)$_POST['code']);

  if ($requestId === '' || $code === '') {
    fail(400, 'Request ID and code are required.');
  }

  list($raw, $err) = call_vonage_get(
    'https://api.nexmo.com/verify/check/json',
    [
      'api_key'    => $VONAGE_API_KEY,
      'api_secret' => $VONAGE_API_SECRET,
      'request_id' => $requestId,
      'code'       => $code,
    ]
  );

  if ($err) fail(502, 'Network error while checking code.');
  $data = json_decode((string)$raw, true);
  if (!is_array($data)) fail(502, 'Invalid response from verification provider.');

  if (($data['status'] ?? null) === '0') {
    echo json_encode(['success' => true, 'message' => 'Verified.']);
    exit;
  }

  $msg = $data['error_text'] ?? 'Verification failed.';
  $friendly = [
    'does not match'     => 'Incorrect code. Please try again.',
    'Too many incorrect' => 'Too many incorrect attempts. Please restart verification.',
    'timed out'          => 'The code expired. Please send a new OTP.',
    'No response found'  => 'No active request. Please send OTP again.',
  ];
  foreach ($friendly as $needle => $pretty) {
    if (stripos($msg, $needle) !== false) { $msg = $pretty; break; }
  }
  fail(400, $msg);
}

// ---------------- ACTION: CANCEL (request_id + cmd=cancel) ----------------
if (!empty($_POST['request_id']) && strtolower((string)($_POST['cmd'] ?? '')) === 'cancel') {
  $requestId = trim((string)$_POST['request_id']);

  list($raw, $err) = call_vonage_get(
    'https://api.nexmo.com/verify/control/json',
    [
      'api_key'    => $VONAGE_API_KEY,
      'api_secret' => $VONAGE_API_SECRET,
      'request_id' => $requestId,
      'cmd'        => 'cancel',
    ]
  );

  if ($err) fail(502, 'Network error while cancelling.');
  $data = json_decode((string)$raw, true);
  if (!is_array($data)) fail(502, 'Invalid response from verification provider.');

  if (($data['status'] ?? null) === '0') {
    echo json_encode(['success' => true, 'message' => 'Cancelled.']);
    exit;
  }
  fail(400, $data['error_text'] ?? 'Cancel failed.');
}

// ---------------- ACTION: START (phone [+ brand]) ----------------
if (!empty($_POST['phone'])) {
  $phone = trim((string)$_POST['phone']);
  $brand = trim((string)($_POST['brand'] ?? $DEFAULT_BRAND));
  if ($phone === '') fail(400, 'Please provide a phone number.');

  list($raw, $err) = call_vonage_get(
    'https://api.nexmo.com/verify/json',
    [
      'api_key'    => $VONAGE_API_KEY,
      'api_secret' => $VONAGE_API_SECRET,
      'number'     => $phone,
      'brand'      => ($brand !== '' ? $brand : $DEFAULT_BRAND),
      // Optional:
      // 'code_length' => 6,
      // 'workflow_id' => 6,
      // 'sender_id'   => 'ACME',
    ]
  );

  if ($err) fail(502, 'Network error while starting verification.');
  $data = json_decode((string)$raw, true);
  if (!is_array($data)) fail(502, 'Invalid response from verification provider.');

  if (($data['status'] ?? null) === '0' && !empty($data['request_id'])) {
    echo json_encode([
      'success'    => true,
      'request_id' => $data['request_id'],
      'message'    => 'OTP sent.',
    ]);
    exit;
  }

  $msg = $data['error_text'] ?? 'Could not send OTP.';
  if (stripos($msg, 'Throttled') !== false) $msg = 'Too many requests. Please wait and try again.';
  fail(400, $msg);
}

// If nothing matched:
fail(400, 'Invalid request. Provide phone (start) OR request_id+code (check) OR request_id+cmd=cancel (cancel).');

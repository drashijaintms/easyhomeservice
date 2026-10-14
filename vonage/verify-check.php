<?php
require __DIR__ . '/config.php';
$IN = require_api_request(['POST','GET']);

$requestId = trim($IN['request_id'] ?? '');
$code      = preg_replace('/\D+/', '', (string)($IN['code'] ?? ''));

if (!$requestId) respond(false, ['message'=>'No active request. Please send OTP again.'], 400);
if (!$code || strlen($code) < 4 || strlen($code) > 6) {
  respond(false, ['message'=>'Enter the 4–6 digit code (digits only).'], 400);
}
if (!$VONAGE_API_SECRET) respond(false, ['message'=>'Server not configured: missing API secret.'], 500);

[$response, $curlErr] = vonage_get('https://api.nexmo.com/verify/check/json', [
  'api_key'    => $VONAGE_API_KEY,
  'api_secret' => $VONAGE_API_SECRET,
  'request_id' => $requestId,
  'code'       => $code,
]);

if ($curlErr) respond(false, ['message'=>'Network error: '.$curlErr], 502);

$data   = json_decode($response, true);
$status = $data['status'] ?? null;

if ($status === '0') {
  respond(true, ['message'=>'✅ Phone verified.']);
}

respond(false, [
  'message' => map_verify_error($status, $data['error_text'] ?? null),
  'status'  => $status
], 400);

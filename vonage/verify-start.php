<?php
require __DIR__ . '/config.php';

// Accept POST normally; also accept GET to avoid 405 while you sort rewrites
$IN = require_api_request(['POST','GET']);

$rawPhone = $IN['phone'] ?? '';
$brand    = trim(($IN['brand'] ?? $DEFAULT_BRAND));

$e164 = to_e164_from_digits($rawPhone);
if (!$rawPhone) respond(false, ['message'=>'Please provide a phone number.'], 400);
if (!$e164)     respond(false, ['message'=>'Enter a valid phone number (include country code).'], 400);
if (!$VONAGE_API_SECRET) respond(false, ['message'=>'Server not configured: missing API secret.'], 500);

[$response, $curlErr] = vonage_get('https://api.nexmo.com/verify/json', [
  'api_key'    => $VONAGE_API_KEY,
  'api_secret' => $VONAGE_API_SECRET,
  'number'     => $e164,
  'brand'      => $brand,
]);

if ($curlErr) respond(false, ['message'=>'Network error: '.$curlErr], 502);

$data   = json_decode($response, true);
$status = $data['status'] ?? null;

if ($status === '0') {
  respond(true, [
    'request_id' => $data['request_id'] ?? null,
    'phone'      => $e164,
    'message'    => 'OTP sent to '.$e164.'.',
  ]);
}

respond(false, [
  'message' => map_verify_error($status, $data['error_text'] ?? null),
  'status'  => $status
], 400);

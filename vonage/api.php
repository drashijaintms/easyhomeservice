<?php
// verify.php
declare(strict_types=1);
session_start();

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');

//
// ---- Config (use env vars in production) ----
//
$VONAGE_API_KEY    = getenv('09bde122')    ?: '09bde122';
$VONAGE_API_SECRET = getenv('X1LFsfynBqHu7Kl07YwN5bKL') ?: '';
$DEFAULT_BRAND     = getenv('VERIFY_BRAND')      ?: 'EasyHomeService';

// --- helpers ---
function out(array $payload, int $code = 200): void {
  http_response_code($code);
  echo json_encode($payload, JSON_UNESCAPED_UNICODE);
  exit;
}
function sanitize_phone(string $p): string {
  // keep digits and a leading + (E.164-ish)
  $p = preg_replace('/[^\d+]/', '', $p);
  // collapse to single leading +
  $p = preg_replace('/^\++/', '+', $p);
  return $p;
}
function vpost(string $url, array $params): array {
  $ch = curl_init($url);
  curl_setopt_array($ch, [
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => http_build_query($params),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => 20,
  ]);
  $res = curl_exec($ch);
  $err = curl_error($ch);
  curl_close($ch);
  return [$res, $err];
}
function msg(string $type, string $text): void {
  $_SESSION['_msgs'][] = ['type' => $type, 'message' => $text];
}
if (!isset($_SESSION['_msgs'])) $_SESSION['_msgs'] = [];

function state(): array {
  return [
    'has_active_request' => isset($_SESSION['request_id']),
    'request_id'         => $_SESSION['request_id'] ?? null,
    'phone'              => $_SESSION['phone'] ?? null,
    'brand'              => $_SESSION['brand'] ?? null,
  ];
}
function flush_msgs(): array {
  $m = $_SESSION['_msgs'] ?? [];
  $_SESSION['_msgs'] = [];
  return $m;
}

// --- read JSON body (fallback to form urlencoded for flexibility) ---
$raw = file_get_contents('php://input') ?: '';
$input = json_decode($raw, true);
if (!is_array($input)) {
  // fallback if frontend sends application/x-www-form-urlencoded
  $input = $_POST ?: [];
}

$action = $input['action'] ?? 'state';

// --- routes ---
if ($action === 'state') {
  out(['ok' => true, 'state' => state(), 'messages' => flush_msgs()]);
}

if ($action === 'start_verify') {
  $phone = sanitize_phone(trim((string)($input['phone'] ?? '')));
  $brand = trim((string)($input['brand'] ?? $DEFAULT_BRAND));

  if ($phone === '') {
    msg('danger', 'Please enter a phone number.');
    out(['ok' => false, 'state' => state(), 'messages' => flush_msgs()], 400);
  }
  if ($VONAGE_API_SECRET === '') {
    msg('danger', 'Server is missing VONAGE_API_SECRET.');
    out(['ok' => false, 'state' => state(), 'messages' => flush_msgs()], 500);
  }

  [$response, $err] = vpost('https://api.nexmo.com/verify/json', [
    'api_key'    => $VONAGE_API_KEY,
    'api_secret' => $VONAGE_API_SECRET,
    'number'     => $phone,
    'brand'      => $brand,
    // Optional extras:
    // 'code_length' => 4,
    // 'workflow_id' => 6, // SMS first, then other channels (see Vonage docs)
  ]);

  if ($err) {
    msg('danger', 'cURL error: ' . htmlspecialchars($err, ENT_QUOTES, 'UTF-8'));
    out(['ok' => false, 'state' => state(), 'messages' => flush_msgs()], 502);
  }

  $data = json_decode($response, true);
  if (($data['status'] ?? null) === '0') {
    $_SESSION['request_id'] = $data['request_id'] ?? null;
    $_SESSION['phone']      = $phone;
    $_SESSION['brand']      = $brand;
    msg('success', 'Verification started. OTP sent to ' . htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') . '.');
  } else {
    $status = $data['status'] ?? '?';
    $etext  = $data['error_text'] ?? 'Unknown error';
    msg('danger', "Verification failed (status {$status}): " . htmlspecialchars($etext, ENT_QUOTES, 'UTF-8'));
  }

  out(['ok' => true, 'state' => state(), 'messages' => flush_msgs()]);
}

if ($action === 'check_code') {
  $code = trim((string)($input['code'] ?? ''));
  $rid  = $_SESSION['request_id'] ?? null;

  if (!$rid) {
    msg('danger', 'No active verification found.');
    out(['ok'=>false, 'state'=>state(), 'messages'=>flush_msgs()], 400);
  }
  if ($code === '') {
    msg('danger', 'Please enter the OTP code.');
    out(['ok'=>false, 'state'=>state(), 'messages'=>flush_msgs()], 400);
  }

  [$response, $err] = vpost('https://api.nexmo.com/verify/check/json', [
    'api_key'    => $VONAGE_API_KEY,
    'api_secret' => $VONAGE_API_SECRET,
    'request_id' => $rid,
    'code'       => $code,
  ]);

  if ($err) {
    msg('danger', 'cURL error: ' . htmlspecialchars($err, ENT_QUOTES, 'UTF-8'));
    out(['ok'=>false, 'state'=>state(), 'messages'=>flush_msgs()], 502);
  }

  $data = json_decode($response, true);
  if (($data['status'] ?? null) === '0') {
    msg('success', '✅ Verification successful!');
    unset($_SESSION['request_id'], $_SESSION['phone']);
  } else {
    $status = $data['status'] ?? '?';
    $etext  = $data['error_text'] ?? 'Unknown error';
    msg('danger', "Verification check failed (status {$status}): " . htmlspecialchars($etext, ENT_QUOTES, 'UTF-8'));
  }

  out(['ok'=>true, 'state'=>state(), 'messages'=>flush_msgs()]);
}

if ($action === 'cancel_request') {
  $rid = $_SESSION['request_id'] ?? null;

  if (!$rid) {
    msg('warning', 'No active request to cancel.');
    out(['ok'=>false, 'state'=>state(), 'messages'=>flush_msgs()], 400);
  }

  [$response, $err] = vpost('https://api.nexmo.com/verify/control/json', [
    'api_key'    => $VONAGE_API_KEY,
    'api_secret' => $VONAGE_API_SECRET,
    'request_id' => $rid,
    'cmd'        => 'cancel',
  ]);

  if ($err) {
    msg('danger', 'cURL error: ' . htmlspecialchars($err, ENT_QUOTES, 'UTF-8'));
    out(['ok'=>false, 'state'=>state(), 'messages'=>flush_msgs()], 502);
  }

  $data = json_decode($response, true);
  if (($data['status'] ?? null) === '0') {
    msg('success', 'Request cancelled.');
    unset($_SESSION['request_id'], $_SESSION['phone']);
  } else {
    $status = $data['status'] ?? '?';
    $etext  = $data['error_text'] ?? 'Unknown error';
    msg('danger', "Cancel failed (status {$status}): " . htmlspecialchars($etext, ENT_QUOTES, 'UTF-8'));
  }

  out(['ok'=>true, 'state'=>state(), 'messages'=>flush_msgs()]);
}

// fallback
out(['ok'=>false, 'error'=>'Unknown action'], 400);

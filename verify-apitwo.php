<?php
// verify-api.php
session_start();
header('Content-Type: application/json');

// ==== CONFIG (secure this file; never commit the real secret) ====
$VONAGE_API_KEY    = '09bde122';        // keep or replace
$VONAGE_API_SECRET = 'X1LFsfynBqHu7Kl07YwN5bKL';                // <-- put your real secret here
$DEFAULT_BRAND     = 'EasyHomeService'; // fallback

// OTP validity + controls
const OTP_TTL        = 600;  // seconds, OTP lifetime
const RESEND_COOLDOWN= 55;  // seconds, wait before starting another request for same phone
const PHONE_HOURLY_MAX = 500; // per phone per hour
const IP_HOURLY_MAX    = 500;// per IP per hour

// const PHONE_HOURLY_MAX = 10; // per phone per hour
// const IP_HOURLY_MAX    = 10;// per IP per hour

// ---------- helpers ----------
function vget($url, $params) {
  $full = $url . '?' . http_build_query($params);
  $ch   = curl_init($full);
  curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 20,
  ]);
  $res = curl_exec($ch);
  $err = curl_error($ch);
  curl_close($ch);
  if ($err) return [null, $err];
  return [json_decode($res, true), null];
}
function now(){ return time(); }
// function norm_phone($p){ return preg_replace('/\D+/', '', $p); } // simple normalization
// replace your norm_phone() with this:
function norm_phone($p){
  $p = preg_replace('/[^\d+]/', '', $p); // keep digits and '+'
  if ($p && $p[0] !== '+') { $p = '+'.$p; }
  return $p;
}


// ---- APCu/FS kv store with TTL ----
function kv_get($key) {
  if (function_exists('apcu_fetch')) {
    $val = apcu_fetch($key);
    return $val ?: null;
  }
  $f = sys_get_temp_dir() . '/kv_' . md5($key) . '.json';
  if (!is_file($f)) return null;
  $j = @file_get_contents($f);
  if (!$j) return null;
  $val = json_decode($j, true);
  if (!$val) return null;
  if (isset($val['__exp']) && $val['__exp'] < now()) { @unlink($f); return null; }
  unset($val['__exp']);
  return $val;
}
function kv_set($key, $val, $ttl) {
  if (function_exists('apcu_store')) return apcu_store($key, $val, $ttl);
  $f = sys_get_temp_dir() . '/kv_' . md5($key) . '.json';
  $val['__exp'] = now() + $ttl;
  return (bool)@file_put_contents($f, json_encode($val));
}
function kv_del($key) {
  if (function_exists('apcu_delete')) { @apcu_delete($key); }
  $f = sys_get_temp_dir() . '/kv_' . md5($key) . '.json';
  if (is_file($f)) @unlink($f);
}

// ---- Locks & cooldowns (by phone) ----
function phone_lock_key($phone){ return 'otp_lock:' . $phone; }
function phone_cooldown_key($phone){ return 'otp_cd:' . $phone; }
function get_lock($phone){ return kv_get(phone_lock_key($phone)); }
function set_lock($phone, $request_id, $ttl=OTP_TTL){ return kv_set(phone_lock_key($phone), ['request_id'=>$request_id], $ttl); }
function clear_lock($phone){ kv_del(phone_lock_key($phone)); }
function set_cooldown($phone, $ttl=RESEND_COOLDOWN){ return kv_set(phone_cooldown_key($phone), ['v'=>1], $ttl); }
function in_cooldown($phone){ return kv_get(phone_cooldown_key($phone)) !== null; }

// ---- Rate limits ----
function rate_key_phone($phone){ return 'rl_phone:' . $phone . ':' . date('YmdH'); }
function rate_key_ip($ip){ return 'rl_ip:' . $ip . ':' . date('YmdH'); }
function incr_within_hour($key, $maxAllowed){
  $rec = kv_get($key);
  $count = $rec ? (int)$rec['c'] : 0;
  $count++;
  kv_set($key, ['c'=>$count], 3600 - (int)date('i')*60 - (int)date('s')); // expire at end of hour
  return $count <= $maxAllowed;
}

$action = $_REQUEST['action'] ?? '';

if ($action === 'start') {
  $rawPhone = trim($_POST['phone'] ?? $_GET['phone'] ?? '');
  $phone    = norm_phone($rawPhone);
  $brand    = trim($_POST['brand'] ?? $_GET['brand'] ?? $DEFAULT_BRAND);
  $ip       = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';

  if ($phone === '') {
    http_response_code(400);
    echo json_encode(['ok'=>false,'error'=>'Missing phone']); exit;
  }

  // Global site-wide protections (work across every page/form)
  // 1) Active verification lock?
  if ($existing = get_lock($phone)) {
    echo json_encode([
      'ok' => false,
      'error' => 'Verification already in progress for this number. Use the code sent or cancel and try again in a minute.',
      'request_id' => $existing['request_id']
    ]);
    exit;
  }

  // 2) Cooldown for the same phone?
  if (in_cooldown($phone)) {
    echo json_encode(['ok'=>false,'error'=>'Please wait a moment before requesting another code.']); exit;
  }

  // 3) Hourly rate limits
  if (!incr_within_hour(rate_key_phone($phone), PHONE_HOURLY_MAX)) {
    echo json_encode(['ok'=>false,'error'=>'Too many attempts for this number. Try again later.']); exit;
  }
  if (!incr_within_hour(rate_key_ip($ip), IP_HOURLY_MAX)) {
    echo json_encode(['ok'=>false,'error'=>'Too many attempts from your IP. Try again later.']); exit;
  }

  // Start Vonage Verify with 1-min expiry, SMS-only (no calls)
  [$data, $curlErr] = vget('https://api.nexmo.com/verify/json', [
    'api_key'     => $VONAGE_API_KEY,
    'api_secret'  => $VONAGE_API_SECRET,
    'number'      => $phone,
    'brand'       => $brand,
    'pin_expiry'  => OTP_TTL, // 60 seconds
    'workflow_id' => 4,       // SMS -> SMS (no TTS fallback)
  ]);

  if ($curlErr) { echo json_encode(['ok'=>false,'error'=>"cURL: $curlErr"]); exit; }

  if (isset($data['status']) && $data['status']==='0') {
    $reqId = $data['request_id'] ?? null;
    $_SESSION['verify_request_id'] = $reqId;
    $_SESSION['verify_phone']      = $phone;

    if ($reqId) set_lock($phone, $reqId, OTP_TTL);   // block other pages immediately
    set_cooldown($phone, RESEND_COOLDOWN);           // add resend cooldown window

    echo json_encode(['ok'=>true,'request_id'=>$reqId]);
  } else {
    // Surface Vonage errors (e.g., concurrent verifications)
    echo json_encode([
      'ok'=>false,
      'status'=>$data['status'] ?? '?',
      'error'=>$data['error_text'] ?? 'Unknown error'
    ]);
  }
  exit;
}

if ($action === 'check') {
  $code  = trim($_POST['code'] ?? $_GET['code'] ?? '');
  $req   = $_SESSION['verify_request_id'] ?? ($_POST['request_id'] ?? $_GET['request_id'] ?? '');
  $phone = $_SESSION['verify_phone']      ?? '';

  if ($req === '' || $code === '') {
    http_response_code(400);
    echo json_encode(['ok'=>false,'error'=>'Missing request_id or code']); exit;
  }

  [$data, $curlErr] = vget('https://api.nexmo.com/verify/check/json', [
    'api_key'    => $VONAGE_API_KEY,
    'api_secret' => $VONAGE_API_SECRET,
    'request_id' => $req,
    'code'       => $code,
  ]);

  if ($curlErr) { echo json_encode(['ok'=>false,'error'=>"cURL: $curlErr"]); exit; }

  if (isset($data['status']) && $data['status']==='0') {
    unset($_SESSION['verify_request_id']);
    if ($phone) clear_lock($phone); // release lock
    echo json_encode(['ok'=>true]);
  } else {
    echo json_encode([
      'ok'=>false,
      'status'=>$data['status'] ?? '?',
      'error'=>$data['error_text'] ?? 'Unknown error'
    ]);
  }
  exit;
}

if ($action === 'cancel') {
  $req   = $_SESSION['verify_request_id'] ?? ($_POST['request_id'] ?? $_GET['request_id'] ?? '');
  $phone = $_SESSION['verify_phone']      ?? (isset($_POST['phone']) ? norm_phone($_POST['phone']) : (isset($_GET['phone']) ? norm_phone($_GET['phone']) : ''));

  if ($req === '') { echo json_encode(['ok'=>false,'error'=>'No active request']); exit; }

  [$data, $curlErr] = vget('https://api.nexmo.com/verify/control/json', [
    'api_key'    => $VONAGE_API_KEY,
    'api_secret' => $VONAGE_API_SECRET,
    'request_id' => $req,
    'cmd'        => 'cancel',
  ]);

  if ($curlErr) { echo json_encode(['ok'=>false,'error'=>"cURL: $curlErr"]); exit; }

  if (isset($data['status']) && $data['status']==='0') {
    unset($_SESSION['verify_request_id']);
    if ($phone) clear_lock($phone);
    echo json_encode(['ok'=>true]);
  } else {
    echo json_encode(['ok'=>false,'status'=>$data['status'] ?? '?','error'=>$data['error_text'] ?? 'Unknown error']);
  }
  exit;
}

http_response_code(404);
echo json_encode(['ok'=>false,'error'=>'Unknown action']);

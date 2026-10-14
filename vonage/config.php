<?php
// vonage/config.php
// IMPORTANT: No whitespace/BOM before this line.
session_start();

/**
 * Frontend origin exactly as served (no trailing slash).
 * If your page calls these endpoints from the same origin,
 * you can also set this to the same site and skip CORS entirely.
 */
$ALLOWED_ORIGIN = 'https://easyhomeservice.com';

/**
 * CORS helper: emit Access-Control-Allow-Origin for allowed origin
 * and always set JSON Content-Type for API responses.
 */
function allow_origin(string $allowedOrigin): void {
  if (!empty($_SERVER['HTTP_ORIGIN']) && $_SERVER['HTTP_ORIGIN'] === $allowedOrigin) {
    header('Access-Control-Allow-Origin: ' . $allowedOrigin);
    header('Vary: Origin');
  }
  header('Content-Type: application/json; charset=utf-8');
}

/**
 * --- Handle CORS preflight early ---
 * If the browser sends OPTIONS (due to custom headers or cross-origin),
 * respond with allowed methods/headers and exit.
 */
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
  if (!empty($_SERVER['HTTP_ORIGIN']) && $_SERVER['HTTP_ORIGIN'] === $ALLOWED_ORIGIN) {
    header('Access-Control-Allow-Origin: ' . $ALLOWED_ORIGIN);
    header('Vary: Origin');
  }
  header('Access-Control-Allow-Methods: POST, OPTIONS');
  header('Access-Control-Allow-Headers: Content-Type, X-Requested-With');
  header('Access-Control-Max-Age: 86400');
  http_response_code(204); // No Content
  exit;
}

/**
 * Config: put real secrets in env vars (recommended) or outside webroot.
 */
$VONAGE_API_KEY    = getenv('09bde122')    ?: '09bde122';
$VONAGE_API_SECRET = getenv('X1LFsfynBqHu7Kl07YwN5bKL') ?: 'X1LFsfynBqHu7Kl07YwN5bKL'; // <-- set this!
$DEFAULT_BRAND     = getenv('VERIFY_BRAND')      ?: 'EasyHomeService';

/**
 * Require POST for API endpoints (call AFTER handling OPTIONS).
 */
 

// ... keep your existing config above ...

function require_api_request(array $methods = ['POST']): array {
  // Always set JSON content-type
  header('Content-Type: application/json; charset=utf-8');

  $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
  // Gracefully allow OPTIONS (CORS preflight) to return 204
  if ($method === 'OPTIONS') {
    http_response_code(204);
    exit;
  }

  if (!in_array($method, $methods, true)) {
    http_response_code(405);
    echo json_encode(['success'=>false,'message'=>"Method $method not allowed"]);
    exit;
  }

  // Return the input array for convenience
  return $method === 'POST' ? $_POST : $_GET;
}



function require_post_json(): void {
  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success'=>false,'message'=>'Method not allowed']);
    exit;
  }
  // Optional CSRF-ish check for same-origin AJAX:
  // if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest') {
  //   http_response_code(400);
  //   echo json_encode(['success'=>false,'message'=>'Invalid request']);
  //   exit;
  // }
}

/** Unified JSON response helper */
function respond(bool $ok, array $data = [], int $code = 200): void {
  http_response_code($code);
  echo json_encode(array_merge(['success'=>$ok], $data));
  exit;
}

/** Simple GET call wrapper to Vonage legacy Verify endpoints */
function vonage_get(string $baseUrl, array $params): array {
  $url = $baseUrl . '?' . http_build_query($params);
  $ch  = curl_init($url);
  curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 20,
    CURLOPT_SSL_VERIFYPEER => true,
  ]);
  $res = curl_exec($ch);
  $err = curl_error($ch);
  curl_close($ch);
  return [$res, $err];
}

/** Utilities */
function digits_only(string $s): string {
  return preg_replace('/\D+/', '', $s);
}

/**
 * Best-effort E.164 like your JS:
 * - 10 digits => assume US (+1)
 * - 8..15 digits => prefix +
 * - else => null
 */
function to_e164_from_digits($input): ?string {
  $s = digits_only((string)$input);
  if (strlen($s) === 10) return '+1'.$s;
  if (strlen($s) >= 8 && strlen($s) <= 15) return '+'.$s;
  return null;
}

/** Session-based rate limit per key (N requests per window) */
function rate_limit(string $key, int $limit = 5, int $windowSec = 60): bool {
    $now = time();
    if (!isset($_SESSION['rl'])) $_SESSION['rl'] = [];
    if (!isset($_SESSION['rl'][$key])) $_SESSION['rl'][$key] = [];

    // Keep only recent timestamps
    $_SESSION['rl'][$key] = array_values(array_filter(
        $_SESSION['rl'][$key],
        function ($t) use ($now, $windowSec) {
            return ($now - $t) < $windowSec;
        }
    ));

    if (count($_SESSION['rl'][$key]) >= $limit) {
        return false;
    }

    $_SESSION['rl'][$key][] = $now;
    return true;
}

/** Human-friendly Vonage Verify legacy error mapping */
function map_verify_error($status, $text = null): string {
  $map = [
    '1'  => 'Throttled. Too many concurrent requests.',
    '2'  => 'Your API key/secret are wrong.',
    '3'  => 'Invalid phone number.',
    '4'  => 'Quota exceeded for this account.',
    '5'  => 'Internal error at provider.',
    '6'  => 'Invalid code provided.',
    '7'  => 'Code attempts exhausted. Request a new code.',
    '8'  => 'Request timed out. Start again.',
    '9'  => 'Request was cancelled.',
    '10' => 'SMS failed or not delivered.',
    '15' => 'The destination number is blacklisted.',
    '16' => 'The destination number is barred.',
  ];
  return $map[$status] ?? ($text ?: 'Verification failed.');
}

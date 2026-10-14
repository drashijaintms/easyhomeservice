<?php
file_put_contents(
    __DIR__ . '/method-debug.log',
    date('c') . ' METHOD=' . $_SERVER['REQUEST_METHOD'] . PHP_EOL,
    FILE_APPEND
);

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '1');

header('Content-Type: application/json');

// =====================
// ALLOW POST ONLY
// =====================
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'code' => 'method_not_allowed']);
    exit;
}

// =====================
// BASIC INPUTS (FROM FORM)
// =====================
$fullName   = trim($_POST['name'] ?? '');
$email      = trim($_POST['email'] ?? '');
$phone      = trim($_POST['phone'] ?? '');
$message    = trim($_POST['message'] ?? 'Seeking for service');
$zipcode    = trim($_POST['zipcode'] ?? '');
$ipAddress  = $_POST['ipAddress'] ?? ($_SERVER['REMOTE_ADDR'] ?? '');
$formURL    = $_POST['formURL'] ?? '';
$source     = $_POST['source'] ?? '';
$clickid    = $_POST['clickid'] ?? '';

// TrustedForm / Jornaya
$trustedFormURL = $_POST['xxTrustedFormCertUrl'] ?? '';
$jornayaLeadId  = $_POST['universal_leadid'] ?? '';

// TCPA
$tcpaConsent          = $_POST['tcpaConsent'] ?? 'YES';
$tcpaConsentLanguage  = $_POST['tcpaConsentLanguage'] ?? '';

// UTM / Tracking
$eventid       = $_POST['eventid'] ?? '';
$utm_content   = $_POST['utm_content'] ?? '';
$utm_term      = $_POST['utm_term'] ?? '';
$utm_campaign  = $_POST['utm_campaign'] ?? '';
$utm_medium    = $_POST['utm_medium'] ?? '';
$utm_source    = $_POST['utm_source'] ?? '';
$fbc           = $_POST['fbc'] ?? '';
$fbp           = $_POST['fbp'] ?? '';
$gclid         = $_POST['gclid'] ?? '';
$http_referrer = $_POST['http_referrer'] ?? '';

// =====================
// VALIDATION
// =====================
if ($fullName === '' || $email === '' || $phone === '') {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'code' => 'missing_fields']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'code' => 'invalid_email']);
    exit;
}

// =====================
// NAME SPLIT
// =====================
$nameParts = explode(' ', preg_replace('/\s+/', ' ', $fullName), 2);
$firstName = $nameParts[0] ?? '';
$lastName  = $nameParts[1] ?? '';

// =====================
// BUILD PAYLOAD (MAPPED)
// =====================
$mapped = [
    'type'        => 'contactform',
    'service'     => 'homeservice',

    'firstName'   => $firstName,
    'lastName'    => $lastName,
    'email'       => $email,
    'phoneNumber' => $phone,
    'zipcode'     => $zipcode,
    'description' => $message,

    'ipAddress'   => $ipAddress,
    'landingPage' => $formURL,
    'source'      => $source,
    'clickid'     => $clickid,

    'trustedFormURL' => $trustedFormURL,
    'jornayaLeadId'  => $jornayaLeadId,

    'tcpaConsent'         => $tcpaConsent,
    'tcpaConsentLanguage' => $tcpaConsentLanguage,
    'userAgent'           => $_SERVER['HTTP_USER_AGENT'] ?? '',

    // UTM / tracking
    'eventid'      => $eventid,
    'utm_content'  => $utm_content,
    'utm_term'     => $utm_term,
    'utm_campaign' => $utm_campaign,
    'utm_medium'   => $utm_medium,
    'utm_source'   => $utm_source,
    'fbc'          => $fbc,
    'fbp'          => $fbp,
    'gclid'        => $gclid,
    'http_referrer'=> $http_referrer,
];

// =====================
// LOG FORM
// =====================
include_once __DIR__ . '/form-logger.php';
log_form_data($mapped);

// =====================
// SEND TO TOPPER API
// =====================
$server_url = "https://app.feedxo.io/api/v1/source/d32b41d1-ff84-40fa-aca3-0d0d493ddcf6/ingest?api_key=c994f8d0d4e1465f9afd46bbc96f955b";

$ch = curl_init($server_url);

curl_setopt_array($ch, [
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => http_build_query($mapped),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => 30,
    CURLOPT_HTTPHEADER     => ['Expect:'],
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlErr  = curl_error($ch);
curl_close($ch);

if ($response === false) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'code' => 'curl_failed',
        'error' => $curlErr
    ]);
    exit;
}

// =====================
// RESPONSE
// =====================
if ($httpCode >= 200 && $httpCode < 300) {
    echo json_encode(['status' => 'success']);
    exit;
}

http_response_code(500);
echo json_encode([
    'status' => 'error',
    'api_response' => $response
]);
exit;

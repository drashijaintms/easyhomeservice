<?php
header('Content-Type: application/json; charset=UTF-8');

function in_any($keys, $src) {
  foreach ((array)$keys as $k) {
    if (isset($src[$k]) && $src[$k] !== '') return $src[$k];
  }
  return null;
}

$req   = $_SERVER['REQUEST_METHOD'] === 'POST' ? $_POST : $_GET;
$debug = isset($req['debug']); // enable only when you append ?debug=1

$firstName   = in_any('firstName', $req);
$lastName    = in_any('lastName',  $req);
$email       = in_any('email',     $req);
$phone       = in_any(['phone','phoneNumber'], $req);
$zipcode     = in_any(['zipcode','zip'], $req);
$streetAddr  = in_any(['address','streetAddress'], $req);
$ipAddress   = in_any('ipAddress', $req);
$trustedForm = in_any(['xxTrustedFormCertUrl','trustedFormURL'], $req);
$clickid     = in_any('clickid', $req);
$source      = in_any('source', $req);
$tcpa        = in_any('tcpaConsent', $req);
$formURL     = in_any(['formURL','landingPage'], $req);
$tcpaLang    = in_any('tcpaConsentLanguage', $req);

// service / project values
$projectType = in_any(['projectType'], $req);                  // code like TUB_TO_WALKIN_SHOWER
$serviceType = in_any(['serviceType'], $req);                  // code (if you send it)
$serviceLbl  = in_any(['serviceLabel','service','service_type'],$req); // human label

// extras
$universal_leadid = in_any(['universal_leadid','leadid','leadid_token'], $req);
$eventid          = in_any('eventid', $req);
$utm_content      = in_any('utm_content', $req);
$utm_term         = in_any('utm_term', $req);
$utm_campaign     = in_any('utm_campaign', $req);
$utm_medium       = in_any('utm_medium', $req);
$utm_source       = in_any('utm_source', $req);
$fbc              = in_any('fbc', $req);
$fbp              = in_any('fbp', $req);
$gclid            = in_any('gclid', $req);

$user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';

// minimal validation
$errors = [];
if (!$firstName)   $errors[] = 'firstName is required';
if (!$lastName)    $errors[] = 'lastName is required';
if (!$email)       $errors[] = 'email is required';
if (!$phone)       $errors[] = 'phone is required';
if (!$zipcode)     $errors[] = 'zipcode is required';
if (!$projectType && !$serviceType && !$serviceLbl) $errors[] = 'service (projectType/serviceType/serviceLabel) is required';

if ($errors) {
  http_response_code(422);
  echo json_encode(['status'=>0,'message'=>'Validation error','errors'=>$debug ? $errors : null]);
  exit;
}

// map to provider; send multiple aliases to satisfy their schema
$svcCode = $serviceType ?: $projectType ?: $serviceLbl;
$svcText = $serviceLbl ?: $serviceType ?: $projectType;

$mapped = [
        'type' => 'stepsform-' . (!empty($service) ? $service : 'shower'),
  'apiId'              => '722DDDB89DF34798AA3698A0DAFC5094',
  'apiPassword'        => '0e79023a04',
  'productId'          => '265',

  'trustedFormURL'     => $trustedForm,
  'universal_leadid'   => $universal_leadid,

  'tcpaConsentLanguage'=> $tcpaLang,
  'userAgent'          => $user_agent,

  'ipAddress'          => $ipAddress,
  'tcpaConsent'        => $tcpa,
  'clickid'            => $clickid,
  'source'             => $source,

  'email'              => $email,
  'phoneNumber'        => $phone,
  'zipcode'            => $zipcode,

  'firstName'          => $firstName,
  'lastName'           => $lastName,
  'streetAddress'      => $streetAddr,
  'landingPage'        => $formURL,

  // service aliases
  'projectType'        => $svcCode,
  'serviceType'        => $svcCode,
  'service'            => $svcText,
  'service_type'       => $svcText,

  'eventid'            => $eventid,
  'utm_content'        => $utm_content,
  'utm_term'           => $utm_term,
  'utm_campaign'       => $utm_campaign,
  'utm_medium'         => $utm_medium,
  'utm_source'         => $utm_source,
  'fbc'                => $fbc,
  'fbp'                => $fbp,
  'gclid'              => $gclid,
        'http_referrer' => $http_referrer,
];

// use the more general shower category
$server_url = "https://app.feedxo.io/api/v1/source/d32b41d1-ff84-40fa-aca3-0d0d493ddcf6/ingest?api_key=c994f8d0d4e1465f9afd46bbc96f955b";

// cURL
$ch = curl_init($server_url);
curl_setopt_array($ch, [
  CURLOPT_POST           => true,
  CURLOPT_POSTFIELDS     => http_build_query($mapped),
  CURLOPT_HTTPHEADER     => ['Expect:'],
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HEADER         => true,  // capture headers + body (for debug)
  CURLOPT_TIMEOUT        => 60,
  CURLOPT_CONNECTTIMEOUT => 15,
  CURLOPT_SSL_VERIFYPEER => true,
  CURLOPT_SSL_VERIFYHOST => 2,
  CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
]);

$response = curl_exec($ch);
$errno    = curl_errno($ch);
$error    = curl_error($ch);
$info     = curl_getinfo($ch);
curl_close($ch);

if ($errno) {
  http_response_code(502);
  echo json_encode([
    'status'=>0,
    'message'=>'Upstream transport error',
    'debug' => $debug ? ['errno'=>$errno,'error'=>$error] : null
  ]);
  exit;
}

// split headers/body
$headerSize = $info['header_size'] ?? 0;
$rawHeaders = substr($response, 0, $headerSize);
$body       = substr($response, $headerSize);
$httpCode   = (int)($info['http_code'] ?? 0);

// try parse JSON
$prov = json_decode($body, true);
$provStatus = is_array($prov) && isset($prov['status']) ? (int)$prov['status'] : null;

if ($provStatus === 1) {
  echo json_encode(['status'=>1]);
  exit;
}

// rejected
if ($httpCode < 200 || $httpCode >= 300) {
  http_response_code(502);
}

echo json_encode([
  'status'  => 0,
  'message' => 'Provider rejected lead',
  // show diagnostics only when ?debug=1
  'debug'   => $debug ? [
    'http_code' => $httpCode,
    'provider'  => $prov !== null ? $prov : $body,
    'headers'   => $rawHeaders,
    'sent'      => $mapped, // useful once; remove later if sensitive
  ] : null
]);

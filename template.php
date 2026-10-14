<?php // make-jwt.php
function b64url($s){ return rtrim(strtr(base64_encode($s), '+/', '-_'), '='); }
function now(){ return time(); }
$appId = '49ea29fc-547d-486b-9980-b9f099fea829';
$privatePem = file_get_contents(__DIR__ . '/private.key');
$header = ['alg'=>'RS256','typ'=>'JWT'];
$iat = now();
$payload = [
  'application_id'=>$appId,'iat'=>$iat,'nbf'=>$iat,'exp'=>$iat+600,'jti'=>bin2hex(random_bytes(8))
];
$segments = [ b64url(json_encode($header)), b64url(json_encode($payload)) ];
$input = implode('.', $segments);
openssl_sign($input, $sig, openssl_pkey_get_private($privatePem), OPENSSL_ALGO_SHA256);
echo $input.'.'.b64url($sig);

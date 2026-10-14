<?php

header('Content-Type: application/json; charset=UTF-8');
header('X-Content-Type-Options: nosniff');

/*
|--------------------------------------------------------------------------
| Allow POST Only
|--------------------------------------------------------------------------
*/

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    http_response_code(405);

    echo json_encode([
        'success' => false,
        'message' => 'Invalid request method.'
    ]);

    exit;
}


/*
|--------------------------------------------------------------------------
| Feedxo Configuration
|--------------------------------------------------------------------------
|
| IMPORTANT:
| Keep the Feedxo API URL and API key ONLY in this PHP file.
|
*/

$feedxoUrl =
    'https://app.feedxo.io/api/v1/source/d32b41d1-ff84-40fa-aca3-0d0d493ddcf6/ingest';

/*
|--------------------------------------------------------------------------
| PUT YOUR NEW FEEDXO API KEY HERE
|--------------------------------------------------------------------------
*/

$feedxoApiKey = 'c994f8d0d4e1465f9afd46bbc96f955b';


/*
|--------------------------------------------------------------------------
| Helper: Validation Error
|--------------------------------------------------------------------------
*/

function validationError($message)
{
    http_response_code(400);

    echo json_encode([
        'success' => false,
        'message' => $message
    ]);

    exit;
}


/*
|--------------------------------------------------------------------------
| Get POST Values
|--------------------------------------------------------------------------
*/

$firstName   = trim($_POST['firstName'] ?? '');
$lastName    = trim($_POST['lastName'] ?? '');
$fullName    = trim($_POST['fullName'] ?? '');
$email       = trim($_POST['email'] ?? '');
$phoneNumber = trim($_POST['phoneNumber'] ?? '');
$address     = trim($_POST['address'] ?? '');
$zipcode     = trim($_POST['zipcode'] ?? '');
$service     = trim($_POST['service'] ?? '');
$consent     = trim($_POST['consent'] ?? '');


/*
|--------------------------------------------------------------------------
| Get Visitor IP From Server
|--------------------------------------------------------------------------
|
| Do NOT trust IP sent by browser.
|
*/

$ipAddress = $_SERVER['REMOTE_ADDR'] ?? '';


/*
|--------------------------------------------------------------------------
| Honeypot
|--------------------------------------------------------------------------
*/

$honeypot = trim($_POST['website'] ?? '');

if ($honeypot !== '') {

    error_log(
        'Lead honeypot triggered. IP: ' . $ipAddress
    );

    http_response_code(400);

    echo json_encode([
        'success' => false,
        'message' => 'Invalid request.'
    ]);

    exit;
}


/*
|--------------------------------------------------------------------------
| Consent Validation
|--------------------------------------------------------------------------
*/

if ($consent !== '1') {

    validationError(
        'You must agree to the terms to proceed.'
    );
}


/*
|--------------------------------------------------------------------------
| Maximum Length Validation
|--------------------------------------------------------------------------
*/

if (strlen($fullName) > 200) {

    validationError(
        'Invalid full name.'
    );
}

if (strlen($email) > 254) {

    validationError(
        'Invalid email address.'
    );
}

if (strlen($phoneNumber) > 20) {

    validationError(
        'Invalid phone number.'
    );
}

if (strlen($address) > 250) {

    validationError(
        'Invalid address.'
    );
}

if (strlen($zipcode) > 10) {

    validationError(
        'Invalid ZIP code.'
    );
}


/*
|--------------------------------------------------------------------------
| Full Name Validation
|--------------------------------------------------------------------------
|
| Allows:
| Letters
| Spaces
| Period
| Apostrophe
| Hyphen
|
*/

if ($fullName === '') {

    validationError(
        'Please enter your full name.'
    );
}

if (!preg_match("/^[A-Za-z .'-]+$/", $fullName)) {

    validationError(
        'Please enter a valid full name.'
    );
}


/*
|--------------------------------------------------------------------------
| Split Full Name
|--------------------------------------------------------------------------
*/

$nameParts = preg_split('/\s+/', $fullName);

$firstName = $nameParts[0] ?? '';

$lastName = '';

if (count($nameParts) > 1) {

    $lastName = implode(
        ' ',
        array_slice($nameParts, 1)
    );
}


/*
|--------------------------------------------------------------------------
| Email Validation
|--------------------------------------------------------------------------
*/

if ($email === '') {

    validationError(
        'Email address is required.'
    );
}


/*
|--------------------------------------------------------------------------
| Allowed Email Characters
|--------------------------------------------------------------------------
|
| Allowed:
| A-Z
| a-z
| 0-9
| .
| _
| -
| @
|
*/

if (!preg_match('/^[A-Za-z0-9._@-]+$/', $email)) {

    validationError(
        'Email address contains invalid characters.'
    );
}


/*
|--------------------------------------------------------------------------
| Exactly One @
|--------------------------------------------------------------------------
*/

if (substr_count($email, '@') !== 1) {

    validationError(
        'Please enter a valid email address.'
    );
}


/*
|--------------------------------------------------------------------------
| Email Structure
|--------------------------------------------------------------------------
*/

$emailPattern =
    '/^[A-Za-z0-9][A-Za-z0-9._-]*@' .
    '[A-Za-z0-9][A-Za-z0-9.-]*\.' .
    '[A-Za-z]{2,}$/';

if (!preg_match($emailPattern, $email)) {

    validationError(
        'Please enter a valid email address.'
    );
}


/*
|--------------------------------------------------------------------------
| Reject Consecutive Dots
|--------------------------------------------------------------------------
*/

if (strpos($email, '..') !== false) {

    validationError(
        'Please enter a valid email address.'
    );
}


/*
|--------------------------------------------------------------------------
| Email Parts
|--------------------------------------------------------------------------
*/

$emailParts = explode('@', $email, 2);

$emailUser   = $emailParts[0] ?? '';
$emailDomain = $emailParts[1] ?? '';


/*
|--------------------------------------------------------------------------
| Email Username Validation
|--------------------------------------------------------------------------
*/

if (
    $emailUser === '' ||
    substr($emailUser, 0, 1) === '.' ||
    substr($emailUser, -1) === '.'
) {

    validationError(
        'Please enter a valid email address.'
    );
}


/*
|--------------------------------------------------------------------------
| Email Domain Validation
|--------------------------------------------------------------------------
*/

if (
    $emailDomain === '' ||
    substr($emailDomain, 0, 1) === '.' ||
    substr($emailDomain, -1) === '.'
) {

    validationError(
        'Please enter a valid email address.'
    );
}


/*
|--------------------------------------------------------------------------
| Domain Cannot Start / End With Hyphen
|--------------------------------------------------------------------------
*/

if (
    substr($emailDomain, 0, 1) === '-' ||
    substr($emailDomain, -1) === '-'
) {

    validationError(
        'Please enter a valid email address.'
    );
}


/*
|--------------------------------------------------------------------------
| Phone Validation
|--------------------------------------------------------------------------
|
| Exactly 10 digits.
|
*/

if (!preg_match('/^\d{10}$/', $phoneNumber)) {

    validationError(
        'Please enter a valid 10-digit phone number.'
    );
}


/*
|--------------------------------------------------------------------------
| ZIP Validation
|--------------------------------------------------------------------------
|
| Exactly 5 digits.
|
*/

if (!preg_match('/^\d{5}$/', $zipcode)) {

    validationError(
        'Please enter a valid 5-digit ZIP code.'
    );
}


/*
|--------------------------------------------------------------------------
| Address Validation
|--------------------------------------------------------------------------
|
| Address allows normal punctuation:
|
| ,
| .
| #
| /
| \
| -
| _
| '
| "
| (
| )
| &
| %
| :
| ;
| +
| =
| @
|
| Only control characters and NULL bytes are rejected.
|
*/

if ($address !== '') {

    if (
        preg_match(
            '/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/',
            $address
        )
    ) {

        validationError(
            'Invalid characters detected in address.'
        );
    }
}


/*
|--------------------------------------------------------------------------
| Service Validation
|--------------------------------------------------------------------------
*/

$allowedServices = [
    'roofing',
    'windows',
    'hvac',
    'plumbing',
    'bathroom',
    'solar',
    'gutter',
    'homewarranty',
    'homesecurity',
    'pestcontrol',
    'waterdamage'
];

if (!in_array($service, $allowedServices, true)) {

    validationError(
        'Invalid service selected.'
    );
}


/*
|--------------------------------------------------------------------------
| Validate Server IP
|--------------------------------------------------------------------------
*/

if (
    $ipAddress === '' ||
    !filter_var(
        $ipAddress,
        FILTER_VALIDATE_IP
    )
) {

    error_log(
        'Invalid server IP detected: ' .
        $ipAddress
    );

    validationError(
        'Unable to identify your IP address.'
    );
}


/*
|--------------------------------------------------------------------------
| Fixed Values
|--------------------------------------------------------------------------
*/

$formName = 'blogform';
$source   = 'blogform';
$formType = 'blogform';


/*
|--------------------------------------------------------------------------
| Prepare Feedxo Payload
|--------------------------------------------------------------------------
*/

$postData = [

    'firstName'   => $firstName,

    'lastName'    => $lastName,

    'fullName'    => $fullName,

    'email'       => $email,

    'phoneNumber' => $phoneNumber,

    'address'     => $address,

    'zipcode'     => $zipcode,

    'service'     => $service,

    'ip'          => $ipAddress,

    'form_name'   => $formName,

    'source'      => $source,

    'formType'    => $formType
];


/*
|--------------------------------------------------------------------------
| Check cURL
|--------------------------------------------------------------------------
*/

if (!function_exists('curl_init')) {

    error_log(
        'cURL extension is not enabled.'
    );

    http_response_code(500);

    echo json_encode([
        'success' => false,
        'message' => 'Server configuration error.'
    ]);

    exit;
}


/*
|--------------------------------------------------------------------------
| Send Request To Feedxo
|--------------------------------------------------------------------------
*/

$ch = curl_init();

curl_setopt_array(
    $ch,
    [

        CURLOPT_URL =>
            $feedxoUrl .
            '?api_key=' .
            urlencode($feedxoApiKey),

        CURLOPT_POST => true,

        CURLOPT_POSTFIELDS =>
            http_build_query(
                $postData,
                '',
                '&'
            ),

        CURLOPT_RETURNTRANSFER => true,

        CURLOPT_TIMEOUT => 15,

        CURLOPT_CONNECTTIMEOUT => 5,

        CURLOPT_FOLLOWLOCATION => false,

        CURLOPT_HTTPHEADER => [
            'Content-Type: application/x-www-form-urlencoded',
            'Accept: application/json'
        ]

    ]
);


/*
|--------------------------------------------------------------------------
| Execute
|--------------------------------------------------------------------------
*/

$response = curl_exec($ch);


/*
|--------------------------------------------------------------------------
| Get HTTP Status
|--------------------------------------------------------------------------
*/

$httpCode = curl_getinfo(
    $ch,
    CURLINFO_HTTP_CODE
);


/*
|--------------------------------------------------------------------------
| Get cURL Error
|--------------------------------------------------------------------------
*/

$curlError = curl_error($ch);


/*
|--------------------------------------------------------------------------
| Close
|--------------------------------------------------------------------------
*/

curl_close($ch);


/*
|--------------------------------------------------------------------------
| cURL Error
|--------------------------------------------------------------------------
*/

if ($curlError) {

    error_log(
        'Feedxo CURL Error: ' .
        $curlError .
        ' | IP: ' .
        $ipAddress
    );

    http_response_code(500);

    echo json_encode([
        'success' => false,
        'message' =>
            'Unable to process your request. Please try again.'
    ]);

    exit;
}


/*
|--------------------------------------------------------------------------
| Feedxo Success
|--------------------------------------------------------------------------
*/

if (
    $httpCode >= 200 &&
    $httpCode < 300
) {

    echo json_encode([
        'success' => true,
        'message' =>
            'Thank you! Your quote request has been submitted successfully.'
    ]);

    exit;
}


/*
|--------------------------------------------------------------------------
| Feedxo Error
|--------------------------------------------------------------------------
|
| Do not expose Feedxo response/API details to browser.
|
*/

error_log(
    'Feedxo API Error' .
    ' | HTTP Code: ' .
    $httpCode .
    ' | IP: ' .
    $ipAddress .
    ' | Response: ' .
    $response
);


/*
|--------------------------------------------------------------------------
| Return Error To Frontend
|--------------------------------------------------------------------------
*/

http_response_code(502);

echo json_encode([
    'success' => false,
    'message' =>
        'Unable to submit your request. Please try again.'
]);

exit;
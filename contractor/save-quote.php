<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /contractor/index.php#get-quote');
    exit;
}

$storageDir = __DIR__ . '/data';

if (!is_dir($storageDir)) {
    if (!mkdir($storageDir, 0755, true)) {
        http_response_code(500);
        exit('Unable to create storage directory.');
    }
}

$file = $storageDir . '/quote-submissions.csv';

$name      = trim($_POST['name'] ?? '');
$phone     = trim($_POST['phone'] ?? '');
$email     = trim($_POST['email'] ?? '');
$company   = trim($_POST['company'] ?? '');
$zip       = trim($_POST['zip'] ?? '');
$state     = trim($_POST['state'] ?? '');
$leadType  = trim($_POST['lead_type'] ?? '');
$consent   = isset($_POST['consent']) ? 'Yes' : 'No';

if (
    $name === '' ||
    $phone === '' ||
    $email === '' ||
    $company === '' ||
    $zip === '' ||
    $state === '' ||
    $leadType === ''
) {
    http_response_code(400);
    exit('Please complete all required fields.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    exit('Please enter a valid email address.');
}

if (!preg_match('/^[0-9]{5}$/', $zip)) {
    http_response_code(400);
    exit('Please enter a valid 5-digit ZIP code.');
}

if ($consent !== 'Yes') {
    http_response_code(400);
    exit('Consent is required.');
}

$submittedAt = date('Y-m-d H:i:s');

$isNewFile = !file_exists($file) || filesize($file) === 0;

$handle = fopen($file, 'a');

if ($handle === false) {
    http_response_code(500);
    exit('Unable to save your information. Please try again.');
}

if (!flock($handle, LOCK_EX)) {
    fclose($handle);
    http_response_code(500);
    exit('Unable to lock the submission file.');
}

if ($isNewFile) {
    fputcsv($handle, [
        'Submitted At',
        'Full Name',
        'Phone Number',
        'Business Email',
        'Company Name',
        'Zip Code',
        'State',
        'Lead Type',
        'Consent'
    ]);
}

fputcsv($handle, [
    $submittedAt,
    $name,
    $phone,
    $email,
    $company,
    $zip,
    $state,
    $leadType,
    $consent
]);

flock($handle, LOCK_UN);
fclose($handle);

header('Location: https://calendly.com/rishabhmishra-easyhomeservice/30min');
exit;

?>
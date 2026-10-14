<?php

// Set timezone for accurate timestamp logging
date_default_timezone_set('America/New_York');

// Handle CORS and preflight OPTIONS request
if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
} else {
    header('Access-Control-Allow-Origin: *');
}
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit(0);
}

// Reliable AJAX detection
$isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
    || (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false)
    || isset($_POST['is_ajax'])
    || isset($_REQUEST['is_ajax']);

function sendResponse($success, $message, $redirectUrl = null, $statusCode = 200, $isAjax = false) {
    if ($isAjax) {
        http_response_code($statusCode);
        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode([
            'success' => $success,
            'message' => $message,
            'redirect_url' => $redirectUrl
        ]);
        exit;
    }

    if ($success && $redirectUrl) {
        header('Location: ' . $redirectUrl, true, 303);
        exit;
    }

    http_response_code($statusCode);
    echo '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Submission Status</title><meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"></head><body class="bg-light p-4"><div class="container py-5"><div class="card shadow-sm p-4 text-center mx-auto" style="max-width:500px;"><h3 class="' . ($success ? 'text-success' : 'text-danger') . ' mb-3">' . ($success ? 'Success' : 'Notice') . '</h3><p class="text-muted">' . htmlspecialchars($message, ENT_QUOTES, 'UTF-8') . '</p><a href="javascript:history.back()" class="btn btn-primary mt-3">Return to Form</a></div></div></body></html>';
    exit;
}

// Handle non-POST or redirected requests gracefully
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    if (empty($_POST) && !empty($_GET['name']) && !empty($_GET['email'])) {
        // Fallback for proxies that rewrite POST to GET
        $_POST = $_GET;
    } else if (empty($_POST) && empty($_GET)) {
        // Direct browser URL visit to process-booking.php -> Redirect to index
        header('Location: index.php', true, 302);
        exit;
    } else {
        sendResponse(false, 'Please submit the form to proceed.', null, 400, $isAjax);
    }
}

// Ensure protected data directory exists
$dataDir = __DIR__ . '/data';
if (!is_dir($dataDir)) {
    if (!@mkdir($dataDir, 0755, true)) {
        sendResponse(false, 'Server storage directory is not writable. Please try again later.', null, 500, $isAjax);
    }
}

// Protect data folder with .htaccess if missing
$htaccessFile = $dataDir . '/.htaccess';
if (!file_exists($htaccessFile)) {
    @file_put_contents($htaccessFile, "<IfModule authz_core_module>\nRequire all denied\n</IfModule>\n<IfModule !authz_core_module>\nDeny from all\n</IfModule>\n");
}

// Protect data folder with index.php if missing
$indexGuardFile = $dataDir . '/index.php';
if (!file_exists($indexGuardFile)) {
    @file_put_contents($indexGuardFile, "<?php http_response_code(403); exit('Access denied.');");
}

$file = $dataDir . '/quote-submissions.csv';

// Retrieve and sanitize form inputs
$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$email = trim($_POST['email'] ?? '');
$company = trim($_POST['company'] ?? '');
$zip = trim($_POST['zip'] ?? '');
$state = trim($_POST['state'] ?? '');
$leadType = trim($_POST['lead_type'] ?? '');
$consent = isset($_POST['consent']) ? 'Yes' : 'No';

// Validation checks
if (
    $name === '' ||
    $phone === '' ||
    $email === '' ||
    $company === '' ||
    $zip === '' ||
    $state === '' ||
    $leadType === ''
) {
    sendResponse(false, 'Please complete all required fields.', null, 422, $isAjax);
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    sendResponse(false, 'Please enter a valid business email address.', null, 422, $isAjax);
}

if (!preg_match('/^[0-9]{5}$/', $zip)) {
    sendResponse(false, 'Please enter a valid 5-digit US ZIP code.', null, 422, $isAjax);
}

if ($consent !== 'Yes') {
    sendResponse(false, 'Please confirm your authorization and consent to proceed.', null, 422, $isAjax);
}

// Store submission in protected CSV with atomic file locking
$handle = @fopen($file, 'a');
if (!$handle) {
    sendResponse(false, 'Unable to save your request to the database. Please try again.', null, 500, $isAjax);
}

if (!flock($handle, LOCK_EX)) {
    fclose($handle);
    sendResponse(false, 'Server is busy processing submissions. Please try again in a moment.', null, 500, $isAjax);
}

// If new file or empty, write CSV header
if (filesize($file) === 0) {
    fputcsv($handle, [
        'Submitted At (EST)',
        'Full Name',
        'Phone Number',
        'Business Email',
        'Company Name',
        'Zip Code',
        'State',
        'Lead Type',
        'Consent',
        'IP Address',
        'User Agent'
    ]);
}

$ipAddress = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';

$writeSuccess = fputcsv($handle, [
    date('Y-m-d H:i:s'),
    $name,
    $phone,
    $email,
    $company,
    $zip,
    $state,
    $leadType,
    $consent,
    $ipAddress,
    $userAgent
]);

fflush($handle);
flock($handle, LOCK_UN);
fclose($handle);

if ($writeSuccess === false) {
    sendResponse(false, 'An unexpected error occurred while writing your submission. Please try again.', null, 500, $isAjax);
}

// Redirect URL only on successful save
$calendlyUrl = 'https://calendly.com/rishabhmishra-easyhomeservice/30min';
sendResponse(true, 'Your request has been successfully recorded.', $calendlyUrl, 200, $isAjax);
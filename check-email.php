<?php
header('Content-Type: application/json');

// Check if email parameter exists
if (!isset($_GET['email'])) {
    echo json_encode(['success' => false, 'message' => 'Email missing']);
    exit;
}

$email = urlencode($_GET['email']);

// API keys
$api_key_paid = 'jM6vBifjiqmR9kQPgCFuU2XewtrO2jwN';  // Paid key
$api_key_free = 'Fvkze5ZHF4rv45ZVVHXD0zlth8t0RxFh';  // Free key

// Function to call IPQualityScore API
function call_ipqs_api($email, $api_key) {
    $url = "https://ipqualityscore.com/api/json/email/$api_key/$email?timeout=5";
    $response = @file_get_contents($url);

    if ($response === FALSE) {
        return ['success' => false, 'message' => 'Request failed'];
    }

    $data = json_decode($response, true);
    if ($data === null) {
        return ['success' => false, 'message' => 'Invalid JSON response'];
    }

    return $data;
}

// Step 1: Try with paid API key
$result = call_ipqs_api($email, $api_key_paid);

// Step 2: If "success" is false, retry using free key
if (isset($result['success']) && $result['success'] === false) {
    $result = call_ipqs_api($email, $api_key_free);
    $result['using_free_api'] = true;
} else {
    $result['using_free_api'] = false;
}

// Output the final JSON result
echo json_encode($result);
?>

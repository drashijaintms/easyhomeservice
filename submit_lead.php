<meta name="robots" content="noindex, nofollow">
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Accept GET only
$data = $_GET;

// DB Connection
$conn = new mysqli(
    "localhost",
    "easyhomeservi_contactform",
    "easyhomeservi_contactform",
    "easyhomeservi_contactform"
);

if ($conn->connect_error) {
    exit("db_error");
}

// Fetch data
$fullName = trim($data['name'] ?? '');
$phone    = trim($data['phone'] ?? '');
$email    = trim($data['email'] ?? '');
$zipcode  = trim($data['zipcode'] ?? '');
$service  = trim($data['service'] ?? '');
$page_url = trim($data['page_url'] ?? '');

// Clean phone (extra safety)
$phone = preg_replace('/\D+/', '', $phone);

// ===============================
// VALIDATION
// ===============================
$errors = [];

if ($fullName === '') $errors[] = "name";
if ($phone === '' || strlen($phone) !== 10) $errors[] = "phone";
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "email";
if ($service === '') $errors[] = "service";

if (!empty($errors)) {
    echo "validation_error";
    exit;
}

// ===============================
// SPLIT FULL NAME
// ===============================
$nameParts = preg_split('/\s+/', $fullName);
$last_name = array_pop($nameParts);
$first_name = implode(' ', $nameParts);

if ($first_name === '') {
    $first_name = $last_name;
    $last_name = '';
}

// ===============================
// INSERT
// ===============================
$sql = "INSERT INTO shortleads
(created_at, url, first_name, last_name, phonenumber, email, zipcode, service)
VALUES (NOW(), ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "sssssss",
    $page_url,
    $first_name,
    $last_name,
    $phone,
    $email,
    $zipcode,
    $service
);

if ($stmt->execute()) {
    header("Location: https://easyhomeservice.com/thank-you");
    exit;
}

echo "insert_failed";
$stmt->close();
$conn->close();
?>
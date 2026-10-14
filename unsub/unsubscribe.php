<?php
$host = 'localhost';
$db = 'easyhomeservi_contactform';
$user = 'easyhomeservi_contactform';
$pass = 'easyhomeservi_contactform';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    http_response_code(500);
    echo "Database connection failed.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $email = trim($_POST['email']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Invalid email address.";
        exit;
    }

    $email_hash = md5(strtolower($email));

    // Check if the hash already exists
    $check = $conn->prepare("SELECT id FROM unsubscribes WHERE email_hash = ?");
    $check->bind_param("s", $email_hash);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        http_response_code(200);
        echo "You're already unsubscribed.";
    } else {
        // Insert new hash
        $stmt = $conn->prepare("INSERT INTO unsubscribes (email_hash) VALUES (?)");
        $stmt->bind_param("s", $email_hash);

        if ($stmt->execute()) {
            echo "You've been successfully unsubscribed.";
        } else {
            http_response_code(500);
            echo "Failed to process your request.";
        }

        $stmt->close();
    }

    $check->close();
} else {
    http_response_code(400);
    echo "Invalid request.";
}

$conn->close();
?>

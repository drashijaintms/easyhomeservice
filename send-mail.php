<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = "drashijain.tms@gmail.com"; // Recipient's email address
    $subject = "New Contact Form Submission";

    // Set headers
    $headers = "From: service@easyhomeservice.com" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Message: $message\n";

    // Additional headers (optional)
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/plain; charset=UTF-8' . "\r\n";

    if ($email) { // Proceed only if email is valid
        if (mail($to, $subject, $body, $headers)) {
            echo json_encode(['status' => 'success', 'message' => 'Email sent successfully!']);
        } else {
            error_log("Failed to send email: " . error_get_last()['message']);
            echo json_encode(['status' => 'error', 'message' => 'Failed to send email.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email address.']);
    }
}
?>

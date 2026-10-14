<?php
header('Content-Type: application/json'); // Ensure JSON response
$response = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Include database connection
    require 'dbconnect.php';

    // Collect and sanitize inputs
    $postId = intval($_POST['postId']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);
    $postingDate = date('Y-m-d H:i:s'); // Current timestamp

    // Insert into database
    $query = "INSERT INTO tblcomments (postId, name, email, comment, postingDate, status) 
              VALUES ('$postId', '$name', '$email', '$comment', '$postingDate', 0)"; // 0 for pending approval

    if (mysqli_query($conn, $query)) {
        $response['success'] = true;
        $response['message'] = 'Comment submitted successfully! It will appear once approved.';
    } else {
        $response['success'] = false;
        $response['message'] = 'Error submitting comment: ' . mysqli_error($conn);
    }
} else {
    $response['success'] = false;
    $response['message'] = 'Invalid request.';
}

// Return JSON response
echo json_encode($response);
?>

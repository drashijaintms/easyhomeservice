<?php
// Start session
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_SESSION['form_submitted'])) {
    // Get the email and escape it to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Create the SQL query
    $sql = "INSERT INTO tblemails (email) VALUES ('$email')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        $_SESSION['form_submitted'] = true;
        echo "<div class='alert alert-success'>Newsletter created successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }

    // Close the connection
    $conn->close();
} else {
    echo "<div class='alert alert-warning'>Form has already been submitted.</div>";
}

// Unset session variable to allow for new submissions
unset($_SESSION['form_submitted']);
?>
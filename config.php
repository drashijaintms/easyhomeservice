<?php
$servername = "localhost";
$username = "qqoophoh_easyhomeservi_contactform";
$password = "qqoophoh_easyhomeservi_contactform";
$dbname = "qqoophoh_easyhomeservi_contactform";

// Create connection
mysqli_report(MYSQLI_REPORT_OFF);
$conn = @new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
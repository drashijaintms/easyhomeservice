<?php
$servername = "localhost";
$username = "easyhomeservi_contactform";
$password = "easyhomeservi_contactform";
$dbname = "easyhomeservi_contactform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
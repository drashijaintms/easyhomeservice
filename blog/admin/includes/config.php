<?php
define('DB_SERVER','localhost');
define('DB_USER','easyhomeservice_mainblog');
define('DB_PASS','easyhomeservice_mainblog');
define('DB_NAME','easyhomeservice_mainblog');

$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// VERY IMPORTANT
mysqli_set_charset($con, "utf8mb4");
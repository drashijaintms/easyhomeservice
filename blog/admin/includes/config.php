<?php
define('DB_SERVER','localhost');
define('DB_USER','qqoophoh_easyhomeservice_blog');
define('DB_PASS','qqoophoh_easyhomeservice_blog');
define('DB_NAME','qqoophoh_easyhomeservice_blog');

$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// VERY IMPORTANT
mysqli_set_charset($con, "utf8mb4");
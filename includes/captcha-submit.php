<?php

header('Content-Type: application/json');

$secret = "6LfcTI4sAAAAAKLG1Bw2dlHBbSTkwt4wIFW_ERyl";

$captcha = $_POST['g-recaptcha-response'] ?? '';

if (!$captcha) {
    echo json_encode(["status"=>"error","msg"=>"Captcha missing"]);
    exit;
}

// verify with Google
$verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
$response = json_decode($verify, true);

if (!$response['success']) {
    echo json_encode(["status"=>"blocked","msg"=>"Captcha failed"]);
    exit;
}

// ✅ forward to API
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://call.toppermarketing.com/store_entry.php?Key=67cf8963-b9d1-45bb-a580-b7b52937ee87&category=contact");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
curl_close($ch);

echo $result;
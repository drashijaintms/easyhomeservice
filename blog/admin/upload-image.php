<?php
$targetDir = "postimages/";

if (!is_dir($targetDir)) {
    mkdir($targetDir, 0755, true);
}

if (!empty($_FILES['file']['name'])) {
    $file = $_FILES['file'];
    $filename = basename($file["name"]);
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    $allowed = ["jpg", "jpeg", "png", "gif"];

    if (!in_array($ext, $allowed)) {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid image type.']);
        exit;
    }

    $newName = md5(uniqid($filename, true)) . '.' . $ext;
    $targetPath = $targetDir . $newName;

if (move_uploaded_file($file["tmp_name"], $targetPath)) {
    $url = 'admin/postimages/' . $newName; // <== fixed path for saving in DB
    echo json_encode(['location' => $url]);

    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Upload failed.']);
    }
} else {
    http_response_code(400);
    echo json_encode(['error' => 'No file uploaded.']);
}
?>

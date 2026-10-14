<?php
$targetDir = "postimages/";

// Create the directory if it doesn't exist
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0755, true);
}

if (!empty($_FILES['file']['name'])) {
    $file = $_FILES['file'];
    $filename = basename($file["name"]);
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    $allowed = ["jpg", "jpeg", "png", "gif"];

    // Validate extension
    if (!in_array($ext, $allowed)) {
        http_response_code(400);
        header('Content-Type: application/json');
        echo json_encode(['error' => 'Invalid image type. Only jpg, jpeg, png, gif allowed.']);
        exit;
    }

    // Secure and unique filename
    $newName = md5(uniqid('', true)) . '.' . $ext;
    $targetPath = $targetDir . $newName;

    // Move uploaded file
    if (move_uploaded_file($file["tmp_name"], $targetPath)) {
        // ✅ Full public URL for use inside TinyMCE
        $url = 'https://easyhomeservice.com/blog/admin/' . $targetPath;

        header('Content-Type: application/json');
        echo json_encode(['location' => $url]);
    } else {
        http_response_code(500);
        header('Content-Type: application/json');
        echo json_encode(['error' => 'Upload failed.']);
    }
} else {
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode(['error' => 'No file uploaded.']);
}
?>

<?php
require 'dbconnect.php';

// Get the JSON payload
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['id']) && isset($data['action'])) {
    $id = intval($data['id']);
    $action = $data['action'];

    if ($action === 'approve') {
        // Approve the comment
        $query = "UPDATE tblcomments SET status = 1 WHERE id = $id";
        if (mysqli_query($conn, $query)) {
            echo "Comment approved successfully!";
        } else {
            echo "Error approving comment: " . mysqli_error($conn);
        }
    } elseif ($action === 'reject') {
        // Delete the comment
        $query = "DELETE FROM tblcomments WHERE id = $id";
        if (mysqli_query($conn, $query)) {
            echo "Comment rejected and deleted successfully!";
        } else {
            echo "Error deleting comment: " . mysqli_error($conn);
        }
    } else {
        echo "Invalid action.";
    }
} else {
    echo "Invalid request.";
}
?>

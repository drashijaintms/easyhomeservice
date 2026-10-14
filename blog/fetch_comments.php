<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">


<?php
require 'dbconnect.php';

$postId = intval($_GET['postId']);
$query = "SELECT name, comment, postingDate FROM tblcomments 
          WHERE postId = $postId AND status = 1 
          ORDER BY postingDate DESC";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    echo '<strong class="py-2">Comments:</strong>';
    echo '<div class="container border p-3 mb-4 mt-3" style="max-height: 400px;border-radius:10px; overflow-y: auto;">';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="d-flex align-items-start p-3 bg-light rounded shadow-sm mb-3">';
        echo '    <div class="flex-shrink-0">';
        // echo '        <img src="default-avatar.png" alt="Profile" class="rounded-circle" style="width: 50px; height: 50px;">'; // Placeholder for profile picture
        echo '    </div>';
        echo '    <div class="flex-grow-1 ms-3">';
        echo '        <div class="d-flex justify-content-between align-items-center">';
        echo '            <h6 class="mb-1">' . htmlspecialchars($row['name']) . '</h6>';
        echo '            <span class="text-muted small">' . date('M d, Y', strtotime($row['postingDate'])) . '</span>';
        echo '        </div>';
        echo '        <p class="mb-2 text-muted">' . htmlspecialchars($row['comment']) . '</p>';
        echo '        <div class="d-flex align-items-center text-muted small">';
        // echo '            <a href="#" class="me-3 text-decoration-none">Reply</a>';
        // echo '            <a href="#" class="me-3 text-decoration-none">Translate</a>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo '<p>No comments yet. Be the first to comment!</p>';
}
?>

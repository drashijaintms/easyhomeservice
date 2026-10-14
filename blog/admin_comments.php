<style>.card { 
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: scale(1.02);
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
} </style><?php
require 'dbconnect.php';

// Fetch pending comments
$query = "SELECT id, name, comment, postingDate FROM tblcomments WHERE status = 0 ORDER BY postingDate DESC";
$result = mysqli_query($conn, $query);

echo '<div class="container mt-5">';
echo '<h2 class="mb-4">Manage Pending Comments</h2>';
if ($result && mysqli_num_rows($result) > 0) {
    echo '<div class="row">';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="col-md-6 mb-4">';
        echo '    <div class="card shadow-sm">';
        echo '        <div class="card-body">';
        echo '            <div class="d-flex align-items-center justify-content-between">';
        echo '                <h5 class="card-title mb-0">' . htmlspecialchars($row['name']) . '</h5>';
        echo '                <span class="badge bg-secondary">' . date('M d, Y', strtotime($row['postingDate'])) . '</span>';
        echo '            </div>';
        echo '            <p class="card-text mt-3">' . htmlspecialchars($row['comment']) . '</p>';
        echo '            <div class="d-flex justify-content-between mt-4">';
        echo '                <button class="btn btn-success btn-sm" onclick="approveComment(' . $row['id'] . ')">Approve</button>';
        echo '                <button class="btn btn-danger btn-sm" onclick="deleteComment(' . $row['id'] . ')">Reject</button>';
        echo '            </div>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo '<p>No pending comments.</p>';
}
echo '</div>';
?>

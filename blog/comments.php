
<div id="commentsList"></div>


<div class="comment-section">
    <h5>Leave a Comment:</h5>
    <form id="commentForm">
        <input type="hidden" id="postId" name="postId" value="<?php echo $post_row['id']; ?>">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Post Comment</button>
    </form>
    <div id="commentFeedback"></div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function loadComments() {
        const postId = $('#postId').val();
        $.ajax({
            url: 'fetch_comments.php', // PHP file to fetch comments
            type: 'GET',
            data: { postId: postId },
            dataType: 'html',
            success: function (data) {
                $('#commentsList').html(data); // Populate comments list
            },
            error: function () {
                $('#commentsList').html('<p class="text-danger">Unable to load comments.</p>');
            }
        });
    }

    // Call loadComments when the page loads
    $(document).ready(function () {
        loadComments();
    });
</script>
<script>
    $(document).ready(function () {
        $('#commentForm').on('submit', function (e) {
            e.preventDefault(); // Prevent default form submission

            // Collect form data
            const formData = {
                postId: $('#postId').val(),
                name: $('#name').val(),
                email: $('#email').val(),
                comment: $('#comment').val()
            };

            // AJAX request to submit comment
            $.ajax({
                url: 'submit_comment.php', // PHP file to handle submission
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        $('#commentFeedback').html('<p class="text-success">' + response.message + '</p>');
                        $('#commentForm')[0].reset(); // Reset the form
                    } else {
                        $('#commentFeedback').html('<p class="text-danger">' + response.message + '</p>');
                    }
                },
                error: function () {
                    $('#commentFeedback').html('<p class="text-danger">An error occurred. Please try again.</p>');
                }
            });
        });
    });
</script>

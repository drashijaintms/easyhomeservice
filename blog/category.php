<meta name="robots" content="noindex, nofollow">
<?php include 'includes/header.php' ?>

<?php include 'includes/navbar.php' ?>

<div class="blog_details_banner">
        <div class="container">
            <div class="blog-details_admin">

            </div> 
        </div>
    </div>

    <div class="blog_details_main_sec">
    <div class="container">
    <div class="blog_details_left">


    <?php
// Include database connection file

// Get the category ID from the URL
$category_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch category name
$category_query = "SELECT CategoryName FROM tblcategory WHERE id = $category_id AND Is_Active = 1";
$category_result = mysqli_query($conn, $category_query);
$category_name = mysqli_fetch_assoc($category_result)['CategoryName'];

// Fetch posts from the selected category
$post_query = "SELECT * FROM tblposts WHERE CategoryId = $category_id AND Is_Active = 1 ORDER BY id DESC";
$post_result = mysqli_query($conn, $post_query);

if ($post_result && mysqli_num_rows($post_result) > 0) {
    echo '<div class="blog_listing_row">'.
            '<div class="blog_cat_box mt-0">'.
                '<h3 class="cat"><span>Category: </span><span>' . htmlspecialchars($category_name) . '</span></h3>'.
            '</div>';

    while ($post_row = mysqli_fetch_assoc($post_result)) {
        $post_title = $post_row['PostTitle'];
        $post_slug = $post_row['slug'];
        $post_content_html = $post_row['PostDetails'];
        $post_content_text = strip_tags(htmlspecialchars_decode($post_content_html));
        $post_content_short = strlen($post_content_text) > 500 ? substr($post_content_text, 0, 50) . "[...]" : $post_content_text;
        $post_image = "admin/postimages/" . $post_row['PostImage'];
        $view_count = $post_row['viewCount'];
        $author = $post_row['author'];
        $post_date = date('M d, Y', strtotime($post_row['PostingDate']));
        $post_url = $post_row['slug'];

        echo '<div class="blog_list_row_col">'.
                '<div class="card">'.
                    '<a href="' . $post_url . '">'.
                        '<div class="image-container">'.
                            '<img class="card-img-top" src="' . $post_image . '" alt="Card image cap">'.
                        '</div>'.
                        '<div class="card-body">'.
                            '<div>'.
                                '<p class="cate">' . htmlspecialchars($category_name) . '</p>'.
                                '<h5 class="card-title mt-3">' . $post_title . '</h5>'.
                            '</div>'.
                            '<hr>'.
                            '<div class="d-flex" style="justify-content: space-between; align-items: center;">'.
                                '<div class="card-text">'.
                                    '<small class="text-muted">'.
                                        
                                        '<i class="far fa-user"></i> ' . $author . ' <br>'.
                                        '<i class="fas fa-calendar-alt"></i> ' . $post_date .
                                    '</small>'.
                                '</div>'.
                                '<div class="share-container">'.
                                    '<a href="#"><i class="fas fa-share d-none"></i></a>'.
                                    '<div class="share-icons">'.
                                        '<a href="https://www.facebook.com/sharer/sharer.php?u=' . urlencode($post_url) . '" target="_blank"><i class="fab fa-facebook-f"></i></a>'.
                                        '<a href="https://www.instagram.com/?url=' . urlencode($post_url) . '" target="_blank"><i class="fab fa-instagram"></i></a>'.
                                        '<a href="mailto:?subject=Check out this post&amp;body=' . urlencode($post_url) . '"><i class="fas fa-envelope"></i></a>'.
                                    '</div>'.
                                '</div>'.
                            '</div>'.
                        '</div>'.
                    '</a>'.
                '</div>'.
            '</div>';
    }

    echo '</div>';
} else {
    echo "No posts found for this category.";
}
?>


</div>


<?php include 'includes/sidebar.php' ?>
    </div>
<?php include '../footer.php'; ?>

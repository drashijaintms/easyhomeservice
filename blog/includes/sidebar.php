<style>
    .card-right{
        height:auto!important;
    }
    
    .blog_sidebar_sticky {
    position: sticky;
    top: 100px;  /* adjust height depending on your header */
    height: fit-content;
    z-index: 10;
}
</style>

<div class="blog_details_right blog_sidebar_sticky">
   <div class="widget Label list label feed has-title fix-height" id="Label11">
    <div class="feed-widget-header ">
        <h4 class="widget-title feed-widget-title text-black">
            <span>
                <i class="fa fa-clock-o color-green"></i> Recent Posts 
            </span>
        </h4>
        <div class="clear"></div>
    </div>
    <div class="widget-content feed-widget-content widget-content-Label11" id="widget-content-Label11">
        <?php
        // Fetch the latest four posts from the database ordered by PostingDate
        $recent_posts_query = "SELECT p.id, p.PostTitle, p.slug, p.PostImage, p.CategoryId, p.featurealt , c.CategoryName
                        FROM tblposts p
                        INNER JOIN (
                            SELECT slug, MAX(id) AS max_id
                            FROM tblposts
                            WHERE Is_Active = 1
                            GROUP BY slug
                        ) t ON p.id = t.max_id
                        LEFT JOIN tblcategory c ON p.CategoryId = c.id
                        ORDER BY p.PostingDate DESC LIMIT 5";
        $recent_posts_result = $conn->query($recent_posts_query);

        if ($recent_posts_result && $recent_posts_result->num_rows > 0) {
            while ($row = $recent_posts_result->fetch_assoc()) {
                $post_id = $row['id'];
                $post_title = $row['PostTitle'];
                $post_slug = $row['slug'];
                $post_image = 'admin/postimages/' . $row['PostImage'];
                $category_name = $row['CategoryName'];
                $post_url = $row['slug'];
                $featurealt = $row['featurealt'];
                
        ?>
                <div class="shad item item-0 row d-flex justify-content-center align-items-center mb1">
                    <div class="col-5 pr-0">
                        <a href="<?php echo htmlspecialchars($post_url); ?>">
                            <img src="<?php echo htmlspecialchars($post_image); ?>" alt="<?php echo htmlspecialchars($featurealt); ?>" class="recent-img">
                        </a>
                    </div>
                    <div class="col-7 pl-0">
                        <h3 class="item-title">
                            <a href="<?php echo htmlspecialchars($post_url); ?>">
                                <span class="title-name"><?php echo htmlspecialchars($post_title); ?></span>
                            </a>
                        </h3>
                    </div>
                </div>
                <div class="clear"></div>
        <?php
            }
        } else {
            echo "No recent posts found.";
        }
        ?>
    </div>
</div>
        <!-- recent posts -->         

            <!-- trending -->
            <?php
// Include database connection file


// Fetch the top 5 posts with the highest view counts
$trending_query = "SELECT p.id, p.PostTitle, p.slug, p.PostImage, p.author, p.PostingDate, p.viewCount, p.CategoryId,p.featurealt, c.CategoryName
                    FROM tblposts p
                    INNER JOIN (
                        SELECT slug, MAX(viewCount) AS max_viewCount
                        FROM tblposts
                        WHERE Is_Active = 1
                        GROUP BY slug
                    ) t ON p.slug = t.slug AND p.viewCount = t.max_viewCount
                    LEFT JOIN tblcategory c ON p.CategoryId = c.id
                    ORDER BY p.viewCount DESC LIMIT 5";
$trending_result = mysqli_query($conn, $trending_query);

if ($trending_result && mysqli_num_rows($trending_result) > 0) {
?>
    <div class="widget Label list label feed has-title fix-height" id="Label11">
        <div class="feed-widget-header mt-4">
            <h4 class="widget-title feed-widget-title text-black text-">
                <span>
                <i class='fas fa-fire-alt color-green'></i> Trending
                
                </span>
            </h4>
            <div class="clear"></div>
        </div>
        <div class="widget-content feed-widget-content widget-content-Label11" id="widget-content-Label11">
            <?php
            $counter = 1;
            while ($row = mysqli_fetch_assoc($trending_result)) {
                $post_id = $row['id'];
                $post_title = $row['PostTitle'];
                $post_slug = $row['slug'];
                $category_name = $row['CategoryName'];
                $post_url = $row['slug'];
                $featurealt = $row['featurealt'];
            ?>
                <div class="shad item item-<?php echo $counter - 1; ?> table">
                    <div class="tr">
                        <a href="<?php echo '/blog/'.$post_url; ?>">
                        <!--<div class="td item-index"><?php echo $counter; ?>.</div>-->
                        <div class="td">
                            <h3 class="item-title">
                                
                                    <span class="title-name"><?php echo $post_title; ?></span>
                                
                            </h3>
                        </div>
                        <div class="td item-readmore">
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="clear"></div>
            <?php
                $counter++;
            }
            ?>
        </div>
    </div>
<?php
} else {
    echo "No trending posts found.";
}
?>


<!-- trending -->
<!-- recent posts -->




        <!-- categories -->

                <div class="feed-widget-header mt-4">
                    <h4 class="widget-title feed-widget-title text-black">
                        <span>
                        <i class="fa fa-list-alt color-green" aria-hidden="true"></i> Categories
                        
                        </span>
                    </h4>
                    <div class="clear"></div>
                </div>
               <?php  $query = "SELECT id, CategoryName FROM tblcategory WHERE Is_Active = 1";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo '<ul class="blog_detls_right_choose_box pl-0">';
    
    // Loop through each category and create list items
    while ($row = mysqli_fetch_assoc($result)) {
        $side_category_id = $row['id'];
        $side_category_name = $row['CategoryName'];
        
        echo '<li class="highlighted"><a href="/blog/category.php?id=' . $side_category_id . '" class="sidecat">' . htmlspecialchars($side_category_name) . '</a></li>';
    }
    
    echo '</ul>';
} else {
    // echo "No categories available.";
}

// Close the database connection
mysqli_close($conn);
?>
                    <div class="clearall"></div>
                </div>
</div>
        <!-- categories -->
<script>
    $(document).ready(function() {
        $('.email-form').on('submit', function(e) {
            e.preventDefault(); // Prevent form from submitting normally

            $.ajax({
                type: 'POST',
                url: 'submit_email.php',
                data: $(this).serialize(),
                success: function(response) {
                    $('.message').html(response);
                    if (response.indexOf('successfully') !== -1) {
                        $('.email-form').hide();
                        $('.submitted-message').show(); // Show the message
                        
                        setTimeout(function() {
                            $('.submitted-message').hide();
                            $('.email-form').trigger('reset'); // Reset the form after hiding the message
                            $('.email-form').show();
                        }, 2000); // Hide the message after 2 seconds
                    }
                },
                error: function(xhr, status, error) {
                    $('.message').html('<div class="alert alert-danger">An error occurred: ' + error + '</div>');
                }
            });
        });
    });
</script>

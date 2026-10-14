<?php include 'includes/header.php' ?>
<?php include 'includes/navbar.php' ?>



<?php
// Get the category name from the URL
if (isset($_GET['permalink'])) {
    // Escape the slug to prevent SQL injection
    $slug = mysqli_real_escape_string($conn, $_GET['permalink']);

    // Fetch the category ID based on the provided category name
    $category_id_query = "SELECT CategoryId FROM tblposts WHERE slug = '$slug'";
    $category_id_result = mysqli_query($conn, $category_id_query);

    if ($category_id_result && mysqli_num_rows($category_id_result) > 0) {
        $category_id_row = mysqli_fetch_assoc($category_id_result);
        $category_id = $category_id_row['CategoryId'];

        // Update the view count for the post that matches the slug and category ID
        $update_view_count_query = "UPDATE tblposts SET viewCount = viewCount + 1 WHERE slug = '$slug' AND CategoryId = $category_id";
        mysqli_query($conn, $update_view_count_query);
    }

    // Query to fetch post data based on slug
    $post_query = "SELECT * FROM tblposts WHERE slug = '$slug'";
    $post_result = mysqli_query($conn, $post_query);

    if ($post_result && mysqli_num_rows($post_result) > 0) {
        $post_row = mysqli_fetch_assoc($post_result);

        // Extract post data
        $category_id = $post_row['CategoryId'];
        $post_title = $post_row['PostTitle'];
        $post_content_html = $post_row['PostDetails']; // Content with HTML tags
        $post_image = "admin/postimages/" . $post_row['PostImage']; // Assuming PostImage contains only image filename
        $author = $post_row['author'];
        $post_date = date('F d, Y', strtotime($post_row['PostingDate']));
        $view_count = $post_row['viewCount']; // Adding view count
        $subhead = $post_row['subhead'];

        // Fetch category name
        $category_query = "SELECT c.CategoryName FROM tblcategory c WHERE c.id = $category_id";
        $category_result = mysqli_query($conn, $category_query);
        $category_row = mysqli_fetch_assoc($category_result);
        $category_name = $category_row['CategoryName'];

        // Output dynamic content for the banner
        echo '<div class="blog_details_banner">' .
                '<div class="container">' .
                    '<p class="blog_detls_sub_text">' . $category_name . '</p>' .
                    '<h1 class="banner_heading">' . $post_title . '</h1>' .
                    '<div><b>' . $subhead . '</b></div>' .
                    '<div class="blog-details_admin">' .
                        '<div class="blog-details_site">' .
                            '<img src="assets/img/user.png" class="blog_details_admin_img" alt="img">' .
                            '<p><span>By ' . $author . ',</span><br>' . $post_date . '</p>' .
                        '</div>' .
                        '<div class="blog-details_social">' .
                            '<ul class="blog-details_social_list">' .
                                '<li class="hideMob"><a href="mailto:?subject=Check%20out%20this%20link&amp;body=I%20thought%20you%20might%20be%20interested%20in%20this:https%3A%2F%2Feasyhomeservice.com%2Fblog%2F' . $slug . '"><img src="https://easyhomeservice.com/images/mail.png" width="100" height="100" alt="icon"></a></li>' .
                                '<li class="hideMob"><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Feasyhomeservice.com%2Fblog%2F' . $slug . '"><img src="https://easyhomeservice.com/images/facebook.png" width="100" height="100" alt="icon"></a></li>' .
                                '<li class="hideMob"><a href="https://api.whatsapp.com/send?text=Check%20out%20this%20link:https%3A%2F%2Feasyhomeservice.com%2Fblog%2F' . $slug . '"><img src="https://easyhomeservice.com/images/whatsapp.png" width="100" height="100" alt="icon"></a></li>' .
                                '<li class="hideMob"><a href="https://www.linkedin.com/sharing/share-offsite/?url=https%3A%2F%2Feasyhomeservice.com%2Fblog%2F' . $slug . '"><img src="https://easyhomeservice.com/images/linkedIn.png" width="100" height="100" alt="icon"></a></li>' .
                                '<li class="hideMob"><a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Feasyhomeservice.com%2Fblog%2F' . $slug . '"><img src="https://easyhomeservice.com/images/twitter.png" width="100" height="100" alt="icon"></a></li>' .
                            '</ul>' .
                        '</div>' .
                    '</div>' .
                '</div>' .
            '</div>';
    } else {
        // Post not found in the database
        echo "Post not found.";
    }
} else {
    // No slug provided in the URL
    echo "No slug provided.";
}
?>

<div class="blog_details_main_sec">
    <div class="container">
        <?php
        // Assuming you have established a database connection already

        // Get the slug from the URL
        if(isset($_GET['permalink'])) {
            $slug = $_GET['permalink'];

            // Query to fetch post data based on slug
            $post_query = "SELECT * FROM tblposts WHERE slug = '$slug'";
            $post_result = mysqli_query($conn, $post_query);

            if ($post_result && mysqli_num_rows($post_result) > 0) {
                $post_row = mysqli_fetch_assoc($post_result);

                // Extract post data
                $post_content_html = $post_row['PostDetails']; // Content with HTML tags
                $post_content_decoded = htmlspecialchars_decode($post_content_html); // Decode HTML entities

                // Output dynamic content for the blog_details_left
                echo '<div class="blog_details_left">' .
                    // '<img src="' . $post_image . '" class="blog_details_hero">' .
                    '<div class="common_text">' . $post_content_decoded . '</div> ' .
                    '</div>';
            } else {
                // No post found with the provided slug
                echo "Post not found.";
            }
        }
        ?>
                <div class="blog_det_left_box">
            	<p class="blg_det_left_bx_head text-center">Find Top Rated Service Providers</p>
                <p class="blg_det_left_bx_text text-center">We help you find top service providers and compare quotes.</p>
                
                
                
<form id="myForm" method="get">
        <div class="form_field">
            <select id="serviceDropdown" required class="input_field">
                <option value="services" data-value="services" disabled selected>I need help with</option>
                <option value="roofing-steps" data-value="https://easyhomeservice.com/roofing-steps">Roofing</option>
                <option value="window-steps" data-value="https://easyhomeservice.com/window-steps">Windows</option>
                <option value="solar-steps" data-value="https://easyhomeservice.com/solar-steps">Solar</option>
                <option value="hvac-steps" data-value="https://easyhomeservice.com/hvac-steps">HVAC</option>
                <option value="bathroom-steps" data-value="https://easyhomeservice.com/bathroom-steps">Bathroom</option>
                <option value="kitchen-steps" data-value="https://easyhomeservice.com/kitchen-steps">Kitchen</option>
                <option value="gutter-steps" data-value="https://easyhomeservice.com/gutter-steps">Gutter</option>
                <option value="siding-steps" data-value="https://easyhomeservice.com/siding-steps">Siding</option>
                <option value="walktub-steps" data-value="https://easyhomeservice.com/walktub-steps">Walk In Tubs</option>
                <option value="handyman-steps" data-value="https://easyhomeservice.com/handyman-steps">Handyman</option>
                <option value="homewarranty-steps" data-value="https://easyhomeservice.com/homewarranty-steps">Home Warranty</option>
                <option value="allservices" data-value="https://easyhomeservice.com/window-steps/allservices">All Services</option>
                <!-- Add other options as needed -->
            </select>
            <input name="zip" type="text" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'); hideError();"
                id="zipCode" class="input_field input_field_zip" placeholder="Your project’s ZIP Code" title="Please enter a valid 5-digit ZIP code" pattern="[0-9]{5}" maxlength="5" inputmode="numeric">
            <input type="hidden" name="clickid" value="<?php echo $_GET['clickid'];?>">
            <input type="hidden" name="source" value="<?php echo $_GET['source'];?>">
           <div class="row">
<div class="col-12 d-flex justify-content-center align-items-center">
    <button type="submit" class="quote_btn">Get A Quote</button></div>
</div>
        </div>
    </form>

                
                
                
                
                
                
                
                
                
                <!--<div class="form_fild">-->
                <!--    <select class="input_field fl">-->
                <!--        <option>I need help with</option>-->
                <!--        <option>Roofing</option>-->
                <!--        <option>Windows Installation</option>-->
                <!--        <option>Solar Installation</option>-->
                <!--        <option>HVAC Installation</option>-->
                <!--        <option>Bathroom</option>-->
                <!--        <option>Kitchen</option>-->
                <!--        <option>Gutter</option>-->
                <!--        <option>Flooring</option>-->
                <!--        <option>Siding</option>-->
                <!--    </select>-->
                <!--    <input type="tel" class="input_field input_field_zip fr" placeholder="Your projec’s ZIP Code">-->
                <!--    <button type="submit" class="quote_btn">Get A Quote</button>-->
                <!--</div>-->
            </div>
        <?php include 'includes/sidebar.php' ?>
    </div>
    
</div>

<script type="text/javascript">
$(document).ready(function(){
	$('.mob-mnu-ic').click(function(e) {
		$('.mobilemenu').slideToggle();
		$('.dl-trigger').toggleClass('dl-active');
	});
	
	$('.menuOpen').click(function(e) {
		$(this).next('.dropdown-mobile').slideToggle();
		$(this).toggleClass('mnutog');
	});
	
	$('.customer_review_row').slick({
		dots: false,
		arrows: true,
		speed: 300,
		slidesToShow:4,
		slidesToScroll: 1,
		centerMode: true,
		variableWidth: true,
		responsive: [
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
				dots: false,
				centerMode: true,
				variableWidth: true,
			}
		}
		]
	});
	
	$(".acdn-heading").click(function() {
		
		var questionDiv = $(this);
		var answerDiv   = $(this).next('.acdn-content');
		var idx = $('.acdn-content').index(answerDiv);
		
		$('.acdn-content').each(function(index, ansDiv) {
            if(index != idx && $(ansDiv).is(':visible')) {
				$(ansDiv).slideUp(500, function() {
					$(ansDiv).prev('.acdn-heading').removeClass('accordion-open');
				});
			}
        });
					
		if (answerDiv.is(':visible')) {
			answerDiv.stop().slideUp(500, function() {
				questionDiv.removeClass('accordion-open');
			});
		} else {
		  questionDiv.addClass('accordion-open');
		  answerDiv.stop().slideDown(500);
		}

	});
	
});
</script>
            
 <script>
        // Ensure the script runs after the DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            function updateAction() {
                var select = document.getElementById('serviceDropdown');
                var selectedOption = select.options[select.selectedIndex];
                var url = selectedOption.getAttribute('data-value');
                
                // Update the form's action URL based on the selected data-value
                document.getElementById('myForm').action = url;
            }

            function redirectToPage() {
                // Ensure the form is submitted to the correct URL
                return true; // Proceed with form submission
            }

            // Attach the functions to the form and dropdown
            document.getElementById('serviceDropdown').addEventListener('change', updateAction);
            document.getElementById('myForm').addEventListener('submit', redirectToPage);
        });
    </script>

<?php include 'includes/footer.php' ?>

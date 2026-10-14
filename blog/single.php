<?php include 'includes/header.php' ?>
<?php include 'includes/navbar.php' ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
.con-lbl {
    font-weight: 500;
    color: #000073;
}
p{
    margin-top:1rem!important;
}
.accordion-item {
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}
.accordion-header {
  background-color: #f5f5f5;
  padding: 10px;
  cursor: pointer;
  font-weight: bold;
  border: none;
  width: 100%;
  text-align: left;
}
.accordion-body {
  padding: 10px;
  display: none;
}

.accordion-header {
  display: flex;
  align-items: center;
  gap: 8px;
  font-weight: bold;
  background: #f1f1f1;
  border: none;
  padding: 10px;
  cursor: pointer;
}

.accordion-header .icon {
  font-size: 18px;
}


.accordion {
    float: left;
    width: 100%;
    text-align: left;
    /*background: url(../images/close.png) no-repeat 98% center #fff;*/
    padding: 0px 30px 0px 30px;
    font-size: 22px;
    line-height: 28px;
    color: #000000;
    font-weight: 700;
    cursor: pointer;
}

.icon
{
    float:right;
}
.blog_details_hero {
  display: block;       /* ensure image is treated as a block */
  width: 100%;          /* or whatever width you need */
  height: auto;
  float: none;          /* undo any float if applied elsewhere */
  position: static;     /* undo absolute positioning if any */
}

#toc-container {
  clear: both;
  display: block;
  margin: 20px 0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  transition: all 0.3s ease;
}

.toc-box {
  border: 1px solid #e0e0e0;
  padding: 20px;
  background: #ffffff;
  border-radius: 12px;
}

.toc-box h4 {
  margin-bottom: 10px;
  font-weight: 700;
  font-size: 18px;
  color: #0e225a; /* dark blue */
}

.toc-box ul {
  list-style: none;
  padding-left: 0;
  margin: 0;
}

.toc-box ul li {
  margin: 8px 0;
}

.toc-box ul li a {
  text-decoration: none;
  color: #0e225a; /* dark blue links */
  font-weight: 500;
  display: block;
  padding: 2px 8px;
  border-radius: 6px;
  transition: all 0.2s ease;
}

.toc-box ul li a:hover {
  background: #04d36f; /* green hover */
  color: #fff;
  text-decoration: none;
  transform: translateX(4px);
}

.toc-toggle {
  width: 100%;
  text-align: left;
  padding: 12px 16px;
  font-size: 20px;
  font-weight: 600;
  background: #04d36f; /* dark blue to green gradient */
  color: #fff;
  border: none;
  cursor: pointer;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  transition: all 0.3s ease;
}



.toc-list {
  list-style: none;
  padding-left: 0;
  margin-top: 10px;
}

.toc-list li {
  margin: 6px 0;
}

.toc-list li a {
  text-decoration: none;
  color: #0e225a; /* dark blue */
  font-size: 16px;
  transition: color 0.2s ease;
}

.toc-list li a:hover {
  color: #04d36f; /* green hover */
  text-decoration: underline;
}

#toc ol {
  list-style: decimal;
  margin: 0 0 0 16px;
  padding: 0;
}

#toc li {
  margin: 4px 0;
}

</style>



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
        $featurealt = $post_row['featurealt'];
        // Fetch category name
        $category_query = "SELECT c.CategoryName FROM tblcategory c WHERE c.id = $category_id";
        $category_result = mysqli_query($conn, $category_query);
        $category_row = mysqli_fetch_assoc($category_result);
        $category_name = $category_row['CategoryName'];
        // Output dynamic content for the banner
        echo '<div class="blog_details_banner">' .
                '<div class="container">' .
                    '<p class="blog_detls_sub_text d-none">' . $category_name . '</p>' .
                    '<h1 class="dynamic-font banner_heading">' . $post_title . '</h1>' .
                    '<div><b>' . $subhead . '</b></div>' .
                    '<div class="blog-details_admin">' .
                        '<div class="blog-details_site">' .
                            '<img src="assets/img/user.png" class="blog_details_admin_img" alt="' . $author . '">' . '<p><span>By ' . $author . ',</span><br>' . $post_date . '</p>' .
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
        <div class="row">
            <div class="col-lg-8">
                        <?php
        // Assuming you have established a database connection already

        // Get the slug from the URL
        if (isset($_GET['permalink'])) {
            $slug = $_GET['permalink'];

            // Query to fetch post data based on slug
            $post_query = "SELECT * FROM tblposts WHERE slug = '$slug'";
            $post_result = mysqli_query($conn, $post_query);

            if ($post_result && mysqli_num_rows($post_result) > 0) {
                $post_row = mysqli_fetch_assoc($post_result);

                // Extract post data
                $post_content_html = $post_row['PostDetails']; // Content with HTML tags
                $post_content_decoded = htmlspecialchars_decode($post_content_html); // Decode HTML entities

$faqSchema = '';

$faqItems = array();

// Check if FAQ section exists
if (
    stripos($post_content_decoded, 'Frequently Asked Questions') !== false ||
    stripos($post_content_decoded, 'FAQ') !== false
) {

    // Get content starting from FAQ section
    $faqStart = stripos($post_content_decoded, 'Frequently Asked Questions');

    if ($faqStart === false) {
        $faqStart = stripos($post_content_decoded, 'FAQ');
    }

    $faqContent = substr($post_content_decoded, $faqStart);

    // Find H3 Question + P Answer pairs
    preg_match_all(
        '/<h3[^>]*>(.*?)<\/h3>\s*<p[^>]*>(.*?)<\/p>/is',
        $faqContent,
        $matches
    );

    if (!empty($matches[1])) {

        for ($i = 0; $i < count($matches[1]); $i++) {

            $question = trim(strip_tags($matches[1][$i]));
            $answer   = trim(strip_tags($matches[2][$i]));

            // Only include actual questions
            if (
                !empty($question) &&
                !empty($answer) &&
                substr(trim($question), -1) == '?'
            ) {

                $faqItems[] = array(
                    "@type" => "Question",
                    "name" => $question,
                    "acceptedAnswer" => array(
                        "@type" => "Answer",
                        "text" => $answer
                    )
                );
            }
        }
    }

    if (!empty($faqItems)) {

        $json = json_encode(array(
            "@context" => "https://schema.org",
            "@type" => "FAQPage",
            "mainEntity" => $faqItems
        ));

        if ($json !== false) {

            $faqSchema = '<script type="application/ld+json">';
            $faqSchema .= $json;
            $faqSchema .= '</script>';
        }
    }
}


                // Output dynamic content for the blog_details_left
                echo '<div class="blog_details_left">' .
                        '<img src="' . $post_image . '" class="blog_details_hero" alt="' . htmlentities($featurealt) . '">' .
                        '<div style="clear:both;"></div>' .               // <-- add this
      '<div id="toc-container" class="toc-box">
    <button class="toc-toggle" type="button">📑 Table of Contents</button>
    <div id="toc" class="toc-list"></div>
</div>' .
                        '<div class="common_text" id="blog-post">' . $post_content_decoded . '</div>' .
                        
                            '<div class="comment-section">
                                <h5>Leave a Comment:</h5>
                                    <form id="commentForm">
                                        <div class="row">        
                                            <input type="hidden" id="postId" name="postId" value="' . htmlspecialchars($post_row['id']) . '">
                                            <div class="col-6">
                                            <div class="form-group">
                                                <label for="name" class="mb-2 con-lbl">Name:</label>
                                                <input type="text" id="name" name="name" class="form-control" required>
                                            </div>
                                        </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                <label for="email" class="mb-2 con-lbl">Email:</label>
                                                <input type="email" id="email" name="email" class="form-control" required>
                                                </div>
                                            </div>
                    <div class="col-12">
                    <div class="form-group">
                        <label class="my-2 con-lbl" for="comment">Comment:</label>
                        <textarea id="comment" name="comment" class="form-control" rows="4" required></textarea>
                    </div></div>
                   </div> <button type="submit" style="background:#04d36f;" class="my-2 btn bg-btn text-white mt-3">Post Comment</button>
                </form>
                <div id="commentFeedback"></div>
                
            </div>' .                       '<div id="commentsList"></div>' .

                    // New section here
                    '<div class="blog_det_left_box">' .
                    '<p class="blg_det_left_bx_head text-center">Find Top Rated Service Providers</p>' .
                    '<p class="blg_det_left_bx_text text-center">We help you find top service providers and compare quotes.</p>' .

                    '<form id="myForm" method="get">' .
                        '<div class="form_field">' .
                            '<select id="serviceDropdown" required class="input_field">' .
                                '<option value="services" disabled selected>I need help with</option>' .
                                '<option value="roofing-steps" data-value="https://easyhomeservice.com/roofing-steps">Roofing</option>' .
                                '<option value="window-steps" data-value="https://easyhomeservice.com/window-steps">Windows</option>' .
                                '<option value="solar-steps" data-value="https://easyhomeservice.com/solar-steps">Solar</option>' .
                                '<option value="hvac-steps" data-value="https://easyhomeservice.com/hvac-steps">HVAC</option>' .
                                '<option value="bathroom-steps" data-value="https://easyhomeservice.com/bathroom-steps">Bathroom</option>' .
                                '<option value="kitchen-steps" data-value="https://easyhomeservice.com/kitchen-steps">Kitchen</option>' .
                                '<option value="gutter-steps" data-value="https://easyhomeservice.com/gutter-steps">Gutter</option>' .
                                '<option value="siding-steps" data-value="https://easyhomeservice.com/siding-steps">Siding</option>' .
                                '<option value="walktub-steps" data-value="https://easyhomeservice.com/walktub-steps">Walk In Tubs</option>' .
                                '<option value="handyman-steps" data-value="https://easyhomeservice.com/handyman-steps">Handyman</option>' .
                                '<option value="homewarranty-steps" data-value="https://easyhomeservice.com/homewarranty-steps">Home Warranty</option>' .
                                '<option value="allservices" data-value="https://easyhomeservice.com/allservices">All Services</option>' .
                            '</select>' .
                            '<input name="zip" type="text" required oninput="this.value = this.value.replace(/[^0-9]/g, \'\'); hideError();" ' .
                                'id="zipCode" class="input_field input_field_zip" placeholder="Your project\'s ZIP Code" title="Please enter a valid 5-digit ZIP code" ' .
                                'pattern="[0-9]{5}" maxlength="5" inputmode="numeric">' .
                            '<input type="hidden" name="clickid" value="' . htmlspecialchars($_GET['clickid'] ?? '', ENT_QUOTES, 'UTF-8') . '">' .
                            '<input type="hidden" name="source" value="' . htmlspecialchars($_GET['source'] ?? '', ENT_QUOTES, 'UTF-8') . '">' .
                            '<div class="row">' .
                                '<div class="col-12 d-flex justify-content-center align-items-center">' .
                                    '<button type="submit" class="quote_btn">Get A Quote</button>' .
                                '</div>' .
                            '</div>' .
                        '</div>' .
                    '</form>' .
                    
                    '</div>'; // End of blog_det_left_box section
                
                echo '</div>'; // End of blog_details_left
            } else {
                // No post found with the provided slug
                echo "Post not found.";
            }
        }
        ?>
        
            </div>
            <div class="col-lg-4">
                        <?php include 'includes/sidebar.php'; ?>
            </div>
        </div>
        
        
        
        


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

<script>
document.addEventListener('click', function (e) {
  if (e.target.classList.contains('accordion-header') || e.target.closest('.accordion-header')) {
    const header = e.target.closest('.accordion-header');
    const body = header.nextElementSibling;
    const icon = header.querySelector('.icon');

    if (body && body.classList.contains('accordion-body')) {
      const isOpen = body.style.display === 'block';
      body.style.display = isOpen ? 'none' : 'block';
      if (icon) {
        icon.textContent = isOpen ? '+' : '-';
      }
    }
  }
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const toc = document.getElementById("toc");
    const blogPost = document.getElementById("blog-post");
    const toggleBtn = document.querySelector(".toc-toggle");

    // Check TOC container
    if (!toc) {
        console.error("TOC: #toc was not found.");
        return;
    }

    // Check blog content
    if (!blogPost) {
        console.error("TOC: #blog-post was not found.");
        return;
    }

    // Find headings
    const headings = blogPost.querySelectorAll("h2, h3, h4");

    console.log("TOC headings found:", headings.length);

    // Clear existing TOC
    toc.innerHTML = "";

    // If no headings
    if (headings.length === 0) {
        console.warn("TOC: No H2, H3 or H4 headings found.");
        toc.style.display = "none";
        return;
    }

    // Show TOC
    toc.style.display = "block";

    // Main list
    const mainOl = document.createElement("ol");
    mainOl.className = "toc-main-list";

    toc.appendChild(mainOl);

    // Counters
    let h2Count = 0;
    let h3Count = 0;
    let h4Count = 0;

    // Track parents
    let lastH2Li = null;
    let lastH3Li = null;

    headings.forEach(function (heading, index) {

        // Add ID if missing
        if (!heading.id) {
            heading.id = "toc-heading-" + index;
        }

        const li = document.createElement("li");
        const a = document.createElement("a");

        a.href = "#" + heading.id;
        a.textContent = heading.textContent.trim();

        /* ==============================
           H2
        ============================== */

        if (heading.tagName === "H2") {

            h2Count++;
            h3Count = 0;
            h4Count = 0;

            a.textContent =
                h2Count + ". " +
                heading.textContent.trim();

            li.appendChild(a);
            mainOl.appendChild(li);

            lastH2Li = li;
            lastH3Li = null;
        }


        /* ==============================
           H3
        ============================== */

        else if (heading.tagName === "H3") {

            h3Count++;
            h4Count = 0;

            a.textContent =
                h2Count + "." +
                h3Count + " " +
                heading.textContent.trim();

            // If no H2 exists yet
            if (!lastH2Li) {

                li.appendChild(a);
                mainOl.appendChild(li);

                lastH3Li = li;

                return;
            }

            // Find/create H3 nested list
            let h3List =
                lastH2Li.querySelector(":scope > ol");

            if (!h3List) {

                h3List = document.createElement("ol");

                lastH2Li.appendChild(h3List);
            }

            li.appendChild(a);
            h3List.appendChild(li);

            lastH3Li = li;
        }


        /* ==============================
           H4
        ============================== */

        else if (heading.tagName === "H4") {

            h4Count++;

            a.textContent =
                h2Count + "." +
                h3Count + "." +
                h4Count + " " +
                heading.textContent.trim();

            // If no H3 exists
            if (!lastH3Li) {

                if (lastH2Li) {

                    let h4List =
                        lastH2Li.querySelector(":scope > ol");

                    if (!h4List) {

                        h4List = document.createElement("ol");

                        lastH2Li.appendChild(h4List);
                    }

                    li.appendChild(a);
                    h4List.appendChild(li);

                } else {

                    li.appendChild(a);
                    mainOl.appendChild(li);
                }

                return;
            }

            // Find/create H4 nested list
            let h4List =
                lastH3Li.querySelector(":scope > ol");

            if (!h4List) {

                h4List = document.createElement("ol");

                lastH3Li.appendChild(h4List);
            }

            li.appendChild(a);
            h4List.appendChild(li);
        }

    });


    /* ==============================
       TOC TOGGLE
    ============================== */

    if (toggleBtn) {

        toggleBtn.addEventListener("click", function () {

            if (toc.style.display === "none") {

                toc.style.display = "block";

            } else {

                toc.style.display = "none";

            }

        });

    }


    /* ==============================
       SMOOTH SCROLL
    ============================== */

    toc.addEventListener("click", function (e) {

        const link = e.target.closest("a");

        if (!link) {
            return;
        }

        const targetId =
            link.getAttribute("href");

        const target =
            document.querySelector(targetId);

        if (target) {

            e.preventDefault();

            target.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });

        }

    });

});
</script>
<?php
if (!empty($faqSchema)) {
    echo $faqSchema;
}
?>

<?php include '../footer.php' ?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div class="blog_details_banner">
    <div class="container">
        <div class="blog-details_admin">
        </div>
    </div>
</div>

<div class="blog_details_main_sec">
    <div class="container">
        <div class="blog_details_left">

            <div class="blog_listing_row">
                
                 <div class="blog_cat_box">
                                <h3 class="cat">Our Blogs</h3>

                            </div>
                            
                            
                <?php
                // Fetch all categories
                $category_query = "SELECT id, CategoryName FROM tblcategory WHERE Is_Active = 1";
                $category_result = mysqli_query($conn, $category_query);

                if ($category_result && mysqli_num_rows($category_result) > 0) {
                    while ($category_row = mysqli_fetch_assoc($category_result)) {
                        $category_id = $category_row['id'];
                        $category_name = $category_row['CategoryName'];
                        $category_slug = strtolower(str_replace(' ', '-', $category_name)); // Convert category name to URL-friendly format

                        // Fetch posts for the current category
                        $post_query = "SELECT * FROM tblposts WHERE CategoryId = $category_id AND Is_Active = 1 ORDER BY id DESC";
                        $post_result = mysqli_query($conn, $post_query);

                        if ($post_result && mysqli_num_rows($post_result) > 0) {
                            while ($post_row = mysqli_fetch_assoc($post_result)) {
                                $post_title = $post_row['PostTitle'];
                                $post_content_html = $post_row['PostDetails'];
                                $post_content_text = strip_tags(htmlspecialchars_decode($post_content_html));
                                $post_content_short = strlen($post_content_text) > 500 ? substr($post_content_text, 0, 500) . "[...]" : $post_content_text;
                                $post_image = "admin/postimages/" . $post_row['PostImage'];
                                $view_count = $post_row['viewCount'];
                                $author = $post_row['author'];
                                $post_date = date('M d, Y', strtotime($post_row['PostingDate']));
                                $post_slug = $post_row['slug'];

                                // Output post details within the single container
                                echo '<div class="blog_list_row_col">
                                        <div class="card">
                                            <a href="single.php?category=' . $category_slug . '&permalink=' . $post_slug . '">
                                                <div class="image-container">
                                                    <img class="card-img-top" src="' . $post_image . '" alt="Card image cap">
                                                </div>
                                                <div class="card-body">
                                                    <div>
                                                        <p class="cate">' . $category_name . '</p>
                                                        <h5 class="card-title mt-3">' . $post_title . '</h5>
                                                    </div>
                                                    <hr>
                                                    <div class="d-flex" style="justify-content: space-between; align-items: center;">
                                                        <div class="card-text">
                                                            <small class="text-muted">
                                                                <i class="far fa-user"></i> ' . $author . '<br>
                                                                <i class="fas fa-calendar-alt"></i> ' . $post_date . '
                                                            </small>
                                                        </div>
                                                        <div class="share-container">
                                                            <a href="#"><i class="fas fa-share d-none"></i></a>
                                                            <div class="share-icons">
                                                                <a href="https://www.facebook.com/sharer/sharer.php?u=' . urlencode('single.php?category=' . $category_slug . '&permalink=' . $post_slug) . '" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                                <a href="https://www.instagram.com/?url=' . urlencode('single.php?category=' . $category_slug . '&permalink=' . $post_slug) . '" target="_blank"><i class="fab fa-instagram"></i></a>
                                                                <a href="mailto:?subject=Check out this post&amp;body=' . urlencode('single.php?category=' . $category_slug . '&permalink=' . $post_slug) . '"><i class="fas fa-envelope"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>';
                            }
                        }
                    }
                } else {
                    echo "No categories found.";
                }
                ?>
            </div>
<div class="row d-flex justify-content-center">
            <div id="pagination"></div> 
</div>
        </div>

        <?php include 'includes/sidebar.php'; ?>
    </div>
</div>


<script>
$(document).ready(function() {
    const postsPerPage = 12;
    const posts = $(".blog_list_row_col");
    const totalPages = Math.ceil(posts.length / postsPerPage);
    let currentPage = 1;

    function showPage(page) {
        const start = (page - 1) * postsPerPage;
        const end = start + postsPerPage;

        // Hide current posts with fadeOut and show the new posts with fadeIn
        posts.fadeOut(300, function() {
            posts.slice(start, end).fadeIn(300);
        });
    }

    function createPagination() {
        $("#pagination").append('<a href="#" class="page-link prev disabled" data-page="prev">Prev</a>');
        
        for (let i = 1; i <= totalPages; i++) {
            $("#pagination").append(`<a href="#" class="page-link" data-page="${i}">${i}</a>`);
        }
        
        $("#pagination").append('<a href="#" class="page-link next" data-page="next">Next</a>');
        
        $(".page-link").click(function(e) {
            e.preventDefault();
            const page = $(this).data("page");
            if (page === "prev") {
                if (currentPage > 1) {
                    currentPage--;
                }
            } else if (page === "next") {
                if (currentPage < totalPages) {
                    currentPage++;
                }
            } else {
                currentPage = page;
            }
            updatePagination();
            showPage(currentPage);
        });
    }

    function updatePagination() {
        $(".page-link").removeClass("active");
        $(`.page-link[data-page="${currentPage}"]`).addClass("active");

        if (currentPage === 1) {
            $(".prev").addClass("disabled");
        } else {
            $(".prev").removeClass("disabled");
        }

        if (currentPage === totalPages) {
            $(".next").addClass("disabled");
        } else {
            $(".next").removeClass("disabled");
        }
    }

    showPage(currentPage); // Show the first page initially
    createPagination();
    updatePagination(); // Highlight the first page link and manage Prev/Next button states
});
</script>



<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bookmarkscroll.js"></script>
<script type="text/javascript" src="js/slick.js"></script>

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

<script type="text/javascript">

$(document).scroll(function() {
		
	if ($(this).scrollTop() > 40){
		$('.top-fix-bar').addClass('fixed-nav');
	}else{
		$('.top-fix-bar').removeClass('fixed-nav');
	}
	
	if ($(this).scrollTop() > 10){
	   $('.mobilemenu').addClass('mobimenu-top');
	}else{
	   $('.mobilemenu').removeClass('mobimenu-top');
	}

});


//MODAL POPUP JS
$(document).on('click', '#app_common_modal_close', function() {
	$('#app_common_modal').remove();
});	
function openNewWindow(page_url, type, window_name, width, height, top, left, features) {
    if (!type) {
        type = 'popup';
    }
    if (!width) {
        width = 480;
    }
    if (!height) {
        height = 480;
    }
    if (!top) {
        top = 50;
    }
    if (!left) {
        left = 50;
    }
    if (!features) {
        features = 'resizable,scrollbars';
    }

    if (type == 'popup') {
        var settings = 'height=' + height + ',';
        settings += 'width=' + width + ',';
        settings += 'top=' + top + ',';
        settings += 'left=' + left + ',';
        settings += features;

        win = window.open(page_url, window_name, settings);
        win.window.focus();
    } else if (type == 'modal') {
        var html = '';
        html += '<div id="app_common_modal">';
        html += '<div class="app_modal_body"><a href="javascript:void(0);" id="app_common_modal_close">X</a><iframe src="' + page_url + '" frameborder="0"></iframe></div>';
        html += '</div>';

        if (!$('#app_common_modal').length) {

            $('body').append(html);
        }
        $('#app_common_modal').fadeIn();
    }

}
</script>

<script>
    function redirectToPage() {
        var selectedOption = document.getElementById("serviceDropdown").value;
        var dropdownElement = document.getElementById("serviceDropdown");

        // Check if the selected option is the default one with value "services"
        if (selectedOption === "services") {
            // Show a tooltip error
            dropdownElement.title = "Please select a valid option.";

            // Add red border to the dropdown
            dropdownElement.style.border = "1px solid red";

            return false;
        }

        var zipCodeInput = document.getElementById("zipCode");
        var zipCode = zipCodeInput.value;

        // Validate ZIP code using a regular expression
        var zipRegex = /^\d{5}$/; // 5-digit ZIP code
        if (!zipRegex.test(zipCode)) {
            // Display error message
            document.getElementById("zipError").style.display = "block";

            // Add red border to the dropdown
            dropdownElement.style.border = "2px solid red";

            return false;
        }

        // Reset the tooltip and border when there is no error
        dropdownElement.title = "";
        dropdownElement.style.border = "";

        // Construct the action URL based on the selected option
        var actionUrl = selectedOption + ".php";

        // Redirect to the constructed action URL
        window.location.href = actionUrl;

        // Return true to allow form submission after redirection
        return true;
    }

    // Function to hide the error message on input change
    function hideError() {
        var dropdownElement = document.getElementById("serviceDropdown");

        // Reset the error styles
        dropdownElement.title = "";
        dropdownElement.style.border = "";

        document.getElementById("zipError").style.display = "none";
    }

    // Function to update the action URL when the service dropdown changes
    function updateAction() {
        var selectedOption = document.getElementById("serviceDropdown").value;
        var formElement = document.getElementById("myForm"); // Replace "myForm" with your form ID
        formElement.action = selectedOption;

        // Reset the tooltip and border when the dropdown changes
        document.getElementById("serviceDropdown").title = "";
        document.getElementById("serviceDropdown").style.border = "";
    }
</script>
<?php include 'includes/footer.php'; ?>


<?php include'includes/header.php' ?>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Contact Us</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style type="text/css">
	body{
		font-size:16px; 
		line-height:28px; 
		color:#000; 
		font-family:Tahoma, Geneva, sans-serif;
		text-align:center;
		}
	h1{ font-size:28px; margin:20px 0;text-align:left;}
	p{ margin:0 0 0; text-align:left; font-size:15px; line-height:22px; letter-spacing:0.5px;}
	p a{ color:#0563c1;}
	h3{ margin:20px 0; text-align:left; font-size:20px; line-height:24px;}
	h2{text-align:left;}	
	h3 a{ color:#0563c1;}
	h4{ text-align:left; font-size:17px;}
	h5{ text-align:left; font-size:14px; line-height:14px; letter-spacing:0.3px; font-weight:600; margin:15px 0 0 0;}

	#wrapper{
		overflow:auto;
		max-height:370px;
		-webkit-overflow-scrolling:touch;
		overflow-x:hidden;
		padding:5px 5px;
	   }
	   
	   .containerx {
  position: relative;
  width: 100%;
  min-height: 100vh;
  padding: 2rem;
  background-color: #fafafa;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}
	   
	   .form {
	       z-index:0;
  width: 100%;
  max-width: 820px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
}

.contact-form {
  background-color: #04d36f;
  position: relative;
}

.circle {
  border-radius: 50%;
  background: linear-gradient(135deg, transparent 20%, #3effa2);
  position: absolute;
}

.circle.one {
  width: 130px;
  height: 130px;
  top: 130px;
  right: -40px;
}

.circle.two {
  width: 80px;
  height: 80px;
  top: 10px;
  right: 30px;
}

.contact-form:before {
  content: "";
  position: absolute;
  width: 26px;
  height: 26px;
  background-color: #04d36f;
  transform: rotate(45deg);
  top: 50px;
  left: -13px;
}

form {
  padding: 2.3rem 2.2rem;
  overflow: hidden;
  position: relative;
}

.title {
  color: #fff;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
  margin-bottom: 0.7rem;
}

.input-container {
  position: relative;
  margin: 1rem 0;
}

.input {
  width: 100%;
  outline: none;
  border: 2px solid #fafafa;
  background: none;
  padding: 0.6rem 1.2rem;
  color: #fff;
  font-weight: 500;
  font-size: 0.95rem;
  letter-spacing: 0.5px;
  border-radius: 5px;
  transition: 0.3s;
}

textarea.input {
  padding: 0.8rem 1.2rem;
  min-height: 150px;
  border-radius: 5px;
  resize: none;
  overflow-y: auto;
}

.input-container label {
  position: absolute;
  top: 50%;
  left: 15px;
  transform: translateY(-50%);
  padding: 0 0.4rem;
  color: #fafafa;
  font-size: 0.9rem;
  font-weight: 400;
  pointer-events: none;
  transition: 0.5s;
  z-index:100;
}

.input-container.textarea label {
  top: 1rem;
  transform: translateY(0);
}

.btn {
  padding: 0.6rem 1.3rem;
  background-color: #fff;
  border: 2px solid #fafafa;
  font-size: 0.95rem;
  color: #1abc9c;
  line-height: 1;
  border-radius: 5px;
  outline: none;
  cursor: pointer;
  transition: 0.3s;
  margin: 0;
  width: 100%;
}

.btn:hover {
  background-color: transparent;
  color: #fff;
}

.input-container span {
  position: absolute;
  top: 0;
  left: 25px;
  transform: translateY(-50%);
  font-size: 0.8rem;
  padding: 0 0.4rem;
  color: transparent;
  pointer-events: none;
}

.input-container span:before,
.input-container span:after {
  content: "";
  position: absolute;
  width: 10%;
  opacity: 0;
  transition: 0.3s;
  height: 5px;
  background-color: #04d36f;
  top: 50%;
  transform: translateY(-50%);
}

.input-container span:before {
  left: 50%;
}

.input-container span:after {
  right: 50%;
}

.input-container.focus label {
  top: 0;
  transform: translateY(-50%);
  left: 25px;
  font-size: 0.8rem;
}

.input-container.focus span:before,
.input-container.focus span:after {
  width: 50%;
  opacity: 1;
}

.contact-info {
  padding: 2.3rem 2.2rem;
  position: relative;
}

.contact-info .title {
  color: #14147e;
}

.text {
  color: #333;
  margin: 1.5rem 0 2rem 0;
}

.information {
  display: flex;
  color: #555;
  margin: 0.7rem 0;
  align-items: center;
  font-size: 0.95rem;
}

.information i {
  color: #14147e;
}

.icon {
  width: 28px;
  margin-right: 0.7rem;
}

.social-media {
  padding: 2rem 0 0 0;
}

.social-media p {
  color: #333;
}

.social-icons {
  display: flex;
  margin-top: 0.5rem;
}

.social-icons a {
  width: 35px;
  height: 35px;
  border-radius: 5px;
  background: linear-gradient(45deg, #1abc9c, #149279);
  color: #fff;
  text-align: center;
  line-height: 35px;
  margin-right: 0.5rem;
  transition: 0.3s;
}

.social-icons a:hover {
  transform: scale(1.05);
}

.contact-info:before {
  content: "";
  position: absolute;
  width: 110px;
  height: 100px;
  border: 22px solid #04d36f;
  border-radius: 50%;
  bottom: -77px;
  right: 50px;
  opacity: 0.3;
}

.big-circle {
    position: absolute;
    width: 450px;
    height: 450px;
    border-radius: 50%;
    background: linear-gradient(to bottom, #04d36f, #04d36f);
    bottom: 61%;
    right: 50%;
    transform: translate(-40%, 38%);
}

.big-circle:after {
  content: "";
  position: absolute;
  width: 360px;
  height: 360px;
  background-color: #fafafa;
  border-radius: 50%;
  top: calc(50% - 180px);
  left: calc(50% - 180px);
}

.square {
  position: absolute;
  height: 400px;
  top: 50%;
  left: 50%;
  transform: translate(181%, 11%);
  opacity: 0.2;
}

@media (max-width: 850px) {
  .form {
    grid-template-columns: 1fr;
  }

  .contact-info:before {
    bottom: initial;
    top: -75px;
    right: 65px;
    transform: scale(0.95);
  }

  .contact-form:before {
    top: -13px;
    left: initial;
    right: 70px;
  }

  .square {
    transform: translate(140%, 43%);
    height: 350px;
  }

  .big-circle {
    bottom: 75%;
    transform: scale(0.9) translate(-40%, 30%);
    right: 50%;
  }

  .text {
    margin: 1rem 0 1.5rem 0;
  }

  .social-media {
    padding: 1.5rem 0 0 0;
  }
}

@media (max-width: 480px) {
  .containerx {
    padding: 1.5rem;
  }

  .contact-info:before {
    display: none;
  }

  .square,
  .big-circle {
    display: none;
  }

  form,
  .contact-info {
   padding: 0.6rem 1rem;
  }

  .text,
  .information,
  .social-media p {
    font-size: 0.8rem;
  }

  .title {
    font-size: 1.15rem;
  }

  .social-icons a {
    width: 30px;
    height: 30px;
    line-height: 30px;
  }

  .icon {
    width: 23px;
  }

  .input {
    padding: 0.45rem 1.2rem;
  }

  .btn {
    padding: 0.45rem 1.2rem;
  }
}


</style>
</head>

<body>
    <!--Blog Banner CSS-->
<div class="blog_banner about_banner">
	<div class="container">
    	<div class="banner_left">
    		<h1 class="banner_heading">Contact Us</h1>
        	<p class="inner__banner__text">Thank you for choosing our home improvement services! We’re here to help transform your house into a space that reflects your vision and lifestyle. Let’s work together to create a beautiful, functional, and comfortable home for you.</p>
        </div>
    </div>
</div>

<!--    <div id="wrapper">-->
<!--        <h3>CUSTOMER CARE</h3> -->
<!--        <h5></h5>-->
<!--        <p></p>-->
        
<!--        <h5>SEND US A MESSAGE:</h5>-->
<!--        <p></p>-->
        
<!--      	<h5>Address:</h3>-->
<!--        <p></p>-->
<!--        <h5>Phone:</h3>-->
<!--        <p>-->


<!--</p>-->
<!--	</div>-->
	
	
	    <div class="containerx">
      <span class="big-circle"></span>
      <div class="form">
        <div class="contact-info">
          <h3 class="title">WE ARE HERE FOR YOU!</h3>
          <p class="text">
            Empowering you with support and solutions.
          </p>

          <div class="info">
            <div class="information">
              <i class="fas fa-map-marker-alt"></i> &nbsp &nbsp

              <p>1309 Coffeen Avenue Ste 1200, Sheridan, WY 82801.</p>
            </div>
            <div class="information">
              <i class="fas fa-envelope"></i> &nbsp &nbsp
              <p>service@easyhomeservice.com</p>
            </div>
            <div class="information">
              <i class="fas fa-phone"></i>&nbsp&nbsp
              <p>+13074161843</p>
            </div>
          </div>

          <!--<div class="social-media">-->
          <!--  <p>Connect with us :</p>-->
          <!--  <div class="social-icons">-->
          <!--    <a href="#">-->
          <!--      <i class="fab fa-facebook-f"></i>-->
          <!--    </a>-->
          <!--    <a href="#">-->
          <!--      <i class="fab fa-twitter"></i>-->
          <!--    </a>-->
          <!--    <a href="#">-->
          <!--      <i class="fab fa-instagram"></i>-->
          <!--    </a>-->
          <!--    <a href="#">-->
          <!--      <i class="fab fa-linkedin-in"></i>-->
          <!--    </a>-->
          <!--  </div>-->
          <!--</div>-->
        </div>

<div class="contact-form">
    <span class="circle one"></span>
    <span class="circle two"></span>

    <form id="contactForm" method="POST">
        <div class="input-container">
            <input type="text" name="name" class="input" required />
            <label for="">Name</label>
            <span>Name</span>
        </div>
        <div class="input-container">
            <input type="email" name="email" class="input" required />
            <label for="">Email</label>
            <span>Email</span>
        </div>
        <div class="input-container">
            <input type="tel" name="phone" class="input" required />
            <label for="">Phone</label>
            <span>Phone</span>
        </div>
        <div class="input-container textarea">
            <textarea name="message" class="input" required></textarea>
            <label for="">Message</label>
            <span>Message</span>
        </div>
        <input type="submit" value="Submit" class="btn" />
    </form>

</div>

        
      </div>
    </div>
	

<?php include'includes/footer.php' ?>


<script>
    const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});

</script>

<?php
$servername = "localhost";
$username = "easyhomeservi_contactform";
$password = "easyhomeservi_contactform";
$dbname = "easyhomeservi_contactform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Escape special characters for use in the SQL statement
    $name = $conn->real_escape_string($name);
    $email = $conn->real_escape_string($email);
    $phone = $conn->real_escape_string($phone);
    $message = $conn->real_escape_string($message);

    // SQL query
    $sql = "INSERT INTO enquiry (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        // Email configuration
        $to = "service@easyhomeservice.com";
        $subject = "Easyhomeservice New Enquiry from Contact Form";
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
        $headers = "From: no-reply@easyhomeservice.com\r\n";
        $headers .= "Reply-To: $email\r\n";

        // Send email
        if (mail($to, $subject, $body, $headers)) {
            // Redirect to a thank you page or another location
            header("Location: thank-you.php");
            exit;
        } else {
            echo "Failed to send email.";
        }
    } else {
        // Error handling can be done here
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>






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

<?php include'header.php' ?>	
<style>
    /*====section_5====*/
.section_5 {
    float: left;
    width: 100%;
    padding: 30px 0 90px;
    background: #e8f0fb;
    display: block;
}
.s5_left{
	float:left;
	width:71%;
	text-align:left;
	}
.s5_text{
	float:left;
	width:100%;
	font-size:20px;
	line-height:26px;
	color:#000;
	font-weight:500;
	margin-top:20px;
	}
.customer_review_row{
	float:left;
	width:100%;
	padding:30px 0 0 0;
	}
.customer_review_col{
	display:inline-block;
	vertical-align:middle;
	width:460px !important;
	padding:30px 30px 25px 25px;
	border-radius:15px;
	background:#fff;
	box-shadow:0 6px 5px 2px rgba(0,0,0,0.1);
	-webkit-box-shadow:0 6px 5px 2px rgba(0,0,0,0.1);
	position:relative;
	}
.cust_review_img{
	position:absolute;
	bottom:-40px;
	left:-40px;
	border:4px solid #fff;
	border-radius:50%;
	box-shadow:0 5px 4px 2px rgba(0,0,0,0.2);
	-webkit-box-shadow:0 5px 4px 2px rgba(0,0,0,0.2);
	}
.cust_rev_col_inner{
	float:left;
	width:100%;
	position:relative;
	padding-left:40px;
	text-align:left;
	}
.rev-qt_icon{
	position:absolute;
	left:0;
	top:0;
	}
.star{
	float:left;
	width:75px;
	}
.review_topic{
	float:left;
	margin:-6px 0 0 15px;
	padding:5px 10px;
	border-radius:6px;
	font-size:12px;
	line-height:18px;
	color:#131313;
	background:#deecff;
	font-weight:500;
	}
.cust_rev_col_inner .common_text{ margin-top:15px;}
.customer_name{
	float:left;
	width:100%;
	font-size:14px;
	line-height:20px;
	color:#00c838;
	font-weight:normal;
	margin-top:30px;
	}
.customer_name span{
	font-size:18px;
	line-height:26px;
	color:#14147e;
	font-weight:700;
	}

.testimonial_banner {
    background: url(../images/testimonial/testimonial_banner.jpg) no-repeat center top #e8f0fb;
}



/*slick.css*/
/* Slider */
.slick-slider{
	position: relative;
	display: block;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	-webkit-touch-callout: none;
	-khtml-user-select: none;
	-ms-touch-action: pan-y;
	touch-action: pan-y;
	-webkit-tap-highlight-color: transparent;
	}
.slick-list{
	position: relative;
	display: block;
	overflow: hidden;
	margin: 0;
	}
.slick-list:focus{outline: none;}
.slick-list.dragging{cursor: pointer;cursor: hand;}
.slick-slider .slick-track,
.slick-slider .slick-list{
	-webkit-transform: translate3d(0, 0, 0);
	   -moz-transform: translate3d(0, 0, 0);
		-ms-transform: translate3d(0, 0, 0);
		 -o-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0);
	}

.slick-track{
	position: relative;
	top: 0;
	left: 0;
	display: block;
	}
.slick-track:before,
.slick-track:after{
	display: table;
	content: '';
	}
.slick-track:after{ clear: both;}
.slick-loading .slick-track{visibility: hidden;}
.slick-slide{display: none;float: left;height: 100%;min-height: 1px; outline:none;}

[dir='rtl'] .slick-slide{float: right;}
/*.slick-slide img{ display: block;}*/
.slick-slide.slick-loading img{ display: none;}
.slick-slide.dragging img{ pointer-events: none;}
.slick-initialized .slick-slide{display: block;}
.slick-loading .slick-slide{ visibility: hidden;}
.slick-vertical .slick-slide{
	display: block;
	height: auto;
	border: 1px solid transparent;
	}
.slick-arrow.slick-hidden {display: none;}
.btnnone.slick-prev.slick-arrow{display: none;}


/* Arrows */
.slick-prev, .slick-next {
	position: absolute;
	top:42%;
	display: block;
	padding: 0;
	outline: none;
	border: none;
	z-index: 2;
	cursor: pointer;
	width:30px;
	height:39px;
	margin-top:0px;	
	}
.slick-prev{
	left:0px;
	background: url(../images/prev.png) no-repeat top left;
	}
.slick-next{
	right:0px;
	background: url(../images/next.png) no-repeat top right;
	}
.s4_review_row .slick-prev, .s4_review_row .slick-next{
	width:20px;
	height:40px;
	}
.s4_review_row .slick-prev{
	left:-20px;
	background: url(../images/prev.png) no-repeat top left;
	background-size:100%;
	}
.s4_review_row .slick-next{
	right:-20px;
	background: url(../images/next.png) no-repeat top right;
	background-size:100%;
	}	
/*============dots=======*/

ul.slick-dots{
	display:inline-block;
	vertical-align:top;
	margin-top:10px;
	text-align:center;
	}

ul.slick-dots li{
	display: inline-block;
    vertical-align: middle;
    margin: 0 2px;
    cursor: pointer;
    width: 16px;
    padding: 0;
    border: none;
    border-radius: 100%;
	}
ul.slick-dots li button{
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background:#cfd3d7;
	text-indent: -9999px;
	display: block;
	outline:none;
	border:none;
	padding:0;
	}
ul.slick-dots li.slick-active button{background:#3d348b;}


.customer_review_row .slick-slide{ margin:25px 20px 25px;}
.customer_review_row .slick-prev, .customer_review_row .slick-next {
	width:57px;
	height:58px;
	top:100%;
	box-shadow:0 0 7px 2px rgba(0,0,0,0.1);
	-webkit-box-shadow:0 0 7px 2px rgba(0,0,0,0.1);
	border-radius:50%;
	}
.customer_review_row .slick-prev {
	background: url(../images/rev-prev-act.png) no-repeat center center;
	background-size:100%;
    left: 47%;
    right:200px;
	}
.customer_review_row .slick-next {
	background: url(../images/rev-next-act.png) no-repeat center center;
	background-size:100%;
    left: auto;
    right: 44%;
	}	

@media only screen and (max-width:1023px){

	}
@media only screen and (max-width:767px){

.customer_review_row .slick-slide{ margin:10px 20px 10px;}
.customer_review_row .slick-prev, .customer_review_row .slick-next {
    width: 35px; 
    height: 35px; 
    top: 100%; 
    background-size:100%;
    
}
.customer_review_row .slick-next { right: 40%;}
.customer_review_row .slick-prev { right: auto; left:35%;}

}

/*slick.css*/


 @media screen and (max-width:767px){
     .customer_review_col{
         width:300px!important;
     }
 }

 

</style>
<div class="blog_banner testimonial_banner">
	<div class="container">
    	<div class="banner_left">
    	    <p class="common_heading">What Our Customers <br class="showMob">Are Saying...</p>
    		
        	<p class="inner__banner__text">Thank you for choosing our home improvement service! We’re here to help transform your house into a space that reflects your vision and lifestyle. Let’s work together to create a beautiful, functional, and comfortable home for you.</p>
        </div>
    </div>
</div>
<div class="section_5">

    <div class="customer_review_row">
        <div class="customer_review_col">
            <div class="cust_rev_col_inner">
                <img src="images/rev-qt_icon.png" class="rev-qt_icon" width="21" height="16" alt="qt icon">
                <img src="images/star.png" class="star" width="300" height="60" alt="star">
                <p class="review_topic">Bathroom</p>
                
                <p class="common_text">Delighted with my bathroom renovation! Professional team, timely completion, and impressive craftsmanship. The new bathroom is a perfect blend of style and functionality. Highly recommend for a spa-like retreat.</p>
                
                <p class="customer_name"><img src="images/testimonial/Person1.jpeg" class="cust_review_img" width="68" height="68" alt="img"><span>Mary L.</span> Verified Subscriber</p>
            </div>
        </div>
        
        <div class="customer_review_col">
            <div class="cust_rev_col_inner">
                <img src="images/rev-qt_icon.png" class="rev-qt_icon" width="21" height="16" alt="qt icon">
                <img src="images/star.png" class="star" width="300" height="60" alt="star">
                <p class="review_topic" style="background:#deffef;">Kitchen</p>
                
                <p class="common_text">Thrilled with my kitchen renovation! The team showcased professionalism, attention to detail, and delivered a beautiful, functional space. On-time and within budget. Highly recommend for a stunning kitchen transformation.</p>
                
                <p class="customer_name"><img src="images/testimonial/Person10.jpeg" class="cust_review_img" width="68" height="68" alt="img"><span>Russell M.</span> Verified Subscriber</p>
            </div>
        </div>
        
        <div class="customer_review_col">
            <div class="cust_rev_col_inner">
                <img src="images/rev-qt_icon.png" class="rev-qt_icon" width="21" height="16" alt="qt icon">
                <img src="images/star.png" class="star" width="300" height="60" alt="star">
                <p class="review_topic" style="background:#fff5de;">Roofing</p>
                
                <p class="common_text">Pleased with the roofing renovation! The professional team, quality materials, and timely completion exceeded expectations. The new roof enhances both aesthetics and functionality. Highly recommend for roofing services.</p>
                
                <p class="customer_name"><img src="images/testimonial/Person2.jpeg" class="cust_review_img" width="68" height="68" alt="img"><span>Maria J.</span> Verified Subscriber</p>
            </div>
        </div>
        
        <div class="customer_review_col">
            <div class="cust_rev_col_inner">
                <img src="images/rev-qt_icon.png" class="rev-qt_icon" width="21" height="16" alt="qt icon">
                <img src="images/star.png" class="star" width="300" height="60" alt="star">
                <p class="review_topic" style="background:#ffdede;">Walk-In Tub</p>
                
                <p class="common_text">Exceptional walk-in tub installation! The team was exceptionally professional, ensuring safety and accessibility. On-time completion and excellent service. Highly recommend for quality and reliable walk-in tub solutions.</p>
                
                <p class="customer_name"><img src="images/testimonial/Person9.jpeg" class="cust_review_img" width="68" height="68" alt="img"><span>Aaron A.</span> Verified Subscriber</p>
            </div>
        </div>
        
        
        
        
                <div class="customer_review_col">
            <div class="cust_rev_col_inner">
                <img src="images/rev-qt_icon.png" class="rev-qt_icon" width="21" height="16" alt="qt icon">
                <img src="images/star.png" class="star" width="300" height="60" alt="star">
                <p class="review_topic" >Handyman</p>
                
                <p class="common_text">Impressed with the handyman's flooring renovation! Expertise, precision, and efficiency were evident, transforming my space beyond expectations. Highly recommend for top-quality handyman solutions.</p>
                
                <p class="customer_name"><img src="images/testimonial/Person3.jpeg" class="cust_review_img" width="68" height="68" alt="img"><span>Holly W.</span> Verified Subscriber</p>
            </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        
           <div class="customer_review_col">
            <div class="cust_rev_col_inner">
                <img src="images/rev-qt_icon.png" class="rev-qt_icon" width="21" height="16" alt="qt icon">
                <img src="images/star.png" class="star" width="300" height="60" alt="star">
                <p class="review_topic" style="background:#deffef;">Solar</p>
                
                <p class="common_text">Outstanding solar installation! The team was exceptionally knowledgeable, efficient, and delivered a sustainable energy solution. On-budget and timely completion. Highly recommend for reliable and innovative solar services.</p>
                
                <p class="customer_name"><img src="images/testimonial/Person8.jpeg" class="cust_review_img" width="68" height="68" alt="img"><span>John N.</span> Verified Subscriber</p>
            </div>
        </div>
        
         <div class="customer_review_col">
            <div class="cust_rev_col_inner">
                <img src="images/rev-qt_icon.png" class="rev-qt_icon" width="21" height="16" alt="qt icon">
                <img src="images/star.png" class="star" width="300" height="60" alt="star">
                <p class="review_topic" style="background:#fff5de;">Gutter</p>
                
                <p class="common_text">Impressed with the gutter installation! Professional team, efficient work, and excellent attention to detail. The new gutters enhance both the appearance and functionality of my home. Highly recommend for gutter solutions.</p>
                
                <p class="customer_name"><img src="images/testimonial/Person4.jpeg" class="cust_review_img" width="68" height="68" alt="img"><span>Willie D.</span> Verified Subscriber</p>
            </div>
        </div>
        
        
         <div class="customer_review_col">
            <div class="cust_rev_col_inner">
                <img src="images/rev-qt_icon.png" class="rev-qt_icon" width="21" height="16" alt="qt icon">
                <img src="images/star.png" class="star" width="300" height="60" alt="star">
                <p class="review_topic" style="background:#ffdede;">Siding</p>
                
                <p class="common_text">Exceptional siding renovation! The team showcased remarkable skill and precision, expertly transforming the exterior. On-time and within budget. Highly recommend for top-notch, reliableand budget-friendly siding solutions.</p>
                
                <p class="customer_name"><img src="images/testimonial/Person7.jpeg" class="cust_review_img" width="68" height="68" alt="img"><span>Riley M.</span> Verified Subscriber</p>
            </div>
        </div>
        
         <div class="customer_review_col">
            <div class="cust_rev_col_inner">
                <img src="images/rev-qt_icon.png" class="rev-qt_icon" width="21" height="16" alt="qt icon">
                <img src="images/star.png" class="star" width="300" height="60" alt="star">
                <p class="review_topic">Window</p>
                
                <p class="common_text">Delighted with the window replacement! Professional team, quality products, and timely completion. The new windows enhance energy efficiency and aesthetics. Highly recommend for window replacement needs.</p>
                
                <p class="customer_name"><img src="images/testimonial/Person5.jpeg" class="cust_review_img" width="68" height="68" alt="img"><span>Imelda C.</span> Verified Subscriber</p>
            </div>
        </div>
        
        
         <div class="customer_review_col">
            <div class="cust_rev_col_inner">
                <img src="images/rev-qt_icon.png" class="rev-qt_icon" width="21" height="16" alt="qt icon">
                <img src="images/star.png" class="star" width="300" height="60" alt="star">
                <p class="review_topic" style="background:#deffef;">HVAC</p>
                
                <p class="common_text">Exceptional HVAC service! The team exhibited expertise, addressed all concerns promptly, and completed the project on time. The improved heating and cooling make a significant difference. Highly recommend for HVAC needs.</p>
                
                <p class="customer_name"><img src="images/testimonial/Person6.jpeg" class="cust_review_img" width="68" height="68" alt="img"><span>Jorge M.</span> Verified Subscriber</p>
            </div>
        </div>
        
        
        
        
        
        
    </div>
</div>

<?php include'footer.php' ?>



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
</body>
</html>




<?php include'header.php' ?>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>



<style>

.nav-pills .nav-link{
    border-radius:10px!important;
}
.nav-pills-custom .nav-link {
    color: #030303;
    background: #fff;
    position: relative;
}

.nav-pills-custom .nav-link.active {
    color: #ffffff;
    background: #000073;
}
.nav {
    text-align:center;
}
a.header-btn {

color: #fff!important;
}

.header_call a {
    text-decoration: none!important;
}
.top_strip {
    text-align:center;
}
.footer {
    text-align: center!important;
}

.s1_help_box_col {
    width: 100%;
}
/* Add indicator arrow for the active tab */
@media (min-width: 992px) {
    .nav-pills-custom .nav-link::before {
        content: '';
        display: none;
        border-top: 8px solid transparent;
        border-left: 10px solid #fff;
        border-bottom: 8px solid transparent;
        position: absolute;
        top: 50%;
        right: -10px;
        transform: translateY(-50%);
        opacity: 0;
    }
}

.nav-pills-custom .nav-link.active::before {
    opacity: 1;
}
.mycontainer {
    width: 80%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
   
}
.bg {
  
    background-image:url('https://easyhomeservice.com/images/banner.jpg'); 
    background-repeat:no-repeat;
    background-size: cover;
}

/*p{*/
/*    text-align:center;*/
/*}*/
.s1_serv_box_col {
    width: 100%;
    
}
/*-----------*/
    .list-group-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem;
        margin-bottom: 1rem;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
        box-sizing: border-box;
        text-decoration: none; /* Remove default underline for anchor tags */
        color: #333; /* Set the color for the text */
    }

    .list-group-item i {
        font-size: 24px;
        margin-right: 10px;
    }
    
    .tabs{
        padding-top:10%;
    }
    
    @media screen and (max-width:768px)
    {
        h5{
            font-size:14px;
        }
    }
    
</style>












<!-- Demo header-->
<div class="container-fluid bg">
    
    <div class="services_banner">
	<div class="container">
    	 <p class="banner_heading text-center">Choose Your Home Service</p>
    	 
    	<h5 class="text-center">Discover a range of home improvement options designed to suit your needs.</h5>
    </div>
</div>
    <div class="mycontainer tabs">
        <div class="text-center text-white">
            
        </div>


        <div class="row">
            <div class="col-md-2 mt-2">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-2 p-3 mt-1 shadow active" id="v-pills-trending-tab" data-toggle="pill" href="#v-pills-trending" role="tab" aria-controls="v-pills-trending" aria-selected="true">
                        <i class="d-none fa fa-star mr-2"></i>
                        
                        <span class="font-weight-bold ">Trending</span></a>

                    <a class="nav-link mb-2 p-3 shadow" id="v-pills-interior-tab" data-toggle="pill" href="#v-pills-interior" role="tab" aria-controls="v-pills-interior" aria-selected="false">
                        <i class=" d-none fa fa-calendar-minus-o mr-2"></i>
                        <span class="font-weight-bold">Interior</span></a>

                    <a class="nav-link mb-2 p-3 shadow" id="v-pills-exterior-tab" data-toggle="pill" href="#v-pills-exterior" role="tab" aria-controls="v-pills-exterior" aria-selected="false">
                       <i class="d-none fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold">Exterior</span></a>

           
                    </div>
            </div>


            <div class="col-md-10">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade  rounded  show active" id="v-pills-trending" role="tabpanel" aria-labelledby="v-pills-trending-tab">
   
                        <div class="row">
                           
                           <!--service-->
                            <div class="col-6 col-md-3 pb-2">
                              <div class="s1_help_box_col">
            	                <div class="hlp_img_box" onclick="window.location.href='roofing-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'">
            	                    <a><img src="images/s1_help_icon1.png" width="200" height="200" alt="icon"><p class="text-center">Roofing</p></a></div>
                                </div>
                            </div>
                      
                      
                       <!--service-->
                      <div class="col-6 col-md-3 pb-2">
                               <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="window.location.href='window-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'"><a><img src="images/s1_help_icon2.png" width="200" height="200" alt="icon"><p class="text-center">Windows</p></a></div>
            </div>
                  
                  
                  
                            </div>
                           
                     
                     <!--service-->
                   <div class="col-6 col-md-3 pb-2">
                       
                       
                             <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="window.location.href='solar-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'"><a><img src="images/s1_help_icon3.png" width="200" height="200" alt="icon"><p class="text-center">Solar</p></a></div>
            </div>
                            </div>
                    
                            <!--service-->
                        <div class="col-6 col-md-3 pb-2">
                               <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="window.location.href='hvac-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'"><a><img src="images/s1_help_icon4.png" width="200" height="200" alt="icon"><p class="text-center">HVAC</p></a></div>
            </div>
                            </div>
                            
                     <!--service-->
                     <div class="col-md-3 my-2 col-6">
                          <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="window.location.href='bathroom-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'"><a><img src="images/s1_help_icon5.png" width="200" height="200" alt="icon"><p class="text-center">Bathroom</p></a></div>
            </div>
                     </div>       
                            
        
        
                 <!--service-->
                     <div class="col-md-3 my-2 col-6">
             <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="window.location.href='kitchen-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'"><a><img src="images/s1_help_icon6.png"  width="200" height="200" alt="icon"><p class="text-center">Kitchen</p></a></div>
            </div>
                     </div>       
                            
                           <!--service-->          
                     <div class="col-md-3 my-2 col-6">
                        <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="window.location.href='siding-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'"><a><img src="images/s1_help_icon9.png" width="200" height="200" alt="icon"><p class="text-center">Siding</p></a></div>
            </div>
                     </div>       
                            
                            <!--service-->         
                     <div class="col-md-3 my-2 col-6">
                        <div class="s1_help_box_col hideMob">
            	<div class="hlp_img_box" onclick="window.location.href='walktub-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'"><a><img src="images/s1_help_icon10.png" width="200" height="200" alt="icon"><p class="text-center">Walk-In Tubs</p></a></div>
            </div>
                     </div>       
                            
                            
                             <!--service-->
                          <div class="col-md-3 my-2 col-6">
                          <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="window.location.href='gutter-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'"><a><img src="images/s1_help_icon7.png" width="200" height="200" alt="icon"><p class="text-center">Gutter</p></a></div>
            </div>
                     </div>         
                            
                            
                            
                            
                            
                            
                           <!--service-->  
                <div class="col-md-3 my-2 col-6">
                          <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="window.location.href='handyman-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'"><a><img src="images/Handyman 200-01.svg" width="200" height="200" alt="icon"><p class="text-center">Handyman</p></a></div>
            </div>
                     </div>  
        
        
    
                            
                        </div>
                        
</div>  


                    <div class="tab-pane fade  rounded " id="v-pills-interior" role="tabpanel" aria-labelledby="v-pills-interior-tab">
                                        <div class="row">
                                            
                            <!--service-->
                      <div class="col-6 col-md-3 pb-2">
                                <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="window.location.href='hvac-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'"><a><img src="images/s1_help_icon4.png" width="200" height="200" alt="icon"><p class="text-center">HVAC</p></a></div>
            </div>
                            </div>
                            
                             <!--service-->
                        <div class="col-6 col-md-3 pb-2">
                          <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="window.location.href='bathroom-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'"><a><img src="images/s1_help_icon5.png" width="200" height="200" alt="icon"><p class="text-center">Bathroom</p></a></div>
            </div>
                     </div>       
                        
                           <!--service-->          
                     <div class="col-md-3 pb-2 col-6">
                         <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="window.location.href='kitchen-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'"><a><img src="images/s1_help_icon6.png"  width="200" height="200" alt="icon"><p class="text-center">Kitchen</p></a></div>
            </div>
            
                     </div>       
                            

                        </div>
                    
                    
                    </div>
                    
                  
                    <div class="tab-pane fade  rounded " id="v-pills-exterior" role="tabpanel" aria-labelledby="v-pills-exterior-tab">
                          <div class="row">
                           
                            <!--service-->
                      <div class="col-6 col-md-3 pb-2">
    
            	 <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="window.location.href='window-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'"><a><img src="images/s1_help_icon2.png" width="200" height="200" alt="icon"><p class="text-center">Windows</p></a></div>
            </div>
            </div>
                          
                           <!--service-->
                        <div class="col-6 col-md-3 pb-2">
                              <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="window.location.href='roofing-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'">
            	<a><img src="images/s1_help_icon1.png" width="200" height="200" alt="icon"><p class="text-center">Roofing</p></a></div>
            </div>
                            </div>
                            
                            
                             <!--service-->
                           <div class="col-6 col-md-3 pb-2">
                      <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="window.location.href='gutter-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'"><a><img src="images/s1_help_icon7.png" width="200" height="200" alt="icon"><p class="text-center">Gutter</p></a></div>
            </div>
                     </div>       
                            
                            
                             <!--service-->
                   <div class="col-6 col-md-3 pb-2">
                              <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="window.location.href='solar-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'"><a><img src="images/s1_help_icon3.png" width="200" height="200" alt="icon"><p class="text-center">Solar</p></a></div>
            </div>
                            </div>
                    
                            <!--service-->
                        <div class="col-md-3 my-2 col-6">
                               <div class="s1_help_box_col">
            	<div class="hlp_img_box" onclick="window.location.href='siding-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'"><a><img src="images/s1_help_icon9.png" width="200" height="200" alt="icon"><p class="text-center">Siding</p></a></div>
            </div>
            
                     </div>       
                            
                        </div>
                    
                    </div>
                    
            
                </div>
            </div>
        </div>
    </div>
</div>








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

<?php include'footer.php' ?>


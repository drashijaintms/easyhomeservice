<meta name="robots" content="noindex,nofollow">
<?php include'header.php' ?>	
<style>

.card-wrap{
  background: #fff;
  border-radius: 20px;
  border: 5px solid #fff;
  overflow: hidden;
  color: #616161;
  box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px,
              rgba(0, 0, 0, 0.23) 0px 6px 6px;
  cursor: pointer;
  transition: all .2s ease-in-out;
}
.card-wrap:hover{
  transform: scale(1.1);
}
.card-header{
  height: 200px;
  width: 100%;
  background: red;
  border-radius:100% 0% 100% 0% / 0% 50% 50% 100%!important;
  display: grid;
  place-items: center;

}

.card-header i{
  color: #fff;
  font-size: 72px;
}
.card-content{
  display: flex;
  flex-direction: column;
  align-items: center;

  margin: 0 auto;
}
.card-title{
    float: left;
    width: 100%;
    font-size: 25px;
    color: #14147e;
    font-weight: 700;
  text-align: center;
  text-transform: uppercase;
  margin-top: 10px;
  margin-bottom: 20px;
  
}

.card-btn{
  border: none;
  border-radius: 100px;
  padding: 5px 30px;
  color: #fff;
  margin-bottom: 15px;
  text-transform: uppercase;
}
.card-header.one{
  background: linear-gradient(to bottom left, #f12711, #f5af19);
}
.card-header.two{
  background: linear-gradient(to bottom left, #7F00FF, #E100FF);
}
.card-header.three{
  background: linear-gradient(to bottom left, #3f2b96, #a8c0ff);
}
.card-header.four{
  background: linear-gradient(to bottom left, #11998e, #38ef7d);
}

.card-btn.one{
  background: linear-gradient(to left, #f12711, #f5af19);
}
.card-btn.two{
  background: linear-gradient(to left, #7F00FF, #E100FF);
}
.card-btn.three{
  background: linear-gradient(to left, #3f2b96, #a8c0ff);
}
.card-btn.four{
  background: linear-gradient(to left, #11998e, #38ef7d);
}
</style>


<div class="container py-5">
    <div class="row">
        <div class="col-lg-4">
           <div class="card-wrap">
  <div class="card-header one">
    <img src="images/investment.png" alt="best roofers near you">
  </div>
  <div class="card-content">
    <h1 class="card-title">To Protect Your Investment</h1>
    <p class="common-text card-text">The best roofing experts stop leaks, mold, and hidden structural damage before they start - keeping your home and family safe from weather-related surprises.</p>
 </div>
</div> 
        </div>
        <div class="col-lg-4">
            <div class="card-wrap">
  <div class="card-header two">
    <img src="images/temp.png" alt="roof repair">
  </div>
  <div class="card-content">
    <h1 class="card-title">Repairs Cut Bills, Qualify for Rebates</h1>
    <p class="common-text card-text">Smart homeowners search for affordable housing because timely residential roofing repairs cost far less than full replacements. Catch it early, fix it fast, save big.</p>
 </div>
</div>
        </div>
        <div class="col-lg-4">
           <div class="card-wrap">
  <div class="card-header three">
    <img src="images/increase.png" alt="Increase Home Value: Remodel or Sell">
  </div>
  <div class="card-content">
    <h1 class="card-title">Increase Home Value: Remodel or Sell.</h1>
    <p class="common-text card-text">A professionally upgraded roof improves insulation, lowers utility bills, and increases resale value - especially when installed by the best roofers near you who know your region’s climate.</p>
 </div>
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
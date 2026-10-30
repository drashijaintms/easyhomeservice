<?php include'header.php' ?>	
<style>
    .banner_dryrot {
    background: url(/images/dryrot-cover.jpg) no-repeat #e8f0fb;
    background-position: right;
    padding: 55px 0 55px;
}
.inner__banner__text {
    font-size: 21px;
    line-height: 30px;
    margin-top: 15px;
    float: left;
    width: 79%;
}
</style>
<!--Inner Banner-->
<div class="inner__banner inner__banner--roof banner_dryrot" id="top_form">
	<div class="container">
    	<div class="inner__banner__left">
        	<img src="images/mobiledryrot.webp" class="inner_banner_mob showMob" width="600" height="400" alt="bnr mob inner">
    		<h1 class="banner_heading">Get Connected with Trusted Dry Rot Experts Near You</h1>
            
            <p class="inner__banner__text">Connect with trusted professionals through Easy Home Service for dry rot expert services with experienced dry rot experts, helping restore damaged wood and protect your home’s structure for long-lasting durability.</p>
            <div class="banner_quote_box inner__banner__quote-box">
                <div class="error-message"></div>

                <div class="banner_quote_box_inner">
                    <form id="myForm" action="dryrot-steps.php" method="get">
                        <div class="form_fild">
                            <input required type="tel" id="input_field_zip" class="input_field input_field_zip" placeholder="Your ZIP Code" pattern="[0-9]{5}" maxlength="5" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" inputmode="numeric" name="zip">
                            <button type="submit" class="quote_btn">Get A Quote</button>
                        </div>
                    </form>
                </div>
                
                <div class="form_note_text"><img src="images/lock.png" alt="lock" width="50" height="67"> <p>Your information is 100% secure & confidential.</p></div>
            </div>
        </div>
    </div>
</div>


<div class="section_2">
  <div class="container">
    <h2 class="common_heading">Professional Dry Rot Repair Services We Help You Find</h2>
    <p class="common_text">From early-stage damage to full structural restoration, Easy Home Service connects you with trusted dry rot repair services for dry rot specialists restoring your home's structure and protecting it against deterioration. It helps prevent further decay.</p> 
    <?php include 'gallery.php';?>
  </div>
</div>
<?php include 'section-include/additional-services/additional-services.php';?>
<?php include 'section-include/warning-signs/warning-signs.php';?>
<?php include 'how-works.php';?>
<?php include 'section-include/inner-section/inner-section.php';?>
<?php include 'section-include/benefits/benefits.php'; ?> 
<?php include'testimonials.php' ?> 
<?php include 'state-cities.php';?> 
<?php include 'section-include/faq/faq.php';?> 



<?php include'footer.php' ?> 
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bookmarkscroll.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
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
      slidesToShow: 4,
      slidesToScroll: 1,
      centerMode: true,
      variableWidth: true,
      responsive: [{
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true,
          dots: false,
          centerMode: true,
          variableWidth: true,
        }
      }]
    });
    $(".acdn-heading").click(function() {
      var questionDiv = $(this);
      var answerDiv = $(this).next('.acdn-content');
      var idx = $('.acdn-content').index(answerDiv);
      $('.acdn-content').each(function(index, ansDiv) {
        if (index != idx && $(ansDiv).is(':visible')) {
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
    if ($(this).scrollTop() > 40) {
      $('.top-fix-bar').addClass('fixed-nav');
    } else {
      $('.top-fix-bar').removeClass('fixed-nav');
    }
    if ($(this).scrollTop() > 10) {
      $('.mobilemenu').addClass('mobimenu-top');
    } else {
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
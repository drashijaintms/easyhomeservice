<?php include'header.php' ?>
<link rel="stylesheet" href="css/window-style.css">
<!--Inner Banner-->
<div class="inner__banner inner__banner--roof banner_window-new" id="top_form">
  <div class="container">
    <div class="inner__banner__left">
      <img src="images/window-mobile.png" class="inner_banner_mob showMob" width="600" height="400" alt="Window Experts, best home replacement windows, best affordable windows">
      <h1 class="banner_heading">Work With the Best <br> Window Experts Near You </h1>
      <p class="inner__banner__text">Upgrade your view with window experts who bring style, savings, and reliability to your doorstep. Discover the best home replacement windows from trusted local pros quick, clean, and built to last. </p>
      <div class="banner_quote_box inner__banner__quote-box">
        <div class="error-message"></div>
        <div class="banner_quote_box_inner">
          <form id="myForm" action="window-steps.php" method="get">
            <div class="form_fild">
              <input type="tel" required type="tel" id="input_field_zip" class="input_field_zip input_field" placeholder="Your ZIP Code" pattern="[0-9]{5}" maxlength="5" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" inputmode="numeric" name="zip">
              <button type="submit" class="quote_btn">Get A Quote</button>
            </div>
          </form>
        </div>
        <div class="form_note_text">
          <img src="images/lock.png" alt="lock" width="50" height="67">
          <p>Your information is 100% secure & confidential.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section_2">
  <div class="container">
    <h2 class="common_heading">Turn Your Dream Window into Reality with Trusted Local Window Experts</h2>
    <p class="common_text">Windows play a key role in your home’s comfort and overall appearance. Easy Home Service makes homeowners find experienced window experts who specialize in window repair and replacement across the USA. Whether you are dealing with drafts, damaged frames, outdated designs, or planning an upgrade to the best home replacement windows.If you are looking for the best windows within your budget that improve insulation and enhance curb appeal, we help you compare options confidently and move forward with window solutions built for everyday living.</p> <?php include 'gallery.php';?>
  </div>
</div>
<!--section_2--> 
<?php include 'how-works.php';?> 
<?php include 'section-include/inner-section/inner-section.php';?>
<?php include 'section-include/blog-section/blog-slider.php'; ?>
<?php include 'section-include/benefits/benefits.php'; ?>
<?php include'testimonials.php' ?> 
<?php include 'state-cities.php';?> 
<?php include 'section-include/faq/faq.php';?> 
<?php include'promise.php' ?> 
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
<script>
  document.querySelectorAll('.js-input').forEach(function(el) {
    el.addEventListener('change', function() {
      if (el.value && el.value !== "") {
        el.classList.add('not-empty');
      } else {
        el.classList.remove('not-empty');
      }
    });
  });
</script>
</body>
</html>
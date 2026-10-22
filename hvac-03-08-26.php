<?php include'header.php' ?>
<link rel="stylesheet" href="css/hvac-style.css">
<!--Inner Banner-->
<div class="inner__banner inner__banner--roof banner_hvac" id="top_form">
  <div class="container">
    <div class="inner__banner__left">
      <img src="images/hvac_bnr_mob.webp" class="inner_banner_mob showMob" width="600" height="400" alt="hvac services experts, hvac services, commercial hvac repair near me">
      <h1 class="banner_heading">Connect with Trusted and Expert HVAC Services Near You</h1>
      <p class="inner__banner__text">Connect with trusted HVAC experts through Easy Home Service and get quick, reliable residential HVAC services from an expert technician near you. Find dependable solutions from the best HVAC companies whenever you need them. </p>
      <div class="banner_quote_box inner__banner__quote-box">
        <div class="error-message"></div>
        <div class="banner_quote_box_inner">
          <form id="myForm" action="hvac-steps.php" method="get">
            <div class="form_fild">
              <input type="tel" required type="tel" id="input_field_zip" class="input_field_zip input_field" placeholder="Your ZIP Code" pattern="[0-9]{5}" maxlength="5" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" inputmode="numeric" name="zip">
              <button type="submit" class="quote_btn">Get Quote</button>
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
<!--promise-->
<div class="section_2">
  <div class="container">
    <h2 class="common_heading"> Expert Residential HVAC Services We Help You Find</h2>
    <p class="common_text">A comfortable home starts with a dependable heating and cooling system. Easy Home Service is built for homeowners to connect with experienced residential HVAC services experts who deliver reliable solutions for AC repairs, heating services, ventilation, and full system installations across the nation. Whether you are dealing with sudden breakdowns, planning a system upgrade, or need emergency HVAC service, we simplify the process of finding the right professionals. We help you keep your indoor comfort stays consistent, no matter the weather outside.</p> <?php include 'gallery.php';?>
  </div>
</div>
<div class="roofing_section_2">
  <div class="container">
    <h2 class="common_heading">Specialized HVAC Repair Services</h2>
    <p class="common_text">Your home’s comfort really comes down to one thing: a heating and cooling system you can count on, no matter what the weather decides to do. Easy Home Service makes that simple by connecting you with residential HVAC services near you in USA. They deliver fast, accurate, and affordable fixes for heating, air conditioning and ventilation issues. Sudden temperature swings, unexpected breakdowns, or weak airflow, whatever the problem, our experts keep your home comfortable through every season.</p>
    <div class="row">
      <div class="col-lg-12">
        <!-- Rounded Tab Buttons -->
        <div class="custom-tabs">
          <button class="custom-tab-btn mb-3 active" data-tab="#tab1">AC Repair Services</button>
          <button class="custom-tab-btn mb-3" data-tab="#tab2">Ventilation Repair Services</button>
          <button class="custom-tab-btn mb-3" data-tab="#tab3">Heating Repair Services </button>
        </div>
        <!-- Tab Contents -->
        <div class="tab-content-custom">
          <div id="tab1" class="tab-pane-custom active">
            <div class="row d-flex justify-content-evenly align-items-start px-2 gy-4">
              <div class="col-lg-6">
                <h3>AC Repair Services</h3>
                <p>A failing air conditioner could transform your home into an uninviting sauna. And in extreme heat, it's more than simply uncomfortable. Easy Home Service links you with a team of trained AC repair Service experts who take care of problems with cooling of all kinds. </p>
                <p>When your air conditioner is working but not cooling, is leaking refrigerant, causing poor airflow, freezing or displaying signs of thermostat or compressor issues, the Expert will provide speedy and precise repairs. With the right specialists at the helm, you can rest assured that your home is cool, energy efficient and cozy all through summer.</p>
                <div class="d-flex justify-content-center">
                  <a href="/hvac-steps" class="hvac-btn">Get Quote Now</a>
                </div>
              </div>
              <div class="col-lg-6">
                <img src="/images/states/hvac/ac-repair.webp" class="hvac-s-img" alt="AC Repair service across all states of US">
              </div>
            </div>
          </div>
          <div id="tab2" class="tab-pane-custom">
            <div class="row d-flex justify-content-evenly align-items-start px-2 gy-4">
              <div class="col-lg-6">
                <h3>Ventilation Repair Services</h3>
                <p>Effective ventilation is the first step toward good indoor air quality. Maintaining clean, reliable airflow throughout your house is the goal of our ventilation repair experts. They fix broken vents, failing fan motors, duct blockages, exhaust system tuning, and airflow imbalances that lead to uneven temperatures. </p>
                <p>Your house will feel fresher, easier to breathe in, and more comfortable all year round once your ventilation system is back in working order - there won't be any lingering hot or cold spots.</p>
                <div class="d-flex justify-content-center">
                  <a href="/hvac-steps" class="hvac-btn">Get Quote Now</a>
                </div>
              </div>
              <div class="col-lg-6">
                <img src="/images/states/hvac/ventilation.webp" class="hvac-s-img" alt="Ventilation service across all states of US">
              </div>
            </div>
          </div>
          <div id="tab3" class="tab-pane-custom">
            <div class="row d-flex justify-content-evenly align-items-start px-2 gy-4">
              <div class="col-lg-6">
                <h3>Heating Repair Services</h3>
                <p>If your heating stops working, is more than just an inconvenience. It's a problem that has to be fixed right away. Our HVAC technicians provide Heating Repair Services that will bring warm air back into your home in a short time.</p>
                <p>If the furnace isn't starting or if the heating system has stopped blowing cool air, or the heating system is constantly switching off and on, they can identify the problem quickly and repair the issue right in the very first attempt. From odd smells and noises, to thermostat malfunctions and failures of the heat pump, they ensure that your heating system remains reliable and efficient through the winter seasons.</p>
                <div class="d-flex justify-content-center">
                  <a href="/hvac-steps" class="hvac-btn">Get Quote Now</a>
                </div>
              </div>
              <div class="col-lg-6">
                <img src="/images/states/hvac/heating-system.webp" class="hvac-s-img" alt="Heating System service across all states of US">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
<?php include 'how-works.php';?>
<?php include 'section-include/inner-section/inner-section.php';?>
<!-- Kansas -->
<div class="roofing_section_2 blog-section py-5 bg-light">
  <div class="container">
    <div class="text-center">
      <h2 class="common_heading inner_common_head">Everything Homeowners Need to Know About HVAC Services</h2>
      <p class="common_text">From classic designs to modern efficiency - explore our blogs to find the best residential HVAC Services for your home.</p>
    </div> 
    <?php include 'blog-slider.php';?>
  </div>
</div>
<?php include 'section-include/benefits/benefits.php'; ?>
<?php include'testimonials.php' ?> 
<div class="section_4"> 
<?php include 'service.php';?> 
</div> 
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
  /* ---------------- jQuery Tabs ---------------- */
  $(document).ready(function() {
    $(".custom-tab-btn").click(function() {
      // remove active class from all
      $(".custom-tab-btn").removeClass("active");
      $(".tab-pane-custom").removeClass("active");
      // add active class to clicked tab
      $(this).addClass("active");
      // show matching content
      $($(this).data("tab")).addClass("active");
    });
  });
</script>
</body>
</html>
<?php include'header.php' ?>
<link rel="stylesheet" href="css/roofing-style.css">
<!--Inner Banner-->
<div class="inner__banner inner__banner--roof-1" id="top_form">
  <div class="container">
    <div class="inner__banner__left">
      <img src="images/roofing-header-mob.webp" class="inner_banner_mob showMob" width="600" height="400" alt="Roofing Experts, emergency roof repairs near me" loading="eager" fetchpriority="high" decoding="async">
      <h1 class="banner_heading">Connect With Expert Roofing Services Near You</h1>
      <p class="inner__banner__text w-80">From minor leaks to full roof replacements, we match homeowners with top- rated residential roofing experts near you. </p>
      <div class="banner_quote_box inner__banner__quote-box">
        <div class="error-message"></div>
        <div class="banner_quote_box_inner">
          <form id="myForm" action="roofing-steps.php" method="get">
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
<div class="section_2">
  <div class="container">
    <h2 class="common_heading">Turn Your Dream Roofing into Reality with Local & Expert Roofing Services</h2>
    <p class="common_text">Your roof is one of the most important parts of your home, and choosing the correct roofing expert makes all the difference. Easy Home Service helps homeowners connect with dependable roofing experts across the USA for everything from residential roofing repairs to full roof installation services. Whether you are dealing with storm damage, aging shingles or sudden leaks that require emergency roof repairs near you, we make it easier to find experienced roof repair specialists who understand local roofing needs.</p> <?php include 'gallery.php';?>
  </div>
</div>
<?php include 'section-include/inner-section/inner-section.php';?>
<?php include 'section-include/additional-services/additional-services.php';?>
<?php include 'section-include/warning-signs/warning-signs.php';?>
<style>
/* SECTION */
.ehs-tabs-section{
    padding:80px 0;
}

.ehs-heading{
    text-align:center;
    max-width:850px;
    margin:0 auto 40px;
}

.ehs-heading h2{
    color:#27346B;
    font-size:48px;
    font-weight:700;
    line-height:1.1;
    margin-bottom:15px;
}

.ehs-heading p{
    font-size:14px;
    line-height:1.7;
    color:#333;
    margin:0;
}

/* WRAPPER */
.ehs-tabs-row{
    display:flex;
    gap:20px;
    justify-content:center;
}

/* LEFT SIDE */
.ehs-left{
    width:33%;
}

.ehs-tab-btn {
    width: 100%;
    background: #fff;
    border: none;
    border-radius: 18px;
    padding: 15px 20px;
    margin-bottom: 12px;
    text-align: left;
    color: #27346B;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    box-shadow: 0 2px 8px rgba(0, 0, 0, .04), 0 6px 18px rgba(0, 0, 0, .06);
    transition: .3s;
}

.ehs-tab-btn:last-child{
    margin-bottom:0;
}

.ehs-tab-btn.active{
    background:#49C46B;
    color:#fff;
}

/* RIGHT SIDE */
.ehs-right{
    width:55%;
    background:#F2F3F5;
    border-radius:18px;
    padding:25px;
    box-shadow:0 2px 8px rgba(0, 0, 0, .04), 0 6px 18px rgba(0, 0, 0, .06);
}

.ehs-tab-content{
    display:none;
}

.ehs-tab-content.active{
    display:block;
}

.ehs-tab-content h3{
    color:#27346B;
    font-size:32px;
    font-weight:700;
    margin-bottom:15px;
}

.ehs-tab-content p{
    color:#222;
    font-size:15px;
    margin-bottom:19px;
}

/* INFO BOXES */
.ehs-info-row{
    display:flex;
    gap:15px;
    text-align:left;
}

.ehs-info-box{
    flex:1;
    background:#fff;
    border:1px solid #49C46B;
    border-radius:16px;
    padding:15px;
    min-height:140px;
}

.ehs-info-box h5{
    color:#27346B;
    font-size:18px;
    font-weight:700;
    margin-bottom:12px;
}

.ehs-info-box ul{
    margin:0;
    padding:0;
    list-style:none;
}

.ehs-info-box li{
    margin-bottom:0;
    font-size:14px;
    color:#222;
}

.ehs-info-box li:last-child{
    margin-bottom:0;
}

.ehs-info-box i{
    color:#49C46B;
    margin-right:8px;
}

/* RESPONSIVE */
@media(max-width:991px){

    .ehs-tabs-row{
        flex-direction:column;
    }

    .ehs-left,
    .ehs-right{
        width:100%;
    }

    .ehs-info-row{
        flex-direction:column;
    }

    .ehs-heading h2{
        font-size:34px;
    }
}
</style>

<section class="section_2 ehs-tabs-section py-5">

    <div class="container">

<div class="row d-flex justify-content-center pb-5">
            <div class="col-lg-10">

                <!-- HEADING -->
                                    <h2 class="common_heading">
                        Roofing Material Options for U.S. Homes                 </h2>
                
                <!-- DESCRIPTION -->
                                    <p class="common_text">
                        Choosing the right roofing material is one of the most important decisions homeowners make. Climate, price, maintenance issues, longevity and even aesthetics should be considered while choosing an ideal roofing system. Here are the common roofing materials options.                   </p>
                
            </div>
        </div>

        <div class="ehs-tabs-wrapper">

<div class="row d-flex justify-content-center">
    <div class="col-lg-10">
        <div class="ehs-tabs-row">

                <!-- LEFT TABS -->

                <div class="ehs-left">

                    <button class="ehs-tab-btn active" data-tab="tab1">
                        Asphalt Shingles
                    </button>

                    <button class="ehs-tab-btn" data-tab="tab2">
                        Architectural Shingles
                    </button>

                    <button class="ehs-tab-btn" data-tab="tab3">
                        Metal Roofing
                    </button>

                    <button class="ehs-tab-btn" data-tab="tab4">
                        Clay &amp; Concrete Tile Roofing
                    </button>

                    <button class="ehs-tab-btn" data-tab="tab5">
                        Slate Roofing
                    </button>

                </div>

                <!-- RIGHT CONTENT -->

                <div class="ehs-right">

                    <!-- TAB 1 -->
                    <div class="ehs-tab-content active" id="tab1">
                        <h3>Asphalt Shingles</h3>

                        <p>
                            Asphalt shingles remain the most popular roofing material in the United States due
                            to affordability, ease of installation and variety of styles.
                        </p>

                        <div class="ehs-info-row">

                            <div class="ehs-info-box">
                                <h5>Pros:</h5>
                                <ul>
                                    <li><i class="fa fa-check"></i>Budget-friendly</li>
                                    <li><i class="fa fa-check"></i>Widely available</li>
                                    <li><i class="fa fa-check"></i>Many color shades</li>
                                </ul>
                            </div>

                            <div class="ehs-info-box">
                                <h5>Lifespan</h5>
                                <ul>
                                    <li><i class="fa fa-check"></i>20–30 years</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- TAB 2 -->
                    <div class="ehs-tab-content" id="tab2">
                        <h3>Architectural Shingles</h3>

                        <p>
                            Architectural shingles offer enhanced durability and a more dimensional appearance
                            compared to standard asphalt shingles.
                        </p>

                        <div class="ehs-info-row">

                            <div class="ehs-info-box">
                                <h5>Pros:</h5>
                                <ul>
                                    <li><i class="fa fa-check"></i>Improved wind resistance</li>
                                    <li><i class="fa fa-check"></i>Better curb appeal</li>
                                    <li><i class="fa fa-check"></i>Longer lifespan</li>
                                </ul>
                            </div>

                            <div class="ehs-info-box">
                                <h5>Lifespan</h5>
                                <ul>
                                    <li><i class="fa fa-check"></i>25–35 years</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- TAB 3 -->
                    <div class="ehs-tab-content" id="tab3">
                        <h3>Metal Roofing</h3>

                        <p>
                            Metal roofing material options continue to grow in popularity due to their exceptional durability and energy efficiency. 
                        </p>

                        <div class="ehs-info-row">

                            <div class="ehs-info-box">
                                <h5>Pros:</h5>
                                <ul>
                                    <li><i class="fa fa-check"></i>Energy-efficient</li>
                                    <li><i class="fa fa-check"></i>Low maintenance</li>
                                    <li><i class="fa fa-check"></i>Excellent weather resistance</li>
                                </ul>
                            </div>

                            <div class="ehs-info-box">
                                <h5>Lifespan</h5>
                                <ul>
                                    <li><i class="fa fa-check"></i>40+ years</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- TAB 4 -->
                    <div class="ehs-tab-content" id="tab4">
                        <h3>Clay & Concrete Tile Roofing</h3>

                        <p>
                            Preferred in tropical areas, tile roof structures have excellent durability and unique looks. It is highly durable and provides an aesthetic appearance.
                        </p>

                        <div class="ehs-info-row">

                            <div class="ehs-info-box">
                                <h5>Pros:</h5>
                                <ul>
                                    <li><i class="fa fa-check"></i>Fire resistant</li>
                                    <li><i class="fa fa-check"></i>Long lifespan</li>
                                    <li><i class="fa fa-check"></i>Premium appearance</li>
                                </ul>
                            </div>

                            <div class="ehs-info-box">
                                <h5>Lifespan</h5>
                                <ul>
                                    <li><i class="fa fa-check"></i>50+ years</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- TAB 5 -->
                    <div class="ehs-tab-content" id="tab5">
                        <h3>Slate Roofing</h3>

                        <p>
                           Slate roofing is among the longest-lasting types of roof coverings available. It is considered one of the most durable roofing materials available.
                        </p>

                        <div class="ehs-info-row">

                            <div class="ehs-info-box">
                                <h5>Pros:</h5>
                                <ul>
                                    <li><i class="fa fa-check"></i>Exceptional longevity</li>
                                    <li><i class="fa fa-check"></i>Premium appearance</li>
                                    <li><i class="fa fa-check"></i>Weather resistant</li>
                                </ul>
                            </div>

                            <div class="ehs-info-box">
                                <h5>Lifespan</h5>
                                <ul>
                                    <li><i class="fa fa-check"></i>75–100+ years</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
    </div>
</div>
            

        </div>

    </div>

</section>

<script>
document.addEventListener("DOMContentLoaded", function(){

    const tabs = document.querySelectorAll(".ehs-tab-btn");
    const contents = document.querySelectorAll(".ehs-tab-content");

    tabs.forEach(function(tab){

        tab.addEventListener("click", function(){

            tabs.forEach(btn => btn.classList.remove("active"));
            contents.forEach(content => content.classList.remove("active"));

            this.classList.add("active");

            document
                .getElementById(this.dataset.tab)
                .classList.add("active");
        });

    });

});
</script>

<style>
.roofing-cost-table {
    background: #ffffff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    margin-top: 20px;
}

.roofing-cost-table table {
    margin: 0;
}

.roofing-cost-table thead th {
    background: #e9e9e9;
    color: #111;
    font-size: 17px;
    font-weight: 600;
    padding: 10px 10px;
    border: none;
}

.roofing-cost-table tbody td {
    font-size: 15px;
    color: #111;
    padding: 10px 10px;
    border-bottom: 1px solid #e5e5e5;
    vertical-align: middle;
}

.roofing-cost-table tbody tr:last-child td {
    border-bottom: none;
}

.roofing-cost-table tbody td:last-child {
    font-weight: 500;
}

@media (max-width: 767px) {
    .roofing-cost-table thead th,
    .roofing-cost-table tbody td {
        padding: 15px 20px;
        font-size: 16px;
    }

    .roofing-cost-table thead th {
        font-size: 18px;
    }
}
.rf-cost-box {
    background: #F1F2F5;
    padding: 15px 20px;
    margin: 0px 0px;
    border-radius: 10px;
    text-align:left;
}
.rf-cost-box h3{
    font-size:25px;
    color:#14147e;
}
.rf-cost-box h3 i {
    color: #45B96A;
}
.rf-cost-box p {
    font-size: 16px;
    margin-top: 20px;
}
.rf-cta-box{
    background: transparent;
    padding: 0;
    box-shadow: none;
    border: 0;
}

.rf-cta-btn {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    background: linear-gradient(90deg, #4ec56c 0%, #42b95f 100%);
    color: #fff;
    text-decoration: none;
    padding: 15px 20px;
    border-radius: 6px;
    font-size: 20px;
    font-weight: 600;
    transition: all .3s ease;
}

.rf-cta-btn i{
    font-size: 25px;
    transition: transform .3s ease;
}

.rf-cta-btn:hover{
    color: #fff;
    transform: translateY(-2px);
}

.rf-cta-btn:hover i{
    transform: translateX(5px);
}

</style>
<section class="section_2">
        <div class="container">

<div class="row d-flex justify-content-center pb-5">
            <div class="col-lg-10">

                <!-- HEADING -->
                                    <h2 class="common_heading">
                        Roofing Cost: What Homeowners Should Expect           </h2>
                
                <!-- DESCRIPTION -->
                                    <p class="common_text">
One of the most common questions homeowners ask is: "How much does a new roof cost?" The answer depends on several factors. The home roofing prices include roof size, material selection, labor requirements, roof complexity, geographic location and existing roof conditions.
               </p>
                
            </div>
        </div>
        <div class="row justify-content-center align-items-stretch g-4">
    
    <div class="col-lg-5 d-flex flex-column gap-4">
        <div class="rf-cost-box flex-grow-1">
            <h3><i class="fa-solid fa-square-check"></i> Average Roofing Cost</h3>
            <p>The national average roofing cost estimates usually range from approximately $5,000 to $15,000, depending on material and job difficulty.</p>
            <p>In some cases, where high-end materials like metal, tile, or slate are used, the roof replacement cost can be above $20,000 or more for residential properties, depending on material type and project complexity.</p>
        </div>

        <div class="rf-cost-box flex-grow-1">
            <h3><i class="fa-solid fa-square-check"></i> Roof Cleaning Services Cost</h3>
            <p>The roof cleaning services cost is an important aspect of maintenance work for homeowners. The general price range for professional roof cleaning service can range between about $300-$1000, based on the size of the roof, accessibility and degree of buildup.</p>
            <p>Regular roof maintenance and cleaning can help extend roof lifespan and reduce the cost to replace the roof.</p>
        </div>
        <div class="rf-cost-box rf-cta-box">
    <a href="https://easyhomeservice.com/roofing-steps" class="rf-cta-btn">
        <span>Get Matched with Local Roofing Pros</span>
        <i class="fa-solid fa-arrow-right-long"></i>
    </a>
</div>
    </div>

    <div class="col-lg-5 d-flex flex-column gap-4">
        <div class="rf-cost-box flex-grow-1">
            <h3><i class="fa-solid fa-square-check"></i> Roofing Cost Per Square</h3>
            <p>Roofers commonly price projects by "squares," with one roofing square equal to 100 square feet of roofing surface. Roofing cost per square can differ depending on what kind of materials you use.</p>

            <div class="roofing-cost-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Roofing Material</th>
                            <th>Typical Cost Per Square</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Asphalt Shingles</td>
                            <td>$350–$700</td>
                        </tr>
                        <tr>
                            <td>Architectural Shingles</td>
                            <td>$450–$900</td>
                        </tr>
                        <tr>
                            <td>Metal Roofing</td>
                            <td>$800–$1,800</td>
                        </tr>
                        <tr>
                            <td>Tile Roofing</td>
                            <td>$1,000–$2,500</td>
                        </tr>
                        <tr>
                            <td>Slate Roofing</td>
                            <td>$1,500–$4,000+</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="rf-cost-box flex-grow-1">
            <h3><i class="fa-solid fa-square-check"></i> Is Roof Replacement Worth the Investment?</h3>
            <p>In addition to protecting the property, a new roof may improve its curb appeal, enhance energy efficiency and overall durability, making it a good investment. For many homeowners, replacing an aging roof before major damage occurs is often more cost-effective than ongoing repairs.</p>
        </div>
    </div>

</div>
</div>
</section>
<?php include 'how-works.php';?>
<!--section_2-->
<div class="section_8">
  <div class="container">
    <h2 class="common_heading mb-5">Why Regular Roofing Inspections <br class="hideMob"> Save You Money </h2>
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-lg-6 col-md-6">
        <img src="images/roofing-img-1.jpg" class="mw-100 new-img" alt="Regular Roofing Inspections">
      </div>
      <div class="col-lg-6 col-md-6">
        <p class="new-text">Waiting for visible leaks is like waiting for your ceiling to send an invoice. Most roof issues start quietly - and by the time you notice them, you’re already spending more than you should.</p>
        <p class="new-text">Our best roofing experts recommend at least one inspection per year, especially if:</p>
        <ul class="new-ul">
          <li> Your roof is older than 10 years.</li>
          <li> You’ve recently experienced a storm or strong wind.</li>
          <li> You see small signs like stains on ceilings or cracked shingles.</li>
        </ul>
        <p class="new-text">Early inspections = smaller repairs, less damage, and longer roof life.</p>
        <p class="new-text">Need help fast? Search for affordable roofing near me and we’ll match you with a local expert today.</p>
        <div class="clearall"></div>
        <div class="btn_box mt-3">
          <p class="btn_top_text">Just Takes 2 Minutes</p>
          <a onclick="window.location.href='roofing-steps?clickid=<?php echo isset($_GET["clickid"]) ? $_GET["clickid"] : ''; ?>&source=<?php echo isset($_GET["source"]) ? $_GET["source"] : '';?>'" class="common_btn">Get a Roof Inspection <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
          </a>
          <p class="btn_text inner_btn_text">
            <img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure & confidential.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'section-include/blog-section/blog-slider.php'; ?>
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


<?php echo $_POST['clickid']; ?>

</body>
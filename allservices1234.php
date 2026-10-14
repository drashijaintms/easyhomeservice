<?php include 'header.php'; ?>

<?php
// Initialize an empty array to store parameters
$params = [];

// Add each parameter to the array if it has a value
if (!empty($_GET["clickid"])) $params[] = "clickid=" . urlencode($_GET["clickid"]);
if (!empty($_GET["source"])) $params[] = "source=" . urlencode($_GET["source"]);
if (!empty($_GET["eventid"])) $params[] = "eventid=" . urlencode($_GET["eventid"]);
if (!empty($_GET["utm_content"])) $params[] = "utm_content=" . urlencode($_GET["utm_content"]);
if (!empty($_GET["utm_term"])) $params[] = "utm_term=" . urlencode($_GET["utm_term"]);
if (!empty($_GET["utm_campaign"])) $params[] = "utm_campaign=" . urlencode($_GET["utm_campaign"]);
if (!empty($_GET["utm_medium"])) $params[] = "utm_medium=" . urlencode($_GET["utm_medium"]);
if (!empty($_GET["utm_source"])) $params[] = "utm_source=" . urlencode($_GET["utm_source"]);
if (!empty($_GET["fbc"])) $params[] = "fbc=" . urlencode($_GET["fbc"]);
if (!empty($_GET["fbp"])) $params[] = "fbp=" . urlencode($_GET["fbp"]);
if (!empty($_GET["gclid"])) $params[] = "gclid=" . urlencode($_GET["gclid"]);

// Combine the parameters into a query string
$myurl = !empty($params) ? "?" . implode("&", $params) : '';
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

<style>

   .jcc {
    justify-content: center;
        
    }
    
    
    @media (min-width: 1400px) {
        .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
            max-width: 1320px;
        }
    }
    .zoom:hover {
        transform: scale(1.035);
        transition: all ease 0.3s;
    }
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
        text-align:left;
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
    .tabs {
        padding-top: 7%;
    }
    
    
    @media screen and (max-width:768px){
    
    .jcc {
    justify-content: end;
    position:relative;
        
    }
    
    input.checkbox:checked ~ .srch_sb_cnt {
        margin-top:-1rem;
    width: 100%!important;
    max-width: 338px!important;
}


    .srch_wrpr {
    position: static!important;
}

.srch_wrpr {
    width: 278px!important;
   
}
.srch_sb_cnt {
    height: 43px!important  ;
    
}

input.checkbox:checked ~ .srch_sb_cnt .srch_btn {
    width: 32px!important;
    height: 32px!important;
}
    }
</style>

<!-- Demo header -->
<div class="container-fluid bg">
    <div class="services_banner">
        <div class="container">
            <H1 class="banner_heading text-center">Choose Your Home Service</h1>
            <h5 class="text-center">Discover a range of home improvement options designed to suit your needs.</h5>
        </div>
    </div>


<!-- Search bar -->
<div class="mycontainer">

<style>
@import url('https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900');
    @import url('https://fonts.googleapis.com/css?family=Playball');
  font-size: 26px; font-weight: 700; text-transform: uppercase; letter-spacing: 3px; transform: translateX(-50%); white-space: nowrap; pointer-events: none; color: #fff; text-shadow: hoff voff blur #000; }
    main:after {content: 'Salman Raza'; font-family: 'Playball', cursive; position: absolute; bottom: -90px; left: 50%; color: rgba(0, 0, 0, 0.02); font-size: 150px; line-height: 140px; white-space: nowrap; text-transform: lowercase; transform: translateX(-50%); pointer-events: none; z-index: -1; }
    .srch_wrpr {float:right; width: 400px; max-width: 400px; height: 70px; position: relative; z-index: 1; }
    .srch_sb_cnt {width: 70px; height: 50px; background-image: linear-gradient(120deg, #e8f0fb 0%, #e8f0fb 100%); background-color: transparent; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); overflow: hidden; transition: all 0.4s ease-in-out 0s; z-index: 0; border-radius: 5px; }
    .sech_txt_inpt {opacity: 0; height: 50px; left: 10px; border-radius: 30px; border: 0; width: 94%; padding: 0 60px 0 15px; background-color: transparent; color: #333; font-size: 15px; transition: all 0.4s ease-in-out 0s; }
    .sech_txt_inpt:focus {letter-spacing: 2px;}
    .sech_txt_inpt:focus, .srch_btn:focus {outline: none;}
    .sech_txt_inpt, .srch_btn {position: absolute; z-index: 1; top: 50%; transform: translateY(-50%); }
    .srch_btn {width: 70px; height: 70px; right: 0; background-image: linear-gradient(120deg, #e8f0fb 0%, #e8f0fb 100%); background-color: transparent; border:0; transition: all 0.4s ease-in-out 0s; font-size: 26px; cursor: pointer; color: #04d36f; }
    .srch_btn:after {position: absolute; content: '\f00d'; font-family: fontAwesome; top: 50%; transform: translateY(-50%) rotate(0deg); right: 10px; height: 30px; width: 30px; font-size: 28px; z-index: -1; visibility: hidden;}
    input.checkbox {position: absolute; z-index: 1; width: 70px; height: 70px; opacity: 0.0; right: 30%; top: 50%; transform: translate(-50%, -50%); transition: all 0.4s ease-in-out 0s; cursor: pointer; }
    input.checkbox:checked { width: 30px; height: 30px; right: -14%; transform: translate(-50%, -60%);}
    input.checkbox:checked ~ .srch_sb_cnt {width: 73%;
    border-radius: 40px;
    overflow: visible;
    border: 1px solid #04d36f;}
   input.checkbox:checked ~ .srch_sb_cnt .srch_btn {
    width: 39px;
    height: 39px;
    right: 7px;
    border-radius: 100%;
    font-size: 20px;
    background-image: linear-gradient(to top, #04d36f 0%, #04d36f 100%);
    color: #fff;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
}
    input.checkbox:checked ~ .srch_sb_cnt .sech_txt_inpt { opacity: 1; }
    input.checkbox:checked ~ .srch_sb_cnt .srch_btn:after {transform: translateY(-50%) rotate(90deg); right: -50px; visibility: hidden; transition: all .6s cubic-bezier(0.000, 0.105, 0.035, 1.570); transition-delay: 0.5s; color: #e63c3c; }
    

</style>

<div class="row jcc">
<input type="text" style="
    visibility: hidden;
">
<div class="srch_wrpr">
    <input type="checkbox" name="" checked="" class="checkbox">
    <div class="srch_sb_cnt">
        <input type="text" name="text_bar" id="serviceSearch" class="sech_txt_inpt" placeholder="Type to search...">
        <button class="srch_btn">
            <i class="fa fa-search" aria-hidden="true"></i>
        </button>
    </div>
</div>
</div>

</div>

<div id="top"></div>

<div class="mycontainer tabs">
    <div class="row">
        <div class="col-md-3 mt-2">
            <!-- Tabs nav -->
            <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link mb-2 p-3 mt-1 shadow active" id="v-pills-trending-tab" data-toggle="pill" href="#v-pills-trending" role="tab" aria-controls="v-pills-trending" aria-selected="true">
                    <span class="font-weight-bold">Trending</span></a>
                <a class="nav-link mb-2 p-3 shadow" id="v-pills-interior-tab" data-toggle="pill" href="#v-pills-interior" role="tab" aria-controls="v-pills-interior" aria-selected="false">
                    <span class="font-weight-bold">Interior Design and Renovation</span></a>
                <a class="nav-link mb-2 p-3 shadow" id="v-pills-exterior-tab" data-toggle="pill" href="#v-pills-exterior" role="tab" aria-controls="v-pills-exterior" aria-selected="false">
                    <span class="font-weight-bold">Structural and Exterior</span></a>
                <a class="nav-link mb-2 p-3 shadow" id="v-pills-appliances-tab" data-toggle="pill" href="#v-pills-appliances" role="tab" aria-controls="v-pills-appliances" aria-selected="false">
                    <span class="font-weight-bold">Appliances and Fixtures</span></a>
                <a class="nav-link mb-2 p-3 shadow" id="v-pills-designplanning-tab" data-toggle="pill" href="#v-pills-designplanning" role="tab" aria-controls="v-pills-designplanning" aria-selected="false">
                    <span class="font-weight-bold">Design and Planning</span></a>
                <a class="nav-link mb-2 p-3 shadow" id="v-pills-envirosafety-tab" data-toggle="pill" href="#v-pills-envirosafety" role="tab" aria-controls="v-pills-envirosafety" aria-selected="false">
                    <span class="font-weight-bold">Environmental and Safety Services</span></a>
                <a class="nav-link mb-2 p-3 shadow" id="v-pills-maintenancerepair-tab" data-toggle="pill" href="#v-pills-maintenancerepair" role="tab" aria-controls="v-pills-maintenancerepair" aria-selected="false">
                    <span class="font-weight-bold">Home Maintenance and Repair</span></a>
                <a class="nav-link mb-2 p-3 shadow" id="v-pills-systemutilities-tab" data-toggle="pill" href="#v-pills-systemutilities" role="tab" aria-controls="v-pills-systemutilities" aria-selected="false">
                    <span class="font-weight-bold">Home Systems and Utilities</span></a>
                <a class="nav-link mb-2 p-3 shadow" id="v-pills-miscelspecialized-tab" data-toggle="pill" href="#v-pills-miscelspecialized" role="tab" aria-controls="v-pills-miscelspecialized" aria-selected="false">
                    <span class="font-weight-bold">Miscellaneous and Specialized Services</span></a>
                <a class="nav-link mb-2 p-3 shadow" id="v-pills-outdoorliving-tab" data-toggle="pill" href="#v-pills-outdoorliving" role="tab" aria-controls="v-pills-outdoorliving" aria-selected="false">
                    <span class="font-weight-bold">Outdoor Living</span></a>
                <a class="nav-link mb-2 p-3 shadow" id="v-pills-specializedconstruction-tab" data-toggle="pill" href="#v-pills-specializedconstruction" role="tab" aria-controls="v-pills-specializedconstruction" aria-selected="false">
                    <span class="font-weight-bold">Specialized Construction</span></a>
            </div>
        </div>

        <div class="col-md-9">
            <!-- Tabs content -->
            <div class="tab-content" id="v-pills-tabContent">
                <!-- Trending -->
                <div class="tab-pane fade rounded show active" id="v-pills-trending" role="tabpanel" aria-labelledby="v-pills-trending-tab">


<div class="row service-list">

        <!-- Bathroom Service -->
        <div class="zoom col-md-3 col-6 service-item" data-name="Bathroom" data-tab="v-pills-trending">
            <div class="s1_help_box_col">
                <div class="hlp_img_box" onclick="window.location.href='bathroom'">
                    <a><img src="images/s1_help_icon5.png" width="200" height="200" alt="icon"><p class="text-center">Bathroom</p></a>
                </div>
            </div>
        </div>

        <!-- Door Service -->
        <div class="zoom pb-2 col-md-3 col-6 service-item" data-name="Door" data-tab="v-pills-trending">
            <div class="s1_help_box_col" onclick="window.location.href='door'">
                <div class="hlp_img_box"><a><img src="images/icondoor.svg" width="200" height="200" alt="icon"><p class="text-center">Door</p></a></div>
            </div>
        </div>

        <!-- Flooring Service -->
        <div class="zoom pb-2 col-md-3 col-6 service-item" data-name="Flooring" data-tab="v-pills-trending">
            <div class="s1_help_box_col" onclick="window.location.href='flooring'">
                <div class="hlp_img_box"><a><img src="images/iconflooring.png" width="200" height="200" alt="icon"><p class="text-center">Flooring</p></a></div>
            </div>
        </div>

        <!-- Gutter Service -->
        <div class="zoom col-md-3 col-6 service-item" data-name="Gutter" data-tab="v-pills-trending">
            <div class="s1_help_box_col">
                <div class="hlp_img_box" onclick="window.location.href='gutter'">
                    <a><img src="images/s1_help_icon7.png" width="200" height="200" alt="icon"><p class="text-center">Gutter</p></a>
                </div>
            </div>
        </div>

        <!-- Handyman Service -->
        <!--<div class="zoom col-md-3 col-6 service-item" data-name="Bathroom" data-tab="v-pills-trending">-->
        <!--    <div class="s1_help_box_col">-->
        <!--        <div class="hlp_img_box" onclick="window.location.href='handyman'">-->
        <!--            <a><img src="images/iconhandyman.svg" width="200" height="200" alt="icon"><p class="text-center">Handyman</p></a>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->

        <!-- HVAC Service -->
        <div class="zoom col-md-3 col-6 service-item" data-name="HVAC" data-tab="v-pills-trending">
            <div class="s1_help_box_col">
                <div class="hlp_img_box" onclick="window.location.href='hvac'">
                    <a><img src="images/s1_help_icon4.png" width="200" height="200" alt="icon"><p class="text-center">HVAC</p></a>
                </div>
            </div>
        </div>

        <!-- Home Security Service -->
        <div class="zoom col-md-3 col-6 service-item" data-name="Home Security" data-tab="v-pills-trending">
            <div class="s1_help_box_col" onclick="window.location.href='homesecurity'">
                <div class="hlp_img_box"><a><img src="images/iconHomeSafety.svg" width="200" height="200" alt="icon"><p class="text-center">Home Security</p></a></div>
            </div>
        </div>
        <div class="zoom col-md-3 col-6 service-item" data-name="Bathroom pb-2" data-tab="v-pills-trending">
              <div class="s1_help_box_col" onclick="window.location.href='homewarranty'">
            	<div class="hlp_img_box"><a><img src="images/iconhomewarranty.svg" width="200" height="200" alt="icon"><p class="text-center">Home Warranty</p></a></div>
            </div>
        </div>

        <!-- Kitchen Service -->
        <div class="zoom col-md-3 col-6 service-item" data-name="Kitchen" data-tab="v-pills-trending">
            <div class="s1_help_box_col">
                <div class="hlp_img_box" onclick="window.location.href='kitchen'">
                    <a><img src="images/iconkitchen.svg" width="200" height="200" alt="icon"><p class="text-center">Kitchen</p></a>
                </div>
            </div>
        </div>

        <!-- Painting Service -->
        <div class="zoom col-md-3 col-6 service-item" data-name="Painting" data-tab="v-pills-trending">
            <div class="s1_help_box_col" onclick="window.location.href='painting'">
                <div class="hlp_img_box"><a><img src="images/iconpainting.svg" width="200" height="200" alt="icon"><p class="text-center">Painting</p></a></div>
            </div>
        </div>

        <!-- Plumbing Service -->
        <div class="zoom col-md-3 col-6 service-item" data-name="Plumbing" data-tab="v-pills-trending">
            <div class="s1_help_box_col" onclick="window.location.href='plumbing'">
                <div class="hlp_img_box"><a><img src="images/iconplumbing.svg" width="200" height="200" alt="icon"><p class="text-center">Plumbing</p></a></div>
            </div>
        </div>

        <!-- Roofing Service -->
        <div class="zoom col-md-3 col-6 service-item" data-name="Roofing" data-tab="v-pills-trending">
            <div class="s1_help_box_col">
                <div class="hlp_img_box" onclick="window.location.href='roofing'">
                    <a><img src="images/s1_help_icon1.png" width="200" height="200" alt="icon"><p class="text-center">Roofing</p></a>
                </div>
            </div>
        </div>

        <!-- Solar Service -->
        <div class="zoom col-md-3 col-6 service-item" data-name="Solar" data-tab="v-pills-trending">
            <div class="s1_help_box_col">
                <div class="hlp_img_box" onclick="window.location.href='solar'">
                    <a><img src="images/s1_help_icon3.png" width="200" height="200" alt="icon"><p class="text-center">Solar</p></a>
                </div>
            </div>
        </div>

        <!-- Walk-In Tubs Service -->
        <div class="zoom col-md-3 col-6 service-item" data-name="Walk In Tubs" data-tab="v-pills-trending">
            <div class="s1_help_box_col">
                <div class="hlp_img_box" onclick="window.location.href='walktub'">
                    <a><img src="images/s1_help_icon10.png" width="200" height="200" alt="icon"><p class="text-center">Walk In Tubs</p></a>
                </div>
            </div>
        </div>

        <!-- Windows Service -->
        <div class="zoom col-md-3 col-6 service-item" data-name="Windows" data-tab="v-pills-trending">
            <div class="s1_help_box_col">
                <div class="hlp_img_box" onclick="window.location.href='window'">
                    <a><img src="images/s1_help_icon2.png" width="200" height="200" alt="icon"><p class="text-center">Windows</p></a>
                </div>
            </div>
        </div>
    </div>                </div>

                <!-- Interior Design and Renovation -->
                <div class="tab-pane fade rounded" id="v-pills-interior" role="tabpanel" aria-labelledby="v-pills-interior-tab">
  <div class="row service-list">

<!-- Attic Whole House Fan Service -->
<div class="zoom col-6 col-md-3 pb-2 service-item" data-name="Ventilation" data-tab="v-pills-interior">
    <div class="s1_help_box_col" onclick="window.location.href='atticwholehousefan'">
        <div class="hlp_img_box"><a><img src="images/iconatticwholehousefan.svg" width="200" height="200" alt="icon"><p class="text-center">Ventilation</p></a></div>
    </div>
</div>

<!-- Bathroom Service -->
<div class="zoom col-6 col-md-3 pb-2 service-item" data-name="Bathroom" data-tab="v-pills-interior">
    <div class="s1_help_box_col">
        <div class="hlp_img_box" onclick="window.location.href='bathroom'">
            <a><img src="images/s1_help_icon5.png" width="200" height="200" alt="icon"><p class="text-center">Bathroom</p></a>
        </div>
    </div>
</div>

<!-- Countertops Service -->
<div class="col-md-3 pb-2 col-6 zoom service-item" data-name="Countertops" data-tab="v-pills-interior">
    <div class="s1_help_box_col" onclick="window.location.href='countertops'">
        <div class="hlp_img_box"><a><img src="images/iconCountertop.svg" width="200" height="200" alt="icon"><p class="text-center">Countertops</p></a></div>
    </div>
</div>

<!-- Drywall Sheetrock Service -->
<div class="col-md-3 pb-2 col-6 zoom service-item" data-name="Drywall Sheetrock" data-tab="v-pills-interior">
    <div class="s1_help_box_col" onclick="window.location.href='drywallsheetrock'">
        <div class="hlp_img_box"><a><img src="images/icondrywallsheetrock.svg" width="200" height="200" alt="icon"><p class="text-center">Drywall Sheetrock</p></a></div>
    </div>
</div>

<!-- Flooring Service -->
<div class="col-md-3 pb-2 col-6 zoom service-item" data-name="Flooring" data-tab="v-pills-interior">
    <div class="s1_help_box_col" onclick="window.location.href='flooring'">
        <div class="hlp_img_box"><a><img src="images/iconflooring.png" width="200" height="200" alt="icon"><p class="text-center">Flooring</p></a></div>
    </div>
</div>

<!-- Furniture Service -->
<div class="col-md-3 pb-2 col-6 zoom service-item" data-name="Furniture" data-tab="v-pills-interior">
    <div class="s1_help_box_col" onclick="window.location.href='furniture'">
        <div class="hlp_img_box"><a><img src="images/iconfurniture.svg" width="200" height="200" alt="icon"><p class="text-center">Furniture</p></a></div>
    </div>
</div>

<!-- Insulation Service -->
<div class="col-md-3 pb-2 col-6 zoom service-item" data-name="Insulation" data-tab="v-pills-interior">
    <div class="s1_help_box_col" onclick="window.location.href='insulation'">
        <div class="hlp_img_box"><a><img src="images/iconinsulation.svg" width="200" height="200" alt="icon"><p class="text-center">Insulation</p></a></div>
    </div>
</div>

<!-- Kitchen Service -->
<div class="col-md-3 pb-2 col-6 zoom service-item" data-name="Kitchen" data-tab="v-pills-interior">
    <div class="s1_help_box_col">
        <div class="hlp_img_box" onclick="window.location.href='kitchen'">
            <a><img src="images/iconkitchen.svg" width="200" height="200" alt="icon"><p class="text-center">Kitchen</p></a>
        </div>
    </div>
</div>

<!-- Mirror Install Service -->
<div class="col-md-3 pb-2 col-6 zoom service-item" data-name="Mirror Install" data-tab="v-pills-interior">
        <div class="s1_help_box_col" onclick="window.location.href='mirrorinstall'">
            <div class="hlp_img_box"><a><img src="images/iconmirrorinstall.svg" width="200" height="200" alt="icon"><p class="text-center">Mirror Install</p></a></div>
        </div>
</div>

<!-- Painting Service -->
<div class="zoom col-6 col-md-3 pb-2 zoom service-item" data-name="Painting" data-tab="v-pills-interior">
    <div class="s1_help_box_col" onclick="window.location.href='painting'">
        <div class="hlp_img_box"><a><img src="images/iconpainting.svg" width="200" height="200" alt="icon"><p class="text-center">Painting</p></a></div>
    </div>
</div>

<!-- Stone Polish Service -->
<div class="col-md-3 pb-2 col-6 zoom service-item" data-name="Stone Polish" data-tab="v-pills-interior">
    <div class="s1_help_box_col" onclick="window.location.href='stonepolish'">
        <div class="hlp_img_box"><a><img src="images/iconstonepolish.svg" width="200" height="200" alt="icon"><p class="text-center">Stone Polish</p></a></div>
    </div>
</div>

<!-- Walk-In Tubs Service -->
<div class="col-md-3 pb-2 col-6 zoom service-item" data-name="Walk-In Tubs" data-tab="v-pills-interior">
    <div class="s1_help_box_col ">
        <div class="hlp_img_box" onclick="window.location.href='walktub'">
            <a><img src="images/s1_help_icon10.png" width="200" height="200" alt="icon"><p class="text-center">Walk-In Tubs</p></a>
        </div>
    </div>
</div>

<!-- Wallpaper Service -->
<div class="col-md-3 my-2 col-6 zoom service-item" data-name="Wallpaper" data-tab="v-pills-interior">
    <div class="s1_help_box_col" onclick="window.location.href='wallpaper'">
        <div class="hlp_img_box"><a><img src="images/iconwallpaper.svg" width="200" height="200" alt="icon"><p class="text-center">Wallpaper</p></a></div>
    </div>
</div>

</div>                </div>

                <!-- Structural and Exterior -->
                <div class="tab-pane fade rounded" id="v-pills-exterior" role="tabpanel" aria-labelledby="v-pills-exterior-tab">
  <div class="row service-list">

<!-- Concrete Service -->
<div data-name="Concrete" data-tab="v-pills-exterior" class="zoom service-item col-6 col-md-3 pb-2">
    <div class="s1_help_box_col" onclick="window.location.href='concrete'">
        <div class="hlp_img_box"><a><img src="images/iconConcrete.svg" width="200" height="200" alt="icon"><p class="text-center">Concrete</p></a></div>
    </div>
</div>

<!-- Drainage Service -->
<div data-name="Drainage" data-tab="v-pills-exterior" class="zoom service-item col-6 col-md-3 pb-2">  
    <div class="s1_help_box_col" onclick="window.location.href='drainage'">
        <div class="hlp_img_box"><a><img src="images/Drainage (1).svg" width="200" height="200" alt="icon"><p class="text-center">Drainage</p></a></div>
    </div>
</div>

<!-- Door Service -->
<div data-name="Door" data-tab="v-pills-exterior" class="zoom service-item col-6 col-md-3 pb-2">
    <div class="s1_help_box_col" onclick="window.location.href='door'">
        <div class="hlp_img_box"><a><img src="images/icondoor.svg" width="200" height="200" alt="icon"><p class="text-center">Door</p></a></div>
    </div>
</div>

<!-- Fencing Service -->
<div data-name="Fencing" data-tab="v-pills-exterior" class="zoom service-item col-6 col-md-3 pb-2">
    <div class="s1_help_box_col" onclick="window.location.href='fencing'">
        <div class="hlp_img_box"><a><img src="images/iconfence.svg" width="200" height="200" alt="icon"><p class="text-center">Fencing</p></a></div>
    </div>
</div>

<!-- Foundation Service -->
<div data-name="Foundation" data-tab="v-pills-exterior" class="zoom service-item col-6 col-md-3 pb-2">
    <div class="s1_help_box_col" onclick="window.location.href='foundation'">
        <div class="hlp_img_box"><a><img src="images/iconfoundation.svg" width="200" height="200" alt="icon"><p class="text-center">Foundation</p></a></div>
    </div>
</div>

<!-- Garages Service -->
<div data-name="Garages" data-tab="v-pills-exterior" class="zoom service-item col-6 col-md-3 pb-2">
    <div class="s1_help_box_col" onclick="window.location.href='garage'">
        <div class="hlp_img_box"><a><img src="images/icongarages.svg" width="200" height="200" alt="icon"><p class="text-center">Garages</p></a></div>
    </div>
</div>

<!-- Gutter Service -->
<div data-name="Gutter" data-tab="v-pills-exterior" class="zoom service-item col-6 col-md-3 pb-2">
    <div class="s1_help_box_col" onclick="window.location.href='gutter'">
        <div class="hlp_img_box"><a><img src="images/s1_help_icon7.png" width="200" height="200" alt="icon"><p class="text-center">Gutter</p></a></div>
    </div>
</div>

<!-- Land Surveyor Service -->
<div data-name="Land Surveyor" data-tab="v-pills-exterior" class="zoom service-item col-6 col-md-3 pb-2">
    <div class="s1_help_box_col" onclick="window.location.href='landsurveyor'">
        <div class="hlp_img_box"><a><img src="images/iconlandsurveyor.svg" width="200" height="200" alt="icon"><p class="text-center">Land Surveyor</p></a></div>
    </div>
</div>

<!-- Masonry Service -->
<div data-name="Masonry" data-tab="v-pills-exterior" class="zoom service-item col-6 col-md-3 pb-2">
    <div class="s1_help_box_col" onclick="window.location.href='masonary'">
        <div class="hlp_img_box"><a><img src="images/iconmasonry.svg" width="200" height="200" alt="icon"><p class="text-center">Masonry</p></a></div>
    </div>
</div>

<!-- Roofing Service -->
<div data-name="Roofing" data-tab="v-pills-exterior" class="zoom service-item col-6 col-md-3 pb-2">
    <div class="s1_help_box_col">
        <div class="hlp_img_box" onclick="window.location.href='roofing'">
            <a><img src="images/s1_help_icon1.png" width="200" height="200" alt="icon"><p class="text-center">Roofing</p></a>
        </div>
    </div>
</div>

<!-- Siding Service -->
<div data-name="Siding" data-tab="v-pills-exterior" class="zoom service-item col-6 col-md-3 pb-2">
    <div class="s1_help_box_col" onclick="window.location.href='siding'">
        <div class="hlp_img_box"><a><img src="images/iconsiding.svg" width="200" height="200" alt="icon"><p class="text-center">Siding</p></a></div>
    </div>
</div>

<!-- Solar Service -->
<div data-name="Solar" data-tab="v-pills-exterior" class="zoom service-item col-6 col-md-3 pb-2">
    <div class="s1_help_box_col" onclick="window.location.href='solar'">
        <div class="hlp_img_box"><a><img src="images/s1_help_icon3.png" width="200" height="200" alt="icon"><p class="text-center">Solar</p></a></div>
    </div>
</div>

<!-- Windows Service -->
<div data-name="Windows" data-tab="v-pills-exterior" class="zoom service-item col-6 col-md-3 pb-2">
    <div class="s1_help_box_col" onclick="window.location.href='window'">
        <div class="hlp_img_box"><a><img src="images/s1_help_icon2.png" width="200" height="200" alt="icon"><p class="text-center">Windows</p></a></div>
    </div>
</div>

</div>                </div>

                <!-- Appliances and Fixtures -->
                <div class="tab-pane fade rounded" id="v-pills-appliances" role="tabpanel" aria-labelledby="v-pills-appliances-tab">
<div class="row service-list">

    <!-- Bathtub Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-appliances" data-name="Bathtub">
        <div class="s1_help_box_col" onclick="window.location.href='bathtub'">
            <div class="hlp_img_box">
                <a><img src="images/bathtub.svg" width="200" height="200" alt="icon">
                <p class="text-center">Bathtub</p></a>
            </div>
        </div>
    </div>

    <!-- Cabinet Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-appliances" data-name="Cabinet">
        <div class="s1_help_box_col" onclick="window.location.href='cabinet'">
            <div class="hlp_img_box">
                <a><img src="images/iconcabinet.svg" width="200" height="200" alt="icon">
                <p class="text-center">Cabinet</p></a>
            </div>
        </div>
    </div>

    <!-- Carpentry Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-appliances" data-name="Carpentry">
        <div class="s1_help_box_col" onclick="window.location.href='carpentry'">
            <div class="hlp_img_box">
                <a><img src="images/iconcarpentry.svg" width="200" height="200" alt="icon">
                <p class="text-center">Carpentry</p></a>
            </div>
        </div>
    </div>

    <!-- Glass Repair Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-appliances" data-name="Glass Repair">
        <div class="s1_help_box_col" onclick="window.location.href='glassrepair'">
            <div class="hlp_img_box">
                <a><img src="images/iconglassrepair.svg" width="200" height="200" alt="icon">
                <p class="text-center">Glass Repair</p></a>
            </div>
        </div>
    </div>

    <!-- Handyman Appliance Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-appliances" data-name="Handyman Appliance">
        <div class="s1_help_box_col" onclick="window.location.href='handymanappliance'">
            <div class="hlp_img_box">
                <a><img src="images/iconhandymanappliances.svg" width="200" height="200" alt="icon">
                <p class="text-center">Handyman Appliance</p></a>
            </div>
        </div>
    </div>

</div>
                </div>

                <!-- Design and Planning -->
                <div class="tab-pane fade rounded" id="v-pills-designplanning" role="tabpanel" aria-labelledby="v-pills-designplanning-tab">
<div class="row service-list">

    <!-- Architects Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-designplanning" data-name="Architects">
        <div class="s1_help_box_col" onclick="window.location.href='architects'">
            <div class="hlp_img_box">
                <a><img src="images/iconarchitects.svg" width="200" height="200" alt="icon">
                <p class="text-center">Architects</p></a>
            </div>
        </div>
    </div>

    <!-- Architectural Plans Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-designplanning" data-name="Architectural Plans">
        <div class="s1_help_box_col" onclick="window.location.href='architecturalplandesign'">
            <div class="hlp_img_box">
                <a><img src="images/iconarchitecturalplandesign.svg" width="200" height="200" alt="icon">
                <p class="text-center">Architectural Plans</p></a>
            </div>
        </div>
    </div>

    <!-- Custom Homes Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-designplanning" data-name="Custom Homes">
        <div class="s1_help_box_col" onclick="window.location.href='customhomes'">
            <div class="hlp_img_box">
                <a><img src="images/iconcustomhome.svg" width="200" height="200" alt="icon">
                <p class="text-center">Custom Homes</p></a>
            </div>
        </div>
    </div>

    <!-- Artisans Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-designplanning" data-name="Artisans">
        <div class="s1_help_box_col" onclick="window.location.href='decoratorsanddesigners'">
            <div class="hlp_img_box">
                <a><img src="images/iconartisans.svg" width="200" height="200" alt="icon">
                <p class="text-center">Artisans</p></a>
            </div>
        </div>
    </div>

    <!-- Home Media Tv Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-designplanning" data-name="Home Media Tv">
        <div class="s1_help_box_col" onclick="window.location.href='homemediatv'">
            <div class="hlp_img_box">
                <a><img src="images/iconhomemediatv.svg" width="200" height="200" alt="icon">
                <p class="text-center">Home Media Tv</p></a>
            </div>
        </div>
    </div>

    <!-- Room Additions Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-designplanning" data-name="Room Additions">
        <div class="s1_help_box_col" onclick="window.location.href='roomadditions'">
            <div class="hlp_img_box">
                <a><img src="images/iconroomadditions.svg" width="200" height="200" alt="icon">
                <p class="text-center">Room Additions</p></a>
            </div>
        </div>
    </div>

    <!-- Small Projects Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-designplanning" data-name="Small Projects">
        <div class="s1_help_box_col" onclick="window.location.href='smallprojects'">
            <div class="hlp_img_box">
                <a><img src="images/Small-Projects.svg" width="200" height="200" alt="icon">
                <p class="text-center">Small Projects</p></a>
            </div>
        </div>
    </div>

    <!-- Tile Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-designplanning" data-name="Tile">
        <div class="s1_help_box_col" onclick="window.location.href='tile'">
            <div class="hlp_img_box">
                <a><img src="images/icontiles.svg" width="200" height="200" alt="icon">
                <p class="text-center">Tile</p></a>
            </div>
        </div>
    </div>

    <!-- Walls Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-designplanning" data-name="Walls">
        <div class="s1_help_box_col" onclick="window.location.href='wall'">
            <div class="hlp_img_box">
                <a><img src="images/iconwalls.svg" width="200" height="200" alt="icon">
                <p class="text-center">Walls</p></a>
            </div>
        </div>
    </div>

</div>
                </div>

                <!-- Environmental and Safety -->
                <div class="tab-pane fade rounded" id="v-pills-envirosafety" role="tabpanel" aria-labelledby="v-pills-envirosafety-tab">
<div class="row service-list">

    <!-- Home Security Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-envirosafety" data-name="Home Security">
        <div class="s1_help_box_col" onclick="window.location.href='homesecurity'">
            <div class="hlp_img_box"><a><img src="images/iconHomeSafety.svg" width="200" height="200" alt="icon"><p class="text-center">Home Security</p></a></div>
        </div>
    </div>

    <!-- Mold Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-envirosafety" data-name="Mold">
        <div class="s1_help_box_col" onclick="window.location.href='mold'">
            <div class="hlp_img_box"><a><img src="images/iconmold.svg" width="200" height="200" alt="icon"><p class="text-center">Mold</p></a></div>
        </div>
    </div>

    <!-- Pest Control Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-envirosafety" data-name="Pest Control">
        <div class="s1_help_box_col" onclick="window.location.href='pestcontrol'">
            <div class="hlp_img_box"><a><img src="images/iconpestcontrol.svg" width="200" height="200" alt="icon"><p class="text-center">Pest Control</p></a></div>
        </div>
    </div>

    <!-- Security Cameras Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-envirosafety" data-name="Security Cameras">
        <div class="s1_help_box_col" onclick="window.location.href='securitycameras'">
            <div class="hlp_img_box"><a><img src="images/iconsecuritycameras.svg" width="200" height="200" alt="icon"><p class="text-center">Security Cameras</p></a></div>
        </div>
    </div>

    <!-- Toxic Material Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-envirosafety" data-name="Toxic Material">
        <div class="s1_help_box_col" onclick="window.location.href='toxicmaterial'">
            <div class="hlp_img_box"><a><img src="images/icontoxicmaterial.svg" width="200" height="200" alt="icon"><p class="text-center">Toxic Material</p></a></div>
        </div>
    </div>

    <!-- Water Pest Damage Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-envirosafety" data-name="Water Pest Damage">
        <div class="s1_help_box_col" onclick="window.location.href='waterpestdamage'">
            <div class="hlp_img_box"><a><img src="images/Water Pest Damage.svg" width="200" height="200" alt="icon"><p class="text-center">Water Pest Damage</p></a></div>
        </div>
    </div>

</div>
                </div>

                <!-- Home Maintenance and Repair -->
                <div class="tab-pane fade rounded" id="v-pills-maintenancerepair" role="tabpanel" aria-labelledby="v-pills-maintenancerepair-tab">
<div class="row service-list">

    <!-- Cleaning Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-maintenancerepair" data-name="Cleaning">
        <div class="s1_help_box_col" onclick="window.location.href='cleaning'">
            <div class="hlp_img_box"><a><img src="images/iconCleaning.svg" width="200" height="200" alt="icon"><p class="text-center">Cleaning</p></a></div>
        </div>
    </div>

    <!-- Dryrot Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-maintenancerepair" data-name="Dryrot">
        <div class="s1_help_box_col" onclick="window.location.href='dryrot'">
            <div class="hlp_img_box"><a><img src="images/Dryrot (1).svg" width="200" height="200" alt="icon"><p class="text-center">Dryrot</p></a></div>
        </div>
    </div>

    <!-- Handyman Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-maintenancerepair" data-name="Handyman">
        <div class="s1_help_box_col" onclick="window.location.href='handyman'">
            <div class="hlp_img_box"><a><img src="images/iconhandyman.svg" width="200" height="200" alt="icon"><p class="text-center">Handyman</p></a></div>
        </div>
    </div>

    <!-- Home Inspection Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-maintenancerepair" data-name="Home Inspection">
        <div class="s1_help_box_col" onclick="window.location.href='homeinspection'">
            <div class="hlp_img_box"><a><img src="images/iconhomeinspection.svg" width="200" height="200" alt="icon"><p class="text-center">Home Inspection</p></a></div>
        </div>
    </div>

    <!-- Junk Removal Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-maintenancerepair" data-name="Junk Removal">
        <div class="s1_help_box_col" onclick="window.location.href='junkremoval'">
            <div class="hlp_img_box"><a><img src="images/Junk Removal.svg" width="200" height="200" alt="icon"><p class="text-center">Junk Removal</p></a></div>
        </div>
    </div>

    <!-- Locksmith Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-maintenancerepair" data-name="Locksmith">
        <div class="s1_help_box_col" onclick="window.location.href='locksmith'">
            <div class="hlp_img_box"><a><img src="images/iconlocksmith.svg" width="200" height="200" alt="icon"><p class="text-center">Locksmith</p></a></div>
        </div>
    </div>

    <!-- Rental Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-maintenancerepair" data-name="Rental Service">
        <div class="s1_help_box_col" onclick="window.location.href='rental'">
            <div class="hlp_img_box"><a><img src="images/iconrentalservice.svg" width="200" height="200" alt="icon"><p class="text-center">Rental Service</p></a></div>
        </div>
    </div>

    <!-- Shower Glass Install Door Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-maintenancerepair" data-name="ShowerGlass">
        <div class="s1_help_box_col" onclick="window.location.href='showerglassinstalldoor'">
            <div class="hlp_img_box"><a><img src="images/iconshowerglassinstallationdoor.svg" width="200" height="200" alt="icon"><p class="text-center">Shower Glass</p></a></div>
        </div>
    </div>

</div>
                </div>

                <!-- Home Systems and Utilities -->
                <div class="tab-pane fade rounded" id="v-pills-systemutilities" role="tabpanel" aria-labelledby="v-pills-systemutilities-tab">
<div class="row service-list">

    <!-- Electrical Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-systemutilities" data-name="Electrical">
         <div class="s1_help_box_col" onclick="window.location.href='electrical'">
            <div class="hlp_img_box"><a><img src="images/iconelectrical.svg" width="200" height="200" alt="icon"><p class="text-center">Electrical</p></a></div>
        </div>
    </div>

    <!-- Home Energy Audit Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-systemutilities" data-name="EnergyScan">
        <div class="s1_help_box_col" onclick="window.location.href='homeenergyaudit'">
            <div class="hlp_img_box"><a><img src="images/iconhomeenergyaudit.svg" width="200" height="200" alt="icon"><p class="text-center">EnergyScan</p></a></div>
        </div>
    </div>

    <!-- HVAC Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-systemutilities" data-name="HVAC">
        <div class="s1_help_box_col" onclick="window.location.href='hvac'">
            <div class="hlp_img_box"><a><img src="images/s1_help_icon4.png" width="200" height="200" alt="icon"><p class="text-center">HVAC</p></a></div>
        </div>
    </div>

    <!-- Plumbing Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-systemutilities" data-name="Plumbing">
        <div class="s1_help_box_col" onclick="window.location.href='plumbing'">
            <div class="hlp_img_box"><a><img src="images/iconplumbing.svg" width="200" height="200" alt="icon"><p class="text-center">Plumbing</p></a></div>
        </div>
    </div>

    <!-- Portable Toilets Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-systemutilities" data-name="Portable Toilets">
        <div class="s1_help_box_col" onclick="window.location.href='portabletoilets'">
            <div class="hlp_img_box"><a><img src="images/iconportabletoilets.svg" width="200" height="200" alt="icon"><p class="text-center">Portable Toilets</p></a></div>
        </div>
    </div>

    <!-- Septic Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-systemutilities" data-name="Septic">
        <div class="s1_help_box_col" onclick="window.location.href='septic'">
            <div class="hlp_img_box"><a><img src="images/iconseptic.svg" width="200" height="200" alt="icon"><p class="text-center">Septic</p></a></div>
        </div>
    </div>

    <!-- Sewer Water Main Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-systemutilities" data-name="Pipeline">
        <div class="s1_help_box_col" onclick="window.location.href='sewerwatermain'">
            <div class="hlp_img_box"><a><img src="images/iconsewerwatermain.svg" width="200" height="200" alt="icon"><p class="text-center">Pipeline</p></a></div>
        </div>
    </div>

    <!-- Water Heater Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-systemutilities" data-name="Water Heater">
        <div class="s1_help_box_col" onclick="window.location.href='waterheater'">
            <div class="hlp_img_box"><a><img src="images/iconwaterheater.svg" width="200" height="200" alt="icon"><p class="text-center">Water Heater</p></a></div>
        </div>
    </div>

    <!-- Well Pumps Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-systemutilities" data-name="Well pumps">
        <div class="s1_help_box_col" onclick="window.location.href='wellpumps'">
            <div class="hlp_img_box"><a><img src="images/iconwellpumps.svg" width="200" height="200" alt="icon"><p class="text-center">Well pumps</p></a></div>
        </div>
    </div>

    <!-- Wiring Low Voltage Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-systemutilities" data-name="Wiring Low Voltage">
        <div class="s1_help_box_col" onclick="window.location.href='wiringlowvoltage'">
            <div class="hlp_img_box"><a><img src="images/iconwiringlowvoltage.svg" width="200" height="200" alt="icon"><p class="text-center">Wiring Low Voltage</p></a></div>
        </div>
    </div>

</div>
                </div>

                <!-- Miscellaneous and Specialized Services -->
                <div class="tab-pane fade rounded" id="v-pills-miscelspecialized" role="tabpanel" aria-labelledby="v-pills-miscelspecialized-tab">
<div class="row service-list">

    <!-- Appraiser Real Estate Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-miscelspecialized" data-name="Real Estate">
         <div class="s1_help_box_col" onclick="window.location.href='appraiserrealestate'">
        	<div class="hlp_img_box"><a><img src="images/iconappraiserrealestate.svg" width="200" height="200" alt="icon"><p class="text-center">Real Estate</p></a></div>
        </div>
    </div>

    <!-- Christmas Lights Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-miscelspecialized" data-name="Christmas Lights">
        <div class="s1_help_box_col" onclick="window.location.href='christmaslights'">
        	<div class="hlp_img_box"><a><img src="images/iconchristmaslights.svg" width="200" height="200" alt="icon"><p class="text-center">Christmas Lights</p></a></div>
        </div>
    </div>

    <!-- Home Warranty Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-miscelspecialized" data-name="Home Warranty">
          <div class="s1_help_box_col" onclick="window.location.href='homewarranty'">
        	<div class="hlp_img_box"><a><img src="images/iconhomewarranty.svg" width="200" height="200" alt="icon"><p class="text-center">Home Warranty</p></a></div>
        </div>
    </div>

    <!-- Materials Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-miscelspecialized" data-name="Materials">
          <div class="s1_help_box_col" onclick="window.location.href='materials'">
        	<div class="hlp_img_box"><a><img src="images/iconmaterials.svg" width="200" height="200" alt="icon"><p class="text-center">Materials</p></a></div>
        </div>
    </div>

    <!-- Skylight Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-miscelspecialized" data-name="Skylight">
       <div class="s1_help_box_col" onclick="window.location.href='skylight'">
        	<div class="hlp_img_box"><a><img src="images/Skylight.svg" width="200" height="200" alt="icon"><p class="text-center">Skylight</p></a></div>
        </div>
    </div>

    <!-- Stair Lift Service -->
   <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-miscelspecialized" data-name="Stair Lift">
         <div class="s1_help_box_col" onclick="window.location.href='stairlift'">
        	<div class="hlp_img_box"><a><img src="images/iconstairlift.svg" width="200" height="200" alt="icon"><p class="text-center">Stair Lift</p></a></div>
        </div>
    </div>

    <!-- Tennis Service -->
    <div class="zoom service-item col-6 col-md-3 pb-2" data-tab="v-pills-miscelspecialized" data-name="Tennis">
       <div class="s1_help_box_col" onclick="window.location.href='tennis'">
        	<div class="hlp_img_box"><a><img src="images/icontenniss.svg" width="200" height="200" alt="icon"><p class="text-center">Tennis</p></a></div>
        </div>
    </div>
</div>
                </div>

                <!-- Outdoor Living -->
                <div class="tab-pane fade rounded" id="v-pills-outdoorliving" role="tabpanel" aria-labelledby="v-pills-outdoorliving-tab">
<div class="row service-list">

    <!-- Awnings Service -->
    <div class="zoom col-6 col-md-3 pb-2 service-item" data-tab="v-pills-outdoorliving" data-name="Awnings">
         <div class="s1_help_box_col" onclick="window.location.href='awnings'">
        	<div class="hlp_img_box"><a><img src="images/iconawnings.svg" width="200" height="200" alt="icon"><p class="text-center">Awnings</p></a></div>
        </div>
    </div>

    <!-- Deck Service -->
    <div class="zoom col-6 col-md-3 pb-2 service-item" data-tab="v-pills-outdoorliving" data-name="Deck">
        <div class="s1_help_box_col" onclick="window.location.href='deck'">
        	<div class="hlp_img_box"><a><img src="images/icondeck.svg" width="200" height="200" alt="icon"><p class="text-center">Deck</p></a></div>
        </div>
    </div>

    <!-- Landscaping Service -->
    <div class="zoom col-6 col-md-3 pb-2 service-item" data-tab="v-pills-outdoorliving" data-name="Landscaping">
          <div class="s1_help_box_col" onclick="window.location.href='landscaping'">
            	<div class="hlp_img_box"><a><img src="images/iconlandscaping.svg" width="200" height="200" alt="icon"><p class="text-center">Landscaping</p></a></div>
            </div>
    </div>

    <!-- Outdoor Play Equipment Service -->
    <div class="zoom col-6 col-md-3 pb-2 service-item" data-tab="v-pills-outdoorliving" data-name="Outdoor Equipment">
          <div class="s1_help_box_col" onclick="window.location.href='outdoorplayequipment'">
            	<div class="hlp_img_box"><a><img src="images/Outdoor-Play-Equipment.svg" width="200" height="200" alt="icon"><p class="text-center">Outdoor Equipment</p></a></div>
            </div>
    </div>

    <!-- Patio Covers Service -->
    <div class="zoom col-6 col-md-3 pb-2 service-item" data-tab="v-pills-outdoorliving" data-name="Patio Covers">
        <div class="s1_help_box_col" onclick="window.location.href='patiocovers'">
        	<div class="hlp_img_box"><a><img src="images/iconpatiocovers.svg" width="200" height="200" alt="icon"><p class="text-center">Patio Covers</p></a></div>
        </div>
    </div>

    <!-- Pool Service -->
   <div class="zoom col-6 col-md-3 pb-2 service-item" data-tab="v-pills-outdoorliving" data-name="Pool">
        <div class="s1_help_box_col" onclick="window.location.href='pool'">
        	<div class="hlp_img_box"><a><img src="images/iconpool.svg" width="200" height="200" alt="icon"><p class="text-center">Pool</p></a></div>
        </div>
    </div>

    <!-- Power Washing Service -->
    <div class="zoom col-6 col-md-3 pb-2 service-item" data-tab="v-pills-outdoorliving" data-name="Power Washing">
        <div class="s1_help_box_col" onclick="window.location.href='powerwashing'">
        	<div class="hlp_img_box"><a><img src="images/iconpowerwashing.svg" width="200" height="200" alt="icon"><p class="text-center">Power Washing</p></a></div>
        </div>
    </div>

    <!-- Sheds Service -->
    <div class="zoom col-6 col-md-3 pb-2 service-item" data-tab="v-pills-outdoorliving" data-name="Sheds">
         <div class="s1_help_box_col" onclick="window.location.href='sheds'">
        	<div class="hlp_img_box"><a><img src="images/iconsheds.svg" width="200" height="200" alt="icon"><p class="text-center">Sheds</p></a></div>
        </div>
    </div>

    <!-- Sunroom Service -->
    <div class="zoom col-6 col-md-3 pb-2 service-item" data-tab="v-pills-outdoorliving" data-name="Sunroom">
        <div class="s1_help_box_col" onclick="window.location.href='sunroom'">
        	<div class="hlp_img_box"><a><img src="images/iconsunroom.svg" width="200" height="200" alt="icon"><p class="text-center">Sunroom</p></a></div>
        </div>
    </div>

    <!-- Tree Service -->
    <div class="zoom col-6 col-md-3 pb-2 service-item" data-tab="v-pills-outdoorliving" data-name="Tree">
        <div class="s1_help_box_col" onclick="window.location.href='tree'">
        	<div class="hlp_img_box"><a><img src="images/icontree.svg" width="200" height="200" alt="icon"><p class="text-center">Tree</p></a></div>
        </div>
    </div>
</div>
                </div>

                <!-- Specialized Construction -->
                <div class="tab-pane fade rounded" id="v-pills-specializedconstruction" role="tabpanel" aria-labelledby="v-pills-specializedconstruction-tab">
<div class="row service-list">

    <!-- Basement Service -->
    <div class="zoom col-6 col-md-3 pb-2 service-item" data-tab="v-pills-specializedconstruction" data-name="Basement">
        <div class="s1_help_box_col" onclick="window.location.href='basement'">
            <div class="hlp_img_box"><a><img src="images/iconbasement.svg" width="200" height="200" alt="icon"><p class="text-center">Basement</p></a></div>
        </div>
    </div>

    <!-- Brick Work Service -->
    <div class="zoom col-6 col-md-3 pb-2 service-item" data-tab="v-pills-specializedconstruction" data-name="Brick Work">
        <div class="s1_help_box_col" onclick="window.location.href='brickwork'">
            <div class="hlp_img_box"><a><img src="images/iconbrickwork.svg" width="200" height="200" alt="icon"><p class="text-center">Brick Work</p></a></div>
        </div>
    </div>

    <!-- Brick Stone Fireplace Service -->
    <div class="zoom col-6 col-md-3 pb-2 service-item" data-tab="v-pills-specializedconstruction" data-name="Fireplace">
        <div class="s1_help_box_col" onclick="window.location.href='brickstonefireplace'">
            <div class="hlp_img_box"><a><img src="images/iconbrickstonefireplace.svg" width="200" height="200" alt="icon"><p class="text-center">Fireplace</p></a></div>
        </div>
    </div>

    <!-- Demolition Service -->
    <div class="zoom col-6 col-md-3 pb-2 service-item" data-tab="v-pills-specializedconstruction" data-name="Demolition">
        <div class="s1_help_box_col" onclick="window.location.href='demolition'">
            <div class="hlp_img_box"><a><img src="images/icondemolition.svg" width="200" height="200" alt="icon"><p class="text-center">Demolition</p></a></div>
        </div>
    </div>

    <!-- Engineers Service -->
    <div class="zoom col-6 col-md-3 pb-2 service-item" data-tab="v-pills-specializedconstruction" data-name="Engineer">
        <div class="s1_help_box_col" onclick="window.location.href='engineer'">
            <div class="hlp_img_box"><a><img src="images/Engineers (1).svg" width="200" height="200" alt="icon"><p class="text-center">Engineer</p></a></div>
        </div>
    </div>

    <!-- Excavation Service -->
    <div class="zoom col-6 col-md-3 pb-2 service-item" data-tab="v-pills-specializedconstruction" data-name="Excavation">
        <div class="s1_help_box_col" onclick="window.location.href='excavation'">
            <div class="hlp_img_box"><a><img src="images/Excavation.svg" width="200" height="200" alt="icon"><p class="text-center">Excavation</p></a></div>
        </div>
    </div>

    <!-- Framing Service -->
    <div class="zoom col-6 col-md-3 pb-2 service-item" data-tab="v-pills-specializedconstruction" data-name="Framing">
        <div class="s1_help_box_col" onclick="window.location.href='framing'">
            <div class="hlp_img_box"><a><img src="images/iconframing.svg" width="200" height="200" alt="icon"><p class="text-center">Framing</p></a></div>
        </div>
    </div>

    <!-- Remodeling Service -->
    <div class="zoom col-6 col-md-3 pb-2 service-item" data-tab="v-pills-specializedconstruction" data-name="Remodeling">
        <div class="s1_help_box_col" onclick="window.location.href='remodeling'">
            <div class="hlp_img_box"><a><img src="images/Remodeling.svg" width="200" height="200" alt="icon"><p class="text-center">Remodeling</p></a></div>
        </div>
    </div>

    <!-- Stone Masonry Service -->
    <div class="zoom col-6 col-md-3 pb-2 service-item" data-tab="v-pills-specializedconstruction" data-name="Stone Masonry">
        <div class="s1_help_box_col" onclick="window.location.href='stonemasonary'">
            <div class="hlp_img_box"><a><img src="images/iconstonemasonry.svg" width="200" height="200" alt="icon"><p class="text-center">Stone Masonry</p></a></div>
        </div>
    </div>

    <!-- Metal Fabrication Service -->
    <div class="zoom col-6 col-md-3 pb-2 service-item" data-tab="v-pills-specializedconstruction" data-name="Metal Fabrication">
        <div class="s1_help_box_col" onclick="window.location.href='weldcutmetalstructure'">
            <div class="hlp_img_box"><a><img src="images/iconweldcutmetalstructure.svg" width="200" height="200" alt="icon"><p class="text-center">Metal Fabrication</p></a></div>
        </div>
    </div>
</div>
                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function () {
    // Search functionality
    $("#serviceSearch").on("input", function () {
        var searchText = $(this).val().toLowerCase();
        
        // Hide all services initially
        $(".service-item").hide();

        if (searchText.trim() === "") {
            // If the search text is empty, reset to show all items (except Trending)
            $(".service-item").each(function () {
                if ($(this).data("tab") !== "v-pills-trending") {
                    $(this).show();
                }
            });
            return;
        }

        // Show services matching the search text, excluding "Trending"
        $(".service-item").each(function () {
            var serviceName = $(this).data("name").toLowerCase();
            var parentTab = $(this).data("tab");

            // Exclude items from "Trending" (replace 'v-pills-trending' with your Trending tab ID)
            if (parentTab !== "v-pills-trending" && serviceName.includes(searchText)) {
                $(this).show();
            }
        });

        // Ensure all tabs remain active and visible
        $('.tab-pane').addClass('active show');
        $('.nav-link').removeClass('active');
    });
});
</script>

</div>
<?php include 'footer.php'; ?>

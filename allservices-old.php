 <?php include'header.php' ?>
 
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
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>



<style>
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
<div id="top"></div>

    <div class="mycontainer tabs">
        <div class="text-center text-white">
            
        </div>


        <div class="row">
            <div class="col-md-3 mt-2">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    
                    <a class="nav-link mb-2 p-3 mt-1 shadow active" id="v-pills-trending-tab" data-toggle="pill" href="#v-pills-trending" role="tab" aria-controls="v-pills-trending" aria-selected="true">
                        <i class="d-none fa fa-star mr-2"></i>
                        <span class="font-weight-bold ">Trending</span></a>
                    
                        <a class="nav-link mb-2 p-3 shadow" id="v-pills-interior-tab" data-toggle="pill" href="#v-pills-interior" role="tab" aria-controls="v-pills-interior" aria-selected="false">
                        <i class=" d-none fa fa-calendar-minus-o mr-2"></i>
                        <span class="font-weight-bold">Interior Design and Renovation</span></a>
                    
                     <a class="nav-link mb-2 p-3 shadow" id="v-pills-exterior-tab" data-toggle="pill" href="#v-pills-exterior" role="tab" aria-controls="v-pills-exterior" aria-selected="false">
                       <i class="d-none fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold">Structural and Exterior</span></a>


                        <a class="nav-link mb-2 p-3 shadow" id="v-pills-appliances-tab" data-toggle="pill" href="#v-pills-appliances" role="tab" aria-controls="v-pills-appliances" aria-selected="false">
                       <i class="d-none fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold">Appliances and Fixtures</span></a>


                        <a class="nav-link mb-2 p-3 shadow" id="v-pills-designplanning-tab" data-toggle="pill" href="#v-pills-designplanning" role="tab" aria-controls="v-pills-designplanning" aria-selected="false">
                       <i class="d-none fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold">Design and Planning</span></a>

                        
                        <a class="nav-link mb-2 p-3 shadow" id="v-pills-envirosafety-tab" data-toggle="pill" href="#v-pills-envirosafety" role="tab" aria-controls="v-pills-envirosafety" aria-selected="false">
                       <i class="d-none fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold">Environmental and Safety Services</span></a>


                        <a class="nav-link mb-2 p-3 shadow" id="v-pills-maintenancerepair-tab" data-toggle="pill" href="#v-pills-maintenancerepair" role="tab" aria-controls="v-pills-maintenancerepair" aria-selected="false">
                       <i class="d-none fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold">Home Maintenance and Repair</span></a>



                        <a class="nav-link mb-2 p-3 shadow" id="v-pills-systemutilities-tab" data-toggle="pill" href="#v-pills-systemutilities" role="tab" aria-controls="v-pills-systemutilities" aria-selected="false">
                       <i class="d-none fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold">Home Systems and Utilities</span></a>

                        <a class="nav-link mb-2 p-3 shadow" id="v-pills-miscelspecialized-tab" data-toggle="pill" href="#v-pills-miscelspecialized" role="tab" aria-controls="v-pills-miscelspecialized" aria-selected="false">
                       <i class="d-none fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold">Miscellaneous and Specialized Services</span></a>
                        
                    <a class="nav-link mb-2 p-3 shadow" id="v-pills-outdoorliving-tab" data-toggle="pill" href="#v-pills-outdoorliving" role="tab" aria-controls="v-pills-outdoorliving" aria-selected="false">
                       <i class="d-none fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold">Outdoor Living</span></a>
                        
                        
                    <a class="nav-link mb-2 p-3 shadow" id="v-pills-specializedconstruction-tab" data-toggle="pill" href="#v-pills-specializedconstruction" role="tab" aria-controls="v-pills-specializedconstruction" aria-selected="false">
                       <i class="d-none fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold">Specialized Construction</span></a>    
                    </div>
            </div>


<div class="col-md-9">
                <!-- Tabs content -->
    <div class="tab-content" id="v-pills-tabContent">

                <!-- Trending -->
        <div class="tab-pane fade rounded show active" id="v-pills-trending" role="tabpanel" aria-labelledby="v-pills-trending-tab">
    <div class="row">

        <!-- Bathroom Service -->
        <div class=" zoom col-md-3 col-6">
            <div class="s1_help_box_col">
                <div class="hlp_img_box" onclick="window.location.href='bathroom-steps<?php echo $myurl; ?>'">
                    <a><img src="images/s1_help_icon5.png" width="200" height="200" alt="icon"><p class="text-center">Bathroom</p></a>
                </div>
            </div>
        </div>

        <!-- Door Service -->
        <div class=" zoom  col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='door-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/icondoor.svg" width="200" height="200" alt="icon"><p class="text-center">Door</p></a></div>
            </div>
        </div>

        <!-- Flooring Service -->
        <div class=" zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='flooring-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconflooring.png" width="200" height="200" alt="icon"><p class="text-center">Flooring</p></a></div>
            </div>
        </div>

        <!-- Gutter Service -->
        <div class="col-md-3 col-6 zoom">
            <div class="s1_help_box_col">
                <div class="hlp_img_box" onclick="window.location.href='gutter-steps<?php echo $myurl; ?>'">
                    <a><img src="images/s1_help_icon7.png" width="200" height="200" alt="icon"><p class="text-center">Gutter</p></a>
                </div>
            </div>
        </div>

        <!-- Handyman Service -->
        <!--<div class="col-md-3 col-6 zoom">-->
        <!--    <div class="s1_help_box_col">-->
        <!--        <div class="hlp_img_box" onclick="window.location.href='handyman-steps<?php echo $myurl; ?>'">-->
        <!--            <a><img src="images/iconhandyman.svg" width="200" height="200" alt="icon"><p class="text-center">Handyman</p></a>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->

        <!-- HVAC Service -->
        <div class="col-6 col-md-3 pb-2 zoom">
            <div class="s1_help_box_col">
                <div class="hlp_img_box" onclick="window.location.href='hvac-steps<?php echo $myurl; ?>'">
                    <a><img src="images/s1_help_icon4.png" width="200" height="200" alt="icon"><p class="text-center">HVAC</p></a>
                </div>
            </div>
        </div>

        <!-- Home Security Service -->
        <div class="col-6 col-md-3 pb-2 zoom">
            <div class="s1_help_box_col" onclick="window.location.href='homesecurity-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconHomeSafety.svg" width="200" height="200" alt="icon"><p class="text-center">Home Security</p></a></div>
            </div>
        </div>
        <div class="zoom col-6 col-md-3 pb-2">
              <div class="s1_help_box_col" onclick="window.location.href='homewarranty-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconhomewarranty.svg" width="200" height="200" alt="icon"><p class="text-center">Home Warranty</p></a></div>
            </div>
        </div>

        <!-- Kitchen Service -->
        <div class="col-md-3 col-6 zoom">
            <div class="s1_help_box_col">
                <div class="hlp_img_box" onclick="window.location.href='kitchen-steps<?php echo $myurl; ?>'">
                    <a><img src="images/iconkitchen.svg"  width="200" height="200" alt="icon"><p class="text-center">Kitchen</p></a>
                </div>
            </div>
        </div>

        <!-- Painting Service -->
        <div class="col-6 col-md-3 pb-2 zoom">
            <div class="s1_help_box_col" onclick="window.location.href='painting-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconpainting.svg" width="200" height="200" alt="icon"><p class="text-center">Painting</p></a></div>
            </div>
        </div>

        <!-- Plumbing Service -->
        <div class="col-6 col-md-3 pb-2 zoom">
            <div class="s1_help_box_col" onclick="window.location.href='plumbing-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconplumbing.svg" width="200" height="200" alt="icon"><p class="text-center">Plumbing</p></a></div>
            </div>
        </div>

        <!-- Roofing Service -->
        <div class="col-6 col-md-3 pb-2 zoom">
            <div class="s1_help_box_col">
                <div class="hlp_img_box" onclick="window.location.href='roofing-steps<?php echo $myurl; ?>'">
                    <a><img src="images/s1_help_icon1.png" width="200" height="200" alt="icon"><p class="text-center">Roofing</p></a>
                </div>
            </div>
        </div>

        <!-- Solar Service -->
        <div class="col-6 col-md-3 pb-2 zoom">
            <div class="s1_help_box_col">
                <div class="hlp_img_box" onclick="window.location.href='solar-steps<?php echo $myurl; ?>'">
                    <a><img src="images/s1_help_icon3.png" width="200" height="200" alt="icon"><p class="text-center">Solar</p></a>
                </div>
            </div>
        </div>

        <!-- Walk-In Tubs Service -->
        <div class="col-md-3 col-6 zoom">
            <div class="s1_help_box_col">
                <div class="hlp_img_box" onclick="window.location.href='walktub-steps<?php echo $myurl; ?>'">
                    <a><img src="images/s1_help_icon10.png" width="200" height="200" alt="icon"><p class="text-center">Walk-In Tubs</p></a>
                </div>
            </div>
        </div>

        <!-- Windows Service -->
        <div class="col-6 col-md-3 pb-2 zoom">
            <div class="s1_help_box_col">
                <div class="hlp_img_box" onclick="window.location.href='window-steps<?php echo $myurl; ?>'">
                    <a><img src="images/s1_help_icon2.png" width="200" height="200" alt="icon"><p class="text-center">Windows</p></a>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Interior Design and Renovation -->
        <div class="tab-pane fade rounded" id="v-pills-interior" role="tabpanel" aria-labelledby="v-pills-interior-tab">
    <div class="row">

        <!-- Attic Whole House Fan Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='atticwholehousefan-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconatticwholehousefan.svg" width="200" height="200" alt="icon"><p class="text-center">Ventilation</p></a></div>
            </div>
        </div>

        <!-- Bathroom Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col">
                <div class="hlp_img_box" onclick="window.location.href='bathroom-steps<?php echo $myurl; ?>'">
                    <a><img src="images/s1_help_icon5.png" width="200" height="200" alt="icon"><p class="text-center">Bathroom</p></a>
                </div>
            </div>
        </div>

        <!-- Countertops Service -->
        <div class="col-md-3 pb-2 col-6 zoom">
            <div class="s1_help_box_col" onclick="window.location.href='countertops-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconCountertop.svg" width="200" height="200" alt="icon"><p class="text-center">Countertops</p></a></div>
            </div>
        </div>

        <!-- Drywall Sheetrock Service -->
        <div class="col-md-3 pb-2 col-6 zoom">
            <div class="s1_help_box_col" onclick="window.location.href='drywallsheetrock-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/icondrywallsheetrock.svg" width="200" height="200" alt="icon"><p class="text-center">Drywall Sheetrock</p></a></div>
            </div>
        </div>

        <!-- Flooring Service -->
        <div class="col-md-3 pb-2 col-6 zoom">
            <div class="s1_help_box_col" onclick="window.location.href='flooring-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconflooring.png" width="200" height="200" alt="icon"><p class="text-center">Flooring</p></a></div>
            </div>
        </div>

        <!-- Furniture Service -->
        <div class="col-md-3 pb-2 col-6 zoom">
            <div class="s1_help_box_col" onclick="window.location.href='furniture-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconfurniture.svg" width="200" height="200" alt="icon"><p class="text-center">Furniture</p></a></div>
            </div>
        </div>

        <!-- Insulation Service -->
        <div class="col-md-3 pb-2 col-6 zoom">
            <div class="s1_help_box_col" onclick="window.location.href='insulation-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconinsulation.svg" width="200" height="200" alt="icon"><p class="text-center">Insulation</p></a></div>
            </div>
        </div>

        <!-- Kitchen Service -->
        <div class="col-md-3 col-6 zoom">
            <div class="s1_help_box_col">
                <div class="hlp_img_box" onclick="window.location.href='kitchen-steps<?php echo $myurl; ?>'">
                    <a><img src="images/iconkitchen.svg"  width="200" height="200" alt="icon"><p class="text-center">Kitchen</p></a>
                </div>
            </div>
        </div>

        <!-- Mirror Install Service -->
        <div class="col-md-3 col-6 zoom">
                <div class="s1_help_box_col" onclick="window.location.href='mirrorinstall-steps<?php echo $myurl; ?>'">
                    <div class="hlp_img_box"><a><img src="images/iconmirrorinstall.svg" width="200" height="200" alt="icon"><p class="text-center">Mirror Install</p></a></div>
                </div>
        </div>

        <!-- Painting Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='painting-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconpainting.svg" width="200" height="200" alt="icon"><p class="text-center">Painting</p></a></div>
            </div>
        </div>

        <!-- Stone Polish Service -->
        <div class="col-md-3 col-6 zoom">
            <div class="s1_help_box_col" onclick="window.location.href='stonepolish-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconstonepolish.svg" width="200" height="200" alt="icon"><p class="text-center">Stone Polish</p></a></div>
            </div>
        </div>

        <!-- Walk-In Tubs Service -->
        <div class="col-md-3 col-6 zoom">
            <div class="s1_help_box_col ">
                <div class="hlp_img_box" onclick="window.location.href='walktub-steps<?php echo $myurl; ?>'">
                    <a><img src="images/s1_help_icon10.png" width="200" height="200" alt="icon"><p class="text-center">Walk-In Tubs</p></a>
                </div>
            </div>
        </div>

        <!-- Wallpaper Service -->
        <div class="col-md-3 my-2 col-6 zoom">
            <div class="s1_help_box_col" onclick="window.location.href='wallpaper-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconwallpaper.svg" width="200" height="200" alt="icon"><p class="text-center">Wallpaper</p></a></div>
            </div>
        </div>

    </div>
</div>



<!-- Structural and Exterior -->
<div class="tab-pane fade rounded" id="v-pills-exterior" role="tabpanel" aria-labelledby="v-pills-exterior-tab">
    <div class="row">

        <!-- Concrete Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='concrete-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconConcrete.svg" width="200" height="200" alt="icon"><p class="text-center">Concrete</p></a></div>
            </div>
        </div>

        <!-- Drainage Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='drainage-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/Drainage (1).svg" width="200" height="200" alt="icon"><p class="text-center">Drainage</p></a></div>
            </div>
        </div>

        <!-- Door Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='door-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/icondoor.svg" width="200" height="200" alt="icon"><p class="text-center">Door</p></a></div>
            </div>
        </div>

        <!-- Fencing Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='fencing-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconfence.svg" width="200" height="200" alt="icon"><p class="text-center">Fencing</p></a></div>
            </div>
        </div>

        <!-- Foundation Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='foundation-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconfoundation.svg" width="200" height="200" alt="icon"><p class="text-center">Foundation</p></a></div>
            </div>
        </div>

        <!-- Garages Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='garage-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/icongarages.svg" width="200" height="200" alt="icon"><p class="text-center">Garages</p></a></div>
            </div>
        </div>

        <!-- Gutter Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='gutter-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/s1_help_icon7.png" width="200" height="200" alt="icon"><p class="text-center">Gutter</p></a></div>
            </div>
        </div>

        <!-- Land Surveyor Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='landsurveyor-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconlandsurveyor.svg" width="200" height="200" alt="icon"><p class="text-center">Land Surveyor</p></a></div>
            </div>
        </div>

        <!-- Masonry Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='masonary-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconmasonry.svg" width="200" height="200" alt="icon"><p class="text-center">Masonry</p></a></div>
            </div>
        </div>

        <!-- Roofing Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col">
                <div class="hlp_img_box" onclick="window.location.href='roofing-steps<?php echo $myurl; ?>'">
                    <a><img src="images/s1_help_icon1.png" width="200" height="200" alt="icon"><p class="text-center">Roofing</p></a>
                </div>
            </div>
        </div>

        <!-- Siding Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='siding-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconsiding.svg" width="200" height="200" alt="icon"><p class="text-center">Siding</p></a></div>
            </div>
        </div>

        <!-- Solar Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='solar-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/s1_help_icon3.png" width="200" height="200" alt="icon"><p class="text-center">Solar</p></a></div>
            </div>
        </div>

        <!-- Windows Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='window-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/s1_help_icon2.png" width="200" height="200" alt="icon"><p class="text-center">Windows</p></a></div>
            </div>
        </div>

    </div>
</div>

                    
            
            
<!-- Appliances and Fixtures Service -->
<div class="tab-pane fade rounded" id="v-pills-appliances" role="tabpanel" aria-labelledby="v-pills-appliances-tab">
    <div class="row">

        <!-- Bathtub Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='bathtub-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/bathtub.svg" width="200" height="200" alt="icon"><p class="text-center">Bathtub</p></a></div>
            </div>
        </div>

        <!-- Cabinet Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='cabinet-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconcabinet.svg" width="200" height="200" alt="icon"><p class="text-center">Cabinet</p></a></div>
            </div>
        </div>

        <!-- Carpentry Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='carpentry-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconcarpentry.svg" width="200" height="200" alt="icon"><p class="text-center">Carpentry</p></a></div>
            </div>
        </div>

        <!-- Glass Repair Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='glassrepair-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconglassrepair.svg" width="200" height="200" alt="icon"><p class="text-center">Glass Repair</p></a></div>
            </div>
        </div>

        <!-- Handyman Appliance Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='handymanappliance-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconhandymanappliances.svg" width="200" height="200" alt="icon"><p class="text-center">Handyman Appliance</p></a></div>
            </div>
        </div>

    </div>
</div>

            
            
            
            
            
<!-- Design and Planning Service -->
<div class="tab-pane fade rounded" id="v-pills-designplanning" role="tabpanel" aria-labelledby="v-pills-designplanning-tab">
    <div class="row">

        <!-- Architects Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='architects-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconarchitects.svg" width="200" height="200" alt="icon"><p class="text-center">Architects</p></a></div>
            </div>
        </div>

        <!-- Architectural Plans Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='architecturalplandesign-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconarchitecturalplandesign.svg" width="200" height="200" alt="icon"><p class="text-center">Architectural Plans</p></a></div>
            </div>
        </div>

        <!-- Custom Homes Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='customhomes-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconcustomhome.svg" width="200" height="200" alt="icon"><p class="text-center">Custom Homes</p></a></div>
            </div>
        </div>

        <!-- Artisans Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='decoratorsanddesigners-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconartisans.svg" width="200" height="200" alt="icon"><p class="text-center">Artisans</p></a></div>
            </div>
        </div>

        <!-- Home Media Tv Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='homemediatv-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconhomemediatv.svg" width="200" height="200" alt="icon"><p class="text-center">Home Media Tv</p></a></div>
            </div>
        </div>

        <!-- Room Additions Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='roomadditions-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconroomadditions.svg" width="200" height="200" alt="icon"><p class="text-center">Room Additions</p></a></div>
            </div>
        </div>

        <!-- Small Projects Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='smallprojects-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/Small-Projects.svg" width="200" height="200" alt="icon"><p class="text-center">Small Projects</p></a></div>
            </div>
        </div>

        <!-- Tile Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='tile-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/icontiles.svg" width="200" height="200" alt="icon"><p class="text-center">Tile</p></a></div>
            </div>
        </div>

        <!-- Walls Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='wall-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconwalls.svg" width="200" height="200" alt="icon"><p class="text-center">Walls</p></a></div>
            </div>
        </div>

    </div>
</div>

            
            

<!-- Environmental and Safety Services -->
<div class="tab-pane fade rounded" id="v-pills-envirosafety" role="tabpanel" aria-labelledby="v-pills-envirosafety-tab">
    <div class="row">

        <!-- Home Security Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='homesecurity-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconHomeSafety.svg" width="200" height="200" alt="icon"><p class="text-center">Home Security</p></a></div>
            </div>
        </div>

        <!-- Mold Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='mold-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconmold.svg" width="200" height="200" alt="icon"><p class="text-center">Mold</p></a></div>
            </div>
        </div>

        <!-- Pest Control Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='pestcontrol-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconpestcontrol.svg" width="200" height="200" alt="icon"><p class="text-center">Pest Control</p></a></div>
            </div>
        </div>

        <!-- Security Cameras Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='securitycameras-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconsecuritycameras.svg" width="200" height="200" alt="icon"><p class="text-center">Security Cameras</p></a></div>
            </div>
        </div>

        <!-- Toxic Material Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='toxicmaterial-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/icontoxicmaterial.svg" width="200" height="200" alt="icon"><p class="text-center">Toxic Material</p></a></div>
            </div>
        </div>

        <!-- Water Pest Damage Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='waterpestdamage-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/Water Pest Damage.svg" width="200" height="200" alt="icon"><p class="text-center">Water Pest Damage</p></a></div>
            </div>
        </div>

    </div>
</div>









<!-- Home Maintenance and Repair Services -->
<div class="tab-pane fade rounded" id="v-pills-maintenancerepair" role="tabpanel" aria-labelledby="v-pills-maintenancerepair-tab">
    <div class="row">

        <!-- Cleaning Service -->
        <div class="zoom col-6 col-md-3 pb-2">
             <div class="s1_help_box_col" onclick="window.location.href='cleaning-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconCleaning.svg" width="200" height="200" alt="icon"><p class="text-center">Cleaning</p></a></div>
            </div>
            
        </div>

        <!-- Dryrot Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='dryrot-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/Dryrot (1).svg" width="200" height="200" alt="icon"><p class="text-center">Dryrot</p></a></div>
            </div>
            
        </div>

        <!-- Handyman Service -->
        <div class="zoom col-6 col-md-3 pb-2">
           <div class="s1_help_box_col" onclick="window.location.href='handyman-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconhandyman.svg" width="200" height="200" alt="icon"><p class="text-center">Handyman</p></a></div>
            </div>
        </div>

        <!-- Home Inspection Service -->
        <div class="zoom col-6 col-md-3 pb-2">
             <div class="s1_help_box_col" onclick="window.location.href='homeinspection-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconhomeinspection.svg" width="200" height="200" alt="icon"><p class="text-center">Home Inspection</p></a></div>
            </div>
        </div>

        <!-- Junk Removal Service -->
        <div class="zoom col-6 col-md-3 pb-2">
           <div class="s1_help_box_col" onclick="window.location.href='junkremoval-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/Junk Removal.svg" width="200" height="200" alt="icon"><p class="text-center">Junk Removal</p></a></div>
            </div>
        </div>

        <!-- Locksmith Service -->
       <div class="zoom col-6 col-md-3 pb-2">
             <div class="s1_help_box_col" onclick="window.location.href='locksmith-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconlocksmith.svg" width="200" height="200" alt="icon"><p class="text-center">Locksmith</p></a></div>
            </div>
        </div>

        <!-- Rental Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='rental-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconrentalservice.svg" width="200" height="200" alt="icon"><p class="text-center">Rental Service</p></a></div>
            </div>
        </div>

        <!-- Shower Glass Install Door Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='showerglassinstalldoor-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconshowerglassinstallationdoor.svg" width="200" height="200" alt="icon"><p class="text-center">ShowerGlass</p></a></div>
            </div>
        </div>

    </div>
</div>




<!-- System & Utilities Services -->
<div class="tab-pane fade rounded" id="v-pills-systemutilities" role="tabpanel" aria-labelledby="v-pills-systemutilities-tab">
    <div class="row">

        <!-- Electrical Service -->
        <div class="zoom col-6 col-md-3 pb-2">
             <div class="s1_help_box_col" onclick="window.location.href='electrical-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconelectrical.svg" width="200" height="200" alt="icon"><p class="text-center">Electrical</p></a></div>
            </div>
        </div>

        <!-- Home Energy Audit Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='homeenergyaudit-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconhomeenergyaudit.svg" width="200" height="200" alt="icon"><p class="text-center">EnergyScan</p></a></div>
            </div>
        </div>

        <!-- HVAC Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col">
                <div class="hlp_img_box" onclick="window.location.href='hvac-steps<?php echo $myurl; ?>'">
                    <a><img src="images/s1_help_icon4.png" width="200" height="200" alt="icon"><p class="text-center">HVAC</p></a>
                </div>
            </div>
        </div>

        <!-- Plumbing Service -->
        <div class="zoom col-6 col-md-3 pb-2">
              <div class="s1_help_box_col" onclick="window.location.href='plumbing-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconplumbing.svg" width="200" height="200" alt="icon"><p class="text-center">Plumbing</p></a></div>
            </div>
        </div>

        <!-- Portable Toilets Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='portabletoilets-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconportabletoilets.svg" width="200" height="200" alt="icon"><p class="text-center">Portable Toilets</p></a></div>
            </div>
        </div>

        <!-- Septic Service -->
       <div class="zoom col-6 col-md-3 pb-2">
             <div class="s1_help_box_col" onclick="window.location.href='septic-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconseptic.svg" width="200" height="200" alt="icon"><p class="text-center">Septic</p></a></div>
            </div>
        </div>

        <!-- Sewer Water Main Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='sewerwatermain-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconsewerwatermain.svg" width="200" height="200" alt="icon"><p class="text-center">Pipeline</p></a></div>
            </div>
        </div>

        <!-- Water Heater Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='waterheater-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconwaterheater.svg" width="200" height="200" alt="icon"><p class="text-center">Water Heater</p></a></div>
            </div>
        </div>

        <!-- Well Pumps Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='wellpumps-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconwellpumps.svg" width="200" height="200" alt="icon"><p class="text-center">Well pumps</p></a></div>
            </div>
        </div>

        <!-- Wiring Low Voltage Service -->
        <div class="zoom col-6 col-md-3 pb-2">
           <div class="s1_help_box_col" onclick="window.location.href='wiringlowvoltage-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconwiringlowvoltage.svg" width="200" height="200" alt="icon"><p class="text-center">Wiring Low Voltage</p></a></div>
            </div>
        </div>

    </div>
</div>



<!-- Miscellaneous and Specialized Services -->
<div class="tab-pane fade rounded" id="v-pills-miscelspecialized" role="tabpanel" aria-labelledby="v-pills-miscelspecialized-tab">
    <div class="row">

        <!-- Appraiser Real Estate Service -->
        <div class="zoom col-6 col-md-3 pb-2">
             <div class="s1_help_box_col" onclick="window.location.href='appraiserrealestate-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconappraiserrealestate.svg" width="200" height="200" alt="icon"><p class="text-center">Real Estate</p></a></div>
            </div>
        </div>

        <!-- Christmas Lights Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='christmaslights-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconchristmaslights.svg" width="200" height="200" alt="icon"><p class="text-center">Christmas Lights</p></a></div>
            </div>
        </div>

        <!-- Home Warranty Service -->
        <div class="zoom col-6 col-md-3 pb-2">
              <div class="s1_help_box_col" onclick="window.location.href='homewarranty-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconhomewarranty.svg" width="200" height="200" alt="icon"><p class="text-center">Home Warranty</p></a></div>
            </div>
        </div>

        <!-- Materials Service -->
        <div class="zoom col-6 col-md-3 pb-2">
              <div class="s1_help_box_col" onclick="window.location.href='materials-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconmaterials.svg" width="200" height="200" alt="icon"><p class="text-center">Materials</p></a></div>
            </div>
        </div>

        <!-- Skylight Service -->
        <div class="zoom col-6 col-md-3 pb-2">
           <div class="s1_help_box_col" onclick="window.location.href='skylight-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/Skylight.svg" width="200" height="200" alt="icon"><p class="text-center">Skylight</p></a></div>
            </div>
        </div>

        <!-- Stair Lift Service -->
       <div class="zoom col-6 col-md-3 pb-2">
             <div class="s1_help_box_col" onclick="window.location.href='stairlift-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconstairlift.svg" width="200" height="200" alt="icon"><p class="text-center">Stair Lift</p></a></div>
            </div>
        </div>

        <!-- Tennis Service -->
        <div class="zoom col-6 col-md-3 pb-2">
           <div class="s1_help_box_col" onclick="window.location.href='tennis-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/icontenniss.svg" width="200" height="200" alt="icon"><p class="text-center">Tennis</p></a></div>
            </div>
        </div>
    </div>
</div>



<!-- Outdoor Living Services -->
<div class="tab-pane fade rounded" id="v-pills-outdoorliving" role="tabpanel" aria-labelledby="v-pills-outdoorliving-tab">
    <div class="row">

        <!-- Awnings Service -->
        <div class="zoom col-6 col-md-3 pb-2">
             <div class="s1_help_box_col" onclick="window.location.href='awnings-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconawnings.svg" width="200" height="200" alt="icon"><p class="text-center">Awnings</p></a></div>
            </div>
        </div>

        <!-- Deck Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='deck-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/icondeck.svg" width="200" height="200" alt="icon"><p class="text-center">Deck</p></a></div>
            </div>
        </div>

        <!-- Landscaping Service -->
        <div class="zoom col-6 col-md-3 pb-2">
              <div class="s1_help_box_col" onclick="window.location.href='landscaping-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconlandscaping.svg" width="200" height="200" alt="icon"><p class="text-center">Landscaping</p></a></div>
            </div>
        </div>

        <!-- Outdoor Play Equipment Service -->
        <div class="zoom col-6 col-md-3 pb-2">
              <div class="s1_help_box_col" onclick="window.location.href='outdoorplayequipment-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/Outdoor-Play-Equipment.svg" width="200" height="200" alt="icon"><p class="text-center">Outdoor Equipment</p></a></div>
            </div>
        </div>

        <!-- Patio Covers Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='patiocovers-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconpatiocovers.svg" width="200" height="200" alt="icon"><p class="text-center">Patio Covers</p></a></div>
            </div>
        </div>

        <!-- Pool Service -->
       <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='pool-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconpool.svg" width="200" height="200" alt="icon"><p class="text-center">Pool</p></a></div>
            </div>
        </div>

        <!-- Power Washing Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='powerwashing-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconpowerwashing.svg" width="200" height="200" alt="icon"><p class="text-center">Power Washing</p></a></div>
            </div>
        </div>

        <!-- Sheds Service -->
        <div class="zoom col-6 col-md-3 pb-2">
             <div class="s1_help_box_col" onclick="window.location.href='sheds-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconsheds.svg" width="200" height="200" alt="icon"><p class="text-center">Sheds</p></a></div>
            </div>
        </div>

        <!-- Sunroom Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='sunroom-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/iconsunroom.svg" width="200" height="200" alt="icon"><p class="text-center">Sunroom</p></a></div>
            </div>
        </div>

        <!-- Tree Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='tree-steps<?php echo $myurl; ?>'">
            	<div class="hlp_img_box"><a><img src="images/icontree.svg" width="200" height="200" alt="icon"><p class="text-center">Tree</p></a></div>
            </div>
        </div>
    </div>
</div>



            
            
   
<!-- Specialized Construction Services -->
<div class="tab-pane fade rounded" id="v-pills-specializedconstruction" role="tabpanel" aria-labelledby="v-pills-specializedconstruction-tab">
    <div class="row">

        <!-- Basement Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='basement-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconbasement.svg" width="200" height="200" alt="icon"><p class="text-center">Basement</p></a></div>
            </div>
        </div>

        <!-- Brick Work Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='brickwork-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconbrickwork.svg" width="200" height="200" alt="icon"><p class="text-center">Brick Work</p></a></div>
            </div>
        </div>

        <!-- Brick Stone Fireplace Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='brickstonefireplace-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconbrickstonefireplace.svg" width="200" height="200" alt="icon"><p class="text-center">Fireplace</p></a></div>
            </div>
        </div>

        <!-- Demolition Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='demolition-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/icondemolition.svg" width="200" height="200" alt="icon"><p class="text-center">Demolition</p></a></div>
            </div>
        </div>

        <!-- Engineers Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='engineer-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/Engineers (1).svg" width="200" height="200" alt="icon"><p class="text-center">Engineer</p></a></div>
            </div>
        </div>

        <!-- Excavation Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='excavation-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/Excavation.svg" width="200" height="200" alt="icon"><p class="text-center">Excavation</p></a></div>
            </div>
        </div>

        <!-- Framing Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='framing-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconframing.svg" width="200" height="200" alt="icon"><p class="text-center">Framing</p></a></div>
            </div>
        </div>

        <!-- Remodeling Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='remodeling-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/Remodeling.svg" width="200" height="200" alt="icon"><p class="text-center">Remodeling</p></a></div>
            </div>
        </div>

        <!-- Stone Masonry Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='stonemasonary-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconstonemasonry.svg" width="200" height="200" alt="icon"><p class="text-center">Stone Masonry</p></a></div>
            </div>
        </div>

        <!-- Metal Fabrication Service -->
        <div class="zoom col-6 col-md-3 pb-2">
            <div class="s1_help_box_col" onclick="window.location.href='weldcutmetalstructure-steps<?php echo $myurl; ?>'">
                <div class="hlp_img_box"><a><img src="images/iconweldcutmetalstructure.svg" width="200" height="200" alt="icon"><p class="text-center">Metal Fabrication</p></a></div>
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
<script>
    $(document).ready(function () {
        // Add a click event listener to all links with class "nav-link"
        $('.nav-link').click(function () {
            // Get the target element by its ID
            var targetElement = $('#top');

            // Scroll to the target element
            $('html, body').animate({
                scrollTop: targetElement.offset().top
            }, 100); // Adjust the duration as needed
        });
    });
</script>

<?php include'footer.php' ?>


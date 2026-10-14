<style>
    .mw-90{
     max-width:90%;   
    }
</style>
<div class="section_2 lg-bg">
	<div class="container">
	    <h2 class="common_heading">How It Works <br> In Just 3 Simple Steps</h2>
	    
	    <div class="row pt-5 d-flex justify-content-center align-items-center">
	        <div class="col-lg-6 col-sm-6">
	            <img src="/images/how-it-works-3.webp" class="mw-90" alt="Home Improvement Experts">
	        </div>
	        <div class="col-lg-6 col-sm-6">
	       
           
            <ul class="s2_step_list">
                <li>
                	<div class="s2_point"><div></div></div>
                    
                    <h3>
                        <div class="di"><i class="bi bi-pencil-square"></i>  Tell us what you need</div></h3>
                    <p class="myfs">Enter your zip code, choose a service, and give us a quick idea of the job. Simple and fast.</p>
                </li>
                
                <li>
                	<div class="s2_point"><div></div></div>
                    
                    <h3>
                        <div class="di"><i class="bi bi-person-check"></i> We match you with trusted pros</div></h3>
                    <p class="myfs">Get connected to top rated local experts who are ready to go. You’ll see clear info, honest pricing & zero pressure.</p>
                </li>
                
                <li>
                	<div class="s2_point"><div></div></div>
                    
                    
                    <h3><div class="di"><i class="bi bi-calendar-check"></i> Book & relax</div></h3>
                    <p class="myfs">Your time is valuable. Once you book, we handle the rest- seamlessly and professionally.</p>
                </li>
            </ul>
            
            <div class="clearall"></div>
            <div class="btn_box">
<a id="quoteBtn" href="/allservices" class="common_btn-copy">
    Get A Quote Now
    <img src="/images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
</a>
                <p class="btn_text">We Just Make it easier.</p>
            </div>
        </div>
	    </div>
	    
	    
	    
	    

    </div>
</div>
<script>
(function () {

    const stepPages = [
        "roofing-steps","gutter-steps","solar-steps","siding-steps","fencing-steps",
        "foundation-steps","garage-steps","landscaping-steps","masonary-steps",
        "pestcontrol-steps","pool-steps","door-steps","window-steps","hvac-steps",
        "homesecurity-steps","flooring-steps","electrical-steps","concrete-steps",
        "countertops-steps","handyman-steps","locksmith-steps","toxicmaterial-steps",
        "cleaning-steps","bathroom-steps","furniture-steps","glassrepair-steps",
        "handymanappliance-steps","insulation-steps","kitchen-steps",
        "mirrorinstall-steps","mold-steps","painting-steps","plumbing-steps",
        "stonepolish-steps","walktub-steps","weldcutmetalstructure-steps",
        "wellpumps-steps","wiringlowvoltage-steps","basement-steps","bathtub-steps",
        "brickstonefireplace-steps","brickwork-steps","cabinet-steps",
        "carpentry-steps","customhomes-steps","deck-steps",
        "decoratorsanddesigners-steps","drywallsheetrock-steps",
        "homeinspection-steps","homemediatv-steps","materials-steps",
        "rental-steps","septic-steps","stairlift-steps","tennis-court-steps",
        "tile-steps","tree-steps","wallpaper-steps","wall-steps",
        "appraiserrealestate-steps","architects-steps",
        "architecturalplandesign-steps","atticwholehousefan-steps",
        "awnings-steps","christmaslights-steps","demolition-steps",
        "drainage-steps","dryrot-steps","engineer-steps","excavation-steps",
        "framing-steps","homeenergyaudit-steps","homewarranty-steps",
        "junkremoval-steps","landsurveyor-steps","outdoorplayequipment-steps",
        "patiocovers-steps","portabletoilets-steps","powerwashing-steps",
        "remodeling-steps","roomadditions-steps","securitycameras-steps",
        "sewerwatermain-steps","sheds-steps","showerglassinstalldoor-steps",
        "skylight-steps","smallprojects-steps","stonemasonary-steps",
        "sunroom-steps","waterheater-steps","waterdamage-steps"
    ];

    const currentPath = window.location.pathname
        .replace(/^\/|\/$/g, '')
        .toLowerCase();

    const button = document.getElementById("quoteBtn");
    if (!button) return;

    // If already on valid -steps page
    if (stepPages.includes(currentPath)) {
        button.href = "/" + currentPath;
        return;
    }
    
    // NEW: Handle state + SEO service URLs
if (currentPath.includes("plumbing")) {
    button.href = "/plumbing-steps";
    return;
}

if (currentPath.includes("hvac")) {
    button.href = "/hvac-steps";
    return;
}

    // If base slug matches approved list
    const possibleStep = currentPath + "-steps";
    if (stepPages.includes(possibleStep)) {
        button.href = "/" + possibleStep;
    }

    // If neither matched → stays "/allservices"

})();
</script>
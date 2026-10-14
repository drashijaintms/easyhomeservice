<form class="leadForm">
<div class="row g-3">

<!-- Full Name -->
<div class="col-12 col-md-6">
<div class="mb-1">
<label class="form-label">Full Name</label>
<input type="text" class="form-control name" name="name" placeholder="Enter your name" required>
<div class="invalid-feedback"></div>
</div>
</div>

<!-- Phone -->
<div class="col-12 col-md-6">
<div class="mb-1">
<label class="form-label">Phone Number</label>
<input type="tel" class="form-control phoneNumber" name="phoneNumber" placeholder="(555) 123-4567" required>
<div class="invalid-feedback"></div>
</div>
</div>

<!-- Email -->
<div class="col-12 col-md-6">
<div class="mb-1">
<label class="form-label">Email Address</label>
<input type="email" class="form-control email" name="email" placeholder="you@example.com" required>
<div class="invalid-feedback"></div>
</div>
</div>
<!-- Address (Optional) -->
<div class="col-12 col-md-6">
  <div class="mb-1">
    <label class="form-label">Address</label>
    <input type="text" class="form-control address" name="address" placeholder="Enter your address">
    <div class="invalid-feedback"></div>
  </div>
</div>
<!-- Zip -->
<div class="col-12 col-md-6">
<div class="mb-1">
<label class="form-label">Zip Code</label>
<input type="text" class="form-control zipcode" name="zipcode" maxlength="5" placeholder="12345" required>
<div class="invalid-feedback"></div>

<?php
$landing_page = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http')
               . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$subcategory = ucfirst(basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
?>

<input type="hidden" name="landingPage" value="<?php echo htmlspecialchars($landing_page, ENT_QUOTES); ?>">

<input type="text" name="website" style="position:absolute; left:-9999px;">
<input type="hidden" name="subcategory" value="<?php echo htmlspecialchars($subcategory, ENT_QUOTES); ?>">

</div>
</div>

<!-- Service -->
<div class="col-12 col-md-6">
<div class="mb-3">
<label class="form-label serviceLabel">Service</label>

<select class="form-select service" name="service" required>
<option value="" disabled selected>Select any one</option>
</select>

<div class="invalid-feedback"></div>
</div>
</div>

<!-- Consent -->
<div class="col-12">
<div class="form-check">
<input class="form-check-input consent" type="checkbox" name="consent" required>
<label class="form-check-label">
                   By clicking "Agree and Submit", I agree to the <a href="javascript:void(0);" onclick="openNewWindow('privacy.php','modal');">
    Privacy Policy
</a>,<a href="javascript:void(0);" onclick="openNewWindow('tcpa.php','modal');">TCPA</a> and <a href="javascript:void(0);" onclick="openNewWindow('terms.php','modal');">Terms and Conditions.</a> I also consent to receive marketing communications through email and other texts or calls from easyhomeservice.com and/or its <a href="javascript:void(0);" onclick="openNewWindow('marketing-partner.php','modal');">marketing partners</a> about Home Service by any means or technology, including an automatic dialing system, to the phone number I have previously provided, even if that number is on a national or state Do-Not-Call registry . Carrier and data rates may apply. I understand that my consent to such calls and text messages is not required to purchase products from or use the services of <a href="javascript:void(0);" onclick="openNewWindow('marketing-partner.php','modal');">marketing partners.</a></label>
<div class="invalid-feedback"></div>
</div>
</div>

<!-- Submit -->
<div class="col-12">
<button type="submit" class="btn-submit w-100">Get Quote Now</button>
</div>

</div>
</form>

<script>
const SERVICES = {

roofing:{
label:"Roofing Type",
options:[
"ROOF COATING SEALANT",
"ROOFING ASPHALT",
"ROOFING CEDAR SHAKE",
"ROOFING METAL",
"ROOFING NATURAL SLATE",
"ROOFING TAR TORCHDOWN",
"ROOFING TILE",
"ROOFING FLAT / FOAM / SINGLE PLY",
"WOOD SHAKE OR COMPOSITE"
]
},

window:{
label:"Window Service",
options:[
"BAY & BOW WINDOW",
"CASEMENT WINDOW",
"DOUBLE-HUNG WINDOW",
"SLIDING WINDOW",
"PICTURE WINDOW",
"ALUMINIUM WINDOW"
]
},

solar:{
label:"Solar Service",
options:[
"SOLAR PANEL INSTALLATION",
"SOLAR PANEL MAINTENANCE & REPAIR",
"SOLAR CONSULTATION & ASSESSMENT",
"SOLAR UPGRADE / BATTERY",
]
},

hvac:{
label:"HVAC Service",
options:[
"HEAT PUMP SERVICES",
"FURNACE INSTALLATION & REPAIR",
"AIR DUCT CLEANING & REPAIR",
"AC INSTALLATION & REPAIR",
"BOILER INSTALLATION & REPAIR",
"INDOOR AIR QUALITY SERVICES"
]
},

bathroom:{
label:"Bathroom Service",
options:[
"BATHTUB",
"SHOWER",
"TOILET",
"SINK & VANITY",
"WALLS & FLOORING",
"WALK-IN TUB INSTALLATION"
]
},

kitchen:{
label:"Kitchen Service",
options:[
"FULL KITCHEN REMODELING",
"PARTIAL KITCHEN RENOVATION",
"CABINET UPGRADES",
"COUNTERTOP/BACKSPLASH REPLACEMENT",
"PLUMBING / ELECTRICAL UPGRADE",
"CUSTOM KITCHEN DESIGN"
]
},

gutter:{
label:"Gutter Service",
options:[
"WOOD GUTTERS",
"PVC GUTTERS",
"GALVANIZED GUTTERS",
"COPPER GUTTERS",
"GUTTER GUARDS"
]
},

handyman:{
label:"Handyman Service",
options:[
"GENERAL HANDYMAN",
"PLUMBING",
"ELECTRICAL",
"CARPENTRY",
"APPLIANCE REPAIR",
"PAINTING",
"DRYWALL",
"LAWN CARE",
"LOCKSMITH"
]
},

homewarranty:{
label:"Home Warranty Service",
options:[
"HVAC SYSTEMS",
"PLUMBING & WATER SYSTEMS",
"ELECTRICAL SYSTEMS",
"KITCHEN APPLIANCES",
"LAUNDRY & UTILITY APPLIANCES",
"SPECIALITY COVERAGE"
]
},

flooring:{
label:"Flooring Service",
options:[
"HARDWOOD FLOORING",
"TILE FLOORING",
"VINYL FLOORING",
"CARPET FLOORING",
"LAMINATE FLOORING",
"STONE FLOORING"
]
},

siding:{
label:"Siding Service",
options:[
"VINYL SIDING",
"FIBER CEMENT",
"WOOD SIDING",
"STUCCO",
"BRICK/STONE",
"METAL SIDING"
]
},

electrical:{
label:"Electrical Service",
options:[
"ELECTRICAL REPAIRS",
"WIRING & REWIRING",
"LIGHTING INSTALLATION",
"PANEL UPGRADES",
"SWITCHES & OUTLETS",
"SAFETY INSPECTIONS"
]
},

painting:{
label:"Painting Service",
options:[
"EXTERIOR PAINTING",
"INTERIOR PAINTING",
"CABINET & TRIM PAINTING",
"PRESSURE WASHING",
"SPECIALTY & DECORATIVE FINISHES",
"CEILING & TEXTURED SERVICES"
]
},

"pest-control":{
label:"Pest Control Service",
options:[
"BUGS OR INSECTS PEST CONTROL",
"BIRDS OR BATS PEST CONTROL",
"RODENTS PEST CONTROL",
"TERMITE PEST CONTROL",
"BEES OR WASP PEST CONTROL",
"MOSQUITOES OR TICKS PEST CONTROL"
]
},

plumbing:{
label:"Plumbing Service",
options:[
"WATER HEATER REPAIR & INSTALLATION",
"DRAIN CLEANING & CLOG REMOVAL",
"TOILET REPAIR & INSTALLATION",
"FAUCET, SINK & FIXTURE INSTALL/REPAIR",
"LEAK DETECTION & PIPE REPAIR",
"SEWER LINE INSPECTION & REPAIR"
]
},

"waterdamage":{
label:"Water Damage Service",
options:[
"Walls & Ceilings",
"Flooring",
"Home Exterior",
"Basements",
"Attic Spaces",
"Plumbing & Utility Areas"
]
},

home:{
label:"Select Service",
options:[
"ROOFING",
"WINDOWS",
"SOLAR",
"HVAC",
"BATHROOM",
"KITCHEN",
"GUTTER",
"WALK-IN TUBS",
"HANDYMAN",
"HOME WARRANTY",
"FLOORING",
"SIDING",
"OTHER"
]
},

"door":{
label:"Door Service",
options:[
"Exterior Doors",
"Interior Doors",
"Patio Door",
"Storm Doors",
"Garage Door",
"Utility Door",
]
},
"homesecurity":{
label:"Home Security Service",
options:[
"Home Security Systems",
"Home Security Cameras",
"Alarm Systems for Homes",
"Smart Home Security Solutions",
]
},
"locksmith":{
label:"Locksmith Service",
options:[
"Emergency Lockout",
"Residential Locksmith",
"Automotive Locksmith",
"Commercial Locksmith",
"Smart & Electronic Lock",
"Security & Specialty Lock",
]
},

"skylight":{
label:"Skylight Service",
options:[
"Fixed Skylights",
"Venting Skylights",
"Sun Tunnel Skylights",
"Deck Mounted Skylights",
"Solar-Powered Skylights",
"Custom-Designed Skylights",
]
},

"patiocovers-copy":{
label:"Patio Covers Service",
options:[
"Fixed Patio Covers",
"Retractable Patio Covers",
"Pergola & Lattice Covers",
"Freestanding Patio Covers",
]
},
"awnings":{
label:"Awnings Service",
options:[
"Patio & Deck Awning",
"Window & Door Awning",
"Freestanding & Canopy Awning",
"Retractable Awning",
"Vertical Awning",
"Awning Upgrades",
]
},

"deck":{
label:"Deck Service",
options:[
"Attached Decks",
"Freestanding Decks",
"Elevated Decks",
"Multi-Level Decks",
"Covered Decks",
"Specialty Decks",
]
},

"powerwashing":{
label:"Power Washing Service",
options:[
"Home Exterior Washing",
"Driveway & Concrete Cleaning",
"Roof Cleaning (Soft Wash)",
"Deck & Patio Cleaning",
"Gutter Cleaning",
"Garage Area Cleaning",
]
},
"mold":{
label:"Mold Service",
options:[
"Walls & Ceilings",
"Basement & Crawl Space",
"Attic Space",
"Bathroom & Kitchen",
"HVAC & Air Duct",
"Floors & Wooden Surface",
]
},
"sunroom":{
label:"Sunroom Service",
options:[
"Three Season Sunroom",
"Four Season Sunroom",
"Screen Rooms",
"Solariums",
"Florida Rooms",
"Patio Enclosures",
]
},
"cabinet":{
label:"Cabinet Service",
options:[
"Cabinet Installation",
"Cabinet Replacement",
"Cabinet Refacing",
"Cabinet Repair",
]
},
"walktub":{
label:"Walk Tub Service",
options:[
"Soaking Walk-in tubs",
"Hydrotherapy Walk-In Tubs",
"Air Jet Walk-in Tubs",
"Dual Jet Walk in Tubs",
"Bariatric Walk-in Tubs",
"Wheelchair Accessible Walk-in Tubs",
]
},
"remodeling":{
label:"Remodeling Service",
options:[
"Bathroom",
"Kitchen",
"Interior Updates",
"Exterior updates",
"Sunroom",
"Basement & Attic",
]
},
"fencing":{
label:"Fencing Service",
options:[
"Wood Fences",
"Vinyl/PVC Fences",
"Chain link",
"Wrought Iron",
"Steel/Aluminum",
"Barbed Wire",
]
},
"carpentry":{
label:"Carpentry Service",
options:[
"Cabinets",
"Custom Furniture",
"Doors & Windows",
"Trim/Moulding",
"Flooring",
"Outdoors",
]
},
"wallpaper":{
label:"Wallpaper Service",
options:[
"Walls",
"Ceilings",
"Furniture Surfaces",
"Doors & Panels",
"Kitchen & Bathroom",
"Speciality Surfaces",
]
},
"foundation":{
label:"Foundation Service",
options:[
"Foundation Repair",
"Foundation Install",
"Foundation Leveling",
"Foundation Inspection",
"Foundation Waterproofing",
"Basements & Crawl Space",
]
},
"garage":{
label:"Garage Service",
options:[
"Garage Remodel",
"Garage Door",
"Garage Construction",
"Garage Expansion",
]
},
"christmaslights":{
label:"Christmas Lights Service",
options:[
"Christmas lights installation",
"Christmas lights decorating",
"Full property lighting",
"Outdoor & Speciality lighting",
"Christmas lights removal",
"Maintenance & Repair",
]
},
"junkremoval":{
label:"Junk Removal Service",
options:[
"Furniture & Mattress",
"Appliance & Electronics",
"Household & Yard Junk",
"Construction Debris",
"Garage pickups",
"Equipments & Oversized Items",
]
},
"stairlift":{
label:"Stairlift Service",
options:[
"Stairlift Installation",
"Stairlift Repair",
"Stairlift Maintenance & Servicing",
"Stairlift Upgrades & Replacement",
"Outdoor Stairlift Solutions",
"Stairlift Removal & Relocation",
]
},
"brickstonefireplace":{
label:"Fireplace Service",
options:[
"Wood-Burning Fireplaces",
"Electric Fireplaces",
"Freestanding & Stove Fireplaces",
"Built-In Fireplaces",
"Masonry Fireplaces",
]
},
"tennis-court":{
label:"Tennis Court Service",
options:[
"Tennis Court Installation",
"Tennis Court Repair",
"Tennis Court Resurfacing",
"Hard Court Construction",
"Cushioned Court Upgrades",
"Soft Court Upgrades",
]
},
"roomadditions":{
label:"Room Additions Service",
options:[
"Bedroom Additions",
"Bathroom Additions",
"Garage conversion/Addition",
"Kitchen Extensions",
"Sunroom & Patio Enclosures",
"Guest House/ADU Additions",
]
},
"hazardous-material-copy":{
label:"Hazardous Material Service",
options:[
"Asbestos Testing/Removal",
"Lead Paint Inspection/Removal",
"Mold Remediation",
"Radon Testing/Mitigation",
]
},
"waterheater-copy":{
label:"Water Heater Service",
options:[
"Tank Water Heaters",
"Tankless Water Heaters",
"Hybrid heat Pumps",
"Water Heater Repair",
"Water Heater Replacement",
"Maintenance & Flushing",
]
},
"landscaping-copy":{
label:"Landscaping Service",
options:[
"Install/Design Landscape",
"Lawn care",
"Trees & Shrubs",
"Hardscaping Services",
"Irrigation & Sprinkler Systems",
"Yard Drainage & Grading Services",
]
},
"tree":{
label:"Tree Service",
options:[
"Tree & Shrub Removal",
"Tree Trimming & Pruning",
"Stump Grinding",
"Emergency Tree Services",
"Tree & Shrub Health Care",
"Land & Lot Clearing Services",
]
},
"securitycameras-copy":{
label:"Security Cameras Service",
options:[
"Wireless Security Camera Systems",
"CCTV & Surveillance Camera Systems",
"Smart Home Security Camera Systems",
"Video Doorbell Camera Installation",
"Night Vision Security Camera Systems",
"Remote Video Monitoring Systems",
]
},
"appliance-repair-copy":{
label:"Appliance Repair Service",
options:[
"Dishwasher",
"Refrigerator",
"Oven & Cooktop",
"Microwave Oven",
"Washing Machine",
"Dryer",
]
},
"carpentry-framing-copy":{
label:"Carpentry Framing Service",
options:[
"New Construction & Structural Framing",
"Wall, Basement & Interior Framing",
"Roof & Attic Framing",
"Decks & Outdoor Framing",
"Doors & Windows",
"Framing Repairs",
]
},
"insulation-copy":{
label:"Insulation Service",
options:[
"Attic Insulation",
"Wall Insulation",
"Basement/Crawl Space",
"Rim Joist",
"Vapour Barrier Installation",
"Insulation Removal/Replacement",
]
},
"drywall-copy":{
label:"Drywall Service",
options:[
"Drywall Installation",
"Drywall Repair",
"Drywall Finishing & Taping",
"Drywall Texture Services",
"Ceiling Drywall Services",
"Drywall Replacement",
]
},
"dryrot":{
label:"Dryrot Service",
options:[
"Exterior Siding",
"Decking",
"Flooring",
"Walls",
"Window/Door Frame",
"Basement/Crawl Space",
]
},
"weldcutmetalstructure-copy":{
label:"Metal Fabrication Service",
options:[
"Metal Fabrication",
"Welding Services",
"Structural Fabrication",
"CNC Cutting",
"Repair & Modification",
"Custom Outdoor Fabrication",
]
},
"sheds-copy":{
label:"Sheds Service",
options:[
"Storage Shed",
"Garden Shed",
"Workshop Shed",
"Utility Shed",
"Backyard Shed",
"Custom Shed",
]
},
"pool-copy":{
label:"Pool Service",
options:[
"Pool Installation",
"Pool Cleaning & Maintenance",
"Pool Repair Services",
"Pool Renovation & Upgrades",
"Pool Safety & Accessories",
"Equipment & System Services",
]
},
"mirrorinstall":{
label:"Mirror Install Service",
options:[
"Mirror Installation",
"Repair & Resilvering ",
"Mirror Replacement",
"LED/Backlit Mirror",
"Frameless Mirrors",
"Decorative & Antique",
"Wall to Wall Mirror",
"Custom Mirrors",
"Bathroom/Vanity Mirror",
]
},
"glassrepair":{
label:"Glass Repair Service",
options:[
"Shower doors",
"Sliding glass doors",
"Glass railings",
"Glass wall partitions",
"Glass table tops",
"Kitchen backsplash glass",
]
},
"cleaning":{
label:"Cleaning Service",
options:[
"House Cleaning",
"Deep Cleaning",
"Move-In & Move-Out",
"Carpet/Rug/Upholstery",
"Floor & Surface",
"Kitchen & Appliances",
"Bathroom",
"Window & Glass",
"Post Construction",
]
},
"concrete":{
label:"concrete Service",
options:[
"Driveways Installation",
"Concrete Crack Repairs",
"Patio Installation",
"Stamped Concrete ",
"Concrete Resurfacing",
"Foundation Repair",
]
},
"stonepolish":{
label:"concrete Service",
options:[
"Stone Polishing",
"Floor Restoration",
"Stone Repair Services",
"Cleaning & Maintenance",
"Kitchen & Bathroom Stone",
"Outdoor Stone Services",
]
},
"masonary":{
label:"Masonary Service",
options:[
"Brick Masonry",
"Stone Masonry",
"Concrete Block Masonry",
"Chimney Masonry",
"Foundation Masonry",
"Hardscape Masonry",
"Masonry Waterproofing",
"Decorative Masonry",
"Masonry Restoration",
]
},
"stonemasonary":{
label:"Stone Masonary Service",
options:[
"Retaining Walls",
"Driveway",
"Stone Siding",
"Hardscaping",
"Fireplace & Chimney",
"Stone Restoration",
]
},
"brickwork":{
label:"Brickwork Service",
options:[
"Retaining Walls",
"Driveway",
"Brick Siding",
"Hardscaping",
"Fireplace & Chimney",
"Brickwork Restoration",
]
},
"ventilation":{
label:"Ventilation Service",
options:[
"Whole-House Ventilation Installation",
"Ductwork",
"Indoor Air Quality",
"Exhaust Fan Installation & Repair",
"ERV & HRV Installation",
"Ventilation Repair & Tune-Ups"
]
},
"heating-services":{
label:"Heating Services",
options:[
"Furnace Repair & Installation",
"Boiler Repair & Installation",
"Heat Pump Heating Services",
"Heating System Maintenance & Tune-Ups",
"Emergency Heating Repair",
"Thermostat Installation & Repair",
]
},
"air-conditioning":{
label:"AC Services",
options:[
"AC Installation",
"AC Maintenance",
"Central AC Installation",
"Filter Replacement",
"Ductless Installation in AC",
"Thermostat Repair",
]
},
};
$(document).ready(function(){

const path = window.location.pathname.toLowerCase();

let page = "home";
const sortedKeys = Object.keys(SERVICES).sort((a, b) => b.length - a.length);

for (const key of sortedKeys) {

    const pattern = new RegExp("(^|\\/|-)" + key + "(\\/|-|$)");

    if (pattern.test(path)) {
        page = key;
        break;
    }
}

$(".leadForm").each(function(){

const form=$(this);

if(SERVICES[page]){

const data=SERVICES[page];

form.find(".serviceLabel").text(data.label);

const select=form.find(".service");

select.empty();

select.append('<option value="" disabled selected>Select any one</option>');

data.options.forEach(function(option){

select.append(`<option value="${option}">${option}</option>`);

});

}

});

});


// phone format
$(document).on("input",".phoneNumber",function(){

let digits=this.value.replace(/\D/g,"").substring(0,10);

if(digits.length>=6)
this.value=`(${digits.slice(0,3)}) ${digits.slice(3,6)}-${digits.slice(6)}`;
else if(digits.length>=3)
this.value=`(${digits.slice(0,3)}) ${digits.slice(3)}`;
else
this.value=digits;

});


// submit
$(document).on("submit",".leadForm",function(e){

e.preventDefault();

const form=$(this);

// button loading state
const submitBtn = form.find(".btn-submit");
const originalText = submitBtn.text();

submitBtn.prop("disabled", true).text("Submitting...");


form.find(".is-invalid").removeClass("is-invalid");
form.find(".invalid-feedback").text("");

const name=form.find(".name");
const phone=form.find(".phoneNumber");
const email=form.find(".email");
const zip=form.find(".zipcode");
const service=form.find(".service");
const consent=form.find(".consent");

let valid=true;

function showError(el,msg){
el.addClass("is-invalid");
el.next(".invalid-feedback").text(msg);
}

if(!name.val().trim()){ showError(name,"Enter full name"); valid=false; }

if(!phone.val().match(/^\(\d{3}\) \d{3}-\d{4}$/)){ showError(phone,"Enter valid phone"); valid=false; }

if(!email.val().match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)){ showError(email,"Enter valid email"); valid=false; }

if(!zip.val().match(/^\d{5}$/)){ showError(zip,"Enter valid zip"); valid=false; }

if(!service.val()){ showError(service,"Select service"); valid=false; }

if(!consent.is(":checked")){ showError(consent,"Consent required"); valid=false; }

if(!valid){
submitBtn.prop("disabled", false).text(originalText);
return;
}
const cleanPhone=phone.val().replace(/\D/g,"");
phone.val(cleanPhone);

const fullName=name.val().trim();
const parts=fullName.split(" ");
const firstName=parts.shift();
const lastName=parts.join(" ");

let formData=form.serialize();

formData+="&firstName="+encodeURIComponent(firstName);
formData+="&lastName="+encodeURIComponent(lastName);

const usn = encodeURIComponent(service.val());

$.ajax({

url:"https://call.toppermarketing.com/store_entry.php?Key=67cf8963-b9d1-45bb-a580-b7b52937ee87&category=contact",
type:"POST",
data:formData,
dataType:"json",
timeout:15000,

success:function(){

    // 🔥 Send log to your server
 // ✅ send log and WAIT before redirect
fetch("https://easyhomeservice.com/log-short-form.php", {
    method: "POST",
    headers: {
        "Content-Type": "application/x-www-form-urlencoded"
    },
    body: formData
})
.then(res => res.json())
.then(data => {
    console.log("LOG SUCCESS:", data);
})
.catch(err => {
    console.error("LOG ERROR:", err);
})
.finally(() => {
    window.location.href = "/thank-you?usn=" + usn;
});
},
error:function(){
    window.location.href = "/thank-you?usn=" + usn;
}

});});

</script>
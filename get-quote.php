<?php 
// ==========================================
// ⚙️ MASTER OTP TOGGLE (PHP & JS)
// Set to true to enable OTP, false to disable
// ==========================================
$ENABLE_OTP = false;

include ('step-header-copy.php'); 
?>
<link rel="stylesheet" href="/css/new-forms.css">

<style>
.mapboxgl-ctrl-geocoder--suggestion {
    position: relative;
    padding-left: 32px !important;
}

.mapboxgl-ctrl-geocoder--suggestion-title {
    color: black!important;
}
.mapboxgl-ctrl-geocoder--suggestion::before {
    content: "\f3e7";
    font-family: "bootstrap-icons";
    position: absolute;
    left: 0px;
    top: 50%;
    transform: translateY(-50%);
    color: #22c55e;
    font-size: 18px;
}
</style>

<div class="quiz-sec">
<div class="container-fluid p-0">
<div class="contnt-sec">

<form id="myform" class="service-form">

<div class="question_box step">

<div class="heading-area">
<p class="step-hdng1" id="question-title"></p>
<p class="step-hdng2" id="question-subtitle"></p>
</div>

<div class="options-scroll options" id="question-options"></div>

</div>

</form>

<div class="quiz-footer">
<div class="container-fluid text-center">
<div class="row">
<div class="form-width">

<div class="step-description" style="display:none;">
<div class="desc-box">
<span class="desc-icon">✨</span>
<textarea name="description" placeholder="Tell us in your own words..."></textarea>
</div>
</div>

<div class="quiz-btn-group">
<a href="javascript:void(0)" class="prev-btn">Back</a>
<a href="javascript:void(0)" class="next-btn-global">Next</a>
</div>

<p class="security-text">
<img src="images/lock.png" class="btn_lock">
Your information is 100% secure & confidential.
</p>

</div>
</div>
</div>
</div>

</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
// ===== SYSTEM TOGGLES - CONFIGURE HERE =====
const ENABLE_OTP = <?php echo isset($ENABLE_OTP) && $ENABLE_OTP ? 'true' : 'false'; ?>;
window.requestStarted = false;
const ENABLE_MAPBOX = true;
// const ENABLE_EMAIL_VERIFY = true;
const ENABLE_EMAIL_VERIFY = false; // Bypassed email verification as requested

if(ENABLE_MAPBOX) {
    const mapboxGLScript = document.createElement('script');
    mapboxGLScript.src = 'https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js';
    document.head.appendChild(mapboxGLScript);

    const geocoderScript = document.createElement('script');
    geocoderScript.src = 'https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js';
    document.head.appendChild(geocoderScript);

    const mapboxCSSLink = document.createElement('link');
    mapboxCSSLink.rel = 'stylesheet';
    mapboxCSSLink.href = 'https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css';
    document.head.appendChild(mapboxCSSLink);

    const geocoderCSSLink = document.createElement('link');
    geocoderCSSLink.rel = 'stylesheet';
    geocoderCSSLink.href = 'https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css';
    document.head.appendChild(geocoderCSSLink);
}

// COOKIE HELPERS
function setCookie(name, value, days = 30) {
  const d = new Date();
  d.setTime(d.getTime() + days * 86400000);
  document.cookie = `${name}=${encodeURIComponent(value)};expires=${d.toUTCString()};path=/`;
}

function getCookie(name) {
  const match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
  return match ? decodeURIComponent(match[2]) : null;
}
</script>

<script>
const formFlows = {
    hvac: {
        service: {
            question: "What System Do You Need Help With?",
            subtitle: "Select the system or service you need assistance with. This helps us match you with qualified HVAC professionals in your area.",
            type: "radio",
            options: [
                { label: "Heating Systems", value: "Heating Systems", next: "service_heating" },
                { label: "Air Conditioning & Cooling", value: "Air Conditioning & Cooling", next: "service_cooling" },
                { label: "Ductwork & Ventilation", value: "Ductwork & Ventilation", next: "service_ductwork" },
                { label: "Indoor Air Quality", value: "Indoor Air Quality", next: "indoor_air_quality" },
                { label: "Inspections & Maintenance", value: "Inspections & Maintenance", next: "inspections_maintenance" }
            ]
        },
        service_heating: {
            question: "What Type of Service Do You Need?",
            subtitle: "This will help us match you with the contractor specialised in that service.",
            type: "radio",
            options: [
                { label: "Installation", value: "Installation", next: "system_heating" },
                { label: "Repair", value: "Repair", next: "system_heating" },
                { label: "Replacement", value: "Replacement", next: "system_heating" }
            ]
        },
        service_cooling: {
            question: "What Type of Service Do You Need?",
            subtitle: "This will help us match you with the contractor specialised in that service.",
            type: "radio",
            options: [
                { label: "Installation", value: "Installation", next: "system_cooling" },
                { label: "Repair", value: "Repair", next: "system_cooling" },
                { label: "Replacement", value: "Replacement", next: "system_cooling" }
            ]
        },
        service_ductwork: {
            question: "What Type of Service Do You Need?",
            subtitle: "This will help us match you with the contractor specialised in that service.",
            type: "radio",
            options: [
                { label: "Installation", value: "Installation", next: "system_ductwork" },
                { label: "Repair", value: "Repair", next: "system_ductwork" },
                { label: "Replacement", value: "Replacement", next: "system_ductwork" }
            ]
        },
        system_heating: {
            question: "Heating Systems",
            subtitle: "Choose the heating system that needs repair, replacement, or maintenance.",
            type: "radio",
            showDescription: true,
            options: [
                { label: "Furnace", value: "Furnace", next: "timeframe" },
                { label: "Boiler & Radiator Systems", value: "Boiler & Radiator Systems", next: "timeframe" },
                { label: "Central Heating Systems", value: "Central Heating Systems", next: "timeframe" },
                { label: "Wall Heaters", value: "Wall Heaters", next: "timeframe" },
                { label: "Heat Pump", value: "Heat Pump", next: "timeframe" },
                { label: "Thermostats & Heating Controls", value: "Thermostats & Heating Controls", next: "timeframe" },
                { label: "Smart Thermostat", value: "Smart Thermostat", next: "timeframe" }
            ]
        },
        system_cooling: {
            question: "Air Conditioning & Cooling",
            subtitle: "Let us know your cooling system so we can connect you with the right technician.",
            type: "radio",
            showDescription: true,
            options: [
                { label: "Central AC", value: "Central AC", next: "timeframe" },
                { label: "Ductless Mini-Split Systems", value: "Ductless Mini-Split Systems", next: "timeframe" },
                { label: "Swamp Cooler", value: "Swamp Cooler", next: "timeframe" },
                { label: "Outdoor Mist Cooling Systems", value: "Outdoor Mist Cooling Systems", next: "timeframe" }
            ]
        },
        system_ductwork: {
            question: "Ductwork & Ventilation",
            subtitle: "Select the ductwork or ventilation service you need to improve your home's comfort and airflow.",
            type: "radio",
            showDescription: true,
            options: [
                { label: "Duct Cleaning & Sealing", value: "Duct Cleaning & Sealing", next: "timeframe" },
                { label: "Ductwork", value: "Ductwork", next: "timeframe" },
                { label: "Vents & Airflow Issues", value: "Vents & Airflow Issues", next: "timeframe" }
            ]
        },
        indoor_air_quality: {
            question: "Indoor Air Quality",
            subtitle: "Choose solutions designed to improve the air you breathe indoors.",
            type: "radio",
            showDescription: true,
            options: [
                { label: "Air Quality Testing", value: "Air Quality Testing", next: "timeframe" },
                { label: "Whole-Home Humidifier", value: "Whole-Home Humidifier", next: "timeframe" },
                { label: "Whole-Home Dehumidifier", value: "Whole-Home Dehumidifier", next: "timeframe" },
                { label: "Whole-Home Air Purifier", value: "Whole-Home Air Purifier", next: "timeframe" },
                { label: "UV Air Purification Systems", value: "UV Air Purification Systems", next: "timeframe" },
                { label: "Duct Cleaning & Sealing", value: "Duct Cleaning & Sealing", next: "timeframe" }
            ]
        },
        inspections_maintenance: {
            question: "Inspections & Maintenance",
            subtitle: "Select the inspection or maintenance service you need for your HVAC system.",
            type: "radio",
            showDescription: true,
            options: [
                { label: "Emergency HVAC Service", value: "Emergency HVAC Service", next: "timeframe" },
                { label: "HVAC Inspection", value: "HVAC Inspection", next: "timeframe" }
            ]
        },
    },

    roofing: {
        service: {
            question:"What does your roof need today?",
            subtitle:"We will connect you with local roofing professionals who handle that exact type of project.",
            type:"radio",
            next:"sub_service",
            options:[
                {label:"New Installation",value:"New Installation"},
                {label:"Repair existing roof",value:"Repair existing roof"},
                {label:"Replace roof completely",value:"Replace roof completely"},
                {label:"Roof coating Sealant",value:"Roof coating Sealant"}
            ]
        },
        sub_service: {
            question:"Choose your roofing material",
            subtitle:"Select your preferred material, or choose the closest option. If you are unsure, contractors can recommend the best choice for your home and climate.",
            type:"radio",
            next: "timeframe",   
            options:[
                {label:"Asphalt Roofing",value:"Asphalt Roofing"},
                {label:"Metal Roofing",value:"Metal Roofing"},
                {label:"Tile Roofing",value:"Tile Roofing"},
                {label:"Flat/Foam/Single/Ply Roofing",value:"Flat/Foam/Single/Ply Roofing"},
                {label:"Wood Shake or Composite",value:"Wood Shake or Composite"},
                {label:"Natural Slate",value:"Natural Slate"},
                {label:"Other",value:"Other"}
            ]
        },
    },

    homewarranty: {
        service: {
            question:"Which essentials would you like protected?",
            subtitle:"Select the systems or appliances you want covered. This helps us match you with reliable home warranty providers.",
            type:"radio",
            next:"timeframe",
            options:[
                {label:"Heating, Cooling & Ventilation Systems",value:"Heating, Cooling & Ventilation Systems"},
                {label:"Plumbing & Water Systems",value:"Plumbing & Water Systems"},
                {label:"Electrical Systems",value:"Electrical Systems"},
                {label:"Kitchen Appliances",value:"Kitchen Appliances"},
                {label:"Laundry & Utility Appliances",value:"Laundry & Utility Appliances"},
                {label:"Speciality Coverage",value:"Speciality Coverage"},
            ]
        },
    },

    solar: {
        service: {
            question:"Choose your solar service",
            subtitle:"This will help us match you with the contractor specialised in that service.",
            type:"radio",
            next:"sub_service",
            options:[
                {label:"New Solar Installation",value:"New Solar Installation"},
                {label:"Solar Repair",value:"Solar Repair"},
                {label:"Solar Upgrade / Battery",value:"Solar Upgrade / Battery"},
                {label:"Solar Inspection",value:"Solar Inspection"}
            ]
        },
        sub_service: {
            question:"Tell us about your roof type",
            subtitle:"Roof type helps contractors assess installation requirements, mounting systems, and estimated project costs.",
            type:"radio",
            next: "electricity_bill",   
            options:[
                {label:"Asphalt Shingle Roof",value:"Asphalt Shingle Roof"},
                {label:"Metal Roof",value:"Metal Roof"},
                {label:"Tile Roof",value:"Tile Roof"},
                {label:"Natural Slate Roof",value:"Natural Slate Roof"},
                {label:"Flat Roof",value:"Flat Roof"},
            ]
        },
        electricity_bill: {
            question:"How high is your electric bill?",
            subtitle:"Your average bill helps determine the right system size and potential savings from solar energy.",
            type:"radio",
            next: "timeframe",   
            options:[
                {label:"Under $150",value:"Under $150"},
                {label:"$150–$300",value:"$150–$300"},
                {label:"$300+",value:"$300+"},
                {label:"Not Sure",value:"Not Sure"},
            ]
        },
    },
 
    window: {
        service: {
            question:"How can we help with your windows?",
            subtitle:"Select the service you need so we can match you with experienced window specialists for repair, replacement, or upgrades.",
            type:"radio",
            next:"sub_service",
            options:[
                {label:"Window Replacement",value:"Window Replacement"},
                {label:"New Window Installation",value:"New Window Installation"},
                {label:"Window Repair",value:"Window Repair"},
                {label:"Energy-Efficient Window Upgrade",value:"Energy-Efficient Window Upgrade"}
            ]
        },
        sub_service: {
            question:"How many windows are we working on?",
            subtitle:"This helps contractors estimate project scope, materials, and provide accurate pricing.",
            type:"radio",
            next: "timeframe",   
            options:[
                {label:"1–2 Windows",value:"1–2 Windows"},
                {label:"3–5 Windows",value:"3–5 Windows"},
                {label:"6-10 Windows",value:"6-10 Windows"},
                {label:"10+ Windows",value:"10+ Windows"},
            ]
        },
    },

    flooring: {
        service: {
            question:"How can we help with your floors?",
            subtitle:"Choose the service you need so we can connect you with experienced flooring specialists for installation, repair, replacement, or refinishing.",
            type:"radio",
            next:"sub_service",
            options:[
                {label:"New Installation",value:"New Installation"},
                {label:"Floor Replacement",value:"Floor Replacement"},
                {label:"Floor Repair",value:"Floor Repair"},
                {label:"Floor Refinishing",value:"Floor Refinishing"}
            ]
        },
        sub_service: {
            question:"Select the flooring for your project",
            subtitle:"Let us know the material type to match you with contractors who specialize in that specific flooring system.",
            type:"radio",
            next: "material_status",   
            options:[
                {label:"Hardwood Flooring",value:"Hardwood Flooring"},
                {label:"Tile Flooring",value:"Tile Flooring"},
                {label:"Vinyl Flooring",value:"Vinyl Flooring"},
                {label:"Carpet Flooring",value:"Carpet Flooring"},
                {label:"Laminate Flooring",value:"Laminate Flooring"},
                {label:"Stone Flooring",value:"Stone Flooring"},
            ]
        },
        material_status: {
            question:"Have you already purchased the flooring materials for this project?",
            subtitle:"This helps professionals understand project readiness, timeline, and whether materials need to be sourced for you.",
            type:"radio",
            next: "timeframe",   
            options:[
                {label:"Yes",value:"Yes"},
                {label:"No",value:"No"},
            ]
        },
    },

    kitchen: {
        service: {
            question: "Which kitchen makeover are you planning?",
            subtitle:"Choose the type of renovation you are considering so we can match you with experienced kitchen remodeling professionals",
            type: "radio",
            options: [
                { label: "Full Kitchen Remodel", value: "Full Kitchen Remodel", next: "structure_status" },
                { label: "Partial Kitchen Renovation", value: "Partial Kitchen Renovation", next: "structure_status" },
                { label: "Specialized Services", value: "Specialized Services", next: "specialized_type" },
                { label: "Custom Kitchen Design", value: "Custom Kitchen Design", next: "structure_status" }
            ]
        },
        specialized_type: {
            question: "What type of specialized service do you need?",
            type: "radio",
            next: "structure_status",   
            options: [
                { label: "Cabinet Upgrades", value: "Cabinet Upgrades" },
                { label: "Countertop/Backsplash Replacement", value: "Countertop/Backsplash Replacement" },
                { label: "Flooring Upgrades", value: "Flooring Upgrades" },
                { label: "Plumbing/Electrical Upgrades", value: "Plumbing/Electrical Upgrades" },
                { label: "Appliance Upgrades", value: "Appliance Upgrades" }
            ]
        },
        structure_status: {
            question: "Do you plan to change the structure or layout of your kitchen?",
            subtitle:"Let us know your timeline so we can match you with available window specialists in your area.",
            type: "radio",
            next: "timeframe",
            options: [
                { label: "Yes", value: "Yes" },
                { label: "No", value: "No" },
                { label: "Not Sure", value: "Not Sure" }
            ]
        }
    },
    
    painting: {
        service: {
            question: "What Type of Service Do You Need?",
            type: "radio",
            options: [
                { label: "Interior Painting", value: "Interior Painting", next:"sub_service_interior_painting" },
                { label: "Exterior Painting", value: "Exterior Painting", next:"sub_service_exterior_painting" },
                { label: "Cabinet & Trim Painting", value: "Cabinet & Trim Painting", next:"sub_service_cabinet_and_trim_painting" },
                { label: "Protective Coatings & Surface Preparation", value: "Protective Coatings & Surface Preparation", next:"sub_service_protective_coatings_and_surface_preparation" },
                { label: "Specialty & Decorative Finishes", value: "Specialty & Decorative Finishes", next:"sub_service_specialty_and_decorative_finishes" },
                { label: "Ceiling & Textured Services", value: "Ceiling & Textured Services", next:"sub_service_ceiling_and_textured_services" }
            ]
        },
        sub_service_interior_painting: {
            question: "What's Getting a Fresh New Look?",
            type: "checkbox",
            next: "timeframe",
            options: [
                { label: "Interior wall painting", value: "Interior wall painting"},
                { label: "Room painting (bedrooms, living rooms, kitchens)", value: "Room painting (bedrooms, living rooms, kitchens)"},
                { label: "Hallways & stairways", value: "Hallways & stairways"},
                { label: "Baseboards", value: "Baseboards"},
                { label: "Crown molding", value: "Crown molding"},
                { label: "Interior trim", value: "Interior trim"},
                { label: "Doors & window frames (interior)", value: "Doors & window frames (interior)"},
                { label: "Hard-to-reach interior areas", value: "Hard-to-reach interior areas"}
            ]
        },
        sub_service_exterior_painting: {
            question: "What's Getting a Fresh New Look?",
            type: "checkbox",
            next: "timeframe",
            options: [
                { label: "Full house exterior painting", value: "Full house exterior painting"},
                { label: "Exterior trim & fascia", value: "Exterior trim & fascia"},
                { label: "Doors & window frames (exterior)", value: "Doors & window frames (exterior)"},
                { label: "Balconies", value: "Balconies"},
                { label: "Deck painting", value: "Deck painting"},
                { label: "Wood & metal railings", value: "Wood & metal railings"},
                { label: "Wrought iron fences & gates", value: "Wrought iron fences & gates"}
            ]
        },
        sub_service_cabinet_and_trim_painting: {
            question: "What's Getting a Fresh New Look?",
            type: "checkbox",
            next: "timeframe",
            options: [
                { label: "Kitchen cabinet painting", value: "Kitchen cabinet painting" },
                { label: "Bathroom vanity painting", value: "Bathroom vanity painting" },
                { label: "Built-in cabinet refinishing", value: "Built-in cabinet refinishing" },
                { label: "Interior trim refinishing", value: "Interior trim refinishing" },
                { label: "Molding refinishing", value: "Molding refinishing" }
            ]
        },
        sub_service_protective_coatings_and_surface_preparation: {
            question: "Which Surface Solution Best Fits Your Project?",
            type: "checkbox",
            next: "timeframe",
            options: [
                { label: "Power Washing", value: "Power Washing" },
                { label: "Pressure Washing", value: "Pressure Washing" },
                { label: "Surface cleaning before painting", value: "Surface cleaning before painting" },
                { label: "Paint surface preparation", value: "Paint surface preparation" },
                { label: "Minor surface maintenance", value: "Minor surface maintenance" },
                { label: "Sealants and Caulking", value: "Sealants and Caulking" },
                { label: "Waterproofing Services", value: "Waterproofing Services" }
            ]
        }, 
        sub_service_specialty_and_decorative_finishes: {
            question: "What Kind of Finish Do You Have in Mind?",
            type: "checkbox",
            next: "timeframe",
            options: [
                { label: "Faux finishes", value: "Faux finishes" },
                { label: "Accent walls", value: "Accent walls" },
                { label: "Wallpaper installation", value: "Wallpaper installation" },
                { label: "Color consulting", value: "Color consulting" },
                { label: "Concrete Coating", value: "Concrete Coating" }
            ]
        },
        sub_service_ceiling_and_textured_services: {
            question: "Which Ceiling Service Can We Help With?",
            type: "checkbox",
            next: "timeframe",
            options: [
               { label: "Ceiling painting", value: "Ceiling painting" },
               { label: "Popcorn ceiling removal", value: "Popcorn ceiling removal" },
               { label: "Ceiling refinishing", value: "Ceiling refinishing" }
            ]
        },
    },
    
    waterdamage: {
        service: {
            question: "Where have you noticed water damage?",
            subtitle:"Select all affected areas so we can connect you with restoration specialists equipped to handle the full scope of damage.",
            type: "checkbox",
            next: "sub_service",
            options: [
                { label: "Walls or Windows", value: "Walls or Windows" },
                { label: "Ceiling or Roofing", value: "Ceiling or Roofing" },
                { label: "Flooring", value: "Flooring" },
                { label: "Attic space", value: "Attic space" },
                { label: "Basement or Crawl Space", value: "Basement or Crawl Space" },
                { label: "Plumbing Areas", value: "Plumbing Areas" },
                { label: "Home Exterior or Foundation", value: "Home Exterior or Foundation" }
            ]
        },
        sub_service: {
            question: "What signs of water damage do you see?",
            subtitle:"Identifying visible signs helps professionals assess severity and prepare the right tools and remediation plan.",
            type: "checkbox",
            next: "timeframe",
            options: [
                { label: "Damp or Wet Surface", value: "Damp or Wet Surface" },
                { label: "Stains or Decoloration", value: "Stains or Decoloration" },
                { label: "Rotting, Buckling or Peeling Surfaces", value: "Rotting, Buckling or Peeling Surfaces" },
                { label: "Odor", value: "Odor" },
                { label: "Other", value: "Other" }
            ]
        },
    },
    
    bathroom: {
        service: {
            question: "What are you planning for your Bathroom?",
            subtitle:"Choose the type of renovation you're considering so we can match you with experienced bathroom remodeling professionals who specialize in your specific project scope.",
            type: "radio",
            options: [
                { label: "Full-scale Remodel", value: "Full-scale Remodel", next: "timeframe" },
                { label: "Partial Remodel", value: "Partial Remodel", next: "timeframe" },
                { label: "Bath Fixtures Replacement", value: "Bath Fixtures Replacement", next: "sub_service_bath_fixtures_replacement" },
                { label: "Surfaces & Finishes", value: "Surfaces & Finishes", next: "sub_service_surfaces_and_finishes" }
            ]
        },
        sub_service_bath_fixtures_replacement: {
            question: "What type of specialized service do you need?",
            type: "checkbox",
            next: "timeframe",  
            options: [
                { label: "Bathtub/Walk-in tub", value: "Bathtub/Walk-in tub"},
                { label: "Shower/Walk-in shower", value: "Shower/Walk-in shower"},
                { label: "Sink", value: "Sink"},
                { label: "Toilet", value: "Toilet"},
                { label: "Vanity/Cabinetry", value: "Vanity/Cabinetry"},
                { label: "Window/Door", value: "Window/Door"},
                { label: "Accessories", value: "Accessories"}
            ]
        },
        sub_service_surfaces_and_finishes: {
            question: "Do you plan to change the structure or layout of your kitchen?",
            subtitle:"Let us know your timeline so we can match you with available window specialists in your area.",
            type: "radio",
            next: "timeframe",
            options: [
                { label: "Flooring Upgrades", value: "Flooring Upgrades"},
                { label: "Wall Improvements", value: "Wall Improvements"}
            ]
        }
    },
};

// ===== MAPBOX TOKEN INITIALIZATION =====
const MAPBOX_TOKEN = 'pk.eyJ1IjoicHJha2FzaHZlbGxrbyIsImEiOiJjbWdxZTRsYnowMTkzMmxxcWJkOGM0dzQyIn0.PGn5ZGq5BAqFDMdpNnVWbw';
if(ENABLE_MAPBOX && typeof mapboxgl !== 'undefined') {
    mapboxgl.accessToken = MAPBOX_TOKEN;
}

const commonSteps = {
    timeframe:{
        question:"How Urgent Is Your Request?",
        subtitle:"Let us know your timeline so we can prioritize your request.",
        type:"radio",
        options:[
            {label:"Emergency (24–48 hours)",value:"Emergency",next:"authorisation"},
            {label:"Within 1 week",value:"Week",next:"authorisation"},
            {label:"Flexible",value:"Flexible",next:"authorisation"}
        ]
    },
    authorisation:{
        question:"Property Authorisation Status",
        subtitle:"We just need to confirm that work can be approved at this property. This helps avoid delays during scheduling.",
        type:"radio",
        options:[
            {label:"I Am the Homeowner",value:"Homeowner",next:"address"},
            {label:"Authorised to Approve Work",value:"Authorised",next:"address"},
            {label:"I Need Approval",value:"Approval",next:"address"}
        ]
    },
    address:{
        question:"Where Is the Service Needed?",
        subtitle:"Start typing your address and select from the dropdown",
        type:"address",
        next:"contact"
    },
    contact:{
        question:"Who Should Receive the Project Details?",
        subtitle:"Provide your contact information so local professionals can reach you with quotes and scheduling options.",
        type:"input",
        html:`
        <input type="text" id="fname" name="fname" class="text-card" placeholder="First Name" required>
        <input type="text" id="lname" name="lname" class="text-card" placeholder="Last Name" required>
        <input type="email" id="email" name="email" class="text-card" placeholder="Email Address" required>
        <div id="email-error" class="error-msg"></div>
        `,
        next:"phone"
    },
    phone:{
        question:"Enter your phone number to get verified quotes",
        subtitle: ENABLE_OTP ? "We'll send you a verification code" : "Provide your phone number so we can contact you",
        type:"phone",
        next:"loader"
    },
    loader:{
        question:"Processing your request",
        subtitle:"Please wait while we match you with the best service providers",
        type:"loader"
    }
};

function detectCategoryFromURL() {
    const params = new URLSearchParams(window.location.search);
    const category = params.get("c") || params.get("category");
    return category ? category.toLowerCase() : "hvac";
}
const selectedCategory = detectCategoryFromURL();
const steps = {
    ...formFlows[selectedCategory],
    ...commonSteps
};

// State Management Functions
function getStorageKey() {
    return 'form_state_' + selectedCategory;
}

function saveState(isPush = false) {
    const state = {
        current: current,
        history: history_steps,
        formData: formData
    };
    sessionStorage.setItem(getStorageKey(), JSON.stringify(state));
    
    if(formData["address"]) setCookie("saved_address", formData["address"], 30);
    if(formData["city"]) setCookie("saved_city", formData["city"], 30);
    if(formData["state"]) setCookie("saved_state", formData["state"], 30);
    if(formData["zipcode"]) setCookie("saved_zipcode", formData["zipcode"], 30);
    if(formData["fname"]) setCookie("saved_fname", formData["fname"], 30);
    if(formData["lname"]) setCookie("saved_lname", formData["lname"], 30);
    if(formData["email"]) setCookie("saved_email", formData["email"], 30);
    if(formData["email_verified_at"]) setCookie("saved_email_verified_at", formData["email_verified_at"], 30);
    if(formData["phone"]) setCookie("saved_phone", formData["phone"], 30);
    setCookie("form_data_" + selectedCategory, JSON.stringify(formData), 30);

    if (isPush) {
        window.history.pushState(state, "", "");
    } else {
        window.history.replaceState(state, "", "");
    }
}

function updateCurrentState() {
    saveState(false);
}

function loadState() {
    const saved = sessionStorage.getItem(getStorageKey());
    let state = saved ? JSON.parse(saved) : null;
    
    if(!state){
        const cookieData = getCookie("form_data_" + selectedCategory);
        if(cookieData){
             state = {
                current: "service",
                history: [],
                formData: JSON.parse(cookieData)
            };
        }
    }

    if (state) {
        current = state.current;
        history_steps = state.history || [];
        formData = state.formData || {};
        
        if(getCookie("saved_address")) formData["address"] = getCookie("saved_address");
        if(getCookie("saved_city")) formData["city"] = getCookie("saved_city");
        if(getCookie("saved_state")) formData["state"] = getCookie("saved_state");
        if(getCookie("saved_zipcode")) formData["zipcode"] = getCookie("saved_zipcode");
        if(getCookie("saved_fname")) formData["fname"] = getCookie("saved_fname");
        if(getCookie("saved_lname")) formData["lname"] = getCookie("saved_lname");
        if(getCookie("saved_email")) formData["email"] = getCookie("saved_email");
        if(getCookie("saved_email_verified_at")) formData["email_verified_at"] = getCookie("saved_email_verified_at");
        if(getCookie("saved_phone")) formData["phone"] = getCookie("saved_phone");

        return true;
    }
    return false;
}

let current="service";
let history_steps=[];
let geocoder = null;
let formData = {};
// Get ZIP code from the URL (supports 'zip' or 'zipcode')
const urlParams = new URLSearchParams(window.location.search);
const urlZip = urlParams.get("zip") || urlParams.get("zipcode");

if (!sessionStorage.getItem(getStorageKey())) {
    window.history.replaceState({ current, history: history_steps, formData }, "", "");
} else {
    loadState();
    current = "service";
    history_steps = [];
}

// Accept only a valid 5-digit ZIP code from URL and ensure it autofills
function lookupCityStateFromZip(zip) {
    if (!zip || !/^\d{5}$/.test(zip)) return;
    $.ajax({
        url: 'https://api.zippopotam.us/us/' + encodeURIComponent(zip),
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            if (data && data.places && data.places.length > 0) {
                const place = data.places[0];
                const city = place['place name'] || '';
                const state = place['state abbreviation'] || '';
                if (city) {
                    formData['city'] = city;
                    setCookie("saved_city", city, 30);
                    if ($('#city').length && !$('#city').val()) $('#city').val(city);
                }
                if (state) {
                    formData['state'] = state;
                    setCookie("saved_state", state, 30);
                    if ($('#state').length && !$('#state').val()) $('#state').val(state);
                }
                updateCurrentState();
            }
        }
    });
}

if (urlZip && /^\d{5}$/.test(urlZip)) {
    formData["zipcode"] = urlZip;
    setCookie("saved_zipcode", urlZip, 30);
    lookupCityStateFromZip(urlZip);
}

$(document).on('input', '#zipcode', function() {
    const zipVal = $(this).val().trim();
    formData["zipcode"] = zipVal;
    if (/^\d{5}$/.test(zipVal)) {
        lookupCityStateFromZip(zipVal);
    }
});

window.onpopstate = function(event) {
    if (event.state) {
        current = event.state.current;
        history_steps = event.state.history || [];
        renderStep(current);
        updateCurrentState();
    }
};

renderStep(current);

function renderStep(id){
    const step=steps[id];
    $("#question-title").text(step.question);
    $("#question-subtitle").text(step.subtitle || "");

    let html="";

    if(step.type==="radio" || step.type==="checkbox"){
        html+=`<div class="options-scroll options">`;
        step.options.forEach((opt, index)=>{
            let isChecked = false;
            if(step.type === "radio") {
                if(formData[id]){
                    isChecked = Array.isArray(formData[id]) 
                        ? formData[id].includes(opt.value) 
                        : formData[id] === opt.value;
                } 
                else if(index === 0){
                    isChecked = true;
                    formData[id] = opt.value;
                }
            }
            html+=`
            <div class="${step.type}-card option-card">
            <label class="custom-${step.type}">
            <input type="${step.type}" name="${id}" value="${opt.value}" 
            ${isChecked ? "checked" : ""}
            ${opt.next ? `data-next="${opt.next}"` : ''}>
            <span class="${step.type}-mark"></span>
            <span class="${step.type}-text">${opt.label}</span>
            </label>
            </div>
            `;
        });
        html+=`</div>`;
        html+=`<div id="radio-error" class="error-msg" style="display:none;"></div>`;
    }

    if(step.type==="address"){
        if(ENABLE_MAPBOX) {
            html=`
            <div id="geocoder-container"></div>
            <input type="hidden" id="address" name="address" value="${formData['address'] || ''}">
            <input type="text" id="city" name="city" class="text-card" placeholder="City" value="${formData['city'] || ''}">
            <input type="text" id="state" name="state" class="text-card" placeholder="State" value="${formData['state'] || ''}">
            <input type="text" id="zipcode" name="zipcode" class="text-card" placeholder="ZIP Code" maxlength="5" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 5);" value="${formData['zipcode'] || ''}" required>
            <div id="address-error" class="error-msg" style="display:none;"></div>
            `;
        } else {
            html=`
            <input type="text" id="address" name="address" class="text-card" placeholder="Street Address" value="${formData['address'] || ''}" required>
            <input type="text" id="city" name="city" class="text-card" placeholder="City" value="${formData['city'] || ''}">
            <input type="text" id="state" name="state" class="text-card" placeholder="State (e.g., CA)" value="${formData['state'] || ''}">
            <input type="text" id="zipcode" name="zipcode" class="text-card" placeholder="ZIP Code" maxlength="5" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 5);" value="${formData['zipcode'] || ''}" required>
            <div id="address-error" class="error-msg" style="display:none;"></div>
            `;
        }
    }

    if(step.type==="input"){
        html=step.html;
    }

    if(step.type==="phone"){
        if(ENABLE_OTP) {
            html=`
            <div class="options-scroll options" id="question-options">
            <div class="d-flex">
            <input type="text" id="phone" name="phone" class="text-card" placeholder="Enter Phone Number" 
                   oninput="this.value = this.value.replace(/[^0-9]/g, '');" inputmode="numeric" placeholder="(123) 456-7890" maxlength="14">
            <a id="send-otp" class="send-otp otp_common_btn" href="javascript:void(0)">Verify</a>
            </div>
            <div id="phone-error" class="error-msg"></div>

            <div id="otp-inline" style="display:none;">
            <input type="text" id="otp-code" class="text-card" placeholder="Enter 6-Digit Code" maxlength="6" 
                   inputmode="numeric" autocomplete="one-time-code" style="letter-spacing: 0px; text-align: center; font-size: 15px; font-weight: 500;">
            <a id="new-verify-otp" class="send-otp otp_common_btn" href="javascript:void(0)">Verify Code</a>
            <div id="otp-error" class="error-msg"></div>
            </div>

            <span class="phone-survey">Phone number is solely used for secure verification and appointments.</span>

            <div class="term-check">
            <div class="consent-line">
            <input type="checkbox" name="terms" id="phoneterms">
            <label for="phoneterms">
                By clicking "Agree and Submit", I agree to the <a href="javascript:void(0);" onclick="openNewWindow('privacy.php','modal');">Privacy Policy</a>,<a href="javascript:void(0);" onclick="openNewWindow('tcpa.php','modal');">TCPA</a> and <a href="javascript:void(0);" onclick="openNewWindow('terms.php','modal');">Terms and Conditions.</a> I also consent to receive marketing communications through email and other texts or calls from easyhomeservice.com and/or its <a href="javascript:void(0);" onclick="openNewWindow('marketing-partner.php','modal');">marketing partners</a> about Home Service by any means or technology, including an automatic dialing system, to the phone number I have previously provided, even if that number is on a national or state Do-Not-Call registry . Carrier and data rates may apply. I understand that my consent to such calls and text messages is not required to purchase products from or use the services of <a href="javascript:void(0);" onclick="openNewWindow('marketing-partner.php','modal');">marketing partners.</a>
            </label>
            </div>
            <div id="terms-error" class="error-msg" role="alert"></div>
            </div>

            <input type="hidden" id="otp-verified" name="otp_verified" value="0">
            <input type="hidden" id="phone-e164" name="phone_e164" value="">
            </div>
            `;
        } else {
            html=`
            <div class="options-scroll options" id="question-options">
            <input type="text" id="phone" name="phone" class="text-card" placeholder="Enter Phone Number" 
                   oninput="this.value = this.value.replace(/[^0-9]/g, '');" inputmode="numeric" placeholder="(123) 456-7890" maxlength="14">
            <div id="phone-error" class="error-msg"></div>

            <span class="phone-survey">Phone number is solely used for secure verification and appointments.</span>

            <div class="term-check">
            <div class="consent-line">
            <input type="checkbox" name="terms" id="phoneterms">
            <label for="phoneterms">
                By clicking "Agree and Submit", I agree to the <a href="javascript:void(0);" onclick="openNewWindow('privacy.php','modal');">Privacy Policy</a>,<a href="javascript:void(0);" onclick="openNewWindow('tcpa.php','modal');">TCPA</a> and <a href="javascript:void(0);" onclick="openNewWindow('terms.php','modal');">Terms and Conditions.</a> I also consent to receive marketing communications through email and other texts or calls from easyhomeservice.com and/or its <a href="javascript:void(0);" onclick="openNewWindow('marketing-partner.php','modal');">marketing partners</a> about Home Service by any means or technology, including an automatic dialing system, to the phone number I have previously provided, even if that number is on a national or state Do-Not-Call registry . Carrier and data rates may apply. I understand that my consent to such calls and text messages is not required to purchase products from or use the services of <a href="javascript:void(0);" onclick="openNewWindow('marketing-partner.php','modal');">marketing partners.</a>
            </label>
            </div>
            <div id="terms-error" class="error-msg" role="alert"></div>
            </div>

            <input type="hidden" id="otp-verified" name="otp_verified" value="1">
            </div>
            `;
        }
    }

    if(step.type==="loader"){
        html=`
        <div class="loader-box text-center">
        <p>Processing your request...</p>
            <div class="loader_box">
                <img src="images/loader.gif" class="loader-img" width="282" height="28" alt="loader">
                <ul class="loader_list">
                    <li>
                        <h3 class="load1" style="display:none;">Submitting your responses</h3>
                        <p class="load2" style="display:none;"><img src="images/check.png" width="34" height="34" alt="check">Submitted</p>
                    </li>
                    <li>
                        <h3 class="load3" style="display:none;">Reviewing your responses</h3>
                        <p class="load4" style="display:none;"><img src="images/check.png" width="34" height="34" alt="check">Reviewed </p>
                    </li>
                    <li>
                        <h3 class="load5" style="display:none;">Looking for certified contractors in your area </h3>
                        <p class="load6" style="display:none;"><img src="images/check.png" width="34" height="34" alt="check">Locksmith contractors found </p>
                    </li>
                </ul>
            </div>
        </div>
        `;
        setTimeout(function(){
            formData["category"] = selectedCategory;
            
            // collect dynamically injected hidden fields
            $('#hiddenfields input').each(function () {
                if (this.name && this.value) {
                    formData[this.name] = this.value;
                }
            });

            let queryString = Object.keys(formData)
            .map(key => {
                let value = formData[key];
                if(Array.isArray(value)){
                    return value.map(v => `${encodeURIComponent(key)}[]=${encodeURIComponent(v)}`).join("&");
                } else {
                    return `${encodeURIComponent(key)}=${encodeURIComponent(value)}`;
                }
            })
            .join("&");

            $.ajax({
                type: "GET",
                url: "https://easyhomeservice.com/send.php",
                data: queryString,
                success: function(response){
                    console.log("Response:", response);
                    console.log("Data Sent:", formData);
                    runThankYouFlow();
                },
                error: function(error){
                    console.log("Error:", error);
                    runThankYouFlow();
                }
            });
        }, 1500);
    }

    $("#question-options").html(html);

    $("#question-options input, #question-options textarea").each(function(){
        const name = $(this).attr("name") || $(this).attr("id");
        if(name && formData[name] !== undefined){
            if(!$(this).is(":checkbox") && !$(this).is(":radio")){
                $(this).val(formData[name]);
                if($(this).attr('id') === 'email' || $(this).attr('id') === 'phone'){
                    $(this).trigger('input');
                }
            }
        }
    });

    if(formData["description"]){
        $("textarea[name='description']").val(formData["description"]);
    }

    if(ENABLE_OTP && id === "phone" && formData["otp_verified"] === "1"){
        setTimeout(function(){
            $('#phone, #send-otp').hide();
            $('#question-title').text('Your phone number is verified');
            $('#question-subtitle').text('You can now proceed to submit');
            if(!$('#otp-success-img').length){
                 $('<img>', {
                    src: 'https://easyhomeservice.com/images/yes.png',
                    alt: 'Success',
                    id: 'otp-success-img',
                    css: { display: 'inline', marginBottom: '10px', opacity: 1, transform: 'scale(1)' }
                }).insertBefore('#phone-error');
            }
            $('#phone-error').addClass('success-msg').show().text('✅ Phone verified successfully!');
        }, 10);
    }

    if(step.showDescription){
        $(".step-description").show();
    } else {
        $(".step-description").hide();
    }

    if(id === "phone"){
        $(".next-btn-global").text("Submit");
    } else {
        $(".next-btn-global").text("Next");
    }

    if(id === "service"){
        $(".prev-btn").hide();
        $(".next-btn-global").css("width", "100%");
    } else {
        $(".prev-btn").show();
        $(".next-btn-global").css("width", "");
    }

    // Ensure Next button is enabled and clickable on every step
    $(".next-btn-global").prop('disabled', false).css({'opacity': '1', 'pointer-events': 'auto', 'cursor': 'pointer'});

    if(step.type==="address" && ENABLE_MAPBOX){
        setTimeout(initMapboxGeocoder, 100);
    }

    if(step.type==="input" && $("#email").length){
        setTimeout(initEmailValidation, 100);
    }
}

function initMapboxGeocoder(){
    if(!ENABLE_MAPBOX) return;
    if(geocoder) geocoder = null;

    geocoder = new MapboxGeocoder({
        accessToken: MAPBOX_TOKEN,
        types: 'address,place,postcode',
        countries: 'us',
        placeholder: 'Start typing your address...',
        autocomplete: true,
        minLength: 1,
        limit: 5,
        marker: false
    });

    geocoder.addTo('#geocoder-container');

    setTimeout(function(){
        $('.mapboxgl-ctrl-geocoder--input').addClass('text-card');
        if(formData["address"]){
            $('.mapboxgl-ctrl-geocoder--input').val(formData["address"]);
            $('#address').val(formData["address"]);
        }
        if(formData["city"] && $('#city').length && !$('#city').val()){
            $('#city').val(formData["city"]);
        }
        if(formData["state"] && $('#state').length && !$('#state').val()){
            $('#state').val(formData["state"]);
        }
        if(formData["zipcode"] && $('#zipcode').length && !$('#zipcode').val()){
            $('#zipcode').val(formData["zipcode"]);
        }
    },100);

    // Sync typed text in geocoder input directly to #address and formData so selecting from dropdown is not mandatory
    $(document).off('input', '.mapboxgl-ctrl-geocoder--input').on('input', '.mapboxgl-ctrl-geocoder--input', function() {
        const typedVal = $(this).val();
        $('#address').val(typedVal);
        formData["address"] = typedVal;
    });

    $(document).off('click', '.mapboxgl-ctrl-geocoder--button').on('click', '.mapboxgl-ctrl-geocoder--button', function() {
        $('#address').val('');
        formData["address"] = '';
    });

    geocoder.on('result', function(e){
        const place = e.result;
        const context = place.context || [];

        let city = '';
        let state = '';
        let zipcode = '';

        const placeContext = context.find(c => c.id.startsWith('place.'));
        if(placeContext) city = placeContext.text;

        const regionContext = context.find(c => c.id.startsWith('region.'));
        if(regionContext){
            state = regionContext.short_code 
                ? regionContext.short_code.replace('US-','') 
                : regionContext.text;
        }

        const postcodeContext = context.find(c => c.id.startsWith('postcode.'));
        if(postcodeContext){
            zipcode = postcodeContext.text;
        }

        if(!zipcode && place.properties && place.properties.postcode){
            zipcode = place.properties.postcode;
        }

        if(!zipcode){
            const match = place.place_name.match(/\b\d{5}(-\d{4})?\b/);
            if(match) zipcode = match[0];
        }

        // Keep existing/URL zipcode if Mapbox did not return one
        if(!zipcode && (formData["zipcode"] || $("#zipcode").val())){
            zipcode = formData["zipcode"] || $("#zipcode").val();
        }

        $("#address").val(place.place_name);
        if(city) $("#city").val(city);
        if(state) $("#state").val(state);
        if(zipcode) $("#zipcode").val(zipcode);

        formData["address"] = place.place_name;
        if(city) formData["city"] = city;
        if(state) formData["state"] = state;
        if(zipcode) formData["zipcode"] = zipcode;
        updateCurrentState();
    });
}

// function initEmailValidation(){
//     let emailTimer;
//     let lastCheckedEmail = '';
//     let isEmailValid = false;
//     const $email = $('#email');
//     const $error = $('#email-error');
//     const $nextBtn = $('.next-btn-global');

//     // Ensure Next button is enabled and visible
//     $nextBtn.prop('disabled', false).css({'opacity': '1', 'pointer-events': 'auto', 'cursor': 'pointer'});

//     if(ENABLE_EMAIL_VERIFY) {
//         const currentEmail = $email.val().trim();
//         if(currentEmail && formData["email_verified_at"] === currentEmail){
//             isEmailValid = true;
//             $nextBtn.prop('disabled', false).css('opacity', '1');
//             $error.addClass('success-msg').show().text('✓ Email is Verified!');
//             setTimeout(() => $error.fadeOut(500), 1500);
//         } else {
//             $nextBtn.prop('disabled', true).css('opacity', '0.6');
//         }
//     }

//     $email.on('input', function() {
//         clearTimeout(emailTimer);
//         const email = $(this).val().trim();
//         $error.text('').removeClass('error-msg success-msg').hide();
//         isEmailValid = false;

//         if(ENABLE_EMAIL_VERIFY) {
//             $nextBtn.prop('disabled', true).css('opacity', '0.6');
//         }

//         if (email === '') {
//             $error.text('');
//             return;
//         }

//         if (email.includes('@') && email.match(/\.[a-z]{2,}$/i)) {
//             /*
//             // Bypassed external API verification as requested:
//             if(ENABLE_EMAIL_VERIFY) {
//                 emailTimer = setTimeout(() => {
//                     checkEmailValidity(email);
//                 }, 800);
//             } else {
//             */
//                 isEmailValid = true;
//                 $nextBtn.prop('disabled', false).css('opacity', '1');
//                 $error.addClass('success-msg').show().text('✓ Email format valid');
//                 setTimeout(() => $error.fadeOut(500), 1500);
//             /*
//             }
//             */
//         }
//     });

//     /*
//     // Bypassed external email validation API call as requested (code preserved):
//     function checkEmailValidity(email) {
//         const simpleEmailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

//         if (!simpleEmailPattern.test(email)) {
//             $error.addClass('error-msg').show().text('Please enter a valid email format.');
//             return;
//         }

//         $error.show().text('Checking email validity...');
//         lastCheckedEmail = email;

//         $.ajax({
//             url: 'https://easyhomeservice.com/check-email.php',
//             type: 'GET',
//             dataType: 'json',
//             data: { email: email },
//             success: function(response) {
//                 if (response && response.success === false && 
//                     typeof response.message === 'string' && 
//                     response.message.includes('insufficient credits')) {
//                     $error.text('').hide();
//                     isEmailValid = true;
//                     $('.next-btn-global').prop('disabled', false).css('opacity', '1');
//                     return;
//                 }

//                 if (!response || response.success === false) {
//                     $error.addClass('error-msg').show().text('Unable to verify email. Please try again.');
//                     return;
//                 }

//                 if (response.valid === false || response.disposable === true || 
//                     response.recent_abuse === true || 
//                     (response.spam_trap_score && response.spam_trap_score > 0.5)) {
//                     $error.addClass('error-msg').show().text('Please enter a valid, non-temporary email address.');
//                 } else {
//                     $error.addClass('success-msg').show().text('✓ Email is Verified!');
//                     isEmailValid = true;
//                     formData["email_verified_at"] = email;
//                     updateCurrentState();
//                     $('.next-btn-global').prop('disabled', false).css('opacity', '1');
//                     setTimeout(() => $error.fadeOut(500), 1500);
//                 }
//             },
//             error: function() {
//                 $error.addClass('error-msg').show().text('Network error while verifying email.');
//             }
//         });
//     }
//     */
// }

function initEmailValidation() {
    const $email = $('#email');
    const $error = $('#email-error');
    const $nextBtn = $('.next-btn-global');

    // Email verification is disabled.
    // Keep the Next button enabled.
    $nextBtn.prop('disabled', false).css({
        'opacity': '1',
        'pointer-events': 'auto',
        'cursor': 'pointer'
    });

    // Clear any previous verification messages.
    $error.removeClass('error-msg success-msg')
          .text('')
          .hide();
}

function showError(message, containerId = 'radio-error'){
    const $errorContainer = $('#' + containerId);
    $errorContainer.text(message).show();
    setTimeout(() => {
        $errorContainer.fadeOut(500, function(){ $(this).text(''); });
    }, 3000);
}

// NEXT BUTTON HANDLER
$(".next-btn-global").click(function(){
    let step=steps[current];
    let next=null;
    let desc = $("textarea[name='description']").val();
    if(desc){
        formData["description"] = desc;
    }
    $('.error-msg').hide().text('');

    if(step.type==="radio" || step.type==="checkbox"){
        let checked = $(`input[name="${current}"]:checked`);

        if(!checked.length){
            showError("Please select at least one option", "radio-error");
            return;
        }

        if(step.type==="radio"){
            formData[current] = checked.val();
        } else {
            let values = [];
            checked.each(function(){
                values.push($(this).val());
            });
            formData[current] = values;
        }

        let optionNext = checked.first().data("next");
        if(optionNext && optionNext !== "undefined"){
            next = optionNext;
        } else {
            next = step.next;
        }
    }

    if(step.type==="address"){
        let geocoderVal = $('.mapboxgl-ctrl-geocoder--input').length ? $('.mapboxgl-ctrl-geocoder--input').val().trim() : '';
        let addr = geocoderVal || ($("#address").val() ? $("#address").val().trim() : '') || (formData["address"] ? formData["address"].trim() : '');
        $("#address").val(addr);

        let city = $("#city").val() ? $("#city").val().trim() : (formData["city"] ? formData["city"].trim() : '');
        let state = $("#state").val() ? $("#state").val().trim() : (formData["state"] ? formData["state"].trim() : '');
        const zip = $("#zipcode").val() ? $("#zipcode").val().trim() : (formData["zipcode"] ? formData["zipcode"].trim() : '');

        if(!addr || !zip){
            $('#address-error').text('Please fill all address fields').show();
            if(!addr) {
                if(ENABLE_MAPBOX && $('.mapboxgl-ctrl-geocoder--input').length) {
                    $('.mapboxgl-ctrl-geocoder--input').focus();
                } else {
                    $("#address").focus();
                }
            } else {
                $("#zipcode").focus();
            }
            return;
        }

        formData["address"] = addr;
        formData["city"] = city;
        formData["state"] = state;
        formData["zipcode"] = zip;
        next=step.next;
    }

    if(step.type==="input"){
        let valid=true;
        let firstInvalid = null;

        $("#question-options input[type=text], #question-options input[type=email]").each(function(){
            if($(this).val().trim()===""){
                valid=false;
                $(this).css('border-color', '#e53e3e');
                if(!firstInvalid) firstInvalid = $(this);
            } else {
                $(this).css('border-color', '');
            }
        });

        if(!valid){
            $('#email-error').addClass('error-msg').show().text('Please fill all required fields');
            if(firstInvalid) firstInvalid.focus();
            return;
        }
        
const email = $('#email').val().trim();
const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

if (!emailPattern.test(email)) {
    $('#email-error')
        .addClass('error-msg')
        .text('Please enter a valid email address.')
        .show();

    $('#email').focus();
    return;
}


        /*
        // Bypassed external email verification as requested:
        if(ENABLE_EMAIL_VERIFY) {
            const $nextBtn = $('.next-btn-global');
            if($nextBtn.prop('disabled')){
                $('#email-error').addClass('error-msg').show().text('Please wait for email verification to complete');
                return;
            }
        }
        */

        $("#question-options input").each(function(){
            formData[$(this).attr("name")] = $(this).val();
        });
        next=step.next;
    }

    if(step.type==="phone"){
        const phoneVal = $("#phone").val().replace(/\D/g, "");
        if(phoneVal.length < 10){
            $('#phone-error').addClass('error-msg').show().text('Please enter a valid 10-digit phone number');
            $("#phone").focus();
            return;
        }

        formData["phone"] = $("#phone").val();

        if(!$("#phoneterms").is(':checked')){
            $("#terms-error").text('Please agree to the terms and conditions to continue.').show();
            $('#phoneterms').focus();
            return;
        }

        if(!ENABLE_OTP){
            formData["otp_verified"] = "1";
            next=step.next;
        } else {
            if($("#otp-verified").val() !== "1"){
                if(!window.requestStarted){
                    $('#phone-error').addClass('error-msg').show().text('Please verify your phone number by clicking "Verify"');
                } else {
                    $('#otp-error').addClass('error-msg').show().text('Please enter and verify the OTP code sent to your phone');
                    $('#otp-code').focus();
                }
                return;
            }
            next=step.next;
        }
    }

    if(next){
        updateCurrentState();
        history_steps.push(current);
        current=next;
        saveState(true);
        renderStep(current);
        $('html,body').animate({scrollTop:0},200);
    }
});

// BACK BUTTON HANDLER
$(".prev-btn").click(function(){
    if(history_steps.length){
        window.history.back();
    }
});

// AUTO-SAVE ON ANY INPUT CHANGE
$(document).on("input change", "#myform input, #myform textarea, .step-description textarea", function(){
    const name = $(this).attr("name") || $(this).attr("id");
    if(!name) return;

    if($(this).is(":checkbox")){
        let values = [];
        $(`input[name="${name}"]:checked`).each(function(){
            values.push($(this).val());
        });
        formData[name] = values;
    } else if($(this).is(":radio")){
        if($(this).is(":checked")) formData[name] = $(this).val();
    } else {
        formData[name] = $(this).val();
    }
    updateCurrentState();
});

$(document).on("click", ".option-card", function(e){
    if($(e.target).is("input")) return;
    let input = $(this).find("input");
    let type = input.attr("type");
    let name = input.attr("name");

    if(type === "radio"){
        $(`input[name="${name}"]`).prop("checked", false);
        input.prop("checked", true);
    }
});

$(document).on('focus', '.text-card', function(){
    $(this).css('border-color', '');
});

$(document).on("input", "#phone", function () {
    let input = $(this).val().replace(/\D/g, "");
    if (input.length > 10) input = input.substring(0, 10);
    let formatted = "";
    if (input.length > 0) {
        formatted = "(" + input.substring(0, 3);
    }
    if (input.length >= 4) {
        formatted += ") " + input.substring(3, 6);
    }
    if (input.length >= 7) {
        formatted += "-" + input.substring(6, 10);
    }
    $(this).val(formatted);
});
</script>

<!-- OTP SCRIPT -->
<script>
if(ENABLE_OTP) {
    const VERIFY_API = '/verify-api.php';
    const VERIFY_BRAND = 'EasyHomeService';
    const CLIENT_OTP_TTL = 60;
    const RESEND_GRACE_MS = 3000;

    function e164ify(raw){
        let s = (raw || '').replace(/[^\d+]/g,'');
        if (!s) return '';
        if (s.startsWith('+')) return s;
        if (/^\d{10}$/.test(s)) return '+1' + s;
        return '+' + s;
    }

    function maskLast4Only(ph){
        const digits = (ph || '').replace(/\D/g,'');
        const last4 = digits.slice(-4);
        return '********' + last4;
    }

    function setBtnState($btn, isBusy){
        if (isBusy){ $btn.addClass('disabled').attr('aria-busy','true'); }
        else { $btn.removeClass('disabled').removeAttr('aria-busy'); }
    }

    function setMsg($el, text, type){
        $el.removeClass('success-msg error-msg');
        if (type === 'success') $el.addClass('success-msg');
        if (type === 'error') $el.addClass('error-msg');
        $el.text(text || '').show();
    }

    function setMsgHTML($el, html, type){
        $el.removeClass('success-msg error-msg');
        if (type === 'success') $el.addClass('success-msg');
        if (type === 'error') $el.addClass('error-msg');
        $el.html(html || '').show();
    }

    function ensureResendSpan() {
        let $pe = $('#phone-error');
        let $resend = $('#resend-otp');
        if (!$resend.length) {
            $resend = $('<span/>', {
                id: 'resend-otp',
                text: 'Resend Code',
                style: 'display:none; cursor:pointer; text-decoration:underline; margin-left:6px;',
                role: 'button',
                tabindex: 0
            }).appendTo($pe);
        }
        return $resend;
    }

    let countdownTimer = null;
    let lastPhoneE164 = '';

    function fmtMMSS(totalSeconds){
        const s = Math.max(0, totalSeconds|0);
        const mm = String(Math.floor(s / 60)).padStart(2,'0');
        const ss = String(s % 60).padStart(2,'0');
        return `${mm}:${ss}`;
    }

    function updateHeadingsForOtp(phoneE164){
        $('#question-title').text('Please enter OTP to verify your account');
        $('#question-subtitle').text('A One-Time Password has been sent to ' + maskLast4Only(phoneE164));
    }

    function updateSentMessage(secondsLeft){
        const msg = `Valid for ${fmtMMSS(secondsLeft)} `;
        setMsgHTML($('#phone-error'), msg, 'success');
        ensureResendSpan().appendTo($('#phone-error'));
    }

    function clearCountdown(){
        if (countdownTimer){ clearInterval(countdownTimer); countdownTimer = null; }
    }

    function startCountdown(phoneE164){
        clearCountdown();
        let remaining = CLIENT_OTP_TTL;
        updateHeadingsForOtp(phoneE164);
        updateSentMessage(remaining);
        ensureResendSpan().hide();

        countdownTimer = setInterval(function(){
            remaining--;
            if (remaining >= 0){
                updateSentMessage(remaining);
            }
            if (remaining <= 0){
                clearCountdown();
                setTimeout(() => { ensureResendSpan().show(); }, RESEND_GRACE_MS);
            }
        }, 1000);
    }

    function ajaxStart(phoneE164){
        ensureResendSpan().hide();
        setMsg($('#otp-error'), '', '');
        $.ajax({
            type: 'POST',
            url: VERIFY_API,
            data: { action: 'start', phone: phoneE164, brand: VERIFY_BRAND },
            success: function(res){
                if (res && res.ok){
                    window.requestStarted = true;
                    $('#otp-code').val('');
                    startCountdown(phoneE164);
                    $('#phone, #send-otp').hide();
                    $('#otp-inline').show();
                    $('#otp-code').focus();
                } else {
                    setMsg($('#phone-error'), 'Could not send OTP. Please try again.', 'error');
                    ensureResendSpan().show();
                }
            },
            error: function(){
                setMsg($('#phone-error'), 'Something went wrong. Please try again.', 'error');
                ensureResendSpan().show();
            }
        });
    }

    function triggerResend(){
        if (!lastPhoneE164) return;
        $('#otp-code').val('');
        setMsg($('#otp-error'), '', '');
        $.ajax({
            type: 'POST',
            url: VERIFY_API,
            data: { action: 'cancel', phone: lastPhoneE164 },
            complete: function(){
                setTimeout(() => ajaxStart(lastPhoneE164), 500);
            }
        });
    }

    $(document).on('click', '#send-otp', function(){
        const $btn = $(this);
        const raw = $('#phone').val();
        const ph = e164ify(raw);

        setMsg($('#phone-error'), '', '');
        setMsg($('#otp-error'), '', '');
        ensureResendSpan().hide();

        if (!ph || ph.replace(/\D/g,'').length < 10){
            setMsg($('#phone-error'), 'Please enter a valid 10-digit phone number.', 'error');
            $('#phone').focus();
            return;
        }

        $('#phone-e164').val(ph);
        lastPhoneE164 = ph;
        setBtnState($btn, true);

        $.ajax({
            type: 'POST',
            url: VERIFY_API,
            data: { action: 'start', phone: ph, brand: VERIFY_BRAND },
            success: function(res){
                if (res && res.ok){
                    window.requestStarted = true;
                    $('#otp-code').val('');
                    startCountdown(ph);
                    $('#phone, #send-otp').hide();
                    $('#otp-inline').show();
                    $('#otp-code').focus();
                } else {
                    setMsg($('#phone-error'), 'Could not send OTP. Please try again.', 'error');
                    ensureResendSpan().show();
                }
            },
            error: function(){
                setMsg($('#phone-error'), 'Something went wrong. Please try again.', 'error');
                ensureResendSpan().show();
            },
            complete: function(){ setBtnState($btn, false); }
        });
    });

    $(document).on('click', '#resend-otp', triggerResend);

    $(document).on('click', '#new-verify-otp', function(){
        const $btn = $(this);
        const code = ($('#otp-code').val() || '').trim();

        setMsg($('#otp-error'), '', '');
        if (!window.requestStarted){
            setMsg($('#otp-error'), 'Please send OTP first.', 'error');
            return;
        }
        if (!/^\d{4,8}$/.test(code)){
            setMsg($('#otp-error'), 'Please enter the 6-digit OTP code.', 'error');
            $('#otp-code').focus();
            return;
        }

        setBtnState($btn, true);

        $.ajax({
            type: 'POST',
            url: VERIFY_API,
            data: { action: 'check', code: code },
            success: function(res){
                if (res && res.ok){
                    $('#otp-verified').val('1');
                    setMsg($('#otp-error'), '', '');
                    setMsg($('#phone-error'), '✅ Phone verified successfully!', 'success');

                    $('#otp-code, #new-verify-otp').hide();
                    $('<img>', {
                        src: 'https://easyhomeservice.com/images/yes.png',
                        alt: 'Success',
                        id: 'otp-success-img',
                        css: {
                            display: 'inline',
                            marginBottom: '10px',
                            opacity: 0,
                            transform: 'scale(0)',
                            transition: 'all 0.4s ease-in-out'
                        }
                    }).insertBefore('#phone-error');
                    setTimeout(function () {
                        $('#otp-success-img').css({ opacity: 1, transform: 'scale(1)' });
                    }, 100);

                    clearCountdown();
                    ensureResendSpan().hide();
                    window.__otpVerified = true;

                    $('#question-title').text('Your phone number is verified');
                    $('#question-subtitle').text('You can now proceed to submit');
                } else {
                    $('#otp-verified').val('0');
                    if (res && (res.status === '16' || res.code === 'code_mismatch')) {
                        setMsg($('#otp-error'), 'Incorrect code. Please enter the latest OTP we sent.', 'error');
                    } else {
                        setMsg($('#otp-error'), 'Verification failed. Please check the code and try again.', 'error');
                    }
                    $('#otp-code').focus();
                }
            },
            error: function(){
                setMsg($('#otp-error'), 'Something went wrong. Please try again.', 'error');
            },
            complete: function(){ setBtnState($btn, false); }
        });
    });

    $(document).on('keypress', '#otp-code', function(ev){
        if (ev.which === 13){ $('#new-verify-otp').trigger('click'); }
    });

    $(document).on('change', '#phoneterms', function(){
        if($(this).is(':checked')){
            $('#terms-error').hide().text('');
        }
    });
}
</script>

<!-- ====================================================== -->
<!-- 🔥 AAPKI EXACT SCRIPT (WITH FULL MULTI-STEP SUPPORT) -->
<!-- ====================================================== -->
<script>
$(document).ready(function() {
    var form = $('#myform, .leadForm');
    if (form.length) {
        if ($('#hiddenfields').length) return; // Prevent duplicate

        var hiddenFieldsDiv = $('<div id="hiddenfields"></div>');
        hiddenFieldsDiv.append('<input type="hidden" name="ipAddress" value="<?php echo htmlspecialchars($_SERVER['REMOTE_ADDR'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">');
        var currentURL = window.location.href.split('?')[0];
        var modifiedURL = currentURL.replace("-f", "");
        hiddenFieldsDiv.append('<input type="hidden" name="formURL" value="' + modifiedURL + '">');
        hiddenFieldsDiv.append('<input type="hidden" name="source" value="<?php echo htmlspecialchars($_GET['source'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">');
        hiddenFieldsDiv.append('<input type="hidden" name="xxTrustedFormCertUrl">');
        hiddenFieldsDiv.append('<input id="leadid_token" name="universal_leadid" type="hidden">');
        hiddenFieldsDiv.append('<input type="hidden" name="xxCertUrl">');
        hiddenFieldsDiv.append('<input type="hidden" name="clickid" value="<?php echo htmlspecialchars($_GET['clickid'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">');
        hiddenFieldsDiv.append('<input type="hidden" name="tcpaConsent" value="YES">');
        hiddenFieldsDiv.append('<input type="hidden" name="tcpaConsentLanguage" value="Agree and Submit, I agree to the Privacy Policy and Terms and Conditions. I also consent to receive marketing communications through email and other texts or calls from EasyHomeServe and/or its marketing partners about residential solar power and panels by any means or technology, including an automatic dialing system, to the phone number I have previously provided, even if that number is on a national or state Do-Not-Call registry. Carrier and data rates may apply. I understand that my consent to such calls and text messages is not required to purchase products from or use the services of EasyHomeServe and/or its marketing partners">');
        hiddenFieldsDiv.append('<input type="hidden" name="eventid" value="<?php echo htmlspecialchars($_GET['eventid'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">');
        hiddenFieldsDiv.append('<input type="hidden" name="utm_content" value="<?php echo htmlspecialchars($_GET['utm_content'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">');
        hiddenFieldsDiv.append('<input type="hidden" name="utm_term" value="<?php echo htmlspecialchars($_GET['utm_term'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">');
        hiddenFieldsDiv.append('<input type="hidden" name="utm_campaign" value="<?php echo htmlspecialchars($_GET['utm_campaign'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">');
        hiddenFieldsDiv.append('<input type="hidden" name="utm_medium" value="<?php echo htmlspecialchars($_GET['utm_medium'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">');
        hiddenFieldsDiv.append('<input type="hidden" name="utm_source" value="<?php echo htmlspecialchars($_GET['utm_source'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">');
        hiddenFieldsDiv.append('<input type="hidden" name="fbc" value="<?php echo htmlspecialchars($_GET['fbc'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">');
        hiddenFieldsDiv.append('<input type="hidden" name="fbp" value="<?php echo htmlspecialchars($_GET['fbp'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">');
        hiddenFieldsDiv.append('<input type="hidden" name="gclid" value="<?php echo htmlspecialchars($_GET['gclid'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">');
        
        var externalRef = sessionStorage.getItem('external_referrer') || '';
        hiddenFieldsDiv.append('<input type="hidden" name="http_referrer" value="' + externalRef + '">');
        
        var phoneInput = form.find('#zipcode, .zipcode');
        if (phoneInput.length) {
            phoneInput.after(hiddenFieldsDiv);
        } else {
            // Multi-step form hone ki wajah se form me direct append karein taaki fields pehle se active rahein
            form.append(hiddenFieldsDiv);
        }
    }
});
</script>

<div id="app_common_modal">
    <div class="app_modal_body">
        <span id="app_common_modal_close">×</span>
        <iframe src=""></iframe>
    </div>
</div>

<script>
function openNewWindow(url, type) {
    if(type === 'modal') {
        const modal = document.getElementById('app_common_modal');
        const iframe = modal.querySelector('iframe');
        iframe.src = url;
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';
    }
}

function closeModal() {
    const modal = document.getElementById('app_common_modal');
    const iframe = modal.querySelector('iframe');
    modal.style.display = 'none';
    iframe.src = '';
    document.body.style.overflow = '';
}

document.getElementById('app_common_modal_close').onclick = closeModal;
document.getElementById('app_common_modal').onclick = function(e) {
    if(e.target.id === 'app_common_modal') {
        closeModal();
    }
};
</script>

<script type="text/javascript">
function runThankYouFlow() {
    setTimeout(function () { $('.load1').show(); }, 500);
    setTimeout(function () { $('.load2').show(); }, 1000);
    setTimeout(function () { $('.load3').show(); }, 2000);
    setTimeout(function () { $('.load4').show(); }, 2500);
    setTimeout(function () { $('.load5').show(); }, 3000);
    setTimeout(function () {
        $('.load6').show();
        setTimeout(function () {
            window.location.href = typeof getThankYouUrl === 'function' ? getThankYouUrl() : 'thank-you.php';
        }, 1300);
    }, 3500);
}
</script>

<?php include 'promise.php' ?>
<?php include 'footer.php' ?>

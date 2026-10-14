<?php include ('step-header-copy.php'); ?>
<link rel="stylesheet" href="/css/new-forms.css">
<!--<link href='https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css' rel='stylesheet' />-->

<div class="quiz-sec">
<div class="container-fluid">
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
<script src='https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js'></script>
<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js'></script>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css' type='text/css' />

<script>
// ===== MAPBOX CONFIG =====
const MAPBOX_TOKEN = 'pk.eyJ1IjoicHJha2FzaHZlbGxrbyIsImEiOiJjbWdxZTRsYnowMTkzMmxxcWJkOGM0dzQyIn0.PGn5ZGq5BAqFDMdpNnVWbw';
mapboxgl.accessToken = MAPBOX_TOKEN;

const formFlows = {

    hvac: {
        service:{
        question:"What Type of Service Do You Need?",
        subtitle:"This will help us match you with the contractor specialised in that service.",
        type:"radio",
        showDescription:true, 
        options:[
        {label:"Installation",value:"Installation",next:"sub_service_install"},
        {label:"Repair",value:"Repair",next:"sub_service_repair"},
        {label:"Replacement",value:"Replacement",next:"sub_service_replacement"}
        ]
        },
sub_service_install:{
question:"What System Do You Need Help With?",
subtitle:"Select the system or service you need assistance with. This helps us match you with qualified HVAC professionals in your area.",
type:"radio",
options:[
{label:"Heating Systems",value:"Heating Systems",next:"system_heating_systems"},
{label:"Cooling",value:"Cooling",next:"system_cooling"},
{label:"Indoor Air Quality",value:"Indoor Air Quality",next:"system_indoor_air_quality"},
{label:"Water Heating",value:"Water Heating",next:"system_water_heating"},
{label:"Service",value:"Service",next:"system_install_service"},
]
},
        system_heating_systems:{
        question:"What type of HVAC service do you need?",
        subtitle:"Start typing your address and select from the dropdown",
        type:"radio",
        options:[
        {label:"Furnace",value:"Furnace",next:"timeframe"},
        {label:"Boiler & Radiator Systems",value:"Boiler & Radiator Systems",next:"timeframe"},
        {label:"Central Heating Systems",value:"Central Heating Systems",next:"timeframe"},
        {label:"Wall Heaters",value:"Wall Heaters",next:"timeframe"},
        {label:"Heat Pump",value:"Heat Pump",next:"timeframe"},
        {label:"Thermostats & Heating Controls",value:"Thermostats & Heating Controls",next:"timeframe"},
        {label:"Smart Thermostat",value:"Smart Thermostat",next:"timeframe"},
        ]
        },
        system_cooling:{
        question:"What type of HVAC service do you need?",
        subtitle:"Start typing your address and select from the dropdown",
        type:"radio",
        options:[
        {label:"Central AC",value:"Central AC",next:"timeframe"},
        {label:"Ductless Mini-Split Systems",value:"Ductless Mini-Split Systems",next:"timeframe"},
        {label:"Outdoor Mist Cooling Systems",value:"Outdoor Mist Cooling Systems",next:"timeframe"},
        {label:"Swamp Cooler",value:"Swamp Cooler",next:"timeframe"}
        ]
        },
        system_indoor_air_quality:{
        question:"What type of HVAC service do you need?",
        subtitle:"Start typing your address and select from the dropdown",
        type:"radio",
        options:[
        {label:"Whole-Home Humidifier",value:"Whole-Home Humidifier",next:"timeframe"},
        {label:"Whole-Home Dehumidifier",value:"Whole-Home Dehumidifier",next:"timeframe"},
        {label:"Whole-Home Air Purifier",value:"Whole-Home Air Purifier",next:"timeframe"},
        {label:"UV Air Purification Systems",value:"UV Air Purification Systems",next:"timeframe"},
        {label:"Ductwork",value:"Ductwork",next:"timeframe"},
        {label:"Vents & Airflow Issues",value:"Vents & Airflow Issues",next:"timeframe"},
        {label:"Air Quality Testing",value:"Air Quality Testing",next:"timeframe"}
        ]
        },
        system_water_heating:{
        question:"What type of HVAC service do you need?",
        subtitle:"Start typing your address and select from the dropdown",
        type:"radio",
        options:[
        {label:"Water Heater",value:"Water Heater",next:"timeframe"},
        {label:"Tankless Water Heater Services",value:"Tankless Water Heater Services",next:"timeframe"}
        ]
        },
        system_install_service:{
        question:"What type of HVAC service do you need?",
        subtitle:"Start typing your address and select from the dropdown",
        type:"radio",
        options:[
        {label:"Emergency HVAC Service",value:"Emergency HVAC Service",next:"timeframe"},
        {label:"HVAC Inspection",value:"HVAC Inspection",next:"timeframe"}
        ]
        },
sub_service_repair:{
question:"What System Do You Need Help With?",
subtitle:"Select the system or service you need assistance with. This helps us match you with qualified HVAC professionals in your area.",
type:"radio",
options:[
{label:"Heating",value:"Heating",next:"system_repair_heating"},
{label:"Cooling",value:"Cooling",next:"system_repair_cooling"},
{label:"Duct & Airflow",value:"Duct & Airflow",next:"system_repair_duct_airflow"},
{label:"Water Heating",value:"Water Heating",next:"system_repair_water_heating"},
{label:"Service",value:"Service",next:"system_repair_service"},
{label:"Indoor Air Quality",value:"Indoor Air Quality",next:"system_repair_air_quality"}
]
},

        system_repair_heating:{
        question:"What type of HVAC service do you need?",
        subtitle:"Start typing your address and select from the dropdown",
        type:"radio",
        options:[
        {label:"Furnace",value:"Furnace",next:"timeframe"},
        {label:"Boiler & Radiator Systems",value:"Boiler & Radiator Systems",next:"timeframe"},
        {label:"Central Heating Systems",value:"Central Heating Systems",next:"timeframe"},
        {label:"Wall Heaters",value:"Wall Heaters",next:"timeframe"},
        {label:"Heat Pump",value:"Heat Pump",next:"timeframe"},
        {label:"Thermostats & Heating Controls",value:"Thermostats & Heating Controls",next:"timeframe"},
        {label:"Smart Thermostat",value:"Smart Thermostat",next:"timeframe"}
        ]
        },
        system_repair_cooling:{
        question:"What type of HVAC service do you need?",
        subtitle:"Start typing your address and select from the dropdown",
        type:"radio",
        options:[
        {label:"Central AC",value:"Central AC",next:"timeframe"},
        {label:"Outdoor Mist Cooling Systems",value:"Outdoor Mist Cooling Systems",next:"timeframe"},
        {label:"Ductless Mini-Split Systems",value:"Ductless Mini-Split Systems",next:"timeframe"},
        {label:"Swamp Cooler",value:"Swamp Cooler",next:"timeframe"}
        ]
        },
        system_repair_duct_airflow:{
        question:"What type of HVAC service do you need?",
        subtitle:"Start typing your address and select from the dropdown",
        type:"radio",
        options:[
        {label:"Ductwork",value:"Ductwork",next:"timeframe"},
        {label:"Vents & Airflow Issues",value:"Vents & Airflow Issues",next:"timeframe"}
        ]
        },
        system_repair_water_heating:{
        question:"What type of HVAC service do you need?",
        subtitle:"Start typing your address and select from the dropdown",
        type:"radio",
        options:[
        {label:"Water Heater",value:"Water Heater",next:"timeframe"},
        {label:"Tankless Water Heater Services",value:"Tankless Water Heater Services",next:"timeframe"}
        ]
        },
        system_repair_service:{
        question:"What type of HVAC service do you need?",
        subtitle:"Start typing your address and select from the dropdown",
        type:"radio",
        options:[
        {label:"Emergency HVAC Service (24/7)",value:"Emergency HVAC Service (24/7)",next:"timeframe"},
        {label:"HVAC Inspection",value:"HVAC Inspection",next:"timeframe"},
        {label:"Air Quality Testing",value:"Air Quality Testing",next:"timeframe"},
        {label:"Duct Cleaning",value:"Duct Cleaning",next:"timeframe"}
        ]
        },
        system_repair_air_quality:{
        question:"What type of HVAC service do you need?",
        subtitle:"Start typing your address and select from the dropdown",
        type:"radio",
        options:[
        {label:"Whole-Home Humidifier",value:"Whole-Home Humidifier",next:"timeframe"},
        {label:"Whole-Home Dehumidifier",value:"Whole-Home Dehumidifier",next:"timeframe"},
        {label:"Whole-Home Air Purifier",value:"Whole-Home Air Purifier",next:"timeframe"},
        {label:"UV Air Purification Systems",value:"UV Air Purification Systems",next:"timeframe"}
        ]
        },
sub_service_replacement:{
question:"What System Do You Need Help With?",
subtitle:"Select the system or service you need assistance with. This helps us match you with qualified HVAC professionals in your area.",
type:"radio",
options:[
{label:"Major Equipment",value:"Major Equipment",next:"system_replacement_major"},
{label:"Heating",value:"Heating",next:"system_replacement_heating"},
{label:"Duct & Airflow",value:"Duct & Airflow",next:"system_replacement_duct"},
{label:"Indoor Air Quality",value:"Indoor Air Quality",next:"system_replacement_air_quality"},
{label:"Cooling",value:"Cooling",next:"system_replacement_cooling"},
{label:"Service",value:"Service",next:"system_replacement_service"}
]
},
        system_replacement_major:{
        question:"What type of HVAC service do you need?",
        subtitle:"Start typing your address and select from the dropdown",
        type:"radio",
        options:[
        {label:"Furnace",value:"Furnace",next:"timeframe"},
        {label:"Boiler & Radiator Systems",value:"Boiler & Radiator Systems",next:"timeframe"},
        {label:"Heat Pump",value:"Heat Pump",next:"timeframe"},
        {label:"Central AC",value:"Central AC",next:"timeframe"},
        {label:"Ductless Mini-Split Systems",value:"Ductless Mini-Split Systems",next:"timeframe"},
        {label:"Water Heater",value:"Water Heater",next:"timeframe"},
        {label:"Tankless Water Heater Services",value:"Tankless Water Heater Services",next:"timeframe"}
        ]
        },
        system_replacement_heating:{
        question:"What type of HVAC service do you need?",
        subtitle:"Start typing your address and select from the dropdown",
        type:"radio",
        options:[
        {label:"Thermostats & Heating Controls",value:"Thermostats & Heating Controls",next:"timeframe"},
        {label:"Smart Thermostat",value:"Smart Thermostat",next:"timeframe"}
        ]
        },
        system_replacement_duct:{
        question:"What type of HVAC service do you need?",
        subtitle:"Start typing your address and select from the dropdown",
        type:"radio",
        options:[
        {label:"Ductwork",value:"Ductwork",next:"timeframe"},
        {label:"Vents & Airflow Issues",value:"Vents & Airflow Issues",next:"timeframe"}
        ]
        },
        system_replacement_air_quality:{
        question:"What type of HVAC service do you need?",
        subtitle:"Start typing your address and select from the dropdown",
        type:"radio",
        options:[
        {label:"Whole-Home Humidifier",value:"Whole-Home Humidifier",next:"timeframe"},
        {label:"Whole-Home Dehumidifier",value:"Whole-Home Dehumidifier",next:"timeframe"},
        {label:"Whole-Home Air Purifier",value:"Whole-Home Air Purifier",next:"timeframe"},
        {label:"UV Air Purification Systems",value:"UV Air Purification Systems",next:"timeframe"}
        ]
        },
        system_replacement_cooling:{
        question:"What type of HVAC service do you need?",
        subtitle:"Start typing your address and select from the dropdown",
        type:"radio",
        options:[
        {label:"Outdoor Mist Cooling Systems",value:"Outdoor Mist Cooling Systems",next:"timeframe"}
        ]
        },
        system_replacement_service:{
        question:"What type of HVAC service do you need?",
        subtitle:"Start typing your address and select from the dropdown",
        type:"radio",
        options:[
        {label:"Emergency HVAC Service",value:"Emergency HVAC Service",next:"timeframe"}
        ]
        },


},


    roofing: {

        service: {
            question:"What does your roof need today?",
            subtitle:"We will connect you with qualified local roofing professionals who handle that exact type of project.",
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
                {label:"Natural Slate",value:"Natural Slate"}
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
        question: "What’s Getting a Fresh New Look?",
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
        question: "What’s Getting a Fresh New Look?",
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
        question: "What’s Getting a Fresh New Look?",
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
        subtitle:"Choose the type of renovation you’re considering so we can match you with experienced bathroom remodeling professionals who specialize in your specific project scope.",
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
subtitle:"We'll send you a verification code",
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
    const category = params.get("category");

    return category ? category.toLowerCase() : "hvac";
}
const selectedCategory = detectCategoryFromURL();
const steps = {
    ...formFlows[selectedCategory],
    ...commonSteps
};

let current="service";
let history=[];
let geocoder = null;
let formData = {};
renderStep(current);

function renderStep(id){

const step=steps[id];

$("#question-title").text(step.question);
$("#question-subtitle").text(step.subtitle || "");

let html="";

// RADIO OPTIONS
if(step.type==="radio" || step.type==="checkbox"){

html+=`<div class="options-scroll options">`;

step.options.forEach(opt=>{

let isChecked = false;

if(step.type==="radio"){
    isChecked = formData[id] === opt.value;
}else{
    isChecked = formData[id] && formData[id].includes(opt.value);
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
// ADDRESS WITH MAPBOX
if(step.type==="address"){
html=`
<div id="geocoder-container"></div>
<input type="hidden" id="address" name="address">
<input type="text" id="city" name="city" class="text-card" placeholder="City" readonly>
<input type="text" id="state" name="state" class="text-card" placeholder="State" readonly>
<input type="text" id="zipcode" name="zipcode" class="text-card" placeholder="Zip Code" readonly>
<div id="address-error" class="error-msg" style="display:none;"></div>
`;
}

// INPUT FIELDS
if(step.type==="input"){
html=step.html;
}

// PHONE WITH OTP
if(step.type==="phone"){
html=`
<div class="options-scroll options" id="question-options">
<input type="text" id="phone" name="phone" class="text-card" placeholder="Enter Phone Number" 
       oninput="this.value = this.value.replace(/[^0-9]/g, '');" inputmode="numeric" placeholder="(123) 456-7890" maxlength="14">
<a id="send-otp" class="send-otp otp_common_btn" href="javascript:void(0)">Send Verification Code</a>
<div id="phone-error" class="error-msg"></div>

<div id="otp-inline" style="display:none;">
<input type="text" id="otp-code" class="text-card" placeholder="Enter 6-Digit Code" maxlength="6" 
       inputmode="numeric" autocomplete="one-time-code" style="letter-spacing: 8px; text-align: center; font-size: 20px; font-weight: 600;">
<a id="new-verify-otp" class="send-otp otp_common_btn" href="javascript:void(0)">Verify Code</a>
<div id="otp-error" class="error-msg"></div>
</div>

<span class="phone-survey">Phone number is solely used for secure verification and appointments.</span>

<div class="term-check">

<div class="consent-line">
<input type="checkbox" name="terms" id="phoneterms"><div id="terms-error" class="error-msg" role="alert"></div>
<label for="phoneterms">
    
    By clicking "Agree and Submit", I agree to the <a href="javascript:void(0);" onclick="openNewWindow('privacy.php','modal');">Privacy Policy</a>,<a href="javascript:void(0);" onclick="openNewWindow('tcpa.php','modal');">TCPA</a> and <a href="javascript:void(0);" onclick="openNewWindow('terms.php','modal');">Terms and Conditions.</a> I also consent to receive marketing communications through email and other texts or calls from easyhomeservice.com and/or its <a href="javascript:void(0);" onclick="openNewWindow('marketing-partner.php','modal');">marketing partners</a> about Home Service by any means or technology, including an automatic dialing system, to the phone number I have previously provided, even if that number is on a national or state Do-Not-Call registry . Carrier and data rates may apply. I understand that my consent to such calls and text messages is not required to purchase products from or use the services of <a href="javascript:void(0);" onclick="openNewWindow('marketing-partner.php','modal');">marketing partners.</a>
    
</label>
</div>


</div>
<div id="terms-error" class="error-msg"></div>

<input type="hidden" id="otp-verified" name="otp_verified" value="0">
<input type="hidden" id="phone-e164" name="phone_e164" value="">
</div>
`;
}

// LOADER
if(step.type==="loader"){
html=`
<div class="loader-box text-center">
<p>Processing your request...</p>
<div class="spinner-border"></div>
</div>
`;
setTimeout(function(){

    // Add category
    formData["category"] = selectedCategory;

    // Convert to query string (for GET)
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
    // url: "https://easyhomeservice.com/send-" + selectedCategory + ".php",
    url: "https://easyhomeservice.com/send.php",
    data: queryString,

    success: function(response){
        console.log("Response:", response);
        console.log("Data Sent:", formData);

        // window.location.href = "result.php";
    },

    error: function(error){
        console.log("Error:", error);
    }
});

},1500);
}

$("#question-options").html(html);
// ===== DESCRIPTION FIELD CONTROL =====
if(step.showDescription){
    $(".step-description").show();
} else {
    $(".step-description").hide();
}
// Change button text based on step
if(id === "phone"){
    $(".next-btn-global").text("Submit");
} else {
    $(".next-btn-global").text("Next");
}
// Initialize Mapbox Geocoder after rendering
if(step.type==="address"){
setTimeout(initMapboxGeocoder, 100);
}

// Initialize email validation after rendering
if(step.type==="input" && $("#email").length){
setTimeout(initEmailValidation, 100);
}
}

// MAPBOX GEOCODER INITIALIZATION WITH AUTOCOMPLETE FROM START
function initMapboxGeocoder(){

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
},100);

geocoder.on('result', function(e){

    const place = e.result;
    const context = place.context || [];

    let city = '';
    let state = '';
    let zipcode = '';

    // CITY
    const placeContext = context.find(c => c.id.startsWith('place.'));
    if(placeContext) city = placeContext.text;

    // STATE
    const regionContext = context.find(c => c.id.startsWith('region.'));
    if(regionContext){
        state = regionContext.short_code 
            ? regionContext.short_code.replace('US-','') 
            : regionContext.text;
    }

    // ZIPCODE (multiple fallbacks)
    const postcodeContext = context.find(c => c.id.startsWith('postcode.'));
    if(postcodeContext){
        zipcode = postcodeContext.text;
    }

    // fallback 1
    if(!zipcode && place.properties && place.properties.postcode){
        zipcode = place.properties.postcode;
    }

    // fallback 2 (extract from address string)
    if(!zipcode){
        const match = place.place_name.match(/\b\d{5}(-\d{4})?\b/);
        if(match) zipcode = match[0];
    }

    $("#address").val(place.place_name);
    $("#city").val(city);
    $("#state").val(state);
    $("#zipcode").val(zipcode);
});}
// EMAIL VALIDATION WITH IPQS
function initEmailValidation(){
let emailTimer;
let lastCheckedEmail = '';
let isEmailValid = false;
const $email = $('#email');
const $error = $('#email-error');
const $nextBtn = $('.next-btn-global');

$nextBtn.prop('disabled', true).css('opacity', '0.6');

$email.on('input', function() {
clearTimeout(emailTimer);
const email = $(this).val().trim();
$error.text('').removeClass('error-msg success-msg').hide();
isEmailValid = false;
$nextBtn.prop('disabled', true).css('opacity', '0.6');

if (email === '') {
$error.text('');
return;
}

if (email.includes('@') && email.match(/\.[a-z]{2,}$/i)) {
emailTimer = setTimeout(() => {
checkEmailValidity(email);
}, 800);
}
});

function checkEmailValidity(email) {
const simpleEmailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

if (!simpleEmailPattern.test(email)) {
$error.addClass('error-msg').show().text('Please enter a valid email format.');
return;
}

$error.show().text('Checking email validity...');
lastCheckedEmail = email;

$.ajax({
url: 'https://easyhomeservice.com/check-email.php',
type: 'GET',
dataType: 'json',
data: { email: email },
success: function(response) {
console.log(response);

if (response && response.success === false && 
    typeof response.message === 'string' && 
    response.message.includes('insufficient credits')) {
$error.text('').hide();
isEmailValid = true;
$nextBtn.prop('disabled', false).css('opacity', '1');
return;
}

if (!response || response.success === false) {
$error.addClass('error-msg').show().text('Unable to verify email. Please try again.');
return;
}

if (response.valid === false || response.disposable === true || 
    response.recent_abuse === true || 
    (response.spam_trap_score && response.spam_trap_score > 0.5)) {
$error.addClass('error-msg').show().text('Please enter a valid, non-temporary email address.');
} else {
$error.addClass('success-msg').show().text('✓ Email is Verified!');
isEmailValid = true;
$nextBtn.prop('disabled', false).css('opacity', '1');
setTimeout(() => $error.fadeOut(500), 1500);
}
},
error: function() {
$error.addClass('error-msg').show().text('Network error while verifying email.');
}
});
}
}

// Show inline error message function
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
// ✅ ADD DESCRIPTION HERE
    let desc = $("textarea[name='description']").val();
    if(desc){
        formData["description"] = desc;
    }
// Clear all previous errors
$('.error-msg').hide().text('');

// RADIO VALIDATION
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

    // ✅ FIX: handle "undefined" string also
    if(optionNext && optionNext !== "undefined"){
        next = optionNext;
    } else {
        next = step.next;
    }
}
// ADDRESS VALIDATION
if(step.type==="address"){
if(!$("#address").val() || !$("#city").val() || !$("#state").val() || !$("#zipcode").val()){
$('#address-error').text('Please select a complete address from the dropdown').show();
$('.mapboxgl-ctrl-geocoder--input').focus();
return;
}
formData["address"] = $("#address").val();
formData["city"] = $("#city").val();
formData["state"] = $("#state").val();
formData["zipcode"] = $("#zipcode").val();
next=step.next;
}

// INPUT VALIDATION
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

// Check if email is validated
const $nextBtn = $('.next-btn-global');
if($nextBtn.prop('disabled')){
$('#email-error').addClass('error-msg').show().text('Please wait for email verification to complete');
return;
}
$("#question-options input").each(function(){
    formData[$(this).attr("name")] = $(this).val();
});
next=step.next;
}

// PHONE VALIDATION
if(step.type==="phone"){
// Check if terms are accepted
if(!$("#phoneterms").is(':checked')){
$("#terms-error").text('Please agree to the terms and conditions to continue.').show();
$('#phoneterms').focus();
formData["phone"] = $("#phone").val();
return;
}
// Check if OTP is verified
if($("#otp-verified").val() !== "1"){
if(!requestStarted){
$('#phone-error').addClass('error-msg').show().text('Please verify your phone number by clicking "Send Verification Code"');
} else {
$('#otp-error').addClass('error-msg').show().text('Please enter and verify the OTP code sent to your phone');
$('#otp-code').focus();
}
return;
}
next=step.next;
}

if(next){
history.push(current);
current=next;
renderStep(current);
$('html,body').animate({scrollTop:0},200);
}
});

// BACK BUTTON HANDLER
$(".prev-btn").click(function(){
if(history.length){
current=history.pop();
renderStep(current);
}
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

    // checkbox → do nothing (browser handles it)

});
// Clear input field errors on focus
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

<!-- OTP VERIFICATION SCRIPT -->
<script>
// ===== OTP CONFIG =====
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

let requestStarted = false;
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
requestStarted = true;
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
requestStarted = true;
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
if (!requestStarted){
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

// Clear terms error on checkbox change
$(document).on('change', '#phoneterms', function(){
if($(this).is(':checked')){
$('#terms-error').hide().text('');
}
});

</script>

<?php include 'promise.php' ?>
<?php include 'footer.php' ?>
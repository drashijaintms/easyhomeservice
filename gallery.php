
<style>

.gallery {
  display: grid;
  gap: 20px;
}

.card-item { height: 100%; }

/* ===== CARD ===== */
.window-card {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgb(0 0 0 / .1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
    text-align:center;
}

.window-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 12px 24px rgb(0 0 0 / .2);
}




.window-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.window-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to top, rgb(0 0 0 / 64%), transparent);
    padding: 28px 15px 10px 15px;
    transition: background 0.3s ease;
}

.window-name {
    color: #fff;
    font-size: 1.3rem;
    font-weight: 600;
    margin: 0;
    text-shadow: 2px 2px 2px #000;
}

/* ===== LAYOUTS ===== */
.grid-4 { grid-template-columns: repeat(2,1fr); }
.grid-default { grid-template-columns: repeat(3,1fr); }

.grid-5 { grid-template-columns: 2fr 1fr; }
.grid-5 .left {
  display:grid;
  grid-template-columns:repeat(2,1fr);
  gap:20px;
}

.grid-3 { grid-template-columns: 1fr 1fr; }
.grid-3 .left {
  display:flex;
  flex-direction:column;
  gap:20px;
}


/* ===== RESPONSIVE FIX ===== */
@media (max-width: 768px) {

  /* ===== DEFAULT (4,6,etc) ===== */
  .gallery {
    grid-template-columns: repeat(2, 1fr) !important;
  }

  .gallery .card-item {
    aspect-ratio: 1 / 1;
    height: auto !important;
  }

  .grid-5 {
    grid-template-columns: 1fr !important;
  }

  .grid-5 .left {
    grid-template-columns: repeat(2, 1fr);
  }

  .grid-3 {
    grid-template-columns: repeat(2, 1fr);
  }

  /* ===================================== */
  /* 🔥 FIX ONLY FOR 3 ITEMS (SOLAR) */
  /* ===================================== */


  /* reset bootstrap row completely */
  #gallery .col-lg-7 .row {
    display: flex !important;
    flex-wrap: wrap;
    gap: 12px;

  }

  /* remove bootstrap column behavior */
  #gallery .col-lg-7 .row > div {
    width: calc(50% - 6px) !important;
    padding: 0 !important;
  }

  /* make cards square */
  #gallery .col-lg-7 .card-item {
    width: 100%;
    aspect-ratio: 1 / 1;
  }

  /* full width last card */
  #gallery .col-lg-5 {
    width: 100% !important;
    margin-top:0px;
  }

  #gallery .col-lg-5 .card-item {
    width: 100%;
    margin-top: 12px;
    aspect-ratio: 1 / 1;
  }

  /* stop JS height issues */
  #gallery .card-item {
    height: auto !important;
  }

  /* ===================================== */
  /* 🔥 FIX FOR 5 ITEMS */
  /* ===================================== */

  .grid-5 {
    display: flex !important;
    flex-wrap: wrap;
    gap: 12px;
  }

  .grid-5 .left {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    gap: 12px;
  }

  .grid-5 .left .card-item {
    width: calc(50% - 6px);
  }

  .grid-5 .right {
    width: 100%;
  }

  .grid-5 .right .card-item {
    width: 100%;
    margin-top: 12px;
  }

}
</style>

<div class="row pt-5">

<?php
$url = strtolower($_SERVER['REQUEST_URI']);

/* GET LAST PART */
$segments = explode('/', trim($url, '/'));
$slug = end($segments);

/* ===== DATA ===== */
$data = [
"awnings" => [
    ["img"=>"images/win-awnings/patio-and-deck-awning.webp","name"=>"Patio & Deck Awning","alt"=>"Patio & Deck Awning"],
    ["img"=>"images/win-awnings/window-and-door-awning.webp","name"=>"Window & Door Awning","alt"=>"Window & Door Awning"],
    ["img"=>"images/win-awnings/freestanding-and-canopy-awning.webp","name"=>"Freestanding & Canopy Awning","alt"=>"Freestanding & Canopy Awning"],
    ["img"=>"images/win-awnings/retractable-awning.webp","name"=>"Retractable Awning","alt"=>"Retractable Awning"],
    ["img"=>"images/win-awnings/vertical-awning.webp","name"=>"Vertical Awning","alt"=>"Vertical Awning"],
    ["img"=>"images/win-awnings/awning-upgrades.webp","name"=>"Awning Upgrades","alt"=>"Awning Upgrades"]
],

"bathroom" => [
    ["img"=>"images/win-bathroom/bathtub.webp","name"=>"Bathtub","alt"=>"Bathtub"],
    ["img"=>"images/win-bathroom/shower.webp","name"=>"Shower","alt"=>"Shower"],
    ["img"=>"images/win-bathroom/toilet.webp","name"=>"Toilet","alt"=>"Toilet"],
    ["img"=>"images/win-bathroom/sink-and-vanity.webp","name"=>"Sink & Vanity","alt"=>"Sink & Vanity"],
    ["img"=>"images/win-bathroom/walls-and-flooring.webp","name"=>"Walls & Flooring","alt"=>"Walls & Flooring"],
    ["img"=>"images/win-bathroom/walk-in-tub-installation.webp","name"=>"Walk-In Tub Installation","alt"=>"Walk-In Tub Installation"]
],

"cabinet" => [
    ["img"=>"images/win-cabinet/installation.webp","name"=>"Cabinet Installation","alt"=>"Cabinet Installation"],
    ["img"=>"images/win-cabinet/replacement.webp","name"=>"Cabinet Replacement","alt"=>"Cabinet Replacement"],
    ["img"=>"images/win-cabinet/refacing.webp","name"=>"Cabinet Refacing","alt"=>"Cabinet Refacing"],
    ["img"=>"images/win-cabinet/repair.webp","name"=>"Cabinet Repair","alt"=>"Cabinet Repair"]
],

"deck" => [
    ["img"=>"images/win-deck/attached-decks.webp","name"=>"Attached Decks","alt"=>"Attached Decks"],
    ["img"=>"images/win-deck/freestanding-decks.webp","name"=>"Freestanding Decks","alt"=>"Freestanding Decks"],
    ["img"=>"images/win-deck/elevated-decks.webp","name"=>"Elevated Decks","alt"=>"Elevated Decks"],
    ["img"=>"images/win-deck/multi-level-decks.webp","name"=>"Multi-Level Decks","alt"=>"Multi-Level Decks"],
    ["img"=>"images/win-deck/covered-decks.webp","name"=>"Covered Decks","alt"=>"Covered Decks"],
    ["img"=>"images/win-deck/specialty-decks.webp","name"=>"Specialty Decks","alt"=>"Specialty Decks"]
],

"door" => [
    ["img"=>"images/win-door/exterior-doors.webp","name"=>"Exterior Doors","alt"=>"Exterior Doors"],
    ["img"=>"images/win-door/interior-doors.webp","name"=>"Interior Doors","alt"=>"Interior Doors"],
    ["img"=>"images/win-door/patio-doors.webp","name"=>"Patio Doors","alt"=>"Patio Doors"],
    ["img"=>"images/win-door/storm-doors.webp","name"=>"Storm Doors","alt"=>"Storm Doors"],
    ["img"=>"images/win-door/garage-doors.webp","name"=>"Garage Doors","alt"=>"Garage Doors"],
    ["img"=>"images/win-door/utility-doors.webp","name"=>"Utility Doors","alt"=>"Utility Doors"]
],

"electrical" => [
    ["img"=>"images/win-electrical/electrical-5.jpg","name"=>"Electrical Repairs","alt"=>"Residential Electrical Services Expert"],
    ["img"=>"images/win-electrical/electrical-3.jpg","name"=>"Wiring & Rewiring","alt"=>"Emergency Electrical Services"],
    ["img"=>"images/win-electrical/electrical-4.jpg","name"=>"Lighting Installation","alt"=>"Home electrical repair services"],
    ["img"=>"images/win-electrical/electrical-6.jpg","name"=>"Panel Upgrades","alt"=>"Panel Upgrades"],
    ["img"=>"images/win-electrical/electrical-2.2.jpg","name"=>"Switches & Outlets","alt"=>"Switches & Outlets"],
    ["img"=>"images/win-electrical/electrical-1.1.png","name"=>"Safety Inspections","alt"=>"Safety Inspections"]
],

"flooring" => [
    ["img"=>"images/win-floor/hardwood-flooring.jpg","name"=>"Hardwood Flooring","alt"=>"Hardwood Flooring"],
    ["img"=>"images/win-floor/tile-flooring.jpg","name"=>"Tile Flooring","alt"=>"Tile Flooring"],
    ["img"=>"images/win-floor/Vinyl Flooring.png","name"=>"Vinyl Flooring","alt"=>"Vinyl Flooring"],
    ["img"=>"images/win-floor/carpet-flooring.jpg","name"=>"Carpet Flooring","alt"=>"Carpet Flooring"],
    ["img"=>"images/win-floor/liminate-flooring.jpg","name"=>"Laminate Flooring","alt"=>"Laminate Flooring"],
    ["img"=>"images/win-floor/stone-flooring.jpg","name"=>"Stone Flooring","alt"=>"Stone Flooring"]
],

"gutter" => [
    ["img"=>"images/win-gut/type-1.png","name"=>"Wood Gutters","alt"=>"wood gutter in the States"],
    ["img"=>"images/win-gut/type-2.jpg","name"=>"PVC Gutters","alt"=>"PVC Gutters"],
    ["img"=>"images/win-gut/type-3-1.jpg","name"=>"Galvanized Gutters","alt"=>"Galvanized Gutters"],
    ["img"=>"images/win-gut/type-4.png","name"=>"Copper Gutters","alt"=>"Copper Gutters"],
    ["img"=>"images/win-gut/type-5.jfif","name"=>"Gutter Guards","alt"=>"Gutter Guards"]
],

"handyman" => [
    ["img"=>"images/win-handy/fence.webp","name"=>"General Handyman","alt"=>"general handyman services"],
    ["img"=>"images/win-handy/plumbing.webp","name"=>"Plumbing","alt"=>"plumbing services"],
    ["img"=>"images/win-handy/electrical.webp","name"=>"Electrical","alt"=>"electrical repair"],
    ["img"=>"images/win-handy/carpentry.webp","name"=>"Carpentry","alt"=>"carpentry services"],
    ["img"=>"images/win-handy/appliance-repair.webp","name"=>"Appliance Repair","alt"=>"technician repairing appliances in US"],
    ["img"=>"images/win-handy/painting.webp","name"=>"Painting","alt"=>"a painter painting wall in American home"],
    ["img"=>"images/win-handy/drywall.webp","name"=>"Drywall","alt"=>"two drywall technicians"],
    ["img"=>"images/win-handy/lawn-care.webp","name"=>"Lawn Care","alt"=>"A Working lawncare professional in the States"],
    ["img"=>"images/win-handy/locksmith.webp","name"=>"Locksmith","alt"=>"locksmith"]
],

"homesecurity" => [
    ["img"=>"images/win-homesecurity/home-security-systems.webp","name"=>"Home Security Systems","alt"=>"Home Security Systems"],
    ["img"=>"images/win-homesecurity/home-security-cameras.webp","name"=>"Home Security Cameras","alt"=>"Home Security Cameras"],
    ["img"=>"images/win-homesecurity/alarm-systems-for-homes.webp","name"=>"Alarm Systems for Homes","alt"=>"Alarm Systems for Homes"],
    ["img"=>"images/win-homesecurity/smart-home-security-solutions.webp","name"=>"Smart Home Security Solutions","alt"=>"Smart Home Security Solutions"]
],

"homewarranty" => [
    ["img"=>"images/win-homewarranty/hvac-systems.webp","name"=>"HVAC Systems","alt"=>"HVAC Systems"],
    ["img"=>"images/win-homewarranty/plumbing-and-water-systems.webp","name"=>"Plumbing & Water Systems","alt"=>"Plumbing & Water Systems"],
    ["img"=>"images/win-homewarranty/electrical-systems.webp","name"=>"Electrical Systems","alt"=>"Electrical Systems"],
    ["img"=>"images/win-homewarranty/kitchen-appliances.webp","name"=>"Kitchen Appliances","alt"=>"Kitchen Appliances"],
    ["img"=>"images/win-homewarranty/laundry-and-utility-appliances.webp","name"=>"Laundry & Utility Appliances","alt"=>"Laundry & Utility Appliances"],
    ["img"=>"images/win-homewarranty/speciality-coverage.webp","name"=>"Speciality Coverage","alt"=>"Speciality Coverage"]
],

"hvac" => [
    ["img"=>"/images/win-hvac/hvac-1.webp","name"=>"Heat Pump Services","alt"=>"Heat Pump Services & HVAC Experts"],
    ["img"=>"/images/win-hvac/hvac-2.webp","name"=>"Furnace Installation & Repair","alt"=>"Residential HVAC Services with Furnace Installation & Repair"],
    ["img"=>"/images/win-hvac/hvac-3.webp","name"=>"Air Duct Cleaning & Repair","alt"=>"Air Duct Cleaning & Repair"],
    ["img"=>"/images/win-hvac/hvac-4.webp","name"=>"AC Installation & Repair","alt"=>"AC Installation & Repair"],
    ["img"=>"/images/win-hvac/hvac-5.webp","name"=>"Boiler Installation & Repair","alt"=>"Boiler Installation & Repair"],
    ["img"=>"/images/win-hvac/hvac-6.webp","name"=>"Indoor Air Quality Services","alt"=>"Indoor Air Quality Services"]
],

"kitchen" => [
    ["img"=>"images/win-kitchen/full-kitchen-remodeling.webp","name"=>"Full Kitchen Remodeling","alt"=>"Full Kitchen Remodeling"],
    ["img"=>"images/win-kitchen/partial-kitchen-renovation.webp","name"=>"Partial Kitchen Renovation","alt"=>"Partial Kitchen Renovation"],
    ["img"=>"images/win-kitchen/cabinet-upgrades.webp","name"=>"Cabinet Upgrades","alt"=>"Cabinet Upgrades"],
    ["img"=>"images/win-kitchen/countertop-or-backsplash-replacement.webp","name"=>"Countertop/Backsplash Replacement","alt"=>"Countertop / Backsplash Replacement"],
    ["img"=>"images/win-kitchen/plumbing-or-electrical-upgrade.webp","name"=>"Plumbing / Electrical Upgrade","alt"=>"Plumbing / Electrical Upgrade"],
    ["img"=>"images/win-kitchen/custom-kitchen-design.webp","name"=>"Custom Kitchen Design","alt"=>"Custom Kitchen Design"]
],

"locksmith" => [
    ["img"=>"images/win-locksmith/emergency-lockout.webp","name"=>"Emergency Lockout","alt"=>"Emergency Lockout"],
    ["img"=>"images/win-locksmith/residential-locksmith.webp","name"=>"Residential Locksmith","alt"=>"Residential Locksmith"],
    ["img"=>"images/win-locksmith/automotive-locksmith.webp","name"=>"Automotive Locksmith","alt"=>"Automotive Locksmith"],
    ["img"=>"images/win-locksmith/commercial-locksmith.webp","name"=>"Commercial Locksmith","alt"=>"Commercial Locksmith"],
    ["img"=>"images/win-locksmith/smart-and-electronic-lock.webp","name"=>"Smart & Electronic Lock","alt"=>"Smart & Electronic Lock"],
    ["img"=>"images/win-locksmith/security-and-specialty-lock.webp","name"=>"Security & Specialty Lock","alt"=>"Security & Specialty Lock"]
],

"mold" => [
    ["img"=>"images/win-mold/walls-and-ceilings.webp","name"=>"Walls & Ceilings","alt"=>"Walls & Ceilings"],
    ["img"=>"images/win-mold/basement-and-crawl-space.webp","name"=>"Basement & Crawl Space","alt"=>"Basement & Crawl Space"],
    ["img"=>"images/win-mold/attic-space.webp","name"=>"Attic Space","alt"=>"Attic Space"],
    ["img"=>"images/win-mold/bathroom-and-kitchen.webp","name"=>"Bathroom & Kitchen","alt"=>"Bathroom & Kitchen"],
    ["img"=>"images/win-mold/hvac-and-air-duct.webp","name"=>"HVAC & Air Duct","alt"=>"HVAC & Air Duct"],
    ["img"=>"images/win-mold/floors-and-wooden-surface.webp","name"=>"Floors & Wooden Surface","alt"=>"Floors & Wooden Surface"]
],

"painting" => [
    ["img"=>"images/win-painting/exterior-painting.webp","name"=>"Exterior Painting","alt"=>"Professional house painters providing exterior painting services"],
    ["img"=>"images/win-painting/interior-painting.webp","name"=>"Interior Painting","alt"=>"Trusted interior painting contractors for modern homes"],
    ["img"=>"images/win-painting/cabinet-and-trim-painting.webp","name"=>"Cabinet & Trim Painting","alt"=>"Cabinet & Trim Painting"],
    ["img"=>"images/win-painting/pressure-washing.webp","name"=>"Pressure Washing","alt"=>"Pressure Washing"],
    ["img"=>"images/win-painting/specialty-and-decorative-finishes.webp","name"=>"Specialty & Decorative Finishes","alt"=>"Specialty & Decorative Finishes"],
    ["img"=>"images/win-painting/ceiling-and-textured-services.webp","name"=>"Ceiling & Textured Services","alt"=>"Ceiling & Textured Services"]
],

"patiocovers" => [
    ["img"=>"images/win-homesecurity/home-security-systems.webp","name"=>"Fixed Patio Covers","alt"=>"Fixed Patio Covers"],
    ["img"=>"images/win-homesecurity/home-security-cameras.webp","name"=>"Retractable Patio Covers","alt"=>"Retractable Patio Covers"],
    ["img"=>"images/win-homesecurity/alarm-systems-for-homes.webp","name"=>"Pergola & Lattice Covers","alt"=>"Pergola & Lattice Covers"],
    ["img"=>"images/win-homesecurity/smart-home-security-solutions.webp","name"=>"Freestanding Patio Covers","alt"=>"Freestanding Patio Covers"]
],

"pest-control" => [
    ["img"=>"images/win-pest/Bugs or Insects.jpg","name"=>"Bugs or Insects Pest Control","alt"=>"Bugs or Residential Pest Control Experts"],
    ["img"=>"images/win-pest/Birds or Bats.jpg","name"=>"Birds or Bats Pest Control","alt"=>"Birds or Bats Pest Control local experts for ant pest control"],
    ["img"=>"images/win-pest/Rodents.jpg","name"=>"Rodents Pest Control","alt"=>"Rodents Pest Control"],
    ["img"=>"images/win-pest/Termite.jpg","name"=>"Termite Pest Control","alt"=>"Termite Pest Control"],
    ["img"=>"images/win-pest/Bees or Wasp.jpg","name"=>"Bees or Wasp Pest Control","alt"=>"Bees or Wasp Pest Control"],
    ["img"=>"images/win-pest/Mosquitoes services.jpg","name"=>"Mosquitoes or Ticks Pest Control","alt"=>"Mosquitoes or Ticks Pest Control"]
],

"plumbing" => [
    ["img"=>"/images/win-plumb/plumbing-1.1.webp","name"=>"Water heater Repair & Installation","alt"=>"Water heater Repair & Installation, Plumbing Services Experts"],
    ["img"=>"/images/win-plumb/plumbing-2.webp","name"=>"Drain Cleaning & Clog Removal","alt"=>"Drain Cleaning & Clog Removal, residential plumbing experts"],
    ["img"=>"/images/win-plumb/plumbing-3.webp","name"=>"Toilet Repair & Installation","alt"=>"Removal Toilet Repair & Installation, local toilet plumbing expert"],
    ["img"=>"/images/win-plumb/plumbing-4.webp","name"=>"Faucet,Sink & Fixture Install/Repair","alt"=>"Faucet,Sink & Fixture Install/Repair Emergency Plumbing Services"],
    ["img"=>"/images/win-plumb/plumbing-5.webp","name"=>"Leak Detection & Pipe Repair","alt"=>"Leak Detection & Pipe Repair"],
    ["img"=>"/images/win-plumb/plumbing-6.webp","name"=>"Sewer Line Inspection & Repair","alt"=>"Detection & Pipe Repair Sewer Line Inspection"]
],

"powerwashing" => [
    ["img"=>"images/win-powerwashing/home-exterior-washing.webp","name"=>"Home Exterior Washing","alt"=>"Home Exterior Washing"],
    ["img"=>"images/win-powerwashing/driveway-and-concrete-cleaning.webp","name"=>"Driveway & Concrete Cleaning","alt"=>"Driveway & Concrete Cleaning"],
    ["img"=>"images/win-powerwashing/roof-cleaning-soft-wash.webp","name"=>"Roof Cleaning (Soft Wash)","alt"=>"Roof Cleaning (Soft Wash)"],
    ["img"=>"images/win-powerwashing/deck-and-patio-cleaning.webp","name"=>"Deck & Patio Cleaning","alt"=>"Deck & Patio Cleaning"],
    ["img"=>"images/win-powerwashing/gutter-cleaning.webp","name"=>"Gutter Cleaning","alt"=>"Gutter Cleaning"],
    ["img"=>"images/win-powerwashing/garage-area-cleaning.webp","name"=>"Garage Area Cleaning","alt"=>"Garage Area Cleaning"]
],

"remodeling" => [
    ["img"=>"images/win-remodeling/bathroom.webp","name"=>"Bathroom","alt"=>"Bathroom"],
    ["img"=>"images/win-remodeling/kitchen.webp","name"=>"Kitchen","alt"=>"Kitchen"],
    ["img"=>"images/win-remodeling/interior-updates.webp","name"=>"Interior updates","alt"=>"Interior Updates"],
    ["img"=>"images/win-remodeling/exterior-updates.webp","name"=>"Exterior updates","alt"=>"Exterior updates"],
    ["img"=>"images/win-remodeling/sunroom.webp","name"=>"Sunroom","alt"=>"Sunroom"],
    ["img"=>"images/win-remodeling/basement-and-atic.webp","name"=>"Basement & attic","alt"=>"Basement & attic"]
],


"roofing" => [
    ["img"=>"images/win-roof/roofing-asphalt.webp","name"=>"Roofing Asphalt","alt"=>"asphalt roof"],
    ["img"=>"images/win-roof/tile-roofing-01.webp","name"=>"Roofing Tile","alt"=>"roof with tiles"],
    ["img"=>"images/win-roof/roofing-metal.webp","name"=>"Roofing Metal","alt"=>"metal roof in an American house"],
    ["img"=>"images/win-roof/roofing-natural-slate.webp","name"=>"Roofing Natural Slate","alt"=>"residential natural slate roof"],
    ["img"=>"images/win-roof/roofing-cedar-shake.webp","name"=>"Roofing Cedar Shake","alt"=>"cedar shake roof"],
    ["img"=>"images/win-roof/flat-roofing.webp","name"=>"Flat Roofing","alt"=>"flat roofing installation"]
],

"siding" => [
    ["img"=>"images/win-siding/vinyl-siding.png","name"=>"Vinyl Siding","alt"=>"Vinyl Siding"],
    ["img"=>"images/win-siding/fiber-cement.png","name"=>"Fiber Cement","alt"=>"Fiber Cement"],
    ["img"=>"images/win-siding/wood-siding.png","name"=>"Wood Siding","alt"=>"Wood Siding"],
    ["img"=>"images/win-siding/stucco.png","name"=>"Stucco","alt"=>"Stucco"],
    ["img"=>"images/win-siding/brick-stone.png","name"=>"Brick/Stone","alt"=>"Brick/Stone"],
    ["img"=>"images/win-siding/metal-siding.png","name"=>"Metal Siding","alt"=>"Metal Siding"]
],

"skylight" => [
    ["img"=>"images/win-skylight/fixed-skylights.webp","name"=>"Fixed Skylights","alt"=>"Fixed Skylights"],
    ["img"=>"images/win-skylight/venting-skylights.webp","name"=>"Venting Skylights","alt"=>"Venting Skylights"],
    ["img"=>"images/win-skylight/sun-tunnel-skylights.webp","name"=>"Sun Tunnel Skylights","alt"=>"Sun Tunnel Skylights"],
    ["img"=>"images/win-skylight/deck-mounted-skylights.webp","name"=>"Deck Mounted Skylights","alt"=>"Deck Mounted Skylights"],
    ["img"=>"images/win-skylight/solar-powered-skylights.webp","name"=>"Solar-Powered Skylights","alt"=>"Solar-Powered Skylights"],
    ["img"=>"images/win-skylight/custom-designed-skylights.webp","name"=>"Custom-Designed Skylights","alt"=>"Custom-Designed Skylights"]
],

"solar" => [
    ["img"=>"images/win-solar/solar-3.jpg","name"=>"Solar Panel Installation","alt"=>"Solar Panel Installation"],
    ["img"=>"images/win-solar/solar-1.jpg","name"=>"Solar Panel Maintenance & Repair","alt"=>"Solar Panel Maintenance & Repair"],
    ["img"=>"images/win-solar/solar-2.jpg","name"=>"Solar Consultation & Assessment","alt"=>"Solar Consultation & Assessment"]
],

"sunroom" => [
    ["img"=>"images/win-sunroom/three-season-sunroom.webp","name"=>"Three Season Sunroom","alt"=>"Three Season Sunroom"],
    ["img"=>"images/win-sunroom/four-season-sunroom.webp","name"=>"Four Season Sunroom","alt"=>"Four Season Sunroom"],
    ["img"=>"images/win-sunroom/screen-rooms.webp","name"=>"Screen Rooms","alt"=>"Screen Rooms"],
    ["img"=>"images/win-sunroom/solariums.webp","name"=>"Solariums","alt"=>"Solariums"],
    ["img"=>"images/win-sunroom/florida-rooms.webp","name"=>"Florida Rooms","alt"=>"Florida Rooms"],
    ["img"=>"images/win-sunroom/patio-enclosures.webp","name"=>"Patio Enclosures","alt"=>"Patio Enclosures"]
],

"walktub" => [
    ["img"=>"images/win-walktub/installation-and-replacement.webp","name"=>"Installation & replacement","alt"=>"Installation & replacement"],
    ["img"=>"images/win-walktub/maintenance-and-cleaning.webp","name"=>"Maintenance & cleaning","alt"=>"Maintenance & cleaning"],
    ["img"=>"images/win-walktub/hydrotherapy-walk-in-tubs.webp","name"=>"Hydrotherapy walk in tubs","alt"=>"Hydrotherapy walk in tubs"],
    ["img"=>"images/win-walktub/repair-services.webp","name"=>"Repair services","alt"=>"Repair services"],
    ["img"=>"images/win-walktub/safety-and-accessibility-upgrades.webp","name"=>"Safety & accessibility upgrades","alt"=>"Safety & accessibility upgrades"],
    ["img"=>"images/win-walktub/plumbing-and-electrical-services.webp","name"=>"Plumbing & electrical services","alt"=>"Plumbing & electrical services"]
],

"waterdamage" => [
    ["img"=>"images/win-waterdamage/walls-and-ceilings.webp","name"=>"Walls & Ceilings","alt"=>"Walls & Ceilings"],
    ["img"=>"images/win-waterdamage/flooring.webp","name"=>"Flooring","alt"=>"Flooring"],
    ["img"=>"images/win-waterdamage/home-exterior.webp","name"=>"Home Exterior","alt"=>"Home Exterior"],
    ["img"=>"images/win-waterdamage/basements.webp","name"=>"Basements","alt"=>"Basements"],
    ["img"=>"images/win-waterdamage/attic-spaces.webp","name"=>"Attic Spaces","alt"=>"Attic Spaces"],
    ["img"=>"images/win-waterdamage/plumbing-and-utility-areas.webp","name"=>"Plumbing & Utility Areas","alt"=>"Plumbing & Utility Areas"]
],
"window" => [
    ["img"=>"images/win-car/win-1.jpeg","name"=>"Bay & Bow Window","alt"=>"Bay & Bow Window"],
    ["img"=>"images/win-car/win-7.jpg","name"=>"Casement Window","alt"=>"Casement Window"],
    ["img"=>"images/win-car/win-2.jpg","name"=>"Double-Hung Window","alt"=>"Double-Hung Window"],
    ["img"=>"images/win-car/win-6.jpg","name"=>"Sliding Window","alt"=>"Sliding Window"],
    ["img"=>"images/win-car/win-3.jpg","name"=>"Picture Window","alt"=>"Picture Window"],
    ["img"=>"images/win-car/win-4.jpeg","name"=>"Aluminium Window","alt"=>"uPVC Window"]
],

"fencing" => [
    ["img"=>"images/win-fencing/wood-fences.webp","name"=>"Wood Fences","alt"=>"Wood Fences"],
    ["img"=>"images/win-fencing/vinyl-pvc-fences.webp","name"=>"Vinyl/PVC Fences","alt"=>"Vinyl/PVC Fences"],
    ["img"=>"images/win-fencing/chain-link.webp","name"=>"Chain link","alt"=>"Chain link"],
    ["img"=>"images/win-fencing/wrought-iron.webp","name"=>"Wrought Iron","alt"=>"Wrought Iron"],
    ["img"=>"images/win-fencing/steel-aluminum.webp","name"=>"Steel/Aluminum","alt"=>"Steel/Aluminum"],
    ["img"=>"images/win-fencing/barbed-wire.webp","name"=>"Barbed Wire","alt"=>"Barbed Wire"]
],
"carpentry" => [
    ["img"=>"images/win-carpentry/cabinets.webp","name"=>"Cabinets","alt"=>"Cabinets"],
    ["img"=>"images/win-carpentry/custom-furniture.webp","name"=>"Custom Furniture","alt"=>"Custom Furniture"],
    ["img"=>"images/win-carpentry/doors-and-windows.webp","name"=>"Doors & Windows","alt"=>"Doors & Windows"],
    ["img"=>"images/win-carpentry/trim-moulding.webp","name"=>"Trim/Moulding","alt"=>"Trim/Moulding"],
    ["img"=>"images/win-carpentry/flooring.webp","name"=>"Flooring","alt"=>"Flooring"],
    ["img"=>"images/win-carpentry/outdoors.webp","name"=>"Outdoors","alt"=>"Outdoors"]
],
"wallpaper" => [
    ["img"=>"images/win-wallpaper/walls.webp","name"=>"Walls","alt"=>"Walls"],
    ["img"=>"images/win-wallpaper/ceilings.webp","name"=>"Ceilings","alt"=>"Ceilings"],
    ["img"=>"images/win-wallpaper/furniture-surfaces.webp","name"=>"Furniture Surfaces","alt"=>"Furniture Surfaces"],
    ["img"=>"images/win-wallpaper/doors-and-panels.webp","name"=>"Doors & Panels","alt"=>"Doors & Panels"],
    ["img"=>"images/win-wallpaper/kitchen-and-bathroom.webp","name"=>"Kitchen & Bathroom","alt"=>"Kitchen & Bathroom"],
    ["img"=>"images/win-wallpaper/speciality-surfaces.webp","name"=>"Speciality Surfaces","alt"=>"Speciality Surfaces"]
],
"foundation" => [
    ["img"=>"images/win-foundation/foundation-repair.webp","name"=>"Foundation Repair","alt"=>"Foundation Repair"],
    ["img"=>"images/win-foundation/foundation-install.webp","name"=>"Foundation Install","alt"=>"Foundation Install"],
    ["img"=>"images/win-foundation/foundation-leveling.webp","name"=>"Foundation Leveling","alt"=>"Foundation Leveling"],
    ["img"=>"images/win-foundation/foundation-inspection.webp","name"=>"Foundation Inspection","alt"=>"Foundation Inspection"],
    ["img"=>"images/win-foundation/foundation-waterproofing.webp","name"=>"Foundation Waterproofing","alt"=>"Foundation Waterproofing"],
    ["img"=>"images/win-foundation/basements-and-crawl-space.webp","name"=>"Basements & Crawl Space","alt"=>"Basements & Crawl Space"]
],
"garage" => [
    ["img"=>"images/win-garage/garage-remodel.webp","name"=>"Garage Remodel","alt"=>"Garage Remodel"],
    ["img"=>"images/win-garage/garage-door.webp","name"=>"Garage Door","alt"=>"Garage Door"],
    ["img"=>"images/win-garage/garage-construction.webp","name"=>"Garage Construction","alt"=>"Garage Construction"],
    ["img"=>"images/win-garage/garage-expansion.webp","name"=>"Garage Expansion","alt"=>"Garage Expansion"],
],
"christmaslights" => [
    ["img"=>"images/win-christmas/christmas-lights-installation.webp","name"=>"Christmas lights installation","alt"=>"Christmas lights installation"],
    ["img"=>"images/win-christmas/christmas-lights-decorating.webp","name"=>"Christmas lights decorating","alt"=>"Christmas lights decorating"],
    ["img"=>"images/win-christmas/full-property-lighting.webp","name"=>"Full property lighting","alt"=>"Full property lighting"],
    ["img"=>"images/win-christmas/outdoor-and-speciality-lighting.webp","name"=>"Outdoor & Speciality lighting","alt"=>"Outdoor & Speciality lighting"],
    ["img"=>"images/win-christmas/christmas-lights-removal.webp","name"=>"Christmas lights removal","alt"=>"Christmas lights removal"],
    ["img"=>"images/win-christmas/maintenance-and-repair.webp","name"=>"Maintenance & Repair","alt"=>"Maintenance & Repair"]
],
"junkremoval" => [
    ["img"=>"images/win-junkremoval/furniture-and-mattress.webp","name"=>"Furniture & Mattress","alt"=>"Furniture & Mattress"],
    ["img"=>"images/win-junkremoval/appliance-and-electronics.webp","name"=>"Appliance & Electronics","alt"=>"Appliance & Electronics"],
    ["img"=>"images/win-junkremoval/household-and-yard-junk.webp","name"=>"Household & Yard Junk","alt"=>"Household & Yard Junk"],
    ["img"=>"images/win-junkremoval/construction-debris.webp","name"=>"Construction Debris","alt"=>"Construction Debris"],
    ["img"=>"images/win-junkremoval/garage-pickups.webp","name"=>"Garage pickups","alt"=>"Garage pickups"],
    ["img"=>"images/win-junkremoval/equipments-and-oversized-items.webp","name"=>"Equipments & Oversized Items","alt"=>"Equipments & Oversized Items"]
],
"stairlift" => [
    ["img"=>"images/win-stairlift/stairlift-installation.webp","name"=>"Stairlift Installation","alt"=>"Stairlift Installation"],
    ["img"=>"images/win-stairlift/stairlift-repair.webp","name"=>"Stairlift Repair","alt"=>"Stairlift Repair"],
    ["img"=>"images/win-stairlift/stairlift-maintenance-and-servicing.webp","name"=>"Stairlift Maintenance & Servicing","alt"=>"Stairlift Maintenance & Servicing"],
    ["img"=>"images/win-stairlift/stairlift-upgrades-and-replacement.webp","name"=>"Stairlift Upgrades & Replacement","alt"=>"Stairlift Upgrades & Replacement"],
    ["img"=>"images/win-stairlift/outdoor-stairlift-solutions.webp","name"=>"Outdoor Stairlift Solutions","alt"=>"Outdoor Stairlift Solutions"],
    ["img"=>"images/win-stairlift/stairlift-removal-and-relocation.webp","name"=>"Stairlift Removal & Relocation","alt"=>"Stairlift Removal & Relocation"]
],
"brickstonefireplace" => [
    ["img"=>"images/win-brickstonefireplace/wood-burning-fireplaces.webp","name"=>"Wood-Burning Fireplaces","alt"=>"Wood-Burning Fireplaces"],
    ["img"=>"images/win-brickstonefireplace/electric-fireplaces.webp","name"=>"Electric Fireplaces","alt"=>"Electric Fireplaces"],
    ["img"=>"images/win-brickstonefireplace/freestanding-and-stove-fireplaces.webp","name"=>"Freestanding & Stove Fireplaces","alt"=>"Freestanding & Stove Fireplaces"],
    ["img"=>"images/win-brickstonefireplace/built-in-fireplaces-prefab-metal-units.webp","name"=>"Built-In Fireplaces","alt"=>"Built-In Fireplaces"],
    ["img"=>"images/win-brickstonefireplace/masonry-fireplaces-brick-and-stone.webp","name"=>"Masonry Fireplaces","alt"=>"Masonry Fireplaces"]
],
"tennis-court" => [
    ["img"=>"images/win-tennis-court/tennis-court-installation.webp","name"=>"Tennis Court Installation","alt"=>"Tennis Court Installation"],
    ["img"=>"images/win-tennis-court/tennis-court-repair.webp","name"=>"Tennis Court Repair","alt"=>"Tennis Court Repair"],
    ["img"=>"images/win-tennis-court/tennis-court-resurfacing.webp","name"=>"Tennis Court Resurfacing","alt"=>"Tennis Court Resurfacing"],
    ["img"=>"images/win-tennis-court/hard-court-construction.webp","name"=>"Hard Court Construction","alt"=>"Hard Court Construction"],
    ["img"=>"images/win-tennis-court/cushioned-court-upgrades.webp","name"=>"Cushioned Court Upgrades","alt"=>"Cushioned Court Upgrades"],
    ["img"=>"images/win-tennis-court/soft-court-upgrades.webp","name"=>"Soft Court Upgrades","alt"=>"Soft Court Upgrades"]
],
"roomadditions" => [
    ["img"=>"images/win-roomadditions/bedroom-additions.webp","name"=>"Bedroom Additions","alt"=>"Bedroom Additions"],
    ["img"=>"images/win-roomadditions/bathroom-additions.webp","name"=>"Bathroom Additions","alt"=>"Bathroom Additions"],
    ["img"=>"images/win-roomadditions/garage-conversion-addition.webp","name"=>"Garage conversion/Addition","alt"=>"Garage conversion/Addition"],
    ["img"=>"images/win-roomadditions/kitchen-extensions.webp","name"=>"Kitchen Extensions","alt"=>"Kitchen Extensions"],
    ["img"=>"images/win-roomadditions/sunroom-and-patio-enclosures.webp","name"=>"Sunroom & Patio Enclosures","alt"=>"Sunroom & Patio Enclosures"],
    ["img"=>"images/win-roomadditions/guest-house-adu-additions.webp","name"=>"Guest House/ADU Additions","alt"=>"Guest House/ADU Additions"]
],
"hazardous-material" => [
    ["img"=>"images/win-stairlift/stairlift-installation.webp","name"=>"Asbestos Testing/Removal","alt"=>"Asbestos Testing/Removal"],
    ["img"=>"images/win-stairlift/stairlift-repair.webp","name"=>"Lead Paint Inspection/Removal","alt"=>"Lead Paint Inspection/Removal"],
    ["img"=>"images/win-stairlift/stairlift-maintenance-and-servicing.webp","name"=>"Mold Remediation","alt"=>"Mold Remediation"],
    ["img"=>"images/win-stairlift/stairlift-upgrades-and-replacement.webp","name"=>"Radon Testing/Mitigation","alt"=>"Radon Testing/Mitigation"],
    ],
"waterheater" => [
    ["img"=>"images/win-waterheater/tank-water-heaters.webp","name"=>"Tank Water Heaters","alt"=>"Tank Water Heaters"],
    ["img"=>"images/win-waterheater/tankless-water-heaters.webp","name"=>"Tankless Water Heaters","alt"=>"Tankless Water Heaters"],
    ["img"=>"images/win-waterheater/hybrid-heat-pumps.webp","name"=>"Hybrid heat Pumps","alt"=>"Hybrid heat Pumps"],
    ["img"=>"images/win-waterheater/water-heater-repair.webp","name"=>"Water Heater Repair","alt"=>"Water Heater Repair"],
    ["img"=>"images/win-waterheater/water-heater-replacement.webp","name"=>"Water Heater Replacement","alt"=>"Water Heater Replacement"],
    ["img"=>"images/win-waterheater/maintenance-and-flushing.webp","name"=>"Maintenance & Flushing","alt"=>"Maintenance & Flushing"]
],
"landscaping" => [
    ["img"=>"images/win-landscaping/install-design-landscape.webp","name"=>"Install/Design Landscape","alt"=>"Install/Design Landscape"],
    ["img"=>"images/win-landscaping/lawn-care.webp","name"=>"Lawn care","alt"=>"Lawn care"],
    ["img"=>"images/win-landscaping/trees-and-shrubs.webp","name"=>"Trees & Shrubs","alt"=>"Trees & Shrubs"],
    ["img"=>"images/win-landscaping/hardscaping-services.webp","name"=>"Hardscaping Services","alt"=>"Hardscaping Services"],
    ["img"=>"images/win-landscaping/irrigation-and-sprinkler-systems.webp","name"=>"Irrigation & Sprinkler Systems","alt"=>"Irrigation & Sprinkler Systems"],
    ["img"=>"images/win-landscaping/yard-drainage-and-grading-services.webp","name"=>"Yard Drainage & Grading Services","alt"=>"Yard Drainage & Grading Services"]
],
"tree" => [
    ["img"=>"images/win-tree/tree-and-shrub-removal.webp","name"=>"Tree & Shrub Removal","alt"=>"Tree & Shrub Removal"],
    ["img"=>"images/win-tree/tree-and-shrub-health-care.webp","name"=>"Tree & Shrub Health Care","alt"=>"Tree & Shrub Health Care"],
    ["img"=>"images/win-tree/stump-grinding.webp","name"=>"Stump Grinding","alt"=>"Stump Grinding"],
    ["img"=>"images/win-tree/emergency-tree-services.webp","name"=>"Emergency Tree Services","alt"=>"Emergency Tree Services"],
    ["img"=>"images/win-tree/tree-trimming-and-pruning.webp","name"=>"Tree Trimming & Pruning","alt"=>"Tree Trimming & Pruning"],
    ["img"=>"images/win-tree/land-and-lot-clearing-services.webp","name"=>"Land & Lot Clearing Services","alt"=>"Land & Lot Clearing Services"]
],
"securitycameras" => [
    ["img"=>"images/win-securitycameras/wireless-security-camera-systems.webp","name"=>"Wireless Security Camera Systems","alt"=>"Wireless Security Camera Systems"],
    ["img"=>"images/win-securitycameras/cctv-and-surveillance-camera-systems.webp","name"=>"CCTV & Surveillance Camera Systems","alt"=>"CCTV & Surveillance Camera Systems"],
    ["img"=>"images/win-securitycameras/smart-home-security-camera-systems.webp","name"=>"Smart Home Security Camera Systems","alt"=>"Smart Home Security Camera Systems"],
    ["img"=>"images/win-securitycameras/video-doorbell-camera-installation.webp","name"=>"Video Doorbell Camera Installation","alt"=>"Video Doorbell Camera Installation"],
    ["img"=>"images/win-securitycameras/night-vision-security-camera-systems.webp","name"=>"Night Vision Security Camera Systems","alt"=>"Night Vision Security Camera Systems"],
    ["img"=>"images/win-securitycameras/remote-video-monitoring-systems.webp","name"=>"Remote Video Monitoring Systems","alt"=>"Remote Video Monitoring Systems"]
],

"appliance-repair" => [
    ["img"=>"images/win-appliance-repair/dishwasher.webp","name"=>"Dishwasher","alt"=>"Dishwasher"],
    ["img"=>"images/win-appliance-repair/refrigerator.webp","name"=>"Refrigerator","alt"=>"Refrigerator"],
    ["img"=>"images/win-appliance-repair/oven-and-cooktop.webp","name"=>"Oven & Cooktop","alt"=>"Oven & Cooktop"],
    ["img"=>"images/win-appliance-repair/microwave-oven.webp","name"=>"Microwave Oven","alt"=>"Microwave Oven"],
    ["img"=>"images/win-appliance-repair/washing-machine.webp","name"=>"Washing Machine","alt"=>"Washing Machine"],
    ["img"=>"images/win-appliance-repair/dryer.webp","name"=>"Dryer","alt"=>"Dryer"]
],
"carpentry-framing" => [
    ["img"=>"images/win-carpentry-framing/new-construction-and-structural-framing.webp","name"=>"New Construction & Structural Framing","alt"=>"New Construction & Structural Framing"],
    ["img"=>"images/win-carpentry-framing/wall-basement-and-interior-framing.webp","name"=>"Wall, Basement & Interior Framing","alt"=>"Wall, Basement & Interior Framing"],
    ["img"=>"images/win-carpentry-framing/roof-and-attic-framing.webp","name"=>"Roof & Attic Framing","alt"=>"Roof & Attic Framing"],
    ["img"=>"images/win-carpentry-framing/decks-and-outdoor-framing.webp","name"=>"Decks & Outdoor Framing","alt"=>"Decks & Outdoor Framing"],
    ["img"=>"images/win-carpentry-framing/doors-and-windows.webp","name"=>"Doors & Windows","alt"=>"Doors & Windows"],
    ["img"=>"images/win-carpentry-framing/framing-repairs.webp","name"=>"Framing Repairs","alt"=>"Framing Repairs"]
],
"insulation" => [
    ["img"=>"images/win-insulation/attic-insulation.webp","name"=>"Attic Insulation","alt"=>"Attic Insulation"],
    ["img"=>"images/win-insulation/wall-insulation.webp","name"=>"Wall Insulation","alt"=>"Wall Insulation"],
    ["img"=>"images/win-insulation/basement-crawl-space.webp","name"=>"Basement/Crawl Space","alt"=>"Basement/Crawl Space"],
    ["img"=>"images/win-insulation/rim-joist.webp","name"=>"Rim Joist","alt"=>"Rim Joist"],
    ["img"=>"images/win-insulation/vapour-barrier-installation.webp","name"=>"Vapour Barrier Installation","alt"=>"Vapour Barrier Installation"],
    ["img"=>"images/win-insulation/insulation-removal-replacement.webp","name"=>"Insulation Removal/Replacement","alt"=>"Insulation Removal/Replacement"]
],
"drywall" => [
    ["img"=>"images/win-drywall/drywall-installation.webp","name"=>"Drywall Installation","alt"=>"Drywall Installation"],
    ["img"=>"images/win-drywall/drywall-repair.webp","name"=>"Drywall Repair","alt"=>"Drywall Repair"],
    ["img"=>"images/win-drywall/drywall-finishing-and-taping.webp","name"=>"Drywall Finishing & Taping","alt"=>"Drywall Finishing & Taping"],
    ["img"=>"images/win-drywall/drywall-texture-services.webp","name"=>"Drywall Texture Services","alt"=>"Drywall Texture Services"],
    ["img"=>"images/win-drywall/ceiling-drywall-services.webp","name"=>"Ceiling Drywall Services","alt"=>"Ceiling Drywall Services"],
    ["img"=>"images/win-drywall/drywall-replacement.webp","name"=>"Drywall Replacement","alt"=>"Drywall Replacement"]
],
"dryrot" => [
    ["img"=>"images/win-dryrot/exterior-siding.webp","name"=>"Exterior Siding","alt"=>"Exterior Siding"],
    ["img"=>"images/win-dryrot/decking.webp","name"=>"Decking","alt"=>"Decking"],
    ["img"=>"images/win-dryrot/flooring.webp","name"=>"Flooring","alt"=>"Flooring"],
    ["img"=>"images/win-dryrot/walls.webp","name"=>"Walls","alt"=>"Walls"],
    ["img"=>"images/win-dryrot/window-door-frame.webp","name"=>"Window/Door Frame","alt"=>"Window/Door Frame"],
    ["img"=>"images/win-dryrot/basement-crawl-space.webp","name"=>"Basement/Crawl Space","alt"=>"Basement/Crawl Space"]
],
"weldcutmetalstructure" => [
    ["img"=>"images/win-stairlift/stairlift-installation.webp","name"=>"Metal Fabrication","alt"=>"Metal Fabrication"],
    ["img"=>"images/win-stairlift/stairlift-repair.webp","name"=>"Welding Services","alt"=>"Welding Services"],
    ["img"=>"images/win-stairlift/stairlift-maintenance-and-servicing.webp","name"=>"Structural Fabrication","alt"=>"Structural Fabrication"],
    ["img"=>"images/win-stairlift/stairlift-upgrades-and-replacement.webp","name"=>"CNC Cutting","alt"=>"CNC Cutting"],
    ["img"=>"images/win-stairlift/outdoor-stairlift-solutions.webp","name"=>"Repair & Modification","alt"=>"Repair & Modification"],
    ["img"=>"images/win-stairlift/stairlift-removal-and-relocation.webp","name"=>"Custom Outdoor Fabrication","alt"=>"Custom Outdoor Fabrication"]
],
"sheds" => [
    ["img"=>"images/win-sheds/storage-shed.webp","name"=>"Storage Shed","alt"=>"Storage Shed"],
    ["img"=>"images/win-sheds/garden-shed.webp","name"=>"Garden Shed","alt"=>"Garden Shed"],
    ["img"=>"images/win-sheds/workshop-shed.webp","name"=>"Workshop Shed","alt"=>"Workshop Shed"],
    ["img"=>"images/win-sheds/utility-shed.webp","name"=>"Utility Shed","alt"=>"Utility Shed"],
    ["img"=>"images/win-sheds/backyard-shed.webp","name"=>"Backyard Shed","alt"=>"Backyard Shed"],
    ["img"=>"images/win-sheds/custom-shed.webp","name"=>"Custom Shed","alt"=>"Custom Shed"]
],
"pool" => [
    ["img"=>"images/win-stairlift/stairlift-installation.webp","name"=>"Pool Installation","alt"=>"Pool Installation"],
    ["img"=>"images/win-stairlift/stairlift-repair.webp","name"=>"Pool Cleaning & Maintenance","alt"=>"Pool Cleaning & Maintenance"],
    ["img"=>"images/win-stairlift/stairlift-maintenance-and-servicing.webp","name"=>"Pool Repair Services","alt"=>"Pool Repair Services"],
    ["img"=>"images/win-stairlift/stairlift-upgrades-and-replacement.webp","name"=>"Pool Renovation & Upgrades","alt"=>"Pool Renovation & Upgrades"],
    ["img"=>"images/win-stairlift/outdoor-stairlift-solutions.webp","name"=>"Pool Safety & Accessories","alt"=>"Pool Safety & Accessories"],
    ["img"=>"images/win-stairlift/stairlift-removal-and-relocation.webp","name"=>"Equipment & System Services","alt"=>"Equipment & System Services"]
],
"mirrorinstall" => [
    ["img"=>"images/win-mirrorinstall/mirror-installation.webp","name"=>"Mirror Installation","alt"=>"Mirror Installation"],
    ["img"=>"images/win-mirrorinstall/repair-and-resilvering.webp","name"=>"Repair & Resilvering","alt"=>"Repair & Resilvering"],
    ["img"=>"images/win-mirrorinstall/mirror-replacement.webp","name"=>"Mirror Replacement","alt"=>"Mirror Replacement"],
    ["img"=>"images/win-mirrorinstall/led-backlit-mirror.webp","name"=>"LED/Backlit Mirror","alt"=>"LED/Backlit Mirror"],
    ["img"=>"images/win-mirrorinstall/frameless-mirrors.webp","name"=>"Frameless Mirrors","alt"=>"Frameless Mirrors"],
    ["img"=>"images/win-mirrorinstall/decorative-and-antique.webp","name"=>"Decorative & Antique","alt"=>"Decorative & Antique"],
    ["img"=>"images/win-mirrorinstall/wall-to-wall-mirror.webp","name"=>"Wall to Wall Mirror","alt"=>"Wall to Wall Mirror"],
    ["img"=>"images/win-mirrorinstall/custom-mirrors.webp","name"=>"Custom Mirrors","alt"=>"Custom Mirrors"],
    ["img"=>"images/win-mirrorinstall/bathroom-vanity-mirror.webp","name"=>"Bathroom/Vanity Mirror","alt"=>"Bathroom/Vanity Mirror"]
],
"glassrepair" => [
    ["img"=>"images/win-glassrepair/shower-doors.webp","name"=>"Shower doors","alt"=>"Shower doors"],
    ["img"=>"images/win-glassrepair/sliding-glass-doors.webp","name"=>"Sliding glass doors","alt"=>"Sliding glass doors"],
    ["img"=>"images/win-glassrepair/glass-railings.webp","name"=>"Glass railings","alt"=>"Glass railings"],
    ["img"=>"images/win-glassrepair/glass-wall-partitions.webp","name"=>"Glass wall partitions","alt"=>"Glass wall partitions"],
    ["img"=>"images/win-glassrepair/glass-table-tops.webp","name"=>"Glass table tops","alt"=>"Glass table tops"],
    ["img"=>"images/win-glassrepair/kitchen-backsplash-glass.webp","name"=>"Kitchen backsplash glass","alt"=>"Kitchen backsplash glass"]
],
"cleaning" => [
    ["img"=>"images/win-cleaning/house-cleaning.webp","name"=>"House Cleaning","alt"=>"House Cleaning"],
    ["img"=>"images/win-cleaning/deep-cleaning.webp","name"=>"Deep Cleaning","alt"=>"Deep Cleaning"],
    ["img"=>"images/win-cleaning/move-in-and-move-out.webp","name"=>"Move-In & Move-Out","alt"=>"Move-In & Move-Out"],
    ["img"=>"images/win-cleaning/carpet-rug-upholstery.webp","name"=>"Carpet/Rug/Upholstery","alt"=>"Carpet/Rug/Upholstery"],
    ["img"=>"images/win-cleaning/post-construction.webp","name"=>"Post Construction","alt"=>"Post Construction"],
    ["img"=>"images/win-cleaning/kitchen-and-appliances.webp","name"=>"Kitchen & Appliances","alt"=>"Kitchen & Appliances"],
    ["img"=>"images/win-cleaning/bathroom.webp","name"=>"Bathroom","alt"=>"Bathroom"],
    ["img"=>"images/win-cleaning/window-and-glass.webp","name"=>"Window & Glass","alt"=>"Window & Glass"],    
    ["img"=>"images/win-cleaning/floor-and-surface.webp","name"=>"Floor & Surface","alt"=>"Floor & Surface"],
    
],
"concrete" => [
    ["img"=>"images/win-concrete/driveways-installation.webp","name"=>"Driveways Installation","alt"=>"Driveways Installation"],
    ["img"=>"images/win-concrete/concrete-crack-repairs.webp","name"=>"Concrete Crack Repairs","alt"=>"Concrete Crack Repairs"],
    ["img"=>"images/win-concrete/patio-installation.webp","name"=>"Patio Installation","alt"=>"Patio Installation"],
    ["img"=>"images/win-concrete/stamped-concrete.webp","name"=>"Stamped Concrete","alt"=>"Stamped Concrete"],
    ["img"=>"images/win-concrete/concrete-resurfacing.webp","name"=>"Concrete Resurfacing","alt"=>"Concrete Resurfacing"],
    ["img"=>"images/win-concrete/foundation-repair.webp","name"=>"Foundation Repair","alt"=>"Foundation Repair"]
],
"stonepolish" => [
    ["img"=>"images/win-stonepolish/stone-polishing.webp","name"=>"Stone Polishing","alt"=>"Stone Polishing"],
    ["img"=>"images/win-stonepolish/floor-restoration.webp","name"=>"Floor Restoration","alt"=>"Floor Restoration"],
    ["img"=>"images/win-stonepolish/stone-repair-services.webp","name"=>"Stone Repair Services","alt"=>"Stone Repair Services"],
    ["img"=>"images/win-stonepolish/cleaning-&-maintenance.webp","name"=>"Cleaning & Maintenance","alt"=>"Cleaning & Maintenance"],
    ["img"=>"images/win-stonepolish/kitchen-&-bathroom-stone.webp","name"=>"Kitchen & Bathroom Stone","alt"=>"Kitchen & Bathroom Stone"],
    ["img"=>"images/win-stonepolish/outdoor-stone-services.webp","name"=>"Outdoor Stone Services","alt"=>"Outdoor Stone Services"]
],
"masonary" => [
    ["img"=>"images/win-masonary/brick-masonry.webp","name"=>"Brick Masonry","alt"=>"Brick Masonry"],
    ["img"=>"images/win-masonary/stone-masonry.webp","name"=>"Stone Masonry","alt"=>"Stone Masonry"],
    ["img"=>"images/win-masonary/concrete-block-masonry.webp","name"=>"Concrete Block Masonry","alt"=>"Concrete Block Masonry"],
    ["img"=>"images/win-masonary/chimney-masonry.webp","name"=>"Chimney Masonry","alt"=>"Chimney Masonry"],
    ["img"=>"images/win-masonary/foundation-masonry.webp","name"=>"Foundation Masonry","alt"=>"Foundation Masonry"],
    ["img"=>"images/win-masonary/hardscape-masonry.webp","name"=>"Hardscape Masonry","alt"=>"Hardscape Masonry"],
    ["img"=>"images/win-masonary/masonry-waterproofing.webp","name"=>"Masonry Waterproofing","alt"=>"Masonry Waterproofing"],
    ["img"=>"images/win-masonary/decorative-masonry.webp","name"=>"Decorative Masonry","alt"=>"Decorative Masonry"],
    ["img"=>"images/win-masonary/masonry-restoration.webp","name"=>"Masonry Restoration","alt"=>"Masonry Restoration"]
],
"stonemasonary" => [
    ["img"=>"images/win-stonemasonary/retaining-walls.webp","name"=>"Retaining Walls","alt"=>"Retaining Walls"],
    ["img"=>"images/win-stonemasonary/driveway.webp","name"=>"Driveway","alt"=>"Driveway"],
    ["img"=>"images/win-stonemasonary/stone-siding.webp","name"=>"Stone Siding","alt"=>"Stone Siding"],
    ["img"=>"images/win-stonemasonary/hardscaping.webp","name"=>"Hardscaping","alt"=>"Hardscaping"],
    ["img"=>"images/win-stonemasonary/fireplace-&-chimney.webp","name"=>"Fireplace & Chimney","alt"=>"Fireplace & Chimney"],
    ["img"=>"images/win-stonemasonary/stone-restoration.webp","name"=>"Stone Restoration","alt"=>"Stone Restoration"]
],
"brickwork" => [
    ["img"=>"images/win-brickwork/retaining-walls.webp","name"=>"Retaining Walls","alt"=>"Retaining Walls"],
    ["img"=>"images/win-brickwork/driveway.webp","name"=>"Driveway","alt"=>"Driveway"],
    ["img"=>"images/win-brickwork/brick-siding.webp","name"=>"Brick Siding","alt"=>"Brick Siding"],
    ["img"=>"images/win-brickwork/hardscaping.webp","name"=>"Hardscaping","alt"=>"Hardscaping"],
    ["img"=>"images/win-brickwork/fireplace-&-chimney.webp","name"=>"Fireplace & Chimney","alt"=>"Fireplace & Chimney"],
    ["img"=>"images/win-brickwork/brickwork-restoration.webp","name"=>"Brickwork Restoration","alt"=>"Brickwork Restoration"]
],

"ventilation" => [
    ["img"=>"../images/win-ventilation/whole-house-ventilation-installation.png","name"=>"Whole-House Ventilation Installation","alt"=>"Whole house ventilation installation improving fresh airflow and indoor comfort","title"=>"Whole House Ventilation Installation"],
    
    ["img"=>"../images/win-ventilation/ductwork.png","name"=>"Ductwork","alt"=>"HVAC ductwork services supporting balanced airflow throughout the home","title"=>"HVAC Ductwork Services"],
    
    ["img"=>"../images/win-ventilation/indoor-air-quality.png","name"=>"Indoor Air Quality","alt"=>"Indoor air quality services helping reduce airborne pollutants and improve home air","title"=>"Indoor Air Quality Services"],
    
    ["img"=>"../images/win-ventilation/exhaust-fan-installation-and-repair.png","name"=>"Exhaust Fan Installation & Repair","alt"=>"Bathroom and kitchen exhaust fan installation and repair for better moisture control","title"=>"Exhaust Fan Installation and Repair"],
    
    ["img"=>"../images/win-ventilation/erv-and-hrv-installation.png","name"=>"ERV & HRV Installation","alt"=>"ERV and HRV installation providing balanced fresh air ventilation for energy-efficient homes","title"=>"ERV and HRV Installation"],
    
    ["img"=>"../images/win-ventilation/ventilation-repair-and-tune-ups.png","name"=>"Ventilation Repair & Tune-Ups","alt"=>"Professional ventilation repair and maintenance improving airflow and system performance","title"=>"Ventilation Repair and Maintenance"]
],
"heating-services" => [
    ["img"=>"../images/win-heating-services/furnace-repair-and-installation.png","name"=>"Furnace Repair & Installation","alt"=>"Professional furnace repair and installation service"],
    ["img"=>"../images/win-heating-services/boiler-repair-and-installation.png","name"=>"Boiler Repair & Installation","alt"=>"Professional boiler repair and installation service"],
    ["img"=>"../images/win-heating-services/heat-pump-heating-services.jpg","name"=>"Heat Pump Heating Services","alt"=>"Professional heat pump heating service for residential homes"],
    ["img"=>"../images/win-heating-services/heating-system-maintenance-and-tune-ups.png","name"=>"Heating System Maintenance & Tune-Ups","alt"=>"Heating professional performing residential heating system maintenance"],
    ["img"=>"../images/win-heating-services/radiator-repair-and-replacement.png","name"=>"Radiator Repair And  Replacement","alt"=>"Heating professional providing emergency heating repair"],
    ["img"=>"../images/win-heating-services/thermostat-installation-and-repair.png","name"=>"Thermostat Installation & Repair","alt"=>"Professional thermostat installation and repair service"]
],
"air-conditioning" => [
    ["img"=>"../images/win-air-conditioning/ac-installation.png","name"=>"AC Installation","alt"=>"AC Installation"],
    ["img"=>"../images/win-air-conditioning/ac-maintenance.png","name"=>"AC Maintenance","alt"=>"AC Maintenance"],
    ["img"=>"../images/win-air-conditioning/central-ac-installation.png","name"=>"Central AC Installation","alt"=>"Central AC Installation"],
    ["img"=>"../images/win-air-conditioning/filter-replacement.png","name"=>"Filter Replacement","alt"=>"Filter Replacement"],
    ["img"=>"../images/win-air-conditioning/ductless-installation-in-ac.png","name"=>"Ductless Installation in AC","alt"=>"Ductless Installation in AC"],
    ["img"=>"../images/win-air-conditioning/thermostat-repair.jpg","name"=>"Thermostat Repair","alt"=>"Thermostat Repair"]
],
];
/* MATCH */
$page = 'solar';

/* SORT KEYS BY LENGTH */
$keys = array_keys($data);

usort($keys, function($a, $b) {
    return strlen($b) - strlen($a);
});

/* MATCH */
foreach ($keys as $key) {

    if (strpos($slug, $key) !== false) {
        $page = $key;
        break;
    }
}
$items = $data[$page] ?? $data['solar'];
$count = count($items);

/* CARD */
function card($item){
    $title = !empty($item['title']) ? ' title="'.htmlspecialchars($item['title']).'"' : '';

    return '
    <div class="card-item">
      <div class="window-card">
        <img src="'.$item['img'].'" alt="'.htmlspecialchars($item['alt']).'"'.$title.' loading="lazy">
        <div class="window-overlay">
          <h3 class="window-name">'.$item['name'].'</h3>
        </div>
      </div>
    </div>';
}

?>

<!-- LEFT -->
<div class="col-lg-8">

<?php if($count == 3){ ?>

<!-- ðŸ”¥ YOUR EXACT SOLAR DESIGN -->
<div class="row gy-4" id="gallery">

  <div class="col-lg-7">
    <div class="row gy-4">
      <?php for($i=0;$i<2;$i++): ?>
      <div class="col-lg-12"><?= card($items[$i]); ?></div>
      <?php endfor; ?>
    </div>
  </div>

  <div class="col-lg-5">
    <div class="h-100"><?= card($items[2]); ?></div>
  </div>

</div>

<?php } elseif($count == 5){ ?>

<div class="gallery grid-5" id="gallery">
  <div class="left">
    <?php for($i=0;$i<4;$i++) echo card($items[$i]); ?>
  </div>
  <div class="right">
    <?= card($items[4]); ?>
  </div>
</div>

<?php } elseif($count == 4){ ?>

<div class="gallery grid-4" id="gallery">
  <?php foreach($items as $item) echo card($item); ?>
</div>

<?php } else { ?>

<div class="gallery grid-default" id="gallery">
  <?php foreach($items as $item) echo card($item); ?>
</div>

<?php } ?>

</div>

<!-- RIGHT -->
<!-- Quote Form -->
        <div class="col-lg-4">
          <div class="quote-form-card" id="formBox">
            <div class="form-header">
              <div class="form-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
              </div>
              <div>
                <h4> Get Quote</h4>
              </div>
            </div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/category-form.php'; ?>             </div>
        </div>
</div>

<script>
function syncGalleryHeight() {

    if (window.innerWidth < 768) {
        const items = document.querySelectorAll('#gallery .card-item');
        items.forEach(item => item.style.height = "auto");
        return;
    }

    const form = document.getElementById('formBox');
    const gallery = document.getElementById('gallery');

    if (!form || !gallery) return;

    let formHeight = form.offsetHeight;
    let gap = 20;

    const items = gallery.querySelectorAll('.card-item');
    const count = items.length;

    if(count == 4 || count == 6 || count == 9){
        let rows = (count == 9) ? 3 : 2;
        let rowHeight = (formHeight - (gap * (rows - 1))) / rows;

        items.forEach(item => {
            item.style.height = rowHeight + "px";
        });
    }

    else if(count == 3){
        let leftItems = gallery.querySelectorAll('.col-lg-7 .card-item');
        let rightItem = gallery.querySelector('.col-lg-5 .card-item');

        let leftHeight = (formHeight - gap) / 2;

        leftItems.forEach(item => {
            item.style.height = leftHeight + "px";
        });

        if(rightItem){
            rightItem.style.height = formHeight + "px";
        }
    }

    else if(count == 5){
        let leftItems = gallery.querySelectorAll('.left .card-item');
        let rightItem = gallery.querySelector('.right .card-item');

        let leftHeight = (formHeight - gap) / 2;

        leftItems.forEach(item => {
            item.style.height = leftHeight + "px";
        });

        if(rightItem){
            rightItem.style.height = formHeight + "px";
        }
    }
}

window.addEventListener("load", syncGalleryHeight);
window.addEventListener("resize", syncGalleryHeight);
</script>

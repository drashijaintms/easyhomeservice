const projects = [
  {
    key:"windows",name:"Windows",icon:"https://easyhomeservice.com/images/s1_help_icon1.webp",bgImage:"assets/window.png",
    steps:[
      {type:"choice",title:"What kind of window project is this?",help:"Choose the closest match.",options:[o("Replace existing windows","Most common",450,850),o("New window openings","Includes structural work",900,1600),o("Repair windows","Glass, sash or hardware",180,480)]},
      number("How many windows need work?","Enter the approximate number of windows.","windows",8,1,80,320,760),
      {type:"choice",title:"Which frame material do you prefer?",help:"Material changes both appearance and cost.",options:[o("Vinyl","Affordable and low maintenance",0,0),o("Fiberglass","Strong and energy efficient",150,300),o("Wood","Classic natural finish",280,520),o("Composite","Premium durability",340,620)]},
      {type:"choice",title:"What glass package do you want?",help:"Choose the closest efficiency level.",options:[o("Double-pane","Standard efficiency",0,0),o("Low-E insulated","Improved efficiency",130,250),o("Triple-pane","Highest efficiency",260,480)]},zipStep()
    ]
  },
  {
    key:"hvac",name:"HVAC",icon:"https://easyhomeservice.com/images/s1_help_icon4.webp",bgImage:"assets/hvac.png",
    steps:[
      {type:"choice",title:"What system do you need?",help:"Select the closest project type.",options:[o("Cooling only","Central air conditioning",3800,7200),o("Heating only","Furnace or boiler",3200,7800),o("Heating and cooling","Complete matched system",6500,13500),o("Heat pump","Efficient all-in-one system",5800,12000)]},
      number("What is your home's heated area?","A rough square-foot figure is enough.","sq ft",1800,500,10000,.35,.8),
      {type:"choice",title:"What is the ductwork condition?",help:"New or repaired ducts can affect installation cost.",options:[o("Existing ducts are good","No major changes expected",0,0),o("Some repairs needed","Sealing or short runs",700,2200),o("New ductwork needed","Full or major replacement",3500,8500),o("No ducts / ductless","Mini-split installation",1200,3800)]},
      {type:"choice",title:"What efficiency level do you prefer?",help:"Higher-efficiency equipment costs more initially.",options:[o("Standard efficiency","Value-focused equipment",0,0),o("High efficiency","Lower operating costs",1100,2800),o("Premium efficiency","Top-tier performance",2500,5200)]},zipStep()
    ]
  },
  {
    key:"roofing",name:"Roofing",icon:"https://easyhomeservice.com/images/s1_help_icon1.webp",bgImage:"assets/roofing.png",
    steps:[
      number("What is the approximate roof area?","If unsure, use your home's square footage as a starting point.","sq ft",2000,500,10000,4.5,7.5),
      {type:"choice",title:"How many stories is your home?",help:"Height affects access, safety and labor.",options:[o("One story","Easy access",0,0),o("Two stories","Additional setup",900,2200),o("Three or more","Special access",2200,4800)]},
      {type:"choice",title:"Which roofing material do you want?",help:"Choose your preferred or current roof type.",options:[o("Asphalt shingles","Most popular",0,0),o("Metal roofing","Long-lasting upgrade",6000,22000),o("Wood shake","Natural appearance",7000,15000),o("Tile or slate","Premium material",12000,38000)]},
      {type:"choice",title:"How complex is the roof shape?",help:"Valleys, dormers and steep pitches add labor.",options:[o("Simple","Few slopes or penetrations",0,0),o("Moderate","Some valleys or dormers",1400,3600),o("Complex","Steep or many rooflines",3500,8500)]},zipStep()
    ]
  },
  {
    key:"siding",name:"Siding",icon:"https://easyhomeservice.com/images/iconsiding.svg",bgImage:"assets/Siding.png",
    steps:[
      number("How much exterior area needs siding?","Enter the approximate wall area.","sq ft",1800,300,10000,3.2,6.3),
      {type:"choice",title:"Which siding material do you prefer?",help:"You can change this later to compare ranges.",options:[o("Vinyl","Affordable and versatile",0,0),o("Fiber cement","Durable and fire resistant",4800,9800),o("Engineered wood","Warm wood appearance",3500,8200),o("Metal","Modern and long-lasting",6200,14500)]},
      {type:"choice",title:"Is this full or partial replacement?",help:"Choose the closest project scope.",options:[o("Partial replacement","One wall or damaged areas",-1600,-600),o("Full replacement","All exterior walls",0,0)]},
      {type:"choice",title:"Does old siding need removal?",help:"Removal and disposal add labor.",options:[o("No","Ready for installation",0,0),o("Yes","Remove and dispose",1800,5200),o("Not sure","Use a moderate allowance",900,2600)]},zipStep()
    ]
  },
  {
    key:"showers",name:"Showers",icon:"https://easyhomeservice.com/images/iconshowerglassinstallationdoor.svg",bgImage:"assets/Showers.png",
    steps:[
      {type:"choice",title:"Which shower style do you want?",help:"Choose the style closest to your plan.",options:[o("Tub-to-shower conversion","Uses the existing footprint",2100,5200),o("Walk-in shower","Low threshold entry",3000,10200),o("Glass enclosure shower","Frameless or semi-frameless",4200,12400),o("Shower/tub combo","Flexible family option",3200,8900)]},
      {type:"choice",title:"What shower size are you planning?",help:"Larger showers need more material and labor.",options:[o("Small — about 32×32","Compact shower",0,0),o("Medium — about 36×48","Typical replacement",1800,4000),o("Large — 48×60 or more","Spacious custom shower",4200,8500)]},
      {type:"choice",title:"Which wall and base finish?",help:"Select the closest finish level.",options:[o("Acrylic / prefab","Budget-friendly",0,0),o("Ceramic or porcelain tile","Popular mid-range",1600,4200),o("Natural stone or mosaic","Premium custom finish",4800,11000)]},
      {type:"choice",title:"Add upgraded fixtures?",help:"This can include a rain head, bench or storage niche.",options:[o("Standard fixtures","Basic head and controls",0,0),o("Fixture upgrade","Premium head and valve",450,1400),o("Full accessory package","Fixtures, bench and storage",1200,3200)]},zipStep()
    ]
  },
  {
    key:"gutters",name:"Gutters",icon:"https://easyhomeservice.com/images/s1_help_icon7.png",bgImage:"assets/Gutters.png",
    steps:[
      number("How many linear feet of gutter?","A typical home often needs 120–250 linear feet.","linear ft",180,40,1200,8,14),
      {type:"choice",title:"Which gutter material do you prefer?",help:"Seamless aluminum is the most common choice.",options:[o("Aluminum","Popular and rust resistant",0,0),o("Steel","Strong in harsh weather",900,2400),o("Copper","Premium appearance",3500,9000),o("Vinyl","Budget-friendly",-500,-150)]},
      {type:"choice",title:"How many stories is your home?",help:"Height affects access and installation time.",options:[o("One story","Easy access",0,0),o("Two stories","Additional safety setup",450,1200),o("Three or more","Special access",1100,2600)]},
      {type:"choice",title:"Do you want gutter guards?",help:"Guards reduce leaf and debris buildup.",options:[o("No guards","Gutters only",0,0),o("Basic screens","Entry-level protection",500,1200),o("Premium guards","High-performance system",1600,3800)]},zipStep()
    ]
  },
  {
    key:"bathtubs",name:"Bathtubs",icon:"https://easyhomeservice.com/images/bathtub.svg",bgImage:"assets/bathtub.png",
    steps:[
      {type:"choice",title:"Which bathtub style do you want?",help:"Choose the closest style.",options:[o("Alcove tub","Standard three-wall install",1200,3600),o("Freestanding tub","Statement design",2200,6500),o("Walk-in tub","Accessible bathing",6500,15000),o("Whirlpool tub","Jetted spa experience",3800,9200)]},
      {type:"choice",title:"Which tub material?",help:"Material influences weight, feel and durability.",options:[o("Acrylic","Lightweight and popular",0,0),o("Fiberglass","Most affordable",-350,-100),o("Cast iron","Heavy and durable",1200,3000),o("Stone composite","Premium look and feel",2200,5500)]},
      {type:"choice",title:"Will plumbing move?",help:"Keeping the same layout helps control costs.",options:[o("No layout change","Use current connections",0,0),o("Minor plumbing changes","Adjust nearby lines",600,1800),o("Relocate the tub","Move drain and supply",1800,4800)]},
      {type:"choice",title:"Does an old tub need removal?",help:"Includes demolition and disposal allowance.",options:[o("No","New installation area",0,0),o("Yes","Remove existing tub",450,1400)]},zipStep()
    ]
  },
  {
    key:"bathrooms",name:"Bathrooms",icon:"https://easyhomeservice.com/images/s1_help_icon5.png",bgImage:"assets/Bathrooms.png",
    steps:[
      {type:"choice",title:"Choose your shower or tub plan",help:"You can skip any component you are keeping.",options:[o("Keep existing","No shower or tub work",0,0),o("New tub or shower","Standard replacement",3200,8900),o("Custom walk-in shower","Tile and glass enclosure",6500,15000)]},
      {type:"choice",title:"Are you replacing the toilet?",help:"Choose the closest fixture level.",options:[o("Keep existing","No toilet work",0,0),o("Floor-mounted toilet","Standard replacement",550,1300),o("Wall-mounted toilet","Premium installation",1400,3500)]},
      {type:"choice",title:"What cabinetry do you want?",help:"Cabinetry and vanity installation can be skipped.",options:[o("Keep existing","No cabinetry work",0,0),o("Two-door vanity","Compact bathroom vanity",900,2600),o("Four-door cabinetry","Added bathroom storage",2200,5200)]},
      {type:"choice",title:"Choose a sink option",help:"Select the closest match.",options:[o("Keep existing","No sink work",0,0),o("Drop-in sink","Porcelain or stainless",450,1200),o("Pedestal sink","Space-saving style",700,1700),o("Double vanity sinks","Primary bathroom upgrade",1500,3800)]},
      {type:"choice",title:"Choose lighting and accessories",help:"Finish the room with common upgrades.",options:[o("Keep existing","No lighting work",0,0),o("Mirror and vanity lights","Simple refresh",650,1800),o("Recessed lights + accessories","Full finishing package",1600,4200)]},zipStep()
    ]
  },
  {
    key:"solar",name:"Solar",icon:"https://easyhomeservice.com/images/s1_help_icon3.png",bgImage:"assets/solar.png",
    steps:[
      {type:"choice",title:"What is your primary goal for solar?",help:"Helps determine the offset percentage.",options:[o("Full electric bill coverage (100% offset)","Best long-term value",6000,7500),o("Partial electric bill coverage (50-70%)","Balanced budget",3500,4500),o("Supplement / backup power only","Backup utility supply",1500,2500)]},
      number("What is your home's square footage?","Helps estimate the available roof space.","sq ft",1500,500,10000,9,11),
      {type:"choice",title:"Which roof material type do you have?",help:"Different roof materials require specialized mounting hardware.",options:[o("Asphalt shingles","Standard installation",0,0),o("Metal / standing seam","Direct clamp mounting",1200,2800),o("Flat roof","Tilt racking required",1500,3500),o("Clay / concrete tiles","Tile hooks required",2200,4800)]},
      {type:"choice",title:"Add solar battery storage (e.g. Tesla Powerwall)?",help:"Battery backups store surplus energy for night use or blackouts.",options:[o("No, grid-tied only","Standard solar connection",0,0),o("Yes, 1 battery","For critical backup loads",9000,13000),o("Yes, 2+ batteries","Whole home backup coverage",17000,25000)]},zipStep()
    ]
  },
  {
    key:"home-warranty",name:"Home Warranty",icon:"https://easyhomeservice.com/images/iconhomewarranty.svg",bgImage:"assets/home-warranty.png",
    steps:[
      {type:"choice",title:"Which coverage level do you need?",help:"Choose basic or comprehensive systems & appliances protection.",options:[o("Basic Plan (Essential Systems & Appliances)","Covers heating, plumbing, fridge, oven",300,600),o("Comprehensive Plan (All Systems + Add-ons)","Includes pools, spas, secondary equipment",600,1200)]},
      {type:"choice",title:"Which service call fee tier do you prefer?",help:"A higher service fee lowers your monthly/annual premium.",options:[o("$75 Service Fee","Higher premium, lower out-of-pocket claim cost",100,150),o("$100 Service Fee","Standard premium coverage balance",0,0),o("$125 Service Fee","Lowest premium, higher out-of-pocket claim cost",-100,-50)]},
      {type:"choice",title:"Select any optional add-on coverages",help:"Add protection for items not covered in standard plans.",options:[o("No add-ons needed","Standard base plan",0,0),o("Pool & Spa coverage","Adds coverage for heater & pumps",150,250),o("Septic & Well Pump coverage","Adds septic tank & well system",100,200),o("Second Refrigerator & Extra HVAC","Adds secondary appliances & units",80,150)]},
      {type:"choice",title:"What is the size and age of your home?",help:"Larger or older homes have higher repair risks.",options:[o("Standard size (<2,500 sq ft) & newer home","No additional risk premium",0,0),o("Large size (2,500+ sq ft) or older home (15+ years)","Additional coverage adjustments",120,250)]},zipStep()
    ]
  }
];

function o(label,note,low,high){return{label,note,low,high}}
function number(title,help,unit,value,min,max,rateLow,rateHigh){return{type:"number",title,help,unit,value,min,max,rateLow,rateHigh}}
function zipStep(){return{type:"zip",title:"Where is your project located?",help:"Enter a five-digit ZIP code for a broad regional adjustment."}}

const el=id=>document.getElementById(id);
const projectGrid=el("projectGrid"),picker=el("projectPicker"),stage=el("calculatorStage"),visual=el("calculatorVisual"),questionView=el("questionView"),resultsView=el("resultsView");
let activeProject=null,stepIndex=0,answers=[];

projects.forEach(project=>{
  const button=document.createElement("button");
  button.type="button";
  button.className="project-card";
  button.innerHTML=`
    <div class="project-icon-wrap">
      <img src="${project.icon}" alt="" aria-hidden="true" class="project-icon-img" loading="lazy" />
    </div>
    <span class="project-name">${project.name}</span>
    <span class="project-action">Estimate <i aria-hidden="true">→</i></span>
  `;
  button.setAttribute("aria-label",`Calculate ${project.name} costs`);
  button.addEventListener("click",()=>startProject(project.key));
  projectGrid.appendChild(button);
});

function startProject(key){
  activeProject=projects.find(item=>item.key===key);
  stepIndex=0;answers=[];
  const baseUrl = window.EHS_CALC_BASE_URL || "";
  const bgPath = (activeProject.bgImage.startsWith("http") || activeProject.bgImage.startsWith("/")) ? activeProject.bgImage : baseUrl + activeProject.bgImage;
  visual.style.setProperty("--visual-bg", `url("${bgPath}")`);
  el("visualTitle").textContent=activeProject.name;
  picker.hidden=true;stage.hidden=false;resultsView.hidden=true;questionView.hidden=false;
  renderStep();
  const calc = el("ehsCostCalculator");
  if(calc) calc.scrollIntoView({behavior:"smooth",block:"start"});
}

function renderStep(){
  const step=activeProject.steps[stepIndex];
  el("progressText").textContent=`Step ${stepIndex+1} of ${activeProject.steps.length}`;
  el("progressBar").style.width=`${((stepIndex+1)/activeProject.steps.length)*100}%`;
  el("questionEyebrow").textContent=`${activeProject.name.toUpperCase()} COST CALCULATOR`;
  el("questionTitle").textContent=step.title;el("questionHelp").textContent=step.help||"";el("fieldError").textContent="";
  el("backButton").disabled=stepIndex===0;
  el("nextButton").innerHTML=stepIndex===activeProject.steps.length-1?"See My Estimate <span>→</span>":"Continue <span>→</span>";
  const area=el("answerArea");area.innerHTML="";
  if(step.type==="choice"){
    const grid=document.createElement("div");grid.className="option-grid";
    step.options.forEach((option,index)=>{
      const button=document.createElement("button");button.type="button";button.className="answer-option";
      if(answers[stepIndex]?.index===index)button.classList.add("selected");
      button.innerHTML=`${option.label}<small>${option.note||""}</small>`;
      button.addEventListener("click",()=>{answers[stepIndex]={...option,index};grid.querySelectorAll(".answer-option").forEach(item=>item.classList.remove("selected"));button.classList.add("selected");el("fieldError").textContent=""});
      grid.appendChild(button);
    });area.appendChild(grid);
  }else{
    const wrap=document.createElement("label");wrap.className=step.type==="zip"?"zip-field":"number-field";
    const input=document.createElement("input");input.type=step.type==="zip"?"text":"number";input.inputMode="numeric";
    if(step.type==="zip"){input.maxLength=5;input.pattern="[0-9]{5}";input.placeholder="e.g. 78701";input.value=answers[stepIndex]?.value||"";wrap.append(input,Object.assign(document.createElement("span"),{textContent:"ZIP"}))}
    else{input.min=step.min;input.max=step.max;input.value=answers[stepIndex]?.value??step.value;wrap.append(input,Object.assign(document.createElement("span"),{textContent:step.unit}))}
    input.addEventListener("input",()=>{
      const val = input.value.trim();
      answers[stepIndex]={value:val};
      el("fieldError").textContent="";
      if(step.type==="zip" && val.length===5) {
        preloadZip(val);
      }
    });
    area.appendChild(wrap);setTimeout(()=>input.focus(),50);
  }
}

const zipCache={};
function preloadZip(zip){
  const val = String(zip).trim();
  if(!/^\d{5}$/.test(val)) return Promise.resolve(false);
  if(zipCache[val]!==undefined) return Promise.resolve(zipCache[val]==="pending"?true:zipCache[val]);
  zipCache[val]="pending";
  return fetch(`https://api.zippopotam.us/us/${val}`)
    .then(res=>{zipCache[val]=res.ok;return res.ok})
    .catch(()=>{zipCache[val]=true;return true}); // Fallback to true if offline
}

function currentIsValid(){
  const step=activeProject.steps[stepIndex],answer=answers[stepIndex];
  if(step.type==="choice"&&!answer){el("fieldError").textContent="Please choose an option to continue.";return false}
  if(step.type==="number"){
    const value=Number(answer?.value??step.value);answers[stepIndex]={value};
    if(!Number.isFinite(value)||value<step.min||value>step.max){el("fieldError").textContent=`Enter a value from ${step.min.toLocaleString()} to ${step.max.toLocaleString()}.`;return false}
  }
  if(step.type==="zip"&&!/^\d{5}$/.test(String(answer?.value||""))){el("fieldError").textContent="Enter a valid five-digit ZIP code.";return false}
  return true;
}

function nextStep(){
  const step=activeProject.steps[stepIndex],answer=answers[stepIndex];
  if(step.type==="zip"){
    const zip=String(answer?.value||"").trim();
    if(!/^\d{5}$/.test(zip)){
      el("fieldError").textContent="Enter a valid five-digit ZIP code.";
      return;
    }
    const cached=zipCache[zip];
    if(cached===false){
      el("fieldError").textContent="This ZIP code does not exist. Please enter a valid US ZIP code.";
      return;
    }
    if(cached==="pending" || cached===undefined){
      el("fieldError").textContent="Validating ZIP code...";
      preloadZip(zip).then(isValid=>{
        if(isValid){
          zipCache[zip]=true;
          if(stepIndex<activeProject.steps.length-1){stepIndex++;renderStep()}else showResults();
        } else {
          zipCache[zip]=false;
          el("fieldError").textContent="This ZIP code does not exist. Please enter a valid US ZIP code.";
        }
      });
      return;
    }
  }
  if(!currentIsValid())return;
  if(stepIndex<activeProject.steps.length-1){stepIndex++;renderStep()}else showResults();
}
function previousStep(){if(stepIndex>0){stepIndex--;renderStep()}}

function regionFactor(zip){const first=String(zip)[0];return({0:1.12,1:1.15,2:1.08,3:.98,4:.96,5:.94,6:.92,7:.95,8:1.04,9:1.18})[first]||1}
function rounded(value){return Math.max(100,Math.round(value/50)*50)}
function money(value){return new Intl.NumberFormat("en-US",{style:"currency",currency:"USD",maximumFractionDigits:0}).format(value)}

function showResults(){
  let low=0,high=0;const rows=[];
  activeProject.steps.forEach((step,index)=>{
    const answer=answers[index];if(step.type==="zip")return;
    let itemLow=0,itemHigh=0,label="";
    if(step.type==="number"){const value=Number(answer?.value??step.value);itemLow=value*step.rateLow;itemHigh=value*step.rateHigh;label=`${value.toLocaleString()} ${step.unit}`}
    else{itemLow=answer.low;itemHigh=answer.high;label=answer.label}
    low+=itemLow;high+=itemHigh;if(itemHigh!==0||itemLow!==0)rows.push({name:step.title.replace(/\?$/,""),label,low:itemLow,high:itemHigh});
  });
  const zip=answers[activeProject.steps.length-1].value,factor=regionFactor(zip);low=rounded(Math.max(low*factor,250));high=rounded(Math.max(high*factor,low*1.18));
  questionView.hidden=true;resultsView.hidden=false;el("progressText").textContent="Estimate ready";el("progressBar").style.width="100%";el("backButton").disabled=false;
  el("resultHeading").textContent=`Your ${activeProject.name.toLowerCase()} project estimate`;
  el("resultRange").textContent=`${money(low)} – ${money(high)}`;
  el("resultLocation").textContent=`Planning range adjusted for ZIP ${zip}`;
  const typical=(low+high)/2;
  el("estimateBreakdown").innerHTML=`<div class="breakdown-row"><span>Typical planning point</span><strong>${money(typical)}</strong></div>${rows.slice(0,3).map(row=>`<div class="breakdown-row"><span>${row.name}<br><small>${row.label}</small></span><strong>${money(Math.max(0,(row.low+row.high)*factor/2))}</strong></div>`).join("")}`;
}

el("nextButton").addEventListener("click",nextStep);
el("backButton").addEventListener("click",()=>{if(!resultsView.hidden){resultsView.hidden=true;questionView.hidden=false;renderStep()}else previousStep()});
el("restartButton").addEventListener("click",()=>startProject(activeProject.key));
el("closeCalculator").addEventListener("click",closeCalculator);
function closeCalculator(){
  stage.hidden=true;picker.hidden=false;activeProject=null;
  const calc = el("ehsCostCalculator");
  if(calc) calc.scrollIntoView({behavior:"smooth",block:"start"});
}

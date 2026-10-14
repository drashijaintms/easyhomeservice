<style>
  .text-left {
    text-align: left;
  }

li.ccc.active {
    background-color: rgb(212, 247, 212);
    font-weight: bold;
    padding: 5px;
} 
li.ccc {
    padding: 5px 0px;
    cursor: pointer;
    float: none;
}

li.ccc a{
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-decoration:none;
} 
ol{
    padding-left: 1rem!important;
}
  li.ccc.active a { background-color: #d4f7d4; font-weight: bold;  padding:5px;}
  g { cursor: pointer; }
</style>
<div class="container">
    <div id="mapTooltip"></div>
  <!-- Title Section -->
  <div class="my-4 row pb-4 d-flex justify-content-center">
    <div class="col-sm-8">
      <h2 class="common_heading">States We Serve</h2>
      <p class="common_text">Our extensive network covers the majority of the United States, offering homeowners dependable protection for their most valuable investment. </p>
    </div>
  </div>
  <!-- Top Section: Map and First Part of the List -->
  <div class="row align-items-start">
    <!-- Map Section -->
    <div class="col-lg-8 col-md-12 text-center">
      <img src="/images/map.png" class="img-fluid" alt="USA Map">
    </div>
    <!-- First Part of the List -->
    <div class=" mt-4 col-lg-2 col-md-6 col-6 text-left">
      <ol>
        <li class="AL ccc">Alabama (AL)</li>
        <li class="AK ccc">Alaska (AK)</li>
        <li class="AZ ccc">Arizona (AZ)</li>
        <li class="AR ccc">Arkansas (AR)</li>
        <li class="CA ccc">California (CA)</li>
        <li class="CO ccc">Colorado (CO)</li>
        <li class="CT ccc">Connecticut (CT)</li>
        <li class="DE ccc">Delaware (DE)</li>
        <li class="FL ccc">Florida (FL)</li>
        <li class="GA ccc">Georgia (GA)</li>
        <li class="HI ccc">Hawaii (HI)</li>
        <li class="ID ccc">Idaho (ID)</li>
        <li class="IL ccc">Illinois (IL)</li>
      </ol>
    </div>
    <!-- Second Part of the List -->
    <div class="col-lg-2 col-md-6 mt-4 col-6 text-left">
      <ol>
        <li class="IN ccc">Indiana (IN)</li>
        <li class="IA ccc">Iowa (IA)</li>
        <li class="KS ccc">Kansas (KS)</li>
        <li class="KY ccc">Kentucky (KY)</li>
        <li class="LA ccc">Louisiana (LA)</li>
        <li class="ME ccc">Maine (ME)</li>
        <li class="MD ccc">Maryland (MD)</li>
        <li class="MA ccc">Massachusetts (MA)</li>
        <li class="MI ccc">Michigan (MI)</li>
        <li class="MN ccc">Minnesota (MN)</li>
        <li class="MS ccc">Mississippi (MS)</li>
        <li class="MO ccc">Missouri (MO)</li>
        <li class="MT ccc">Montana (MT)</li>
      </ol>
    </div>
  </div>
  <!-- Remaining States List Section -->
  <div class="row mt-4 text-left">
    <div class="col-lg-8">
      <div class="row">
        <div class="col-md-4 col-6">
          <ol>
            <li class="NE ccc">Nebraska (NE)</li>
            <li class="NV ccc">Nevada (NV)</li>
            <li class="NH ccc">New Hampshire (NH)</li>
            <li class="NJ ccc">New Jersey (NJ)</li>
            <li class="NM ccc">New Mexico (NM)</li>
          </ol>
        </div>
        <div class="col-md-4 col-6">
          <ol>
            <li class="NY ccc">New York (NY)</li>
            <li class="NC ccc">North Carolina (NC)</li>
            <li class="ND ccc">North Dakota (ND)</li>
            <li class="OH ccc">Ohio (OH)</li>
            <li class="OK ccc">Oklahoma (OK)</li>
          </ol>
        </div>
        <div class="col-md-4 col-6">
          <ol>
            <li class="OR ccc">Oregon (OR)</li>
            <li class="PA ccc">Pennsylvania (PA)</li>
            <li class="RI ccc">Rhode Island (RI)</li>
            <li class="SC ccc">South Carolina (SC)</li>
            <li class="SD ccc">South Dakota (SD)</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="row">
        <div class="col-md-6 col-6">
          <ol>
            <li class="TN ccc">Tennessee (TN)</li>
            <li class="TX ccc">Texas (TX)</li>
            <li class="UT ccc">Utah (UT)</li>
            <li class="VT ccc">Vermont (VT)</li>
            <li class="VA ccc">Virginia (VA)</li>
          </ol>
        </div>
        <div class="col-md-6 col-6">
          <ol>
            <li class="WA ccc">Washington (WA)</li>
            <li class="WV ccc">West Virginia (WV)</li>
            <li class="WI ccc">Wisconsin (WI)</li>
            <li class="WY ccc">Wyoming (WY)</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="/scripts/map-script.js"></script>
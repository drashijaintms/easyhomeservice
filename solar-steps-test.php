<meta name="robots" content="noindex,nofollow">
<?php include ('step-header.php');?>

<!----Question-Section---->
<div class="quiz-sec">
  <div class="container">
    <div class="contnt-sec">
      <form id="myform" method="post">
       
        <!--Zip code-->
        <div class="question_box step1 step" style="display:;">
          <p class="step-hdng1">Enter your zip code</p>
          <p class="step-hdng2">This will help us match you to the specialized <br class="hide-mob">contractors in your area. </p>
          <div class="info-bx">
            <div class="frmElemts">
              <input type="text" class="inp-fld" placeholder="Enter Zip Code" id="property_zip_code" pattern="[0-9]{5}" required="" maxlength="5" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="property_zip_code" inputmode="numeric" value="<?php echo $_GET['zip']; ?>">
            </div>
            <div class="error-msg" id="zipcode-error"></div>
            <div class="clearall"></div>
            <div class="btn_box">
              <a href="javascript:void(0)" class="common_btn next-btn">Next <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
              </a>
              <p class="btn_text inner_btn_text">
                <img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.
              </p>
            </div>
          </div>
        </div>
       
        <!--home's roof shade-->
        <div class="question_box step" style="display:none;">
          <p class="step-hdng1">Select your home's roof shade type. </p>
          <p class="step-hdng2">This will help us match you to the specialized contractors. </p>
          <div class="option-box">
            <label class="option-col option-col2  ">
              <input type="radio" name="property_sun_exposure" value="1">
              <div class="desc-opt">
                <p>Full Sun <img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon">
                </p>
              </div>
            </label>
            <label class="option-col option-col2  ">
              <input type="radio" name="property_sun_exposure" value="2">
              <div class="desc-opt">
                <p>Partial Sun <img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon">
                </p>
              </div>
            </label>
            <label class="option-col option-col2  ">
              <input type="radio" name="property_sun_exposure" value="3">
              <div class="desc-opt">
                <p>Low Sun <img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon">
                </p>
              </div>
            </label>
            <label class="option-col option-col2  ">
              <input type="radio" name="property_sun_exposure" value="4">
              <div class="desc-opt">
                <p>Mostly Shade <img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon">
                </p>
              </div>
            </label>
          </div>
          <input type="button" class="next-btn" hidden>
        </div>
       
        <!--home's roof material-->
        <div class="question_box step" style="display:none;">
          <p class="step-hdng1">select the properties roof material. </p>
          <p class="step-hdng2">This will help us match you with the contractor specilised in that service.</p>
          <div class="option-box">
            <label class="option-col option-col2">
              <select class="desc-opt-select" id="property_roof_material" name="property_roof_material">
                <option value="" selected="" disabled=""> Select any one </option>
                <option value="1">Wood Shake</option>
                <option value="2">Asphalt Shingles</option>
                <option value="3">Cement Tile</option>
                <option value="4">Cement Tile</option>
                <option value="5">Clay Tile</option>
                <option value="6">Metal</option>
                <option value="7">Other/Unknown</option>
              </select>
            </label>
            <div class="error-msg" id="property_roof_material-error"></div>
            <div class="btn_box">
              <a href="javascript:void(0)" class="common_btn next-btn">Next <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
              </a>
              <p class="btn_text inner_btn_text">
                <img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.
              </p>
            </div>
          </div>
        </div>
       
        <!--property roof design-->
        <div class="question_box step" style="display:none;">
          <p class="step-hdng1">select roof design of your property?</p>
          <p class="step-hdng2">This will help us match you with the contractor specilised in that service.</p>
          <div class="option-box">
            <label class="option-col option-col2">
              <select class="desc-opt-select" id="property_roof_design" name="property_roof_design">
                <option value="" selected="" disabled=""> Select any one </option>
                <option value="1">Hip</option>
                <option value="2">Gable</option>
                <option value="3">Shed</option>
                <option value="4">Flat</option>
                <option value="5">Gambrel</option>
                <option value="6">Mansard</option>
                <option value="7">Other/Unknown</option>
              </select>
            </label>
            <div class="error-msg" id="property_roof_design-error"></div>
            <div class="btn_box">
              <a href="javascript:void(0)" class="common_btn next-btn">Next <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
              </a>
              <p class="btn_text inner_btn_text">
                <img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.
              </p>
            </div>
          </div>
        </div>
        
        <!--property_number_of_stories-->
        <div class="question_box step" style="display:none;">
          <p class="step-hdng1">Enter the number of stories of your property</p>
          <p class="step-hdng2">This will help us match you to the specialized <br class="hide-mob">contractors in your area. </p>
          <div class="info-bx">
            <div class="frmElemts">
              <input type="text" class="inp-fld" placeholder="Enter number of stories" id="property_number_of_stories" pattern="" required="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="property_number_of_stories" inputmode="numeric" minlength="0">
            </div>
            <div class="error-msg" id="property_number_of_stories-error"></div>
            <div class="clearall"></div>
            <div class="btn_box">
              <a href="javascript:void(0)" class="common_btn next-btn">Next <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
              </a>
              <p class="btn_text inner_btn_text">
                <img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.
              </p>
            </div>
          </div>
        </div>
      
        <!--property_year_built-->
        <div class="question_box step" style="display:none;">
          <p class="step-hdng1">Enter the year in which this property was built</p>
          <p class="step-hdng2">This will help us match you to the specialized <br class="hide-mob">contractors in your area. </p>
          <div class="info-bx">
            <div class="frmElemts">
              <input type="text" class="inp-fld" placeholder="Enter property year built" id="property_year_built" min="1900" max="2100" required="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="property_year_built" inputmode="numeric" maxlength="4" minlength="4">
            </div>
            <div class="error-msg" id="property_year_built-error"></div>
            <div class="clearall"></div>
            <div class="btn_box">
              <a href="javascript:void(0)" class="common_btn next-btn">Next <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
              </a>
              <p class="btn_text inner_btn_text">
                <img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.
              </p>
            </div>
          </div>
        </div>
      
        <!--property_heating_type-->
        <div class="question_box step" style="display:none;">
          <p class="step-hdng1">select your property heating type?</p>
          <p class="step-hdng2">This will help us match you with the contractor specilised in that service.</p>
          <div class="option-box">
            <label class="option-col option-col2">
              <select class="desc-opt-select" id="property_heating_type" name="property_heating_type">
                <option value="" selected="" disabled=""> Select any one </option>
                <option value="1">Gas</option>
                <option value="2">Electric</option>
                <option value="3">Heating Oil</option>
                <option value="4">Wood</option>
                <option value="5">Other</option>
              </select>
            </label>
            <div class="error-msg" id="property_heating_type-error"></div>
            <div class="btn_box">
              <a href="javascript:void(0)" class="common_btn next-btn">Next <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
              </a>
              <p class="btn_text inner_btn_text">
                <img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.
              </p>
            </div>
          </div>
        </div>
       
        <!--property_hot_water_type-->
        <div class="question_box step" style="display:none;">
          <p class="step-hdng1">What is your <br class="show-desk">property hot water type </p>
          <p class="step-hdng2">This will help us match you to the specialized contractors. </p>
          <div class="option-box">
            <label class="option-col option-col2  ">
              <input type="radio" name="property_hot_water_type" value="1">
              <div class="desc-opt">
                <p>Gas <img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon">
                </p>
              </div>
            </label>
            <label class="option-col option-col2  ">
              <input type="radio" name="property_hot_water_type" value="2">
              <div class="desc-opt">
                <p>Electric <img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon">
                </p>
              </div>
            </label>
            <label class="option-col option-col2  ">
              <input type="radio" name="property_hot_water_type" value="3">
              <div class="desc-opt">
                <p>Other <img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon">
                </p>
              </div>
            </label>
          </div>
          <input type="button" class="next-btn" hidden>
        </div>
       
        <!--property_square_footage-->
        <div class="question_box step" style="display:none;">
          <p class="step-hdng1">what is your property square footage area?</p>
          <p class="step-hdng2">This will help us match you to the specialized <br class="hide-mob">contractors in your area. </p>
          <div class="info-bx">
            <div class="frmElemts">
              <input type="text" class="inp-fld" placeholder="Enter your property square footage area" id="property_square_footage" min="0" required="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="property_square_footage" inputmode="numeric">
            </div>
            <div class="error-msg" id="property_square_footage-error"></div>
            <div class="clearall"></div>
            <div class="btn_box">
              <a href="javascript:void(0)" class="common_btn next-btn">Next <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
              </a>
              <p class="btn_text inner_btn_text">
                <img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.
              </p>
            </div>
          </div>
        </div>
      
        <!--property_owner-->
        <div class="question_box step" style="display:none;">
          <p class="step-hdng1">Are you the property owner? </p>
          <p class="step-hdng2">This will help us find contractors available in your time frame.</p>
          <div class="option-box">
            <label class="option-col option-col2  ">
              <input type="radio" name="property_owner" value="0">
              <div class="desc-opt">
                <p>No <img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon">
                </p>
              </div>
            </label>
            <label class="option-col option-col2  ">
              <input type="radio" name="property_owner" value="1">
              <div class="desc-opt">
                <p>Yes <img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon">
                </p>
              </div>
            </label>
          </div>
          <input type="button" class="next-btn" hidden>
        </div>
     
      <!--property_type-->
        <div class="question_box step" style="display:none;">
          <p class="step-hdng1">select the type of your property?</p>
          <p class="step-hdng2">This will help us match you with the contractor specilised in that service.</p>
          <div class="option-box">
            <label class="option-col option-col2">
              <select class="desc-opt-select" id="property_type" name="property_type">
                <option value="" selected="" disabled=""> Select any one </option>
                <option value="1">Single Family Detached</option>
                <option value="2">Single Family Attached</option>
                <option value="3">Townhome</option>
                <option value="4">Condo</option>
                <option value="5">2-4 Units</option>
                <option value="6">5+ Units</option>
                <option value="7">Commercial</option>
                <option value="8">Manufacturing</option>
                <option value="9">Service</option>
                <option value="10">Retail</option>
                <option value="11">Farm/Ranch</option>
                <option value="12">School</option>
                <option value="13">Government</option>
              </select>
            </label>
            <div class="error-msg" id="property_type-error"></div>
            <div class="btn_box">
              <a href="javascript:void(0)" class="common_btn next-btn">Next <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
              </a>
              <p class="btn_text inner_btn_text">
                <img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.
              </p>
            </div>
          </div>
        </div>
      
      <!--property_value-->
        <div class="question_box step" style="display:none;">
          <p class="step-hdng1">what is the value of your property</p>
          <p class="step-hdng2">This will help us match you to the specialized <br class="hide-mob">contractors in your area. </p>
          <div class="info-bx">
            <div class="frmElemts">
              <input type="text" class="inp-fld" placeholder="Enter property value" id="property_value" min="0" required="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="property_value" inputmode="numeric">
            </div>
            <div class="error-msg" id="property_value-error"></div>
            <div class="clearall"></div>
            <div class="btn_box">
              <a href="javascript:void(0)" class="common_btn next-btn">Next <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
              </a>
              <p class="btn_text inner_btn_text">
                <img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.
              </p>
            </div>
          </div>
        </div>
        
        
         <!--hot_water_inquiry-->
        <div class="question_box step" style="display:none;">
          <p class="step-hdng1">is this a hot water inquiry? </p>
          <p class="step-hdng2">This will help us find contractors available in your time frame.</p>
          <div class="option-box">
            <label class="option-col option-col2  ">
              <input type="radio" name="hot_water_inquiry" value="0">
              <div class="desc-opt">
                <p>No <img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon">
                </p>
              </div>
            </label>
            <label class="option-col option-col2  ">
              <input type="radio" name="hot_water_inquiry" value="1">
              <div class="desc-opt">
                <p>Yes <img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon">
                </p>
              </div>
            </label>
          </div>
          <input type="button" class="next-btn" hidden>
        </div>
        
         <!--hot_water_inquiry-->
        <div class="question_box step" style="display:none;">
          <p class="step-hdng1">is this an electric inquiry? </p>
          <p class="step-hdng2">This will help us find contractors available in your time frame.</p>
          <div class="option-box">
            <label class="option-col option-col2  ">
              <input type="radio" name="electric_inquiry" value="0">
              <div class="desc-opt">
                <p>No <img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon">
                </p>
              </div>
            </label>
            <label class="option-col option-col2  ">
              <input type="radio" name="electric_inquiry" value="1">
              <div class="desc-opt">
                <p>Yes <img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon">
                </p>
              </div>
            </label>
          </div>
          <input type="button" class="next-btn" hidden>
        </div>
        
        
        
        
        
        
        
        
        
        
        
       <!--address-->
        <div class="question_box step" style="display:none;">
  <p class="step-hdng1">Where will this project <br>take place?</p>
  <p class="step-hdng2">This will help us match you to the specialized <br class="hide-mob"> contractors in your area. </p>
  <div class="info-bx">
    <div class="frmElemts">
      <label class="option-col option-col2">
        <select class="desc-opt-select" id="property_state_code" name="property_state_code">
          <option value="" selected disabled>Select any one</option>
          <option value="AL">Alabama</option>
          <option value="AK">Alaska</option>
          <option value="AZ">Arizona</option>
          <option value="AR">Arkansas</option>
          <option value="CA">California</option>
          <option value="CO">Colorado</option>
          <option value="CT">Connecticut</option>
          <option value="DE">Delaware</option>
          <option value="DC">District of Columbia</option>
          <option value="FL">Florida</option>
          <option value="GA">Georgia</option>
          <option value="HI">Hawaii</option>
          <option value="ID">Idaho</option>
          <option value="IL">Illinois</option>
          <option value="IN">Indiana</option>
          <option value="IA">Iowa</option>
          <option value="KS">Kansas</option>
          <option value="KY">Kentucky</option>
          <option value="LA">Louisiana</option>
          <option value="MA">Massachusetts</option>
          <option value="ME">Maine</option>
          <option value="MD">Maryland</option>
          <option value="MI">Michigan</option>
          <option value="MN">Minnesota</option>
          <option value="MS">Mississippi</option>
          <option value="MO">Missouri</option>
          <option value="MT">Montana</option>
          <option value="NE">Nebraska</option>
          <option value="NV">Nevada</option>
          <option value="NH">New Hampshire</option>
          <option value="NJ">New Jersey</option>
          <option value="NM">New Mexico</option>
          <option value="NY">New York</option>
          <option value="NC">North Carolina</option>
          <option value="ND">North Dakota</option>
          <option value="OH">Ohio</option>
          <option value="OK">Oklahoma</option>
          <option value="OR">Oregon</option>
          <option value="PA">Pennsylvania</option>
          <option value="RI">Rhode Island</option>
          <option value="SC">South Carolina</option>
          <option value="SD">South Dakota</option>
          <option value="TN">Tennessee</option>
          <option value="TX">Texas</option>
          <option value="UT">Utah</option>
          <option value="VA">Virginia</option>
          <option value="VT">Vermont</option>
          <option value="WA">Washington</option>
          <option value="WV">West Virginia</option>
          <option value="WI">Wisconsin</option>
          <option value="WY">Wyoming</option>
        </select>
      </label>
    </div>
    <div class="frmElemts">
      <input type="text" name="property_city" id="property_city" class="inp-fld" placeholder="Enter City">
    </div>
    <div class="frmElemts">
      <input type="text" name="property_street_address" id="property_street_address" class="inp-fld" placeholder="Enter Street Address">
    </div>
    <div class="error-msg" id="address-error"></div>
    <div class="clearall"></div>
    <div class="btn_box">
      <a href="javascript:void(0)" class="common_btn next-btn">Next 
        <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
      </a>
      <p class="btn_text inner_btn_text">
        <img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">
        Your information is 100% secure &amp; confidential.
      </p>
    </div>
  </div>
</div>

        <!--utility company-->
        <div class="question_box step" style="display:none;">
          <p class="step-hdng1">Select the utility company id</p>
          <p class="step-hdng2">This will help us match you to the specialized <br class="hide-mob"> contractors in your area.</p>
          <div class="info-bx">
            <div class="frmElemts">
              <label class="option-col option-col2">
                <select class="desc-opt-select" id="utility_company_id" name="utility_company_id">
                  <option value="" selected disabled>Select any one</option>
                </select>
              </label>
            </div>
            <div class="error-msg" id="utility_company_id-error"></div>
            <div class="clearall"></div>
            <div class="btn_box">
              <a href="javascript:void(0)" class="common_btn next-btn">Next 
                <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
              </a>
              <p class="btn_text inner_btn_text">
                <img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">
                Your information is 100% secure &amp; confidential.
              </p>
            </div>
          </div>
        </div>
        
        <!-- credit_profile -->
        <div class="question_box step" style="display:none;">
          <p class="step-hdng1">Select your credit profile</p>
          <p class="step-hdng2">Some contractors require the owner’s approval for work.</p>
          <div class="option-box">
            <label class="option-col option-col2">
              <input type="radio" name="credit_profile" value="1">
              <div class="desc-opt">
                <p>Excellent <img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon">
                </p>
              </div>
            </label>
            <label class="option-col option-col2">
              <input type="radio" name="credit_profile" value="2">
              <div class="desc-opt">
                <p>Good <img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon">
                </p>
              </div>
            </label>
            <label class="option-col option-col2">
              <input type="radio" name="credit_profile" value="3">
              <div class="desc-opt">
                <p>Fair <img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon">
                </p>
              </div>
            </label>
            <label class="option-col option-col2">
              <input type="radio" name="credit_profile" value="4">
              <div class="desc-opt">
                <p>Poor <img src="images/step-tick.png" class="icon-img" width="18" height="18" alt="icon">
                </p>
              </div>
            </label>
          </div>
          <div class="error-msg" id="homeowner-error"></div>
          <!-- keep this so your radio auto-advance script can find it -->
          <input type="button" class="next-btn" hidden>
        </div>
        
        <!-- monthly_electricity_cost -->
        <div class="question_box step" style="display:none;">
          <p class="step-hdng1">What is your monthly electricity cost</p>
          <p class="step-hdng2">This will help us match you to the specialized <br class="hide-mob">contractors in your area. </p>
          <div class="info-bx">
            <div class="frmElemts">
              <input type="text" class="inp-fld" placeholder="Enter monthly electricity cost" id="monthly_electricity_cost" min="0" required="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="monthly_electricity_cost" inputmode="numeric">
            </div>
            <div class="error-msg" id="monthly_electricity_cost-error"></div>
            <div class="clearall"></div>
            <div class="btn_box">
              <a href="javascript:void(0)" class="common_btn next-btn">Next <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
              </a>
              <p class="btn_text inner_btn_text">
                <img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.
              </p>
            </div>
          </div>
        </div>
        
        <!--description-->
        <div class="question_box step" style="display:none;">
          <p class="step-hdng1">Describe your project</p>
          <p class="step-hdng2">This will help us understand your needs better. </p>
          <div class="info-bx">
            <div class="frmElemts">
              <textarea id="comments" name="comments" rows="3" cols="50" class="inp-fld" placeholder="Describe your project within 250 characters"></textarea>
            </div>
            <div class="error-msg" id="comments-error"></div>
            <div class="clearall"></div>
            <div class="btn_box">
              <a href="javascript:void(0)" class="common_btn next-btn">Next <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
              </a>
              <p class="btn_text inner_btn_text">
                <img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.
              </p>
            </div>
          </div>
        </div>
       
        <!--Firstname and lastname-->
        <div class="question_box step" style="display:none;">
          <p class="step-hdng1">Mention your first <br> and last name </p>
          <p class="step-hdng2">Your free quote(s) will be made out to our name, <br class="hide-mob">to help with insurance. </p>
          <div class="info-bx">
            <div class="frmElemts">
              <input type="text" name="firstName" id="firstName" class="inp-fld" placeholder="First Name">
            </div>
            <div class="error-msg" id="firstName-error"></div>
            <div class="frmElemts">
              <input type="text" name="lastName" id="lastName" class="inp-fld" placeholder="Last Name">
            </div>
            <div class="error-msg" id="lastName-error"></div>
            <div class="clearall"></div>
            <div class="btn_box">
              <a href="javascript:void(0)" class="common_btn next-btn">Next <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
              </a>
              <p class="btn_text inner_btn_text">
                <img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.
              </p>
            </div>
          </div>
        </div>
       
        <!--email address-->
        <div class="question_box step" style="display:none;">
          <p class="step-hdng1">Enter your email for better <br class="hide-mob">communication </p>
          <p class="step-hdng2">We never spam or share your email.</p>
          <div class="info-bx">
            <div class="frmElemts">
              <input type="email" name="email" id="email" class="inp-fld" placeholder="Email">
            </div>
            <div class="error-msg" id="email-error"></div>
            <div class="clearall"></div>
            <div class="btn_box">
              <a href="javascript:void(0)" class="common_btn next-btn">Next <img src="images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
              </a>
              <p class="btn_text inner_btn_text">
                <img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.
              </p>
            </div>
          </div>
        </div>
     
        <!--phone number-->
        <div class="question_box step" style="display:none;">
          <p class="step-hdng1">Enter your phone number <br class="hide-mob"> to get verbal quotes </p>
          <p class="step-hdng2">Certified contractors found, let us know where <br class="hide-mob"> they can call you. </p>
          <div class="info-bx">
            <div class="frmElemts">
              <input type="text" name="phone" id="phone" class="inp-fld" placeholder="Enter Phone Number" pattern="[0-9]{5}" required="" maxlength="18" oninput="this.value = this.value.replace(/[^0-9]/g, '');" inputmode="numeric">
            </div>
            <div class="error-msg" id="phone-error"></div>
            <div class="term-check">
              <input type="checkbox" name="terms" id="phoneterms">
              <label for="phoneterms">By clicking "Agree and Submit", I agree to the <a href="javascript:void(0);" onclick="openNewWindow('privacy.php','modal');">Privacy Policy</a> and <a href="javascript:void(0);" onclick="openNewWindow('terms.php','modal');">Terms and Conditions</a>. I also consent to receive marketing communications through email and other texts or calls from EasyHomeService.com and/or its marketing partners about Home Service by any means or technology, including an automatic dialing system, to the phone number I have previously provided, even if that number is on a national or state Do-Not-Call registry . Carrier and data rates may apply. I understand that my consent to such calls and text messages is not required to purchase products from or use the services of <a href="javascript:void(0);" onclick="openNewWindow('marketing-partners.php','modal');">marketing partners</a>. </label>
            </div>
            <div class="error-msg" id="consent-error"></div>
            <div class="clearall"></div>
            <div class="btn_box">
              <a href="javascript:void(0)" class="common_btn next-btn submit" type="submit">Submit</a>
              <p class="btn_text inner_btn_text">
                <img src="images/lock.png" class="btn_lock" width="50" height="67" alt="icon">Your information is 100% secure &amp; confidential.
              </p>
            </div>
            <input type="button" class="next-btn2" hidden>
          </div>
        </div>
        
        <div class="question_box" style="display:none;">
          <div class="loader_box">
            <img src="images/loader.gif" class="loader-img" width="282" height="28" alt="loader">
            <ul class="loader_list">
              <li>
                <h3 class="load1" style="display:none;">Submitting your responses</h3>
                <p class="load2" style="display:none;">
                  <img src="images/check.png" width="34" height="34" alt="check">Submitted
                </p>
              </li>
              <li>
                <h3 class="load3" style="display:none;">Reviewing your responses</h3>
                <p class="load4" style="display:none;">
                  <img src="images/check.png" width="34" height="34" alt="check">Reviewed
                </p>
              </li>
              <li>
                <h3 class="load5" style="display:none;">Looking for certified contractors in your area </h3>
                <p class="load6" style="display:none;">
                  <img src="images/check.png" width="34" height="34" alt="check">undefined<span>(6)</span> Solar contractors found
                </p>
              </li>
            </ul>
          </div>
        </div>
      </form>
      <div class="revw-bx">
        <img src="images/cust_review_img1.jpg" class="review_img" width="68" height="68" alt="iamge">
        <img src="images/star.png" class="star" width="300" height="60" alt="star">
        <p class="revw-txt1">Maecenas nec odio et ante tincidunt tempus.</p>
        <p class="revw-txt2">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh elit amet nibh vulp utate cursus amet mauris. Morbi accumsan ipsum velit tellus.</p>
        <p class="revw-txt3">
          <span>Jennifer N.</span> Verified Subscriber
        </p>
      </div>
    </div>
  </div>
</div>



<?php include'promise.php' ?>

<!---------Footer--------->
<?php include'footer-test.php' ?>


<!--SOCIAL_POP-->

<section class="custom-social-proof">
    <div class="custom-notification">
        <div class="custom-notification-container">
            <div class="custom-notification-image-wrapper">
                <img class="avatar" src="images/dave.jpg" width="93" height="93" alt="img">
            </div>
            <div class="custom-notification-content-wrapper">
                <p class="custom-notification-content">
                    <span id="notify-customer">Dave</span> <strong class="us">from</strong> <span id="notify-state">Orlando, Florida
</span><br>Got a quote for solar service. </p>
                <p class="time-very"><span class="time" id="notify-time">23 minutes ago</span> <span class="verified-pop"><img src="images/t-chk.png">Verified</span></p>
            </div>
        </div>
    </div>
</section>

<!--------Script---------->
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/social-proof.js"></script>

<script type="text/javascript">
$(document).ready(function () {

    // ------------------ Step Navigation ------------------
    var steps = $(".question_box.step");
    var currentStep = 0;

    steps.hide().eq(0).show();
    toggleBack();

    function toggleBack() {
        if (currentStep === 0) {
            $(".btn-back").hide();
        } else {
            $(".btn-back").show();
        }
    }

    $(".next-btn").click(function () {
        if (validateStep(currentStep)) {
            steps.eq(currentStep).hide();
            currentStep++;
            steps.eq(currentStep).show();
            toggleBack();
        }
    });

    $(".btn-back").click(function () {
        steps.eq(currentStep).hide();
        currentStep--;
        steps.eq(currentStep).show();
        toggleBack();
    });

    // ------------------ Final Submit ------------------
    $(".submit").click(function () {
        if (validateStep(currentStep)) {
            var formData = $("#myform").serialize();

            $.ajax({
                type: "POST",
                url: "https://easyhomeservice.com/send-solar-test.php",
                data: formData,
                success: function (response) {
                    console.log("Form Data Sent:", formData);
                    // window.location = "https://easyhomeservice.com/thank-you.php";
                },
                error: function (error) {
                    console.log("Error:", error);
                }
            });
        }
    });

    // ------------------ Validation ------------------
    function validateStep(step) {
        var isValid = true;
        $(".error-msg").text("");

        if (step === 0) {
            var zipcode = $("#property_zip_code").val();
            if (!/^\d{5}$/.test(zipcode)) {
                $("#zipcode-error").text("Enter a valid ZIP code.");
                isValid = false;
            }
        }
        
        if(step === 1){
            
        }
        
    if (step === 2) {
        var option = $("#property_roof_material").val();
        if (!option) {
            $("#property_roof_material-error").text("Please choose an option.");
            isValid = false;
        }
    }
        if (step === 3) {
        var option = $("#property_roof_design").val();
        if (!option) {
            $("#property_roof_design-error").text("Please choose an option.");
            isValid = false;
        }
    }
        
         if (step === 4) {
        var property_number_of_stories = $("#property_number_of_stories").val();
        
        if (!property_number_of_stories) {
            $("#property_number_of_stories-error").text("Please enter number of stories in your property.");
            isValid = false;
        } else {
            $("#property_number_of_stories-error").text("");
        }
    }
    
if (step === 5) {
    var property_year_built = $("#property_year_built").val();

    if (!property_year_built) {
        $("#property_year_built-error").text("Please enter the year your property was built.");
        isValid = false;
    } else if (property_year_built.length !== 4 || property_year_built < 1900 || property_year_built > 2100) {
        $("#property_year_built-error").text("Please enter a valid 4-digit year between 1900 and 2100.");
        isValid = false;
    } else {
        $("#property_year_built-error").text("");
    }
}

      if (step === 6) {
        var option = $("#property_heating_type").val();
        if (!option) {
            $("#property_heating_type-error").text("Please choose an option.");
            isValid = false;
        }
    }

if (step === 7)
{
    
}

 if (step === 8) {
        var property_square_footage = $("#property_square_footage").val();
        
        if (!property_square_footage) {
            $("#property_square_footage-error").text("Please enter the square footage of your property.");
            isValid = false;
        } else {
            $("#property_square_footage-error").text("");
        }
    }

if (step === 9){
    
}


      if (step === 10) {
        var option = $("#property_type").val();
        if (!option) {
            $("#property_type-error").text("Please choose an option.");
            isValid = false;
        }
    }
    
    
    if (step === 11) {
        var property_value = $("#property_value").val();
        
        if (!property_value) {
            $("#property_value-error").text("Please enter the value of your property.");
            isValid = false;
        } else {
            $("#property_value-error").text("");
        }
    }
    
    if (step === 12)
    {
        
    }
    if (step === 13)
    {
        
    }
    
    
    if (step === 14) {
    var property_state_code = $("#property_state_code").val(),
        property_city = $("#property_city").val(),
        property_street_address = $("#property_street_address").val();

    if (!property_state_code && !property_city && !property_street_address) {
        $("#address-error").text("Please enter your state, city, and street address.");
        isValid = false;
    } else if (!property_state_code) {
        $("#address-error").text("Please select your state.");
        isValid = false;
    } else if (!property_city) {
        $("#address-error").text("Please enter your city.");
        isValid = false;
    } else if (property_city.length > 100) {
        $("#address-error").text("City cannot be more than 100 characters.");
        isValid = false;
    } else if (!property_street_address) {
        $("#address-error").text("Please enter your street address.");
        isValid = false;
    } else if (property_street_address.length > 100) {
        $("#address-error").text("Street address cannot be more than 100 characters.");
        isValid = false;
    } else {
        $("#address-error").text("");
    }
}

      if (step === 15) {
        var option = $("#utility_company_id").val();
        if (!option) {
            $("#utility_company_id-error").text("Please choose an option.");
            isValid = false;
        }
    }
    if (step === 16) {
        
    }
    if (step === 17) {
        var monthly_electricity_cost = $("#monthly_electricity_cost").val();
        
        if (!monthly_electricity_cost) {
            $("#monthly_electricity_cost-error").text("Please enter the monthly electricity cost. ");
            isValid = false;
        } else {
            $("#monthly_electricity_cost-error").text("");
        }
    }
    
    if (step === 18) {
    var comments = $("#comments").val();
    
    if (!comments) {
        $("#comments-error").text("Please enter the additional comments. If you have none, write 'NA'.");
        isValid = false;
    } else if (comments.length > 250) {
        $("#comments-error").text("Comments cannot be more than 250 characters.");
        isValid = false;
    } else {
        $("#comments-error").text("");
    }
}
    
        if (step === 19) {
            var firstName = $("#firstName").val(),
                lastName = $("#lastName").val();

            if (!firstName) { $("#firstName-error").text("Please enter your first name."); isValid = false; }
            if (!lastName) { $("#lastName-error").text("Please enter your last name."); isValid = false; }
        }

        if (step === 20) {
            var email = $("#email").val();
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!email) { $("#email-error").text("Please enter your email."); isValid = false; }
            else if (!emailPattern.test(email)) { $("#email-error").text("Enter a valid email address."); isValid = false; }
        }

        if (step === 21) {
            var phone = $("#phone").val();
            var phonePattern = /^\+?\d{10,15}$/; // Flexible: allows +, 10–15 digits

            if (!phone) { $("#phone-error").text("Please provide a phone number."); isValid = false; }
            else if (!phonePattern.test(phone)) { $("#phone-error").text("Enter a valid phone number."); isValid = false; }

            var consentCheckbox = $("#phoneterms");
            if (!consentCheckbox.is(":checked")) {
                $("#consent-error").text("Please give your consent.");
                isValid = false;
            }

            // If phone valid and consent checked → trigger animation sequence
            if (isValid) {
                $(".next-btn2").trigger("click");
            }
        }

        return isValid;
    }

    // ------------------ Auto next for radios ------------------
    $(document).on("change", 'input[type="radio"]:not(.no-click-trigger)', function () {
        var $nextButton = $(this).closest(".step").find(".next-btn").first();
        $nextButton.trigger("click");
    });

    // ------------------ Utility Companies ------------------
    let utilityCompanies = {};
    $.getJSON("utility_companies.json", function (data) {
        utilityCompanies = data;
        console.log("Utility data loaded:", utilityCompanies);
    });

    $(document).on("change", "#property_state_code", function () {
        var state = $(this).val();
        var $utility = $("#utility_company_id");

        $utility.empty().append('<option value="" disabled selected>Select any one</option>');
        if (utilityCompanies[state]) {
            $.each(utilityCompanies[state], function (i, company) {
                $utility.append($("<option>").val(company.id).text(company.name + " - " + company.id));
            });
        }
    });

});
</script>


</body>
</html>
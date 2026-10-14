<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<style>
    /* ADVERTISERS SERVICE CARD */

.sec-icon {
  position: relative;
  display: inline-block;
  padding: 0;
  margin: 0 auto;
}

.sec-icon::before {
  content: "";
  position: absolute;
  height: 1px;
  left: -70px;
  margin-top: -5.5px;
  top: 60%;
  background: #f5f5f5;
  width: 50px;
}

.sec-icon::after {
  content: "";
  position: absolute;
  height: 1px;
  right: -70px;
  margin-top: -5.5px;
  top: 60%;
  background: #333;
  width: 50px;
}


.advertisers-service-sec .service-card {
  width: 100%;
  height: 100%;
  padding: 2em 1.5em;
  border-radius: 5px;
  box-shadow: 0 0 35px rgba(0, 0, 0, 0.12);
  /*cursor: pointer;*/
  transition: 0.5s;
  z-index: 2;
  overflow: hidden;
  background: #fff;
}


.advertisers-service-sec h3 {
  font-size: 20px;
  text-transform: capitalize;
  font-weight: 600;
  color: #1f194c;
  margin: 1em 0;
  z-index: 3;
}


.advertisers-service-sec .icon-wrapper {
    font-size: 30px;
    color: #14284d;
  }

/* ADVERTISERS SERVICE CARD ENDED */

</style>

    <h1 class="text-center my-4">Contact US</h1>

<!-- ADVERTISERS SERVICE CARD -->
<section id="advertisers" class="advertisers-service-sec py-4">
  <div class="container">

    <div class="row text-center d-flex justify-content-center">
      <div class="col-lg-3">
        <div class="service-card">
          <div class="icon-wrapper">
           <i class="fa fa-map-marker"></i>
          </div>
          <h3>Address</h3>
          <p>
           1309 Coffeen Avenue Ste 1200, Sheridan, WY 82801.
          </p>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="service-card">
          <div class="icon-wrapper">
            <i class="fa fa-envelope"></i>
          </div>
          <h3>Email</h3>
          <p>service@easyhomeservice.com
          </p>
        </div>
      </div>
            <div class="col-lg-3">
        <div class="service-card">
          <div class="icon-wrapper">
            <i class="fa fa-phone"></i>
          </div>
          <h3>Contact</h3>
          <p><a href="tel:+18335516680">
            +18335516680</a>
          </p>
        </div>
      </div>


    </div>
  </div>
</section>
<!-- ADVERTISERS SERVICE CARD ENDED -->
	
	<?php include 'includes/footer.php';?>
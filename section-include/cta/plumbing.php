<style>
    /* CTA Box Border */
.cta-box {
  border: 2px solid #d9d9d9;
  border-radius: 6px;
  background:#f0f8ff;
}

/* Logo Styling */
.cta-logo {
  max-height: 70px;
  width: auto;
}

/* 50-50 Divider Lines */
.cta-logo-wrap {
  width: 100%;
}

.cta-line {

    height: 1px;
    background-color: #cfcfcf;
    width: 35%;
}

/* Phone Highlight */
.cta-phone {
    color: #04d36f;
    font-weight: 700;
    display: inline-block;
    padding-left: 10px;
    text-decoration: none;
}
.cta-phone:hover{
    color:#000073;
}
.cta-text {
    font-size: 22px;
    font-weight: 500;
    margin-bottom: 0.5rem;
}
.pulse-zoom {
  animation: zoomPulse 1.6s ease-in-out infinite;
}

@keyframes zoomPulse {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.08);
  }
  100% {
    transform: scale(1);
  }
}

@media (max-width: 768px) {
    .cta-logo {
        max-height: 55px;
        width: auto;
    }
    .cta-text {
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 0.5rem;
}
}
</style>
<div class="roofing_section_2 bg-white">
<div class="container my-5">
  <div class="cta-box p-4 p-md-5 text-center">

    <!-- Logo with 50-50 lines -->
    <div class="d-flex align-items-center justify-content-center mb-4 cta-logo-wrap">
      <span class="cta-line"></span>

      <img src="/images/easyhomeservice.svg" alt="Power Plumbing Services" class="cta-logo mx-3">

      <span class="cta-line"></span>
    </div>

    <!-- CTA Text -->
    <p class="cta-text">
     No matter how big or small your plumbing problem is, Easy Home Service professionals can handle it. </p>
     <p class="cta-text mb-0">Get your Quote today. Call us at <a href="tel:+13216033297" class="cta-phone pulse-zoom">+13216033297</a>
    </p>
  </div>
</div>
</div>
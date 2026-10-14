<meta name="robots" content="noindex, nofollow"> 
<?php include 'header.php';?>
<style>
      body {
        font-family: 'Inter', sans-serif;
        background: #fff;
        margin: 0;
        padding: 0;
      }
      .hero-btn {
    display: inline-block;
    background: #45B96A;
    color: #fff;
    padding: 12px 30px;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    margin-top: 20px;
    box-shadow: 0 10px 20px rgba(69, 185, 106, 0.3);
    transition: all 0.3s ease;
}
      .hero-btn:hover {
        background: #369c57;
        color: #fff;
        transform: translateY(-2px);
      }
      .hero-features {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin-top: 30px;
      }
      .hero-features div {
        font-size: 14px;
        font-weight: 500;
        color: #1B2A4E;
        display: flex;
        align-items: center;
        gap: 8px;
      }
      .hero-features i {
        color: #45B96A;
      }

      :root {
        --primary: #1B2A4E;
        --border: #E5EFE9;
        --mainBlue :#20275A ;
        --secondaryGreen : #45B96A;
        
        /* Responsive phone movement positions */
        --phone-top-start: 29%;
        --phone-top-end: 38.5%;
        --phone-bottom-start: 62%;
        --phone-bottom-end: 70.5%;
      }

      @media(max-width:991px) {
        :root {
          --phone-top-start: 25%;
          --phone-top-end: 42%;
          --phone-bottom-start: 58%;
          --phone-bottom-end: 76%;
        }
      }

      @media(max-width:576px) {
        :root {
          --phone-top-start: 26%;
          --phone-top-end: 39%;
          --phone-bottom-start: 61%;
          --phone-bottom-end: 74%;
        }
      }

      .service-network {
        position: relative;
        padding: 80px 0;
      }

      .service-network .container {
        padding: 80px 0px;
      }

      .contractor-hero {
        position: relative;
        padding: 0px 0 80px;
        background: #fff;
        min-height: 700px;
        top: 6%;
      }
      .hero-bg{
        position:absolute;
        top:0;
        right:0;
        width:65%;
        height:95%;
        background:url('images-contractor/hero-contractor-bg.png') right center no-repeat;
        background-size:cover;
        pointer-events:none;
        z-index:1;
      }

      .hero-bg::after{
        content:"";
        position:absolute;
        inset:0;
        background:linear-gradient(
            to left,
            rgba(255,255,255,0),
            rgba(255,255,255,.25),
            rgba(255,255,255,.70),
            rgba(255,255,255,.95),
            #fff
        );
      }

      .contractor-hero .container{
        position:relative;
        z-index:5;
      }

      .network-wrapper {
        position: relative;
        width: 100%;
        max-width: 700px;
        aspect-ratio: 1/1;
        margin: auto;
      }

      /* Helper class to disable transitions instantly during loop resets */
      .no-transition,
      .no-transition * {
        transition: none !important;
        animation: none !important;
      }

      /* Avatar styling and animation overrides */
      .person {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        text-align: center;
        z-index: 20;
      }

      .person.top {
        top: 0;
      }

      .person.bottom {
        bottom: 0;
        opacity: 1 !important; /* override original .15 container opacity */
      }

      .person .person-image {
        width: 130px;
        height: 130px;
        border-radius: 0 !important;
        border: none !important;
        overflow: visible !important;
        box-shadow: none !important;
        position: relative;
        z-index: 25;
        background: transparent !important;
      }

      .person .person-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        display: block;
        box-shadow: 0 10px 25px rgba(0, 0, 0, .1);
        background: #fff;
        
        /* Initial state: visible with minimum opacity */
        opacity: 0.15;
        transform: scale(0.95);
        transition: opacity 1.5s cubic-bezier(0.4, 0, 0.2, 1), transform 1.5s cubic-bezier(0.4, 0, 0.2, 1);
        will-change: opacity, transform;
      }

      .person.active .person-image img {
        opacity: 1 !important;
        transform: scale(1) !important;
      }

      .person-label {
        position: relative;
        z-index: 50;
        margin-top: -15px;
        display: inline-block;
        background: var(--secondaryGreen);
        color: #fff;
        padding: 8px 20px;
        border-radius: 50px;
        font-size: 14px;
        font-weight: 600;
        
        /* Initial state: visible with low opacity, wait for circle to draw (1.5s delay) before fully showing */
        opacity: 0.3;
        transform: translateY(5px);
        transition: opacity 0.5s ease 1.5s, transform 0.5s ease 1.5s;
        will-change: opacity, transform;
      }

      .person.active .person-label {
        opacity: 1 !important;
        transform: translateY(0) !important;
      }

      /* SVG loader around homeowner and contractor */
      .person .circle-loader {
        position: absolute;
        top: -6px;
        left: -6px;
        width: calc(100% + 12px);
        height: calc(100% + 12px);
        transform: rotate(-90deg);
        z-index: 30;
        pointer-events: none;
        overflow: visible;
      }

      .person .circle-loader circle {
        fill: none;
        stroke: var(--secondaryGreen);
        stroke-width: 3;
        stroke-linecap: round;
        stroke-dasharray: 301.6;
        stroke-dashoffset: 301.6;
        transition: stroke-dashoffset 1.5s cubic-bezier(0.4, 0, 0.2, 1);
        will-change: stroke-dashoffset;
      }

      .person.active .circle-loader circle {
        stroke-dashoffset: 0;
        filter: drop-shadow(0 0 5px rgba(69, 185, 106, 0.8));
      }

      /* Connector */
      .connector {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        border-left: 2px dashed var(--secondaryGreen);
        z-index: 0;
      }
      
      .connector-top {
        top: 24%;
        height: 21%;
      }

      .connector-bottom {
        bottom: 15%;
        height: 30%;
      }

      /* Phone icons styling & straight movement keyframes */
      .phone-icon {
        position: absolute;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 35px;
        height: 35px;
        border-radius: 50%;
        background: var(--secondaryGreen);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 8px 20px rgba(123, 185, 150, .4);
        z-index: 100 !important; /* sit in front of images and connectors */
        
        /* Initial state: visible but dimmed */
        opacity: 0.35;
        will-change: top, left, transform, opacity, box-shadow;
      }

      .phone-top {
        top: var(--phone-top-start);
        left: 50%;
        transform: translate(-50%, -50%) scale(1);
      }

      .phone-bottom {
        top: var(--phone-bottom-start);
        left: 50%;
        transform: translate(-50%, -50%) scale(1);
      }

      /* Straight vertical transfer path from Homeowner to Top of Logo */
      .phone-top.animate-to-logo {
        animation: phoneMoveTop 1s cubic-bezier(0.25, 1, 0.5, 1) forwards;
      }

      @keyframes phoneMoveTop {
        0% {
          top: var(--phone-top-start);
          left: 50%;
          opacity: 0.35;
          transform: translate(-50%, -50%) scale(1);
          box-shadow: 0 0 0 rgba(73, 196, 107, 0);
        }
        15% {
          opacity: 1;
          transform: translate(-50%, -50%) scale(1.1);
          box-shadow: 0 0 15px rgba(73, 196, 107, 0.8);
        }
        100% {
          top: var(--phone-top-end); /* top of logo, and stay visible here */
          left: 50%;
          opacity: 1;
          transform: translate(-50%, -50%) scale(1);
          box-shadow: 0 0 10px rgba(73, 196, 107, 0.4);
        }
      }

      /* Straight vertical transfer path from Bottom of Logo to Top of Contractor */
      .phone-bottom.animate-to-contractor {
        animation: phoneMoveBottom 1s cubic-bezier(0.25, 1, 0.5, 1) forwards;
      }

      @keyframes phoneMoveBottom {
        0% {
          top: var(--phone-bottom-start);
          left: 50%;
          opacity: 0.35;
          transform: translate(-50%, -50%) scale(1);
          box-shadow: 0 0 0 rgba(73, 196, 107, 0);
        }
        15% {
          opacity: 1;
          transform: translate(-50%, -50%) scale(1.1);
          box-shadow: 0 0 15px rgba(73, 196, 107, 0.8);
        }
        100% {
          top: var(--phone-bottom-end); /* top of contractor image, and stay visible here */
          left: 50%;
          opacity: 1;
          transform: translate(-50%, -50%) scale(1);
          box-shadow: 0 0 10px rgba(73, 196, 107, 0.4);
        }
      }

      /* Brand Card */
      .brand-card {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0.95);
        background: #fff;
        border: 1px solid var(--border);
        border-radius: 24px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, .08);
        padding: 24px 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10;
        overflow: visible;
        
        /* Initial state: visible with minimum opacity */
        opacity: 0.35;
        transition: opacity 0.8s ease-in-out, transform 0.8s ease-in-out;
        will-change: opacity, transform;
      }

      .brand-card.active {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
      }

      .brand-logo-img {
        width: min(180px, 12vw);
        max-width: 100%;
        height: auto;
        display: block;
      }

      .logo-border-svg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 20;
      }

      .logo-border-path {
        fill: none;
        stroke: var(--secondaryGreen);
        stroke-width: 1.5;
        stroke-dasharray: 320;
        stroke-dashoffset: 320;
        will-change: stroke-dashoffset;
      }

      .brand-card.active .logo-border-path {
        transition: stroke-dashoffset 0.8s ease-in-out;
        stroke-dashoffset: 0;
      }

      /* Service Cards & entrance animation */
      .service-card {
        position: absolute;
        background: #fff;
        border: 1px solid var(--border);
        border-radius: 16px;
        padding: 12px 18px;
        display: flex;
        align-items: center;
        gap: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, .06);
        color: var(--primary);
        font-weight: 600;
        font-size: clamp(12px, 1vw, 16px);
        z-index: 5;
        
        /* Initial state: slightly visible and translated down */
        opacity: 0.3;
        transform: translateY(20px) scale(0.95);
        transition: opacity 0.6s cubic-bezier(0.34, 1.56, 0.64, 1), transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
        will-change: opacity, transform;
      }

      .service-card i {
        font-size: 22px;
        color: var(--primary);
      }

      .service-card.revealed {
        opacity: 1;
        transform: translateY(0) scale(1);
      }

      /* Positions */
      .roofing {
        top: 22%;
        left: 10%;
      }

      .electrical {
        top: 22%;
        right: 10%;
      }

      .hvac {
        top: 48%;
        left: 2%;
      }

      .plumbing {
        top: 48%;
        right: -2%;
      }

      .kitchen {
        bottom: 22%;
        left: 10%;
      }

      .bathroom {
        bottom: 22%;
        right: 10%;
      }

      /* Responsive */
      @media(max-width:991px) {
        .network-wrapper {
          max-width: 500px;
        }

        .person-image {
          width: 80px;
          height: 80px;
        }

        .person .person-image {
          width: 80px;
          height: 80px;
        }

        .person .person-image img {
          width: 80px;
          height: 80px;
        }

        .brand-logo-img {
          width: 180px;
        }

        .service-card {
          padding: 8px 12px;
          font-size: 11px;
        }

        .service-card i {
          font-size: 12px;
        }

        .phone-icon {
          width: 30px;
          height: 30px;
          font-size: 11px;
        }
      }

      @media(max-width:576px) {
        .network-wrapper {
          max-width: 320px;
        }

        .person-image {
          width: 60px;
          height: 60px;
        }

        .person .person-image {
          width: 60px;
          height: 60px;
        }

        .person .person-image img {
          width: 60px;
          height: 60px;
        }

        .person-label {
          font-size: 10px;
          padding: 4px 10px;
        }

        .brand-card {
          padding: 12px 20px;
        }

        .brand-logo-img {
          width: 120px;
        }

        .service-card {
          font-size: 9px;
          padding: 6px 8px;
        }

        .service-card i {
          font-size: 10px;
        }
      }
      
      .hero-content{
        text-align:left;
      }
      .hero-content h1{
        color: var(--mainBlue);
        font-weight:700;
        margin-bottom:15px;
      }
      .hero-content h1 span {
        color: var(--secondaryGreen);
      }
    </style>

<section class="contractor-hero">
    <div class="hero-bg"></div>
      <div class="container position-relative">
        <div class="row align-items-center justify-content-between">
          <!-- Left Content -->
          <div class="col-lg-5">
            <div class="hero-content">
              <h1> Connect With Homeowners Ready <span>to Start Their Projects</span>
              </h1>
              <p> Easy Home Service helps contractors connect with homeowners actively searching for roofing, remodeling, HVAC, solar, plumbing, and other home services across the U.S. </p>
              <a href="#" class="hero-btn"> Start Getting Exclusive Leads <i class="fa-solid fa-arrow-right ms-2"></i>
              </a>
              <div class="hero-features">
                <div>
                  <i class="fa-solid fa-circle-check"></i> Exclusive Leads
                </div>
                <div>
                  <i class="fa-solid fa-circle-check"></i> Real Homeowners
                </div>
                <div>
                  <i class="fa-solid fa-circle-check"></i> No Long-Term Contracts
                </div>
                <div>
                  <i class="fa-solid fa-circle-check"></i> Nationwide Coverage
                </div>
              </div>
            </div>
          </div>
          <!-- Right Graphic -->
          <div class="col-lg-6">
            <div class="network-wrapper">
              
              <!-- Homeowner -->
              <div class="person top homeowner">
                  <div class="person-image">
                      <svg class="circle-loader" viewBox="0 0 100 100">
                          <circle cx="50" cy="50" r="48"></circle>
                      </svg>
                      <!-- Using beautiful public placeholder images for HTML testing convenience -->
                      <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=150&auto=format&fit=crop" onerror="this.src='images-contractor/homeowner.jpg'" alt="Homeowner">
                  </div>
                  <div class="person-label">Home Owner</div>
              </div>

              <!-- Connector Lines -->
              <div class="connector connector-top"></div>
              <div class="connector connector-bottom"></div>
              
              <!-- Phone Icons -->
              <div class="phone-icon phone-top">
                <i class="fa-solid fa-phone"></i>
              </div>
              <div class="phone-icon phone-bottom">
                <i class="fa-solid fa-phone"></i>
              </div>

              <!-- Service Cards -->
              <div class="service-card roofing">
                <i class="fa-solid fa-house-chimney"></i> Roofing
              </div>
              <div class="service-card electrical">
                <i class="fa-solid fa-bolt-lightning"></i> Electrical
              </div>
              <div class="service-card hvac">
                <i class="fa-solid fa-fan"></i> HVAC
              </div>
              <div class="service-card plumbing">
                <i class="fa-solid fa-faucet-drip"></i> Plumbing
              </div>
              <div class="service-card kitchen">
                <i class="fa-solid fa-kitchen-set"></i> Kitchen
              </div>
              <div class="service-card bathroom">
                <i class="fa-solid fa-bath"></i> Bathroom
              </div>

              <!-- Center Logo -->
              <div class="brand-card">
                  <svg class="logo-border-svg" viewBox="0 0 100 60" preserveAspectRatio="none">
                      <rect class="logo-border-path"
                            x="1"
                            y="1"
                            width="98"
                            height="58"
                            rx="10"
                            ry="10"></rect>
                  </svg>
                  
                  <!-- Inlined Logo SVG to ensure it always renders locally -->
                  <svg class="brand-logo-img" viewBox="0 0 500 185.39" xmlns="http://www.w3.org/2000/svg">
                      <style type="text/css">
                          .brand-logo-img .st0{fill:#4AB96A;}
                          .brand-logo-img .st1{fill:#1F2758;}
                          .brand-logo-img .st2{fill:#21275A;}
                      </style>
                      <g>
                          <g>
                              <g>
                                  <rect x="79.34" y="75.18" class="st0" width="10.31" height="10.39"/>
                                  <rect x="93.35" y="75.18" class="st0" width="10.31" height="10.39"/>
                                  <rect x="79.34" y="87.57" class="st0" width="10.31" height="10.39"/>
                                  <rect x="93.35" y="87.57" class="st0" width="10.31" height="10.39"/>
                              </g>
                          </g>
                          <polygon class="st1" points="102.49,51.2 91.5,36.1 80.51,51.2 49.2,94.22 34.33,114.63 51.74,114.63 51.74,104.98 59.57,94.22 
                              62.05,90.82 90.89,51.2 91.5,50.36 92.11,51.2 120.95,90.82 123.43,94.22 131.26,104.98 131.26,114.63 148.67,114.63 133.8,94.22 	
                              "/>
                          <g>
                              <g>
                                  <path class="st1" d="M67.34,116.15H81.8v5.39H67.34v3.69h10.86v5.88H61.04v-24.63h17.15v5.85H67.34V116.15z"/>
                                  <path class="st1" d="M87.76,131.11H81.5v-24.63h6.26v9.32h7.1v-9.32h6.26v24.63h-6.26v-9.29h-7.1V131.11z"/>
                                  <path class="st1" d="M112.91,125.68c0.74,0,1.38-0.14,1.91-0.42c0.63-0.3,0.96-0.79,1.01-1.46c0.02-0.35-0.09-0.66-0.35-0.94
                                      c-0.25-0.28-0.58-0.52-0.97-0.71c-0.39-0.2-0.85-0.37-1.36-0.5c-0.51-0.14-1.02-0.24-1.53-0.31c-1-0.16-1.95-0.44-2.87-0.83
                                      s-1.72-0.91-2.42-1.55c-0.7-0.64-1.25-1.41-1.67-2.31c-0.42-0.9-0.63-1.95-0.63-3.13c0-1.21,0.25-2.27,0.75-3.18
                                      c0.5-0.92,1.17-1.69,2-2.31c0.83-0.63,1.79-1.1,2.85-1.41c1.07-0.31,2.17-0.47,3.3-0.47c0.74,0,1.48,0.06,2.21,0.17
                                      c0.73,0.12,1.45,0.32,2.16,0.63c0.71,0.3,1.4,0.71,2.09,1.22c0.68,0.51,1.34,1.15,1.97,1.91l-4.07,3.13
                                      c-0.65-0.7-1.38-1.21-2.19-1.53c-0.79-0.32-1.53-0.49-2.23-0.49c-0.02,0-0.05,0.01-0.07,0.03c-0.72,0-1.33,0.19-1.83,0.56
                                      c-0.5,0.37-0.76,0.92-0.78,1.63c0.05,0.6,0.36,1.08,0.94,1.44c0.58,0.36,1.36,0.64,2.33,0.85c1.09,0.21,2.16,0.48,3.22,0.8
                                      c1.05,0.32,1.98,0.8,2.78,1.43c0.8,0.63,1.43,1.43,1.9,2.4c0.39,0.86,0.59,1.91,0.59,3.17c0,0.21,0,0.41,0,0.59
                                      c-0.05,1.18-0.37,2.23-0.97,3.15c-0.6,0.92-1.36,1.69-2.28,2.31c-0.92,0.63-1.94,1.1-3.08,1.43c-1.14,0.32-2.27,0.49-3.41,0.49
                                      c-1.48,0-2.96-0.37-4.44-1.11c-1.47-0.74-2.79-1.85-3.95-3.34l3.93-3.69c0.63,0.74,1.38,1.31,2.28,1.7
                                      c0.89,0.39,1.77,0.61,2.63,0.66C112.74,125.68,112.82,125.68,112.91,125.68z"/>
                              </g>
                              <path class="st1" d="M107.76,123.31c0,0-2.59-3.49-7.11-3.06c-3.85,0.36-1.86,6.64-1.86,6.64s3.29-2.49,5.04,0.11"/>
                          </g>
                      </g>
                      <g>
                          <path class="st1" d="M91.5,181.6c-2.01,0-3.91-0.78-5.33-2.21L4.94,98.16c-1.42-1.42-2.21-3.32-2.21-5.33
                              c0-2.01,0.78-3.91,2.21-5.33L86.17,6.27c2.94-2.94,7.72-2.94,10.66,0l81.23,81.23c1.42,1.42,2.21,3.32,2.21,5.33
                              c0,2.01-0.78,3.91-2.21,5.33l-81.23,81.23C95.41,180.81,93.51,181.6,91.5,181.6z M91.5,7.93c-0.94,0-1.88,0.36-2.6,1.07L7.67,90.23
                              c-0.69,0.69-1.07,1.61-1.07,2.6c0,0.98,0.38,1.9,1.08,2.6l81.23,81.23c1.39,1.39,3.8,1.39,5.19,0l81.23-81.23
                              c0.69-0.69,1.07-1.62,1.07-2.6c0-0.98-0.38-1.9-1.07-2.6L94.1,9C93.38,8.28,92.44,7.93,91.5,7.93z"/>
                      </g>
                      <g>
                          <rect x="194.39" y="4.06" class="st2" width="1.03" height="177.68"/>
                      </g>
                      <g>
                          <path class="st2" d="M247.78,4.06c1.27,0,2.31,0.17,3.12,0.51c0.81,0.34,1.44,0.78,1.91,1.32c0.46,0.54,0.78,1.16,0.95,1.87
                              c0.17,0.71,0.26,1.43,0.26,2.16v5.5h-1.47c0-2.93-0.79-5.07-2.38-6.41c-1.59-1.34-3.85-2.02-6.78-2.02h-13.63v19.06h19.79v2.93
                              h-19.79V49.5h12.83c3.32,0,5.95-0.61,7.88-1.83c1.93-1.22,3.46-3.3,4.58-6.23l1.47,0.37l-2.57,6.96c-0.39,1.12-1.04,2.02-1.94,2.67
                              c-0.9,0.66-2.09,0.99-3.55,0.99h-25.29V12.86c0-2.2-0.31-3.97-0.92-5.31c-0.61-1.34-2.02-2.02-4.21-2.02h-1.47V4.06H247.78z"/>
                          <path class="st2" d="M307.15,52.43c-0.83,0.24-1.81,0.37-2.93,0.37c-0.83,0-1.8-0.1-2.9-0.29c-1.1-0.19-2.22-0.62-3.37-1.28
                              c-1.15-0.66-2.27-1.62-3.37-2.9c-1.1-1.27-2.04-2.96-2.82-5.06l-1.83-4.76H269.4l-5.86,13.93h-3.3l20.52-48.37h2.2l16.12,39.21
                              c0.59,1.37,1.14,2.53,1.65,3.48c0.51,0.95,1.09,1.72,1.72,2.31c0.63,0.59,1.32,1.03,2.05,1.32c0.73,0.29,1.61,0.49,2.64,0.59V52.43
                              z M270.5,35.58h17.96l-8.8-21.25L270.5,35.58z"/>
                          <path class="st2" d="M341.08,40.12c0,2.05-0.36,3.91-1.06,5.57c-0.71,1.66-1.72,3.09-3.04,4.29c-1.32,1.2-2.92,2.11-4.8,2.75
                              c-1.88,0.63-3.99,0.95-6.34,0.95c-2,0-3.99-0.21-5.97-0.62c-1.98-0.42-3.76-1.01-5.35-1.8c-1.59-0.78-2.88-1.72-3.88-2.82
                              c-1-1.1-1.5-2.33-1.5-3.7V36.9h1.47c0.82,4.93,2.44,8.48,4.84,10.63c2.4,2.15,5.67,3.22,9.8,3.22c1.26,0,2.46-0.16,3.6-0.48
                              c1.14-0.32,2.15-0.79,3.02-1.43c0.87-0.63,1.58-1.42,2.11-2.35c0.53-0.93,0.8-2,0.8-3.22c0-2.15-0.67-3.98-2.01-5.5
                              c-1.34-1.51-3.36-3.05-6.05-4.62l-9.02-5.35c-3.13-1.86-5.34-3.74-6.63-5.64c-1.3-1.91-1.94-4.23-1.94-6.96
                              c0-1.91,0.34-3.62,1.03-5.13c0.68-1.51,1.65-2.82,2.9-3.92c1.25-1.1,2.74-1.94,4.47-2.53c1.73-0.59,3.68-0.88,5.83-0.88
                              c1.81,0,3.65,0.2,5.53,0.59c1.88,0.39,3.58,0.97,5.09,1.72c1.51,0.76,2.76,1.69,3.74,2.79c0.98,1.1,1.47,2.33,1.47,3.7v7.84h-1.47
                              c-0.83-4.93-2.4-8.45-4.73-10.55c-2.33-2.1-5.56-3.15-9.69-3.15c-1.07,0-2.11,0.17-3.13,0.51c-1.02,0.34-1.92,0.83-2.69,1.47
                              c-0.78,0.64-1.41,1.42-1.89,2.35c-0.49,0.93-0.73,1.95-0.73,3.08c0,1.08,0.17,2.03,0.51,2.86c0.34,0.83,0.85,1.61,1.54,2.35
                              c0.68,0.73,1.54,1.45,2.56,2.16c1.03,0.71,2.2,1.45,3.52,2.24l9.01,5.35c1.56,0.93,2.92,1.82,4.07,2.67
                              c1.15,0.86,2.09,1.76,2.82,2.71c0.73,0.95,1.28,1.97,1.65,3.04C340.9,37.53,341.08,38.75,341.08,40.12z"/>
                          <path class="st2" d="M370.62,28.61l15.32-24.55h3.3l-17.15,27.85v20.52h-6.6V32.43l-12.46-18.84c-0.73-1.07-1.45-2.09-2.16-3.04
                              c-0.71-0.95-1.48-1.78-2.31-2.49c-0.83-0.71-1.75-1.28-2.75-1.72c-1-0.44-2.14-0.71-3.41-0.81V4.06h6.6c1.37,0,2.59,0.23,3.66,0.7
                              c1.07,0.46,2.05,1.08,2.93,1.83c0.88,0.76,1.67,1.61,2.38,2.57c0.71,0.95,1.38,1.94,2.01,2.97L370.62,28.61z"/>
                          <path class="st2" d="M258.34,108.22c0,2.2,0.3,3.97,0.92,5.31c0.61,1.34,2.02,2.01,4.21,2.01h1.47v1.47h-6.6
                              c-1.27,0-2.33-0.11-3.19-0.33c-0.86-0.22-1.54-0.66-2.05-1.32c-0.51-0.66-0.87-1.55-1.06-2.68c-0.2-1.12-0.29-2.61-0.29-4.47V93.56
                              h-21.99v23.45h-6.6V77.44c0-2.2-0.31-3.97-0.92-5.31c-0.61-1.34-2.02-2.02-4.21-2.02h-1.47v-1.47h6.6c1.27,0,2.33,0.11,3.19,0.33
                              c0.85,0.22,1.54,0.66,2.05,1.32c0.51,0.66,0.87,1.56,1.06,2.71c0.19,1.15,0.29,2.63,0.29,4.43v13.19h21.99V68.64h6.6V108.22z"/>
                          <path class="st2" d="M269.04,92.83c0-3.57,0.52-6.91,1.58-10.04c1.05-3.13,2.57-5.85,4.54-8.17c1.98-2.32,4.37-4.14,7.18-5.46
                              c2.81-1.32,5.95-1.98,9.42-1.98c3.47,0,6.61,0.66,9.42,1.98c2.81,1.32,5.2,3.14,7.18,5.46c1.98,2.32,3.49,5.05,4.54,8.17
                              c1.05,3.13,1.58,6.47,1.58,10.04c0,3.62-0.53,6.98-1.58,10.08c-1.05,3.1-2.57,5.82-4.54,8.14c-1.98,2.32-4.37,4.14-7.18,5.46
                              c-2.81,1.32-5.95,1.98-9.42,1.98c-3.47,0-6.61-0.66-9.42-1.98c-2.81-1.32-5.2-3.14-7.18-5.46c-1.98-2.32-3.49-5.03-4.54-8.14
                              C269.56,99.8,269.04,96.45,269.04,92.83z M307.15,92.83c0-3.47-0.35-6.61-1.06-9.42c-0.71-2.81-1.72-5.2-3.04-7.18
                              c-1.32-1.98-2.93-3.49-4.84-4.54c-1.91-1.05-4.06-1.58-6.45-1.58c-2.39,0-4.54,0.53-6.45,1.58c-1.91,1.05-3.52,2.56-4.84,4.54
                              c-1.32,1.98-2.33,4.37-3.04,7.18c-0.71,2.81-1.06,5.95-1.06,9.42c0,3.47,0.35,6.61,1.06,9.42c0.71,2.81,1.72,5.2,3.04,7.18
                              c1.32,1.98,2.93,3.49,4.84,4.54c1.91,1.05,4.06,1.58,6.45,1.58c2.39,0,4.54-0.52,6.45-1.58c1.9-1.05,3.52-2.57,4.84-4.54
                              c1.32-1.98,2.33-4.37,3.04-7.18C306.79,99.44,307.15,96.3,307.15,92.83z"/>
                          <path class="st2" d="M379.49,120.31c-2.64,0-4.84-0.31-6.6-0.92c-1.76-0.61-3.15-1.55-4.18-2.82c-1.03-1.27-1.75-2.91-2.16-4.91
                              c-0.42-2-0.62-4.37-0.62-7.11V76.34l-18.32,40.68h-1.47l-19.06-41.41v41.41h-2.93V68.64h6.96l17.59,38.11l17.22-38.11h6.6v35.91
                              c0,4.45,0.56,7.94,1.69,10.48c1.12,2.54,2.88,3.81,5.28,3.81V120.31z"/>
                          <path class="st2" d="M412.47,68.64c1.27,0,2.31,0.17,3.11,0.51c0.81,0.34,1.44,0.78,1.91,1.32c0.46,0.54,0.78,1.16,0.95,1.87
                              c0.17,0.71,0.26,1.43,0.26,2.16V80h-1.47c0-2.93-0.79-5.07-2.38-6.41c-1.59-1.34-3.85-2.02-6.78-2.02h-13.63v19.06h19.79v2.93
                              h-19.79v20.52h12.83c3.32,0,5.95-0.61,7.88-1.83c1.93-1.22,3.46-3.3,4.58-6.23l1.47,0.37l-2.56,6.96
                              c-0.39,1.12-1.04,2.02-1.94,2.67c-0.91,0.66-2.09,0.99-3.55,0.99h-25.29V77.44c0-2.2-0.31-3.97-0.92-5.31
                              c-0.61-1.34-2.01-2.02-4.21-2.02h-1.47v-1.47H412.47z"/>
                          <path class="st2" d="M251.3,169.28c0,2.05-0.35,3.91-1.06,5.57c-0.71,1.66-1.72,3.09-3.04,4.29c-1.32,1.2-2.92,2.11-4.8,2.75
                              c-1.88,0.63-3.99,0.95-6.34,0.95c-2,0-3.99-0.21-5.97-0.62c-1.98-0.42-3.76-1.01-5.35-1.8c-1.59-0.78-2.88-1.72-3.88-2.82
                              c-1-1.1-1.5-2.33-1.5-3.7v-7.84h1.47c0.82,4.93,2.44,8.48,4.84,10.63c2.4,2.15,5.67,3.22,9.8,3.22c1.26,0,2.46-0.16,3.6-0.48
                              c1.14-0.32,2.15-0.79,3.02-1.43c0.87-0.63,1.58-1.42,2.11-2.35c0.53-0.93,0.8-2,0.8-3.22c0-2.15-0.67-3.98-2.02-5.5
                              c-1.34-1.51-3.36-3.05-6.05-4.62l-9.01-5.35c-3.13-1.86-5.34-3.74-6.63-5.64c-1.3-1.91-1.94-4.23-1.94-6.96
                              c0-1.91,0.34-3.61,1.03-5.13c0.68-1.51,1.65-2.82,2.9-3.92c1.25-1.1,2.74-1.94,4.47-2.53c1.73-0.59,3.68-0.88,5.83-0.88
                              c1.81,0,3.65,0.2,5.53,0.59c1.88,0.39,3.58,0.97,5.09,1.72c1.51,0.76,2.76,1.69,3.74,2.79c0.98,1.1,1.47,2.33,1.47,3.7v7.84h-1.47
                              c-0.83-4.93-2.4-8.45-4.73-10.55c-2.33-2.1-5.56-3.15-9.68-3.15c-1.07,0-2.11,0.17-3.13,0.51c-1.02,0.34-1.92,0.83-2.69,1.47
                              c-0.78,0.64-1.41,1.42-1.89,2.35c-0.49,0.93-0.73,1.95-0.73,3.08c0,1.07,0.17,2.03,0.51,2.86c0.34,0.83,0.85,1.61,1.54,2.35
                              c0.68,0.73,1.54,1.45,2.57,2.16c1.03,0.71,2.2,1.45,3.52,2.24l9.01,5.35c1.56,0.93,2.92,1.82,4.07,2.67
                              c1.15,0.86,2.09,1.76,2.82,2.71c0.73,0.95,1.28,1.97,1.65,3.04C251.12,166.7,251.3,167.92,251.3,169.28z"/>
                          <path class="st2" d="M286.85,133.22c1.27,0,2.31,0.17,3.12,0.51c0.81,0.34,1.44,0.78,1.91,1.32c0.46,0.54,0.78,1.16,0.95,1.87
                              c0.17,0.71,0.26,1.43,0.26,2.16v5.5h-1.47c0-2.93-0.79-5.07-2.38-6.41c-1.59-1.34-3.85-2.02-6.78-2.02h-13.63v19.06h19.79v2.93
                              h-19.79v20.52h12.83c3.32,0,5.95-0.61,7.88-1.83c1.93-1.22,3.46-3.3,4.58-6.23l1.47,0.37l-2.57,6.96
                              c-0.39,1.12-1.04,2.02-1.94,2.67c-0.9,0.66-2.09,0.99-3.55,0.99h-25.29v-39.58c0-2.2-0.31-3.97-0.92-5.31
                              c-0.61-1.34-2.02-2.02-4.21-2.02h-1.47v-1.47H286.85z"/>
                          <path class="st2" d="M317.19,159.24h-5.13v22.35h-6.6v-39.58c0-2.2-0.31-3.97-0.92-5.31c-0.61-1.34-2.01-2.02-4.21-2.02h-1.47
                              v-1.47h19.06c1.56,0,3.4,0.14,5.5,0.4c2.1,0.27,4.1,0.87,6.01,1.8c1.91,0.93,3.52,2.26,4.84,3.99c1.32,1.73,1.98,4.07,1.98,7
                              c0,2.1-0.37,3.88-1.1,5.35c-0.73,1.47-1.67,2.68-2.82,3.63c-1.15,0.95-2.42,1.7-3.81,2.24c-1.39,0.54-2.72,0.95-3.99,1.25
                              l7.7,12.83c0.93,1.56,1.8,2.86,2.6,3.88c0.81,1.03,1.6,1.87,2.38,2.53c0.78,0.66,1.56,1.14,2.35,1.43
                              c0.78,0.29,1.64,0.49,2.56,0.59v1.47c-0.39,0.19-0.99,0.37-1.8,0.51c-0.81,0.15-1.67,0.22-2.6,0.22c-1.27,0-2.46-0.17-3.55-0.51
                              c-1.1-0.34-2.16-0.93-3.19-1.76c-1.03-0.83-2.06-1.93-3.11-3.3c-1.05-1.37-2.16-3.05-3.33-5.06L317.19,159.24z M317.55,156.68
                              c1.03,0,2.19-0.19,3.48-0.59c1.29-0.39,2.53-0.99,3.7-1.8c1.17-0.81,2.16-1.86,2.97-3.15c0.81-1.29,1.21-2.87,1.21-4.73
                              c0-1.91-0.4-3.54-1.21-4.91c-0.81-1.37-1.8-2.47-2.97-3.3c-1.17-0.83-2.41-1.44-3.7-1.83c-1.3-0.39-2.46-0.59-3.48-0.59
                              c-0.93,0-1.89,0.07-2.89,0.22c-1,0.15-1.87,0.32-2.6,0.51v19.42c0.73,0.2,1.6,0.37,2.6,0.51
                              C315.66,156.6,316.63,156.68,317.55,156.68z"/>
                          <path class="st2" d="M365.93,171.34c1.22-2.83,2.24-5.15,3.04-6.96c0.81-1.81,1.47-3.32,1.98-4.54c0.51-1.22,0.94-2.25,1.28-3.08
                              c0.34-0.83,0.68-1.65,1.03-2.46c0.34-0.81,0.71-1.7,1.1-2.67c0.39-0.98,0.92-2.25,1.58-3.81c0.66-1.56,1.48-3.51,2.46-5.83
                              c0.98-2.32,2.2-5.24,3.66-8.76h3.52l-21.03,49.11h-1.32l-17-40.53c-0.59-1.37-1.14-2.53-1.65-3.48c-0.51-0.95-1.09-1.72-1.72-2.31
                              c-0.64-0.59-1.32-1.03-2.05-1.32c-0.73-0.29-1.61-0.49-2.64-0.59v-1.47c0.2,0,0.58-0.02,1.14-0.07c0.56-0.05,1.01-0.07,1.36-0.07
                              c0.88,0,1.88,0.1,3,0.29c1.12,0.2,2.26,0.61,3.41,1.25c1.15,0.64,2.26,1.56,3.37,2.79c1.1,1.22,2.09,2.88,2.97,4.98L365.93,171.34z
                              "/>
                          <path class="st2" d="M393.05,133.22h6.6v39.58c0,2.2,0.3,3.97,0.92,5.31c0.61,1.34,2.01,2.01,4.21,2.01h1.47v1.47h-6.6
                              c-1.27,0-2.33-0.11-3.19-0.33c-0.86-0.22-1.54-0.66-2.05-1.32c-0.51-0.66-0.87-1.55-1.06-2.68c-0.2-1.12-0.29-2.61-0.29-4.47
                              V133.22z"/>
                          <path class="st2" d="M450.07,148.62c-0.93-4.79-2.65-8.31-5.17-10.55c-2.52-2.25-5.8-3.37-9.86-3.37c-2.39,0-4.65,0.4-6.78,1.21
                              c-2.13,0.81-3.99,2.13-5.61,3.96c-1.61,1.83-2.88,4.24-3.81,7.22c-0.93,2.98-1.39,6.67-1.39,11.07c0,2.74,0.33,5.42,0.99,8.06
                              c0.66,2.64,1.7,4.98,3.11,7.04s3.24,3.71,5.46,4.98c2.22,1.27,4.9,1.91,8.02,1.91c3.66,0,6.82-0.88,9.46-2.64
                              c2.64-1.76,4.98-4.3,7.04-7.62l1.47,1.1c-1.17,2.3-2.48,4.21-3.92,5.75c-1.44,1.54-2.99,2.79-4.65,3.74
                              c-1.66,0.95-3.46,1.62-5.39,2.02c-1.93,0.39-3.99,0.59-6.19,0.59c-3.47,0-6.61-0.65-9.42-1.94c-2.81-1.29-5.2-3.07-7.18-5.31
                              c-1.98-2.25-3.49-4.88-4.54-7.91c-1.05-3.03-1.58-6.28-1.58-9.75c0-3.66,0.6-7.1,1.8-10.3c1.2-3.2,2.82-6,4.87-8.39
                              c2.05-2.39,4.46-4.27,7.22-5.64c2.76-1.37,5.7-2.05,8.83-2.05c4.06,0,7.55,0.57,10.48,1.72c2.93,1.15,5.06,2.53,6.38,4.14
                              c0.93,1.12,1.47,2.69,1.61,4.69c0.15,2,0.22,4.1,0.22,6.3H450.07z"/>
                          <path class="st2" d="M488.03,133.22c1.27,0,2.31,0.17,3.11,0.51c0.81,0.34,1.44,0.78,1.91,1.32c0.46,0.54,0.78,1.16,0.95,1.87
                              c0.17,0.71,0.26,1.43,0.26,2.16v5.5h-1.47c0-2.93-0.79-5.07-2.38-6.41c-1.59-1.34-3.85-2.02-6.78-2.02H470v19.06h19.79v2.93H470
                              v20.52h12.83c3.32,0,5.95-0.61,7.88-1.83c1.93-1.22,3.46-3.3,4.58-6.23l1.47,0.37l-2.56,6.96c-0.39,1.12-1.04,2.02-1.94,2.67
                              c-0.91,0.66-2.09,0.99-3.55,0.99h-25.29v-39.58c0-2.2-0.31-3.97-0.92-5.31c-0.61-1.34-2.01-2.02-4.21-2.02h-1.47v-1.47H488.03z"/>
                      </g>
                  </svg>
              </div>

              <!-- Contractor -->
              <div class="person bottom">
                  <div class="person-image">
                      <svg class="circle-loader" viewBox="0 0 100 100">
                          <circle cx="50" cy="50" r="48"></circle>
                      </svg>
                      <!-- Using beautiful public placeholder images for HTML testing convenience -->
                      <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=150&auto=format&fit=crop" onerror="this.src='images-contractor/contractor.png'" alt="Contractor">
                  </div>
                  <div class="person-label">Contractor</div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

<script>
$(document).ready(function(){
    // Start workflow loop
    runWorkflowLoop();
});

let workflowTimers = [];

function clearWorkflowTimers() {
    workflowTimers.forEach(timer => clearTimeout(timer));
    workflowTimers = [];
}

function runWorkflowLoop() {
    clearWorkflowTimers();
    
    const $wrapper = $('.network-wrapper');
    const $homeowner = $('.person.top.homeowner');
    const $contractor = $('.person.bottom');
    const $phoneTop = $('.phone-top');
    const $phoneBottom = $('.phone-bottom');
    const $brandCard = $('.brand-card');
    const $serviceCards = $('.service-card');

    // 1. Temporarily disable transitions during reset so nothing "takes back"
    $wrapper.addClass('no-transition');
    
    // Remove state classes instantly
    $wrapper.removeClass('active');
    $homeowner.removeClass('active');
    $contractor.removeClass('active');
    $phoneTop.removeClass('animate-to-logo');
    $phoneBottom.removeClass('animate-to-contractor');
    $brandCard.removeClass('active');
    $serviceCards.removeClass('revealed');
    
    // Force reflow
    void $wrapper[0].offsetWidth;
    
    // 2. Re-enable transitions for the animation loop
    $wrapper.removeClass('no-transition');

    // --- STEP 1: HOMEOWNER REVEAL ---
    $wrapper.addClass('active');
    $homeowner.addClass('active');

    // --- STEP 2: HOMEOWNER PHONE TRANSFER ---
    workflowTimers.push(setTimeout(() => {
        $phoneTop.addClass('animate-to-logo');
    }, 1500));

    // --- STEP 3: LOGO REVEAL ---
    workflowTimers.push(setTimeout(() => {
        $brandCard.addClass('active');
    }, 2500));

    // --- STEP 4: LOGO TO CONTRACTOR TRANSFER ---
    workflowTimers.push(setTimeout(() => {
        $phoneBottom.addClass('animate-to-contractor');
    }, 3300));

    // --- STEP 5: CONTRACTOR REVEAL ---
    workflowTimers.push(setTimeout(() => {
        $contractor.addClass('active');
    }, 4300));

    // --- STEP 6: SERVICE CARD REVEALS (AT THE LAST) ---
    workflowTimers.push(setTimeout(() => {
        // Sequence reveals to sync with clockwise order one by one
        // 1. Plumbing (middle-right)
        workflowTimers.push(setTimeout(() => $('.plumbing').addClass('revealed'), 0));
        
        // 2. Bathroom (bottom-right)
        workflowTimers.push(setTimeout(() => $('.bathroom').addClass('revealed'), 560));
        
        // 3. Kitchen (bottom-left)
        workflowTimers.push(setTimeout(() => $('.kitchen').addClass('revealed'), 1150));
        
        // 4. HVAC (middle-left)
        workflowTimers.push(setTimeout(() => $('.hvac').addClass('revealed'), 1750));
        
        // 5. Roofing (top-left)
        workflowTimers.push(setTimeout(() => $('.roofing').addClass('revealed'), 2345));
        
        // 6. Electrical (top-right)
        workflowTimers.push(setTimeout(() => $('.electrical').addClass('revealed'), 2900));
        
    }, 5800));

    // --- STEP 7: LOOP RESET & RESTART ---
    workflowTimers.push(setTimeout(() => {
        runWorkflowLoop();
    }, 10800));
}
</script>


<?php include 'footer.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HVAC Services Near You</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!-- Font Awesome 6 (free) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


  <link rel="icon" type="image/icon" href="https://easyhomeservice.com/images/favicon.svg">



<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16938917400"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
 
  gtag('config', 'AW-16938917400');
</script>



  <style>
  
  
  :root{
      
--chat-body:#ffffff00;
--chat-input:#ffffffb8;
--chatbox:#ffffff3d;
  }
  /*hero*/
  
  /*/hero*/
  /*call buttons*/
  /* Layout */
.options {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 1rem;
  padding: 1rem;
}

/* Shared Button Styles */
.options a {
    font-family: 'Poppins', sans-serif;
    text-decoration: none;
    font-weight: 600;
    font-size: 13px;
    padding: 4px 16px;
    transition: all 0.3s 
ease;
    text-align: center;
    width: 79%;
    max-width: 320px;
    letter-spacing: 0.5px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 4px;
    color: black;
}

/* Call Now Button */
.opt-call {
  background: linear-gradient(135deg, #00c853, #4caf50);
  color: #fff;
  border: none;
}

.opt-call:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 20px rgba(76, 175, 80, 0.4);
}

/* Request Callback Button */
.opt-callback {
  background: transparent;
  color: #444;
  border: 2px solid #777;
}

.opt-callback:hover {
  background: #444;
  color: #fff;
  transform: translateY(-3px);
  border-color: #444;
  box-shadow: 0 8px 20px rgba(68, 68, 68, 0.3);
}

/* Icon Styling */
.options a i {
  font-size: 1.2rem;
  transition: transform 0.3s ease;
}

.options a:hover i {
  transform: scale(1.2);
}

/* Smooth fade-in animation */
@keyframes fadeInButtons {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.options a {
  animation: fadeInButtons 0.6s ease forwards;
}

.options a:nth-child(2) {
  animation-delay: 0.2s;
}

  /*/buttons*/
  /* === Awesome HVAC Issue Buttons === */
.issue-options {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
  gap: 14px;
  margin-top: 14px;
}

.issue-btn {
  border: none;
  border-radius: 16px;
  padding: 16px 12px;
  font-size: 16px;
  font-weight: 600;
  background: linear-gradient(135deg, #ffffff, #f0f4ff);
  color: #000073;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
  cursor: pointer;
  transition: all 0.3s ease;
  text-align: center;
  letter-spacing: 0.3px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  position: relative;
  overflow: hidden;
}

.issue-btn::before {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.3);
  transition: all 0.4s ease;
}

.issue-btn:hover::before {
  left: 100%;
}

.issue-btn:hover {
  background: linear-gradient(135deg, #000073, #3b82f6);
  color: #fff;
  transform: translateY(-3px) scale(1.03);
  box-shadow: 0 8px 20px rgba(59, 130, 246, 0.4);
}

.issue-btn:active {
  transform: scale(0.97);
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
}

.issue-btn[data-issue="Heating"] {
  background: linear-gradient(135deg, #fff5f2, #ffe3dc);
}

.issue-btn[data-issue="Cooling"] {
  background: linear-gradient(135deg, #f0f8ff, #dbeafe);
}

.issue-btn[data-issue="Ventilation"] {
  background: linear-gradient(135deg, #f3fff5, #dcfce7);
}

.issue-btn[data-issue="Heating"]:hover {
  background: linear-gradient(135deg, #ef4444, #f97316);
  color:white;
}

.issue-btn[data-issue="Cooling"]:hover {
  background: linear-gradient(135deg, #3b82f6, #06b6d4);
  color:white;
}

.issue-btn[data-issue="Ventilation"]:hover {
  background: linear-gradient(135deg, #10b981, #059669);
  color:white;
}


  /*online*/
  .online-status {
  position: relative;
  padding-right: 8px;
}

.online-dot {
    margin-top:-3px;
  display: inline-block;
  width: 10px;
  height: 10px;
  background-color: #04d36f; /* bright green */
  border-radius: 50%;
  vertical-align: middle;
  box-shadow: 0 0 6px rgba(4, 211, 111, 0.7);
  /*animation: pulse 1.6s infinite ease-in-out;*/
}

@keyframes pulse {
  0%, 100% {
    transform: scale(1);
    opacity: 1;
  }
  50% {
    transform: scale(1.4);
    opacity: 0.7;
  }
}

  /*/online*/
  .seo-text {
    margin-top: 14px;
    color: #223;
    font-size: 14px;
    line-height: 1.6;
    background: rgba(255, 255, 255, 0.8);
    padding: 12px;
    border-radius: 12px;
    margin-bottom:80px;
}


/*bot*/
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
        overflow-x:hidden;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
      /*background: url(hvac/img/hvacbg.png);*/
      /*min-height: 100vh;*/
    }

    .chatbox {
      width: 100%;
      max-width: 532px;
      height: 523px;
      background: var(--chatbox);
      border-radius: 24px;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
      display: flex;
      flex-direction: column;
      overflow: hidden;
      margin:auto;
      animation: slideUp 0.4s ease-out;
      
    }

    @keyframes slideUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .chat-header {
      /*background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);*/
      background:#000073;
      color: white;
      padding: 24px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .chat-header-left {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .chat-logo {
      width: 42px;
      height: 42px;
      border-radius: 50%;
      background: white;
      padding: 6px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    }

    .chat-header-left span {
      font-size: 18px;
      font-weight: 600;
      letter-spacing: -0.3px;
    }

    .chat-close-btn {
        
      background: rgba(255, 255, 255, 0.2);
      border: none;
      color: white;
      font-size: 28px;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      cursor: pointer;
      /*display: flex;*/
      display: none;
      align-items: flex-start;
      justify-content: center;
      transition: all 0.3s ease;
      line-height: 1;
    }

    .chat-close-btn:hover {
      background: rgba(255, 255, 255, 0.3);
      transform: rotate(90deg);
    }

    .chat-body {
      flex: 1;
      overflow-y: auto;
      padding: 24px;
      background: var(--chat-body);
      display: flex;
      flex-direction: column;
      gap: 16px;
    }

    .chat-body::-webkit-scrollbar {
      width: 6px;
    }

    .chat-body::-webkit-scrollbar-track {
      background: transparent;
    }

    .chat-body::-webkit-scrollbar-thumb {
      background: #cbd5e0;
      border-radius: 3px;
    }

    .chat-body::-webkit-scrollbar-thumb:hover {
      background: #a0aec0;
    }

    .bot-msg, .user-msg {
      max-width: 80%;
      padding: 14px 18px;
      border-radius: 18px;
      line-height: 1.5;
      font-size: 15px;
      animation: messageSlide 0.3s ease-out;
      word-wrap: break-word;
    }

    @keyframes messageSlide {
      from {
        opacity: 0;
        transform: translateY(10px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .bot-msg {
      background: white;
      color: #2d3748;
      align-self: flex-start;
      border-bottom-left-radius: 4px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }

    .user-msg {
      background: #667eea;
      color: white;
      align-self: flex-end;
      border-bottom-right-radius: 4px;
      box-shadow: 0 2px 8px rgba(102, 126, 234, 0.4);
    }

    .bot-thinking {
      background: white;
      padding: 18px 24px;
      display: flex;
      gap: 6px;
      align-items: center;
      justify-content: center;
      width: fit-content;
    }

    .dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: #667eea;
      animation: bounce 1.4s infinite ease-in-out;
    }

    .dot:nth-child(1) {
      animation-delay: -0.32s;
    }

    .dot:nth-child(2) {
      animation-delay: -0.16s;
    }

    @keyframes bounce {
      0%, 80%, 100% {
        transform: scale(0);
        opacity: 0.5;
      }
      40% {
        transform: scale(1);
        opacity: 1;
      }
    }

    .chat-input {
      padding: 20px;
      background: var(--chat-input);
      border-top: 1px solid #e2e8f0;
      display: flex;
      gap: 12px;
      align-items: center;
    }

    #chat-input {
      flex: 1;
      border: 2px solid #e2e8f0;
      border-radius: 24px;
      padding: 12px 20px;
      font-size: 15px;
      outline: none;
      transition: all 0.3s ease;
      background: #f7fafc;
    }

    #chat-input:focus {
      border-color: #667eea;
      background: white;
      box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    #send-btn {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      border: none;
      background: #000073;
      color: white;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
    }

    #send-btn:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 16px rgba(102, 126, 234, 0.5);
    }

    #send-btn:active {
      transform: scale(0.95);
    }

    #send-btn svg {
      width: 20px;
      height: 20px;
      fill: currentColor;
    }

    .btn {
      display: inline-block;
      padding: 12px 24px;
      border-radius: 12px;
      text-decoration: none;
      font-weight: 600;
      font-size: 14px;
      text-align: center;
      transition: all 0.3s ease;
      border: none;
      cursor: pointer;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .btn-success {
      background: linear-gradient(135deg, #10b981 0%, #059669 100%);
      color: white;
    }

    .btn-success:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 16px rgba(16, 185, 129, 0.4);
    }

    .btn-outline-primary {
      background: white;
      color: #10b981;
      border: 2px solid #10b981;
    }

    .btn-outline-primary:hover {
      background: #10b981;
      color: white;
      transform: translateY(-2px);
    }

    .btn-outline-secondary {
      background: white;
      color: #6b7280;
      border: 2px solid #d1d5db;
      padding: 8px 16px;
      font-size: 13px;
      margin-top: 12px;
    }

    .btn-outline-secondary:hover {
      background: #f3f4f6;
      border-color: #9ca3af;
    }

    .btn-sm {
      padding: 8px 16px;
      font-size: 13px;
    }

    .options {
      display: flex;
      flex-direction: column;
      gap: 10px;
      margin-top: 12px;
    }

    .glow {
      animation: glowPulse 2s infinite;
    }

    @keyframes glowPulse {
      0%, 100% {
        box-shadow: 0 4px 12px rgba(16, 185, 129, 0.4);
      }
      50% {
        box-shadow: 0 6px 20px rgba(16, 185, 129, 0.6);
      }
    }

    .m-1 {
      margin: 4px;
    }

    .d-grid {
      display: grid;
    }

    strong {
      font-weight: 700;
      color: #04d36f;
    }

    .bot-msg strong {
      color: #667eea;
    }

    @media (max-width: 500px) {
      .chatbox {
        max-width: 100%;
        height: 60vh;
      }

      body {
        padding: 0;
      }
    }
    
    
    /*navbar*/
    .navbar {
      background: white;
      padding: 0.8rem 1rem;
    }
    .navbar-brand img {
      height: 50px;
    }
  .navbar-center {
    flex-grow: 1;
    text-align: center;
    font-size: 1.05rem;
    font-weight: 700;
    letter-spacing: 0.5px;
}
 .navbar-phone {
    color: #fff;
    font-weight: 600;
    font-size: 1.2rem;
    text-decoration: none;
    background: #04d36f;
    padding: 8px 16px;
    border-radius: 50px;
    transition: 0.3s;
}
  .navbar-phone:hover {
    background: #04d36f;
    color: white;
    text-decoration: none;
}
    @media (max-width: 768px) {
        
        .carousel-caption {
    padding-left: 1.5rem;
    padding-right: 3rem;
}


        
        .res-my-4{
            margin-top:1rem;
            margin-bottom:1rem;
        }
        
        .slider-img {
    height: 210px!important;
}

        .hero-content{
            width:95%;
        }
        
        



        .s2 {
    background: url(hvac/img/bg11.jpg);
    background-position: right!important;
    background-size: cover!important;
    background-repeat: no-repeat;
}

        .chat-header {
  
    padding: 9px 9px;
        }
        .chat-header-left span{
            font-size:15px;
        }
      .navbar-center {
        display: none;
      }
    }    
    /*/navbar*/
    
    
    /*footer*/
    
 footer {
      background-color: #fff;
      color: #212529;
      font-size: 0.95rem;
      padding: 2rem 1rem;
      text-align: center;
      border-top: 1px solid #dee2e6;
    }
    footer a {
      color: #000;
      text-decoration: none;
      margin: 0 0.5rem;
      font-weight: 500;
    }
    footer a:hover {
      text-decoration: underline;
    }
    footer p {
      margin-top: 1rem;
      margin-bottom: 0;
      line-height: 1.5;
      max-width: 900px;
      margin-left: auto;
      margin-right: auto;
      font-size: 0.9rem;
      color: #333;
    }
    .footer-bottom {
      margin-top: 1.2rem;
      font-size: 0.9rem;
      color: #444;
    }    
    /*/footer*/
    
    
    /*bot button*/
    .chat-toggle-btn {
        display:none;
  position: fixed;
  bottom: 22px;
  right: 22px;
  width: 62px;
  height: 62px;
  border-radius: 50%;
  border: none;
  background: #000073;
  color: white;
  font-size: 26px;
  box-shadow: 0 6px 16px rgba(0, 0, 0, 0.3);
  cursor: pointer;
  transition: all 0.3s ease;
  z-index: 9999;
}

.chat-toggle-btn:hover {
  transform: scale(1.05);
  background: #03039c;
}

@media (max-width: 500px) {
  .chat-toggle-btn {
    width: 54px;
    height: 54px;
    font-size: 22px;
    bottom: 18px;
    right: 18px;
  }
}

    /*/bot button*/
  </style>
  
  
  <style>
    .hero-carousel .carousel-item {
      height: 100vh;
      min-height: 500px;
      background-size: cover;
      background-position: center;
      position: relative;
      color: white;
    }

    .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.5);
    }

    .hero-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      z-index: 2;
    }

    .hero-content h1 {
      font-size: 3rem;
      font-weight: 700;
    }

    .hero-content p {
      font-size: 1.25rem;
      margin-bottom: 1.5rem;
    }
    
    /*get quote*/

.btn-awesome {
    display: inline-block;
    padding: 14px 36px;
    font-size: 1.1rem;
    font-weight: 600;
    color: #fff;
    background: linear-gradient(45deg, #04d36f, #04d36f);
    border: none;
    border-radius: 50px;
    text-decoration: none;
    transition: all 0.4s 
ease;
    /* box-shadow: 0 4px 15px rgba(37, 117, 252, 0.4); */
}
.btn-awesome:hover {
  transform: translateY(-3px);
    background: linear-gradient(45deg, #04d36f, #04d36f);
}

/*/get quote*/

.s2{
    
    background: url(hvac/img/bg11.jpg);
    background-position: top;
    background-size: contain;
    background-repeat: no-repeat;
    padding:10px!important;
}

  </style> 
  
  
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  

<!--Air Conditioning- +18337600867-->
<script src=//b-js.ringba.com/CA273f9325c83949fa83a911b7d381345f async></script>

<!--Air Heating: +18333804577-->
<script src=//b-js.ringba.com/CA93f6815c79d748858bf128e597fb4850 async></script>

</head>
<body>
    
    <!--  ClickCease.com Conversion tracking-->
<script type="text/javascript">
ccConVal = 0;
var script = document.createElement("script");
script.async = true;
script.type = "text/javascript";
var target = 'https://www.clickcease.com/monitor/cccontrack.js';
script.src = target; var elem = document.head; elem.appendChild(script);
</script>
<noscript>
<a href="https://www.clickcease.com" rel="nofollow"><img src="https://monitor.clickcease.com/conversions/conversions.aspx?value=0" alt="ClickCease"/></a>
</noscript>
<!--  ClickCease.com Conversion tracking-->


    <nav class="navbar navbar-expand-lg">
  <div class="container-fluid align-items-center justify-content-between">
    <!-- Left: Logo -->
    <a class="navbar-brand d-flex align-items-center" href="https://easyhomeservice.com/lp/hvac">
      <img src="https://easyhomeservice.com/images/easyhomeservice.svg" alt="HVAC Logo">
    </a>

    <!-- Center: Tagline -->
    <div class="navbar-center">
      HVAC Repair, Installation &amp; Maintenance  <strong>Same-Day Service</strong>
    </div>

    <!-- Right: Phone -->
    <div class="d-flex">
      <a href="tel:8338010863" class="navbar-phone">
        <i class="bi bi-telephone-fill me-2"></i> (833) 801-0863
      </a>
    </div>
  </div>
</nav>

  
  
  <!-- Hero Section with Slider -->


<div class="s2">
  <!-- Dummy Get Quote Section -->
<div id="quote"></div>
<!-- Floating Chat Button -->

<button id="chat-toggle" class="chat-toggle-btn" aria-label="Chat with HVAC">
  💬
</button>



<div class="row d-flex justify-content-center py-2 align-items-center">

<div class="col-md-6">
    
    <div id="heroSlider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="position-relative">

                <!-- Image -->
                <img src="hvac/img/v-full.jpg" class="d-block w-100 slider-img" alt="AC Repair">

                <!-- Dark overlay -->
                <div class="overlay"></div>

                <!-- Text Content -->
                <div class="carousel-caption text-start">
                    <h2 class="fw-bold">Expert Air Conditioning Repair &amp; Installation</h2>
                    <p class="mt-2">Keeping you cool and comfortable all summer long.</p>
                </div>
            </div>
        </div>

        <!-- Slide 2 (copy for more slides) -->
        <div class="carousel-item">
            <div class="position-relative">
                <img src="hvac/img/a-full.jpg" class="d-block w-100 slider-img" alt="AC Service">
                <div class="overlay"></div>
                <div class="carousel-caption text-start">
                    <h2 class="fw-bold">Fast & Reliable HVAC Services</h2>
                    <p class="mt-2">We ensure your home stays comfortable year-round.</p>
                </div>
            </div>
        </div>
        <!-- Slide 3 (copy for more slides) -->
        <div class="carousel-item">
            <div class="position-relative">
                <img src="hvac/img/h-full.jpg" class="d-block w-100 slider-img" alt="AC Service">
                <div class="overlay"></div>
                <div class="carousel-caption text-start">
                    <h2 class="fw-bold">Fast & Reliable Heating Services</h2>
                    <p class="mt-2">We ensure your home stays comfortable year-round.</p>
                </div>
            </div>
        </div>

    </div>

    <!-- Navigation Arrows -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon custom-arrow"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon custom-arrow"></span>
    </button>
</div>
<style>
.slider-img {
    height: 450px;
    object-fit: cover;
    border-radius: 15px;
}

.overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.35);
    border-radius: 15px;
}

/* Caption styling */
.carousel-caption {
    bottom: 30px;
    left: 30px;
    right: auto;
    text-align: left;
}

/* Arrow styling similar to image */
.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: black;
    border-radius: 50%;
    padding: 15px;
    background-size: 60%;
    margin:14px;
}

.carousel-control-prev,
.carousel-control-next {
    width: auto;
}

</style>

</div>

 <div class="col-md-5"> <div class="chatbox res-my-4 my-4" id="chatbox">
    <div class="chat-header">
      <div class="chat-header-left">
        <img src="https://easyhomeservice.com/images/favicon.svg" class="chat-logo" alt="HVAC" />
<span>
  Mike - HVAC Technician 
  <span class="online-dot"></span>
</span>

      </div>
      <button id="chat-close" class="chat-close-btn" aria-label="Close">&times;</button>
    </div>

    <div class="chat-body" id="chat-body"></div>

    <div class="chat-input">
      <input type="text" id="chat-input" placeholder="Type your message..." />
      <button id="send-btn" aria-label="Send">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
          <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
        </svg>
      </button>
    </div>
  </div></div>
  
</div>
  
  <div>
<style>
.hvac-section {
    background: #04d36f;
    color: white;
    padding: 60px 30px;
    text-align: center;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    font-family: "Poppins", sans-serif;
}

  .hvac-section h2 {
    font-size: 2.2rem;
    font-weight: 700;
    margin-bottom: 15px;
    letter-spacing: 1px;
  }

  .hvac-section p {
    font-size: 1.1rem;
    line-height: 1.7;
    max-width: 750px;
    margin: 0 auto 25px auto;
  }

.hvac-section .cta-button {
    background-color: #00006e;
    color: white;
    font-weight: 600;
    padding: 15px 35px;
    border: none;
    border-radius: 50px;
    text-transform: uppercase;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s 
ease;
    text-decoration: none;
    display: inline-block;
}

  .hvac-section .cta-button:hover {
    /*background-color: #ffd633;*/
    transform: scale(1.05);
  }

  .hvac-section .features {
    margin-top: 25px;
    font-size: 0.95rem;
    opacity: 0.9;
  }

  .hvac-section .features span {
    display: inline-block;
    margin: 0 10px;
  }

  @media (max-width: 600px) {
    .hvac-section h2 {
      font-size: 1.7rem;
    }
    .hvac-section p {
      font-size: 1rem;
    }
  }
</style>

<div class="row d-flex justify-content-center my-5">
<div class="col-md-10"><section class="hvac-section">


  <h2>Professional HVAC Services — Fast, Reliable, Guaranteed</h2>
  <p>
    Easy Home Service delivers expert HVAC repair, AC installation, and furnace maintenance across the U.S.
    Our licensed technicians provide same-day service, upfront pricing, and a <strong>100% satisfaction guarantee</strong>.
  </p>
  <a href="tel:8338010863" class="cta-button">Call (833) 801-0863 Now</a>
  <div class="features">
    <span>✅ Licensed &amp; Certified</span> |
    <span>⚙️ Same-Day Appointments</span> |
    <span>💰 Upfront Pricing</span> |
    <span>⭐ Guaranteed Satisfaction</span>
  </div>
</section></div></div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const chatToggle = document.getElementById("chat-toggle");
    const chatBox = document.getElementById("chatbox");
    const chatCloseBtn = document.getElementById("chat-close");

    // Hide chat by default
    chatBox.style.visibility = "hidden";
    chatBox.style.opacity = "0";
    chatBox.style.transition = "opacity 0.3s ease";

    // Toggle chat visibility
    chatToggle.addEventListener("click", () => {
      const isHidden = chatBox.style.visibility === "hidden";
      chatBox.style.visibility = isHidden ? "visible" : "hidden";
      chatBox.style.opacity = isHidden ? "1" : "0";
    });

    // Close chat when clicking the “×” inside
    chatCloseBtn.addEventListener("click", () => {
      chatBox.style.visibility = "hidden";
      chatBox.style.opacity = "0";
    });

    // ✅ Auto-open chat after 5 seconds
    setTimeout(() => {
      chatBox.style.visibility = "visible";
      chatBox.style.opacity = "1";
    }, 1000);
  });
</script>

</div>

<footer>
  <!--<div class="footer-links mb-2">-->
  <!--  <a href="#">Terms of Use</a> |-->
  <!--  <a href="#">Privacy Policy</a> |-->
  <!--  <a href="#">DNC Policy</a> |-->
  <!--  <a href="#">CCPA</a> |-->
  <!--  <a href="#">TCPA</a> |-->
  <!--  <a href="#">Contact</a>-->
  <!--</div>-->

  <p>
    Easyhomeservice.com is a free service to assist homeowners in connecting with local service providers.
    All service provider/providers are independent and Easy Home Service does not warrant or guarantee any work performed.
    It is the responsibility of the homeowner to verify that the hired contractor furnishes the necessary license and insurance required
    for the work being performed. All persons depicted in a photo or video are actors or models and not service providers listed on
    easyhomeservice.com.
  </p>

  <div class="footer-bottom">
    &copy; 2025 Easy Home Service. All Rights Reserved.
  </div>
</footer>

<script>
(function () {

  // ✅ Dynamic phone number mapping
  const PHONE_MAP = {
    Heating: { display: "(833) 380-4577", e164: "+18333804577" },
    Cooling: { display: "(833) 760-0867", e164: "+18337600867" },
    Ventilation: { display: "(833) 801-0863", e164: "+18338010863" },
  };

  // Default number (Ventilation)
  let currentPhone = PHONE_MAP.Ventilation;

  const ENDPOINT = "https://call.toppermarketing.com/store_entry.php?Key=67cf8963-b9d1-45bb-a580-b7b52937ee87&category=LP_hvac";
  const ENABLE_POST = true;
  let CALL_NUMBER_E164 = currentPhone.e164;
  let CALL_NUMBER_DISPLAY = currentPhone.display;

  const escapeHtml = (s) =>
    s.replace(/[&<>"']/g, (m) => (
      { "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#039;" }[m]
    ));
  const restrictDigits = (val, len) => val.replace(/\D+/g, "").slice(0, len);

  function isValidUSPhone(raw) {
    const n = raw.replace(/\D/g, "").replace(/^1/, "");
    return n.length === 10 && !/^[01]/.test(n) && !/^(\d)\1{9}$/.test(n) && n !== "1234567890";
  }

function formatUSPhone(value) {
  const digits = value.replace(/\D/g, "").slice(0, 10);
  const parts = [];
  if (digits.length > 0) parts.push("(" + digits.substring(0, Math.min(3, digits.length)));
  if (digits.length >= 4) parts[0] += ") ";
  if (digits.length > 3) parts.push(digits.substring(3, Math.min(6, digits.length)));
  if (digits.length >= 7) parts.push("-" + digits.substring(6, 10));
  return parts.join("");
}

  const steps = [
    { key: "problem", ask: "What problem are you facing today? (e.g., not cooling, no heat, repair)", validate: (v) => v.trim().length > 1, error: "Please share a bit more about the issue." },
    { key: "firstName", ask: "Thanks! and can I get your <strong>First Name</strong>?", validate: (v) => /^[A-Za-z\s'.-]{2,}$/.test(v), error: "Please enter a valid first name (at least 2 letters)." },
    { key: "lastName", ask: "Great! your <strong>Last Name</strong>?", validate: (v) => /^[A-Za-z\s'.-]{2,}$/.test(v), error: "Please enter a valid last name (at least 2 letters)." },
    { key: "zip", ask: "Please enter your <strong>5-digit ZIP code</strong>", validate: (v) => /^\d{5}$/.test(v), error: "ZIP must be exactly 5 digits." },
    { key: "phone", ask: "Lastly, what is the <strong>Phone Number</strong> to reach you?", validate: (v) => isValidUSPhone(v), error: "That doesn't look like a valid U.S. phone. Try 10 digits like 555-123-4567." },
    {
      key: "email",
      ask: `Enter Your <strong>Email</strong><br>We'll send you a confirmation and a quick service estimate right to your inbox.<br>
      <button class="btn btn-sm btn-outline-secondary" id="skipEmailBtn">Skip</button>`,
      validate: (v) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v),
      error: "Please enter a valid email address.",
    },
  ];

  const chatbox = document.getElementById("chatbox");
  const chatBody = document.getElementById("chat-body");
  const chatInput = document.getElementById("chat-input");
  const sendBtn = document.getElementById("send-btn");
  const chatClose = document.getElementById("chat-close");
// ✅ Disable input until user selects an issue
chatInput.disabled = true;
sendBtn.disabled = true;
chatInput.placeholder = "Please select an issue above 👆";

  chatClose.addEventListener("click", () => {
    chatbox.style.visibility = "hidden";
    chatbox.style.opacity = "0";
  });

  const lead = { problem: null, firstName: null, lastName: null, zip: null, phone: null, email: null };
  let stepIndex = 0;
  let callbackStep = null;
  let callbackActive = false;

  function showTyping() {
    const bubble = document.createElement("p");
    bubble.className = "bot-msg bot-thinking";
    bubble.setAttribute("data-typing", "true");
    bubble.innerHTML = `<span class="dot"></span><span class="dot"></span><span class="dot"></span>`;
    chatBody.appendChild(bubble);
    chatBody.scrollTop = chatBody.scrollHeight;
    return bubble;
  }

window.lead = lead;

  function botReply(html, delay = 1000) {
    const typingBubble = showTyping();
    setTimeout(() => {
      if (typingBubble && typingBubble.parentNode) {
        typingBubble.replaceWith((() => {
          const p = document.createElement("p");
          p.className = "bot-msg";
          p.innerHTML = html;
          return p;
        })());
        chatBody.scrollTop = chatBody.scrollHeight;
      }
    }, delay);
  }

setTimeout(() => {
  botReply("👋 Hey — I’m <strong>Mike</strong>, your local HVAC technician.");
  setTimeout(() => {
    botReply(`What type of issue are you having today?<br>
      <div class="options d-grid" style="margin-top:10px;">
        <button class="btn btn-sm-outline-primary m-1 issue-btn" data-issue="Heating">🔥 Heating</button>
        <button class="btn btn-sm-outline-primary m-1 issue-btn" data-issue="Cooling">❄️ Cooling</button>
        <button class="btn btn-sm-outline-primary m-1 issue-btn" data-issue="Ventilation">💨 Ventilation</button>
      </div>
    `);
  }, 1000);
}, 400);


function updateInputMode() {
  const cur = steps[stepIndex];

  if (!cur) return;

  if (cur.key === "zip" || cur.key === "phone" || stepIndex === "otp_verify" || callbackStep === "newPhone") {
    chatInput.setAttribute("inputmode", "numeric");
  } else {
    chatInput.setAttribute("inputmode", "text");
  }
}


  function askCurrent() {
    const cur = steps[stepIndex];
    if (!cur) return;
    botReply(cur.ask);
    chatInput.placeholder =
      cur.key === "zip" ? "5-digit ZIP (e.g., 90210)" :
      cur.key === "phone" ? "e.g., (555) 123-4567" :
      "Type your message...";
      
        updateInputMode();  // ← ADD THIS

    chatInput.focus();
  }

  // ✅ Handle Skip Email Button
  chatBody.addEventListener("click", (e) => {
  // ✅ Request Callback Click
  if (e.target && e.target.id === "reqCB") {
    e.preventDefault();

    if (!lead.phone) {
      return botReply("Please provide your phone number first.");
    }

    const maskedPhone = lead.phone;
    botReply(`We need to verify your phone number.<br>
      Do you want to send the verification code to <strong>${maskedPhone}</strong> or change it?<br>
      <div class="options d-block mt-2">
        <button class="btn btn-sm btn-outline-success mb-2" id="sendOtpBtn">Send Code</button>
        <button class="btn btn-sm btn-outline-secondary mb-3 mt-2" id="changeNumberBtn">Change Number</button>
      </div>
    `);
  }

  // ✅ Send Code Click
  if (e.target && e.target.id === "sendOtpBtn") {
    const e164Phone = "+1" + lead.phone.replace(/\D/g, "");
    botReply(`Sending a verification code to ${lead.phone}...`);

    OTPVerification.startVerification(
      e164Phone,
      (requestId) => {
        lead.request_id = requestId;
        botReply('<i class="fa-solid fa-check text-success"></i> Code sent! Please enter the 4-digit verification code you received via SMS.');
        stepIndex = "otp_verify";
        chatInput.placeholder = "Enter Verification Code";
          updateInputMode();  // ← ADD THIS

      },
      (err) => {
     if (err.includes("Invalid number, please input correct number")) {
  botReply("❌ Invalid Phone Number. Please enter your <strong>new phone number</strong> (e.g., 555-123-4567).");
  callbackStep = "retryPhone"; // mark as retry
  chatInput.placeholder = "Enter new phone number";
} else {
  botReply("❌ " + err);
}

      }
    );
  }

  // ✅ Change Number Click
  if (e.target && e.target.id === "changeNumberBtn") {
    botReply("Please enter your new <strong>Phone Number</strong>");
    callbackStep = "newPhone";
    chatInput.placeholder = "e.g., (555) 123-4567";
    updateInputMode();

  }
    if (e.target && e.target.id === "skipEmailBtn") {
      e.preventDefault();
      const cur = steps[stepIndex];
      if (cur && cur.key === "email") {
        lead.email = "";
        stepIndex++;

        botReply("No worries! Let's move on.");
        setTimeout(() => {
          botReply(`Thanks  <strong>${lead.firstName}!</strong> For faster service, it's best to <strong>call us right now</strong> — our technician can help you immediately.`);
          setTimeout(() => {
            const html = `
                  Now you can <strong>Request a Callback</strong> or <strong>Call Now</strong>:<br>

     <div class="options d-grid">
  <a class="opt-call btn btn-sm m-1 text-white" href="tel:${CALL_NUMBER_E164}" id="optCall">
    <i class="bi bi-telephone-fill"></i> Call Now ${CALL_NUMBER_DISPLAY}
  </a>
  <a class="opt-callback btn btn-sm m-1" href="#" id="reqCB">
    <i class="bi bi-clock-history"></i> Request a Callback
  </a>
</div>
`;
            botReply(html, 800);
          }, 1200);
        }, 800);
      }
    }
  });

  // ✅ Handle Heating / Cooling / Ventilation selection and update phone dynamically
chatBody.addEventListener("click", (e) => {
  const btn = e.target.closest(".issue-btn");
  if (!btn) return;
  // ✅ Re-enable input once user selects an issue
  chatInput.disabled = false;
  sendBtn.disabled = false;
  chatInput.placeholder = "Type your message...";

  const issue = btn.dataset.issue;
  const userMsg = document.createElement("p");
  userMsg.className = "user-msg";
  userMsg.textContent = issue;
  chatBody.appendChild(userMsg);
  chatBody.scrollTop = chatBody.scrollHeight;

lead.issueCategory = issue;   // Save Heating / Cooling / Ventilation

  // 🔁 Update phone number dynamically
  currentPhone = PHONE_MAP[issue] || PHONE_MAP.Ventilation;
  CALL_NUMBER_E164 = currentPhone.e164;
  CALL_NUMBER_DISPLAY = currentPhone.display;

  // Update navbar call button dynamically
  const navPhone = document.querySelector(".navbar-phone");
  if (navPhone) {
    navPhone.href = `tel:${CALL_NUMBER_E164}`;
    navPhone.innerHTML = `<i class="bi bi-telephone-fill me-2"></i> ${CALL_NUMBER_DISPLAY}`;
  }

  // Bot responses depending on selection
   // Bot responses depending on selection
if (issue === "Heating") {
  botReply("Got it — heating issues can’t wait. Please describe what is happening (e.g., 'furnace not turning on', 'blowing cold air', 'noisy').");
} else if (issue === "Cooling") {
  botReply("Okay — sounds like a cooling problem. Please describe what is happening (e.g., 'AC not cooling', 'leaking water', 'fan not working').");
} else if (issue === "Ventilation") {
  botReply("Alright — ventilation/airflow issue. Please describe what is happening (e.g., 'poor circulation', 'bad smell', 'blocked vents').");
}


  // ✅ Wait for user's free-text response before moving to first name
  stepIndex = 0; // keep step at "problem" for now
  chatInput.placeholder = "Describe the issue briefly...";

});

  function showOptions() {
    botReply(`
      Now you can <strong>Request a Callback</strong> or <strong>Call Now</strong>:<br>
  <div class="options d-grid">
  <a class="text-white opt-call btn btn-sm m-1" href="tel:${CALL_NUMBER_E164}" id="optCall">
    <i class="bi bi-telephone-fill"></i> Call Now ${CALL_NUMBER_DISPLAY}
  </a>
  <a class="opt-callback btn btn-sm m-1" href="#" id="reqCB">
    <i class="bi bi-clock-history"></i> Request a Callback
  </a>
</div>

    `);
  }

async function finalizeLead(msg) {
  if (ENABLE_POST) {
    const data = new URLSearchParams({
      firstName: lead.firstName || "",
      lastName: lead.lastName || "",
      email: lead.email || "",
      zip: (lead.zip || "").toString(),
      // ✅ always send latest updated phone number
      phoneNumber: (lead.phone || "").replace(/\D/g, ""), 
description: lead.problem || "",
service: lead.issueCategory || "",
    });
    try {
      await fetch(ENDPOINT, { method: "POST", body: data });
    } catch (err) {
      console.error("POST Error", err);
    }
  }
  if (msg) botReply(msg);
}

  function handleAnswer(textRaw) {
    const text = textRaw.trim();
    if (!text) return;
    
    // ✅ Handle "Change Number" input
if (callbackStep === "newPhone") {
  const newPhone = text.replace(/\D/g, "");
  if (!isValidUSPhone(newPhone)) {
    botReply("That doesn't look like a valid U.S. phone number. Try again (e.g., 555-123-4567).");
    return;
  }

  // Format and save the new phone
  lead.phone = formatUSPhone(newPhone);
  callbackStep = null;

  const e164Phone = "+1" + newPhone;
  botReply(`Got it! Sending a verification code to ${lead.phone}...`);

  OTPVerification.startVerification(
    e164Phone,
    (requestId) => {
      lead.request_id = requestId;
      botReply('<i class="fa-solid fa-check text-success"></i> Code sent! Please enter the 4-digit verification code you received via SMS.');
      stepIndex = "otp_verify";
      chatInput.placeholder = "Enter Verification Code";
        updateInputMode();  // ← ADD THIS

    },
    (err) => {
      botReply("❌ " + err);
    }
  );
  return; // stop here, don't continue to next steps
}

    const p = document.createElement("p");
    p.className = "user-msg";
    p.textContent = text;
    chatBody.appendChild(p);
    chatBody.scrollTop = chatBody.scrollHeight;

    // OTP verification step
    if (stepIndex === "otp_verify") {
      const otpCode = text.replace(/\D/g, "");
      if (otpCode.length < 4) return botReply("Please enter the 4-digit code sent to your phone.");

      botReply("Verifying your code...");
      OTPVerification.checkVerification(
        lead.request_id,
        otpCode,
       () => {
  botReply('<i class="fa-solid fa-check text-success" aria-hidden="true"></i> Phone number verified successfully!');
  botReply(`Thanks! Our technician will call you shortly. If anything else, call <strong>${CALL_NUMBER_DISPLAY}</strong>.`);

  callbackActive = true;
  disableChatInput();
  chatInput.placeholder = "Type your message...";

  // 🔥 Send lead with callBack = Yes
  const data = new URLSearchParams({
    firstName: lead.firstName || "",
    lastName: lead.lastName || "",
    email: lead.email || "",
    zip: (lead.zip || "").toString(),
    phoneNumber: (lead.phone || "").replace(/\D/g, ""),
    description: lead.problem || "",
    service: lead.issueCategory || "",
    callBack: "Yes"
  });

  fetch("https://call.toppermarketing.com/store_entry.php?Key=67cf8963-b9d1-45bb-a580-b7b52937ee87&category=LP_hvac", {
    method: "POST",
    body: data
  })
  .then(() => console.log("Lead sent (Callback Verified)"))
  .catch(err => console.error("POST error:", err));
},

(err) => {
  let userMessage = "";

  if (err.includes("code") && err.includes("not")) {
    // Error like: "Verification code does not matched"
    userMessage = "The verification code you entered is incorrect.";
  } 
  else if (err.includes("was not found") || err.includes("verified already")) {
    userMessage = "Request was not found or it has been verified already.";
  } 
  else {
    userMessage = "Something went wrong. Please try again.";
  }

  botReply(
    `❌ ${userMessage}<br>
    Please try again or 
    <button id="resendOtp" class="btn btn-sm btn-outline-secondary mt-0">Resend OTP</button>`
  );

  stepIndex = "otp_verify";
}
      );
      return;
    }


// ✅ Handle retryPhone step (user enters new number after invalid)
if (callbackStep === "retryPhone") {
  const newPhone = text.replace(/\D/g, "");
  if (!isValidUSPhone(newPhone)) {
    botReply("That doesn't look like a valid U.S. phone number. Please try again (e.g., 555-123-4567).");
    return;
  }

  // Save and format
  lead.phone = formatUSPhone(newPhone);
  callbackStep = null;

  const e164Phone = "+1" + newPhone;
  botReply(`Got it! Sending a verification code to ${lead.phone}...`);

  OTPVerification.startVerification(
    e164Phone,
    (requestId) => {
      lead.request_id = requestId;
      botReply('<i class="fa-solid fa-check text-success"></i> Code sent! Please enter the 4-digit verification code you received via SMS.');
      stepIndex = "otp_verify";
      chatInput.placeholder = "Enter Verification Code";
        updateInputMode();  // ← ADD THIS

    },
    (err) => {
      botReply("❌ " + err);
    }
  );
  return; // stop here
}

    const cur = steps[stepIndex];
    if (!cur) return;
    let val = text;
    if (cur.key === "zip") val = restrictDigits(val, 5);

    // PHONE STEP (send OTP)
    if (cur.key === "phone") {
      if (!isValidUSPhone(val)) return botReply(cur.error);
      val = formatUSPhone(val);
      lead.phone = val;
      stepIndex++;
      askCurrent();
      return;
    }

    if (!cur.validate(val)) return botReply(cur.error);
    lead[cur.key] = val;
    stepIndex++;
    if (cur.key === "email") return finalizeLead(null), showOptions();
    askCurrent();
  }

  chatBody.addEventListener("click", (e) => {
    if (e.target && e.target.id === "resendOtp") {
      const e164Phone = "+1" + lead.phone.replace(/\D/g, "");
      OTPVerification.resendVerification(
        e164Phone,
        (requestId) => {
          lead.request_id = requestId;
          botReply("Code resent! Please check your SMS again and enter the code below.");
          stepIndex = "otp_verify";
        },
        (err) => botReply("❌ " + err)
      );
    }
  });

chatInput.addEventListener("input", (e) => {
  // Always format ZIP and phone as user types
  const cur = steps[stepIndex];
  
  // If user is entering ZIP
  if (cur && cur.key === "zip") {
    e.target.value = restrictDigits(e.target.value, 5);
    return;
  }

  // ✅ Format both phone step and "Change Number" input in real time
  if ((cur && cur.key === "phone") || callbackStep === "newPhone") {
    e.target.value = formatUSPhone(e.target.value);
  }
});

  sendBtn.addEventListener("click", () => {
    const val = chatInput.value;
    if (!val.trim()) return;
    handleAnswer(val);
    chatInput.value = "";
  });

  chatInput.addEventListener("keydown", (e) => {
    if (e.key === "Enter") {
      e.preventDefault();
      sendBtn.click();
    }
  });

  // 🟩 After user sends any message post-callback, show phone message and disable input
  let postCallbackDisabled = false;

  function disableChatInput() {
    chatInput.disabled = true;
    chatInput.placeholder = `Chat ended — please call ${CALL_NUMBER_DISPLAY}`;
    sendBtn.disabled = true;
    sendBtn.style.opacity = "0.6";
  }

  const originalHandleAnswer = handleAnswer;
  handleAnswer = function(textRaw) {
    if (callbackActive && !postCallbackDisabled) {
      const text = textRaw.trim();
      if (text.length > 0) {
        botReply(`If you need anything else, call ${CALL_NUMBER_DISPLAY}.`);
        disableChatInput();
        postCallbackDisabled = true;
        return;
      }
    }
    originalHandleAnswer(textRaw);
  };

})();
</script>
<script src="hvac/js/otp-verification.js"></script>

<script>
  gtag('config', 'AW-16938916629/1N1CCMutzZ8bEJW2jY0_', {
    'phone_conversion_number': '+18337600867'
  });
</script>
<script>
  gtag('config', 'AW-16938916629/1N1CCMutzZ8bEJW2jY0_', {
    'phone_conversion_number': '+18333804577'
  });
</script>
<script>
  gtag('config', 'AW-16938916629/1N1CCMutzZ8bEJW2jY0_', {
    'phone_conversion_number': '+18338010863'
  });
</script>


<script>
document.addEventListener("click", function (e) {

  const btn = e.target.closest("#optCall");
  if (!btn) return;

  // If email was skipped, ensure empty string instead of undefined
  const safeEmail = window.lead.email ? window.lead.email : "";

  const data = new URLSearchParams({
    firstName: window.lead.firstName || "",
    lastName: window.lead.lastName || "",
    email: safeEmail,
    zip: (window.lead.zip || "").toString(),
    phoneNumber: (window.lead.phone || "").replace(/\D/g, ""),
    description: window.lead.problem || "",
    service: window.lead.issueCategory || "",
    callBack: "No"
  });

  fetch("https://call.toppermarketing.com/store_entry.php?Key=67cf8963-b9d1-45bb-a580-b7b52937ee87&category=LP_hvac", {
    method: "POST",
    body: data
  })
  .then(() => console.log("Lead sent (Call Now)"))
  .catch(err => console.error("POST error:", err));
});
</script>


</body>
</html>

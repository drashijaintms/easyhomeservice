<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Connecting Your Call | Easy Home Service</title>

  <link rel="icon" type="image/svg+xml" href="https://easyhomeservice.com/images/favicon.svg">
  <meta http-equiv="refresh" content="1;url=tel:+18333809800">

  <!-- Bootstrap 5.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Roboto, Arial, sans-serif;
      background: linear-gradient(135deg, #000073 0%, #00108A 100%);
      color: #fff;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      position: relative;
    }
    .waves {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 160px;
      background: url('https://easyhomeservice.com/images/wave.svg') repeat-x;
      background-size: cover;
      opacity: 0.1;
      animation: waveMove 14s linear infinite;
    }
    @keyframes waveMove {
      from { background-position-x: 0; }
      to { background-position-x: 1000px; }
    }
    .glass-card {
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.25);
      border-radius: 18px;
      padding: 50px 35px;
      box-shadow: 0 10px 40px rgba(0,0,0,0.3);
      max-width: 420px;
      width: 90%;
      text-align: center;
      opacity: 0;
      transform: scale(0.9);
      z-index: 2;
      position: relative;
    }
    .logo img {
      width: 160px;
      margin-bottom: 20px;
      opacity: 0;
      filter: drop-shadow(0 2px 5px rgba(0,0,0,0.3));
    }
    .spinner {
      margin: 25px auto;
      width: 48px;
      height: 48px;
      border: 4px solid rgba(255,255,255,0.2);
      border-top: 4px solid #04D36F;
      border-radius: 50%;
      animation: spin 1.2s linear infinite;
      opacity: 0;
    }
    @keyframes spin {
      to { transform: rotate(360deg); }
    }
    h2 {
      font-size: 26px;
      margin-bottom: 10px;
      letter-spacing: 0.5px;
    }
    p {
      font-size: 16px;
      color: #f2f2f2;
      margin-bottom: 25px;
      line-height: 1.6;
    }
    .call-btn {
      display: inline-block;
      background: linear-gradient(90deg, #04D36F, #02b55d);
      color: #fff;
      padding: 14px 32px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 600;
      letter-spacing: 0.3px;
      box-shadow: 0 4px 14px rgba(4,211,111,0.4);
      opacity: 0;
      transform: translateY(10px);
      transition: all 0.3s ease;
    }
    .call-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 20px rgba(4,211,111,0.6);
    }
  </style>
</head>

<body>
  <div class="container d-flex justify-content-center align-items-center">
    <div class="glass-card text-center">
      <div class="logo">
        <img src="https://fundtld.info/imgur/uploads/68e7e35bcd3cf.png" alt="Easy Home Service Logo">
      </div>
      <div class="spinner"></div>
      <h2 class="fw-semibold mt-3">Connecting Your Call…</h2>
      <p>Hold on tight! We’re connecting you to a trusted service specialist.</p>
      <a href="tel:+18333809800" class="call-btn">Tap Here If Nothing Happens</a>
    </div>
  </div>

  <div class="waves"></div>

<script>
  // Automatically send URL params by redirecting a hidden pixel request
  const params = window.location.search;
  new Image().src = "https://easyhomeservice.com/config2.php" + params;
</script>


  <script>
    // Animations
    gsap.to(".glass-card", {opacity: 1, scale: 1, duration: 0.8});
    gsap.to(".logo img", {opacity: 1, y: 0, duration: 1, delay: 0.2});
    gsap.to(".spinner", {opacity: 1, duration: 0.8, delay: 0.6});
    gsap.to(".call-btn", {opacity: 1, y: 0, duration: 0.8, delay: 0.8});

    // Capture URL Params and Send to PHP
 
  </script>
</body>
</html>

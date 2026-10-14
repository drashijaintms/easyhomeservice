<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Call Center — Hero Collection</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<style>
    .hero-1{
        display:none;
    }


@media screen and (max-width:768px){
    
    .hero-1{position:relative;display:grid;align-items:center;overflow:hidden}


    .hero-7{
        display:none;
    }
    
    .hero-1
    .res-text-center{
     text-align:center;   
    }
    
    .badges {
        display:inline-grid;
    }
    
}

.mbg-primary
{
    background:var(--brand);
    color:white;
}

.mbg-primary:hover {
    background: var(--brand);
    color: white;
}

.lead {
    font-size: 1.25rem;
    font-weight: 400;
    color: black;
}
.myc{
    color:var(--myc);
}

.c-blue{
    color:#000073;
}
.c-green{
    color:#04d36f;
}
:root{
  --brand:#04d36f; --accent:#000073; --ink:#102a43; --muted:#6b7c93
  --myc:#04d36f;

}
/* Common bits */
body{color:var(--ink); background:#f7f9fc;}
.phone-pill{display:inline-flex;align-items:center;gap:.6rem;padding:.7rem 1rem;border-radius:1rem;background:linear-gradient(90deg,rgba(255,45,85,.14),rgba(11,110,253,.12));font-weight:800;letter-spacing:.3px;box-shadow:inset 0 0 0 2px rgba(255,255,255,.7),0 8px 18px rgba(16,42,67,.12)}
.phone-pill a{color:var(--accent);text-decoration:none;text-shadow:0 0 16px rgba(255,45,85,.45)}
.badges .bi{margin-right:.35rem}


/* 1. Split Glass */
.hero-1:before{content:"";position:absolute;inset:0;mix-blend:multiply}
.hero-1:after{content:"";position:absolute;inset:0;background:url('callcenter-bg.png') center/cover no-repeat;opacity:.28;z-index:-1}
.hero-1 .card{backdrop-filter:blur(6px);background:rgba(255,255,255,.9);border-radius:1.2rem;box-shadow:0 10px 26px rgba(16,42,67,.12)}



/* 7. Big Badge */
.hero-7 {
    position: relative;
    background-image: linear-gradient(90deg, rgb(255 255 255 / 66%), rgb(0 0 0 / 0%)), /* overlay */ url(images/call-support.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
.badge-lg {
    display: inline-block;
    padding: 1rem 1.4rem;
    border-radius: 999px;
    background: #04d36f;
    border: 2px solid #e6eeff;
    box-shadow: 0 10px 24px rgba(16, 42, 67, .08);
    font-weight: 700;
    color: white;
}


.hero-7 .media{background:url('callcenter-bg.png') center/cover no-repeat;min-height:420px;border-radius:1.2rem}


</style>
</head>
<body>

<section class="hero-7 py-5">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-lg-6">
        <span class="badge-lg mb-3">Home Service Experts</span>
        <h1 class="display-5 fw-bold mt-2 c-blue">Speak to a Specialist <span class="myc">NOW</span></h1>
        <p class="lead">Fast, friendly guidance and a perfect match—guaranteed.</p>
        <div class="d-flex flex-wrap gap-3">
          <a href="tel:+18333809800" class="btn mbg-primary btn-lg fw-semibold">Call Our Expert Team</a>
          <span class="phone-pill"><i class="bi bi-telephone"></i><a href="tel:+18333809800">(833) 380-9800</a></span>
        </div>
        <div class="text-success fw-semibold mt-3">✓ Available 24/7   ✓ Free Consultation</div>
      </div>
      <div class="col-lg-6"><div class="media rounded-4"></div></div>
    </div>
  </div>
</section>
<section class="hero-1 py-5">
  <div class="container position-relative">
    <div class="row align-items-center g-4">
      <div class="col-lg-6">
        <div class="card p-4 p-md-5">
          <h1 class="display-6 fw-bold res-text-center c-blue">Speak to Our Home Service Experts <span class="c-green">NOW!</span></h1>
          <p class="lead text-secondary res-text-center">Our certified specialists are standing by to help you get connected with the perfect home service provider.</p>
          <div class="d-flex flex-column flex-sm-row gap-3">
            <a href="tel:+18333809800" class="btn mbg-primary btn-lg fw-semibold">Call Our Expert Team</a>
            <div class="phone-pill"><i class="bi bi-telephone"></i><a href="tel:+18333809800">(833) 380-9800</a></div>
          </div>
          <div class="badges mt-3 text-success fw-semibold"><span><i class="bi bi-check-circle"></i>Available 24/7</span>   <span><i class="bi bi-check-circle"></i>Free Consultation</span></div>
        </div>
      </div>
      
    </div>
  </div>
</section>


</body>
</html>

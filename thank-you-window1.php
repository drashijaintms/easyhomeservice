<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Call Center — Hero Collection</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<style>

.mbg-primary
{
    background:var(--brand);3
    color:white;
}

.mbg-primary:hover {
    background: var(--brand);
    color: white;
}

.lead {
    font-size: 1.25rem;
    font-weight: 300;
    color: black;
}
.myc{
    color:var(--myc);
}

.c-blue{
    color:#000073;
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
.hero-1{position:relative;min-height:92vh;display:grid;align-items:center;overflow:hidden}
.hero-1:before{content:"";position:absolute;inset:0;background:radial-gradient(60% 60% at 10% 10%, rgba(11,110,253,.18), transparent 60%),linear-gradient(180deg, rgba(16,42,67,.75), rgba(16,42,67,.35));mix-blend:multiply}
.hero-1:after{content:"";position:absolute;inset:0;background:url('callcenter-bg.png') center/cover no-repeat;opacity:.28;z-index:-1}
.hero-1 .card{backdrop-filter:blur(6px);background:rgba(255,255,255,.9);border-radius:1.2rem;box-shadow:0 10px 26px rgba(16,42,67,.12)}

/* 2. Dark Centered */
.hero-2{position:relative;min-height:88vh;display:grid;place-items:center;background:#0c1a2b;color:#e9f0f8;overflow:hidden}
.hero-2:after{content:"";position:absolute;inset:0;background:url('callcenter-bg.png') center/cover no-repeat;opacity:.18;mix-blend:screen}
.hero-2 .wrap{max-width:850px;text-align:center}
.hero-2 .btn-primary{box-shadow:0 10px 24px rgba(11,110,253,.35)}

/* 3. Diagonal Split */
.hero-3{position:relative;min-height:90vh;background:linear-gradient(120deg,#ffffff 0 52%, #eaf2ff 52% 100%);}
.hero-3 .media{background:url('callcenter-bg.png') center/cover no-repeat;border-radius:1rem;min-height:420px;box-shadow:0 12px 30px rgba(16,42,67,.18)}

/* 4. Gradient Waves */
.hero-4{position:relative;min-height:86vh;background:radial-gradient(1200px 600px at -10% -10%, #dbe8ff, transparent 60%),radial-gradient(900px 500px at 110% 10%, #ffe2ea, transparent 60%)}
.hero-4 .blob{position:absolute;right:-6rem;bottom:-6rem;width:42vw;max-width:680px;aspect-ratio:1/1;background:url('callcenter-bg.png') center/cover no-repeat;filter:saturate(1.1) contrast(1.05);border-radius:40% 60% 50% 50% / 50% 50% 60% 40%;opacity:.35}

/* 5. Minimal Left Rail */
.hero-5{position:relative;min-height:80vh}
.hero-5 .rail{background:#0b6efd;color:#fff;border-radius:1rem;box-shadow:0 12px 24px rgba(11,110,253,.3)}
.hero-5 .bgimg{background:url('callcenter-bg.png') center/cover no-repeat;min-height:420px;border-radius:1rem}

/* 6. Card Stack */
.hero-6{position:relative;min-height:86vh}
.card-stack{position:relative}
.card-stack .back{transform:rotate(-3deg) translateY(12px);opacity:.6}
.card-stack .mid{transform:rotate(2deg) translateY(6px);opacity:.8}
.card-stack .front{position:relative}
.card-stack .frame{background:url('callcenter-bg.png') center/cover;min-height:340px;border-radius:1rem;box-shadow:0 14px 32px rgba(16,42,67,.22)}

/* 7. Big Badge */
.hero-7 {
    position: relative;
    background-image: linear-gradient(90deg, rgb(255 255 255 / 66%), rgb(0 21 60 / 44%)), /* overlay */ url(images/call-support.jpg);
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

/* 8. Right Sidebar Panel */
.hero-8{position:relative;min-height:85vh;background:#f5f7fb}
.hero-8 .panel{background:#0c1a2b;color:#e9f0f8;border-radius:1rem;background-image:linear-gradient(160deg,rgba(255,255,255,.05),transparent 40%);padding:2rem}
.hero-8 .photo{background:url('callcenter-bg.png') center/cover no-repeat;min-height:520px;border-radius:1rem}

/* 9. Stripe Gradient */
.hero-9{position:relative;min-height:82vh;background:repeating-linear-gradient(135deg,#f5f9ff 0 18px,#eef5ff 18px 36px)}
.hero-9 .card{border:0;border-radius:1.2rem;box-shadow:0 14px 30px rgba(16,42,67,.14)}
.hero-9 .photo{background:url('callcenter-bg.png') center/cover no-repeat;min-height:420px;border-radius:1.2rem}

/* 10. Ultra Clean Center */
.hero-10{position:relative;min-height:84vh;display:grid;place-items:center}
.hero-10 .wrap{max-width:900px;text-align:center}
.hero-10 .ghost{background:url('callcenter-bg.png') center/cover no-repeat;opacity:.22;filter:grayscale(.1);position:absolute;inset:0;z-index:-1}
</style>
</head>
<body>

<!-- 1) Split Glass -->
<section class="hero-1 py-5">
  <div class="container position-relative">
    <div class="row align-items-center g-4">
      <div class="col-lg-6">
        <div class="card p-4 p-md-5">
          <span class="badge bg-light text-primary fw-semibold mb-2">Call Center</span>
          <h1 class="display-6 fw-bold">Speak to Our Home Service Experts <span class="text-primary">NOW!</span></h1>
          <p class="lead text-secondary">Our certified specialists are standing by to help you get connected with the perfect home service provider.</p>
          <div class="d-flex flex-column flex-sm-row gap-3">
            <a href="tel:+18555551234" class="btn mbg-primary btn-lg fw-semibold">Call Our Expert Team</a>
            <div class="phone-pill"><i class="bi bi-telephone"></i><a href="tel:+18555551234">(855) 555-1234</a></div>
          </div>
          <div class="badges mt-3 text-success fw-semibold"><span><i class="bi bi-check-circle"></i>Available 24/7</span> &nbsp; <span><i class="bi bi-check-circle"></i>Free Consultation</span></div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="ratio ratio-4x3 rounded-4 shadow" style="background:url('callcenter-bg.png') center/cover no-repeat;"></div>
      </div>
    </div>
  </div>
</section>

<!-- 2) Dark Centered -->
<section class="hero-2 py-5">
  <div class="wrap px-3">
    <h1 class="display-4 fw-bold">Talk to a Real Human <span class="text-primary">24/7</span></h1>
    <p class="lead mb-4">Certified specialists ready to match you with trusted home service providers—fast.</p>
    <div class="d-flex justify-content-center flex-wrap gap-3">
      <a href="tel:+18555551234" class="btn mbg-primary btn-lg fw-semibold">Call Our Expert Team</a>
      <div class="phone-pill bg-opacity-10"><i class="bi bi-telephone"></i><a href="tel:+18555551234">(855) 555-1234</a></div>
    </div>
    <div class="mt-3 text-success fw-semibold"><i class="bi bi-check2-circle"></i> Available 24/7 &nbsp; <i class="bi bi-check2-circle"></i> Free Consultation</div>
  </div>
</section>

<!-- 3) Diagonal Split -->
<section class="hero-3 py-5">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        <h1 class="display-5 fw-bold">Home Service Help, <span class="text-primary">Right Now.</span></h1>
        <p class="lead text-secondary">We connect you to the perfect provider in minutes. No stress, no guesswork.</p>
        <div class="d-flex flex-wrap gap-3">
          <a class="btn mbg-primary btn-lg fw-semibold" href="tel:+18555551234">Call Our Expert Team</a>
          <span class="phone-pill"><i class="bi bi-telephone"></i><a href="tel:+18555551234">(855) 555-1234</a></span>
        </div>
        <p class="text-success fw-semibold mt-3">✓ Available 24/7 &nbsp; ✓ Free Consultation</p>
      </div>
      <div class="col-lg-5">
        <div class="media"></div>
      </div>
    </div>
  </div>
</section>

<!-- 4) Gradient Waves + Blob -->
<section class="hero-4 py-5 position-relative overflow-hidden">
  <div class="container position-relative">
    <div class="row align-items-center g-4">
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold">Speak to Our Experts <span class="text-primary">NOW!</span></h1>
        <p class="lead text-secondary">Friendly, certified specialists are ready to help and connect you with top-rated providers.</p>
        <div class="d-flex flex-wrap gap-3">
          <a href="tel:+18555551234" class="btn mbg-primary btn-lg fw-semibold">Call Our Expert Team</a>
          <span class="phone-pill"><i class="bi bi-telephone"></i><a href="tel:+18555551234">(855) 555-1234</a></span>
        </div>
        <div class="text-success fw-semibold mt-3">✓ Available 24/7 &nbsp; ✓ Free Consultation</div>
      </div>
    </div>
  </div>
  <div class="blob"></div>
</section>

<!-- 5) Minimal Left Rail -->
<section class="hero-5 py-5">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-lg-4">
        <div class="rail p-4 p-md-5">
          <h2 class="h5 text-white-50 mb-2">Call Center</h2>
          <h1 class="display-6 fw-bold">Get Help in Minutes</h1>
          <p class="text-white-50">We connect you with the right home service pro—right now.</p>
          <a href="tel:+18555551234" class="btn btn-light btn-lg fw-semibold">Call Our Expert Team</a>
          <div class="mt-3 phone-pill bg-white text-dark"><i class="bi bi-telephone"></i><a href="tel:+18555551234">(855) 555-1234</a></div>
          <div class="mt-3 text-success">✓ 24/7 &nbsp; ✓ Free Consultation</div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="bgimg w-100"></div>
      </div>
    </div>
  </div>
</section>

<!-- 6) Card Stack -->
<section class="hero-6 py-5">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold">Real People. Real Help. <span class="text-primary">Right Now.</span></h1>
        <p class="lead text-secondary">Talk to certified specialists who will match you with the best local provider.</p>
        <div class="d-flex flex-wrap gap-3">
          <a href="tel:+18555551234" class="btn mbg-primary btn-lg fw-semibold">Call Our Expert Team</a>
          <span class="phone-pill"><i class="bi bi-telephone"></i><a href="tel:+18555551234">(855) 555-1234</a></span>
        </div>
        <div class="text-success fw-semibold mt-3">✓ Available 24/7 &nbsp; ✓ Free Consultation</div>
      </div>
      <div class="col-lg-6">
        <div class="card-stack">
          <div class="frame back"></div>
          <div class="frame mid mt-3"></div>
          <div class="frame front mt-3"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 7) Big Badge -->
<section class="hero-7 py-5">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-lg-6">
        <span class="badge-lg mb-3">Home Service Experts</span>
        <h1 class="display-5 fw-bold mt-2 c-blue">Speak to a Specialist <span class="myc">NOW</span></h1>
        <p class="lead">Fast, friendly guidance and a perfect match—guaranteed.</p>
        <div class="d-flex flex-wrap gap-3">
          <a href="tel:+18555551234" class="btn mbg-primary btn-lg fw-semibold">Call Our Expert Team</a>
          <span class="phone-pill"><i class="bi bi-telephone"></i><a href="tel:+18555551234">(855) 555-1234</a></span>
        </div>
        <div class="text-success fw-semibold mt-3">✓ Available 24/7 &nbsp; ✓ Free Consultation</div>
      </div>
      <div class="col-lg-6"><div class="media rounded-4"></div></div>
    </div>
  </div>
</section>

<!-- 8) Right Sidebar Panel -->
<section class="hero-8 py-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-7">
        <div class="photo w-100"></div>
      </div>
      <div class="col-lg-5">
        <div class="panel h-100 d-flex flex-column justify-content-center">
          <h2 class="h6 text-info-50">Call Center</h2>
          <h1 class="display-6 fw-bold text-white">Speak to Our Experts NOW!</h1>
          <p class="lead">We’ll connect you to the perfect home service provider—fast and free.</p>
          <div class="d-flex flex-wrap gap-3">
            <a href="tel:+18555551234" class="btn mbg-primary btn-lg fw-semibold">Call Our Expert Team</a>
            <span class="phone-pill bg-white text-dark"><i class="bi bi-telephone"></i><a href="tel:+18555551234">(855) 555-1234</a></span>
          </div>
          <div class="mt-3 text-success fw-semibold">✓ Available 24/7 &nbsp; ✓ Free Consultation</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 9) Stripe Gradient -->
<section class="hero-9 py-5">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-lg-6">
        <div class="card p-4 p-md-5">
          <h1 class="display-6 fw-bold">Get Connected with the Right Pro</h1>
          <p class="lead text-secondary">Call now and speak to a certified specialist within seconds.</p>
          <div class="d-flex flex-wrap gap-3">
            <a href="tel:+18555551234" class="btn mbg-primary btn-lg fw-semibold">Call Our Expert Team</a>
            <span class="phone-pill"><i class="bi bi-telephone"></i><a href="tel:+18555551234">(855) 555-1234</a></span>
          </div>
          <div class="text-success fw-semibold mt-3">✓ Available 24/7 &nbsp; ✓ Free Consultation</div>
        </div>
      </div>
      <div class="col-lg-6"><div class="photo"></div></div>
    </div>
  </div>
</section>

<!-- 10) Ultra Clean Center -->
<section class="hero-10 py-5 position-relative">
  <div class="ghost rounded-4"></div>
  <div class="wrap px-3">
    <h1 class="display-4 fw-bold">Home Service Help—<span class="text-primary">NOW</span></h1>
    <p class="lead text-secondary">Speak to certified specialists and get matched with trusted providers.</p>
    <div class="d-flex justify-content-center flex-wrap gap-3">
      <a href="tel:+18555551234" class="btn mbg-primary btn-lg fw-semibold">Call Our Expert Team</a>
      <span class="phone-pill"><i class="bi bi-telephone"></i><a href="tel:+18555551234">(855) 555-1234</a></span>
    </div>
    <div class="mt-3 text-success fw-semibold">✓ Available 24/7 &nbsp; ✓ Free Consultation</div>
  </div>
</section>

</body>
</html>

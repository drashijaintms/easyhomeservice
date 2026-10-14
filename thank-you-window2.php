<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">



<style>




@media screen and (max-width:768px){
   
   .hc-hero-7
   {
    display:none;
}


   .hc-hero-1

{
    display:none;
}

    
    .hc-hero-7

{
    display:none;
}

 .hc-hero-1 {
  position: relative;display: grid; align-items: center; overflow: hidden;
  color: var(--hc-ink);
  background: #f7f9fc;
  display:flex;
}



    .res-text-center{
     text-align:center;   
    }
    
    .hc-badges {
        display:inline-grid;
    }
    
}


.c-blue{
    color:#000073;
}
.c-green{
    color:#04d36f;
}

.hc-bg-green{
    background:  var(--hc-brand);
}

.hc-bg-green{
    background:  var(--hc-brand);
}
/* ===== Hero Collection – unique-scoped utilities ===== */
.hc-scope {
  /* theme tokens (scoped, not global) */
  --hc-brand: #04d36f;
  --hc-accent: #00153c;
  --hc-ink: #102a43;
  --hc-muted: #6b7c93;
}

/* shared bits used by both heroes (kept within .hc-scope) */
.hc-scope .hc-btn-brand {
  background: var(--hc-brand);
  color: #fff;
  border: 0;
  font-weight: 700;
  box-shadow: 0 10px 24px rgba(16, 42, 67, .12);
}
.hc-scope .hc-btn-brand:hover,
.hc-scope .hc-btn-brand:focus {
  background: var(--hc-brand);
  color: #fff;
  opacity: .95;
}

.hc-scope .hc-phone-pill{
  display:inline-flex;align-items:center;gap:.6rem;
  padding:.7rem 1rem;border-radius:1rem;
  background:linear-gradient(90deg,rgba(255,45,85,.14),rgba(11,110,253,.12));
  font-weight:800;letter-spacing:.3px;
  box-shadow:inset 0 0 0 2px rgba(255,255,255,.7),0 8px 18px rgba(16,42,67,.12)
}
.hc-scope .hc-phone-pill a{color:#000073;text-decoration:none;text-shadow:0 0 16px rgba(255,45,85,.45)}
.hc-scope .hc-ok { color: #22b573; font-weight: 600; }
.hc-scope .hc-lead { font-size:1.125rem; color: black; }

/* ====== HERO 1: Split Glass ====== */


.hc-hero-1::after{
  content:"";position:absolute;inset:0;
  background: var(--hc-hero1-image, url('callcenter-bg.png')) center/cover no-repeat;
  opacity:.28; z-index:-1; pointer-events: none;
}
.hc-hero-1 .hc-card {
  backdrop-filter: blur(6px);
  background: rgba(255,255,255,.9);
  border-radius: 1.2rem;
  box-shadow: 0 10px 26px rgba(16,42,67,.12);
}

/* helper to keep media block neat */
.hc-hero-1 .hc-media {
  background: var(--hc-hero1-image, url('callcenter-bg.png')) center/cover no-repeat;
  border-radius: 1rem;
}

/* ====== HERO 7: Big Badge ====== */
.hc-hero-7{
    position: relative;
    background-image:linear-gradient(90deg, rgb(255 255 255), rgb(0 0 0 / 0%)), /* overlay */ url(images/call-support.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

}
.hc-hero-7 .hc-badge-lg{
  display:inline-block; padding:1rem 1.4rem; border-radius:999px;
  background: var(--hc-brand); border:2px solid #e6eeff;
  box-shadow: 0 10px 24px rgba(16, 42, 67, .08);
  font-weight:700; color:#fff;
}
.hc-hero-7 .hc-media {
  background: var(--hc-hero7-overlay-image, url('callcenter-bg.png')) center/cover no-repeat;
  border-radius: 1.2rem;
}

/* optional accent color helper for “NOW” text */
.hc-hero-7 .hc-accent { color: var(--hc-brand); }

/* Responsive niceties */


</style>
<section class="hc-scope hc-hero-7 py-5">
    <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-lg-6">
<span class="badge text-white fw-semibold mb-2 hc-bg-green">Call Home Service Expert</span>        <h1 class="display-5 fw-bold mt-2" style="color:#000073">Speak to Our Home Service Experts
<span class="hc-accent">NOW!</span></h1>
        <p class="hc-lead">Our certified specialists are standing by to help you get connected with the perfect home service provider.

</p>
        <div class="d-flex flex-wrap gap-3">
          <a href="tel:+18333809800" class="btn hc-btn-brand btn-lg">Call Our Expert Team</a>
          <span class="hc-phone-pill"><i class="bi bi-telephone"></i><a href="tel:+18333809800">(833) 380-9800</a></span>
        </div>
        <div class="mt-3 hc-ok">✓ Available 24/7 &nbsp; ✓ Free Consultation</div>
      </div>
      <div class="col-lg-6">
        <div class="hc-media"></div>
      </div>
    </div>
  </div>
</section>


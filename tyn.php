    
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">



<style>



a.pck-btn {
    text-decoration: none!important;
}


@media screen and (max-width:768px){
    
    .hc-scope .hc-phone-pill {
    font-size: 1.35rem!important;
    border-radius:10px!important;
}
a{
    text-decoration:none!important;
}
    
    .hc-hero-7 {
   
    display: contents;
    background-image:linear-gradient(90deg, rgb(228 255 237 / 56%), rgb(216 251 255 / 36%))!important;
   
}


.hc-bg-green {
    line-height: 1.2;
}
   .res-text-center{
       text-align:center;
   }
   .res-justify-center
   {
       justify-content:center;
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
    text-wrap:auto;
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

.footer_text a {
    text-decoration: none;
}
.hc-scope .hc-phone-pill{
  display:inline-flex;align-items:center;gap:.6rem;
  padding:.7rem 1rem;border-radius:6px;
  background:linear-gradient(90deg,rgba(255,45,85,.14),rgba(11,110,253,.12));
  font-weight:800;letter-spacing:.3px;
  box-shadow:inset 0 0 0 2px rgba(255,255,255,.7),0 8px 18px rgba(16,42,67,.12);
  font-size:1.25rem;
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
.hc-hero-7 {
    background-image: linear-gradient(90deg, rgb(255 255 255), rgb(0 0 0 / 0%)), url(images/call-support.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: inline-table;
    width: 100%;
    position: relative;
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
    <div class="row g-4 align-items-center res-text-center">
      <div class="col-lg-6">
<span class="badge text-white fw-semibold mb-2 fs-5 hc-bg-green">Thank you for your interest! We'll connect you soon.
</span>        <h1 class="display-5 fw-bold mt-2" style="color:#000073">Speak to <span class="hc-accent">Our Home Service</span> Experts
NOW!</h1>
        <p class="hc-lead">Our certified specialists are standing by to help you get connected with the perfect home service provider.

</p>
        <div class="d-flex flex-wrap gap-3 res-justify-center">
          <a href="tel:+18333809800" class="btn hc-btn-brand btn-lg">Call Our Expert Team</a>
          <!--<span class="hc-phone-pill"><i class="bi bi-telephone"></i><a href="tel:+18333809800">(833) 380-9800</a></span>-->
        </div>
        <div class="mt-3 hc-ok">✓ Available 24/7 &nbsp; ✓ Free Consultation</div>
      </div>
      <div class="col-lg-6">
        <div class="hc-media"></div>
      </div>
    </div>
  </div>
</section>
<script>
    // --- Phone number mapping (U.S. readable display) ---
    const phoneNumbers = {
        "window": "(833) 551-6680",
        "solar": "(833) 719-2289",
        "roofing": "(833) 715-3290",
        "kitchen": "(833) 716-9369",
        "homewarranty": "(833) 719-6164",
        "door": "(607) 424-9939",
        "bathroom": "(833) 708-3179",
        "flooring": "(773) 377-6875",
        "hvac": "(833) 801-0863",
        "gutter": "(833) 378-8997",
        "plumbing": "(321) 603-3297",
        "shower": "(833) 378-5763",
        "cabinet": "(833) 380-3988"
    };

    const defaultNumber = "(833) 380-9800";

    // --- Helper: Extract URL param ---
    function getURLParameter(name) {
        const params = new URLSearchParams(window.location.search);
        return params.get(name);
    }

    // --- Helper: Convert (xxx) xxx-xxxx → 1xxxxxxxxxx ---
    function toDialable(phone) {
        let digits = phone.replace(/\D+/g, ""); // remove non-digits
        if (digits.length === 10) digits = "1" + digits; // ensure starts with 1
        return digits;
    }

    const usnParam = getURLParameter("usn");

    if (usnParam) {
        // Replace "Home Service" text dynamically
        document.body.innerHTML = document.body.innerHTML.replace(/Home Service/g, usnParam);

        // Normalize lookup key
        const key = usnParam.replace(/\s+/g, "").toLowerCase();

        // Pick display and dial versions
        const displayPhone = phoneNumbers[key] || defaultNumber;
        const dialPhone = toDialable(displayPhone);

        // Update phone links/text
        document.querySelectorAll('.phone, a[href^="tel:"]').forEach(el => {
            if (el.tagName.toLowerCase() === "a") {
                el.href = `tel:${dialPhone}`;
                el.innerHTML = `<i class="bi bi-telephone"></i> ${displayPhone}`;
            } else {
                el.innerHTML = `<i class="bi bi-telephone"></i> ${displayPhone}`;
            }
        });
    }
</script>


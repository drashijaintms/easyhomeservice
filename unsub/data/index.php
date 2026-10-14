
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Download</title>
  
  <link rel="stylesheet" type="text/css" href="/css/survey.css">
<link rel="stylesheet" type="text/css" href="/css/slick.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
   


<!-------Top-Strip-------->
<div class="top_strip">
	<div class="container">
    		<p class="top_strip_text mb-0 text-center">Your Go-To for Complete Home Solutions and Trusted Excellence</p>
    </div>
</div>

<!---------Header--------->
<div class="step-header">
	<div class="container text-center">
    	<a href="https://easyhomeservice.com"><img src="https://easyhomeservice.com/images/easyhomeservice.svg" class="step-logo" width="127" height="33" alt="logo"></a>
    </div>
</div>	

<!-----Quotes-Section----->

<style>
/* === Scoped styles: Easy Home Service (prefix: ehs-) === */
:root{
  --ehs-a1: 99,102,241;  /* Indigo */
  --ehs-a2: 56,189,248;  /* Sky */
  --ehs-card-light: 255,255,255;
  --ehs-card-dark: 22,24,28;
  --ehs-text-light: 25,28,31;
  --ehs-text-dark: 235,240,245;
  --ehs-muted-light: 88,96,105;
  --ehs-muted-dark: 155,163,175;
  --ehs-radius: 18px;
  --ehs-shadow: 0 20px 60px rgba(16,18,27,.08), 0 2px 8px rgba(16,18,27,.05);
}
@media (prefers-color-scheme: dark){
  :root{ --ehs-shadow: 0 20px 60px rgba(0,0,0,.35), 0 2px 8px rgba(0,0,0,.25); }
}

/* Section background is self-contained so header/footer look untouched */
.ehs-hero{
  position: relative;
  padding: clamp(2rem, 5vw, 3.5rem) 0 clamp(2.5rem, 6vw, 4rem);
  /*isolation: isolate;*/
  overflow: clip;
  background:
    radial-gradient(1200px 600px at -10% -20%, rgba(var(--ehs-a1), .13), transparent 60%),
    radial-gradient(900px 500px at 110% 10%, rgba(var(--ehs-a2), .13), transparent 55%);
}
.ehs-hero::before{
  content:"";
  position:absolute; inset:-2px;
  background: linear-gradient(180deg, rgba(255,255,255,.65), rgba(255,255,255,.4));
  z-index:-1; pointer-events:none;
}
@media (prefers-color-scheme: dark){
  .ehs-hero::before{ background: linear-gradient(180deg, rgba(12,14,18,.85), rgba(12,14,18,.7)); }
}

/* Glass card */
.ehs-card{
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  background: linear-gradient(180deg, rgba(var(--ehs-card-light), .75), rgba(var(--ehs-card-light), .55));
  border: 1px solid rgba(255,255,255,.35);
  border-radius: var(--ehs-radius);
  box-shadow: var(--ehs-shadow);
  padding: clamp(1.25rem, 4vw, 2.25rem);
  margin: 0 auto;
  color: rgb(var(--ehs-text-light));
}
@media (prefers-color-scheme: dark){
  .ehs-card{
    background: linear-gradient(180deg, rgba(var(--ehs-card-dark), .78), rgba(var(--ehs-card-dark), .6));
    border-color: rgba(255,255,255,.08);
    color: rgb(var(--ehs-text-dark));
  }
}

/* Badge */
.ehs-badge{
  display:inline-flex; align-items:center; gap:.5rem;
  padding:.4rem .75rem; border-radius:999px;
  font-weight:700; font-size:.9rem;
  border:1px solid rgba(255,255,255,.35);
  background: rgba(255,255,255,.35);
}
@media (prefers-color-scheme: dark){
  .ehs-badge{ border-color: rgba(255,255,255,.08); background: rgba(255,255,255,.06); }
}

/* Titles */
.ehs-title{
  margin:.7rem 0 .4rem; font-weight:800; letter-spacing:-.02em;
  font-size:clamp(1.6rem, 2.6vw, 2.1rem);
}
.ehs-sub{
  margin:0 0 1.25rem;
  color: rgb(var(--ehs-muted-light));
}
@media (prefers-color-scheme: dark){
  .ehs-sub{ color: rgb(var(--ehs-muted-dark)); }
}

/* Buttons */
.ehs-btn{
  display:inline-flex; align-items:center; gap:.6rem;
  padding:.9rem 1.1rem; border-radius:14px; font-weight:800;
  text-decoration:none; border:1px solid transparent;
  transition:transform .15s ease, box-shadow .15s ease, background .15s ease, border-color .15s ease, color .15s ease;
}
.ehs-btn-primary{
  background: linear-gradient(180deg, rgba(var(--ehs-a1),1), rgba(var(--ehs-a1),.88));
  color:#fff;
  box-shadow: 0 12px 24px rgba(var(--ehs-a1), .28), 0 2px 8px rgba(0,0,0,.08);
}
.ehs-btn-primary:hover{
  transform: translateY(-1px);
  box-shadow: 0 16px 30px rgba(var(--ehs-a1), .35), 0 4px 12px rgba(0,0,0,.1);
  color:#fff;
}
.ehs-btn-ghost{
  background: transparent;
  color: inherit;
  border-color: rgba(var(--ehs-a1), .35);
}
.ehs-btn-ghost:hover{
  background: rgba(var(--ehs-a1), .06);
}

/* Spinner inside the button */
.ehs-spinner{
  width: 1rem; height: 1rem; border-radius: 50%;
  border: 2px solid rgba(255,255,255,.55);
  border-top-color: #fff;
  display:none;
  animation: ehs-spin .7s linear infinite;
}
@keyframes ehs-spin{ to { transform: rotate(360deg); } }

/* Small print */
.ehs-note{
  margin-top:1rem; font-size:.9rem;
  color: rgb(var(--ehs-muted-light));
}
@media (prefers-color-scheme: dark){
  .ehs-note{ color: rgb(var(--ehs-muted-dark)); }
}

/* Respect reduced motion */
@media (prefers-reduced-motion: reduce){
  .ehs-btn{ transition:none; }
  .ehs-spinner{ animation: none; display:none!important; }
}
</style>

<script>
  const ehsBtn = document.getElementById('ehsDownload');
  if (ehsBtn){
    const text = ehsBtn.querySelector('.ehs-btn-text');
    const spin = ehsBtn.querySelector('.ehs-spinner');
    ehsBtn.addEventListener('click', () => {
      if (!spin || !text) return;
      spin.style.display = 'inline-block';
      text.style.opacity = .6;
      ehsBtn.setAttribute('aria-busy','true');
      // Fallback: if navigation fails, revert after a few seconds
      setTimeout(() => {
        if (document.visibilityState === 'visible'){
          spin.style.display = 'none';
          text.style.opacity = 1;
          ehsBtn.removeAttribute('aria-busy');
        }
      }, 6000);
    });
  }
</script>
<!-- === START: Fancy Export Section (scoped) === -->
<section class="ehs-hero">
  <div class="container mt-5 pt-5">
    <div class="row justify-content-center">
      <div class="col-xl-7 col-lg-8">
        <div class="ehs-card text-center">
          <span class="ehs-badge">
            <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 1l9 4v6c0 5-3.8 9.7-9 11-5.2-1.3-9-6-9-11V5l9-4zm0 2.2L5 6v5c0 4.2 2.8 8.1 7 9.3 4.2-1.2 7-5.1 7-9.3V6l-7-2.8zM7 11h3V8h4v3h3l-5 5-5-5z"/></svg>
            Secure Export
          </span>

          <h2 class="ehs-title">Unsubscribed List Export</h2>
          <p class="ehs-sub">
            Download hashed emails for compliance, analytics, and suppression lists.
          </p>

          <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="export_unsubscribes.php" class="ehs-btn ehs-btn-primary" id="ehsDownload">
              <span class="ehs-btn-icon" aria-hidden="true">⬇️</span>
              <span class="ehs-btn-text">Download</span>
              <span class="ehs-spinner" aria-hidden="true"></span>
            </a>

            <!--<a class="ehs-btn ehs-btn-ghost" href="privacy" aria-label="Read privacy policy">-->
            <!--  Privacy Policy-->
            <!--</a>-->
          </div>

          <!--<p class="ehs-note">-->
          <!--  Exports are hashed for safety. Need help? <a href="contact">Contact support</a>.-->
          <!--</p>-->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- === END: Fancy Export Section (scoped) === -->


<!--<div class="container text-center" style="-->
<!--    position: relative;-->
<!--    height: 47vh;-->
<!--    display: flex;-->
<!--    justify-content: center;-->
<!--    align-items: center;-->
<!--    flex-direction: column;-->
<!--">-->
<!--        <h2 class="mb-4">Unsubscribed List Export</h2>-->
<!--        <p class="mb-3">Click the button below to download the list of unsubscribed email hashes.</p>-->
<!--        <a href="export_unsubscribes.php" class="btn btn-success btn-lg">-->
<!--            Download-->
<!--        </a>-->
<!--    </div>-->
    
    


<!---------Footer--------->

<div class="footer ">
    <div class="container">
        <p class="footer_text text-center">
        <a href="terms">Terms of Use</a>|
        <a href="privacy">Privacy Policy</a>|
        <a href="contact">Contact</a>
        </p>
        
   
        
        
        <p class="footer_text footer_text2 text-center">&copy; <script>document.write(new Date().getFullYear())</script> Easy Home Service. <br class="showMob"/>All Rights Reserved.</p>
       
    </div>
</div>



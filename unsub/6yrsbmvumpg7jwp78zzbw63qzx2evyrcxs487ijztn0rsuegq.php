<?php
// --------- PHP HANDLER (must be before any HTML output) ----------
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    // Always return JSON
    header('Content-Type: application/json; charset=UTF-8');

    $host = 'localhost';
    $db   = 'easyhomeservi_contactform';
    $user = 'easyhomeservi_contactform';
    $pass = 'easyhomeservi_contactform';

    // Connect
    $conn = @new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        http_response_code(500);
        echo json_encode(['status' => 'error', 'message' => 'Database connection failed.']);
        exit;
    }

    $email = trim($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'Invalid email address.']);
        $conn->close();
        exit;
    }

    $email_hash = md5(strtolower($email));

    // Check if hash exists
    $check = $conn->prepare("SELECT id FROM unsubscribes WHERE email_hash = ?");
    $check->bind_param("s", $email_hash);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        http_response_code(200);
        echo json_encode(['status' => 'ok', 'message' => "You're already unsubscribed."]);
        $check->close();
        $conn->close();
        exit;
    }

    // Insert new hash
    $stmt = $conn->prepare("INSERT INTO unsubscribes (email_hash) VALUES (?)");
    $stmt->bind_param("s", $email_hash);

    if ($stmt->execute()) {
        http_response_code(200);
        echo json_encode(['status' => 'ok', 'message' => "You've been successfully unsubscribed."]);
    } else {
        http_response_code(500);
        echo json_encode(['status' => 'error', 'message' => 'Failed to process your request.']);
    }

    $stmt->close();
    $check->close();
    $conn->close();
    exit; // <-- critical to prevent the HTML below from being returned in the AJAX response
}


// --------- END PHP HANDLER ----------
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="/images/fabicon.svg">
  <title>Unsubscribe</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/survey.css">
<link rel="stylesheet" type="text/css" href="../css/slick.css">

<link rel="preload" href="css/DMSans-Regular.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="css/DMSans-Medium.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="css/DMSans-SemiBold.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="css/DMSans-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <style>
    body { background-color: #f8f9fa; }
    .btn-primary-custom { background-color: #d53333; border-color: #ff2626; }
    .btn-primary-custom:hover { background-color: #d32323; border-color: #ff2626; }
    .card-header-custom { background-color: #000073; color: white; font-weight: bold; text-align: center; }
    .alert-success { background-color: #d1ecf1; color: #0c5460; border-color: #bee5eb; }
    .bg-blue{
    background:#04d36f;
}
    .bg-blue:hover{
    background:#04d36f;
}
.fs-1rem{
    font-size:1rem!important;
}
.custom-social-proof {
    display: none!important;
    visibility: hidden;
}

  </style>

    



<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P4FX6N8M');</script>
<!-- End Google Tag Manager -->

<!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16938916629"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());   gtag('config', 'AW-16938916629'); </script>


<!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-KSK56LK5TD"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());   gtag('config', 'G-KSK56LK5TD'); </script>


<!-- Hotjar Tracking Code for https://easyhomeservice.com --> <script>     (function(h,o,t,j,a,r){         h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};         h._hjSettings={hjid:5091454,hjsv:6};         a=o.getElementsByTagName('head')[0];         r=o.createElement('script');r.async=1;         r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;         a.appendChild(r);     })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv='); </script>





</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P4FX6N8M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

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
  <div class="container">
    <div class="row justify-content-center my-5 py-5">
      <div class="col-md-4">
        <div class="card shadow-sm">
          <div class="card-header card-header-custom">
            <h1 class="fs-1rem">Unsubscribe from Emails</h1>
          </div>
          <div class="card-body">
            <div id="alertBox" class="alert d-none" role="alert"></div>

            <form id="unsubscribeForm">
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
              </div>
              <button type="submit" class="btn text-white bg-blue w-100">Unsubscribe</button>
            </form>

            <p class="mt-3 text-muted text-center" style="font-size: 0.9rem;">
              We respect your privacy. You will be unsubscribed from all marketing communications.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>



<!---------Footer--------->

<div class="footer ">
    <div class="container">
        <p class="footer_text text-center">
        <a href="/terms">Terms of Use</a>|
        <a href="/privacy">Privacy Policy</a>|
        <a href="/contact">Contact</a>
        </p>
        
        <!--<p class="footer_text">-->
        <!--<a href="javascript:void(0);" onclick="openNewWindow('terms','modal');">Terms of Use</a>|-->
        <!--<a href="javascript:void(0);" onclick="openNewWindow('privacy','modal');">Privacy Policy</a>|-->
        <!--<a href="javascript:void(0);" onclick="openNewWindow('contact','modal');">Contact</a>-->
        <!--</p>-->
        
        
        
        <p class="footer_text footer_text2 text-center">&copy; <script>document.write(new Date().getFullYear())</script> Easy Home Service. <br class="showMob"/>All Rights Reserved.</p>
       
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!--SOCIAL_POP-->

<section class="custom-social-proof">
    <div class="custom-notification">
        <div class="custom-notification-container">
            <div class="custom-notification-image-wrapper">
                <img class="avatar" src="/images/dave.jpg" alt="Dave">
            </div>
            <div class="custom-notification-content-wrapper">
                <p class="custom-notification-content">
                    <span id="notify-customer">Dave</span> <strong class="us">from</strong> <span id="notify-state">Orlando, Florida
</span><br> Got Reliable and Convenient Home Service! </p>
                <p class="time-very"><span class="time" id="notify-time">23 minutes ago</span> <span class="verified-pop"><img src="/images/t-chk.png" alt="verified">Verified</span></p>
            </div>
        </div>
    </div>
</section>

<!--------Script---------->
<!--<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>-->
<script>
    // Function to set a cookie
    function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "expires=" + date.toUTCString();
        }
        document.cookie = `${name}=${encodeURIComponent(value || "")}; ${expires}; path=/`;
    }

    // Function to get URL parameter by name
    function getURLParameter(name) {
        const params = new URLSearchParams(window.location.search);
        return params.get(name);
    }

    // Retrieve URL parameters
    const urlClickid = getURLParameter('clickid');
    const urlPublisherid = getURLParameter('publisherid');

    // Set cookies if URL parameters exist
    if (urlClickid) setCookie('clickid', urlClickid, 1);
    if (urlPublisherid) setCookie('publisherid', urlPublisherid, 1);

    // Function to get a cookie by name
    function getCookie(name) {
        const nameEQ = `${name}=`;
        const cookiesArray = document.cookie.split(';');
        for (let i = 0; i < cookiesArray.length; i++) {
            let cookie = cookiesArray[i].trim();  // Trim whitespace from the cookie
            if (cookie.indexOf(nameEQ) === 0) return decodeURIComponent(cookie.substring(nameEQ.length));
        }
        return null;
    }

    // Retrieve cookies
    const clickid = getCookie('clickid');
    const publisherid = getCookie('publisherid');

    console.log('Click ID:', clickid);
    console.log('Publisher ID:', publisherid);

    // Function to add or update query parameters in the URL
    function updateUrlWithParams(url, params) {
        const urlObject = new URL(url);
        Object.keys(params).forEach(key => urlObject.searchParams.set(key, params[key]));
        return urlObject.toString();
    }

    // Function to handle the click event
    function handleLinkClick(event) {
        event.preventDefault(); // Prevent the default link behavior

        // Get the base URL from the data attribute
        const baseUrl = event.currentTarget.getAttribute('data-base-url');

        // Prepare parameters to add or update
        const params = {};
        if (clickid) params['s2'] = clickid;  // Use 'clickid' for 's2' parameter
        if (publisherid) params['s1'] = publisherid;  // Use 'publisherid' for 's1' parameter

        // Construct the final URL with dynamic parameters
        const url = updateUrlWithParams(baseUrl, params);

        // Redirect to the constructed URL
        window.location.href = url;
    }

    // Attach event listeners to all links with class 'pck-btn'
    document.querySelectorAll('.pck-btn').forEach(link => {
        link.addEventListener('click', handleLinkClick);
    });
</script>
<!--Traking-->
 
<script src="https://fb.thesolarhelp.com/uniclick.js?attribution=lastpaid&cookiedomain=easyhomeservice.com&cookieduration=90&defaultcampaignid=68a592306ea03d59a02b0765&regviewonce=false"></script>



<!-- Event snippet for Submit lead form (1) conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-16938916629/boT_CI3aqYkbEJW2jY0_'});
</script>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $('#unsubscribeForm').on('submit', function(e) {
    e.preventDefault();
    const email = $('#email').val();

    $.ajax({
      url: '',            // same page
      type: 'POST',
      dataType: 'json',   // expect JSON
      data: { email: email },
      success: function(res) {
        $('#alertBox')
          .removeClass('d-none alert-danger')
          .addClass('alert-success')
          .text(res.message || 'Success');
        $('#unsubscribeForm')[0].reset();

        setTimeout(function() {
          window.location = 'https://easyhomeservice.com/allservices';
        }, 4000);
      },
      error: function(xhr) {
        let msg = 'An error occurred. Please try again.';
        try {
          const r = JSON.parse(xhr.responseText);
          if (r && r.message) msg = r.message;
        } catch(_) {}
        $('#alertBox')
          .removeClass('d-none alert-success')
          .addClass('alert-danger')
          .text(msg);
      }
    });
  });
</script>
</body>
</html>

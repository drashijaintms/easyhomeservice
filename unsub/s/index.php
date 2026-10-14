<?php
// --------- PHP HANDLER ----------
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    header('Content-Type: application/json; charset=UTF-8');

    // --- Database config ---
    $host = 'localhost';
    $db   = 'easyhomeservi_contactform';
    $user = 'easyhomeservi_contactform';
    $pass = 'easyhomeservi_contactform';

    $conn = @new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        http_response_code(500);
        echo json_encode(['status'=>'error','message'=>'Database connection failed.']);
        exit;
    }

    // --- Input ---
    $category = isset($_GET['c']) ? trim($_GET['c']) : 'general';
    $email = trim($_POST['email']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(['status'=>'error','message'=>'Invalid email address.']);
        $conn->close();
        exit;
    }

    $email_hash = md5(strtolower($email));

    // --- Check if already unsubscribed ---
    $check = $conn->prepare("SELECT id FROM category_suppression WHERE email_hash = ? AND category = ?");
    $check->bind_param("ss", $email_hash, $category);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo json_encode(['status'=>'ok','message'=>"You're already unsubscribed"]);
        $check->close(); 
        $conn->close(); 
        exit;
    }

    // --- Insert new unsubscribe record ---
    $stmt = $conn->prepare("INSERT INTO category_suppression (email_hash, category, created_at) VALUES (?, ?, NOW())");
    $stmt->bind_param("ss", $email_hash, $category);

    if ($stmt->execute()) {
        echo json_encode(['status'=>'ok','message'=>"You've been unsubscribed"]);
    } else {
        http_response_code(500);
        echo json_encode(['status'=>'error','message'=>'Failed to process your request.']);
    }

    $stmt->close();
    $check->close();
    $conn->close();
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Unsubscribe</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
  </style>
<link rel="icon" type="image/icon" href="https://easyhomeservice.com/images/favicon.svg">


<title>Verify Your Email</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" type="image/x-icon" href="images/fabicon.svg">

<link rel="stylesheet" type="text/css" href="../../css/survey.css">
<link rel="stylesheet" type="text/css" href="../../css/slick.css">

<link rel="preload" href="css/DMSans-Regular.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="css/DMSans-Medium.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="css/DMSans-SemiBold.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="css/DMSans-Bold.woff2" as="font" type="font/woff2" crossorigin>

<style>
.custom-social-proof {
    display: none!important;
    visibility: hidden;
}
</style>


</head>
<body>
<!-- Google Tag Manager (noscript) -->


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
    <div class="col-md-5">
      <div class="card shadow-sm">
        <div class="card-header card-header-custom">
          Unsubscribe from Emails
        </div>
        <div class="card-body">
          <div id="alertBox" class="alert d-none" role="alert"></div>

          <form id="unsubscribeForm">
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name="email" required placeholder="you@example.com">
            </div>
            <button type="submit" class="btn text-white bg-blue w-100">Unsubscribe</button>
          </form>

          <p class="mt-3 text-muted text-center" style="font-size:0.9rem;">
            You will be unsubscribed from all marketing messages for this category.
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
<script>
$('#unsubscribeForm').on('submit', function(e){
  e.preventDefault();
  const email = $('#email').val();
  const category = new URLSearchParams(window.location.search).get('c') || 'general';

  $.ajax({
    url: '?c=' + encodeURIComponent(category),
    type: 'POST',
    dataType: 'json',
    data: { email },
    success: function(res){
      $('#alertBox')
        .removeClass('d-none alert-danger')
        .addClass('alert-success')
        .text(res.message);
      $('#unsubscribeForm')[0].reset();
    },
    error: function(xhr){
      let msg = 'Error. Try again.';
      try {
        const r = JSON.parse(xhr.responseText);
        if (r.message) msg = r.message;
      } catch(e){}
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

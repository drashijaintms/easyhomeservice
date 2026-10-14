<?php
/** verify.php
 * Minimal Vonage Verify flow using PHP (cURL) + Bootstrap 5.3
 * Steps:
 *  1) Start verification with phone number  -> stores request_id in session
 *  2) Check code (OTP) for that request_id
 *  3) Cancel the request (optional)
 */
session_start();

/* ============================
   CONFIG: set your credentials
   ============================ */
$VONAGE_API_KEY    = "09bde122";            // <-- keep as provided or replace
$VONAGE_API_SECRET = "X1LFsfynBqHu7Kl07YwN5bKL"; // <-- replace with your real secret
$DEFAULT_BRAND     = "EasyHomeService";             // Brand name shown in SMS

/* ============================
   Helpers
   ============================ */
function vonage_get($baseUrl, $params) {
    // Build URL with encoded query
    $url = $baseUrl . '?' . http_build_query($params);
    $ch  = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 20,
    ]);
    $res  = curl_exec($ch);
    $err  = curl_error($ch);
    curl_close($ch);
    return [$res, $err];
}

function flash($type, $message) {
    // Store Bootstrap alert message for display
    $_SESSION['flash'][] = ['type' => $type, 'message' => $message];
}

if (!isset($_SESSION['flash'])) {
    $_SESSION['flash'] = [];
}

/* ============================
   Handle POST actions
   ============================ */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    // Start verification
    if ($action === 'start_verify') {
        $phone = trim($_POST['phone'] ?? '');
        $brand = trim($_POST['brand'] ?? $DEFAULT_BRAND);

        if ($phone === '') {
            flash('danger', 'Please enter a phone number.');
        } else {
            [$response, $curlError] = vonage_get(
                'https://api.nexmo.com/verify/json',
                [
                    'api_key'    => $VONAGE_API_KEY,
                    'api_secret' => $VONAGE_API_SECRET,
                    'number'     => $phone,
                    'brand'      => $brand,
                ]
            );

            if ($curlError) {
                flash('danger', 'cURL error: ' . htmlspecialchars($curlError));
            } else {
                $data = json_decode($response, true);
                if (isset($data['status']) && $data['status'] === '0') {
                    // Success
                    $_SESSION['request_id'] = $data['request_id'] ?? null;
                    $_SESSION['phone']      = $phone;
                    $_SESSION['brand']      = $brand;
                    flash('success', 'Verification started. OTP sent to ' . htmlspecialchars($phone) . '. Enter the code below.');
                } else {
                    $errorText = $data['error_text'] ?? 'Unknown error';
                    flash('danger', 'Verification failed (status ' . ($data['status'] ?? '?') . '): ' . htmlspecialchars($errorText));
                }
                // for debugging (optional) you could flash the raw response
                // flash('secondary', 'Response: <code>' . htmlspecialchars($response) . '</code>');
            }
        }
    }

    // Check code
    if ($action === 'check_code') {
        $code = trim($_POST['code'] ?? '');
        $requestId = $_SESSION['request_id'] ?? null;

        if (!$requestId) {
            flash('danger', 'No active verification found. Please start verification again.');
        } elseif ($code === '') {
            flash('danger', 'Please enter the OTP code.');
        } else {
            [$response, $curlError] = vonage_get(
                'https://api.nexmo.com/verify/check/json',
                [
                    'api_key'    => $VONAGE_API_KEY,
                    'api_secret' => $VONAGE_API_SECRET,
                    'request_id' => $requestId,
                    'code'       => $code,
                ]
            );

            if ($curlError) {
                flash('danger', 'cURL error: ' . htmlspecialchars($curlError));
            } else {
                $data = json_decode($response, true);
                if (isset($data['status']) && $data['status'] === '0') {
                    flash('success', '✅ Verification successful!');
                    // Clear session state on success
                    unset($_SESSION['request_id'], $_SESSION['phone']);
                } else {
                    $errorText = $data['error_text'] ?? 'Unknown error';
                    flash('danger', 'Verification check failed (status ' . ($data['status'] ?? '?') . '): ' . htmlspecialchars($errorText));
                }
            }
        }
    }

    // Cancel request
    if ($action === 'cancel_request') {
        $requestId = $_SESSION['request_id'] ?? null;

        if (!$requestId) {
            flash('warning', 'No active request to cancel.');
        } else {
            [$response, $curlError] = vonage_get(
                'https://api.nexmo.com/verify/control/json',
                [
                    'api_key'    => $VONAGE_API_KEY,
                    'api_secret' => $VONAGE_API_SECRET,
                    'request_id' => $requestId,
                    'cmd'        => 'cancel',
                ]
            );

            if ($curlError) {
                flash('danger', 'cURL error: ' . htmlspecialchars($curlError));
            } else {
                $data = json_decode($response, true);
                if (isset($data['status']) && $data['status'] === '0') {
                    flash('success', 'Request cancelled.');
                    unset($_SESSION['request_id'], $_SESSION['phone']);
                } else {
                    $errorText = $data['error_text'] ?? 'Unknown error';
                    flash('danger', 'Cancel failed (status ' . ($data['status'] ?? '?') . '): ' . htmlspecialchars($errorText));
                }
            }
        }
    }

    // After POST, redirect to avoid resubmission on refresh
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
    exit;
}

// State for UI
$requestId = $_SESSION['request_id'] ?? null;
$phone     = $_SESSION['phone'] ?? '';
$brand     = $_SESSION['brand'] ?? $DEFAULT_BRAND;
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Vonage Verify (PHP + cURL)</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5.3 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card shadow-sm">
        <div class="card-body">
          <h1 class="h4 mb-4">Phone Verification</h1>

          <?php foreach ($_SESSION['flash'] as $f): ?>
            <div class="alert alert-<?= htmlspecialchars($f['type']) ?>"><?= $f['message'] ?></div>
          <?php endforeach; $_SESSION['flash'] = []; ?>

          <?php if (!$requestId): ?>
            <!-- STEP 1: Start verification -->
            <form method="post" class="needs-validation" novalidate>
              <input type="hidden" name="action" value="start_verify">
              <div class="mb-3">
                <label for="brand" class="form-label">Brand (sender name)</label>
                <input type="text" class="form-control" id="brand" name="brand" value="<?= htmlspecialchars($brand) ?>" required>
                <div class="form-text">Shown to the user in the verification message.</div>
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Phone number (E.164)</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="e.g. 918602557200" value="<?= htmlspecialchars($phone) ?>" required>
                <div class="form-text">Use country code + number (no spaces or dashes).</div>
              </div>
              <button type="submit" class="btn btn-primary">Send Verification Code</button>
            </form>
          <?php else: ?>
            <!-- STEP 2: Enter OTP -->
            <div class="mb-3">
              <div class="small text-muted">Request ID: <code><?= htmlspecialchars($requestId) ?></code></div>
              <div class="small">We sent an OTP to <strong><?= htmlspecialchars($phone) ?></strong>. Enter it below.</div>
            </div>

            <form method="post" class="mb-3">
              <input type="hidden" name="action" value="check_code">
              <div class="mb-3">
                <label for="code" class="form-label">OTP Code</label>
                <input type="text" class="form-control" id="code" name="code" inputmode="numeric" autocomplete="one-time-code" placeholder="Enter the code" required>
              </div>
              <button type="submit" class="btn btn-success">Verify Code</button>
            </form>

            <!-- STEP 3: Cancel -->
            <form method="post" onsubmit="return confirm('Cancel this verification request?');">
              <input type="hidden" name="action" value="cancel_request">
              <button type="submit" class="btn btn-outline-danger">Cancel Request</button>
            </form>
          <?php endif; ?>

          <hr class="my-4">
          <p class="text-muted small mb-0">
            This demo uses <code>GET</code> to call:<br>
            <code>/verify/json</code>, <code>/verify/check/json</code>, and <code>/verify/control/json</code> with PHP cURL.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Optional Bootstrap JS (for better UX, not required for this flow) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

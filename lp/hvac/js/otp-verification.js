(function () {
  const VERIFY_API = "hvac/js/verify-api.php";
  window.OTPVerification = {
    startVerification,
    checkVerification,
    resendVerification,
  };

  function startVerification(phone, onSuccess, onError) {
    fetch(VERIFY_API + "?action=start", {
      method: "POST",
      headers: { "Content-Type": "application/x-www-form-urlencoded" },
      body: new URLSearchParams({ phone }),
    })
      .then((r) => r.json())
      .then((d) => (d.ok ? onSuccess(d.request_id) : onError(d.error || "Failed to send OTP.")))
      .catch(() => onError("Network error. Please try again."));
  }

  function checkVerification(requestId, code, onSuccess, onError) {
    fetch(VERIFY_API + "?action=check", {
      method: "POST",
      headers: { "Content-Type": "application/x-www-form-urlencoded" },
      body: new URLSearchParams({ request_id: requestId, code }),
    })
      .then((r) => r.json())
      .then((d) => (d.ok ? onSuccess() : onError(d.error || "Invalid or expired code.")))
      .catch(() => onError("Network error verifying code."));
  }

  function resendVerification(phone, onSuccess, onError) {
    startVerification(phone, onSuccess, onError);
  }
})();

<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>US Mobile Verification (Vonage Verify v2 · PHP)</title>
  <style>
    body { font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif; margin: 2rem; }
    form { max-width: 420px; margin-bottom: 2rem; }
    input, button { padding: .7rem; font-size: 1rem; width: 100%; }
    label { display:block; margin:.5rem 0; font-weight:600; }
    .row { display:flex; gap: .5rem; }
    .row > * { flex: 1; }
    .msg { margin-top: .75rem; min-height: 1.2rem; }
    .ok { color: #0a7c2f; }
    .err { color: #b00020; }
    small { color:#555 }
  </style>
</head>
<body>
  <h1>Verify your US Mobile Number</h1>

  <form id="start-form" autocomplete="off">
    <label for="phone">Mobile number (US, E.164)</label>
    <!--<input id="phone" name="phone" type="tel" placeholder="+1XXXXXXXXXX" required  />-->
    <!--<input id="phone" name="phone" type="tel" placeholder="+1XXXXXXXXXX" required pattern="^\+1\d{10}$" />-->

    <input id="phone" name="phone" type="tel" placeholder="+1XXXXXXXXXX" required  />


    <small>Example: +18335551234</small>
    <button type="submit" style="margin-top:.75rem;">Send Code</button>
    <div id="start-msg" class="msg"></div>
  </form>

  <form id="check-form" autocomplete="off">
    <label for="code">Enter the 6-digit code</label>
    <div class="row">
      <input id="code" name="code" type="text" maxlength="6" inputmode="numeric" placeholder="123456" required />
      <button type="submit">Verify</button>
    </div>
    <div id="check-msg" class="msg"></div>
  </form>

<script>
const startForm = document.getElementById('start-form');
const checkForm = document.getElementById('check-form');
const startMsg  = document.getElementById('start-msg');
const checkMsg  = document.getElementById('check-msg');

async function postJSON(url, payload) {
  const res = await fetch(url, {
    method: 'POST',
    headers: {'Content-Type': 'application/json'},
    body: JSON.stringify(payload),
    credentials: 'same-origin'
  });
  const data = await res.json().catch(() => ({}));
  if (!res.ok) throw new Error(data.title || data.detail || data.error || res.statusText);
  return data;
}

startForm.addEventListener('submit', async (e) => {
  e.preventDefault();
  startMsg.textContent = 'Sending code…';
  startMsg.className = 'msg';
  try {
    const phone = document.getElementById('phone').value.trim();
    await postJSON('https://easyhomeservice.com/phone/start', { phoneNumber: phone });
    startMsg.textContent = 'Code sent! Check your SMS.';
    startMsg.className = 'msg ok';
  } catch (err) {
    startMsg.textContent = err.message || 'Failed to start verification';
    startMsg.className = 'msg err';
  }
});

checkForm.addEventListener('submit', async (e) => {
  e.preventDefault();
  checkMsg.textContent = 'Checking code…';
  checkMsg.className = 'msg';
  try {
    const code = document.getElementById('code').value.trim();
    const data = await postJSON('check.php', { code });
    if ((data.status || '').toLowerCase() === 'completed') {
      checkMsg.textContent = '✅ Verified!';
      checkMsg.className = 'msg ok';
    } else {
      checkMsg.textContent = 'Unexpected status: ' + (data.status || 'unknown');
    }
  } catch (err) {
    checkMsg.textContent = err.message || 'Verification failed';
    checkMsg.className = 'msg err';
  }
});
</script>
</body>
</html>

<?php
// === PHP PROXY + FRONTEND ===
if (isset($_GET['action']) && $_GET['action'] === 'autocomplete' && isset($_GET['term'])) {
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');

    $apiKey = 'jM6vBifjiqmR9kQPgCFuU2XewtrO2jwN'; // your live IPQS API key
    $term = urlencode($_GET['term']);
    $country = $_GET['country'] ?? 'US';
    $limit = $_GET['limit'] ?? 5;

    $url = "https://ipqualityscore.com/api/json/address-autocomplete/$apiKey?term=$term&country=$country&limit=$limit";

    // ✅ Use CURL instead of file_get_contents
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

    $response = curl_exec($ch);
    $err = curl_error($ch);
    curl_close($ch);

    if ($response === false || empty($response)) {
        echo json_encode(['success' => false, 'error' => 'No response from IPQS (cURL error: '.$err.')']);
    } else {
        echo $response;
    }
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>IPQS Address Autocomplete (Server Proxy)</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
body { font-family: Arial, sans-serif; padding: 40px; }
input { width: 400px; padding: 8px; font-size: 16px; }
ul { list-style:none; margin:0; padding:0; width:400px; border:1px solid #ccc; display:none; position:absolute; background:#fff; z-index:1000; box-shadow:0 2px 6px rgba(0,0,0,0.15); }
li { padding:8px; cursor:pointer; border-bottom:1px solid #eee; }
li:hover { background:#000073; color:#fff; }
#result { margin-top: 20px; color: #333; }
</style>
</head>
<body>

<h2>🏠 IPQS Address Autocomplete (Paid Account Demo)</h2>
<p>Start typing your address below:</p>

<input id="address" placeholder="e.g. 1600 Pennsylvania Ave" autocomplete="off">
<ul id="suggestions"></ul>
<p id="result"></p>

<script>
$(document).ready(function() {
  const baseURL = window.location.href.split('?')[0]; // same file
  let timer;

  $('#address').on('input', function() {
    clearTimeout(timer);
    const query = $(this).val().trim();
    if (query.length < 3) return $('#suggestions').hide();

    timer = setTimeout(() => {
      $.getJSON(`${baseURL}?action=autocomplete&term=${encodeURIComponent(query)}&country=US&limit=5`)
        .done(res => {
          console.log('IPQS Autocomplete Response:', res);
          if (!res.success || !res.suggestions || res.suggestions.length === 0) {
            $('#suggestions').hide();
            return;
          }

          const html = res.suggestions.map(s =>
            `<li data-city="${s.city || ''}" data-state="${s.region || ''}" data-zip="${s.postal_code || ''}">
              ${s.address}
            </li>`
          ).join('');

          $('#suggestions').html(html).show();

          $('#suggestions li').off('click').on('click', function() {
            const addr = $(this).text();
            const city = $(this).data('city');
            const state = $(this).data('state');
            const zip = $(this).data('zip');

            $('#address').val(addr);
            $('#suggestions').hide();

            $('#result').html(`
              ✅ <b>Selected Address:</b> ${addr}<br>
              🏙️ <b>City:</b> ${city || '—'}<br>
              🗺️ <b>State:</b> ${state || '—'}<br>
              📬 <b>ZIP:</b> ${zip || '—'}
            `);
          });
        })
        .fail(err => {
          console.error('Error:', err);
          $('#suggestions').hide();
        });
    }, 400);
  });

  $(document).on('click', e => {
    if (!$(e.target).closest('#address, #suggestions').length)
      $('#suggestions').hide();
  });
});
</script>
</body>
</html>

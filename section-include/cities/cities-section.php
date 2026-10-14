<?php
include __DIR__ . '/states-cities-data.php';

/*
 URL examples:
 /connecticut/hvac-services-in-connecticut
 /texas/plumbing-experts-in-texas
*/

// Get URL path safely
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Break into segments & clean
$segments = array_values(array_filter(explode('/', $path)));

// STATE = first folder
$stateKey = strtolower(trim($segments[0] ?? ''));

// If state not found, stop rendering
if (!isset($statesCities[$stateKey])) {
  return;
}

$stateName = $statesCities[$stateKey]['state_name'];
$cities    = $statesCities[$stateKey]['cities'];

// Dynamic heading (STATE ALWAYS SHOWS)
$heading = "Cities We Serve in $stateName";

// Split into 4 columns (6 cities each)
$col1 = array_slice($cities, 0, 6);
$col2 = array_slice($cities, 6, 6);
$col3 = array_slice($cities, 12, 6);
$col4 = array_slice($cities, 18, 6);
?>

<!-- YOUR DESIGN BELOW — NOT MODIFIED -->

<div class="roofing_section_2">
    
  <div class="container">
    <h2 class="common_heading"><?= $heading ?></h2>

    <div class="row py-4">

      <div class="col-lg-3 col-6">
        <ul class="city-ul">
          <?php foreach ($col1 as $city): ?>
            <li><i class="bi bi-geo-alt"></i> <?= $city ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="col-lg-3 col-6">
        <ul class="city-ul">
          <?php foreach ($col2 as $city): ?>
            <li><i class="bi bi-geo-alt"></i> <?= $city ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="col-lg-3 col-6">
        <ul class="city-ul">
          <?php foreach ($col3 as $city): ?>
            <li><i class="bi bi-geo-alt"></i> <?= $city ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="col-lg-3 col-6">
        <ul class="city-ul">
          <?php foreach ($col4 as $city): ?>
            <li><i class="bi bi-geo-alt"></i> <?= $city ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

    </div>
  </div>

</div>

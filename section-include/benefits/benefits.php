<?php

/* ===========================
   ✅ GET CLEAN SLUG
   =========================== */
$pageSlug = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

/* ===========================
   ✅ LOAD BENEFITS DATA
   =========================== */
$benefitFiles = glob(__DIR__ . '/benefits-content-*.php');
$benefits = [];

foreach ($benefitFiles as $file) {
    $data = include $file;

    if (isset($data[$pageSlug])) {
        $benefits = $data[$pageSlug];
        break;
    }
}

/* ===========================
   ✅ STEP PAGES LIST
   =========================== */
$stepPages = [
    "roofing-steps","gutter-steps","solar-steps","siding-steps","fencing-steps",
    "foundation-steps","garage-steps","landscaping-steps","masonary-steps",
    "pest-control-steps","pool-steps","door-steps","window-steps","hvac-steps",
    "homesecurity-steps","flooring-steps","electrical-steps","concrete-steps",
    "countertops-steps","handyman-steps","locksmith-steps","toxicmaterial-steps",
    "cleaning-steps","bathroom-steps","furniture-steps","glassrepair-steps",
    "handymanappliance-steps","insulation-steps","kitchen-steps",
    "mirrorinstall-steps","mold-steps","painting-steps","plumbing-steps",
    "stonepolish-steps","walktub-steps","weldcutmetalstructure-steps",
    "wellpumps-steps","wiringlowvoltage-steps","basement-steps","bathtub-steps",
    "brickstonefireplace-steps","brickwork-steps","cabinet-steps",
    "carpentry-steps","customhomes-steps","deck-steps",
    "decoratorsanddesigners-steps","drywallsheetrock-steps",
    "homeinspection-steps","homemediatv-steps","materials-steps",
    "rental-steps","septic-steps","stairlift-steps","tennis-court-steps",
    "tile-steps","tree-steps","wallpaper-steps","wall-steps",
    "appraiserrealestate-steps","architects-steps",
    "architecturalplandesign-steps","atticwholehousefan-steps",
    "awnings-steps","christmaslights-steps","demolition-steps",
    "drainage-steps","dryrot-steps","engineer-steps","excavation-steps",
    "framing-steps","homeenergyaudit-steps","homewarranty-steps",
    "junkremoval-steps","landsurveyor-steps","outdoorplayequipment-steps",
    "patiocovers-steps","portabletoilets-steps","powerwashing-steps",
    "remodeling-steps","roomadditions-steps","securitycameras-steps",
    "sewerwatermain-steps","sheds-steps","showerglassinstalldoor-steps",
    "skylight-steps","smallprojects-steps","stonemasonary-steps",
    "sunroom-steps","waterheater-steps","waterdamage-steps"
];

/* ===========================
   ✅ SMART CTA MATCHING
   =========================== */

$ctaLink = '#';

foreach ($stepPages as $step) {
    $base = str_replace('-steps', '', $step);

    if ($pageSlug === $base) {
        $ctaLink = $step;
        break;
    }
}

/* Second: partial match only if exact match was not found */
if ($ctaLink === '#') {
    foreach ($stepPages as $step) {
        $base = str_replace('-steps', '', $step);

        if (strpos($pageSlug, $base) !== false) {
            $ctaLink = $step;
            break;
        }
    }
}
?>

<?php if (!empty($benefits) && !empty($benefits['cards'])): ?>

<div class="roofing_section_2 benefits-section">
    <div class="container">

        <!-- HEADING -->
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-9">
                <h2 class="common_heading inner_common_head">
                    <?= $benefits['heading']; ?>
                </h2>
                <p class="common_text">
                    <?= $benefits['description']; ?>
                </p>
            </div>
        </div>

        <!-- CARDS -->
        <div class="row g-4 d-flex justify-content-center">
            <?php foreach ($benefits['cards'] as $card): 

                // ✅ ALT fallback
                $altText = !empty($card['alt']) 
                    ? $card['alt'] 
                    : (!empty($card['title']) 
                        ? $card['title'] 
                        : basename($card['icon'], ".png")
                    );
            ?>

            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
                <div class="benefit-card">

                    <div class="d-flex justify-content-between align-items-center">
                        
                        <div class="benefit-icon-box">
                            <img 
                                src="<?= $card['icon']; ?>" 
                                alt="<?= htmlspecialchars($altText); ?>"
                            >
                        </div>

                        <h3 class="benefit-title">
                            <?= $card['title']; ?>
                        </h3>
                    </div>

                    <p class="benefit-text">
                        <?= $card['text']; ?>
                    </p>

                </div>
            </div>

            <?php endforeach; ?>
        </div>

        <!-- CTA -->
        <div class="row">
            <div class="col-lg-12">
                <div class="clearall"></div>

                <div class="btn_box">
                    <p class="btn_top_text">Just Takes 2 Minutes</p>

                    <a href="/<?= $ctaLink ?>" class="common_btn">
                        Get A Quote 
                        <img src="/images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow">
                    </a>

                    <p class="btn_text inner_btn_text">
                        <img src="/images/lock.png" class="btn_lock" width="50" height="67" alt="icon">
                        Your information is 100% secure & confidential.
                    </p>
                </div>  

            </div>
        </div>

    </div>
</div>

<?php endif; ?>
<?php
/* ===========================
   GET CLEAN SLUG
=========================== */

$pageSlug = basename(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));


/* ===========================
   LOAD ALL CONTENT FILES
=========================== */

$serviceFiles = glob(__DIR__ . "/emergency-services-content-*.php");


/* ===========================
   FIND MATCHING DATA
=========================== */

$sectionData = [];

foreach ($serviceFiles as $file) {

    $data = include $file;

    if (isset($data[$pageSlug])) {

        $sectionData = $data[$pageSlug];

        break;
    }
}

?>


<?php if (!empty($sectionData)): ?>

<div class="roofing_section_2">
    <div class="container">
        <div class="text-center">
            <div class="row d-flex justify-content-center align-items-center text-center">
                <div class="col-lg-10">
                    <!-- HEADING -->
            <?php if (!empty($sectionData["heading"])): ?>
                <h2 class="common_heading inner_common_head"><?= $sectionData["heading"] ?></h2>
            <?php endif; ?>
            <!-- DESCRIPTION -->
            <?php if (!empty($sectionData["description"])): ?>
                <p class="common_text"><?= $sectionData["description"] ?></p>
            <?php endif; ?>
                </div>
            </div>
          <!-- SERVICES -->
            <?php if (!empty($sectionData["services"])): ?>
                <div class="row team-boxed pt-4">
                    <?php foreach ($sectionData["services"] as $service): ?>
                        <div class="col-md-6 col-lg-3 item">
                            <div class="box">
                                <!-- IMAGE -->
                                <?php if (!empty($service["image"])): ?>
                                    <div class="icon-circle">
                                        <img src="<?= $service["image"] ?>" alt="<?= $service["alt"] ?>">
                                    </div>
                                <?php endif; ?>
                                <!-- TITLE -->
                                <?php if (!empty($service["title"])): ?>
                                    <h3 class="name"><?= $service["title"] ?></h3>
                                <?php endif; ?>
                                <!-- DESCRIPTION -->
                                <?php if (!empty($service["description"])): ?>
                                    <p class="description"><?= $service["description"] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?>
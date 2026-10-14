<?php

/* ===========================
   GET CLEAN SLUG
=========================== */
$pageSlug = basename(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));

/* ===========================
   LOAD INNER SECTION DATA
=========================== */
$innerSectionFiles = glob(__DIR__ . "/inner-section-content-*.php");

$innerSection = [];

foreach ($innerSectionFiles as $file) {
    $data = include $file;

    if (isset($data[$pageSlug])) {
        $innerSection = $data[$pageSlug];
        break;
    }
}

?>

<?php if (!empty($innerSection)): ?>

<div class="inner__section-1">

    <div class="container">

        <!-- HEADING + TOP DESCRIPTION -->
        <?php if (!empty($innerSection["heading"]) || !empty($innerSection["top_description"])): ?>
            <div class="row d-flex justify-content-center align-items-center text-center">
                <div class="col-lg-10">
                    <?php if (!empty($innerSection["heading"])): ?><h2 class="common_heading inner_common_head"><?= $innerSection["heading"] ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($innerSection["top_description"])): ?>
                        <?php foreach ($innerSection["top_description"] as $topPara): ?>
                            <?php if (!empty(trim($topPara))): ?><p class="common_text mb-2"><?= $topPara ?></p>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <!-- MAIN ROW -->
        <div class="row py-5 d-flex justify-content-evenly align-items-center text-left">
<!-- IMAGE -->
<div class="col-lg-5 mb-4 mb-lg-0 custom-image-column">
    <div class="left_img custom-height-image-wrapper">
        <?php if (!empty($innerSection["image"]["src"])): ?>
            <img src="<?= $innerSection["image"]["src"] ?>" alt="<?= $innerSection["image"]["alt"] ?>" class="custom-height-image">
        <?php endif; ?>
    </div>
</div>

<!-- RIGHT CONTENT -->
<div class="col-lg-6 custom-content-column">
                <?php if (!empty($innerSection["content"])): ?>
                    <?php foreach ($innerSection["content"] as $content): ?>
                        <?php if ($content["type"] == "paragraph"): ?>
                            <!-- PARAGRAPH -->
                            <?php if (!empty(trim($content["text"]))): ?><p class="common_text"><?= $content["text"] ?></p>
                        <?php endif; ?>
                        <?php elseif ($content["type"] == "heading"): ?>
                            <!-- HEADING -->
                            <?php if (!empty(trim($content["text"]))): ?><h3 class="common_text"><strong><?= $content["text"] ?></strong></h3>
                        <?php endif; ?>
                        <?php elseif ($content["type"] == "list"): ?>
                            <!-- LIST -->
                            <?php if (!empty($content["items"])): ?>
                                <ul class="inner_sec1__point">
                                    <?php foreach ($content["items"] as $item): ?>
                                    <li>
    <?php if (!empty($item["description"])): ?>
        <strong>
            <?php if (!empty($item["title"])): ?>
                <?= $item["title"] ?>
            <?php endif; ?>
        </strong>
    <?php else: ?>
        <?php if (!empty($item["title"])): ?>
            <?= $item["title"] ?>
        <?php endif; ?>
    <?php endif; ?>

    <?php if (!empty($item["description"])): ?>
        - <span class="lispan"><?= $item["description"] ?></span>
    <?php endif; ?>

    <?php if (!empty($item["sub_items"])): ?>
        <!-- SUB LIST -->
        <ul class="ulclas">
            <?php foreach ($item["sub_items"] as $subItem): ?>
                <li class="mt-1">
                    <span class="lispan"><?= $subItem ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<?php endif; ?>
<!-- BUTTON -->
<?php if (!empty($innerSection["button"])): ?>
<div class="btn_box mt-3">
    <p class="btn_top_text">Just Takes 2 Minutes</p>
    <a href="/<?= $innerSection["button"]["link"] ?>" class="common_btn"><?= $innerSection["button"]["text"] ?> <img src="/images/btn_arw.png" class="btn_arw" width="10" height="18" alt="arrow"></a>
    <p class="btn_text inner_btn_text"><img src="/images/lock.png" class="btn_lock" width="50" height="67" alt="icon"> Your information is 100% secure & confidential.</p>
</div>
<?php endif; ?>
</div>
</div>
</div>
</div>
<?php endif; ?>
<script>
document.addEventListener("DOMContentLoaded", function () {

    function matchCustomImageHeight() {

        const contentCol = document.querySelector(".custom-content-column");
        const image = document.querySelector(".custom-height-image");

        if (contentCol && image) {

            let contentHeight = contentCol.offsetHeight;

            image.style.height = contentHeight + "px";
            image.style.width = "100%";
            image.style.objectFit = "cover";
        }
    }

    matchCustomImageHeight();

    window.addEventListener("resize", matchCustomImageHeight);

});
</script>
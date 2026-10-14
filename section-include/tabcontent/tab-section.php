<?php
/* ===========================
   GET CLEAN SLUG
=========================== */
$pageSlug = basename(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));

/* ===========================
   LOAD TAB SECTION DATA
=========================== */
$tabSectionFiles = glob(__DIR__ . "/tab-section-content-*.php");

$tabSection = [];

foreach ($tabSectionFiles as $file) {

    $data = include $file;

    if (isset($data[$pageSlug])) {

        $tabSection = $data[$pageSlug];

        break;
    }
}

?>

<?php if (!empty($tabSection)): ?>

<div class="roofing_section_2">
    <div class="container">
    <!-- HEADING -->
    <?php if (!empty($tabSection["heading"])): ?>
    <h2 class="common_heading"><?= $tabSection["heading"] ?></h2>
    <?php endif; ?>
    <!-- TOP DESCRIPTION -->
    <?php if (!empty($tabSection["top_description"])): ?><?php foreach ($tabSection["top_description"] as $topContent): ?>
    <!-- PARAGRAPH -->
    <?php if ($topContent["type"] == "paragraph"): ?>
    <?php if (!empty(trim($topContent["text"]))): ?><p class="common_text"><?= $topContent["text"] ?></p><?php endif; ?>
    <!-- LIST -->
    <?php elseif ($topContent["type"] == "list"): ?>
    <?php if (!empty($topContent["items"])): ?>
    <ul><?php foreach ($topContent["items"] as $item): ?><li><?= $item ?></li><?php endforeach; ?></ul>
    <?php endif; ?>
    <?php endif; ?>
    <?php endforeach; ?>
    <?php endif; ?>
    <div class="row">
    <div class="col-lg-12">
    <!-- TAB BUTTONS -->
    <?php if (!empty($tabSection["tabs"])): ?>
    <div class="custom-tabs">
    <?php foreach ($tabSection["tabs"] as $index => $tab): ?>
    <button class="custom-tab-btn mb-3 <?= $index == 0 ? 'active' : '' ?>" data-tab="#<?= $pageSlug ?>-<?= $tab["id"] ?>"><?= $tab["button_text"] ?></button>
    <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <!-- TAB CONTENT -->
    <div class="tab-content-custom">
    <?php if (!empty($tabSection["tabs"])): ?>
    <?php foreach ($tabSection["tabs"] as $index => $tab): ?>
    <div id="<?= $pageSlug ?>-<?= $tab["id"] ?>"class="tab-pane-custom <?= $index == 0 ? 'active' : '' ?>">
    <div class="row d-flex justify-content-evenly align-items-start px-2 gy-4">
    <!-- LEFT CONTENT -->
    <div class="col-lg-6">
    <!-- TITLE -->
    <?php if (!empty($tab["title"])): ?><h3><?= $tab["title"] ?></h3><?php endif; ?>
    <!-- CONTENT -->
    <?php if (!empty($tab["content"])): ?>
    <?php foreach ($tab["content"] as $content): ?>
    <!-- PARAGRAPH -->
    <?php if ($content["type"] == "paragraph"): ?><?php if (!empty(trim($content["text"]))): ?>
    <p><?= $content["text"] ?></p>
    <?php endif; ?>
    <!-- HEADING -->
    <?php elseif ($content["type"] == "heading"): ?><?php if (!empty(trim($content["text"]))): ?><h4><?= $content["text"] ?></h4><?php endif; ?>
    <!-- LIST -->
    <?php elseif ($content["type"] == "list"): ?>
    <?php if (!empty($content["items"])): ?>
    <ul><?php foreach ($content["items"] as $item): ?><li><?php if (!empty($item["description"])): ?><strong><?php if (!empty($item["title"])): ?><?= $item["title"] ?><?php endif; ?></strong>
    <?php else: ?>
    <?php if (!empty($item["title"])): ?><?= $item["title"] ?><?php endif; ?>
    <?php endif; ?>
    <?php if (!empty($item["description"])): ?>- <span class="lispan"><?= $item["description"] ?></span>
    <?php endif; ?>
    <!-- SUB LIST -->
    <?php if (!empty($item["sub_items"])): ?><ul class="ulclas"><?php foreach ($item["sub_items"] as $subItem): ?>
    <li class="mt-1"><span class="lispan"><?= $subItem ?></span></li>
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
    <!-- BUTTON --><?php if (!empty($tab["button"])): ?>
    <div class="d-flex justify-content-center">
    <a href="https://easyhomeservice.com/<?= ltrim($tab["button"]["link"], '/') ?>" class="hvac-btn"><?= $tab["button"]["text"] ?></a>
    </div>
    <?php endif; ?>
    </div>
    <!-- RIGHT IMAGE -->
    <div class="col-lg-6">
    <?php if (!empty($tab["image"]["src"])): ?>
    <img 
        src="<?= $tab["image"]["src"] ?>" 
        alt="<?= !empty($tab["image"]["alt"]) ? $tab["image"]["alt"] : $tab["title"] ?>" 
        class="hvac-s-img"
    >
<?php endif; ?>
    </div>
    </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
    </div>
    </div>
    </div>
    </div>
</div>
<?php endif; ?>
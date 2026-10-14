<style>
  .warning-signs-section {
    background: #f5f5f7;
    padding: 80px 0;
    position: relative;
    overflow: hidden;
  }

 
  /* ===== CARD ===== */
.warning-card {
    background: #fff;
    border-radius: 6px;
    padding: 25px 25px 25px;
    height: 100%;
    position: relative;
    overflow: hidden;
    transition: all 0.35s ease;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
    border-left: 5px solid #04d36f;
    text-align: left;
}

   .warning-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.12);
  }

  /* ===== ICON ===== */
  .warning-icon {
    width: 92px;
    height: 92px;
    background: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    border: 1px solid #f1f1f1;
  }

  .warning-icon img {
    width: 50px;
    height: 50px;
    object-fit: contain;
  }

  /* ===== TITLE ===== */
  .warning-card h3 {
    font-size: 24px;
    line-height: 30px;
    font-weight: 700;
    color: #1d2760;
    margin-bottom: 10px;
  }

  /* ===== DESCRIPTION ===== */
  .warning-card p {
    font-size: 16px;
    line-height: 24px;
    color: #111;
    margin-bottom: 0;
  }

  .warning-card a {
    color: #111;
    font-weight: 800;
    text-decoration: none;
  }

  .warning-card a:hover {
    color: #17c866;
  }

    /* ===== RESPONSIVE ===== */
  @media (max-width: 1199px) {

    .warning-signs-section .common_heading {
      font-size: 40px;
    }

    .warning-card h3 {
      font-size: 28px;
    }

    .warning-card p {
      font-size: 18px;
    }
  }

  @media (max-width: 991px) {

    .warning-signs-section {
      padding: 60px 0;
    }

    .warning-signs-section .common_heading {
      font-size: 34px;
    }

    .warning-signs-section .common_text {
      font-size: 16px;
      line-height: 28px;
      margin-bottom: 40px;
    }

    .warning-card {
      padding: 30px 25px;
    }

    .warning-card h3 {
      font-size: 26px;
    }

    .warning-card p {
      font-size: 17px;
      line-height: 1.6;
    }
  }

  @media (max-width: 767px) {

    .warning-signs-section .common_heading {
      font-size: 28px;
      line-height: 1.3;
    }

    .warning-signs-section .common_text {
      font-size: 15px;
      line-height: 26px;
    }

    .warning-card {
      padding: 28px 22px;
    }

    .warning-card h3 {
      font-size: 22px;
      margin-bottom: 16px;
    }

    .warning-card p {
      font-size: 16px;
      line-height: 1.6;
    }

    .warning-icon {
      width: 82px;
      height: 82px;
      margin-bottom: 22px;
    }

    .warning-icon img {
      width: 36px;
      height: 36px;
    }
  }
</style>

<?php
/* ===========================
   GET CLEAN SLUG
=========================== */

$pageSlug = basename(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));


/* ===========================
   LOAD ALL CONTENT FILES
=========================== */

$warningFiles = glob(__DIR__ . "/warning-signs-content-*.php");


/* ===========================
   FIND MATCHING DATA
=========================== */

$warningData = [];

foreach ($warningFiles as $file) {

    $data = include $file;

    if (isset($data[$pageSlug])) {

        $warningData = $data[$pageSlug];

        break;
    }
}
?>

<?php if (!empty($warningData)): ?>

<section class="section_2 warning-signs-section">
    <div class="container">

        <div class="row d-flex justify-content-center pb-5">
            <div class="col-lg-10">

                <!-- HEADING -->
                <?php if (!empty($warningData["heading"])): ?>
                    <h2 class="common_heading">
                        <?= $warningData["heading"] ?>
                    </h2>
                <?php endif; ?>

                <!-- DESCRIPTION -->
                <?php if (!empty($warningData["description"])): ?>
                    <p class="common_text">
                        <?= $warningData["description"] ?>
                    </p>
                <?php endif; ?>

            </div>
        </div>

        <!-- SERVICES -->
        <?php if (!empty($warningData["services"])): ?>

            <div class="row g-4 d-flex justify-content-center">

                <?php foreach ($warningData["services"] as $service): ?>

                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">

                        <div class="warning-card">

                            <!-- IMAGE -->
                           <!-- IMAGE -->
<?php if (!empty($service["image"])): ?>
    <div class="warning-icon">
        <img 
            src="<?= $service["image"] ?>" 
            alt="<?= !empty(trim($service["alt"])) 
                ? $service["alt"] 
                : (!empty(trim($service["title"])) 
                    ? $service["title"] 
                    : $warningData['heading']) ?>"
        >
    </div>
<?php endif; ?>

                            <!-- TITLE -->
                            <?php if (!empty($service["title"])): ?>
                                <h3>
                                    <?= $service["title"] ?>
                                </h3>
                            <?php endif; ?>

                            <!-- DESCRIPTION -->
                            <?php if (!empty($service["description"])): ?>
                                <p>
                                    <?= $service["description"] ?>
                                </p>
                            <?php endif; ?>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>
</section>


<?php endif; ?>
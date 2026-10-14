<?php

/* =====================================
   INCLUDE FILES
===================================== */

require_once $_SERVER['DOCUMENT_ROOT'] . '/section-include/additional-services/services-data.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/section-include/additional-services/related-services.php';


/* =====================================
   CURRENT PAGE SERVICE
===================================== */

$current_service = $current_service ?? basename($_SERVER['PHP_SELF'], '.php');


/* =====================================
   GET RELATED SERVICE KEYS
===================================== */

$service_keys = $related_services[$current_service] ?? [];


/* =====================================
   BUILD SERVICES ARRAY
===================================== */

$services = [];

foreach ($service_keys as $key) {

    if (
        isset($all_services[$key]) &&
        !empty($all_services[$key]['is_active'])
    ) {

        $services[] = $all_services[$key];
    }
}

/* =====================================
   TOTAL SERVICES
===================================== */

$totalServices = count($services);

$rows = [];

if ($totalServices <= 4) {

    $rows[] = $services;

} elseif ($totalServices <= 6) {

    $rows = array_chunk($services, 3);

} elseif ($totalServices <= 8) {

    $rows = array_chunk($services, 4);

} else {

    $perRow = 4;

    if ($totalServices % 4 == 1) {
        $perRow = 3;
    }

    $rows = array_chunk($services, $perRow);
}

?>

<style>

.additional_services_sec{
    position:relative;
    padding:70px 0 60px;
    background-color:#fafafa;
    background-image:url('/images/additional-sec-bg.png');
    background-repeat:no-repeat;
    background-position:bottom;
    background-size:cover;
    overflow:hidden;
}

.additional_service_box {
    position: relative;
    background: #04d36f;
    border-radius: 8px;
    min-height: 50px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    padding: 10px 15px 10px 80px;
    text-decoration: none;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.10);
    transition: 0.3s ease;
}

.additional_service_box:hover{
    transform:translateY(-4px);
    text-decoration:none;
}

.additional_service_title{
    color:#fff;
    font-size:15px;
    font-weight:700;
    line-height:1.2;
    text-align:left;
    width:100%;
}

.additional_service_icon{
    position:absolute;
    left:-12px;
    width:70px;
    height:70px;
    background:#fff;
    border-radius:6px;
    display:flex;
    align-items:center;
    justify-content:center;
    border:1px solid #04d36f;

    box-shadow:
        -6px 0 12px rgba(0,0,0,0.08),
         0 6px 12px rgba(0,0,0,0.10),
         6px 0 12px rgba(0,0,0,0.05);

    overflow:hidden;
}

.additional_service_icon img{
    width:45px;
    height:45px;
    object-fit:contain;
}

.additional_services_custom_row{
    display:flex;
    justify-content:center;
    flex-wrap:wrap;
    gap:35px;
    margin-bottom:35px;
}

.additional_service_col{
    width:200px;
    flex:0 0 200px;
}

@media(max-width:767px){

    .additional_services_sec{
        padding:50px 0;
    }

    .additional_services_custom_row{
        gap:18px;
    }

    .additional_service_col{
        width:100%;
        flex:0 0 100%;
    }

}

</style>


<?php if (!empty($services)) : ?>

<section class="roofing_section_2 additional_services_sec">
    <div class="container">
        <div class="row justify-content-center text-center pb-5">
            <div class="col-lg-10">
                <h2 class="common_heading">Additional Relevant Services Available Through Easy Home Service</h2>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <?php foreach ($rows as $row): ?>
                <div class="additional_services_custom_row">
                <?php foreach ($row as $service): ?>
                <div class="additional_service_col">
                <a href="<?= $service['link']; ?>" class="additional_service_box">
                <div class="additional_service_icon">
                <img src="<?= $service['image']; ?>" alt="<?= $service['alt']; ?>" loading="lazy">
                </div>
                <div class="additional_service_title"><?= $service['title']; ?></div>
                </a>
                </div>
                <?php endforeach; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
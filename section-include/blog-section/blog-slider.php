<?php

/* ===========================
   GET CLEAN SLUG
=========================== */

$pageSlug = basename(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));


/* ===========================
   LOAD GENERIC SERVICE DATA
=========================== */

$serviceFile = __DIR__ . "/blog-slider-content-service.php";

$serviceData = [];

if (file_exists($serviceFile)) {
    $serviceData = include $serviceFile;
}


/* ===========================
   FIND EXACT PAGE CONTENT
=========================== */

$blogContent = [];

$blogContentFiles = glob(__DIR__ . "/blog-slider-content-*.php");

foreach ($blogContentFiles as $file) {

    /*
     * Skip generic service file because
     * it contains service names, not page slugs.
     */
    if (basename($file) === "blog-slider-content-service.php") {
        continue;
    }

    $data = include $file;

    if (isset($data[$pageSlug])) {

        $blogContent = $data[$pageSlug];

        break;
    }
}


/* ===========================
   DETECT SERVICE
=========================== */

$service = '';

if (isset($serviceData) && is_array($serviceData)) {

    foreach ($serviceData as $serviceName => $serviceContent) {

        /*
         * Example:
         *
         * hvac-services-in-bronx
         *        ↓
         * hvac
         *
         * plumbing-services-in-bronx
         *        ↓
         * plumbing
         */

        if (
            stripos($pageSlug, $serviceName . '-') === 0 ||
            strtolower($pageSlug) === strtolower($serviceName)
        ) {

            $service = $serviceName;

            break;
        }
    }
}


/* ===========================
   FALLBACK TO SERVICE CONTENT
=========================== */

if (empty($blogContent) && !empty($service)) {

    if (isset($serviceData[$service])) {

        $blogContent = $serviceData[$service];

    }
}


/* ===========================
   STOP IF NO CONTENT
=========================== */

if (empty($blogContent)) {
    return;
}


/* ===========================
   BLOG HEADING / DESCRIPTION
=========================== */

$blogHeading = $blogContent["heading"] ?? '';

$blogDescription = $blogContent["description"] ?? '';


/* ===========================
   DATABASE CONNECTION & BLOG FETCH
=========================== */

try {
    mysqli_report(MYSQLI_REPORT_OFF);
    $conn = @new mysqli(
        "localhost",
        "qqoophoh_easyhomeservice_blog",
        "qqoophoh_easyhomeservice_blog",
        "qqoophoh_easyhomeservice_blog"
    );

    if (!$conn || $conn->connect_error) {
        return;
    }


    /* ===========================
       FIND BLOG CATEGORY
    =========================== */

    $normalizedService = strtolower(
        str_replace([' ', '-', '_'], '', $service)
    );


    $categoryQuery = "
        SELECT id, CategorySlug
        FROM tblcategory
        WHERE LOWER(
            REPLACE(
                REPLACE(
                    REPLACE(CategorySlug, ' ', ''),
                    '-',
                    ''
                ),
                '_',
                ''
            )
        ) = ?
        LIMIT 1
    ";


    $stmt = $conn->prepare($categoryQuery);

    if (!$stmt) {
        return;
    }


    $stmt->bind_param("s", $normalizedService);

    $stmt->execute();

    $categoryResult = $stmt->get_result();


    /* ===========================
       CATEGORY NOT FOUND
    =========================== */

    if (!$categoryResult || $categoryResult->num_rows === 0) {
        return;
    }


    $categoryRow = $categoryResult->fetch_assoc();

    $categoryId = $categoryRow['id'];


    /* ===========================
       FETCH BLOGS
    =========================== */

    $query = "
        SELECT
            tblposts.*,
            tblcategory.CategorySlug
        FROM tblposts
        LEFT JOIN tblcategory
            ON tblposts.CategoryId = tblcategory.id
        WHERE tblposts.Is_Active = 1
        AND tblposts.CategoryId = ?
        ORDER BY tblposts.PostingDate DESC
    ";


    $stmt = $conn->prepare($query);

    if (!$stmt) {
        return;
    }


    $stmt->bind_param("i", $categoryId);

    $stmt->execute();

    $result = $stmt->get_result();


    /* ===========================
       IF NO BLOGS DON'T SHOW SECTION
    =========================== */

    if (!$result || $result->num_rows === 0) {
        return;
    }
} catch (Throwable $e) {
    return;
}
?>


<link rel="stylesheet" href="/css/swiper-bundle.min.css">


<div class="roofing_section_2 blog-section pb-5 bg-light pt-0">

    <div class="container">

        <!-- HEADING + DESCRIPTION -->

        <div class="text-center mb-5">

            <?php if (!empty($blogHeading)): ?>

                <h3 class="common_heading inner_common_head">
                    <?= $blogHeading ?>
                </h3>

            <?php endif; ?>


            <?php if (!empty($blogDescription)): ?>

                <p class="common_text">
                    <?= $blogDescription ?>
                </p>

            <?php endif; ?>

        </div>


        <!-- BLOG SLIDER -->

        <div class="row d-flex justify-content-center">

            <div class="col-lg-11 col-10 pt-5">

                <div class="swiper blogSwiper">

                    <div class="swiper-wrapper">

                        <?php while ($row = $result->fetch_assoc()): ?>

                            <?php

                            $title = $row['PostTitle'];

                            $slug = $row['slug'];

                            $image = !empty($row['PostImage'])
                                ? "/blog/admin/postimages/" . $row['PostImage']
                                : "/images/blog-img/default.webp";

                            $content = strip_tags(
                                htmlspecialchars_decode($row['PostDetails'])
                            );

                            $excerpt = substr($content, 0, 120) . "...";

                            ?>


                            <div class="swiper-slide">

                                <a
                                    href="/blog/<?= htmlspecialchars($slug) ?>"
                                    class="text-decoration-none text-dark ehs-hvac-internal-link"
                                >

                                    <div class="card blog-card h-100 shadow-sm border-0">

                                        <img
                                            src="<?= htmlspecialchars($image) ?>"
                                            loading="lazy"
                                            class="card-img-top mb-3"
                                            alt="<?= htmlspecialchars($title) ?>"
                                        >


                                        <div class="card-body blog-card-body">

                                            <h3 class="card-title fw-semibold mb-2">
                                                <?= htmlspecialchars($title) ?>
                                            </h3>


                                            <p class="card-text">
                                                <?= htmlspecialchars($excerpt) ?>
                                            </p>


                                            <span class="bx">
                                                Read More →
                                            </span>

                                        </div>

                                    </div>

                                </a>

                            </div>


                        <?php endwhile; ?>

                    </div>

                </div>


                <div class="swiper-button-next"></div>

                <div class="swiper-button-prev"></div>

            </div>

        </div>

    </div>

</div>


<script src="/js/swiper-bundle.min.js"></script>


<script>

document.addEventListener("DOMContentLoaded", function () {

    const blogSwiper = document.querySelector(".blogSwiper");

    if (!blogSwiper) {
        return;
    }

    new Swiper(".blogSwiper", {

        slidesPerView: 3,

        spaceBetween: 30,

        loop: true,

        speed: 800,

        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },

        breakpoints: {

            0: {
                slidesPerView: 1
            },

            768: {
                slidesPerView: 2
            },

            992: {
                slidesPerView: 3
            }

        }

    });

});

</script>
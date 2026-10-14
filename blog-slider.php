<script>
$(window).on('load', function () {

    if ($('.blog-section .blogSwiper').length === 0) {
        $('.blog-section').hide();
    }

});
</script>

<link rel="stylesheet" href="/css/swiper-bundle.min.css"/>
<script src="/js/swiper-bundle.min.js"></script>

<?php
// ✅ DATABASE CONNECTION
$conn = new mysqli("localhost", "easyhomeservice_mainblog", "easyhomeservice_mainblog", "easyhomeservice_mainblog");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ✅ GET CURRENT URL
$current_url = $_SERVER['REQUEST_URI'];
$current_url = strtok($current_url, '?');
$current_url = rtrim($current_url, '/');

$parts = explode('/', $current_url);
$last_part = end($parts);

if (empty($last_part) && count($parts) > 1) {
    $last_part = prev($parts);
}

// ✅ EXTRACT MAIN KEYWORD (KEEP YOUR ORIGINAL LOGIC)
$words = explode('-', strtolower($last_part));
$raw_keyword = trim($words[0]); // <-- IMPORTANT (plumbing from plumbing-experts...)

// ✅ NORMALIZE (for slug matching)
$normalized_keyword = str_replace([' ', '_'], '-', $raw_keyword);

// ✅ CHECK CATEGORY USING FLEXIBLE MATCH
$category_condition = "";

// Match cases:
// plumbing → plumbing
// walktub → walk-tub / walk tub / walk_tub
$cat_query = "
    SELECT CategorySlug 
    FROM tblcategory 
    WHERE 
        LOWER(REPLACE(REPLACE(CategorySlug, ' ', ''), '-', '')) = REPLACE('$normalized_keyword', '-', '')
    LIMIT 1
";

$cat_result = $conn->query($cat_query);

if ($cat_result && $cat_result->num_rows > 0) {
    $cat_row = $cat_result->fetch_assoc();
    $real_slug = $cat_row['CategorySlug'];

    $category_condition = "
        AND LOWER(REPLACE(REPLACE(tblcategory.CategorySlug, ' ', ''), '-', '')) 
        = REPLACE('$normalized_keyword', '-', '')
    ";
} else {
    return;
}

// ✅ FETCH BLOGS
$query = "SELECT tblposts.*, tblcategory.CategorySlug 
          FROM tblposts 
          LEFT JOIN tblcategory ON tblposts.CategoryId = tblcategory.id
          WHERE tblposts.Is_Active = 1
          $category_condition
          ORDER BY tblposts.PostingDate DESC";

$result = $conn->query($query);

if (!$result) {
    die("Query Error: " . $conn->error);
}

if ($result->num_rows == 0) {
    return;
}
?>

<div class="row d-flex justify-content-center">
    <div class="col-lg-11 col-10 pt-5">

        <div class="swiper blogSwiper">
            <div class="swiper-wrapper">

<?php while ($row = $result->fetch_assoc()) {

    $title = $row['PostTitle'];
    $slug = $row['slug'];

    $image = !empty($row['PostImage']) 
        ? "/blog/admin/postimages/" . $row['PostImage'] 
        : "/images/blog-img/default.webp";

    $content = strip_tags(htmlspecialchars_decode($row['PostDetails']));
    $excerpt = substr($content, 0, 120) . "...";
?>

<div class="swiper-slide">
  <a href="/blog/<?php echo $slug; ?>" class="text-decoration-none text-dark">
    <div class="card blog-card h-100 shadow-sm border-0">

      <img src="<?php echo $image; ?>" loading="lazy"
           class="card-img-top mb-3"
           alt="<?php echo htmlspecialchars($title); ?>">

      <div class="card-body blog-card-body">
        <h3 class="card-title fw-semibold mb-2">
          <?php echo $title; ?>
        </h3>

        <p class="card-text">
          <?php echo $excerpt; ?>
        </p>

        <span class="bx">Read More →</span>
      </div>

    </div>
  </a>
</div>

<?php } ?>

            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
</div>

<script>
var swiper = new Swiper(".blogSwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    speed: 800,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        992: { slidesPerView: 3 }
    }
});
</script>
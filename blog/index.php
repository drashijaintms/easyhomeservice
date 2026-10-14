<?php
// ——— Live search & category name/slug filter (server-side) ———
$search_term  = isset($_GET['q'])   ? trim($_GET['q'])          : '';
$filter_cat   = isset($_GET['cat']) ? trim($_GET['cat'])         : '';

// Helper to decode HTML entities cleanly and produce clean plain text excerpts
function ehs_get_excerpt($html, $length = 240) {
    if (empty($html)) return '';
    $decoded = html_entity_decode($html, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $decoded = html_entity_decode($decoded, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $plain   = trim(strip_tags($decoded));
    $plain   = preg_replace('/\s+/', ' ', $plain);
    if (mb_strlen($plain) > $length) {
        $truncated  = mb_substr($plain, 0, $length);
        $last_space = mb_strrpos($truncated, ' ');
        if ($last_space !== false) {
            $truncated = mb_substr($truncated, 0, $last_space);
        }
        return $truncated . '...';
    }
    return $plain;
}

include 'includes/header.php';
?>
<!-- NoIndex / NoFollow & Redesign CSS -->
<link rel="stylesheet" href="assets/css/redesign.css">

<?php include 'includes/navbar.php'; ?>

<?php
// ——— Fetch categories for dropdown ———
$cat_query  = "SELECT id, CategoryName FROM tblcategory WHERE Is_Active = 1 ORDER BY CategoryName ASC";
$cat_result = mysqli_query($conn, $cat_query);
$categories = [];
if ($cat_result) {
    while ($c = mysqli_fetch_assoc($cat_result)) {
        $categories[] = $c;
    }
}

// ——— Build WHERE clause for search + category slug/name filter ———
$where_parts = ["tblposts.Is_Active = 1"];

if ($filter_cat !== '' && $filter_cat !== '0') {
    $safe_cat = mysqli_real_escape_string($conn, $filter_cat);
    if (is_numeric($filter_cat)) {
        $where_parts[] = "tblposts.CategoryId = " . (int)$filter_cat;
    } else {
        $cat_spaced = str_replace('-', ' ', $safe_cat);
        $where_parts[] = "(
            LOWER(tblcategory.CategoryName) = LOWER('{$safe_cat}')
            OR LOWER(tblcategory.CategoryName) LIKE LOWER('%{$cat_spaced}%')
            OR LOWER(REPLACE(tblcategory.CategoryName, ' ', '-')) = LOWER('{$safe_cat}')
        )";
    }
}

if ($search_term !== '') {
    $safe_search = mysqli_real_escape_string($conn, $search_term);
    $where_parts[] = "tblposts.PostTitle LIKE '%{$safe_search}%'";
}

$where_sql = implode(' AND ', $where_parts);

// ——— Section 2: MOST RECENT post (for the hero image on the left) ———
$featured_query = "SELECT tblposts.id, tblposts.PostTitle, tblposts.PostImage, tblposts.featurealt,
                          tblposts.author, tblposts.PostingDate, tblposts.slug, tblposts.PostDetails,
                          tblposts.viewCount, tblcategory.CategoryName
                   FROM tblposts
                   LEFT JOIN tblcategory ON tblposts.CategoryId = tblcategory.id
                   WHERE {$where_sql}
                   ORDER BY tblposts.PostingDate DESC
                   LIMIT 1";

$featured_result = mysqli_query($conn, $featured_query);
$featured_post   = ($featured_result && mysqli_num_rows($featured_result) > 0)
                   ? mysqli_fetch_assoc($featured_result)
                   : null;

$featured_id    = $featured_post ? (int)$featured_post['id'] : 0;
$exclude_clause = ($featured_id > 0) ? " AND tblposts.id != {$featured_id}" : '';

// ——— Section 3 CAROUSEL: most RECENT posts (excl. hero) ———
$carousel_query = "SELECT tblposts.id, tblposts.PostTitle, tblposts.PostImage, tblposts.featurealt,
                          tblposts.author, tblposts.PostingDate, tblposts.slug, tblposts.PostDetails,
                          tblposts.viewCount, tblcategory.CategoryName
                   FROM tblposts
                   LEFT JOIN tblcategory ON tblposts.CategoryId = tblcategory.id
                   WHERE {$where_sql}{$exclude_clause}
                   ORDER BY tblposts.PostingDate DESC";

$carousel_result = mysqli_query($conn, $carousel_query);
$remaining_posts = [];
if ($carousel_result && mysqli_num_rows($carousel_result) > 0) {
    while ($r = mysqli_fetch_assoc($carousel_result)) {
        $remaining_posts[] = $r;
    }
}

// ——— Section 5: 4 Specific Other Featured Posts ———
$featured_slugs = [
    'sewer-camera-inspections',
    'gutter-cleaning-cost',
    'what-s-the-best-hvac-system-for-homes-in-usa',
    'night-vision-security-cameras-for-homes'
];

$slugs_escaped = array_map(function($s) use ($conn) {
    return "'" . mysqli_real_escape_string($conn, $s) . "'";
}, $featured_slugs);
$slugs_in = implode(',', $slugs_escaped);

$top5_query = "SELECT p.id, p.PostTitle, p.PostImage, p.featurealt,
                      p.author, p.PostingDate, p.slug, p.PostDetails,
                      p.viewCount, c.CategoryName
               FROM tblposts p
               LEFT JOIN tblcategory c ON p.CategoryId = c.id
               WHERE p.Is_Active = 1 AND p.slug IN ({$slugs_in})
               ORDER BY FIELD(p.slug, {$slugs_in})";

$top5_result = mysqli_query($conn, $top5_query);
$top5_posts  = [];
if ($top5_result && mysqli_num_rows($top5_result) > 0) {
    while ($r = mysqli_fetch_assoc($top5_result)) {
        $top5_posts[] = $r;
    }
}

?>

<div class="blog-index-wrap container px-md-5">

    <!-- ===== SECTION 1: HEADER (1 LINE: BLOG + SEARCH + CATEGORY SLUGS) ===== -->
    <div class="blog-page-header">
        <h1 class="blog-heading">Blog</h1>

        <div class="blog-search-group">
            <label for="blog-search-input">Search our latest home insights</label>
            <form method="GET" action="" class="blog-search-row">
                <input type="text" id="blog-search-input" name="q" value="<?php echo htmlspecialchars($search_term); ?>" placeholder="Looking For...">
                <?php if ($filter_cat !== '' && $filter_cat !== '0'): ?>
                    <input type="hidden" name="cat" value="<?php echo htmlspecialchars($filter_cat); ?>">
                <?php endif; ?>
                <button type="submit">Search</button>
            </form>
        </div>

        <div class="blog-cat-group">
            <label for="blog-cat-select">Categories</label>
            <div class="blog-cat-select-wrap">
                <select id="blog-cat-select" onchange="if(this.value && this.value !== '0'){ window.location.href = window.location.pathname + '?cat=' + encodeURIComponent(this.value) + '<?php echo $search_term ? '&q='.urlencode($search_term) : ''; ?>'; } else { window.location.href = window.location.pathname; }">
                    <option value="0">All Categories</option>
                    <?php foreach ($categories as $cat): 
                        $cat_slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $cat['CategoryName']), '-'));
                        $is_active = ($filter_cat === $cat_slug || strtolower($filter_cat) === strtolower($cat['CategoryName']) || $filter_cat == $cat['id']);
                    ?>
                        <option value="<?php echo htmlspecialchars($cat_slug); ?>" <?php echo $is_active ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($cat['CategoryName']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <i class="fas fa-chevron-down cat-arrow"></i>
            </div>
        </div>
    </div>

    <?php if (empty($featured_post) && empty($remaining_posts)): ?>
        <div class="no-results" style="text-align:center; padding:60px 20px; color:#888;">
            <i class="fas fa-search" style="font-size:2.5rem; color:#d0d5e0; display:block; margin-bottom:14px;"></i>
            No posts found<?php echo $search_term ? ' for "<strong>' . htmlspecialchars($search_term) . '</strong>"' : ''; ?>.
            <?php if ($search_term || ($filter_cat !== '' && $filter_cat !== '0')): ?>
                <br><a href="<?php echo htmlspecialchars(strtok($_SERVER['REQUEST_URI'], '?')); ?>" style="color:#45B96A; font-weight:600; text-decoration:none; margin-top:8px; display:inline-block;">Clear filters</a>
            <?php endif; ?>
        </div>
    <?php else: ?>

    <!-- ===== SECTION 2: FEATURED POST + AUTHOR SIDEBAR ===== -->
    <div class="blog-content-area">

        <!-- Featured Post Card (Image Banner + Excerpt & Inline Read More) -->
        <div>
            <?php if ($featured_post): ?>
            <div class="featured-post-card">
                <a href="/blog/<?php echo htmlspecialchars($featured_post['slug']); ?>">
                    <div class="featured-img-full-wrap">
                        <img
                            src="admin/postimages/<?php echo htmlspecialchars($featured_post['PostImage']); ?>"
                            alt="<?php echo htmlspecialchars($featured_post['featurealt']); ?>"
                            loading="lazy"
                        >
                    </div>
                    <div class="featured-post-body">
                        <p class="featured-post-excerpt">
                            <?php echo !empty($featured_post['PostDetails']) ? htmlspecialchars(ehs_get_excerpt($featured_post['PostDetails'], 180)) : ''; ?>
                            <span class="featured-read-more">Read More <i class="fas fa-arrow-right ms-1"></i></span>
                        </p>
                    </div>
                </a>
            </div>
            <?php endif; ?>
        </div>

        <!-- Vertical Divider Line -->
        <div class="section2-divider"></div>

        <!-- Author Sidebar Card -->
        <aside class="blog-new-sidebar">
            <?php
            $author_name  = !empty($featured_post['author']) ? $featured_post['author'] : 'Our Author';
            $author_count = 0;
            $safe_author  = mysqli_real_escape_string($conn, $author_name);
            $count_result = mysqli_query($conn, "SELECT COUNT(*) AS cnt FROM tblposts WHERE Is_Active = 1 AND author = '{$safe_author}'");
            if ($count_result) {
                $author_count = (int)mysqli_fetch_assoc($count_result)['cnt'];
            }
            ?>
            <div class="author-card">
                <div class="author-avatar-wrap">
                    <img src="assets/img/user.png" alt="Meet <?php echo htmlspecialchars($author_name); ?>">
                </div>
                <h3>Meet <?php echo htmlspecialchars($author_name); ?></h3>
                <p><?php echo $author_count > 0
                    ? 'A dedicated home improvement author helping homeowners with practical tips, expert insights, and easy-to-follow guidance on home repair, maintenance, and upgrades. With <strong>' . $author_count . '+</strong> articles published.'
                    : 'A dedicated home improvement author helping homeowners with practical tips, expert insights, and easy-to-follow guidance on home repair, maintenance, and upgrades.'; ?></p>
                
                <!-- Action buttons: Know More + Facebook + Instagram -->
                <div class="author-card-actions">
                    <div>
                    <a href="https://easyhomeservice.com/about" class="author-btn">Know More</a></div>
                    <div>
                    <a href="https://www.facebook.com/profile.php?id=61587439233617&sk=about" target="_blank" rel="noopener noreferrer" class="author-social-btn fb-btn" title="Follow <?php echo htmlspecialchars($author_name); ?> on Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/easy_home__service/" target="_blank" rel="noopener noreferrer" class="author-social-btn insta-btn" title="Follow <?php echo htmlspecialchars($author_name); ?> on Instagram">
                        <i class="fab fa-instagram"></i>
                    </a></div>
                </div>
            </div>
        </aside>

    </div><!-- /.blog-content-area (SECTION 2) -->

    <!-- ===== SECTION 3: CAROUSEL ===== -->
    <?php if (!empty($remaining_posts)): ?>
    <div class="section3-container">
        <div class="section3-top-bar">
            <a href="all-blogs.php" class="section3-view-all">View All Blogs</a>
        </div>

        <div class="section3-carousel-wrapper">
            <button type="button" class="carousel-nav-btn prev-btn" id="sec3-prev">&#10094;</button>

            <div class="section3-track-container">
                <div class="section3-track" id="sec3-track">

                    <?php foreach ($remaining_posts as $card_post):
                        include 'includes/blog-card.php';
                    endforeach; ?>

                </div><!-- /.section3-track -->
            </div><!-- /.section3-track-container -->

            <button type="button" class="carousel-nav-btn next-btn" id="sec3-next">&#10095;</button>
        </div><!-- /.section3-carousel-wrapper -->
    </div><!-- /.section3-container -->
    <?php endif; ?>

    <!-- ===== SECTION 4: LEAD FORM CARD (Reusable Component) ===== -->
    <?php include 'includes/lead-form-section.php'; ?>

    <!-- ===== SECTION 5: OTHER FEATURED POSTS (4 specific posts) ===== -->
    <?php if (!empty($top5_posts)): ?>
    <div class="section5-container">
        <h2 class="section5-title">Other Featured Posts</h2>

        <div class="section5-grid">
            <?php foreach ($top5_posts as $s5_post):
                $s5_slug   = htmlspecialchars($s5_post['slug']);
                $s5_title  = htmlspecialchars($s5_post['PostTitle']);
                $s5_img    = htmlspecialchars($s5_post['PostImage']);
                $s5_alt    = htmlspecialchars($s5_post['featurealt']);
                $s5_cat    = htmlspecialchars($s5_post['CategoryName'] ?? 'Blog');
                
                $s5_raw     = isset($s5_post['PostDetails']) ? $s5_post['PostDetails'] : '';
                $s5_excerpt = ehs_get_excerpt($s5_raw, 90);
            ?>
            <a href="/blog/<?php echo $s5_slug; ?>" class="section5-card">
                <div class="section5-thumb-box">
                    <img src="admin/postimages/<?php echo $s5_img; ?>" alt="<?php echo $s5_alt; ?>" loading="lazy">
                </div>
                <div class="section5-card-body">
                    <h3 class="section5-card-title"><?php echo $s5_title; ?></h3>
                    <p class="section5-card-excerpt"><?php echo htmlspecialchars($s5_excerpt); ?></p>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>

    <?php endif; // end no-results check ?>

</div><!-- /.blog-index-wrap -->

<!-- Carousel Navigation Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const track = document.getElementById('sec3-track');
    const prevBtn = document.getElementById('sec3-prev');
    const nextBtn = document.getElementById('sec3-next');
    if (!track || !prevBtn || !nextBtn) return;

    let currentIndex = 0;

    function getVisibleCards() {
        const width = window.innerWidth;
        if (width <= 600) return 1;
        if (width <= 900) return 2;
        return 3;
    }

    function updateCarousel() {
        const cards = track.querySelectorAll('.carousel-card');
        if (cards.length === 0) return;
        const cardWidth = cards[0].getBoundingClientRect().width + 24;
        const visibleCards = getVisibleCards();
        const maxIndex = Math.max(0, cards.length - visibleCards);

        if (currentIndex < 0) currentIndex = 0;
        if (currentIndex > maxIndex) currentIndex = maxIndex;

        track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;

        prevBtn.classList.toggle('disabled', currentIndex === 0);
        nextBtn.classList.toggle('disabled', currentIndex >= maxIndex);
    }

    prevBtn.addEventListener('click', function () {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        }
    });

    nextBtn.addEventListener('click', function () {
        const cards = track.querySelectorAll('.carousel-card');
        const visibleCards = getVisibleCards();
        const maxIndex = Math.max(0, cards.length - visibleCards);
        if (currentIndex < maxIndex) {
            currentIndex++;
            updateCarousel();
        }
    });

    window.addEventListener('resize', updateCarousel);
    updateCarousel();
});
</script>

<?php include '../footer.php'; ?>

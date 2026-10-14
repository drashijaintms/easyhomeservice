<?php
// ——— Live search & category filter ———
$search_term = isset($_GET['q'])   ? trim($_GET['q'])  : '';
$filter_cat  = isset($_GET['cat']) ? (int)$_GET['cat'] : 0;
$form_action = 'all-blogs.php';

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
<meta name="robots" content="noindex, nofollow">
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

// ——— Build WHERE clause for search + category filter ———
$where_parts = ["tblposts.Is_Active = 1"];

if ($filter_cat > 0) {
    $where_parts[] = "tblposts.CategoryId = " . $filter_cat;
}

if ($search_term !== '') {
    $safe_search = mysqli_real_escape_string($conn, $search_term);
    $where_parts[] = "tblposts.PostTitle LIKE '%{$safe_search}%'";
}

$where_sql = implode(' AND ', $where_parts);

// ——— Fetch all posts matching filter ———
$posts_query = "SELECT tblposts.id, tblposts.PostTitle, tblposts.PostImage, tblposts.featurealt,
                       tblposts.author, tblposts.PostingDate, tblposts.slug, tblposts.PostDetails,
                       tblcategory.CategoryName
                FROM tblposts
                LEFT JOIN tblcategory ON tblposts.CategoryId = tblcategory.id
                WHERE {$where_sql}
                ORDER BY tblposts.PostingDate DESC";

$posts_result = mysqli_query($conn, $posts_query);
$all_posts = [];
if ($posts_result && mysqli_num_rows($posts_result) > 0) {
    while ($r = mysqli_fetch_assoc($posts_result)) {
        $all_posts[] = $r;
    }
}
?>

<div class="blog-index-wrap container px-md-5">

    <!-- ===== SECTION 1: HEADER (Reusable Component) ===== -->
    <?php include 'includes/blog-header-section.php'; ?>

    <?php if (empty($all_posts)): ?>
        <div class="no-results" style="text-align:center; padding:60px 20px; color:#888;">
            <i class="fas fa-search" style="font-size:2.5rem; color:#d0d5e0; display:block; margin-bottom:14px;"></i>
            No posts found<?php echo $search_term ? ' for "<strong>' . htmlspecialchars($search_term) . '</strong>"' : ''; ?>.
            <?php if ($search_term || $filter_cat): ?>
                <br><a href="all-blogs.php" style="color:#45B96A; font-weight:600; text-decoration:none; margin-top:8px; display:inline-block;">Clear filters</a>
            <?php endif; ?>
        </div>
    <?php else: ?>

    <!-- ===== ALL BLOGS GRID (3 columns, 6 posts initially) ===== -->
    <div class="all-blogs-grid" id="all-blogs-grid">
        <?php foreach ($all_posts as $index => $card_post):
            $card_extra_class = ($index >= 6) ? 'all-blogs-card-hidden' : '';
            include 'includes/blog-card.php';
        endforeach; ?>
    </div><!-- /.all-blogs-grid -->

    <!-- ===== LOAD MORE / VIEW MORE BUTTON ===== -->
    <?php if (count($all_posts) > 6): ?>
    <div class="all-blogs-btn-wrap">
        <button type="button" id="load-more-btn" class="all-blogs-load-more-btn">View More</button>
    </div>
    <?php endif; ?>

    <?php endif; // end empty posts check ?>

    <!-- ===== SECTION 4: LEAD FORM CARD (Reusable Component) ===== -->
    <?php include 'includes/lead-form-section.php'; ?>

</div><!-- /.blog-index-wrap -->

<!-- Load More Script (shows next 6 posts on each click) -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const loadMoreBtn = document.getElementById('load-more-btn');
    if (!loadMoreBtn) return;

    loadMoreBtn.addEventListener('click', function () {
        const hiddenCards = document.querySelectorAll('.all-blogs-card-hidden');
        const batchSize = 6;
        let count = 0;

        hiddenCards.forEach(function (card) {
            if (count < batchSize) {
                card.classList.remove('all-blogs-card-hidden');
                count++;
            }
        });

        const remainingHidden = document.querySelectorAll('.all-blogs-card-hidden');
        if (remainingHidden.length === 0) {
            loadMoreBtn.style.display = 'none';
        }
    });
});
</script>

<?php include '../footer.php'; ?>

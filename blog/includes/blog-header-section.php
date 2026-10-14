<?php
// ——— Reusable Section 1: Header (Blog Title + Search + Category Filter) ———
$current_page_action = isset($form_action) ? $form_action : htmlspecialchars(basename($_SERVER['PHP_SELF']));
?>
<form method="GET" action="<?php echo $current_page_action; ?>" id="blog-filter-form">
    <div class="blog-page-header">

        <h1 class="blog-heading">Blog</h1>

        <!-- Search Bar -->
        <div class="blog-search-group">
            <label for="blog-search-input">Search our latest home insights</label>
            <div class="blog-search-row">
                <input
                    type="text"
                    id="blog-search-input"
                    name="q"
                    placeholder="Looking For..."
                    value="<?php echo htmlspecialchars($search_term); ?>"
                    autocomplete="off"
                >
                <button type="submit">Search</button>
            </div>
        </div>

        <!-- Category Filter Dropdown -->
        <div class="blog-cat-group">
            <label for="blog-cat-select">Categories</label>
            <div class="blog-cat-select-wrap">
                <select id="blog-cat-select" name="cat" onchange="document.getElementById('blog-filter-form').submit()">
                    <option value="0">All Categories</option>
                    <?php foreach ($categories as $cat): ?>
                        <option value="<?php echo $cat['id']; ?>"
                            <?php echo ($filter_cat === (int)$cat['id']) ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($cat['CategoryName']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <span class="cat-arrow"><i class="fas fa-chevron-down"></i></span>
            </div>
        </div>

    </div><!-- /.blog-page-header -->
</form>

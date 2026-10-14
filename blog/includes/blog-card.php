<?php
// ——— Reusable Blog Card Component ———
// Expects: $card_post (array), optional $card_extra_class (string)
if (isset($card_post) && is_array($card_post)):
    $c_slug    = htmlspecialchars($card_post['slug']);
    $c_title   = htmlspecialchars($card_post['PostTitle']);
    $c_img     = htmlspecialchars($card_post['PostImage']);
    $c_alt     = htmlspecialchars($card_post['featurealt']);
    $c_cat     = htmlspecialchars($card_post['CategoryName'] ?? 'Blog');
    $c_raw     = isset($card_post['PostDetails']) ? $card_post['PostDetails'] : '';
    $c_excerpt = ehs_get_excerpt($c_raw, 240);
    $c_class   = isset($card_extra_class) ? ' ' . trim($card_extra_class) : '';
?>
<a href="/blog/<?php echo $c_slug; ?>" class="carousel-card<?php echo $c_class; ?>">
    <div class="carousel-card-thumb-box">
        <img src="admin/postimages/<?php echo $c_img; ?>" alt="<?php echo $c_alt; ?>" loading="lazy">
    </div>
    <div class="carousel-card-body">
        <span class="carousel-card-cat"><?php echo $c_cat; ?></span>
        <h3 class="carousel-card-title"><?php echo $c_title; ?></h3>
        <p class="carousel-card-excerpt">
            <?php echo htmlspecialchars($c_excerpt); ?> <span class="carousel-read-more">Read More</span>
        </p>
    </div>
</a>
<?php endif; ?>

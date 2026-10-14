<?php
// Get page slug (hvac, plumbing, etc.)
$pageSlug = basename($_SERVER['REQUEST_URI'], '.php');

// Load all FAQ content files
$faqFiles = glob(__DIR__ . '/faq-content-*.php');

$faqs = [];

foreach ($faqFiles as $file) {
    $data = include $file;

    if (isset($data[$pageSlug])) {
        $faqs = $data[$pageSlug];
        break;
    }
}
?>

<?php if (!empty($faqs)): ?>
<div class="section_6">
  <div class="container">
    <h2 class="common_heading inner_common_head pb-3">
      Frequently <br class="showMob">Asked Questions
    </h2>

    <div class="row">
      <div class="col-lg-6">
        <?php foreach (array_slice($faqs, 0, ceil(count($faqs)/2)) as $item): ?>
          <div class="up-slide-dwn">
            <div class="accordion acdn-heading accordion-close">
              <h3><?= $item['q']; ?></h3>
            </div>
            <div class="acdn-content" style="display:none;">
              <div class="acdn-para"><?= $item['a']; ?></div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="col-lg-6">
        <?php foreach (array_slice($faqs, ceil(count($faqs)/2)) as $item): ?>
          <div class="up-slide-dwn">
            <div class="accordion acdn-heading accordion-close">
              <h3><?= $item['q']; ?></h3>
            </div>
            <div class="acdn-content" style="display:none;">
              <div class="acdn-para"><?= $item['a']; ?></div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</div>
<?php endif; ?>

<?php
/* ================================
   AUTO GENERATED FAQ SCHEMA
   ================================ */

if (!empty($faqs) && empty($_GET)) {

    // Dynamic current page URL
    $currentUrl = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    $schemaData = [
        "@context" => "https://schema.org",
        "@type" => "FAQPage",
        "@id" => $currentUrl . "#faq",
        "mainEntity" => []
    ];

    foreach ($faqs as $item) {

        // Clean Question
        $question = trim(strip_tags($item['q']));

        // Start cleaning Answer
        $answer = $item['a'];

        // Convert list items to comma
        $answer = str_replace('</li>', ', ', $answer);

        // Convert line breaks & paragraphs to space
        $answer = str_replace(['<br>', '<br/>', '<br />', '</p>'], ' ', $answer);

        // Remove all remaining HTML
        $answer = strip_tags($answer);

        // Normalize spacing
        $answer = trim(preg_replace('/\s+/', ' ', $answer));

        // Fix punctuation issues like ".,"
        $answer = preg_replace('/\.\s*,/', ',', $answer);

        // Remove double commas
        $answer = preg_replace('/,+/', ',', $answer);

        // Remove trailing commas
        $answer = rtrim($answer, ', ');

        $schemaData["mainEntity"][] = [
            "@type" => "Question",
            "name" => $question,
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => $answer
            ]
        ];
    }

    echo '<script type="application/ld+json">';
    echo json_encode($schemaData, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    echo '</script>';
}
?>
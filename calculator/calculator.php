<?php
/**
 * Easy Home Service - Home Project Cost Calculator
 * Single-line PHP include file
 * 
 * Usage in any PHP page:
 *   <?php include $_SERVER['DOCUMENT_ROOT'] . '/calculator/calculator.php'; ?>
 *   or:
 *   <?php include 'calculator/calculator.php'; ?>
 */

// Dynamically determine the URL path to this calculator directory
$calc_dir = str_replace('\\', '/', __DIR__);
$doc_root = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT'] ?? '');
$calc_base_url = '';

if (!empty($doc_root) && strpos($calc_dir, $doc_root) === 0) {
    $calc_base_url = rtrim(substr($calc_dir, strlen($doc_root)), '/') . '/';
} else {
    // Fallback default folder name if included relatively
    $calc_base_url = '/calculator/';
}
?>
<!-- Easy Home Service Calculator Styles -->
<link rel="stylesheet" href="<?php echo htmlspecialchars($calc_base_url, ENT_QUOTES, 'UTF-8'); ?>styles.css">

<!-- Easy Home Service Calculator Markup -->
<main class="ehs-cost-calculator" id="ehsCostCalculator">
  <div class="ehs-shell">
    <header class="ehs-intro">
      <h1>Calculate Home Project Costs</h1>
      <p>Calculate your project with confidence. Free to use, always transparent.</p>
    </header>

    <section class="project-picker" id="projectPicker" aria-labelledby="projectPickerTitle">
      <h2 class="sr-only" id="projectPickerTitle">Choose a home project</h2>
      <div class="project-grid" id="projectGrid"></div>
    </section>

    <section class="calculator-stage" id="calculatorStage" hidden aria-live="polite">
      <div class="calculator-card">
        <div class="calculator-visual" id="calculatorVisual">
          <button class="close-calculator" id="closeCalculator" type="button" aria-label="Choose a different project">×</button>
          <div class="visual-copy">
            <h2 id="visualTitle"></h2>
            <p>Answer a few quick questions for your personalized planning range.</p>
          </div>
        </div>

        <div class="calculator-content">
          <div class="progress-head">
            <button class="back-button" id="backButton" type="button">← Back</button>
            <span id="progressText">Step 1 of 5</span>
          </div>
          <div class="progress-track" aria-hidden="true"><span id="progressBar"></span></div>

          <div id="questionView">
            <span class="question-eyebrow" id="questionEyebrow">YOUR PROJECT</span>
            <h3 id="questionTitle"></h3>
            <p class="question-help" id="questionHelp"></p>
            <div class="answer-area" id="answerArea"></div>
            <p class="field-error" id="fieldError" role="alert"></p>
            <div class="step-actions">
              <button class="next-button" id="nextButton" type="button">Continue <span>→</span></button>
            </div>
          </div>

          <div class="results-view" id="resultsView" hidden>
            <span class="result-check">✓</span>
            <span class="question-eyebrow">YOUR PLANNING ESTIMATE</span>
            <h3 id="resultHeading">Your estimated project cost</h3>
            <div class="result-range" id="resultRange"></div>
            <p class="result-location" id="resultLocation"></p>
            <div class="range-meter"><i></i><span></span><b></b></div>
            <div class="range-labels"><span>Budget</span><span>Typical</span><span>Premium</span></div>
            <div class="estimate-breakdown" id="estimateBreakdown"></div>
            <p class="estimate-disclaimer">This is a planning estimate based on typical materials and professional installation. Site conditions, permits and contractor pricing can affect your final quote.</p>
            <a class="quote-button" href="https://easyhomeservice.com/get-quote" target="_top">Get A Quote Now <span>→</span></a>
            <button class="restart-button" id="restartButton" type="button">Recalculate this project</button>
          </div>
        </div>
      </div>
    </section>

    <div class="trust-points" aria-label="Calculator benefits">
      <span>✓ No signup required</span><span>✓ Instant estimate</span><span>✓ Free for homeowners</span>
    </div>
  </div>
</main>

<!-- Set Base URL and Load Calculator Logic -->
<script>
  window.EHS_CALC_BASE_URL = <?php echo json_encode($calc_base_url); ?>;
</script>
<script src="<?php echo htmlspecialchars($calc_base_url, ENT_QUOTES, 'UTF-8'); ?>script.js"></script>

EASY HOME SERVICE — HOME PROJECT COST CALCULATOR

CONTENTS
- calculator.php: Single-line PHP include file for easy website embedding
- index.html: Standalone calculator preview page
- styles.css: Responsive Easy Home Service theme and layout
- script.js: Ten multi-step calculators, dynamic formulas, and project data
- assets/: Category background artwork and SVG icons

PHP INSTALLATION (1 LINE)
1. Upload this entire folder to your website (e.g. public_html/calculator/).
2. In any PHP page, include the calculator with:
   <?php include $_SERVER['DOCUMENT_ROOT'] . '/calculator/calculator.php'; ?>

STANDALONE / HTML INSTALLATION
1. Open index.html directly in a browser to test.
2. For HTML pages, load styles.css in <head>, paste the <main> block, and load script.js before </body>.

CALCULATORS
- Windows
- HVAC
- Roofing
- Siding
- Showers
- Gutters
- Bathtubs
- Bathrooms
- Solar
- Home Warranty

CUSTOMIZATION
- Edit question choices and cost ranges in the `projects` array in script.js.
- Change brand colors in the `:root` block in styles.css.
- Change the Get A Quote Now destination in index.html and calculator.php.

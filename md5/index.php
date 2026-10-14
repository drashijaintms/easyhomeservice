<?php
// Input and output file names
$inputFile = "y.txt";
$outputFile = "y_md5.txt";

// Check if the input file exists
if (!file_exists($inputFile)) {
    die("Input file not found: $inputFile");
}

// Open files
$input = fopen($inputFile, "r");
$output = fopen($outputFile, "w");

if (!$input || !$output) {
    die("Error opening files.");
}

// Process each line (email address)
while (($line = fgets($input)) !== false) {
    $email = trim($line);
    if (!empty($email)) {
        $hash = md5(strtolower($email)); // lowercase for consistency
        fwrite($output, $hash . PHP_EOL);
    }
}

// Close files
fclose($input);
fclose($output);

echo "Conversion complete! Saved to $outputFile\n";
?>

<?php
/**
 * Static HTML Exporter for Netlify Deployment
 * Converts all PHP pages and partials into pure static .html files
 */

$rootDir = __DIR__;
$files = glob($rootDir . '/*.php');

$excludeFiles = [
    'export-html.php',
    'header.php'
];

echo "Starting Static HTML Export...\n";
$count = 0;

foreach ($files as $file) {
    $basename = basename($file);
    if (in_array($basename, $excludeFiles)) {
        continue;
    }

    $htmlFileName = preg_replace('/\.php$/i', '.html', $basename);
    $targetPath = $rootDir . '/' . $htmlFileName;

    // Capture executed PHP output
    ob_start();
    try {
        chdir($rootDir);
        include $file;
        $content = ob_get_clean();
    } catch (Throwable $e) {
        ob_end_clean();
        echo "Error processing $basename: " . $e->getMessage() . "\n";
        continue;
    }

    if (empty($content)) {
        echo "Skipping empty output for $basename\n";
        continue;
    }

    // Convert internal .php links to .html
    // Replace href="foo.php" with href="foo.html"
    $convertedContent = preg_replace_callback('/href=([\'"])([^"\']+\.php)(#[^"\']*)?([\'"])/i', function($matches) {
        $quote = $matches[1];
        $phpFile = $matches[2];
        $hash = isset($matches[3]) ? $matches[3] : '';
        $htmlTarget = preg_replace('/\.php$/i', '.html', $phpFile);
        return 'href=' . $quote . $htmlTarget . $hash . $quote;
    }, $content);

    // Also replace action="something.php" if any
    $convertedContent = preg_replace_callback('/action=([\'"])([^"\']+\.php)([\'"])/i', function($matches) {
        $quote = $matches[1];
        $phpFile = $matches[2];
        $htmlTarget = preg_replace('/\.php$/i', '.html', $phpFile);
        return 'action=' . $quote . $htmlTarget . $quote;
    }, $convertedContent);

    file_put_contents($targetPath, $convertedContent);
    echo "✓ Generated: $htmlFileName\n";
    $count++;
}

echo "\nSuccessfully generated $count static HTML files! Ready for Netlify deployment.\n";

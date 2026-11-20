<?php
/**
 * Static HTML Generator for Kush Industries Ltd.
 * Generates portable, folder-based clean URL static HTML pages for GitHub Pages / Static Hosting.
 */

ini_set('default_charset', 'UTF-8');
if (function_exists('mb_internal_encoding')) {
    mb_internal_encoding('UTF-8');
}

$sourceDir = __DIR__;
$outputDir = dirname(__DIR__);

$pages = [
    [
        'source' => $sourceDir . '/index.php',
        'target' => $outputDir . '/index.html',
    ],
    [
        'source' => $sourceDir . '/about/index.php',
        'target' => $outputDir . '/about/index.html',
    ],
    [
        'source' => $sourceDir . '/contact/index.php',
        'target' => $outputDir . '/contact/index.html',
    ],
    [
        'source' => $sourceDir . '/disclosure-under-regulation-46-sebi/index.php',
        'target' => $outputDir . '/disclosure-under-regulation-46-sebi/index.html',
    ],
    [
        'source' => $sourceDir . '/news/index.php',
        'target' => $outputDir . '/news/index.html',
    ],
    [
        'source' => $sourceDir . '/annual-reports/index.php',
        'target' => $outputDir . '/annual-reports/index.html',
    ],
    [
        'source' => $sourceDir . '/board-meeting/index.php',
        'target' => $outputDir . '/board-meeting/index.html',
    ],
    [
        'source' => $sourceDir . '/financial-results/index.php',
        'target' => $outputDir . '/financial-results/index.html',
    ],
    [
        'source' => $sourceDir . '/share-holding-pattern/index.php',
        'target' => $outputDir . '/share-holding-pattern/index.html',
    ],
    [
        'source' => $sourceDir . '/corporate-announcements/index.php',
        'target' => $outputDir . '/corporate-announcements/index.html',
    ],
    [
        'source' => $sourceDir . '/corporate-governance/index.php',
        'target' => $outputDir . '/corporate-governance/index.html',
    ],
    [
        'source' => $sourceDir . '/csr-policy/index.php',
        'target' => $outputDir . '/csr-policy/index.html',
    ],
    [
        'source' => $sourceDir . '/financial-information/index.php',
        'target' => $outputDir . '/financial-information/index.html',
    ],
    [
        'source' => $sourceDir . '/quarterly-results/index.php',
        'target' => $outputDir . '/quarterly-results/index.html',
    ],
    [
        'source' => $sourceDir . '/registrar-transfer-agent/index.php',
        'target' => $outputDir . '/registrar-transfer-agent/index.html',
    ],
    [
        'source' => $sourceDir . '/related-party-transactions/index.php',
        'target' => $outputDir . '/related-party-transactions/index.html',
    ],
    [
        'source' => $sourceDir . '/stock-exchanges/index.php',
        'target' => $outputDir . '/stock-exchanges/index.html',
    ],
];

$phpBinary = 'C:\\xampp\\php\\php.exe';
if (!file_exists($phpBinary)) {
    $phpBinary = 'php';
}

echo "Starting Kush Industries Static HTML Generation...\n";

$generatedCount = 0;

foreach ($pages as $p) {
    $srcPath = $p['source'];
    $dstPath = $p['target'];

    if (!file_exists($srcPath)) {
        echo "Error: Source file not found: $srcPath\n";
        continue;
    }

    $targetDir = dirname($dstPath);
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    // Execute PHP to capture clean rendered output
    $cmd = escapeshellarg($phpBinary) . ' ' . escapeshellarg($srcPath);
    $html = shell_exec($cmd);

    if (empty($html)) {
        echo "Failed to render: $srcPath\n";
        continue;
    }

    file_put_contents($dstPath, $html);
    $relTarget = str_replace($outputDir . DIRECTORY_SEPARATOR, '', $dstPath);
    $relTarget = str_replace($outputDir . '/', '', $relTarget);
    echo "Generated: $relTarget (" . strlen($html) . " bytes)\n";
    $generatedCount++;
}

echo "Successfully generated $generatedCount static HTML pages!\n";

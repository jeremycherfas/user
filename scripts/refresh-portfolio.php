<?php
/**
 * DEVELOPMENT-ONLY SCRIPT
 * --------------------------------------------------
 * This script is intended to be run ONLY on a local
 * development instance of a Grav site.
 *
 * Purpose:
 * - Fetch external portfolio RSS feed
 * - Extract most recent item
 * - Compute freshness ("new work")
 * - Persist normalized snapshot to YAML
 * - Output stored data for inspection/editing
 *
 * IMPORTANT:
 * - Do NOT deploy this file to production
 * - Do NOT leave it web-accessible publicly
 * - This file is a temporary harness and should be
 *   deleted once logic is moved into a Grav plugin
 * --------------------------------------------------
 */


/**
 * SAFETY GUARD — environment check
 *
 * Adjust this to match how you identify your local setup.
 * Examples:
 * - localhost
 * - *.test
 * - *.local
 */

$allowedHosts = ['localhost', '127.0.0.1'];

/* 
if (!isset($_SERVER['HTTP_HOST']) || !in_array($_SERVER['HTTP_HOST'], $allowedHosts, true)) {
    http_response_code(403);
    echo 'Forbidden: development-only script';
    exit;
}
 */


// ---- configuration ----------------------------------------------------------

$rssUrl = 'https://photos.jeremycherfas.net/index.xml';

// Where the persisted snapshot will live
$dataFile = __DIR__ . '/../data/portfolio-latest.yaml';

// "New work" threshold
$newThresholdDays = 28;


// ---- fetch RSS --------------------------------------------------------------

$raw = @file_get_contents($rssUrl);

if ($raw === false) {
    http_response_code(500);
    echo 'Failed to fetch RSS feed';
    exit;
}


// ---- parse RSS --------------------------------------------------------------

$xml = @simplexml_load_string($raw);

if ($xml === false || empty($xml->channel->item)) {
    http_response_code(500);
    echo 'Invalid or empty RSS feed';
    exit;
}


// ---- extract most recent item ----------------------------------------------

$latest = null;
$latestTimestamp = 0;

foreach ($xml->channel->item as $item) {
    if (empty($item->pubDate)) {
        continue;
    }

    $timestamp = strtotime((string) $item->pubDate);

    if ($timestamp && $timestamp > $latestTimestamp) {
        $latestTimestamp = $timestamp;
        $latest = $item;
    }
}

if (!$latest) {
    echo 'No valid RSS items found';
    exit;
}


// ---- normalize data ---------------------------------------------------------

$now = time();
$ageInDays = (int) floor(($now - $latestTimestamp) / 86400);

$data = [
    'title'        => trim((string) $latest->title),
    'url'          => trim((string) $latest->link),
    'summary'      => trim((string) $latest->description),
    'published_at' => date('c', $latestTimestamp),
    'timestamp'    => $latestTimestamp,
    'age_days'     => $ageInDays,
    'is_new'       => $ageInDays <= $newThresholdDays,
    'checked_at'   => date('c', $now),
];


// ---- persist snapshot (YAML) ------------------------------------------------

// Grav ships with Symfony YAML
if (!class_exists('\Symfony\Component\Yaml\Yaml')) {
    http_response_code(500);
    echo 'Symfony YAML component not available';
    exit;
}

$yaml = \Symfony\Component\Yaml\Yaml::dump($data, 4, 2);

// Ensure data directory exists
$dir = dirname($dataFile);
if (!is_dir($dir)) {
    mkdir($dir, 0755, true);
}

file_put_contents($dataFile, $yaml);


// ---- output for inspection --------------------------------------------------

header('Content-Type: text/plain');

echo "Portfolio snapshot updated successfully\n";
echo "---------------------------------------\n\n";
echo $yaml;

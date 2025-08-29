<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/debug.php';

echoMemory('Start');

$json = file_get_contents(__DIR__ . '/test.json');

echoMemory('After file_get_contents()');

$items = json_decode($json, true);

echoMemory('After json_decode()');

$echoInterval = 50_000;

$itemMap = [];

foreach ($items['items'] as $i => $item) {
    $itemMap[$item['itemId']] = new \DateTime($item['modificationDate']);

    if ($i % $echoInterval === 0) {
        echoMemory('Iteration ' . $i);
    }
}

echoMemory('End');

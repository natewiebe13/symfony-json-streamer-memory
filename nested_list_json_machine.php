<?php

use JsonMachine\Items;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/debug.php';

echoMemory('Start');

$items = Items::fromFile(__DIR__ . '/nested_list.json', ['pointer' => '/items']);

echoMemory('After Items::fromFile()');

$echoInterval = 50_000;

$itemMap = [];

$i = 0;

foreach ($items as $item) {
    $itemMap[$item->itemId] = $item->modificationDate;

    if ($i++ % $echoInterval === 0) {
        echoMemory('Iteration ' . $i);
    }
}

echoMemory('End');

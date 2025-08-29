<?php

use App\Dto\ItemDto;
use App\Dto\ListDto;
use Symfony\Component\JsonStreamer\JsonStreamReader;
use Symfony\Component\TypeInfo\Type;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/debug.php';

echoMemory('Start');

$json = fopen(__DIR__ . '/test.json', 'r');

echoMemory('After fopen()');

$echoInterval = 50_000;

$jsonStreamer = JsonStreamReader::create();

$type = Type::generic(Type::object(ListDto::class), Type::object(ItemDto::class));

$items = $jsonStreamer->read($json, $type);
assert($items instanceof ListDto);

$itemMap = [];

$i = 0;

foreach ($items->items as $item) {
    $itemMap[$item->itemId] = $item->modificationDate;

    if ($i++ % $echoInterval === 0) {
        echoMemory('Iteration ' . $i);
    }
}

echoMemory('End');

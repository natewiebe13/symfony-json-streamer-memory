<?php

namespace App\Dto;

use Symfony\Component\JsonStreamer\Attribute\JsonStreamable;

#[JsonStreamable]
class ListDto {
    /**
     * @var iterable<int, ItemDto>
     */
    public iterable $items;
}

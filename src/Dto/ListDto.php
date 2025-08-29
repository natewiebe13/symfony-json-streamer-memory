<?php

namespace App\Dto;

use Symfony\Component\JsonStreamer\Attribute\JsonStreamable;

/**
 * @template TItem of ItemDto
 */
#[JsonStreamable]
class ListDto {
    /**
     * @var iterable<TItem, int>
     */
    public iterable $items;
}

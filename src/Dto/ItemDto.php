<?php

namespace App\Dto;

use Symfony\Component\JsonStreamer\Attribute\JsonStreamable;

#[JsonStreamable]
class ItemDto
{
    public int $itemId;
    public \DateTimeImmutable $modificationDate;
}

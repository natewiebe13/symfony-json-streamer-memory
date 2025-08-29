<?php

function echoMemory(string $header): void
{
    echo '==========================' . \PHP_EOL;
    echo $header . \PHP_EOL;
    echo round(memory_get_peak_usage() / 1_024 / 1_024, 2) . 'MB' . \PHP_EOL;
    echo round(memory_get_peak_usage(true) / 1_024 / 1_024, 2) . 'MB' . \PHP_EOL;
    echo '==========================' . \PHP_EOL;
}

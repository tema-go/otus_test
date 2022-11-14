<?php

declare(strict_types=1);

namespace TemaGo\OtusTest;

class NumberParser
{
    function parse($text) {
        return preg_replace('/[^0-9]/', '', $text);
    }
}

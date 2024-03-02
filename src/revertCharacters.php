<?php

namespace Hexlet\Phpunit;

function revertCharacters(string $testedStr): string
{
    // Это с использованием функций по работе с массивами
    /*
    $arrayReversed = array_reverse(mb_str_split($testedStr));
    $result = implode("", $arrayReversed);

    return $result;*/

    $utf8String = mb_convert_encoding($testedStr, "UTF-8");
    $result = '';
    $lastChar = strlen($utf8String) - 1;
    for ($i = $lastChar; $i >= 0; $i--) {
        $char = mb_substr($utf8String, $i, 1);
        $result .= $char;
    }

    return $result;
}

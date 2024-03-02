<?php

namespace Hexlet\Phpunit;

require_once "../src/revertCharacters.php";

use function Hexlet\Phpunit\revertCharacters;

// Это тест для использования с PHPUnit
/*
use PHPUnit\Framework\TestCase;

class RevertCharactersTest extends TestCase
{
    public function testRevertCharacters(): void
    {
        $exepted1 = ".ьсиледив ен онваД !тевирП";
        $exepted2 = "?uoy era woH !olleH";
        $this->assertEquals($exepted1, revertCharacters('Привет! Давно не виделись.'));
        $this->assertEquals($exepted2, revertCharacters('Hello! How are you?'));
        $this->assertEmpty(revertCharacters(''));
    }
} */

if (revertCharacters('Привет! Давно не виделись.') !== '.ьсиледив ен онваД !тевирП') {
    throw new \Exception('Функция работает неверно!');
}

if (revertCharacters('Hello! How are you?') !== '?uoy era woH !olleH') {
    throw new \Exception('Функция работает неверно!');
}

if (revertCharacters('') !== '') {
    throw new \Exception('Функция работает неверно!');
}

echo 'Все тесты пройдены!';

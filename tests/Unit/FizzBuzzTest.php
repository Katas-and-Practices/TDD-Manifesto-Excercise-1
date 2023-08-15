<?php

declare(strict_types = 1);

namespace ExerciseOne\Tests\Unit;

require 'src/FizzBuzz.php';

use ExerciseOne\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testShouldReturnStringWhenGivenInteger(): void
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->fizzBuzz(0);

        $this->assertIsString($result);
    }

    public function testShouldReturnGivenIntegerAsString(): void
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->fizzBuzz(13);

        $this->assertIsString($result);
        $this->assertSame('13', $result);
    }

    public function testShouldReturnGivenNegativeIntegerAsString(): void
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->fizzBuzz(-73);

        $this->assertIsString($result);
        $this->assertSame('-73', $result);
    }
}
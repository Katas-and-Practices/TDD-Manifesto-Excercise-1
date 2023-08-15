<?php

declare(strict_types = 1);

namespace ExerciseOne\Tests\Unit;

require 'src/FizzBuzz.php';

use ExerciseOne\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private $fizzBuzz;

    public function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testShouldReturnStringWhenGivenInteger(): void
    {
        $result = $this->fizzBuzz->fizzBuzz(0);

        $this->assertIsString($result);
    }

    public function testShouldReturnGivenIntegerAsString(): void
    {
        $result = $this->fizzBuzz->fizzBuzz(13);

        $this->assertSame('13', $result);
    }

    public function testShouldReturnGivenNegativeIntegerAsString(): void
    {
        $result = $this->fizzBuzz->fizzBuzz(-73);

        $this->assertSame('-73', $result);
    }

    public function testShouldReturnFizzGivenMultiplesOfThree(): void
    {
        $result = $this->fizzBuzz->fizzBuzz(9);

        $this->assertSame('Fizz', $result);
    }

    public function testShouldReturnBuzzGivenMultiplesOfFive(): void
    {
        $result = $this->fizzBuzz->fizzBuzz(20);

        $this->assertSame('Buzz', $result);
    }

    public function testShouldReturnFizzBuzzGivenMultiplesOfFiveAndThree(): void
    {
        $result = $this->fizzBuzz->fizzBuzz(15);

        $this->assertSame('FizzBuzz', $result);
    }
}
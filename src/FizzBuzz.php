<?php

declare(strict_types = 1);

namespace ExerciseOne;

class FizzBuzz
{
    public function fizzBuzz(int $int): string
    {
        if ($int % 3 === 0 && $int % 5 === 0) {
            return 'FizzBuzz';
        }
        if ($int % 3 === 0) {
            return 'Fizz';
        }
        if ($int % 5 === 0) {
            return 'Buzz';
        }

        return (string)$int;
    }
}
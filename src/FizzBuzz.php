<?php

declare(strict_types = 1);

namespace ExerciseOne;

class FizzBuzz
{
    public function fizzBuzz(int $int): string
    {
        if ($int % 3 === 0) {
            return 'Fizz';
        }
        return (string)$int;
    }
}
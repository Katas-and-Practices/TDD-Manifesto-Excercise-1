<?php

declare(strict_types = 1);

namespace ExerciseOne;

class FizzBuzz
{
    private array $dividerToStringAssociation = [
        15 => 'FizzBuzz',
        3 => 'Fizz',
        5 => 'Buzz'
    ];

    public function fizzBuzz(int $input): string
    {
        return $this->generateString($input);
    }

    private function generateString(int $input): string|null
    {
        foreach ($this->dividerToStringAssociation as $divider => $string) {
            if ($input % $divider === 0) {
                return $string;
            }
        }

        return (string)$input;
    }
}

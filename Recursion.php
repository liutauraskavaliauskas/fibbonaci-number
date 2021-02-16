<?php

// Use recursion to compute the Fibonacci number of a given integer.

class Recursion implements SolutionInterface
{
    public function fibonacciNumber(int $number): int
    {
        if ($number <= 1) {
            return $number;
        }

        return $this->fibonacciNumber($number - 1) + $this->fibonacciNumber($number - 2);
    }
}

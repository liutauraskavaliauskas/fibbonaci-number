<?php

// Use recursion to compute the Fibonacci number of a given integer.

class Recursion extends AbstractSolution
{
    public function getFibonacciNumber(int $number): int
    {
        if ($number <= 1) {
            return $number;
        }

        return $this->fibonacciNumber($number - 1) + $this->fibonacciNumber($number - 2);
    }
}

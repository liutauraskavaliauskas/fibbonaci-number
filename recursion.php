<?php

// Use recursion to compute the Fibonacci number of a given integer.

function fibonacciNumber(int $number): int
{
    if ($number <= 1) {
        return $number;
    }

    return fibonacciNumber($number - 1) + fibonacciNumber($number - 2);
}

// Example to get Fibonacci series of 10

$i = 0;

while ($i < 10) {
    print sprintf('%d ', fibonacciNumber($i));

    $i++;
}
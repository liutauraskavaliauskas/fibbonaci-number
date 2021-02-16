<?php

// Improve upon the recursive option by using iteration, still solving for all of the sub-problems
// and returning the answer for N, using already computed Fibonacci values.
// In using a bottom-up approach, we can iteratively compute
// and store the values, only returning once we reach the result.

function fibonacciNumber(int $number): int
{
    if ($number <= 1) {
        return $number;
    }

    return memoize($number);
}

function memoize(int $number): int
{
    $cache = [0, 1];

    for ($i = 2; $i <= $number; $i++) {
        $cache[$i] = $cache[$i - 1] + $cache[$i - 2];
    }

    return $cache[$number];
}

// Example to get Fibonacci series of 10

$i = 0;

while ($i < 10) {
    print sprintf('%d ', fibonacciNumber($i));

    $i++;
}
<?php

//Solve for all of the sub-problems, use memoization to store the pre-computed answers, then return the answer for N.
//We will leverage recursion, but in a smarter way by not repeating the work to calculate existing values.

class TopDownMemoization
{
    /** @var int[] */
    private $cache = [0, 1];

    public function fibonacciNumber(int $number): int
    {
        if ($number <= 1) {
            return $number;
        }

        return $this->memoize($number);
    }

    private function memoize(int $number): int
    {
        if (isset($this->cache[$number])) {
            return $this->cache[$number];
        }

        $this->cache[$number] = $this->memoize($number - 1) + $this->memoize($number - 2);

        return $this->memoize($number);
    }
}

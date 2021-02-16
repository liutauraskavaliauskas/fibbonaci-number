<?php

//Let's get rid of the need to use all of that space and instead use the minimum amount of space required.
//We can achieve O(1)O(1) space complexity by only storing the value
//of the two previous numbers and updating them as we iterate to N.

class IterativeTopDownApproach implements SolutionInterface
{
    public function fibonacciNumber(int $number): int
    {
        if ($number <= 1) {
            return $number;
        }

        if ($number === 2) {
            return 1;
        }

        $sum = 0;
        $firstSummand = 0;
        $secondSummand = 0;

        for ($i = 3; $i <= $number; $i++) {
            $sum = $firstSummand + $secondSummand;
            $firstSummand = $secondSummand;
            $secondSummand = $sum;
        }

        return $sum;
    }
}
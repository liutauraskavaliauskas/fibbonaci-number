<?php

//Let's get rid of the need to use all of that space and instead use the minimum amount of space required.
//We can achieve O(1)O(1) space complexity by only storing the value
//of the two previous numbers and updating them as we iterate to N.

class IterativeTopDownApproachV2 extends AbstractSolution
{
    public function getFibonacciNumber(int $number): int
    {
        $sum = 0;
        $firstSummand = 0;
        $secondSummand = 1;

        $i = 0;

        while ($i < $number) {
            $sum = $firstSummand + $secondSummand;

            $firstSummand = $secondSummand;
            $secondSummand = $sum;
        }

        return $sum;
    }
}
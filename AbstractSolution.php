<?php

abstract class AbstractSolution implements SolutionInterface
{
    public function getName(): string
    {
        return self::class;
    }

    public function getSequence(int $number): string
    {
        $sequence = '';
        $i = 0;

        while ($i < $number) {
            $sequence .= sprintf('%d ', $this->getFibonacciNumber($number));
            $i++;
        }

        return $sequence;
    }
}
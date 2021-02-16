<?php

interface SolutionInterface
{
    public function getName(): string;

    public function getSequence(int $number): string;

    public function getFibonacciNumber(int $number): int;
}
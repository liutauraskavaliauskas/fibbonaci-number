<?php

class FibonacciSequence
{
    /** @var SolutionInterface[] */
    private $solutions = [];

    public function __construct()
    {
        $this->solutions[] = new Recursion();
        $this->solutions[] = new BottomUpMemoization();
        $this->solutions[] = new TopDownMemoization();
        $this->solutions[] = new IterativeTopDownApproach();
        $this->solutions[] = new IterativeTopDownApproachV2();
    }

    public function printSequences(int $number): void
    {
        foreach ($this->solutions as $solution) {
            echo sprintf('%s \r\n', $solution->getName());
            echo sprintf('%s \r\n', $solution->getSequence($number));
        }
    }
}
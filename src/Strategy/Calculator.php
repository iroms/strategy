<?php

namespace Iroms\Strategy;

class Calculator
{
    private $strategy;

    public function __construct (string $operation)
    {
        $this->strategy = $this->getStrategy($operation);
    }

    /**
     * @param string $operation
     * @return OperationInterface
     * @throws \Exception
     */
    private function getStrategy(string $operation): OperationInterface
    {
        switch ($operation)
        {
            case '+' : return new PlusOperation;
            case '-' : return new SubOperation;
            case '*' : return new MultyOperation;
            case '/' : return new DivOperation;
            default  : throw new \Exception('unknown operation');
        }
    }

     public function calc(int $a, int $b): int
     {
         return $this->strategy->calc($a, $b);
     }

}
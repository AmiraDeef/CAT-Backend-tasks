<?php

class Calculator
{
    private $n1;
    private $n2;


    public function __construct($n1, $n2)
    {
        $this->n1 = $n1;
        $this->n2 = $n2;
    }

    public function calculate($op)
    {
        if (!is_numeric($this->n1) || !is_numeric($this->n2)) {
            return "Invalid input. Please enter numeric values.";
        }

        switch ($op) {
            case '+':
                return $this->n1 + $this->n2;
            case '-':
                return $this->n1 - $this->n2;
            case '*':
                return $this->n1 * $this->n2;
            default:
                return "Not supported yet... please enter '+', '-', or '*'.";
        }
    }
}

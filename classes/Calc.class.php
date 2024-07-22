<?php

class Calc
{
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $operator, int $num1, int $num2)
    {
        $this->operator = $operator;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function calculator()
    {
        switch ($this->operator) {
            case 'add':
                $res = $this->num1 + $this->num2;
                return $res;

            case 'sub':
                $res = $this->num1 - $this->num2;
                return $res;

            case 'div':
                $res = $this->num1 / $this->num2;
                return $res;

            case 'mul':
                $res = $this->num1 * $this->num2;
                return $res;

            default:
                return "Error";
        }
    }
}

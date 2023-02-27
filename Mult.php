<?php
namespace Calculate;

class Mult implements Operation
{
    public $firstNumber;
    public $secondNumber;

    public function __construct($firstNumber, $secondNumber){
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;

    }

    public function calculate() {
        return $this->firstNumber * $this->secondNumber;
    }
}
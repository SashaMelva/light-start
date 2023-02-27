<?php

namespace Calculate;

class Calculator 
{
    public $firstNumber;
    public $secondNumber;
    public $operation;
    public $result;

    public function setFirstNumber($firstNumber){
       $this->firstNumber = $firstNumber;
    }
    public function setSecondNumber($secondNumber){
       $this->secondNumber = $secondNumber;
    }
    public function setOperation($operation){
        $this->operation = $operation;
    }
    public function setResult(){
       return $result;
    }
}
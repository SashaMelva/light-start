<?php

namespace Calculate;

class Calculator 
{

   public $firstNumber;
   public $secondNumber;
   public $operation;
   public $result;


   public function firstNumber ($firstNumber) {
      $this->firstNumber = $firstNumber;
      return $this;
   }
   public function secondNumber ($secondNumber) {
      $this->secondNumber = $secondNumber;
      return $this;
   }
   public function operation ($operation) {
      $this->operation = new $operation($this->firstNumber, $this->secondNumber);
      return $this;
   }
   public function result () {
      $this->result = $this->operation->calculate();
      return $this->result;
   }
}
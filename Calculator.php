<?php

namespace Calculate;

use Calculate\Operation;
use Calculate\Calculator;
use Calculate\Div;
use Calculate\Minus;
use Calculate\Mult;
use Calculate\Plus;

require_once("Operation.php");  
require_once("Calculator.php");
require_once("Div.php");
require_once("Minus.php");
require_once("Mult.php");
require_once("Plus.php");  


class Calculator 
{
   //private $calculate;

   public $firstNumber;
   public $secondNumber;
   public $operation;
   public $result;

   /*public function __construct (array $calculate) {

   }*/
   public function firstNumber($firstNumber){
      $this->firstNumber = $firstNumber;
   }
   public function secondNumber($secondNumber){
      $this->secondNumber = $secondNumber;
   }
   public function operation($operation){
      $this->operation = new $operation($this->firstNumber, $this->secondNumber);
   }
   public function result(){
      $this->result = $this->operation->calculate();
      return $this->result;
   }
}
<?php
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


$calculator = new Calculator();
assert(
    $calculator->firstNumber(2)
        ->secondNumber(2)
        ->operation(Mult::class)
        ->result() == 4

);



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
/*
Div::class;
$Div = new Div(6, 2);
echo $Div->calculate();
*/

$calculator = new Calculator();


echo $calculator->firstNumber(2)
        ->secondNumber(2)
        ->operation(Mult::class)
        ->result() == 4;

/*
assert(
    $calculator->firstNumber(2)
        ->secondNumber(2)
        ->operation(Mult::class)
        ->result() == 4

);*/



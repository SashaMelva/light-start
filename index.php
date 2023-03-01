<?php


use My\Abstrac;
use My\Concrete\Circle;

require_once("My/Abstrac/Figure.php");
require_once("My/Concrete/Circle.php");



$cirecle = new Circle(10);
$cirecle->sendInformation();

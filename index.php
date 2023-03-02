<?php
require_once("My/AbstractClass/AbstractFigure.php");
require_once("My/Concrete/Circle.php");
require_once("My/Concrete/Rectangle.php");
require_once("My/Concrete/Triangle.php");
use My\Concrete\Triangle;

use My\Concrete\Circle;
use My\Concrete\Rectangle;
use My\AbstractClass\AbstractFigure;

$cirecle = new Circle(10);
echo $cirecle->sendInformation();


$cirecle = new Rectangle(2, 10);
echo $cirecle->sendInformation();


$cirecle = new Triangle(10, 5 ,2);
echo $cirecle->sendInformation();

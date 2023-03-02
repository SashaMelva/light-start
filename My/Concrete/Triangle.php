<?php

namespace My\Concrete;
use My\AbstractClass\AbstractFigure;

class Triangle extends AbstractFigure 
{
    public $name = "<br/> Триугольник";
    public int $a;
    public int $b;
    public int $c;
    public int $squareResult;
    public int $perimeterResult;

    public function  __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function Perimeter() {
        return $this->perimeterResult = $this->a + $this->b + $this->c;
    }

    public function Square() {
        $halfPerimeter = $this->perimeterResult * 0.5;
        return $this->squareResult =  $halfPerimeter * ($halfPerimeter - $this->a) * ($halfPerimeter - $this->b) * ($halfPerimeter - $this->c);
    }

    public function sendAllData() {
        return $result = $this->name . "<br/> первая сторона: " . $this->a .  "<br/> вторая сторона: "  . $this->b . "<br/> третья сторона: " . $this->c;
    }
    
}
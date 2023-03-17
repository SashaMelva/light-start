<?php
namespace My\Concrete;
use My\AbstractClass\AbstractFigure;

class Rectangle extends AbstractFigure 
{
    public $name = "<br/> Прямоугольник";
    public int $a;
    public int $b;
    public int $squareResult;
    public int $perimeterResult;

    public function  __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function Square() {
        return $this->squareResult = $this->a * $this->b;
    }
    public function Perimeter() {
        return $this->perimeterResult = ($this->a + $this->b) * 2;
    }
    public function sendAllData() {
        return $result = $this->name . "<br/> первая сторона: " . $this->a .  "<br/> вторая сторона: "  . $this->b;
    }
}
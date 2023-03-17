<?php
namespace My\Concrete;
use My\AbstractClass\AbstractFigure;

class Circle extends AbstractFigure 
{
    public $name = "<br/> Круг";
    public int $r;
    public int $squareResult;
    public int $perimeterResult;
    public $result;


    public function  __construct($r) {
        $this->r = $r;
    }

    public function Square() {
        return $this->squareResult = 3.14 * $this->r ** 2; //float(pi() );
    }
    public function Perimeter() {
        return $this->perimeterResult = 3.14 * $this->r * 2; //float(pi() * $this->r * 2);
    }
    public function sendAllData() {
        return $this->result = $this->name . "<br/> радиус : " . $this->r;
    }
}

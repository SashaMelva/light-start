<?php
namespace Concrete;
use My\Abstrac;

class Circle extends Figure 
{

    public int $r;
    public int $squareResult;
    public int $perimeterResult;

    public function  __construct($r) {
        $this->r = $r;
    }

    public function Square() {
        return $this->squareResult = 3 * $this->r ** 2; //float(pi() );
    }
    public function Perimeter() {
        return $this->perimeterResult = 3 * $this->r * 2; //float(pi() * $this->r * 2);
    }
}

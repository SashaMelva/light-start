<?php
namespace My\Concrete\Rectangle;

class Rectangle extends Figure 
{
    public function Square($a, $b) {
        return $a * $b;
    }
    public function Perimeter($a, $b) {
        return ($a + $b) * 2;
    }
}
<?php
namespace My\Concrete\Circle;

class Circle 
{
    public function Square($r) {
        return  float(pi() * $r ** 2);
    }
    public function Perimeter($a, $b) {
        return float(pi() * $r * 2);
    }
}

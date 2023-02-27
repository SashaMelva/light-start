<?php
namespace My\Concrete\Rectangle;

class Rectangle 
{
    public function Square($a, $b) {
        return $a * $b;
    }
    public function Perimeter($a, $b) {
        return ($a + $b) * 2;
    }
}
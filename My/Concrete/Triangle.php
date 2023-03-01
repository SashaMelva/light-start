<?php

namespace My\Concrete\Triangle;

class Triangle extends Figure 
{
    public function Square($a, $h) {
        return 1/2 * $a * $h;
    }
    public function Perimeter($a, $b, $c) {
        return $a + $b + $c;
    }
}
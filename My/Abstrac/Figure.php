<?php

namespace Abstrac;

abstract class Figure
{
    public $result;

    abstract function Square();
    abstract function Perimeter();

    public function sendInformation() {
        return $this->result = "периметр";
    }
}

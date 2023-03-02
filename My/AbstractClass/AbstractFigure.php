<?php

namespace My\AbstractClass;

abstract class AbstractFigure
{
    public $result;

    abstract function Square();
    abstract function Perimeter();
    abstract function sendAllData();

    public function sendInformation() {
        return $this->result = $this->sendAllData() .  "<br/> периметр: " . $this->Perimeter(). "<br/> площадь: " . $this->Square() ;
    }
}

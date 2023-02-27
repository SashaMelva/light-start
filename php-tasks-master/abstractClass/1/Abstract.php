<?php

namespace My\Abstract;

abstract class Figure
{
    abstract protected function getHeight();
    abstract protected function getWidth();

    public function Square() {
        $square = $this-> getHeight() * $this-> getWidth();
        print $square;
    }
}

class Content extends Figure 
{
    public function getHeight() {
        return 500;
    }
    public function getWidth() {
        return 500;
    }
}
$class = new Content;
$class-> Square();
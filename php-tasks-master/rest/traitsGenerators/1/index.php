<?php

class A {
    public $a;

    public function __construct() {
        return $this->a = "GG";
    }

    public function __toString() {
        return $this->a;
    }
}


assert(
    "GGGG" == 
    (new A) . (new A)
);
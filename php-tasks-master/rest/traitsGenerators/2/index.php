<?php


class A {
    private string $a = "gg";

    public function a() {
        return strtoupper($this->a);
    }
}
echo assert(
    "GG" == (new A)->a()
);

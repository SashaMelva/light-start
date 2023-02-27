<?php


class A {
    private string $a = "gg";

    public function  __sleep() {
        return array("\0A\0a");
    }
}
echo((new A)->a
);

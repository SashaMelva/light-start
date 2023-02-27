<?php

use Classes\Test1;
use Classes\Test2;

spl_autoload_register(function ($className) {
        require_once './' .join('/', explode('\\', $className)) . '.php';
    }

); //Включаем автозагрузку

$test1 = new Test1();
$test1->do();

$test2 = new Test2();
$test2->do();


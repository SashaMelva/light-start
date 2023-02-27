<?php

require 'vendor/autoload.php';
set_include_path(__DIR__);


//require "src/One.php";
use One\Test as Test1;

/*
use Two\Test as Test2;
use Three\Four\Test as Test3;*/

$test1 = new Test1\Test();
$test1->do();
/*
$test2 = new Test2;
$test2->do();

$test3 = new Test3;
$test3->do();*/
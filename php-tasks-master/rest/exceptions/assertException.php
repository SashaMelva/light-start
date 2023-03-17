<?php


function customthrow($i) {
    if ($i < 6){
        throw new \Exception();
    }
}

function assertException() {
    try {
        echo 'passed';
    } catch (\Exception $e) {
        echo $e->getMessage();
        echo 'exception';
    }
}


assertException(
    \Exception::class,
    function() {
        customthrow(2);
    }
);
    
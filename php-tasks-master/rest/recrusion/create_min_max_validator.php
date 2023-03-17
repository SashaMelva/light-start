<?php

function create_min_max_validator(int $min, int $max)
{
    return function(int $n){
    	return $min <= $n <= $max ? true : false;
    }
}




$validator = create_min_max_validator(2, 5);
assert($validator(3));
assert(!$validator(6));


<?php

function even_to_zero(int $number)
{
	$str_number = (string)$number;
	$arr_number = str_split($str_number);
	$arr_result = [];
	for ($i = 0; $i < count($arr_number); $i++) {
		if ($i % 2 == 0) {
			$arr_result[] = $arr_number[$i];				
		} else {
			$arr_result[] = 0;
		}
	}
	$result = implode("", $arr_result);
	return $result;
}


assert(even_to_zero(1234567) == 1030507);
assert(even_to_zero(123456) == 103050);

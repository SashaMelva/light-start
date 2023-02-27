<?php

function min_even1(array $arr): int 
{
	$arr_result = [];
	foreach ($arr as $i) {
		if ($i % 2 == 0) {
			$arr_result[] = $i;
		}
	}
	return min($arr_result);
}

function min_even(array $arr): int 
{
	$arr_result = [];
	for ($i = 0; $i < count($arr); $i++) {
		if ($arr[$i] % 2 == 0) {
			$arr_result[] = $arr[$i];
		}
	}
	return min($arr_result);
}

$arr = array(1, 23, 6, 10);
assert(min_even($arr) == 6);

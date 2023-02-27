<?php
function only_odd($arr) 
{
	$arr_result = [];
	for ($i = 0; $i < count($arr); $i++) {
		if ($arr[$i] % 2 != 0) {
			$arr_result[] = $arr[$i];
		}
	}
	return 	$arr_result;
}

$arr = [1, 2, 3, 4];
assert(only_odd($arr) == [1, 3]);

<?php

function arr_double(array $arr): array
{
	for ($i = 0; $i < count($arr); $i++) {
		$arr[$i] *= 2;
	}
	return $arr;
}

$arr = [1, 2, 3, 4];
assert(arr_double($arr) == [2, 4, 6, 8]);

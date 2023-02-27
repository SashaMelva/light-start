<?php
function arr_double(array $arr): array
{
	return 	array_map(
		fn($n) => $n * 2,
		$arr
	);
}

$arr = [1, 2, 3, 4];
assert(arr_double($arr) == [2, 4, 6, 8]);


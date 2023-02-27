<?php

function only_odd($arr) 
{
	return array_filter(
		$arr,
		fn($i) => ($i % 2 == 0) ? false : $i
	);
}
$arr = [1, 2, 3, 4];
assert(only_odd($arr) == [1, 3]);

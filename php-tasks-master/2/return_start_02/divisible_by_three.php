<?php

function divisible_by_three(int $max, int $min): array 
{
	return array_reverse(array_filter(
		range($min, $max),
		fn($n) => ($n % 3 == 0) ? $n : false
	));
}

assert(divisible_by_three(12, 1) == [12, 9, 6, 3]);

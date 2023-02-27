<?php

function factorial($n)
{
	$result = 1;
	for ($n; $n > 0; $n--) {
		$result = $result * $n;
	}
	return $result;
}
assert(factorial(0) == 1);
assert(factorial(1) == 1);
assert(factorial(4) == 24);


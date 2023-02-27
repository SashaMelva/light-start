<?php


function is_palindrome(string $word) 
{
	return array_product(
		array_map(
			fn($i, $n) => ($i == $n) ? true : false,
			mb_str_split(trim(mb_strtolower($word))),
			array_reverse(mb_str_split(trim(mb_strtolower($word))))
		)
	); 
}

assert(is_palindrome('qwq') == 1);
assert(is_palindrome('qwqq') == 0);
assert(is_palindrome('Шалаш') == 1);
assert(is_palindrome('мышка') == 0);
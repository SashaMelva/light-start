<?php
mb_internal_encoding ("utf-8");

function is_palindrome(string $word) 
{
	$word = mb_str_split(trim(mb_strtolower($word)));
	$word_second = array_reverse($word);
	for ($i = 0; $i < count($word); $i++) {
		if($word[$i] != $word_second[$i]) {
			return false;
		}
	}
	return true;
}

assert(is_palindrome('qwq') == 1);
assert(is_palindrome('qwqq') == 0);
assert(is_palindrome('как') == 1);
assert(is_palindrome('как е ') == 0);
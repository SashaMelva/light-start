<?php
function sum_n_elements(array $arr, int $n)
{
    $result = 0;
    $arrResult = array_slice($arr, 0, $n);
    foreach ($arrResult as $var) {
        $result += $var;
    }
    return $result;
}
$arr = [1, 2, 3, 4];
print_r(sum_n_elements($arr, 2));

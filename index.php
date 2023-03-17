<?php
function sum_n_elements(array $arr, int $n)
{
    return array_map("v",array_slice($arr, 0, $n));
}
function v($item)
{
    return $item;
}
$arr = [1, 2, 3, 4];
print_r(sum_n_elements($arr, 2));

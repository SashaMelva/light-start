<?php
function sum_intersect(array $arr1, array $arr2): int
{
    $summ = 0;
    foreach ($arr1 as $ar) {
        foreach ($arr2 as $ar2) {
            if ($ar == $ar2) {
                $summ += $ar;
            }
        }
    }

    //array_map('comparison', $arr1, $arr2);
    return $summ;
}
$arr1 =  [2, 5, 9];
$arr2 = [1, 2, 5];
echo sum_intersect($arr1, $arr2);
// comparison($arr1, $arr2) {}


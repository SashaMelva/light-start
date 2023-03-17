<?php
function sum_of_pairs(array $arr): array
{
    $resultArr = [];
    for($i = 0; $i < count($arr); $i += 2) {
        $resultArr[] = $arr[$i] + $arr[$i + 1];
    }
    return $resultArr;
}
$arr= [1, 2, 3, 4, 5, 6];
print_r(sum_of_pairs($arr));
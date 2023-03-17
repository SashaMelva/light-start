<?php
function sum_intersect(array $arr1, array $arr2)
{
    print_r(array_map("second", $arr1, $arr2));
//    foreach ($arr1 as $ar) {
//        foreach ($arr2 as $ar2) {
//            if ($ar == $ar2) {
//                $summ += $ar;
//            }
//        }
//    }

    //array_map('comparison', $arr1, $arr2);
   // return $summ;
}
function second($v1, $v2) {
    if ($v1 == $v2) {
       return $v1;
    }
}


$arr1 =  [2, 5, 9];
$arr2 = [1, 2, 5];
sum_intersect($arr1, $arr2);
// comparison($arr1, $arr2) {}


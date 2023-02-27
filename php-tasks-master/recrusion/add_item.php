<?php
function add_item(&$arr, $item){
    $arr[] = $item;
}
$arr = [1, 2, 3];
add_item($arr, 6);
assert($arr == [1, 2, 3, 6]);
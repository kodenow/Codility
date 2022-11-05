<?php
function solution($array) {
    // write your code in PHP7.0
    sort($array);
    $min = min($array);
    $max = max($array);
    $range = range($min, $max);
    // $range = range(1,max($array));
    var_dump($array);
    var_dump($range);
    // $diff = array_diff($array, $range);
    $diff = array_diff($range, $array);
    var_dump("diff ----------");
    var_dump($diff);
    if(count($diff) == 0) return $max + 1; //input [1,2,3]
    if(min($diff) < 1 ) return 1; //[-3,2,3,4]
    return min($diff); //input [4,7,8] or input [3,4,5];

    
}


$array = [-1,1,2,5,6,10];
$array = [-3,2,3,4];
$array = [2,3,4];
// $array = [1,2,3];
// $array = [4,7,8];
$num = solution($array);
var_dump($num);
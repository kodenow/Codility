<?php


/* 
Performed by: https://github.com/kriscondev/

Detected time complexity:
Correctness 100%
Performance 100%
Task score 100%
TOTAL SCORE 100%
*/
function solution($n, $array) {
    $R = [];
    for ($i = 0; $i < $n; $i++) {
      $R[$i] = 0;
    }
    $m = count($array);
    $min = 0;
    $max = 0;
    for ($k = 0; $k < $m; $k++) {
      if ($array[$k] <= $n) {
        if ($R[$array[$k] - 1] < $min + 1) {
          $R[$array[$k] - 1] = $min + 1;
        } else {
            var_dump("R -------------");
            var_dump($R);
            var_dump("R end >>>>>>>>>>");
            var_dump("Array -------------");
            var_dump($array);
            var_dump("A end >>>>>>>>>>");
            var_dump("K -------------");
            var_dump($k);
            var_dump("K end >>>>>>>>>>");
            var_dump($R[$array[$k] - 1]);
            $R[$array[$k] - 1]++;
            var_dump($R[$array[$k] - 1]++);
            

        }
        if ($R[$array[$k] - 1] > $max) {
          $max = $R[$array[$k] - 1];
        }
      } else {
        $min = $max;
      }
    }
    for ($i = 0; $i < $n; $i++) {
      if ($R[$i] < $min) {
        $R[$i] = $min;
      }
    }
    return $R;
  }
$n = 5;
$array = [3,4,4,6,1,4,4];
// $array = [3,4];

$maxCounter = solution($n, $array);
var_dump($maxCounter);
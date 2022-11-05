<?php
/* 
Performed by: https://github.com/kriscondev/
Correctness 100%
Performance 0%
Task score 50%
Detected time complexity: O(B-A)

input [0, 2000000000, 1] the solution terminated unexpectedly. Allowed memory size of 536870912 bytes exhausted
*/
function solution($x,$y,$m){
    if($x > $y || $x > 2000000000 || $y > 2000000000 || $m > 2000000000) return 0;
    $range = range($x,$y);

    $divs = 0;
    // foreach($range as $val){
    //     if($val % $m == 0){
    //         $divs++;
    //     }
    // }

    for ($i=$x; $i <= $y; $i++) { 
        if($i % $m == 0){
            $divs++;
        }
    }
    return $divs;
}

solution(6,11,2);
solution(6,6,2);
solution(0, 2000000000, 1);
solution(100,123000000000,2);
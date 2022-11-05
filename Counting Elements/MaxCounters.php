<?php


/* 
Performed by: https://github.com/kriscondev/

Detected time complexity: O(N*M)
Correctness 100%
Performance 40%
Task score 66%
TOTAL SCORE 66%
*/
function solution($n, $array){
    for ($i=0; $i < $n; $i++) { 
        $maxCounter[] = 0; //setting initial to zeroes 
    }
    
    foreach($array as $k => $val){
        // var_dump("val $val <= n $n");
        if ($val <= $n){
            $maxCounter[$val - 1] = $maxCounter[$val -1] + 1;
        } else if($val == $n +1){
            $max = max($maxCounter);
            $keys = array_keys($maxCounter);
            $maxCounter = array_fill_keys($keys,$max);

        }    
    }
  
    return $maxCounter;
}

// $n = 5;
// $array = [3,4,4,6,1,4,4];
// $array = [3,4];

// $maxCounter = solution($n, $array);
<?php
/* 
Performed by: https://github.com/kodenow/
Correctness 100%
Performance 100%
Task score 100%
Detected time complexity: O(N)
*/

function solution($arrays){
    $x = 0;
    $y = 0;
    foreach($arrays as $val){
        if($val == 0){
            $x++;
        }else{
            if($val > 100000) continue;
            $y+=$x;

            if($y>1000000000){
                $y = -1;
                break;
            }
        }        
    }
    
    return $y;
}


solution([0,1,0,1,1]);
solution([0,0,1,0,1]);
solution([0,0,0,1,0,1]);
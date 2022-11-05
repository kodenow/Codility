<?php
/* 
Performed by: https://github.com/kriscondev/

For more or some other solutions, refer to this guy right here https://www.alessiocantarella.it/codility/

Detected time complexity: O(N) or O(N * log(N))
Correctness 100%
Performance 100%
Task score 100%
TOTAL SCORE 100%

Write a function:

function solution($A);

that, given an array A of N integers, returns the smallest positive integer (greater than 0) that does not occur in A.

For example, given A = [1, 3, 6, 4, 1, 2], the function should return 5.

Given A = [1, 2, 3], the function should return 4.

Given A = [−1, −3], the function should return 1.

Write an efficient algorithm for the following assumptions:

N is an integer within the range [1..100,000];
each element of array A is an integer within the range [−1,000,000..1,000,000].
*/
function solution($array) {
    // write your code in PHP7.0
    if (!in_array(1, $array)) {
        return 1;
      }
      
    $array = array_filter($array, function($val){
        return $val > 0;
    });
    sort($array);
    var_dump($array);
    $count = count($array);

    // for ($i=0; $i < $count; $i++) {
    //     if(empty($array[$i + 1])) break;
    //     $plusOne = $array[$i] + 1;
    //     var_dump("{$array[$i + 1]} VS $plusOne");
    //     if ($array[$i + 1]  != $array[$i] + 1 ) return $array[$i] + 1 ;
    // }

    for ($i = 1; $i < $count; $i++) {
        $minusOne = $array[$i - 1];
        var_dump("{$array[$i]} - $minusOne is > 1");
        if ($array[$i] - $array[$i - 1] > 1) {

          return $array[$i - 1] + 1;
        }
      }
    return max($array) + 1;
    
}


// $array = [-1,1,2,5,6,10];
// $array = [-3,2,3,4];
// $array = [2,3,4];
// $array = [1,2,3];
// $array = [1,4,7,8];
// $array = [1, 3, 6, 4, 1, 2];
$array = [3, 2, 6,1,3,3,4, 4, 1, 2];
$num = solution($array);
var_dump($num);
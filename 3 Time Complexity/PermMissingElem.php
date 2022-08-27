<?php
/* 
Performed by: https://github.com/kriscondev/
Correctness 100%
Performance 100%
Task score 100%

PermMissingElem
Find the missing element in a given permutation.

An array A consisting of N different integers is given. The array contains integers in the range [1..(N + 1)], which means that exactly one element is missing.

Your goal is to find that missing element.

Write a function:

function solution($A);

that, given an array A, returns the value of the missing element.

For example, given array A such that:

  A[0] = 2
  A[1] = 3
  A[2] = 1
  A[3] = 5
the function should return 4, as it is the missing element.

Write an efficient algorithm for the following assumptions:

N is an integer within the range [0..100,000];
the elements of A are all distinct;
each element of array A is an integer within the range [1..(N + 1)].
*/


function solution($array){
    if(empty($array)) return 1; //input is array[]
    if(count($array) < 2 && max($array) < 2) return 2;//input is array[1]
    if(count($array) < 2 && max($array) > 1) return max($array) - 1; // array[2]

    $min = min($array);
    $max = max($array);
    $range = range($min, $max);
 
    $vals = array_diff($range, $array);
    if(empty($vals) && $min > 1) return $min - 1; //input is array[3,2]
    if(empty($vals)) return max($array) + 1; //input is array[1,2]
    return min($vals);
}
// $array = []; return 1
// $array = [1]; return 2
// $array = [2]; return N-1
// $array = [3,2]; return 1
// $array = [1,2]; return N+1
// $missingVal = solution($array);
// var_dump($missingVal);
<?php
/* This is a demo task.

Correctness 40%
Performance 100%
Task score 66%

Write a function:

function solution($A);

that, given an array A of N integers, returns the smallest positive integer (greater than 0) that does not occur in A.

For example, given A = [1, 3, 6, 4, 1, 2], the function should return 5.

Given A = [1, 2, 3], the function should return 4.

Given A = [−1, −3], the function should return 1.

Write an efficient algorithm for the following assumptions:

N is an integer within the range [1..100,000];
each element of array A is an integer within the range [−1,000,000..1,000,000].
Copyright 2009–2022 by Codility Limited.
 */

function solution($array) {
    // write your code in PHP7.0

    $min = min($array);
    $max = max($array);
    if($min < 0 && $max < 0) return 1;
    if($min < 0) $min = 1; // the problem requires that our function should return an integer > 0, here we are converting the smallest number to 1
    $range = range($min, $max);
    $vals = array_diff($range, $array);//finding the difference
    if(empty($vals)) {
     $vals = $max + 1;
    } else {

        return min($vals);
    }
    return $vals;
    
}


$num = solution( [-1,1,2,5,6,10]);
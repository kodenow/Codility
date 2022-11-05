<?php
/* 
Performed by: https://github.com/kriscondev/

For more or some other solutions, refer to this guy right here https://www.alessiocantarella.it/codility/

Detected time complexity: O(N) or O(N * log(N))
Correctness 100%
Performance 100%
Task score 100%
TOTAL SCORE 100%

A non-empty array A consisting of N integers is given.

A permutation is a sequence containing each element from 1 to N once, and only once.

For example, array A such that:

    A[0] = 4
    A[1] = 1
    A[2] = 3
    A[3] = 2
is a permutation, but array A such that:

    A[0] = 4
    A[1] = 1
    A[2] = 3
is not a permutation, because value 2 is missing.

The goal is to check whether array A is a permutation.

Write a function:

function solution($A);

that, given an array A, returns 1 if array A is a permutation and 0 if it is not.

For example, given array A such that:

    A[0] = 4
    A[1] = 1
    A[2] = 3
    A[3] = 2
the function should return 1.

Given array A such that:

    A[0] = 4
    A[1] = 1
    A[2] = 3
the function should return 0.

Write an efficient algorithm for the following assumptions:

N is an integer within the range [1..100,000];
each element of array A is an integer within the range [1..1,000,000,000].
*/
function solution($array){
    $valCount = count($array);
    sort($array);
 
    for ($i=0; $i < $valCount ; $i++) { 
        if( $array[$i] != $i + 1 ) {
            return 0;
        }
    }
    return 1;
}

// $array = [1000000000]; return 0;
// $array = [4, 1, 3, 2]; //return 1
// $array = [3,2]; //return 0
// $array = [1,1]; //return 0
// $array = [1]; //return 1
// $array = [9, 5, 7, 3, 2, 7, 3, 1, 10, 8]; //return 0

// $perm = solution($array);
// var_dump($perm);

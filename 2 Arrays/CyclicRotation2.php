<?php
/* 
Performed by: https://github.com/kodenow/
Correctness 100%
Performance not assessed
Task score 100%
TOTAL SCORE 100%

An array A consisting of N integers is given. Rotation of the array means that each element is shifted right by one index, and the last element of the array is moved to the first place. For example, the rotation of array A = [3, 8, 9, 7, 6] is [6, 3, 8, 9, 7] (elements are shifted right by one index and 6 is moved to the first place).

The goal is to rotate array A K times; that is, each element of A will be shifted to the right K times.

Write a function:

function solution($A, $K);

that, given an array A consisting of N integers and an integer K, returns the array A rotated K times.

For example, given

    A = [3, 8, 9, 7, 6]
    K = 3
the function should return [9, 7, 6, 3, 8]. Three rotations were made:

    [3, 8, 9, 7, 6] -> [6, 3, 8, 9, 7]
    [6, 3, 8, 9, 7] -> [7, 6, 3, 8, 9]
    [7, 6, 3, 8, 9] -> [9, 7, 6, 3, 8]
For another example, given

    A = [0, 0, 0]
    K = 1
the function should return [0, 0, 0]

Given

    A = [1, 2, 3, 4]
    K = 4
the function should return [1, 2, 3, 4]

Assume that:

N and K are integers within the range [0..100];
each element of array A is an integer within the range [−1,000..1,000].
In your solution, focus on correctness. The performance of your solution will not be the focus of the assessment.
*/
function solution($array, $r) {
    if(count($array) < 1 || $r < 1) return $array;

    if($r > count($array)){ //because given ([1,2,3,4],1) or ([1,2,3,4],5) or ([1,2,3,4],9) will return the same result as ([1,2,3,4],1)
        $x = floor($r/count($array)); //e.g ([1,2,3,4],9) ====> floor(9/4) = 2
        $x = $x * count($array); //2 * 4 = 8
        $r = $r - $x; //9-8 = 1
    }
    
    var_dump($r);
    $tail = array_slice($array,-$r, $r);
    print_r($tail);

    $head = array_slice($array,0,count($array) - $r);
    print_r($head);

    $merge = array_merge($tail,$head);
    print_r($merge);
    return $merge;
}


solution([1,2,3,4],9);
// solution([1,2,3,4],4);
// solution([1, 1, 2, 3, 5],42);

<?php
/* 
Performed by: https://github.com/kriscondev/

For more or some other solutions, refer to this guy right here https://www.alessiocantarella.it/codility/

Detected time complexity: Not available
Correctness 100%
Performance 100%
Task score Not Assessed
TOTAL SCORE 100%

A binary gap within a positive integer N is any maximal sequence of consecutive zeros that is surrounded by ones at both ends in the binary representation of N.

For example, number 9 has binary representation 1001 and contains a binary gap of length 2. The number 529 has binary representation 1000010001 and contains two binary gaps: one of length 4 and one of length 3. The number 20 has binary representation 10100 and contains one binary gap of length 1. The number 15 has binary representation 1111 and has no binary gaps. The number 32 has binary representation 100000 and has no binary gaps.

Write a function:

function solution($N);

that, given a positive integer N, returns the length of its longest binary gap. The function should return 0 if N doesn't contain a binary gap.

For example, given N = 1041 the function should return 5, because N has binary representation 10000010001 and so its longest binary gap is of length 5. Given N = 32 the function should return 0, because N has binary representation '100000' and thus no binary gaps.

Write an efficient algorithm for the following assumptions:

N is an integer within the range [1..2,147,483,647].
*/
function solution($N) {
    // write your code in PHP7.0
    $bin = decbin($N); //converted to binary
    $countOnes= substr_count($bin,"1"); //count occurence of 1s
    if($countOnes < 2) return 0;
    $lastPos = strripos($bin,"1"); // get the position of the last occurence of 1

    //cut the string so trailing zeroes without 1 at the end will be removed
    //ex 10010000, the last 4 zeroes are not a gap because it is not surrounded with 1
    $withGap = substr($bin, 0, $lastPos + 1);
    if($countOnes < 2) return 0;
    $exploded  = explode('1',$withGap);
    if($exploded[0] == "" || "0") {
        unset($exploded[0]);
    }

    /*
    to reindex the array using array_values, Note that when you use unset() 
    the array keys won’t change sample: $array = [ 0 => 'a' ,1 => 'b' , 2='c'];
    unset($array[0]). 
    result is [1 => 'b' , 2='c'], note that it now start with index 1 
    */
    $exploded = array_values($exploded); 
    // if($exploded[array_key_last($exploded)] == "") unset($exploded[array_key_last($exploded)]); this solution works only if PHP VERSION > 7.0
    if($exploded[count($exploded) -1] == "") unset($exploded[count($exploded) -1]);
    $exploded = array_values($exploded);
    $longestCount = findLongestZero($exploded);
    return $longestCount;

}


function findLongestZero($zeroes) {
    $longestCount = 0;
    foreach($zeroes as $zero){
        $charCount = Substr_count($zero,"0");
        if($charCount > $longestCount) {
            $longestCount = $charCount;
        }
    }
    return $longestCount;
}
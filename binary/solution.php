<?php
function solution($N) {
    // write your code in PHP7.0
    $bin = decbin($N);
    var_dump($bin);
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

    //to reindex the array using array_values, Note that when you use unset() 
    //the array keys won’t change sample: [ 0 => 'a' ,1 => 'b' , 2='c']. result is [1 => 'b' , 2='c'], note that it now start with index 1
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
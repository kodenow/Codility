<?php

function solution($start, $goal, $leapDistance) { // Correct answer but time complexity O(Y-X), For example, for the input (3, 999111321, 7) the solution exceeded the time limit.
    // write your code in PHP7.0
    // $start = $start + $leap;
    // $start = 10;
    $leapCount = 0;
    $leaped = $start;
    while ($leaped < $goal){ //continue while leaped distance is lesser than your goal.
        $leaped += $leapDistance;
        var_dump($leaped);
        $leapCount++;
    }
    var_dump($leapCount);
    return $leapCount;

}

// function solution($X, $Y, $D) { this should be the answer. Time complexity O(1)
//     $distance = $Y - $X;
//     $remain = $distance % $D;
//     if ($remain == 0) {
//         return $distance / $D;
//     } else {
//         return ($distance - $remain) / $D + 1;
//     }
// }

solution(1,5,2);
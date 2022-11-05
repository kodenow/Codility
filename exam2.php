<?php

function solution($seconds){
    echo gmdate("H:i:s", $seconds);
    $week = 0;
    $day = 0;
    $day = floor($seconds / 86400);
    $week = floor($seconds/604800);
    $hours = floor($seconds / 3600);
    $minutes = floor(($seconds / 60) % 60);
    $seconds = $seconds % 60;

    $construct="";
    $timeAr = [];
    $units = 0;
    if($week >= 1){
        $timeAr['w'] = $week;

    }
    if($day >= 1){
        if($day > 7){
            $day = $day - 7;

        }

        $timeAr['d'] = $day;

    }
    if($hours >= 1){
        if($hours > 24){
            $hours = $hours - 24;
        }
        $timeAr['h'] = $hours;
    }
    if($minutes >= 1 ){
        $timeAr['m'] = $minutes;
  
    }
    if($seconds >= 1){
        $timeAr['s'] = $seconds;
      
    }

    var_dump($timeAr);
    $count = count($timeAr);


    $y = "";
    $i = 0;
    var_dump($timeAr);
    foreach($timeAr as $unit => $val){
    
        $i++;
        if($val > 0 ){
            if($count > 2 && $i == $count - 1){
                $newVal = $val + 1 ;
                $y .= (int)$newVal . $unit;   
                break;             
            }else{
                $y .= $val . $unit; 
            }
        }
    }

    
    return $y;
}

// $time = 100;
// $time = 7263;
$time = 3605;
$time = 90000;
$time = 1820000;
$clock = solution($time);
var_dump($clock);
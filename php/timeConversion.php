<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s){

    $time = preg_replace('[\d\d:\d\d:\d\d]', '', $s);
    preg_match_all("/^\d\d/", $s, $hour);

    if($time == 'PM'){

        $hour = $hour[0][0] + 12;
        $time = $hour.preg_replace('/^\d\d/', '', $s);
    
    }else{



    }

    echo $time;

}

timeConversion('07:05:45PM');

//07:05:45PM

//19:05:45

/*

https://www.hackerrank.com/challenges/time-conversion/problem?isFullScreen=true

*/

?>
<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s){


    $time = strtotime($s);

    return date('H:i:s', $time);
    

}

timeConversion('07:05:45PM');

/*

https://www.hackerrank.com/challenges/time-conversion/problem?isFullScreen=true

*/

?>
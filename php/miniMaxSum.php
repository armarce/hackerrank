<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {

    $arraySum = array();
   
    foreach($arr as $index => $number){

        $arraySum[$index] = array_sum($arr) - $number;

    }

    sort($arraySum, SORT_NUMERIC);

    echo $arraySum[0]." ".end($arraySum);

}

/*

https://www.hackerrank.com/challenges/mini-max-sum/problem?isFullScreen=true

*/

?>

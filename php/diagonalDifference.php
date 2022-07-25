<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr){

    // For nxn arrays (R2, R3, R4, etc);

    $n = count($arr);

    $i = 0;
    $j = $n - 1;
    $diagonals = [0, 0];

    while($i < $n){
        
        $diagonals[0] += $arr[$i][$i];
        $diagonals[1] += $arr[$i][$j];

        $i++;
        $j--;

    }

    $diff = abs($diagonals[0] - $diagonals[1]);

    return $diff;

}

/*

https://www.hackerrank.com/challenges/diagonal-difference/problem?isFullScreen=true

*/

?>
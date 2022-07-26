<?php

/*
 * Complete the 'birthdayCakeCandles' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY candles as parameter.
 */

function birthdayCakeCandles($candles){

    $scores = array_count_values($candles);

    $max = max(array_keys($scores));
    
    return $scores[$max];

}

/*

https://www.hackerrank.com/challenges/birthday-cake-candles/problem?isFullScreen=true

*/

?>
<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr){
    
    $count = count($arr);

    //Elements of array: count positive numbers, count negative numbers, count zero numbers
    $scores = array(0, 0, 0);

    foreach($arr as $index => $number){

        0 < $number ? $scores[0]++ : (0 > $number ? $scores[1]++ : $scores[2]++);

    }

    $ratios = array_map(function($score) use($count){

        return number_format($score/$count, 6);

    }, $scores);

    echo implode("\n", $ratios);

}


/*

https://www.hackerrank.com/challenges/plus-minus/problem?isFullScreen=true

*/

?>
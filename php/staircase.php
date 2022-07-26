<?php

/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */


function staircase($n) {
    
    $i = 1;
    $space = $n-1;
    $string = '';

    while($i <= $n){

        $string .= str_repeat(" ", $space);
        $string .= str_repeat("#", $i);;
        $string .= "\n";

        $i++;
    
        $space--;

    }
    
    echo $string;

}

/*

https://www.hackerrank.com/challenges/staircase/problem?isFullScreen=true
 
*/

?>
<?php

function miniMaxSum($arr) {

    $arraySum = array();
   
    foreach($arr as $index => $number){

        $arraySum[$index] = array_sum($arr) - $number;

    }

    sort($arraySum, SORT_NUMERIC);

    echo $arraySum[0]." ".end($arraySum);

}

/*

$arr = [1, 2 ,3 ,4 ,5];

miniMaxSum($arr);

*/


?>

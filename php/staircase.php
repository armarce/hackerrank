<?php

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


?>
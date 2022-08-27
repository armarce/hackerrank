<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */


function gradingStudents($grades){

    $newGrades = array();
    
    foreach($grades as $index => $grade){

        if($grade > 37){

            $mod = $grade % 5;

            if($mod == 0){

                $newGrades[$index] = $grade;

            }else{

                (5 - $mod) < 3 ? $newGrades[$index] = ($grade + (5 - $mod)) :  $newGrades[$index] = $grade;

            }
        
        }else{

            $newGrades[$index] = $grade;

        }
        
    }

    return $newGrades;

}

/*

https://www.hackerrank.com/challenges/grading/problem?isFullScreen=true

*/

?>
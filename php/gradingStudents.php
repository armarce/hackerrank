<?php

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

$grades = array(73, 68, 40, 33);

print_r(gradingStudents($grades));

?>
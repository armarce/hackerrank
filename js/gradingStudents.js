/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */


function gradingStudents(grades){

    let newGrades = [];

    for(let grade of grades){

        if(grade > 37){

            let mod = grade % 5;

            if(mod == 0){

                newGrades.push(grade);

            }else{

                (5  - mod) < 3 ? newGrades.push(grade + (5 - mod)) : newGrades.push(grade);

            }

        }else{

            newGrades.push(grade);

        }

    }

    return newGrades;

}

/*

https://www.hackerrank.com/challenges/grading/problem?isFullScreen=true

*/
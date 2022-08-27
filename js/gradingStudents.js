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

let grades = [75, 67, 40, 33];

gradingStudents(grades);
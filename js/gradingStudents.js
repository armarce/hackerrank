function gradingStudents(grades){

    let newGrades = [];

    for(let grade of grades){

        if(grade > 37){

            let mod = grade % 5;

            if(mod == 0){

                newGrades.push(grade);

            }else{

                (5  - mod) < 3 ? newGrades.push()

            }

        }else{


        }

    }



} 
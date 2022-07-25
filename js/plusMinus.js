/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus(arr) {
    // Write your code here

    const length = arr.length;

    //Elements of array: count positive numbers, count negative numbers, count zero numbers
    let scores = [0, 0, 0];

    for(let number of arr){

        0 < number ? scores[0]++ : (0 > number ? scores[1]++ : scores[2]++);

    }

    let ratios = scores.map((score) => {

      	score /= length;
      
        return score.toFixed(6);

    });
    
    console.log(ratios.join("\n"));

}

/*

https://www.hackerrank.com/challenges/plus-minus/problem?isFullScreen=true

*/
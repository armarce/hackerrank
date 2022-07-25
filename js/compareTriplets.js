/*
 * Complete the 'compareTriplets' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 */

function compareTriplets(a, b) {

    let compare = [0, 0];

    a.forEach((score, index) => {

        if(score !== b[index]){

            score < b[index] ? compare[1]++: compare[0]++;

        }

    });

    return compare;

}

/*

https://www.hackerrank.com/challenges/compare-the-triplets/problem?isFullScreen=true

*/
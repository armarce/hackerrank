/*
 * Complete the 'simpleArraySum' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY ar as parameter.
 */

function simpleArraySum(ar) {
    
    const sum = ar.reduce((a, b) => a + b);

    return sum;

}

/*

https://www.hackerrank.com/challenges/simple-array-sum/problem?isFullScreen=true

*/
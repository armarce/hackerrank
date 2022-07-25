/*
 * Complete the 'aVeryBigSum' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER_ARRAY ar as parameter.
 */

function aVeryBigSum(ar) {
    
    let sum = ar.reduce((a, b) => a + b);

    return sum;

}

/*

https://www.hackerrank.com/challenges/a-very-big-sum/problem?isFullScreen=true

*/
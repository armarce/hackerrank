/*
 * Complete the 'birthdayCakeCandles' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY candles as parameter.
 */


function birthdayCakeCandles(candles) {

    candles.sort((a, b) => b - a);
  
  	let max = candles[0];
  
  	let repeat = candles.reduce((acc, number) => {
    	
 			return number === max ? acc + 1 : acc;
      
    }, 0);

    return repeat;

}

/*

https://www.hackerrank.com/challenges/birthday-cake-candles/problem?isFullScreen=true

*/

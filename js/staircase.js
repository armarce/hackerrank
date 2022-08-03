/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase(n) {
  
    let i = 1;
    let nSpaces = n-1;
    let result = [];
    
    while(i <= n){
      
      let spaces = " ".repeat(nSpaces);
      let sharps = "#".repeat(i);
      
      result.push(`${spaces}${sharps}`);
      
          i++;
      nSpaces--;
      
    }
    
    result = result.join("\n");
    
    console.log(result);
  
}

/*

https://www.hackerrank.com/challenges/staircase/problem?isFullScreen=true

*/
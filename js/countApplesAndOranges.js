/*
 * Complete the 'countApplesAndOranges' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER s
 *  2. INTEGER t
 *  3. INTEGER a
 *  4. INTEGER b
 *  5. INTEGER_ARRAY apples
 *  6. INTEGER_ARRAY oranges
 */

function countApplesAndOranges(s, t, a, b, apples, oranges) {
  
    let inApples = 0;
  
    for(let apple of apples){
      
      let position = 0;
      
      position = a + apple;
      
      if(position >= s && position <= t ) inApples++;
        
    }
    
    let inOranges = 0;
    
    for(let orange of oranges){
      
      let position = b + orange;
      
      if(position >= s && position <= t) inOranges++;
      
    }
    
    console.log(inApples);
    console.log(inOranges);
  
}

/*

https://www.hackerrank.com/challenges/apple-and-orange/problem?isFullScreen=true

*/
function miniMaxSum(arr) {
  
    let sum = arr.reduce((a, b) => a + b);
    
    let arraySum = [];
      
    arr.forEach((number) => {
    
          arraySum.push(sum - number);
    
    });
    
    arraySum = arraySum.sort((a, b) => a - b);
    
    console.log(arraySum[0]+ " "+ arraySum[arraySum.length - 1]);
  
}
/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion(s) {
  
    if(s.includes('PM')){

        s = s.replace(/PM/g, ' PM');
    
    }else{
      
      s = s.replace(/AM/g, ' AM');
      
    }

    s = `01-01-1970 ${s}` ;
    let time = Date.parse(s);
  	time = new Date(time);
  
  	let hours = String(time.getHours()).padStart(2, '0');
  	let minutes = String(time.getMinutes()).padStart(2, '0');
  	let seconds = String(time.getSeconds()).padStart(2, '0');
	
    return `${hours}:${minutes}:${seconds}`;

}

/*

https://www.hackerrank.com/challenges/time-conversion/problem?isFullScreen=true

*/

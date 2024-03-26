
// intialaise the value with 0
let count =0 ;

//select value and buttons
const value = document.querySelector("#value");
const btns = document.querySelectorAll(".btn");

// loops for each btn and a eventListener to each btn
    btns.forEach(function(btn){
    btn.addEventListener('click' ,function(e){
        // get the class list of clicked button after excute the function with parameter e 
    const styles = e.currentTarget.classList;
    if(styles.contains('decrease')){
        count --;
    }
    else if(styles.contains('increase')){
        count ++;
     }
     else {
        count =0 ;
    }

    //updated to display the current value of count
    value.textContent =count ;
    });
 });

    

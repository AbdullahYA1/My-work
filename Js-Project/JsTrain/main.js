const colors = ["green",'red',"black ","blue"];
const btn = document.getElementById('btn');
const color = document.getElementById('color');



btn.addEventListener('click' ,function(){
    // get a random number between 0 -3 color 
const randomNumber = getRandomNumber () ;
console.log(randomNumber);
document.body.style.background = colors[randomNumber];
color.textContent = colors[randomNumber];
});

function getRandomNumber (){

    return Math.floor(Math.random()*colors.length);


}
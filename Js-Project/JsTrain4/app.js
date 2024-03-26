const navToggle = document.querySelector('.nav-toggle');
const links = document.querySelector('.links');

navToggle.addEventListener('click',function(){
 // if links contain class show-links it will hide the links 

links.classList.toggle('show-links');
});
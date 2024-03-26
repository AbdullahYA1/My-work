// ********** set date ************

const date = document.getElementById('date');
date.innerHTML = new Date().getFullYear();
/*This code sets the content of an HTML element with an ID of "date" to the current year.*/

// ********** close links ************
const navToggle = document.querySelector('.nav-toggle');
const linksContainer = document.querySelector('.links-container');
const links = document.querySelector('.links');


navToggle.addEventListener("click", function () {
    // linksContainer.classList.toggle("show-links");
  
    const linksHeight = links.getBoundingClientRect().height;
    const containerHeight = linksContainer.getBoundingClientRect().height;
    if (containerHeight === 0) {
        linksContainer.style.height = `${linksHeight}px`;
    } else {
        linksContainer.style.height = 0;
    }
    // console.log(linksContainer.getBoundingClientRect());
  });
/*This code adds an event listener to the navToggle button. 
When the button is clicked, it checks the height of the linksContainer element 
using getBoundingClientRect(). 
If the height is 0, it sets the height of the container to the height of the links element. 
Otherwise, it sets the height to 0, effectively hiding the navigation links.*/


const navbar =document.getElementById("nav");
const topLink = document.querySelector('.top-link');
//These lines get references to the navbar and a "back to top" link.

// ********** fixed navbar ************
window.addEventListener("scroll", function () {
    const scrollHeight = window.pageYOffset;
    const navHeight = navbar.getBoundingClientRect().height;
    if (scrollHeight > navHeight) {
      navbar.classList.add("fixed-nav");
    } else {
      navbar.classList.remove("fixed-nav");
    }
    // setup back to top link
  
    if (scrollHeight > 500) {
      console.log("helo");
  
      topLink.classList.add("show-link");
    } else {
      topLink.classList.remove("show-link");
    }
  });
/*This code adds an event listener to the window object that listens for the "scroll" event.
When the user scrolls down, it checks the scroll height using window.pageYOffset
and the height of the navbar using getBoundingClientRect(). 
If the scroll height is greater than the navbar height, it adds a "fixed-nav" class to the navbar element,
which makes it stick to the top of the page. If the scroll height is greater than 500 pixels,
 it shows the "back to top" link by adding a "show-link" class to the element. 
 Otherwise, it hides the link.

*/
// ********** smooth scroll ************

// select links
const scrollLinks = document.querySelectorAll(".scroll-link");
scrollLinks.forEach((link) => {
  link.addEventListener("click", (e) => {
    // prevent default
    e.preventDefault();
    // navigate to specific spot
    const id = e.currentTarget.getAttribute("href").slice(1);
    const element = document.getElementById(id);

    const navHeight = navbar.getBoundingClientRect().height;
    const containerHeight = linksContainer.getBoundingClientRect().height;
    const fixedNav = navbar.classList.contains("fixed-nav");
    let position = element.offsetTop - navHeight;

    if (!fixedNav) {
      position = position - navHeight;
    }
    if (navHeight > 82) {
      position = position + containerHeight;
    }

    window.scrollTo({
      left: 0,
      top: position,
    });
    // close
    linksContainer.style.height = 0;
  });
});
// calculate heights

/*const scrollLinks = document.querySelectorAll('.scroll-link');: 
This line selects all elements with the class "scroll-link" 
and assigns them to the scrollLinks constant using the querySelectorAll() method.
scrollLinks.forEach(function(link){...});: 
This line loops through each element in the scrollLinks collection using the forEach() method and executes a function on each element. 
The function takes the current element as an argument and defines an event 
listener that listens for a click event on the element.
e.preventDefault();: This line prevents the default behavior of the click event, 
which is to navigate to the URL specified in the href attribute of the clicked link.
const id = e.currentTarget.getAttribute('href').slice(1);: 
This line gets the value of the href attribute of the clicked link, removes the "#"
 symbol from the beginning of the value using the slice() method, and assigns the resulting string to the id constant. 
 This value corresponds to the id attribute of the element that the link should scroll to.
const element = document.getElementById(id);: This line selects the element with the id value specified in the id constant
 using the getElementById() method and assigns it to the element constant.
const navHeight = navbar.getBoundingClientRect().height;: 
This line gets the height of the navbar using the getBoundingClientRect() method and assigns it to the navHeight constant.
const containerHeight = linksContainer.getBoundingClientRect().height;: 
This line gets the height of the links container using the getBoundingClientRect() method and assigns it to the containerHeight constant.
const fixedNav = navbar.classList.contains('fixed-nav');: 
This line checks whether the navbar has the "fixed-nav" class using the classList.contains() method and assigns the resulting Boolean value to the fixedNav constant.
let position = element.offsetTop - navHeight;: 
This line calculates the position of the element relative to the top of the page by subtracting the navbar height from the offsetTop value of the element, 
and assigns the resulting value to the position variable.
if (!fixedNav) {position = position - navHeight;}: 
This block of code adjusts the position variable if the navbar is not fixed by subtracting the navbar height from it again.
if (navHeight > 82) {position = position + containerHeight;}: 
This block of code adjusts the position variable if the navbar height is greater than 82 pixels by adding the container height to it.
window.scrollTo({left: 0, top: position,});: 
This line scrolls the page to the specified position*/
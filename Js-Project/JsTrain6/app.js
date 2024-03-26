// select modal-btn,modal-overlay,close-btn
// listen for click events on modal-btn and close-btn
// when user clicks modal-btn add .open-modal to modal-overlay
// when user clicks close-btn remove .open-modal from modal-overlay

const modalBtn = document.querySelector(".modal-btn");

const modal = document.querySelector(".modal-overlay");

const closeBtn = document.querySelector(".close-btn");

modalBtn.addEventListener("click",function(){
modal.classList.add("open-modal");   
});
closeBtn.addEventListener("click",function(){
modal.classList.remove("open-modal");
});

/*The code first selects three elements from the HTML document using the querySelector() method
and assigns them to the modalBtn, modal, and closeBtn variables, respectively.
modalBtn selects the button that opens the modal,
modal selects the overlay that contains the modal content, and closeBtn selects the button that closes the modal.

Next, an event listener is added to the modalBtn button using the addEventListener() method.
When the button is clicked, the open-modal class is added to the modal element using the classList.add() method,
which displays the modal content on the page.

Another event listener is added to the closeBtn button that removes the open-modal class from the modal element
when it is clicked using the classList.remove() method, which hides the modal content from the page.

Overall, this code provides a simple way to create a modal window on a web page with open and close buttons.*/
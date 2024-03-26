



const toggleBtn = document.querySelector  ('.sidebar-toggle');
const CloseBtn = document.querySelector  ('.close-btn');
const sidebar = document.querySelector  ('.sidebar');

toggleBtn.addEventListener('click', function(){

    //if (sidebar.classList.contains('show-sidebar')){

        //sidebar.classList.remove('show-sidebar')
   // }
    //else{
        //sidebar.classList.add('show-sidebar')
   // }

   sidebar.classList.toggle('show-sidebar');
});

CloseBtn.addEventListener('click' , function (){
    sidebar.classList.remove('show-sidebar')
});
/* This code creates a responsive sidebar on a web page that can be toggled on and off by clicking on a button with the class .sidebar-toggle.

The code first defines three variables using the querySelector() method to select the corresponding elements from the HTML document: toggleBtn selects the button that toggles the sidebar, colseBtn selects the button that closes the sidebar, and sidebar selects the sidebar itself.

Next, an event listener is added to the toggleBtn button using the addEventListener() method. When the button is clicked, the show-sidebar class is toggled on and off using the classList.toggle() method, which adds the class to the sidebar element if it is not already present, and removes it if it is.

Another event listener is added to the colseBtn button that removes the show-sidebar class from the sidebar element when it is clicked.

Overall, this code provides a simple way to add a responsive sidebar to a web page with toggle and close buttons*/
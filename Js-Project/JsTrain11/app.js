const btns = document.querySelectorAll('.tab-btn');
const about =  document.querySelector('.about');
const artical = document.querySelectorAll('.content');

about.addEventListener('click',function(e){
const id = e.target.dataset.id;
if(id){
    //remove active from all buttons 
    btns.forEach(function(btn){
        btn.classList.remove('active');
        e.target.classList.add('active');

    });
    // hide all the articals
    artical.forEach(function(art){
        art.classList.remove('active');
    })
    const element = document.getElementById(id);
    element.classList.add('active');

}

});
/*const btns = document.querySelectorAll('.tab-btn');: This line of code selects all the elements with the class name "tab-btn" and assigns them to a constant variable named "btns".

const about = document.querySelector('.about');: This line of code selects the first element with the class name "about" and assigns it to a constant variable named "about".

const artical = document.querySelectorAll('.content');: This line of code selects all the elements with the class name "content" and assigns them to a constant variable named "artical".

about.addEventListener('click',function(e){: This line of code adds a click event listener to the "about" element. When clicked, it will execute the function defined in the second argument.

const id = e.target.dataset.id;: This line of code gets the value of the "data-id" attribute of the clicked element and assigns it to a constant variable named "id".

if(id){: This line of code checks if the "id" variable is not empty.

btns.forEach(function(btn){: This line of code starts a loop that iterates through each element in the "btns" variable.

btn.classList.remove('active');: This line of code removes the "active" class from each element in the "btns" variable.

e.target.classList.add('active');: This line of code adds the "active" class to the clicked element.

artical.forEach(function(art){: This line of code starts a loop that iterates through each element in the "artical" variable.

art.classList.remove('active');: This line of code removes the "active" class from each element in the "artical" variable.

const element = document.getElementById(id);: This line of code selects the element with the "id" value that matches the "id" variable and assigns it to a constant variable named "element".

element.classList.add('active');: This line of code adds the "active" class to the selected element.

In summary, this code creates a tabbed interface where clicking on a tab button adds an "active" class to it and the corresponding content element, while removing the "active" class from all other tabs and their corresponding content elements.*/


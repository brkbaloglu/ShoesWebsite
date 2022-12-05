$(document).ready(function() {
    let menuBtn = document.querySelector('#menuBtn');
    let navbar = document.querySelector('.header .navbar');


    menuBtn.onclick = () => {
        menuBtn.classList.toggle('fa-times');
        navbar.classList.toggle('active');
    }


});
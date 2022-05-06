//nav bar variables
const menu = document.getElementById('mobile-menu');
const menuLinks = document.querySelector(".nav-links");


//----------------------- mobile nav bar ----------------------
menu.addEventListener("click", function () {
    menu.classList.toggle("is-active");
    menuLinks.classList.toggle("active");
});


//------------------------ Google Map ------------------------


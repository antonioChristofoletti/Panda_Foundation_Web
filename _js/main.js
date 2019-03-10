//Variables

let menuResponsive = document.querySelector(".header");
let buttonMenuResponsive = document.querySelector(".header__botao-menu");

//Headers configurations events

buttonMenuResponsive.addEventListener("click", clickButtonMenuResponsive);

//Functions

function clickButtonMenuResponsive(event){
    menuResponsive.classList.toggle("header--menu-closed");
}
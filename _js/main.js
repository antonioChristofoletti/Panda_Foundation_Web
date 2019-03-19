$(document).ready(function () {

    //Abrir e Fechar o Menu
    $(".header__botao-menu").click(function(){
        $(".header").toggleClass("header--menu-closed");
    });

    //Configurar o SLICK tela principal
    $(".works-to-future-item-slick").slick({
        arrows: true,
        dots: true,
        autoplay: true
    });

    //Configurar o Formulário
    $(".entre-contato__form").validate({
        rules:{
            "form-nome":{
                required: true
            }
        },
        messages:{
            "form-nome":{
                required: "O nome é obrigatório"
            }
        }
    });


}); 

// INTERACAO DO MENU COM JAVA SCRIPT PURO

/*//Variables

let menuResponsive = document.querySelector(".header");
let buttonMenuResponsive = document.querySelector(".header__botao-menu");

//Headers configurations events

buttonMenuResponsive.addEventListener("click", clickButtonMenuResponsive);

//Functions

function clickButtonMenuResponsive(event){
    menuResponsive.classList.toggle("header--menu-closed");
}*/
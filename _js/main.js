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
            "form-name":{
                required: true
            },

            "form-email":{
                required: true
            },

            "form-mensagem":{
                required: true,
                minlength: 10
            }
        },
        messages:{
            "form-name":{
                required: "O nome é obrigatório."
            },

            "form-email":{
                required: "O e-mail é obrigatório.",
                email: "O e-mail informado é inválido."
            },

            "form-mensagem":{
                required: "A mensagem é obrigatória.",
                minlength: "Necessário ao menos 10 caracteres para a mensagem."
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
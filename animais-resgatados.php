<?php 
    global $nomePagina;

    $nomePagina = "Animais Resgatados";

    include ("/_pageParts/headerHTML.php");
?>
  
   <main>
        
        <h1 class="title-header-bar title-header-bar--white title-header-bar--green-background">Animais Resgatados</h1>

        <div class="containerLimiter">
            <p class="short-paragraph short-paragraph--center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero ea, culpa labore omnis sed, libero ipsum vitae nisi ullam rerum, odit ducimus atque ipsam! Possimus molestiae quisquam quidem esse alias?</p>

            <p class="short-paragraph short-paragraph--center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero ea, culpa labore omnis sed, libero ipsum vitae nisi ullam rerum, odit ducimus atque ipsam! Possimus molestiae quisquam quidem esse alias?</p>

            <section class="animals-pictures-saved">
                <div class="animals-pictures-saved__item">
                    <a class="animals-pictures-saved__item__link" data-fancybox="gallery" href="_img/_animals-images/brown-bear.jpg">
                        <img class="animals-pictures-saved__item__img" src="_img/_animals-images/brown-bear.jpg" alt="">
                        <h1 class="animals-pictures-saved__item__title">Rock Springs / EUA</h1>
                    </a>
                </div>

                <div class="animals-pictures-saved__item">
                    <a class="animals-pictures-saved__item__link" data-fancybox="gallery" href="_img/_animals-images/panda.jpg">
                        <img class="animals-pictures-saved__item__img" src="_img/_animals-images/panda.jpg" alt="">
                        <h1 class="animals-pictures-saved__item__title">Pequim / China</h1>
                    </a>
                </div>

                <div class="animals-pictures-saved__item">
                    <a class="animals-pictures-saved__item__link" data-fancybox="gallery" href="_img/_animals-images/turtles.jpg">
                        <img class="animals-pictures-saved__item__img" src="_img/_animals-images/turtles.jpg" alt="">
                    </a>
                    <h1 class="animals-pictures-saved__item__title">Belo Horizonte / Brasil</h1>
                </div>

                <div class="animals-pictures-saved__item">
                    <a class="animals-pictures-saved__item__link" data-fancybox="gallery" href="_img/_animals-images/tiger.jpg">
                        <img class="animals-pictures-saved__item__img" src="_img/_animals-images/tiger.jpg" alt="">
                    </a>
                    <h1 class="animals-pictures-saved__item__title">Bangalore / Indía</h1>
                </div>

                <div class="animals-pictures-saved__item">
                    <a class="animals-pictures-saved__item__link" data-fancybox="gallery" href="_img/_animals-images/jaguar.jpg">
                        <img class="animals-pictures-saved__item__img" src="_img/_animals-images/jaguar.jpg" alt="">
                    </a>
                    <h1 class="animals-pictures-saved__item__title">Amazônia / Brasil</h1>
                </div>

                <div class="animals-pictures-saved__item">
                    <a class="animals-pictures-saved__item__link" data-fancybox="gallery" href="_img/_animals-images/blue-arara.jpg">
                        <img class="animals-pictures-saved__item__img" src="_img/_animals-images/blue-arara.jpg" alt="">
                    </a>
                    <h1 class="animals-pictures-saved__item__title">Amazônia / Brasil</h1>
                </div>
            </section>
        </div>

    </main>


<?php include ("/_pageParts/footerHTML.php") ?>
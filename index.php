<?php 
    global $nomePagina;

    $nomePagina = "";

    include ("/_pageParts/headerHTML.php");
?>
    
    <main>
        <header class="header-home">
            <hgroup class="header-home__text">
                <h1 class="header-home__text__title">Panda Foundation</h1>
                <h2 class="header-home__text__subtitle">Uma Fundação sem Fins Lucrativos</h2>
            </hgroup>
        </header>

        <h1 class="title-header-bar">Nossos Princípios</h1>
        
        <section class="our-works">
            <div class="containerLimiter">
                <div class="our-works-item">
                    <img class="our-works-item__image" src="_img/_index/teaching-nature.jpg" alt="">
                    <h1 class="our-works-item__title">Educação</h1>
                    <h2 class="our-works-item__subtitle">Realizamos investimentos em escolas e instituições de ensino para
                        instigar e conscientizar a sociedade como todo.789</h2>
                </div>

                <div class="our-works-item">
                    <img class="our-works-item__image" src="_img/_index/money-and-nature.jpg" alt="">
                    <h1 class="our-works-item__title">Desenvolvimento Sustentável</h1>
                    <h2 class="our-works-item__subtitle">A partir do avanço da tecnologia e da utilização de boas práticas
                        acreditamos que a coexistencia é possível</h2>
                </div>

                <div class="our-works-item">
                    <img class="our-works-item__image" src="_img/_index/grow-bamboo.jpg" alt="">
                    <h1 class="our-works-item__title">Reflorestamento</h1>
                    <h2 class="our-works-item__subtitle">Acreditamos que o reflorestamento é base do nosso trabalho. Os
                        pandas e outros animais tem perdido espaço por conta da agricultura e da expansão urbana.</h2>
                </div>
            </div>
        </section>
        
        <section class="animals-saved">
            <div class="containerLimiter">
                <h2 class="title-header-bar title-header-bar--white">Algumas das Nossas Conquistas</h2>

                <div class="animals-saved__item">
                    <img class="animals-saved__item__icon" src="_img/_index/panda.png" alt="">
                    <h2 class="animals-saved__item__description">Mais de 100 Pandas Salvos</h2>
                </div>

                <div class="animals-saved__item">
                    <img class="animals-saved__item__icon" src="_img/_index/brown-bear.png" alt="">
                    <h2 class="animals-saved__item__description">35 Ursos-Pardos Salvos</h2>
                </div>

                <div class="animals-saved__item">
                    <img class="animals-saved__item__icon" src="_img/_index/siberian-tiger.png" alt="">
                    <h2 class="animals-saved__item__description">27 Tigres Seberianos Salvos</h2>
                </div>
            </div>
        </section>

        <h1 class="title-header-bar">O que Esperamos para o Futuro</h1>

        <section class="works-to-future">
            <div class="containerLimiter">
                <div class="works-to-future-item-slick">
                    <div class="works-to-future__item">
                        <img class="works-to-future__item__img" src="_img/_works-to-future/ocean-polution.jpg" alt="">
                        <div class="works-to-future__item__texts">
                                <h1 class="works-to-future__item__texts__title">Pretendemos Atuar Futuramente em:</h1>
                                <p class="works-to-future__item__texts__subtitle">Proteção dos Nossos Oceanos</p>
                        </div>
                    </div>

                    <div class="works-to-future__item">
                        <img class="works-to-future__item__img" src="_img/_works-to-future/water-polution.JPG" alt="">
                        <div class="works-to-future__item__texts">
                                <h1 class="works-to-future__item__texts__title">Pretendemos Atuar Futuramente em:</h1>
                                <p class="works-to-future__item__texts__subtitle">Proteção das Fontes Hídricos</p>
                        </div>
                    </div>

                    <div class="works-to-future__item">
                        <img class="works-to-future__item__img" src="_img/_works-to-future/reduce-risk-disaster.jpg" alt="">
                        <div class="works-to-future__item__texts">
                                <h1 class="works-to-future__item__texts__title">Pretendemos Atuar Futuramente em:</h1>
                                <p class="works-to-future__item__texts__subtitle">Ações para a Redução de Riscos de Desastres</p>
                        </div>
                    </div>

                    <div class="works-to-future__item">
                        <img class="works-to-future__item__img" src="_img/_works-to-future/reduce-pollution.jpg" alt="">
                        <div class="works-to-future__item__texts">
                                <h1 class="works-to-future__item__texts__title">Pretendemos Atuar Futuramente em:</h1>
                                <p class="works-to-future__item__texts__subtitle">Ações para a Redução da Poluição</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="help-us">
            <button class="help-us__button">
                <a  class="help-us__button__link" href="https://www.patreon.com/" target="_blank">Ajudemos a continuar a salvar o mundo</a>
            </button>
        </section>

    </main>

<?php include ("/_pageParts/footerHTML.php") ?>
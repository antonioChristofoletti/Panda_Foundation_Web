<?php 
    global $nomePagina;
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="_sass/style.css">

    <title><?php echo $nomePagina == "" ? "Panda Foundation" : "Panda Foundation | " . $nomePagina ?></title>

</head>

<body>

    <header class="header header--menu-closed">
        <div class="containerLimiter">
            <?php if ($nomePagina == ""): ?>
                <h1 class="logo">Panda Foundation</h1>
            <?php else: ?>
                <a class="logo" href="index.php">Panda Foundation</a>
            <?php endif; ?>

            <button class="header__botao-menu">Menu do Botão</button>
            <nav class="header__menu">
                <ul class="header__menu__ul">
                    <li class="header__menu__ul__item <?php echo $nomePagina == "" ? "header__menu__ul__item--selected" : "" ?> "><a href="index.php">Home</a></li>
                    <li class="header__menu__ul__item <?php echo $nomePagina == "Animais Resgatados" ? "header__menu__ul__item--selected" : "" ?> "><a href="animais-resgatados.php">Animais Resgatados</a></li>
                    <li class="header__menu__ul__item <?php echo $nomePagina == "Sobre Nós" ? "header__menu__ul__item--selected" : "" ?> "><a href="sobre-nos.php">Sobre Nós</a></li>
                    <li class="header__menu__ul__item <?php echo $nomePagina == "Contato" ? "header__menu__ul__item--selected" : "" ?> "><a href="entre-contato.php">Entre em Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    
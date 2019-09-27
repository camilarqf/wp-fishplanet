<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Conheça mais sobre a história da FishPlanet">

    <meta property="og:type" content="website">
    <meta property="og:title" content="FishPlanet - Sobre nós">
    <meta property="og:description" content="Conheça mais sobre a história da FishPlanet">
    <meta property="og:url" content="htpp://camilarqf/fishplanet.github.io/sobre.html">
    <meta property="og:image" content="htpp://camilarqf/fishplanet.github.io/img/og-image.png">

    <link rel="shortcut icon" href="favicon.ico">

    <title><?php bloginfo('name'); ?> - Sobre nós</title>

    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="container">
            <a href="/fishplanet/home" class="grid-4"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_03.png" alt="Logo FishPlanet"></a>
            <nav class="menu grid-12">
                <?php
                $args = array(
                    'menu' => 'principal',
                    'theme_location' => 'menu-principal',
                    'container' => false
                );
                wp_nav_menu($args);
                ?>
            </nav>
            <!--menu grid-12-->
        </div>
        <!--container-->
    </header>
    <!--header-->
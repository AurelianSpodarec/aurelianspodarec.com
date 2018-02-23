<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta, Title, Styles, Scripts
    ================================================== -->
    <meta name="charset" content="UTF-8">
    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width" />
    <title>Webpack to WordPress Starter Theme</title>
    
    <!-- FONT AWESOME | REPLACE WITH NPM IF YOU WANT-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php wp_head(); ?> 

</head>
<body <?php body_class(); ?>>


    <header class="site-header">
    <div class="site-header__head">
    <div class="container site-header--relative-wrapper">


        <a class="site-header__logo" href="">Aurelian Spodarec</a>
        <button class="site-header__toggle-button">
            <span class="site-header--toggle-span"></span>
            <span class="site-header--toggle-span"></span>
            <span class="site-header--toggle-span"></span>
        </button>
        
        <div class="site-nav">
        <nav class="site-nav__main">
        <?php
            $args = [
                'theme_location' => 'main-menu',
                'container'      => 'ul',
                'menu_class'     => 'site-nav__list',
                'container_class' => 'custom-menu-class' ,
                'walker'        => new Primary_Walker_Nav_Menu()
            ];
            wp_nav_menu( $args ); 
        ?>  
        </nav>

        <footer class="site-nav__footer">
            <a href="">aurelianx@gmail.com</a>
            <p>07507 452 2524</p>
            <p>
                Developer,
                <br>
                Blogger,
                <br>
                Teacher,
                <br>
                Speaker
            </p>
            <p>&copy; Aurelian Spodarec</p>
        </footer>
        </div>

    </div><!-- /container -->
    </div><!-- /site-header__head -->
    </header>
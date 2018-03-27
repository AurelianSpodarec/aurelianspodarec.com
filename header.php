<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta, Title, Styles, Scripts
    ================================================== -->
    <meta name="charset" content="UTF-8">
    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width" />
    <title><?php  wp_title( '-', true, 'right' ) . bloginfo( 'name' ); ?></title>
    
    <!-- FONT AWESOME | REPLACE WITH NPM IF YOU WANT-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php wp_head(); ?> 

</head>
<body <?php body_class(); ?>>

    <?php 
        $user_id = 1;
    ?>

    <div class="loader">
    <div class="loader__bg"></div>

    <div class="loader__content">
        <div class="loader__main-cube">
            <div class="loader__cube--1 loader__cube"></div>
            <div class="loader__cube--2 loader__cube"></div>
            <div class="loader__cube--4 loader__cube"></div>
            <div class="loader__cube--3 loader__cube"></div>
        </div>
        <span class="loader__text" data-name="Loading">Loading...</span>
    </div>
    </div>

    <header class="site-header">
    <div class="site-header__head">
    <div class="container container--wider site-header--relative-wrapper">
    <div class="site-header__head--inner">

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
            <a href=""><?php the_field( 'contact_email', 'user_'.$user_id ); ?></a>
            <p><?php the_field( 'mobile_number', 'user_'.$user_id ); ?></p>
            <ul>
               <?php
                if( have_rows( 'word_block', 'user_'.$user_id ) ):
                    while ( have_rows('word_block', 'user_'.$user_id ) ) : the_row();
                ?>
                    <li><?php the_sub_field( 'word' ); ?></li>
                <?php endwhile; endif; ?>
            </ul>
            <p>&copy; Aurelian Spodarec</p>
        </footer>
        </div>

    </div>
    </div><!-- /container -->
    </div><!-- /site-header__head -->
    </header>

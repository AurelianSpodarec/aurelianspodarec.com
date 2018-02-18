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

    <div clas"overlay-nav"></div>

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
            <a href="">aurelinaxspodarec@gmail.com</a>
            <p>07507 452 2524</p>

            <p>&copy; Aurelian Spodarec</p>
        </footer>
        </div>

    </div><!-- /container -->
    </div><!-- /site-header__head -->
    </header>


    <section class="site-header--full site-header__img"  style="background-image: url('http://www.studyportals.com/wp-content/uploads/2016/03/home-office-336373.jpg');">
    <div class="main-showcase">
        <h3 class="main-showcase__super-header">Aurelian Spodarec</h3>
        <h1 class="main-showcase__super-subheader">Front-end WordPress Developer</h1>
        <hr class="main-showcase__super-hr">
        <h2 class="main-showcase__super-subheader-alt">Creating fenomenal high quality websites</h2>

        <a href="#services-section" class="scroll-down visible-el animated fadeInUp">Scroll down, to see more</a>
    </div>
   
  
    </section>

  <!--<section class="subpage-header site-header__img"   style="background-image: url('http://www.studyportals.com/wp-content/uploads/2016/03/home-office-336373.jpg');">
    <h1 class="subpage-header--title text-center highlighted negative subpage-header--alternate">
        <span>
            <?php the_title(); ?>
        </span>
    </h1>          
    </section> -->
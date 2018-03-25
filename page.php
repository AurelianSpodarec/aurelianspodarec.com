<?php get_header(); ?>


<!-- 

Header Main
Header Page
Contact Form
Empty Bar -> Intro

 -->

<?php 

if( have_rows('template_blocks') ):

    while ( have_rows('template_blocks') ) : the_row();

        if( get_row_layout() == 'header_page' ):
           get_template_part( 'templates/section', 'header-page' );

        elseif( get_row_layout() == 'header_main' ):
           get_template_part( 'templates/section', 'header-main' );

        elseif( get_row_layout() == 'services_excerpt' ):
           get_template_part( 'templates/section', 'services-excerpt' );

        elseif( get_row_layout() == 'standards' ):
           get_template_part( 'templates/section', 'standards' );

        elseif( get_row_layout() == 'bar_secondary' ):
           get_template_part( 'templates/section', 'bar-secondary' );

        elseif( get_row_layout() == 'process' ):
           get_template_part( 'templates/section', 'process' );

        elseif( get_row_layout() == 'intro' ):
           get_template_part( 'templates/section', 'intro' );

        elseif( get_row_layout() == 'contact_form' ):
           get_template_part( 'templates/section', 'contact-form' );

        elseif( get_row_layout() == 'callout' ):
           get_template_part( 'templates/section', 'callout' );

        elseif( get_row_layout() == 'portfolio_excerpt' ):
           get_template_part( 'templates/section', 'portfolio-excerpt' );

        elseif( get_row_layout() == 'services_card' ):
           get_template_part( 'templates/section', 'services-card' );

        elseif( get_row_layout() == 'about_author' ):
           get_template_part( 'templates/section', 'about-author' );

        elseif( get_row_layout() == 'work_featured' ):
           get_template_part( 'templates/section', 'work-featured' );

        elseif( get_row_layout() == 'work_all' ):
           get_template_part( 'templates/section', 'work-all' );

        elseif( get_row_layout() == 'action_block' ):
           get_template_part( 'templates/section', 'action-block' );

        elseif( get_row_layout() == 'about_excerpt' ):
           get_template_part( 'templates/section', 'about-excerpt' );
        endif;

    endwhile; endif;



// if( have_rows('template_blocks') ):
//      // loop through the rows of data
//     while ( have_rows('template_blocks') ) : the_row();
//         $layout_array = [
//             'header_page' => 'header-page',
//             'header_main' => 'header-main',
//             'services_excerpt' => 'services-excerpt'        
//         ];
//         $row_layout = get_row_layout();
//         $template_part = $get(layout_array[$row_layout], '');
        
//         get_template_part( 'templates/section', $template_part );
//     endwhile;

// else :

//     echo "NOT FOUND";

// endif;

?>


<?php get_footer(); ?>
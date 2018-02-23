<?php get_header(); ?>




<?php 

if( have_rows('template_blocks') ):

    while ( have_rows('template_blocks') ) : the_row();

        if( get_row_layout() == 'header_page' ):
           get_template_part( 'templates/section', 'header-page' );

        elseif( get_row_layout() == 'header_main' ):
           get_template_part( 'templates/section', 'header-main' );

        elseif( get_row_layout() == 'services_excerpt' ):
           get_template_part( 'templates/section', 'services-excerpt' );

       elseif( get_row_layout() == 'contact' ):
           get_template_part( 'templates/section', 'contact' );

        elseif( get_row_layout() == 'services_tabs' ):
           get_template_part( 'templates/section', 'services-tabs' );

        elseif( get_row_layout() == 'standards' ):
           get_template_part( 'templates/section', 'standards' );

        elseif( get_row_layout() == 'contact' ):
           get_template_part( 'templates/section', 'contact' );

        elseif( get_row_layout() == 'footer' ):
           get_template_part( 'templates/section', 'footer' );

        elseif( get_row_layout() == 'bar_secondary' ):
           get_template_part( 'templates/section', 'bar-secondary' );

       elseif( get_row_layout() == 'process' ):
           get_template_part( 'templates/section', 'process' );

       elseif( get_row_layout() == 'empty_bar' ):
           get_template_part( 'templates/section', 'empty-bar' );
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


<div>
    <h1>Page</h1>
</div>


<?php get_footer(); ?>
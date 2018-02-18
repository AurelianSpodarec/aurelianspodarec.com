<?php get_header(); ?>

<h2 class="highlighted header-alternative"><span>Doświadczenie</span></h2>
<h2 class="highlighted negative header-alternative"><span>KIM JESTEM?</span></h2>

<div>
	<h1>Page</h1>
</div>

<?php 
	
	if (have_rows('template_blocks')) {
		 while (have_rows('template_blocks')) {
      the_row();
      if (get_row_layout() == 'contact_section') {
       echo get_sub_field('test_field');
      } // end if anchor
    } // end whild have rows

	}

?>

<?php 
//   $anchors = array();
//   if (have_rows('template_blocks')) {
//     while (have_rows('template_blocks')) {
//       the_row();
//       if (get_row_layout() == 'contact_section') {
//         $anchors[] = get_sub_field('test_field');
//       } // end if anchor
//     } // end whild have rows
//   } // end if have rows
//   if (count($anchors)) {
    ?>
    <!--   <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php 
              foreach ($anchors as $anchor) {
                ?>
                  <a href="#<?php 
                      echo sanitize_title($anchor); ?>" class="btn btn--fancy"><?php 
                      echo $anchor; ?></a>
                <?php
              } // end foreach anchor
            ?>
          </div>
        </div>
      </div> -->
    <?php 
 // } // end if anchors
?>

<?php get_footer(); ?>
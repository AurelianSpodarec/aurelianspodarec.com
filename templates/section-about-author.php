<section class="section about">
<div class="container">

	<?php if( have_rows('about') ): 

	while( have_rows('about') ): the_row(); ?>


	<div class="row">
	<div class="about__author-img-wrap">
		<div class="about__author-img"  style="background-image: url('<?php the_sub_field('image'); ?>');"></div>
	</div>

	<div class="about__author-description">
		<h2><?php the_sub_field('title'); ?></h2>
		<h3><?php the_sub_field('subtitle'); ?></h3>

		<p class="lead"><?php the_sub_field('lead'); ?></p>
		<?php the_sub_field('bio'); ?>
	</div>
	</div>

	<?php endwhile; ?>
	
	<?php endif; ?>

</div>
</section>
<section class="section section--special action-block">

	<?php if( have_rows('action_one') ): 
		while( have_rows('action_one') ): the_row(); ?>

	<div class="action-block__box">
	<div class="action-block__box-content">

		<span class="action-block__box-title"><?php the_sub_field('title'); ?></span>
		<span class="action-block__box-description"><?php the_sub_field('description'); ?></span>
		<a class="action-block__box-button--project" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('button'); ?></a>

	</div>
	</div>
	<?php endwhile; endif; ?>
	

	<?php if( have_rows('action_two') ): 
		while( have_rows('action_two') ): the_row(); ?>

	<div class="action-block__box">
	<div class="action-block__box-content">

		<span class="action-block__box-title"><?php the_sub_field('title'); ?></span>
		<span class="action-block__box-description"><?php the_sub_field('description'); ?></span>
		<a class="action-block__box-button--process" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('button'); ?></a>

	</div>
	</div>
	
	<?php endwhile; endif; ?>

</section>
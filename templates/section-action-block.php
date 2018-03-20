<section class="action-block">

	<?php if( have_rows('action_one') ): 

	while( have_rows('action_one') ): the_row(); ?>

	<div class="action-block__box">
	<div class="action-block__box-content">


		<span class="action-block__box-title"><?php the_sub_field('title'); ?></span>
		<span class="action-block__box-description"><?php the_sub_field('description'); ?></span>
		<a class="action-block__box-button--project" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('button'); ?></a>

	</div>
	</div>
	<?php endwhile; ?>
	
	<?php endif; ?>

	<?php if( have_rows('action_two') ): 

	while( have_rows('action_two') ): the_row(); ?>

	<div class="action-block__box">
	<div class="action-block__box-content">


		<span class="action-block__box-title"><?php the_sub_field('title'); ?></span>
		<span class="action-block__box-description"><?php the_sub_field('description'); ?></span>
		<a class="action-block__box-button--process" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('button'); ?></a>

	</div>
	</div>
	<?php endwhile; ?>
	
	<?php endif; ?>

</section>
<!-- <section class="action-block">

	<div class="action-block__box">
	<div class="action-block__box-content">

		<span class="action-block__box-title">Tell me about your project</span>
		<span class="action-block__box-description">If you’re interested in hiring me for your next awesome project, don't hesitate to tell me about it, and let's get started!</span>
		<a class="action-block__box-button--project" href="">Share the details</a>

	</div>
	</div>

	<div class="action-block__box">
	<div class="action-block__box-content">

		<span class="action-block__box-title">How I work, the process</span>
		<span class="action-block__box-description">How will the work be done? I will give you a step by step guide, that will explain you how we'll work from the start to the end.</span>
		<a class="action-block__box-button--process" href="">View the process</a>
		
	</div>
	</div>

</section> -->
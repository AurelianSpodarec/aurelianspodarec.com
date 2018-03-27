<section class="section">
<div class="container container--wider">
<div class="row">


	 <?php
		$args = array( 
		  'post_type' => 'services'
		);

		$loop = new WP_Query( $args );
	?>
	

	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<article class="services-card">
	<a href="#">
	<div class="services-card__outer">

		<header class="services-card__header">
			<i class="services-card__icon <?php the_field('icon'); ?>"></i>
		</header>

		<section class="services-card__section">
			<h4 class="services-card__title"><?php the_title(); ?></h4>

			<p class="services-card__description">
			Utilising the latest technologies and trends we create websites better than your competitors.
			</p>

			<button class="services-card__link">Read More</button>
		</section>

	</div>
	</a>
	</article>
 	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>

</div>
</div>
</section>
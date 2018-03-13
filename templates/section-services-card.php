<section class="section">
<div class="container">
<div class="row">


	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article class="services-card">
	<a href="#">
	<div class="services-card__outer">

		<header class="services-card__header">
			<i class="services-card__icon fa fa-window-restore"></i>
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
 	<?php endwhile; else : ?>

	No the loop in taxonomy doesn't work

	<?php endif; ?>

</div>
</div>
</section>
<section class="section text-center">
<div class="container container--wider">
<div class="work-all__wrap">

  	
  <?php
		$args = array( 
		  'post_type' => 'projects'
		);

		$loop = new WP_Query( $args );
	?>
	

	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<article class="work-all__item">
	<a href="<?php the_permalink(); ?>">

		<div class="work-all__image" style="background-image: url(http://mattolpinski.com/wp-content/uploads/2017/01/informanalytics-thumb.jpg);">
		<span class="work-all__overlay">
			<span class="work-all__btn-case-study">View Case Study</span>
		</span>
		</div>

		<div class="work-all__metadata">
			<h3 class="work-all__title"><?php the_title(); ?></h3>
			<p class="work-all__type">Learning languages with others</p>
		</div>

	</a>
	</article>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>

</div>
</div>
</section>
<section class="section about-excerpt">
<div class="container">
<div class="row">

	<div class="about-excerpt__info">
		<h2><?php the_sub_field('title'); ?></h2>
		<h3><?php the_sub_field('subtitle'); ?></h3>
		<p><?php the_sub_field('excerpt'); ?></p>

		<a class="btn" href="<?php the_sub_field('link'); ?>">Read More</a>
	</div>

	<div class="about-excerpt__author-img-wrap">
		<div class="about-excerpt__author-img"  style="background-image: url('<?php the_sub_field('image'); ?>');"></div>
	</div>
	 
</div>
</div>
</section>
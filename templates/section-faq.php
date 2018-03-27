<section class="section section-text-block">
<div class="container container--small">

	<?php if( have_rows('faq_content') ):
		    while ( have_rows('faq_content') ) : the_row(); ?>

		<div class="faq">
		<ol>
		<li>
			<span class="faq__q-wrap"><?php the_sub_field( 'question' ); ?></span>
			<span class="faq__a-wrap"><?php the_sub_field( 'answer' ); ?> </span>
		</li>
		</ol>
		</div>

	<?php endwhile; endif; ?>

</div>
</section>
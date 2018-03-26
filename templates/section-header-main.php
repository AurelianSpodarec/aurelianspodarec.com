<section class="site-header--full site-header__img js-parallax"  data-parallax-speed="0.4" style="background-image: url(<?php the_sub_field('background_image'); ?>);">
<div class="site-header__overlay"></div>

<div class="main-showcase js-parallax" data-parallax-speed="0.4">
<div class="main-showcase__inner">

    <h3 class="main-showcase__super-header"><?php the_sub_field('super_title') ?></h3>
    <h1 class="main-showcase__super-subheader"><?php the_sub_field('super_subtitle'); ?></h1>
    <hr class="main-showcase__super-hr">

    <?php if( have_rows('action_buttons') ):
        while ( have_rows('action_buttons') ) : the_row(); ?>

    <a class="btn btn--primary btn--alt" href="<?php the_sub_field('action_button_link'); ?>"><?php the_sub_field('action_button'); ?></a>

    <?php endwhile; endif; ?>


    <?php if( get_sub_field('enable_scroll_btn') ): ?>
    <a href="#intro" class="scroll-down visible-el animated fadeInUp">Scroll down, to see more</a>
    <?php endif; ?>
</div>

</div>
</section>
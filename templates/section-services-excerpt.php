<section class="section section--special service-excerpt">
<div class="service-excerpt__wrap">

    <?php if( have_rows('service_block_one') ): 
        while( have_rows('service_block_one') ): the_row(); ?>
    <a href="<?php the_sub_field('link'); ?>" class="service-excerpt__item" style="background-image: url('<?php the_sub_field('background_image'); ?>');">

        <div class="service-excerpt__content">
            <h2 class="service-excerpt__title"><?php the_sub_field('title'); ?></h2>
            <button class="service-excerpt__btn">View</button>
        </div>

        <div class="service-excerpt__overlay"></div>

    </a>
    <?php endwhile; endif;?>
    

    <?php if( have_rows('service_block_two') ): 
        while( have_rows('service_block_two') ): the_row(); ?>

    <a href="<?php the_sub_field('link'); ?>" class="service-excerpt__item" style="background-image: url('<?php the_sub_field('background_image'); ?>');">

        <div class="service-excerpt__content">
            <h2 class="service-excerpt__title"><?php the_sub_field('title'); ?></h2>
            <button class="service-excerpt__btn">View</button>
        </div>

        <div class="service-excerpt__overlay"></div>

    </a>
    <?php endwhile; endif;?>

    <?php if( have_rows('service_block_three') ): 
        while( have_rows('service_block_three') ): the_row(); ?>
    <a href="<?php the_sub_field('link'); ?>" class="service-excerpt__item" style="background-image: url('<?php the_sub_field('background_image'); ?>');">

        <div class="service-excerpt__content">
            <h2 class="service-excerpt__title"><?php the_sub_field('title'); ?></h2>
            <button class="service-excerpt__btn">View</button>
        </div>

        <div class="service-excerpt__overlay"></div>

    </a>
    <?php endwhile; endif;?>
    
</div>
</section>
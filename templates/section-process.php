<?php 
	if( have_rows('stages') ): $i = 0;
	$counter = 0;
	while( have_rows('stages') ): the_row(); $i++;
	$number = "0$i";

?>

<?php if ($counter % 2 === 0) :?>
<section class="section section--special process" style="background-image: url('<?php the_sub_field('image'); ?>');">

<div class="process__overlay"></div>

<div class="container">

	<div class="process__outer">
	<div class="process__inner">

		<h2><div class="process__step-number"><?php echo $number; ?></div></h2>
		<h3><?php the_sub_field('title'); ?></h3>

		<section>
		<p>
			<?php the_sub_field('description'); ?>
		</p>
		</section>

	</div>
	</div>

</div>
</section>
<?php else: ?>

<section class="section section--special process process--alt" style="background-image: url('<?php the_sub_field('image'); ?>');">
<div class="process__overlay process__overlay--alt"></div>	
<div class="container">

	<div class="process__outer">
	<div class="process__inner process__inner--alt">

		<h2><div class="process__step-number"><?php echo $number; ?></div></h2>
		<h3><?php the_sub_field('title'); ?></h3>

		<section>
		<p>
			<?php the_sub_field('description'); ?>
		</p>
		</section>

	</div>
	</div>

</div>
</section>

<?php endif; ?>


<?php 
	$counter++;
	endwhile; 
	endif; 
?>
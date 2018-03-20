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

<!-- <section class="section section--special process process--alt" style="background-image: url('https://images.pexels.com/photos/450278/pexels-photo-450278.jpeg?w=940&h=650&auto=compress&cs=tinysrgb');">
<div class="process__overlay process__overlay--alt"></div>	
<div class="container">

	<div class="process__outer">
	<div class="process__inner process__inner--alt">

		<h2><div class="process__step-number">02</div></h2>
		<h3>Planning & Preparing</h3>

		<section>
		<p>
			We will stay organized by using a web-based service Trello. It will show you on what needs to be done, what has to be done, what I’m currently working on, and add notes on whatever you want.
		</p>
		</section>

	</div>
	</div>

</div>
</section> -->

<?php 
	$counter++;
	endwhile; 
	endif; 
?>

<!-- <section class="section section--special process" style="background-image: url('https://images.pexels.com/photos/416405/pexels-photo-416405.jpeg?h=350&auto=compress&cs=tinysrgb');"> -->
	<!-- or: https://images.pexels.com/photos/240223/pexels-photo-240223.jpeg?h=350&auto=compress&cs=tinysrgb -->
<!-- <div class="process__overlay"></div>	
<div class="container">

	<div class="process__outer">
	<div class="process__inner">

		<h2><div class="process__step-number">01</div></h2>
		<h3>Brainstorm & Briefing</h3>

		<section>
		<p>
			This is where I understand the project at hand and the brief in more detail. 
			I believe it’s fundamental to get to know you and your idea, so the process can run smoothly.
		</p>
		</section>

	</div>
	</div>

</div>
</section>

<section class="section section--special process process--alt" style="background-image: url('https://images.pexels.com/photos/450278/pexels-photo-450278.jpeg?w=940&h=650&auto=compress&cs=tinysrgb');">
<div class="process__overlay process__overlay--alt"></div>	
<div class="container">

	<div class="process__outer">
	<div class="process__inner process__inner--alt">

		<h2><div class="process__step-number">02</div></h2>
		<h3>Planning & Preparing</h3>

		<section>
		<p>
			We will stay organized by using a web-based service Trello. It will show you on what needs to be done, what has to be done, what I’m currently working on, and add notes on whatever you want.
		</p>
		</section>

	</div>
	</div>

</div>
</section>

<section class="section section--special process" style="background-image: url('https://images.pexels.com/photos/574071/pexels-photo-574071.jpeg?h=350&auto=compress&cs=tinysrgb');">
<div class="process__overlay"></div>	
<div class="container">

	<div class="process__outer">
	<div class="process__inner">

		<h2><div class="process__step-number">03</div></h2>
		<h3>Development</h3>

		<section>
		<p>
			This is the stage where I will deliver the build and construction of your website. I will regularly test and use my experience of agile methodologies to make sure your project is properly coded, feels and performs at maximum capacity.
		</p>
		</section>

	</div>
	</div>

</div>
</section>

<section class="section section--special process process--alt" style="background-image: url('https://images.pexels.com/photos/7096/people-woman-coffee-meeting.jpg?w=940&h=650&auto=compress&cs=tinysrgb');">
<div class="process__overlay process__overlay--alt"></div>	
<div class="container">

	<div class="process__outer">
	<div class="process__inner process__inner--alt">

		<h2><div class="process__step-number">04</div></h2>
		<h3>Results & Retention</h3>

		<section>
		<p>
			This is the time where I will be looking if there’s anything I can make even better. Make sure that everything is performing at maximum capacity and getting the intended results you require.
		</p>
		</section>

	</div>
	</div>

</div>
</section> -->


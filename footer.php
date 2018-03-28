	<footer class="footer-main">
	<div class="container container--wider">
	<div class="footer-main__outer">


	    <div class="footer-main__top">
	    <div class="footer-main__row">

	        <div class="footer-main__top--col">
	        <a href="" class="footer-main__top-logo">Aurelian S</a>
	        </div>

	        <div class="footer-main__top--col">
	        <ul class="footer-main__top-contact-list">
	            <li>
	            <a href="tel:<?php the_field('mobile_number', 'user_1'); ?>">
	                <i class="fa fa-phone" aria-hidden="true"></i>
	                <span>Mobile</span>
	            </a>
	            </li>
	            <li>
	            <a  href="mailto:<?php the_field('contact_email', 'user_1'); ?>">
	                <i class="fa fa-envelope" aria-hidden="true"></i>
	                <span>Email Me</span>
	            </a>
	            </li>
	        </ul>
	        </div>

	    </div>
	    </div>

	    <hr>

	    <div class="footer-main__bottom">
	    <div class="footer-main__row">

	        <div class="footer-main__bottom--col footer-main__copyright">
	            <p>&copy; Aurelian Spodarec <?php echo date("Y"); ?>. All rights reserved</p>
	        </div>

	        <div class="footer-main__bottom--col">

			    <?php
		            $args = [
		                'theme_location' => 'footer-menu',
		                'container'      => 'ul',
		                'menu_class'     => 'footer-main__bottom-links',
		                'container_class' => 'custom-menu-class' ,
		            ];
		            wp_nav_menu( $args ); 
		        ?>  

	        </div>

	    </div>
	    </div>


	</div>
	</div>
	</footer>


	<?php wp_footer(); ?>

</body>
</html>
const css = require('../scss/app.scss');



window.onload = function() {

 

	// MAIN NAVIGATION MENU TOGGLE
	var siteNav = document.querySelector(".site-nav");
	var siteHamburger = document.querySelector(".site-header__toggle-button");

	function toggleMainMenu() {		
		siteNav.classList.toggle("is-active");
		siteHamburger.classList.toggle("is-active");
	}

	siteHamburger.addEventListener('click', toggleMainMenu, false);



	// MAIN NAVIGATION STICKY
	var siteHeader = document.querySelector('.site-header'),
	    siteHeaderHeight = siteHeader.offsetHeight,
	    prevScroll = 0;
	
	function stickyNav(e) {
		if (window.scrollY >= siteHeaderHeight) {
			siteHeader.classList.add('is-sticky');
		} else{
      		siteHeader.classList.remove('is-sticky');
    	}
	}

	function showNav(e) {
 
		var currentScroll = window.pageYOffset;
		console.log(currentScroll);

		if(currentScroll < prevScroll) {
			siteHeader.classList.add('sticky-show');
		} else {
			siteHeader.classList.remove('sticky-show');
		}
    
    	prevScroll = currentScroll;
	}

	window.addEventListener('scroll', showNav);
	window.addEventListener('scroll', stickyNav);


}
const css = require('../scss/app.scss');

var body = document.querySelector('body');

window.addEventListener('load', function(){
  body.classList.add('-loaded');
})

window.onload = function() {

 	


// function parallaxEffect() {
// 	var scroll = window.pageYOffset; 
// 	parallax.style.transform = 'translate3d(0, ' + scroll * .2 +'px,0)';
// }
  
// window.addEventListener('scroll', parallaxEffect);
  
	var parallax = document.getElementsByClassName('js-parallax')[0];
	var xScrollPosition;
    var yScrollPosition;

 	function setTranslate(xPos, yPos, el) {
        el.style.transform = "translate3d(" + xPos + ", " + yPos + "px, 0)";
    }
   
    function scrollLoop() {
        xScrollPosition = window.scrollX;
        yScrollPosition = window.scrollY;
 
        setTranslate(0, yScrollPosition * -0.2, parallax);

    }
 	window.addEventListener("scroll", scrollLoop, false);



  var parallax = document.getElementsByClassName('js-parallax');
  var xScrollPosition;
  var yScrollPosition;

 	function setTranslate(xPos, yPos, el) {
        el.style.transform = "translate3d(" + xPos + ", " + yPos + "px, 0)";
    }
   
 
	function scrollLoop() {
    	xScrollPosition = window.scrollX;
     	yScrollPosition = window.scrollY;
        document.querySelectorAll('.js-parallax').forEach(function (parallax) {
          return setTranslate(0, scrollY * parallax.dataset.parallaxSpeed, parallax);
        });
    
 	}
 	window.addEventListener("scroll", scrollLoop, false);




  	//TABS

	// Variables 	
  // var tabLinks = document.querySelectorAll('.services-tab__link-item');
  // var tabContents = document.querySelectorAll('.services-tab__tab-item');

  // // Loop through the tab link
  // for (var i = 0; i < tabLinks.length; i++) {
  //   tabLinks[i].addEventListener('click', function(e) {
  //     var id = this.hash.replace('#', '');

  //     // Loop through the tab content
  //     for (var j = 0; j < tabContents.length; j++) {
		// var tabContent = tabContents[j];
  //       tabContent.classList.remove('is-visible');
  //       tabLinks[j].classList.remove('is-active');
  //       if (tabContent.id === id) {
  //         tabContent.classList.add('is-visible');
  //       }
  //     }
			
  //     this.classList.add('is-active');
  //   });
  // }





	// MAIN NAVIGATION MENU TOGGLE
	var siteNav = document.querySelector(".site-nav"),
		siteHamburger = document.querySelector(".site-header__toggle-button"),
		overlayDiv	= document.createElement('div'),
		menuOverlay = document.createElement('div');
		menuOverlay.className = 'overlay';

	 function openMenu() {
        siteNav.classList.add('is-active');
        siteHamburger.classList.add('is-active');
        document.body.appendChild(menuOverlay);
    }

    function closeMenu() {
        document.body.removeChild(menuOverlay);
        siteNav.classList.remove("is-active");
        siteHamburger.classList.remove("is-active");
    }

    function toggle() {

	    if(siteNav.classList.contains("is-active")) {
	        return closeMenu();
	    }

	    return openMenu();
	}

	siteHamburger.addEventListener('click', toggle, false);
	menuOverlay.addEventListener('click', closeMenu, false);


	// MAIN NAVIGATION STICKY
	var siteHeader = document.querySelector('.site-header'),
	    siteHeaderHeight = siteHeader.offsetHeight,
	    prevScroll = 0;
	
	function stickyNav(e) {
		if(siteNav.classList.contains("is-active")) {
	        return;
	    }
		if (window.scrollY >= siteHeaderHeight) {
			siteHeader.classList.add('is-sticky');
		} else{
      		siteHeader.classList.remove('is-sticky');
    	}
	}

	function showNav(e) {

		if(siteNav.classList.contains("is-active")) {
	        return;
	    }
		var currentScroll = window.pageYOffset;

		if(currentScroll < prevScroll) {
			siteHeader.classList.add('sticky-show');
		} else {
			siteHeader.classList.remove('sticky-show');
		}
    
    	prevScroll = currentScroll;
	}

	window.addEventListener('scroll', showNav);
	window.addEventListener('scroll', stickyNav);


	// Main Showcase
	// var mainShowcaseSpHeader = document.querySelector('.main-showcase__super-header'),
	// 	mainShowcaseSpSubHeader = document.querySelector('.main-showcase__super-subheader'),
	// 	mainShowcaseSpHr = document.querySelector('.main-showcase__super-hr'),
	// 	mainShowCaseSpSubHeaderAlt = document.querySelector('.main-showcase__super-subheader-alt');


	// function transitionText() {

	// 	var scroll = window.pageYOffset; 

	// 	mainShowcaseSpHeader.style.opacity = "1";
		
	// 	// mainShowcaseSpSubHeader.style.opacity = "1";
	// 	// mainShowcaseSpHr.style.opacity = "1";
	// 	// mainShowCaseSpSubHeaderAlt.style.opacity = "1";

	// 	mainShowcaseSpHeader.style.transform = "translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d( "+ scroll .2+",  1,  1)";
	// 	mainShowcaseSpHeader.style.opacity = "0";

	// }

	// window.addEventListener('scroll', transitionText, false);






}
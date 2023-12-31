(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	var carousel = function() {
		$('.featured-carousel').owlCarousel({
	    loop: true,
	    autoplay: true,
	    margin:30,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    nav:true,
	    dots: true,
	    autoplayHoverPause: false,
	    items: 1,
	    navText : ["<span class='ion-ios-arrow-back'></span>","<span class='ion-ios-arrow-forward'></span>"],
	    responsive:{
	      0:{
	        items:1
	      },
	      600:{
	        items:2
	      },
	      1000:{
	        items:4
	      }
	    }
		});

	};
	carousel();

})(jQuery);



$('.brand-carousel').owlCarousel({
	loop:true,
	margin:10,
	autoplay:true,
	autoplayTimeout: 5000,
	  slideTransition: 'linear',
	  autoplaySpeed: 5000,
	  autoplayHoverPause: true,
	responsive:{
	  0:{
		items:1
	  },
	  600:{
		items:3
	  },
	  1000:{
		items:4
	  }
	}
  })
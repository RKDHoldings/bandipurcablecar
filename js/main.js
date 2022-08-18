$(function() {

	$('.owl-1').owlCarousel({

    loop:true,
    margin:0,
    nav:true,
    items: 1,
    smartSpeed: 3000,
    autoplay: false,
    pauseOnHover: false,
    navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
	})

	
})

  
  
    //
    // // progress bar
    // document.addEventListener("DOMContentLoaded", function(){
  
    //   var progressBar = document.querySelectorAll(".progress-bar");
    //   const time = 1500;
      
    //   function calculateTime(time, dataCount) {
    //     return time/dataCount;
    //   }
      
    //   progressBar.forEach(function(i){
    //     let count = 0;
    //     let label = i.children[0];
    //     let line = i.children[1];
        
    //     let dataCount = label.getAttribute("data-count");
    //     let lineCount = line.children[0];
        
    //     let value = line.style.width.substr(0,line.style.width.length - 2) / 100;
    //     let runTime = calculateTime(time, dataCount);
        
    //     let animationLineCount = setInterval(function(){
          
    //       if(count < dataCount){
    //         count ++;
    //         label.innerHTML = count + "%";
    //         lineCount.style.width = count*value + "px";
    //       }
          
    //     },runTime)
        
    //     console.log(value);
    //   });  
    // });

    // lightbox

    $(document).ready(function() {
   $('.zoom-gallery').magnificPopup({
     delegate: 'a',
     type: 'image',
     closeOnContentClick: false,
     closeBtnInside: false,
     mainClass: 'mfp-with-zoom mfp-img-mobile',
     image: {
       verticalFit: true,
       titleSrc: function(item) {
         return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
       }
     },
     gallery: {
       enabled: true
     },
     zoom: {
       enabled: true,
       duration: 300, // don't foget to change the duration also in CSS
       opener: function(element) {
         return element.find('img');
       }
     }
     
   });
 });
 
  

  $(document).ready(function() {
	
    setTimeout(function(){
      $('body').addClass('loaded');
      $('h1').css('color','#222222');
    }, 900);
    
  });
	


  // home page
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
    // marquee
//     const root = document.documentElement;
// const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
// const marqueeContent = document.querySelector("ul.marquee-content");

// root.style.setProperty("--marquee-elements", marqueeContent.children.length);

// for(let i=0; i<marqueeElementsDisplayed; i++) {
//   marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
// }
// $(document).ready(function() {
//     $(window).load(function() {
//         function Preloader() {
//             var preloader = $ ('.preloader');
//             preloader.delay(1000) .fadeOut (500);
//         }
//         if ( ! sessionStorage.getItem( 'doNotShow' ) ) {
//             sessionStorage.setItem( 'doNotShow', 'true' );
//             Preloader();
//         } else {
//            $ (' .preloader').hide();
//         }
//     });
// });

$(function () {
		
	var filterList = {
	
		init: function () {
		
			// MixItUp plugin
			// http://mixitup.io
			$('#portfoliolist').mixItUp({
				selectors: {
  			  target: '.portfolio',
  			  filter: '.filter'	
  		  },
  		  load: {
    		  filter: 'all' // show app tab on first load
    		}     
			});								
		
		}

	};
	
	// Run the show!
	filterList.init();
	
});		
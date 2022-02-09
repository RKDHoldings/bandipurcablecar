$(function() {

	$('.owl-1').owlCarousel({

    loop:true,
    margin:0,
    nav:true,
    items: 1,
    smartSpeed: 1000,
    autoplay: true,
    pauseOnHover: false,
    navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
	})

	
})

	// (function($) {

  //       "use strict";
    
  //       var fullHeight = function() {
    
  //           $('.js-fullheight').css('height', $(window).height());
  //           $(window).resize(function(){
  //               $('.js-fullheight').css('height', $(window).height());
  //           });
    
  //       };
  //       fullHeight();
    
  //       var carousel = function() {
  //           $('.featured-carousel').owlCarousel({
  //           loop: true,
  //           autoplay: true,
  //           margin:30,
  //           animateOut: 'fadeOut',
  //           animateIn: 'fadeIn',
  //           nav:true,
  //           dots: true,
  //           autoplayHoverPause: false,
  //           items: 1,
  //           navText : ["<span class='ion-ios-arrow-back'></span>","<span class='ion-ios-arrow-forward'></span>"],
  //           responsive:{
  //             0:{
  //               items:1
  //             },
  //             600:{
  //               items:2
  //             },
  //             1000:{
  //               items:4
  //             }
  //           }
  //           });
    
  //       };
  //       carousel();
    
  //   })(jQuery);
    
  


    // (function($) {

    //   "use strict";
    
    //   var fullHeight = function() {
    
    //     $('.js-fullheight').css('height', $(window).height());
    //     $(window).resize(function(){
    //       $('.js-fullheight').css('height', $(window).height());
    //     });
    
    //   };
    //   fullHeight();
    
    //   var carousel = function() {
    //     $('.featured-carousel').owlCarousel({
    //       loop: true,
    //       autoplay: true,
    //       margin:30,
    //       animateOut: 'fadeOut',
    //       animateIn: 'fadeIn',
    //       nav:true,
    //       dots: true,
    //       autoplayHoverPause: false,
    //       items: 1,
    //       navText : ["<span class='ion-ios-arrow-back'></span>","<span class='ion-ios-arrow-forward'></span>"],
    //       responsive:{
    //         0:{
    //           items:1
    //         },
    //         600:{
    //           items:2
    //         },
    //         1000:{
    //           items:4
    //         }
    //       }
    //     });
    
    //   };
    //   carousel();
    
    // })(jQuery);
    
    
    
    // $('.brand-carousel').owlCarousel({
    //   loop:true,
    //   margin:10,
    //   autoplay:true,
    //   autoplayTimeout: 5000,
    //     slideTransition: 'linear',
    //     autoplaySpeed: 5000,
    //     autoplayHoverPause: true,
    //   responsive:{
    //     0:{
    //     items:1
    //     },
    //     600:{
    //     items:3
    //     },
    //     1000:{
    //     items:4
    //     }
    //   }
    //   })
    //
    // progress bar
    document.addEventListener("DOMContentLoaded", function(){
  
      var progressBar = document.querySelectorAll(".progress-bar");
      const time = 1500;
      
      function calculateTime(time, dataCount) {
        return time/dataCount;
      }
      
      progressBar.forEach(function(i){
        let count = 0;
        let label = i.children[0];
        let line = i.children[1];
        
        let dataCount = label.getAttribute("data-count");
        let lineCount = line.children[0];
        
        let value = line.style.width.substr(0,line.style.width.length - 2) / 100;
        let runTime = calculateTime(time, dataCount);
        
        let animationLineCount = setInterval(function(){
          
          if(count < dataCount){
            count ++;
            label.innerHTML = count + "%";
            lineCount.style.width = count*value + "px";
          }
          
        },runTime)
        
        console.log(value);
      });  
    });
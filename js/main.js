$(function() {

	$('.owl-1').owlCarousel({

    loop:true,
    margin:0,
    nav:true,
    items: 1,
    smartSpeed: 3000,
    autoplay: true,
    pauseOnHover: false,
    navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
	})

	
})

  

  
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
 
  // pop up modal
  $(window).on('load',function(){
    $('.popup-wrap').fadeIn(500);
  });

  $(document).ready(function() {
    $('.popup-btn').click(function(e) {
      $('.popup-wrap').fadeIn(500);
      $('.popup-box').removeClass('transform-out').addClass('transform-in');
      $('.popup-boxtwo').removeClass('transform-out').addClass('transform-in');
      $('body').css('overflow', 'hidden');
      e.preventDefault();
    });
  
    $('.popup-close').click(function(e) {
      $('.popup-wrap').fadeOut(500);
      $('.popup-box').removeClass('transform-in').addClass('transform-out');
      $('.popup-boxtwo').removeClass('transform-in').addClass('transform-out');

  
      e.preventDefault();
    });
  });

  // prevent body scroll when modal opened
 
//   $('.popup-wrap').modal().on('shown', function(){
//     $('body').css('overflow', 'hidden');
// }).on('hidden', function(){
//     $('body').css('overflow', 'auto');
// })

  // hide nav on scroll
  // document.addEventListener("DOMContentLoaded", function(){
		
	// 	el_autohide = document.querySelector('.autohide');
		
	
	// 	header_area_height = document.querySelector('.header_area').offsetHeight;
	// 	document.body.style.paddingTop = header_area_height + 'px';

	// 	if(el_autohide){
			
	// 		var last_scroll_top = 0;
	// 		window.addEventListener('scroll', function() {
	//        		let scroll_top = window.scrollY;
	// 	       if(scroll_top < last_scroll_top) {
	// 	            el_autohide.classList.remove('scrolled-down');
	// 	            el_autohide.classList.add('scrolled-up');
	// 	        }
	// 	        else {
	// 	            el_autohide.classList.remove('scrolled-up');
	// 	            el_autohide.classList.add('scrolled-down');
	// 	        }
	// 	        last_scroll_top = scroll_top;

	// 		}); 
		

	// 	}
	
		
	// }); 
  $(document).ready(function() {
	
    setTimeout(function(){
      $('body').addClass('loaded');
      $('h1').css('color','#222222');
    }, 3000);
    
  });
	
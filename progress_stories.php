
<?php
 include('includes/html_header.php');
 ?>
 <?php
 include('includes/navbar.php');
 ?>
  <!-- banner -->
 <section id="breadcrumb">
         <div class="bg-overlay pt-opacity4" style="background-image: url('img/hero_12.jpg');"></div>
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h2 class="breadcrumb-title">progress stories</h2>
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">who we are</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
</section>

<!-- project progress -->
<section id="project_process">
   <div class="container">
        <div class="row">
               <h6>process stories</h6>
              <h2 class="section-title">  Our project process   </h2>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, maiores delectus molestias laborum suscipit a, voluptate beatae ab, sapiente aspernatur minus aut explicabo consectetur nemo facere recusandae consequatur corrupti molestiae!</p> -->
                 <!-- progress bar for project process -->
           </div>
        <div class="project_process row">
             
        <div class="progress-bar position"></div>
        <h3>Queen Tower</h3>
      	<div class="progress-bar position" data-percent="65" data-duration="1000" data-color="#ccc,yellow"></div>
        <h3>Bandipur Cablecar</h3>
       	<div class="progress-bar position" data-percent="25" data-color="#a456b1,#12b321"></div> 
         <h3>Restro Zone</h3>                     
       </div>  
        <!-- row end -->
    
      </div>
    <!-- container end -->
</section>
<section id="features_cablecar">
   <div class="container">
        <div class="row">
            <!-- <h2 class="section-title">Special features of bandipur cablecar</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime sed doloribus cupiditate at dolore ducimus rem. Officiis quod ea laboriosam veniam assumenda corrupti, cumque reiciendis tenetur dolores temporibus eaque possimus.</p> -->
               <div class="col-lg-4">
                    <div class="content_bandipur">
                       <a href="" target="_blank">
                              <div class="content-overlay"></div>
                              <img class="content-image " src="img/hero_1.webp" >
                              <!-- <a class= "lightbox-close" href= "#">X</a> -->
                              <div class="content-details fadeIn-left">
                                <h3>Transparent Cablecar</h3>
                                <!-- <p>This is a short description</p> -->
                              </div>
                       </a>
                    </div>
               </div>
               <div class="col-lg-4">
                    <div class="content_bandipur">
                       <a href="" target="_blank">
                              <div class="content-overlay"></div>
                              <img class="content-image" src="img/features/queen-tower.png">
                              <div class="content-details fadeIn-left">
                                <h3>4 Star Queen Tower</h3>
                                <!-- <p>This is a short description</p> -->
                              </div>
                       </a>
                    </div>
               </div>
               <div class="col-lg-4">
                    <div class="content_bandipur">
                       <a href="" target="_blank">
                              <div class="content-overlay"></div>
                              <img class="content-image" src="img/features/3d-cover.jpeg">
                              <div class="content-details fadeIn-left">
                                <h3>Cablecar Restro Zone</h3>
                                <!-- <p>This is a short description</p> -->
                              </div>
                       </a>
                    </div>
               </div>
        </div>
   </div>
</section>
<section id="gallery_item">
   <div class="container">
      <h2 class="section-title">our gallery</h2>
   </div>
<div class="filters filter-button-group">
	<ul>
		<li class="active"><a href="javascript:void(0);" data-filter="*">All</a></li>
		<li><a href="javascript:void(0);" data-filter="bike">Bandipur Cablecar Project</a></li>
    <li><a href="javascript:void(0);" data-filter="bus">Queen Tower</a></li>
	</ul>
</div>
	<div id="container" class="isotope"> 
		<div class="grid-item" data-filter="bike">
        <a class="popupimg" href="img/project_process/1.jpg">
          <img src="img/project_process/1.jpg">
        </a>
        <div class="overlay">Bike</div>
      </div>
            
		<div class="grid-item" data-filter="bike">
        <a class="popupimg" href="img/gallery_icon/3.jpg">
          <img src="img/project_process/2.jpg">
        </a>
        <div class="overlay">Bike</div>
      </div>   

      <div class="grid-item" data-filter="bus">
        <a class="popupimg" href="img/project_process/queen-tower.jpg">
          <img src="img/project_process/queen-tower.jpg">
        </a>
        <div class="overlay">Car</div>
      </div>
    
		<div class="grid-item" data-filter="bike">
        <a class="popupimg" href="img/project_process/3.jpg">
          <img src="img/project_process/3.jpg">
        </a>
        <div class="overlay">Bike</div>
      </div> 

      <div class="grid-item" data-filter="bus">
        <a class="popupimg" href="img/project_process/q1.jpeg">
          <img src="img/project_process/q1.jpeg">
        </a>
        <div class="overlay">Bus</div>
      </div>
                
		<div class="grid-item" data-filter="bus">
        <a class="popupimg" href="img/project_process/q2.jpg">
          <img src="img/project_process/q2.jpg">
        </a>
        <div class="overlay">Bus</div>
      </div>
             

		<div class="grid-item" data-filter="bus">
        <a class="popupimg" href="img/project_process/q3.jpg">
          <img src="img/project_process/q3.jpg">
        </a>
        <div class="overlay">Bus</div>
      </div>
        
      <div class="grid-item" data-filter="bike">
        <a class="popupimg" href="img/project_process/chhimkeshwori.jpg">
          <img src="img/project_process/chhimkeshwori.jpg">
        </a>
        <div class="overlay">Bike</div>
      </div>
             
	</div>
    <!-- <div class="isotope-pager" style="padding-top: 15px; text-align:center;"> </div>    					 -->
</section>


<!-- work timeline -->
<!-- <section id="progress_timeline">
<div class="container">
<h2 class="section-title">our progress stories</h2>
  <div class="timeline">
    <div class="timeline__group" id="progress_cablecar">
      <span class="timeline__year time" aria-hidden="true">2073 (Bandipur Cablecar)</span>
      <div class="timeline__cards">
        <div class="timeline__card card">
          <header class="card__header">
            <time class="time" datetime="2008-02-02">
              <span class="time__month">Baishakh</span>
            </time>
          </header>
          <div class="card__content">
            <p>Attends the Philadelphia Museum School of Industrial Art. Studies design with Alexey Brodovitch, art director at Harper's Bazaar, and works as his assistant.</p>
          </div>
        </div>
        <div class="timeline__card card">
          <header class="card__header">
            <time class="time" datetime="2008-02-02">
              <span class="time__month">Jeshtha</span>
            </time>
          </header>
          <div class="card__content">
            <p>Attends the Philadelphia Museum School of Industrial Art. Studies design with Alexey Brodovitch, art director at Harper's Bazaar, and works as his assistant.</p>
          </div>
        </div>
        <div class="timeline__card card">
          <header class="card__header">
            <time class="time" datetime="2008-09-01">
              <span class="time__month">Asar</span>
            </time>
            <h3 class="card__title r-title">The part of my life in University of Pennsylvania</h3>
          </header>
          <div class="card__content">
            <p>Started from University of Pennsylvania. This is an important stage of my career. Here I worked in the local magazine. The experience greatly affected me</p>
          </div>
        </div>
      </div>
    </div>
    <div class="timeline__group" id="progress_queentower">
      <span class="timeline__year time" aria-hidden="true">2014(Queen Tower)</span>
      <div class="timeline__cards">
        <div class="timeline__card card">
          <header class="card__header">
            <time class="time" datetime="2008-07-14">
              <span class="time__month">Jul</span>
            </time>
          </header>
          <div class="card__content">
            <p>Travels to France, Italy, Spain, and Peru. After completing fashion editorial in Lima, prolongs stay to make portraits of local people in a daylight studio</p>
          </div>
        </div>
        <div class="timeline__card card">
          <header class="card__header">
            <time class="time" datetime="2008-09-01">
              <span class="time__month">Asar</span>
            </time>
            <h3 class="card__title r-title">The part of my life in University of Pennsylvania</h3>
          </header>
          <div class="card__content">
            <p>Started from University of Pennsylvania. This is an important stage of my career. Here I worked in the local magazine. The experience greatly affected me</p>
          </div>
        </div>
        <div class="timeline__card card">
          <header class="card__header">
            <time class="time" datetime="2008-09-01">
              <span class="time__month">Asar</span>
            </time>
            <h3 class="card__title r-title">The part of my life in University of Pennsylvania</h3>
          </header>
          <div class="card__content">
            <p>Started from University of Pennsylvania. This is an important stage of my career. Here I worked in the local magazine. The experience greatly affected me</p>
          </div>
        </div>
      </div>
    </div>
    <div class="timeline__group" id="progress_restro">
      <span class="timeline__year time" aria-hidden="true">2016(Cablecar Restro )</span>
      <div class="timeline__cards">
        <div class="timeline__card card">
          <header class="card__header">
            <time class="time" datetime="2008-08-18">
              <span class="time__month">Aug</span>
            </time>          
          </header>
          <div class="card__content">
            <p>Upon moving to Brooklyn that summer, I began photographing weddings in Chicago</p>
          </div>
        </div>
        <div class="timeline__card card">
          <header class="card__header">
            <time class="time" datetime="2008-09-01">
              <span class="time__month">Asar</span>
            </time>
            <h3 class="card__title r-title">The part of my life in University of Pennsylvania</h3>
          </header>
          <div class="card__content">
            <p>Started from University of Pennsylvania. This is an important stage of my career. Here I worked in the local magazine. The experience greatly affected me</p>
          </div>
        </div>
        <div class="timeline__card card">
          <header class="card__header">
            <time class="time" datetime="2008-09-01">
              <span class="time__month">Asar</span>
            </time>
            <h3 class="card__title r-title">The part of my life in University of Pennsylvania</h3>
          </header>
          <div class="card__content">
            <p>Started from University of Pennsylvania. This is an important stage of my career. Here I worked in the local magazine. The experience greatly affected me</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section> -->
<!-- work progress -->
<!-- <section id="project_work_process">
     <div class="container">
         <div class="row zoom-gallery">
         <h3 class="secondary_heading">bandipur cablecar</h3>
               <div class="col-lg-12">                    
                 <div class="project_img_gallery d-flex">
                   <div class="project-img">
                        <a href="img/project_process/1.jpg"  title="" style="">
	                         	<img src="img/project_process/1.jpg" width="193" height="125">
             	          </a>
                    </div>
            	      <div  class="project-img">
                       <a href="img/project_process/2.jpg"  title="" style="">
		                      <img src="img/project_process/2.jpg" width="82px" height="125">
	                     </a>
                    </div>
                   <div class="project-img">
                        <a href="img/project_process/3.jpg"  title="" style="">
		                       <img src="img/project_process/3.jpg" width="82px" height="125">
	                      </a>
                   </div>    
                 </div>    
               </div>          
         </div>
        
         <div class="row mt-5 zoom-gallery">
               <h3 class="secondary_heading">5 star queen tower</h3>
               <div class="col-lg-12">                    
                 <div class="project_img_gallery d-flex">
                   <div class="project-img">
                        <a href="img/project_process/queen-tower.jpg"  title="" style="">
	                         	<img src="img/project_process/queen-tower.jpg" >
             	          </a>
                    </div>
            	      <div  class="project-img">
                       <a href="img/project_process/q2.jpg"  title="" style="">
		                      <img src="img/project_process/q2.jpg" >
	                     </a>
                    </div>
                   <div class="project-img">
                        <a href="img/project_process/q3.jpg"  title="" style="">
		                       <img src="img/project_process/q3.jpg">
	                      </a>
                   </div>    
                 </div>    
               </div>                  
         </div>
         
        
         <div class="row">
               <div class="col-lg-4">
                     
               </div>
               <div class="col-lg-4">
                    <div class="project-img"> 
                        <img src="img/project_process/q2.jpg" alt="">
                    </div>
               </div>
               <div class="col-lg-4">
                    <div class="project-img"> 
                        <img src="img/project_process/q3.jpg" alt="">
                    </div> 
               </div>
         </div> 
     </div>
</section>
 -->

<?php
 include('includes/footer.php');
 ?>
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
 
 <script>
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

 </script>
 <script src="js/jQuery-plugin-progressbar.js"></script>
 <script>
		$(".progress-bar").loading();
		$('input').on('click', function () {
			 $(".progress-bar").loading();
		});
	</script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js'></script>
  <script>
     $(document).ready( function() {

var itemSelector = '.grid-item'; 

var $container = $('#container').isotope({
   itemSelector: itemSelector,
   masonry: {
     columnWidth: itemSelector,
     isFitWidth: true
   }
});

//Ascending order
var responsiveIsotope = [
   [480, 7],
   [720, 10]
];

var itemsPerPageDefault = 12;
var itemsPerPage = defineItemsPerPage();
var currentNumberPages = 1;
var currentPage = 1;
var currentFilter = '*';
var filterAtribute = 'data-filter';
var pageAtribute = 'data-page';
var pagerClass = 'isotope-pager';

function changeFilter(selector) {
   $container.isotope({
      filter: selector
   });
}


function goToPage(n) {
   currentPage = n;

   var selector = itemSelector;
      selector += ( currentFilter != '*' ) ? '['+filterAtribute+'="'+currentFilter+'"]' : '';
      selector += '['+pageAtribute+'="'+currentPage+'"]';

   changeFilter(selector);
}

function defineItemsPerPage() {
   var pages = itemsPerPageDefault;

   for( var i = 0; i < responsiveIsotope.length; i++ ) {
      if( $(window).width() <= responsiveIsotope[i][0] ) {
         pages = responsiveIsotope[i][1];
         break;
      }

      

   }

   return pages;
}

function setPagination() {

   var SettingsPagesOnItems = function(){

      var itemsLength = $container.children(itemSelector).length;
      
      var pages = Math.ceil(itemsLength / itemsPerPage);
      var item = 1;
      var page = 1;
      var selector = itemSelector;
         selector += ( currentFilter != '*' ) ? '['+filterAtribute+'="'+currentFilter+'"]' : '';
      
      $container.children(selector).each(function(){
         if( item > itemsPerPage ) {
            page++;
            item = 1;
         }
         $(this).attr(pageAtribute, page);
         item++;
      });

      currentNumberPages = page;

   }();

   var CreatePagers = function() {

      var $isotopePager = ( $('.'+pagerClass).length == 0 ) ? $('<div class="'+pagerClass+'"></div>') : $('.'+pagerClass);

      $isotopePager.html('');
      
      for( var i = 0; i < currentNumberPages; i++ ) {
         var $pager = $('<a href="javascript:void(0);" class="pager" '+pageAtribute+'="'+(i+1)+'"></a>');
            $pager.html(i+1);
            
            $pager.click(function(){
               var page = $(this).eq(0).attr(pageAtribute);
               goToPage(page);
            });

         $pager.appendTo($isotopePager);
      }

      $container.after($isotopePager);

   }();

}

setPagination();
goToPage(1);

//Adicionando Event de Click para as categorias
$('.filters a').click(function(){
   var filter = $(this).attr(filterAtribute);
   currentFilter = filter;

   setPagination();
   goToPage(1);


});

//Evento Responsivo
$(window).resize(function(){
   itemsPerPage = defineItemsPerPage();
   setPagination();
});



});



$(document).ready( function() {   

// filter items on button click
$('.filter-button-group').on( 'click', 'li', function() {
var filterValue = $(this).attr('data-filter');
$('.grid').isotope({ filter: filterValue });
$('.filter-button-group li').removeClass('active');
$(this).addClass('active');
});
 })


$(document).ready( function() {   

// filter items on button click
$('.isotope-pager').on( 'click', 'a', function() {
var filterValue = $(this).attr('data-page');

$('.isotope-pager a').removeClass('active');
$(this).addClass('active');
});
 })

$(document).ready(function(){
$('.popupimg').magnificPopup({
type: 'image',
mainClass: 'mfp-with-zoom', 
gallery:{
      enabled:true
   },

zoom: {
 enabled: true, 

 duration: 300, // duration of the effect, in milliseconds
 easing: 'ease-in-out', // CSS transition easing function

 opener: function(openerElement) {

   return openerElement.is('img') ? openerElement : openerElement.find('img');
}
}

});

});

  </script>
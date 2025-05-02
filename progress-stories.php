<?php
   $page = "progress_stories";
?>

<?php
 include('includes/html_header.php');
 ?>
 <?php
 include('includes/navbar.php');
 ?>
  <!-- banner -->
 <section id="breadcrumb">
         <div class="bg-overlay pt-opacity4" style="background-image: url('img/service4-bg.webp');"></div>
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h2 class="breadcrumb-title">progress stories</h2>
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">progress stories</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
</section>

<!-- project progress -->
<section id="project_process">
<div class="container">
	<h2>Queen Tower</h2>
	<div class="skill_row">
		<div class="skill_view">
			<span class="skill_value">75%</span>
		</div>
	</div>
	<br>
	<h2>Bandipur Cablecar</h2>
	<div class="skill_row">
		<div class="skill_view">
			<span class="skill_value">100%</span>
		</div>
	</div>

	<br>
	<h2>Restro Zone</h2>
	<div class="skill_row">
		<div class="skill_view">
			<span class="skill_value">100%</span>
		</div>
	</div>


</div>
</section>
<section id="features_cablecar">
   <div class="container">
        <div class="row">
            <!-- <h2 class="section-title">Special features of bandipur cablecar</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime sed doloribus cupiditate at dolore ducimus rem. Officiis quod ea laboriosam veniam assumenda corrupti, cumque reiciendis tenetur dolores temporibus eaque possimus.</p> -->
               <div class="col-lg-4">
                    <div class="content_bandipur">
                       <a href="what-we-do.php#features-queentower" target="_blank">
                              <div class="content-overlay"></div>
                              <img class="content-image " src="img/features/queen-tower.jpg" alt="5 Star Queen Tower" >
                              <!-- <a class= "lightbox-close" href= "#">X</a> -->
                              <div class="content-details fadeIn-left">
                                <h3>5 Star Queen Tower</h3>
                                <!-- <p>This is a short description</p> -->
                              </div>
                       </a>
                    </div>
               </div>
               <div class="col-lg-4">
                    <div class="content_bandipur">
                       <a href="what-we-do.php#features-cablecar" target="_blank">
                              <div class="content-overlay"></div>
                              <img class="content-image" src="img/hero_1.webp" alt="Transparent Cablecar">
                              <div class="content-details fadeIn-left">
                                <h3>Transparent Cablecar</h3>
                                <!-- <p>This is a short description</p> -->
                              </div>
                       </a>
                    </div>
               </div>
               <div class="col-lg-4">
                    <div class="content_bandipur">
                       <a href="#features" target="_blank">
                              <div class="content-overlay"></div>
                              <img class="content-image" src="img/features/restro-zone.jpg"  alt="Cablecar Restro Zone">
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
      <h2 class="section-title">Project Process</h2>
      <div class="filters filter-button-group">
       	<ul>
		      <li class="active"><a href="javascript:void(0);" data-filter="*">All</a></li>
		      <li><a href="javascript:void(0);" data-filter="bike">Bandipur Cablecar & Lower station</a></li>
            <li><a href="javascript:void(0);" data-filter="bus">Drive-inn Resturant</a></li>
            <li><a href="javascript:void(0);" data-filter="Queentower">Queen Tower</a></li>
            
            
	      </ul>
      </div>
      <div id="container" class="isotope"> 
		<div class="grid-item" data-filter="bike">
        <a class="popupimg" href="img/features/parking.png">
          <img src="img/features/parking.png">
        </a>
        <div class="portfolio_info">
              <h4>Parking</h4>
        </div>
      </div>
            
		<div class="grid-item" data-filter="bike">
        <a class="popupimg" href="img/features/terminal.png">
          <img src="img/features/terminal.png">
        </a>
        <div class="portfolio_info">
              <h4>Terminal</h4>
        </div>
      </div>   
      
      <div class="grid-item" data-filter="bike">
        <a class="popupimg" href="img/features/eatery.png">
          <img src="img/features/eatery.png" alt="Eatery">
        </a>
        <div class="portfolio_info">
              <h4>Eatery</h4>
        </div>
      </div>   
      
      
      <div class="grid-item" data-filter="bike">
        <a class="popupimg" href="img/features/floating_kettle.png">
          <img src="img/features/floating_kettle.png" alt="Floating Kettle">
        </a>
        <div class="portfolio_info">
              <h4>Floating Kettle</h4>
        </div>
      </div>   
      

    
    
		<div class="grid-item" data-filter="bike">
        <a class="popupimg" href="img/features/owl_statue.png">
          <img src="img/features/owl_statue.png">
        </a>
        <div class="portfolio_info">
              <h4>Owl Statue</h4>
        </div>
      </div> 

      <div class="grid-item" data-filter="bike">
        <a class="popupimg" href="img/features/cablecar.png" alt="Cable Car">
          <img src="img/features/cablecar.png">
        </a>
        <div class="portfolio_info">
              <h4>Cable Car</h4>
        </div>
      </div>
                
		<div class="grid-item" data-filter="bus">
        <a class="popupimg" href="img/project_process/tower-first.jpg" alt="Queen Tower">
          <img src="img/project_process/tower-first.jpg">
        </a>
        <div class="portfolio_info">
              <h4>Queen Tower</h4>
        </div>
      </div>
             

		<div class="grid-item" data-filter="bus">
        <a class="popupimg" href="img/project_process/tower-construction.jpg"  alt="Queen Tower">
          <img src="img/project_process/tower-construction.jpg">
        </a>
        <div class="portfolio_info">
              <h4>Queen Tower</h4>
        </div>
      </div>
        
      <div class="grid-item" data-filter="bike">
        <a class="popupimg" href="img/project_process/chhimkeshwori.jpg">
          <img src="img/project_process/chhimkeshwori.jpg"  alt="Chhimkeshwori">
        </a>
        <div class="portfolio_info">
              <h4>Chhimkeshwori</h4>
        </div>
      </div>
             
	</div>
   </div>
<!-- <div class="filters filter-button-group">
	<ul>
		<li class="active"><a href="javascript:void(0);" data-filter="*">All</a></li>
		<li><a href="javascript:void(0);" data-filter="bike">Bandipur Cablecar Project</a></li>
    <li><a href="javascript:void(0);" data-filter="bus">Queen Tower</a></li>
	</ul>
</div> -->

    <!-- <div class="isotope-pager" style="padding-top: 15px; text-align:center;"> </div>    					 -->
</section>

<?php
 include('includes/footer.php');
 ?>
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
 <script src="js/custom.js"></script>
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
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
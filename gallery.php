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
                  <h2 class="breadcrumb-title">gallery</h2>
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i>Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">what we do</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
</section>
<!-- gallery -->
<section id="gallery_item">
   <div class="container">
      <h2 class="section-title">our gallery</h2>
   </div>
<div class="filters filter-button-group">
	<ul>
		<li class="active"><a href="javascript:void(0);" data-filter="*">All</a></li>
		<li><a href="javascript:void(0);" data-filter="bike">5th AGM Bandipur Cablecar</a></li>
		<li><a href="javascript:void(0);" data-filter="bus">Bandipur Cablecar Project</a></li>
      <li><a href="javascript:void(0);" data-filter="car">News about Bandipur Cable Car</a></li>
	</ul>
</div>
	<div id="container" class="isotope"> 
		<div class="grid-item" data-filter="bike">
        <a class="popupimg" href="img/gallery_icon/1.jpg">
          <img src="img/gallery_icon/1.jpg">
        </a>
        <div class="overlay">Bike</div>
      </div>

      <div class="grid-item" data-filter="car">
        <a class="popupimg" href="img/gallery_icon/post/annapurna_post.jpg">
          <img src="img/gallery_icon/post/annapurna_post.jpg">
        </a>
        <div class="overlay">Car</div>
      </div>
            
		<div class="grid-item" data-filter="bike">
        <a class="popupimg" href="img/gallery_icon/3.jpg">
          <img src="img/gallery_icon/3.jpg">
        </a>
        <div class="overlay">Bike</div>
      </div>   

      <div class="grid-item" data-filter="bus">
        <a class="popupimg" href="img/gallery_icon/project-1.jpg">
          <img src="img/gallery_icon/project-1.jpg">
        </a>
        <div class="overlay">Car</div>
      </div>
    
		<div class="grid-item" data-filter="bike">
        <a class="popupimg" href="img/gallery_icon/4.jpg">
          <img src="img/gallery_icon/4.jpg">
        </a>
        <div class="overlay">Bike</div>
      </div> 

      <div class="grid-item" data-filter="bus">
        <a class="popupimg" href="img/gallery_icon/project-2.png">
          <img src="img/gallery_icon/project-2.png">
        </a>
        <div class="overlay">Bus</div>
      </div>
                
		<div class="grid-item" data-filter="bus">
        <a class="popupimg" href="https://drive.google.com/u/0/uc?id=1Ivon_-3UVc12r7mGE4yZGQmpFRLFSAxN&export=download">
          <img src="img/gallery_icon/project-3.jpg">
        </a>
        <div class="overlay">Bus</div>
      </div>
             
      <div class="grid-item" data-filter="car">
        <a class="popupimg" href="img/gallery_icon/post/ratopati.jpg">
          <img src="img/gallery_icon/post/ratopati.jpg">
        </a>
        <div class="overlay">Car</div>
      </div>

		<div class="grid-item" data-filter="bus">
        <a class="popupimg" href="img/gallery_icon/project-4.png">
          <img src="img/gallery_icon/project-4.png">
        </a>
        <div class="overlay">Bus</div>
      </div>
        
		<div class="grid-item" data-filter="car">
        <a class="popupimg" href="img/gallery_icon/post/himalayan_times.jpg">
           <img src="img/gallery_icon/post/himalayan_times.jpg">
        </a>
        <div class="overlay">Car</div>
      </div>
             
		<div class="grid-item" data-filter="car">
        <a class="popupimg" href="https://drive.google.com/u/0/uc?id=1Oz_eSTCmx7Zbwv6grFF7PtZPZDzZ_XPP&export=download">
          <img src="img/gallery_icon/post/samay_samachar.jpg">
        </a>
        <div class="overlay">Car</div>
      </div>
        
      <div class="grid-item" data-filter="bike">
        <a class="popupimg" href="img/gallery_icon/5.jpg">
          <img src="img/gallery_icon/5.jpg">
        </a>
        <div class="overlay">Bike</div>
      </div>
             
		<div class="grid-item" data-filter="car">
        <a class="popupimg" href="img/gallery_icon/post/gorkha_patra_news.jpg">
          <img src="img/gallery_icon/post/gorkha_patra_news.jpg">
        </a>
        <div class="overlay">Car</div>
      </div>
	</div>
    <div class="isotope-pager" style="padding-top: 15px; text-align:center;"> </div>    					
</section>

<?php
 include('includes/footer.php');
 ?>
  <script>
    feather.replace()
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
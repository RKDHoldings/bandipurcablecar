<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="alternate" type="application/xml" title="Site Map" href="sitemap.xml">
    <!-- Meta Tags -->
    <meta name="keywords" content="Bandipur Cable Car, View tower, Wax Museum, Conference Hall, Tourism, Tourism Limited, Five Star Hotel, Queen Tower, Holiday Package, Restro Zone, Shopping Mall, Heritage Garden, Mirror Maze House, Tanahun, Investment, Finance, Water Fun Park, RKD Holdings, Panchase Cable Car, Banquet Hall, Shareholder, Musical Water show, Assets">
    <meta name="description" content="Bandipur Cable Car is a subsidiary company of RKD Holdings. Bandipur Cable Car is constructed from Thuldhunga of Bandipur Gaupalika-4 to Baralthok of same ward."/>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Bandipur Cable Car Pvt.Ltd- A subsidiary Company of RKD Holdings" />
    <meta property="og:description" content="Bandipur Cable Car is a subsidiary company of RKD Holdings. Bandipur Cable Car is constructed from Thuldhunga of Bandipur Gaupalika-4 to Baralthok of same ward." />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Bandipur Cable Car" />
    <meta property="og:image" content="http://bandipurcablecar.com.np/img/about/Bandipur-Office.jpg" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="Bandipur Cable Car is a subsidiary company of RKD Holdings. Bandipur Cablecar is constructed from Thuldhunga of Bandipur Gaupalika-4 to Baralthok of same ward." />
    
    <link rel="manifest" href="manifest.json">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Bandipur Cablecar PWA">
    <meta name="apple-mobile-web-app-title" content="Bandipur Cablecar PWA">
    <meta name="theme-color" content="#004f8a">
    <meta name="msapplication-navbutton-color" content="#004f8a">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-starturl" content="/index.php">
    <meta name="twitter:title" content="Bandipur Cable Car Pvt.Ltd- A subsidiary Company of RKD Holdings" />

    <title>Bandipur Cable Car</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.css">
 <!--gallery  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" rel="stylesheet">
    <!-- <script src="js/lightbox-plus-jquery.min.js"></script> -->
    <!-- animate on scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- fav-icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
  
</head>
<body>
  
<!-- scripts -->  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<!-- bar graph -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script src="https://momentjs.com/downloads/moment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data-2012-2022.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.js"></script>



<script>
  $(document).ready(function() {
  let clock;

  // Grab the current date
  let currentDate = new Date();

  // Target future date/24 hour time/Timezone
  let targetDate = moment.tz("2023-04-14 23:59", "Australia/Sydney");

  // Calculate the difference in seconds between the future and current date
  let diff = targetDate / 1000 - currentDate.getTime() / 1000;

  if (diff <= 0) {
    // If remaining countdown is 0
    clock = $(".clock").FlipClock(0, {
      clockFace: "DailyCounter",
      countdown: true,
      autostart: false
    });
    console.log("Date has already passed!")
    
  } else {
    // Run countdown timer
    clock = $(".clock").FlipClock(diff, {
      clockFace: "DailyCounter",
      countdown: true,
      callbacks: {
        stop: function() {
          console.log("Timer has ended!")
        }
      }
    });
    
    // Check when timer reaches 0, then stop at 0
    setTimeout(function() {
      checktime();
    }, 1000);
    
    function checktime() {
      t = clock.getTime();
      if (t <= 0) {
        clock.setTime(0);
      }
      setTimeout(function() {
        checktime();
      }, 1000);
    }
  }
});

</script>
<!-- fix top navbar -->
 <!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>
 <script>
   document.addEventListener("DOMContentLoaded", function(){
   window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('header').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('header').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
  });
});

// <script>
window.addEventListener('load', () => {
      registerSW();
    });
 
    // Register the Service Worker
    async function registerSW() {
      if ('serviceWorker' in navigator) {
        try {
          await navigator
                .serviceWorker
                .register('serviceworker.js');
        }
        catch (e) {
          console.log('SW registration failed');
        }
      }
    }
 </script>
 <script async src="https://www.googletagmanager.com/gtag/js?id=G-R9TL6V7036"></script>
 <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-R9TL6V7036');
 </script>
 
 <script>
	$(document).ready(function(){
		$("#exampleModalCenter").modal('show');
    $('#exampleModalCenter').modal({backdrop: 'static', keyboard: false})  

	});
</script>
<script>
  $("#exampleModalCenter").on("show", function () {
  $("body").addClass("modal-open");
}).on("hidden", function () {
  $("body").removeClass("modal-open")
});
</script>
 <!-- Your SDK code -->
 <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "223099978331837");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>
    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v13.0'
        });
      };
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
 <!-- aos -->
 <script>
  AOS.init();
</script>


<!-- loader -->
  <div id="loader-wrapper" class="preloader">
			<div id="loader"></div>
     
			<div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>

		</div>


<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script>
  $(document).ready(function() {
    $(window).load(function() {
        function Preloader() {
            var preloader = $ ('.preloader');
            preloader.delay(1000) .fadeOut (500);
        }
        if ( ! sessionStorage.getItem( 'doNotShow' ) ) {
            sessionStorage.setItem( 'doNotShow', 'true' );
            Preloader();
        } else {
           $ (' .preloader').hide();
        }
    });
});

$(document).ready(function() {
  $(".notification-drop .item").on('click',function() {
    $(this).find('ul').toggle();
  });
});

</script>
<script>
  // Function to open a modal by ID
  function openModal(modalId) {
    document.getElementById(modalId).style.display = "block";
  }

  // Function to close a modal
  function closeModal(modal) {
    modal.style.display = "none";
  }

  // Automatically open the modals sequentially
  window.onload = function() {
    const modals = document.querySelectorAll('.modal');
    let currentModalIndex = 0;

    function showNextModal() {
      if (currentModalIndex < modals.length) {
        openModal(modals[currentModalIndex].id);

        // Get the close button of the current modal
        const closeButton = modals[currentModalIndex].querySelector('.close');
        closeButton.onclick = function() {
          closeModal(modals[currentModalIndex]);
          currentModalIndex++;
          showNextModal();  // Trigger the next modal
        };
      }
    }

    showNextModal();  // Start showing the first modal
  };
</script>
</body>
</html>
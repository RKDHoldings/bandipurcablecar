<?php
   $page = "about_us";
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
        <h2 class="breadcrumb-title">our structure</h2>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">our structure</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<section id="directors_team">
  <div class="container">
    <!-- tab1 -->
    <div class="pcss3t pcss3t-effect-scale pcss3t-theme-1">
      <input type="radio" name="pcss3t" checked id="tab1" class="tab-content-first">
      <label for="tab1">board of directors</label>
    <!-- tab2 -->
      <input type="radio" name="pcss3t" id="tab2" class="tab-content-2">
      <label for="tab2">Management Committee</label>
      <!-- tab3 -->
       <!-- To add new tab please add new unique class in style.css file in line 3638. If not added new tab with new class or another class other than these three class will not be visible. -->
      <input type="radio" name="pcss3t" id="tab3" class="tab-content-last">
      <label for="tab3">our chairman</label>
      <!-- tab1 content -->
      <ul>
        <li class="tab-content tab-content-first typography">
          <div class="row">
            <div class="col-lg-12">
              <img src="img/directer_team/directors-3.png" class="w-100" alt="">

            </div>

          </div>
          <!-- <div class="row">
                          <div class="col-md-3 col-sm-6 col-xs-12">
                             <div class="single-team">
                                 <div class="img-area">
                                      <img src="img/directer_team/chairman.webp" class="img-responsive" alt="">
                                      <div class="social">
                                         <ul class="list-inline">
                                             <li><a href="team-inner.php">more info</a></li>
                                         </ul>
                                      </div>
                                  </div>
                                <div class="img-text">
                                   <h5 class="team_member">ram chandra sharma</h5>
                                   <h5 class="team_position">president</h5>
                                </div>
                             </div>
                          </div>
                          <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="single-team">
                                   <div class="img-area">
                                         <img src="img/directer_team/shiva-sharma.webp" class="img-responsive" alt="">
                                         <div class="social">
                                         
                                         </div>
                                   </div>
                                 <div class="img-text">
                                   <h5 class="team_member">shiva prasad sharma</h5>
                                   <h5 class="team_position">director</h5>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="single-team">
                                   <div class="img-area">
                                         <img src="img/directer_team/taranath.webp" class="img-responsive" alt="">
                                         <div class="social">
                                            
                                         </div>
                                   </div>
                                 <div class="img-text">
                                   <h5 class="team_member">taranath upadhyaya</h5>
                                   <h5 class="team_position">director</h5>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="single-team">
                                  <div class="img-area">
                                       <img src="img/directer_team/krishnaraj-adhikari.webp" class="img-responsive" alt="">
                                       <div class="social">
                                           
                                       </div>
                                  </div>
                                <div class="img-text">
                                   <h5 class="team_member">krishnaraj adhikari</h5>
                                   <h5 class="team_position">director</h5>
                                </div>
                              </div>
                         </div>
                                       
                      </div> -->

          <!-- new row -->
          <!-- <div class="row">
                          <div class="col-md-3 col-sm-6 col-xs-12">
                             <div class="single-team">
                                 <div class="img-area">
                                      <img src="img/directer_team/nawaraj.webp" class="img-responsive" alt="">
                                      <div class="social">
                                       
                                      </div>
                                  </div>
                                <div class="img-text">
                                   <h5 class="team_member">nawaraj karki</h5>
                                   <h5 class="team_position">director</h5>
                                </div>
                             </div>
                          </div>
                          <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="single-team">
                                   <div class="img-area">
                                         <img src="img/directer_team/haridatta-poudel.webp" class="img-responsive" alt="">
                                         <div class="social">
                                           
                                         </div>
                                   </div>
                                 <div class="img-text">
                                   <h5 class="team_member">hari datta paudel</h5>
                                   <h5 class="team_position">director</h5>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="single-team">
                                   <div class="img-area">
                                         <img src="img/directer_team/harka-bahadur.webp" class="img-responsive" alt="">
                                         <div class="social">
                                            
                                         </div>
                                   </div>
                                 <div class="img-text">
                                   <h5 class="team_member">harka bahadur adhikari</h5>
                                   <h5 class="team_position">director</h5>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="single-team">
                                  <div class="img-area">
                                       <img src="img/directer_team/kiran-pokhrel.webp" class="img-responsive" alt="">
                                         <div class="social">
                                           
                                         </div>
                                  </div>
                                <div class="img-text">
                                   <h5 class="team_member">kiran pokharel</h5>
                                   <h5 class="team_position">ceo</h5>
                                </div>
                              </div>
                         </div>
                                       
                      </div> -->
        </li>
        <!-- tab2 content -->
        <li class="tab-content tab-content-2 typography">
          <div class="row">
            <div class="col-lg-12">
              <img src="img/directer_team/management-3.png" class="w-100" alt="">
            </div>
          </div>
        </li>
        <!-- tab3 content -->
        <li class="tab-content tab-content-last typography">
          <div class="row">
            <div class="col-lg-5">
              <img src="img/directer_team/chairman.webp" class="ceo_img" width="100%" alt="">
              <div class="exp-box">
                <h4 class="exp-box_title">Representative of Panchase Cablecar & Tourism</h4>
                <img src="img/partner_company/panchase-logo.png" class="logo_panchase" alt="">
              </div>
            </div>
            <div class="col-lg-7">
              <h6>our president</h6>
              <h2 class="section-title">Message from President</h2>
              <p>आदरणीय चौथो वार्षिक साधारण सभामा उपस्थीत प्रमुख
                     अतिथि, विशिष्ट अतिथिहरू, सञ्चालक सहकर्मीहरु,
                     शेयरधनीहरू, कर्मचारीहरू, सरोकारवालाहरू, पत्रकार
                     साथीहरू एवं उपस्थित सम्पूर्ण शुभचिन्तकहरूलाई हार्दिक
                     नमस्कार १ बन्दीपुर केबलकार एंड टुरिजम लिमिटेडको चौथो
                     वार्षिक साधारण सभामा यहाँहरू सबैलाई हार्दिक स्वागत
                     गर्दछु।
              </p>
              <p> कम्पनीद्वारा गत वर्ष तयार भएका कम्पनीका
               कोशेढुङ्गाहरूलाई प्रतिबिम्बित गर्न र आगामी दिनहरूको
               फराकिलो बाटोको रूपरेखा तय गर्न आज हामी यस सभामा
               गरिमामय सहभागिता सँगै अमूल्य समय समर्पित गर्दा,
               मलाई ‘एकले थूकी सुकी हजारले थूकी नदी’ भन्ने प्रचलित
               नेपाली उखानको प्रतीकात्मक मूल दृष्टिकोणको स्मरण
               भइरहेको छ। नेपालको पर्यटन क्षेत्रमा क्रान्ति ल्याउने
               र बन्दीपुरलाई विश्वव्यापी पर्यटकहरूका लागि प्रमुख
               गन्तव्यको रूपमा स्थापित गर्ने हाम्रो सपना पूरा गर्नका लागि
               अझ बढी सामूहिक मेहनत, दृढता, धीरता र कुशलतापूर्वक
               लाग्नुपर्ने महसुस भएको छ।
              </p>
              <div class="btn_wrapper mb-4">
                <a href="chairman-message.php" target="_blank"> <button class="slide_from_left">Read More</button> </a>
                <div class="video-main">
                  <div class="promo-video"> </div>
                  <a href="https://www.youtube.com/watch?v=NJ_GYRPHIeY&t=135s&ab_channel=BandipurCablecar"
                    target="_blank" class="video video-popup mfp-iframe" data-lity><i class="icon-play"></i></a>
                  <span class="text">View Our Story</span>
                </div>

              </div>
              <div class="about-quote">
                <p class="about-quote_text">“ स्वदेशी र प्रवासी नेपालीहरुको संयुक्त लगानी एवं सम्भार स्वागत पर्यटकीय
                  गन्तव्य बन्दीपुर केवलकार र क्वीनटावर ”</p>
                <span class="about-quote_author">ram chandra sharma</span>
              </div>

            </div>
          </div>
        </li>
      </ul>
    </div>
    <!--/ tabs -->
  </div>
</section>
<!-- investment comittee -->
<!-- <section id="investment_committee">
   <div class="container">
       <div class="row">
           <h2 class="section-title">investment committeee</h2>
             <div class="row">
               <div class="col-lg-9">
               <div class="row">
                          <div class="col-md-4 col-sm-6 col-xs-12">
                             <div class="single-team">
                                 <div class="img-area">
                                      <img src="img/chairman.png" class="img-responsive" alt="">
                                      <div class="social">
                                          <ul class="list-inline">
                                             <li><a href="team_inner.php">more info</a></li>
                                          </ul>
                                      </div>
                                  </div>
                                <div class="img-text">
                                   <h5 class="team_member">ram prasad sharma</h5>
                                   <h5 class="team_position">UI/UX Designer</h5>
                                </div>
                             </div>
                          </div>
                          <div class="col-md-4 col-sm-6 col-xs-12">
                              <div class="single-team">
                                   <div class="img-area">
                                         <img src="https://i.postimg.cc/25JWQ9gm/2.jpg" class="img-responsive" alt="">
                                         <div class="social">
                                           <ul class="list-inline">
                                             <li><a href="team_inner.php">more info</a></li>
                                           </ul>
                                         </div>
                                   </div>
                                 <div class="img-text">
                                   <h5 class="team_member">ram prasad sharma</h5>
                                   <h5 class="team_position">UI/UX Designer</h5>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-4 col-sm-6 col-xs-12">
                              <div class="single-team">
                                  <div class="img-area">
                                       <img src="https://i.postimg.cc/nckQRhN3/3.jpg" class="img-responsive" alt="">
                                       <div class="social">
                                          <ul class="list-inline">
                                             <li><a href="team_inner.php">more info</a></li>
                                          </ul>
                                       </div>
                                  </div>
                                <div class="img-text">
                                   <h5 class="team_member">ram prasad sharma</h5>
                                   <h5 class="team_position">UI/UX Designer</h5>
                                </div>
                              </div>
                         </div>
                           
                      </div>

                  
                      <div class="row">
                          <div class="col-md-4 col-sm-6 col-xs-12">
                             <div class="single-team">
                                 <div class="img-area">
                                      <img src="https://i.postimg.cc/Kjttv7qb/1.jpg" class="img-responsive" alt="">
                                      <div class="social">
                                          <ul class="list-inline">
                                             <li><a href="team_inner.php">more info</a></li>
                                          </ul>
                                      </div>
                                  </div>
                                <div class="img-text">
                                   <h5 class="team_member">ram prasad sharma</h5>
                                   <h5 class="team_position">UI/UX Designer</h5>
                                </div>
                             </div>
                          </div>
                          <div class="col-md-4 col-sm-6 col-xs-12">
                              <div class="single-team">
                                   <div class="img-area">
                                         <img src="https://i.postimg.cc/25JWQ9gm/2.jpg" class="img-responsive" alt="">
                                         <div class="social">
                                           <ul class="list-inline">
                                             <li><a href="team_inner.php">more info</a></li>
                                           </ul>
                                         </div>
                                   </div>
                                 <div class="img-text">
                                    <h5 class="team_member">ram prasad sharma</h5>
                                    <h5 class="team_position">UI/UX Designer</h5>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-4 col-sm-6 col-xs-12">
                              <div class="single-team">
                                   <div class="img-area">
                                         <img src="https://i.postimg.cc/25JWQ9gm/2.jpg" class="img-responsive" alt="">
                                         <div class="social">
                                           <ul class="list-inline">
                                             <li><a href="team_inner.php">more info</a></li>
                                           </ul>
                                         </div>
                                   </div>
                                 <div class="img-text">
                                   <h5 class="team_member">ram prasad sharma</h5>
                                   <h5 class="team_position">UI/UX Designer</h5>
                                </div>
                              </div>
                          </div>
                                     
                      </div>  
               </div>
             <div class="col-lg-3">
                <nav class="sidebar card py-2 mb-4">
                         <div class="sidebar_news1">
                            <h4>our structure</h4>
                              <ul class="nav flex-column" id="nav_accordion">
                                 <li class="nav-item"><a class="nav-link" href="#directors_team">Board of Directors <i data-feather="arrow-right"></i></a></li>
                                 <li class="nav-item"><a class="nav-link" href="#">investment committee <i data-feather="arrow-right"></i></a></li>
                              </ul>
                         </div>
                         <div class="sidebar_news1">
                           <h4>finance team</h4>
                              <ul class="nav flex-column" id="nav_accordion">
                                 <li class="nav-item"><a class="nav-link" href="#">Board of Directors <i data-feather="arrow-right"></i></a></li>
                                 <li class="nav-item"><a class="nav-link" href="#">investment committee <i data-feather="arrow-right"></i></a></li>
                              </ul>
                         </div>
                         <div class="sidebar_news1">
                           <h4>financial calender</h4>
                              <ul class="nav flex-column" id="nav_accordion">
                                 <li class="nav-item"><a class="nav-link" href="#">yearly calender<i data-feather="arrow-right"></i></a></li>
                              </ul>
                         </div>
                         <div class="sidebar_news1">
                           <h4>contact us</h4>
                              <ul class="nav flex-column" id="nav_accordion">
                                 <li class="nav-item">  <p class="sidebar-desc">For further queries, please contact us on <a href=""> info@bandipurcablecar.com.np </a></p></li>
                              </ul>
                         </div>                           
                 </nav>                    
            
             </div>
       </div>
   </div>
</section> -->
<!-- operating model -->
<!-- <section id="operating_model">
    <div class="container">
        <div class="row">
             <h2 class="section-title">operating model</h2>
        </div>
    </div>
</section> -->
<!-- governance -->
<section id="governance-info">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <h6>governance</h6>
        <!-- <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit</h2> -->
        <h2 class="section-title"> our committes</h2>
        <p> कम्पनीले संस्थागत सुशाासन नै भावी दिशा फराकिलो र विश्वसनीय बनाउने कडी हो भन्ने कुरालाई गम्भीर
          रुपमा बुझेको छ । सुशासनको अनुभूति व्यवहारिक रुपमा नै अनुभूति हुने गरी प्रर्दशन गर्नु कम्पनीको संस्कृति
          बनेको छ । कम्पनीले आफूलाई पारदर्शी, चुस्त, दुरुस्त राख्नका लागि कम्पनीको Management मा निरन्तर
          अद्यावधिक गर्ने नीति लिएर हरेक कार्यलाई व्यवस्थापन गरिरहेको छ । सञ्चालक समितिको कार्य अवधारणा
          म्याप, योजना कार्यान्वयनमा केन्द्रित गरिएको छ । </p>

        <div class="double-check-list font-title mb-xxl-5">
          <h3></h3>
          <ul class="list-unstyled aboutus__points swpf ps-0">
            <li>
              <div class="icon"><i class="icon-long-arrow-right"></i></div>
              <div class="text">
                <p>नीति तथा योजना</p>
              </div>
            </li>
            <li>
              <div class="icon"><i class="icon-long-arrow-right"></i></div>
              <div class="text">
                <p>आर्थिक व्यवस्थापन </p>
              </div>
            </li>
            <li>
              <div class="icon"><i class="icon-long-arrow-right"></i></div>
              <div class="text">
                <p> कानुनी तथा अनुपालन व्यवस्थापन </p>
              </div>
            </li>
            <li>
              <div class="icon"><i class="icon-long-arrow-right"></i></div>
              <div class="text">
                <p> परियोजना व्यवस्थापन ( केबलकार सञ्चालन विभाग, होटल सञ्चालन विभाग, रेस्टुरेǔट
                  सञ्चालन विभाग,साहायक कम्पनीहरू सञ्चालन)
                </p>
              </div>
            </li>
            <li>
              <div class="icon"><i class="icon-long-arrow-right"></i></div>
              <div class="text">
                <p>अतिरिक्त
                </p>
              </div>
            </li>
            <li>
              <div class="icon"><i class="icon-long-arrow-right"></i></div>
              <div class="text">
                <p>प्राविधिक व्यवस्थापन
                </p>
              </div>
            </li>
            <li>
              <div class="icon"><i class="icon-long-arrow-right"></i></div>
              <div class="text">
                <p>सञ्चार एवं यातायात व्यवस्थापन
                </p>
              </div>
            </li>
            <li>
              <div class="icon"><i class="icon-long-arrow-right"></i></div>
              <div class="text">
                <p>सार्वजनिक सम्बन्ध व्यवस्थापन
                </p>
              </div>
            </li>
            <li>
              <div class="icon"><i class="icon-long-arrow-right"></i></div>
              <div class="text">
                <p>संस्थागत
                </p>
              </div>
            </li>
            <li>
              <div class="icon"><i class="icon-long-arrow-right"></i></div>
              <div class="text">
                <p>सम्पर्क
                </p>
              </div>
            </li>
            <li>
              <div class="icon"><i class="icon-long-arrow-right"></i></div>
              <div class="text">
                <p> STU(Special Task Unit) </p>
              </div>
            </li>

            <li>
              <div class="icon"><i class="icon-long-arrow-right"></i></div>
              <div class="text">
                <p>लेखा परीक्षण </p>
              </div>
            </li>
            <li>
              <div class="icon"><i class="icon-long-arrow-right"></i></div>
              <div class="text">
                <p>मानव संसाधन व्यवस्थापन </p>
              </div>
            </li>
            <li>
              <div class="icon"><i class="icon-long-arrow-right"></i></div>
              <div class="text">
                <p> इन्जिनियरिङ विभाग </p>
              </div>
            </li>
            <li>
              <div class="icon"><i class="icon-long-arrow-right"></i></div>
              <div class="text">
                <p>E.R.T (Emergency Rescue Team)
                </p>
              </div>
            </li>
            <li>
              <div class="icon"><i class="icon-long-arrow-right"></i></div>
              <div class="text">
                <p>I. R.O (International Relation Officer)
                </p>
              </div>
            </li>
            <li>
              <div class="icon"><i class="icon-long-arrow-right"></i></div>
              <div class="text">
                <p>L.R.O (Local Relation Officers)
                </p>
              </div>
            </li>


          </ul>
        </div>
        <!-- committees list end -->

      </div>
      <div class="col-lg-3">
        <nav class="sidebar card py-2 mb-4">
          <div class="sidebar_news1">
            <h4>our structure</h4>
            <ul class="nav flex-column" id="nav_accordion">
              <li class="nav-item"><a class="nav-link" href="our-structure.php#directors-team" target="_blank">Board of
                  Directors </a></li>
              <li class="nav-item"><a class="nav-link" href="chairman-message.php" target="_blank">leadership message
                </a></li>
            </ul>
          </div>
          <div class="sidebar_news1">
            <h4>Govenance</h4>
            <ul class="nav flex-column" id="nav_accordion">
              <li class="nav-item"><a class="nav-link" href="#governance-info" target="_blank">Committee </a></li>
              <li class="nav-item"><a class="nav-link" href="#operating_model" target="_blank">operating model </a></li>
            </ul>
          </div>
          <div class="sidebar_news1">
            <h4>financial calender</h4>
            <ul class="nav flex-column" id="nav_accordion">
              <li class="nav-item"><a class="nav-link" href="img/reports/final-calender.pdf" target="_blank">yearly
                  calender</a></li>
            </ul>
          </div>
          <div class="sidebar_news1">
            <h4>contact us</h4>
            <ul class="nav flex-column" id="nav_accordion">
              <li class="nav-item">
                <p class="sidebar-desc">For further queries, please contact us on <a
                    href="mailto:info@bandipurcablecar.com.np" target="_blank"> info@bandipurcablecar.com.np </a></p>
              </li>
            </ul>
          </div>
        </nav>

      </div>
    </div>
  </div>
</section>

<!--  -->
<section id="operating_model">
  <div class="container">
    <div class="row">
      <h2 class="section-title">chain of command </h2>
      <img src="img/about/model.png" alt="Operating Model">
    </div>
  </div>
</section>

<?php
include('includes/footer.php');
?>

<!-- <script>
    const portfolio = document.querySelector('.portfolio-gallery'),
      portfolioItems = portfolio.querySelectorAll('.portfolio-item'),
      portfolioCats = document.querySelectorAll('.portfolio-cats > li');
let parentWidth = portfolio.offsetWidth,
    windowWidth = window.innerWidth;

portfolioCats.forEach(cat => {
    cat.addEventListener('pointerdown', function() {
        const dataFilter = this.dataset.filter;
        const el = [];

        if (dataFilter === '*') {
            positionItems(portfolioItems);
        } else {
            portfolioItems.forEach(item => {
                if (item.dataset.filter == dataFilter) {
                    el.push(item);
                } else {
                    item.style.cssText = 'transform: scale(0.1); opacity: 0;';
                }
            });
            positionItems(el);
        }
    });
});

function countRowsItems() {
    let rowItems = 0;
    if (windowWidth <= 768) {
        rowItems = 1;
    } else if (windowWidth <= 992) {
        rowItems = 2;
    } else {
        rowItems = 3;
    }
    return rowItems;
}

function positionItems(items) {
    let rowItems = countRowsItems();
    let y = 0;
    let x = 0;
    let itemCount = 0;
    items.forEach((item, i) => {
        item.style.cssText = `transform: translate3d(${x*(parentWidth/rowItems)}px, ${y*220}px, 0); opacity: 1;`;
        x++;
        if (x%rowItems == 0) {
            y++;
            x = 0;
        }
        itemCount = i;
    });
    portfolio.style.height = `${Math.ceil(itemCount/rowItems)*220}px`;
}

positionItems(portfolioItems);

window.addEventListener('resize', () => {
    parentWidth = portfolio.offsetWidth;
    windowWidth = window.innerWidth;
    positionItems(portfolioItems);
});
 </script>  -->
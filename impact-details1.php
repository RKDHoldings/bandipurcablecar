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
                  <h2 class="breadcrumb-title">impact details</h2>
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i>Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">impact details</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
</section>

<!-- impact single -->
<section id="impact_details">
<div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="impact_details_left">
                            <div class="impact_details_img1">
                                <img src="img/bids.png" width="100%" height="100%" alt="">
                            </div>
                            <div class="impact_details_content">
                                <p class="impact_details_sub_title">finance</p>
                                <ul class="list-unstyled impact_details_meta">
                                    <li><a href="" class="me-1"><i data-feather="clock"></i>12 Poush, 2079</a></li>
                                </ul>
                                <h3 class="impact_details__title">International Invitation for Bids</h3>
                            </div>
                            <div class="news-details__bottom">
                                <p class="impact_details__tags">
                                    <span>Tags</span>
                                    <a href="#">Consulting</a>
                                    <a href="#">marketing</a>
                                </p>
                                <div class="news-details__social-list">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <!-- <div class="news-details__pagenation-box">
                                <ul class="list-unstyled news-details__pagenation">
                                    <li>Vivamus mattis Tristique <br> Blandit vel Iaculis leo</li>
                                    <li>Vivamus mattis Tristique <br> Blandit vel Iaculis leo</li>
                                </ul>
                            </div> -->
                            <!-- <div class="comment-form">
                                <h3 class="comment-form__title">Leave a Comment</h3>
                                <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Full name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email address" name="email">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Phone" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Subject" name="subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="message" placeholder="Write a Message"></textarea>
                                            </div>
                                            <div class="btn-box">
                                                <button type="submit" class="thm-btn comment-form__btn">Submit
                                                    comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <!-- <div class="sidebar__single sidebar__search">
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Search">
                                    <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                </form>
                            </div> -->
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Recent Posts</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="img/events/event-3.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta">  <i class="icon-clock-o"></i>20
                                                    Oct, 2021</span>
                                                <a href="impact_details3.php">Bandipur Cable Car Financial Closure From Nepal SBI & NMB Bank</a>
                                            </h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__category">
                                <h3 class="sidebar__title">Categories</h3>
                                <ul class="sidebar__category-list list-unstyled">
                                    <li><a href="blog-details.html">Consulting <i data-feather="chevron-right"></i></a></li>
                                    <li class="active"><a href="blog-details.html">Marketing<i data-feather="chevron-right"></i></a></li>
                                    <li><a href="blog-details.html">Technology<i data-feather="chevron-right"></i></a></li>
                                    <li><a href="blog-details.html">Business &amp; Finance <i data-feather="chevron-right"></i></a></li>
                                    <li><a href="blog-details.html">Bank Cryptcy <i data-feather="chevron-right"></i></a></li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Tags</h3>
                                <div class="sidebar__tags-list">
                                    <a href="#">Consulting</a>
                                    <a href="#">marketing</a>
                                    <a href="#">Business</a>
                                    <a href="#">Financial</a>
                                    <a href="#">advice</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>

<script>
    feather.replace()
  </script>
<?php
 include('includes/footer.php');
 ?>
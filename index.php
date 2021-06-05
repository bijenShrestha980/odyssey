<!DOCTYPE html>
<html lang="en">

<head>
   <title>Odyssey Nepal</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <link rel="apple-touch-icon" href="assets/img/apple-icon.png"> -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">
   <!-- Load Require CSS -->
   <link href="assets/css/bootstrap.min.css" rel="stylesheet">
   <!-- Font CSS -->
   <link href="assets/css/boxicon.min.css" rel="stylesheet">
   <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet"> -->
   <!-- Load Tempalte CSS -->
   <link rel="stylesheet" href="assets/css/templatemo.css">
   <!-- Load Responsive CSS -->
   <link rel="stylesheet" href="assets/css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="assets/css/custom.css">
    <!--
    
TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->
<?php
session_start();
$name = "";
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "db");
?>
</head>

<body>
   <div id="fb-root"></div>
   <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="QvgtL3oL"></script>
   <!-- Header -->
   <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
      <div class="container d-flex justify-content-between align-items-center">
         <a class="navbar-brand h1" href="index.php">
            <!-- <i class='bx bx-buildings bx-sm text-dark'></i> -->
            <img class="nav_logo" src="./assets/img/logo.png">
            <span class="odyssey h4">Odyssey</span> <span class="odyssey h4">Nepal</span>
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
            <div class="flex-fill mx-xl-5 mb-2">
               <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                  <li class="nav-item">
                     <a class="nav-link btn-outline-primary rounded-pill px-3" href="index.php">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link btn-outline-primary rounded-pill px-3" href="about.php">About Us</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link btn-outline-primary rounded-pill px-3" href="gallery.php">Gallery</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link btn-outline-primary rounded-pill px-3" href="our-team.php">Our Team</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link btn-outline-primary rounded-pill px-3" href="departments.php">Departments</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link btn-outline-primary rounded-pill px-3" href="contact.php">Contact</a>
                 </li>
             </ul>
         </div>
                <!-- <div class="navbar align-self-center d-flex">
                    <a class="nav-link" href="#"><i class='bx bx-bell bx-sm bx-tada-hover text-primary'></i></a>
                    <div class="dropdown">
                        <a class="nav-link" href="#"><i class='bx bx-cog bx-sm text-primary'></i></a>
                        <div class="dropdown-content">
                            <ul>
                                <li>
                                  <a href="signup.php" class="nav-link btn-outline-primary rounded-pill px-3"> Sign Up</a>
                              </li>
                              <li>
                                  <a href="login.php" class="nav-link btn-outline-primary rounded-pill px-3"> Login</a>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <a class="nav-link" href="#"><i class='bx bx-user-circle bx-sm text-primary'></i></a>
              </div> -->
          </div>
      </div>
  </nav>
  <!-- Close Header -->


  <!-- Start Banner Hero -->
  <div class="banner-wrapper bg-light">
    <div id="index_banner" class="banner-vertical-center-index container-fluid pt-5">

       <!-- Start slider -->
       <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="background: rgb(73 68 68 / 33%)">
          <ol class="carousel-indicators">
             <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
             <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
         </ol>
         <div class="carousel-inner">
             <div class="carousel-item active">

                <div class="py-5 row d-flex align-items-center">
                   <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5" style="animation: transitionIn 2s;">
                      <h1 class="banner-heading h1 display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line" style="color: #e7e7ed">
                         <strong>Welcome to the official site of Odyssey Nepal</strong>
                         <br>
                     </h1>
                                <!-- <p class="banner-body py-3 mx-0 px-0" style="color: #e6eaed">
                                    We are a group of People who are determined to be a part of <a rel="nofollow" href="https://templatemo.com/page/1" target="_parent">social activity</a> and abolish the problems in every possible way. <a rel="nofollow" href="https://boxicons.com/" target="_blank">Social work</a> is our main Aim.
                                </p> -->
                                <!-- <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="#" role="button">Get Started</a> -->
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">

                       <div class="py-5 row d-flex align-items-center">
                          <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                             <h1 class="banner-heading h1 display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line" style=" color: #e7e7ed">
                                Together for positive change
                            </h1>
                                <!-- <p class="banner-body py-3" style="color: #e6eaed">
                                    We act together to bring positive change in society.
                                </p> -->
                                <!-- <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="#" role="button">Get Started</a> -->
                            </div>
                        </div>

                    </div>
                </div>
                <a class="carousel-control-prev text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                   <i class='bx bx-chevron-left'></i>
                   <span class="visually-hidden">Previous</span>
               </a>
               <a class="carousel-control-next text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                   <i class='bx bx-chevron-right'></i>
                   <span class="visually-hidden">Next</span>
               </a>
           </div>
           <!-- End slider -->

       </div>
   </div>
   <!-- End Banner Hero -->


   <!-- Start Service -->
    <!-- <section class="service-wrapper">
        <div class="container-fluid pb-3">
            <div class="row">
                <h2 class="h2 text-center col-12 py-5 semi-bold-600">Social Services</h2>
                <div class="service-header col-2 col-lg-3 text-end light-300">
                    <i class='bx bx-gift h3 mt-1'></i>
                </div>
                <div class="service-heading col-10 col-lg-9 text-start float-end light-300">
                    <h2 class="h3 pb-4 typo-space-line">Make Success for future</h2>
                </div>
            </div>
            <p class="service-footer col-10 offset-2 col-lg-9 offset-lg-3 text-start pb-3 text-muted px-2">
                You are free to use this template for your commercial or business websites. You are not allowed to re-distribute this template ZIP file on any template collection websites. It is too easy to illegally copy and repost this template.
            </p>
        </div> -->


        <!-- Start View work -->
        <!-- <section class="bg-secondary">
            <div class="container py-5">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-2 col-12 text-light align-items-center">
                        <i class='display-1 bx bxs-box bx-lg'></i>
                    </div>
                    <div class="col-lg-7 col-12 text-light pt-2">
                        <h3 class="h4 light-300">Great transformations successful</h3>
                        <p class="light-300">Quis ipsum suspendisse ultrices gravida.</p>
                    </div>
                    <div class="col-lg-3 col-12 pt-4">
                        <a href="gallery.php" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">View Our work</a>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End View work -->

        <!-- Start Recent work -->
        <section class="py-5">
            <div class="container">
               <div class="recent-work-header row text-center pb-5">
                  <h2 class="col-md-6 m-auto h2 semi-bold-600 py-5">Recent works</h2>
              </div>
              <div class="row gy-5 g-lg-5 mb-4">

                  <!-- Start Recent work -->
                  <div class="col-md-4 mb-3">
                     <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="./assets/img/recent-works-01.jpg" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                           <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                              <h3 class="card-title light-300">Our Group</h3>
                              <!-- <p class="card-text">Ullamco laboris nisi ut aliquip ex</p> -->
                          </div>
                      </div>
                  </a>
              </div><!-- End Recent work -->

              <!-- Start Recent work -->
              <div class="col-md-4 mb-3">
                 <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="./assets/img/recent-works-02.jpg" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                       <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                          <h3 class="card-title light-300">Connectivity</h3>
                          <!-- <p class="card-text">Psum officia anim id est laborum.</p> -->
                      </div>
                  </div>
              </a>
          </div><!-- End Recent work -->

          <!-- Start Recent work -->
          <div class="col-md-4 mb-3">
             <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                <img class="recent-work-img card-img" src="./assets/img/recent-works-03.jpg" alt="Card image">
                <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                   <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                      <h3 class="card-title light-300">Meeting</h3>
                      <!-- <p class="card-text">Sum dolor sit consencutur</p> -->
                  </div>
              </div>
          </a>
      </div><!-- End Recent work -->

      <!-- Start Recent work -->
      <div class="col-md-4 mb-3">
        <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
           <img class="recent-work-img card-img" src="./assets/img/recent-works-04.jpg" alt="Card image">
           <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
              <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                 <h3 class="card-title light-300">Public Relation</h3>
                 <!-- <p class="card-text">Lorem ipsum dolor sit amet</p> -->
             </div>
         </div>
     </a>
 </div><!-- End Recent work -->

 <!-- Start Recent work -->
 <div class="col-md-4 mb-3">
   <a href="./works/track-distribution.php" class="recent-work card border-0 shadow-lg overflow-hidden">
      <img class="recent-work-img card-img" src="./assets/img/recent-works-05.jpg" alt="Card image">
      <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
         <div class="recent-work-content text-start mb-3 ml-3 text-dark">
            <h3 class="card-title light-300">Donation</h3>
            <!-- <p class="card-text">Put enim ad minim veniam</p> -->
        </div>
    </div>
</a>
</div><!-- End Recent work -->

<!-- Start Recent work -->
<div class="col-md-4 mb-3">
   <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
      <img class="recent-work-img card-img" src="./assets/img/recent-works-06.jpg" alt="Card image">
      <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
         <div class="recent-work-content text-start mb-3 ml-3 text-dark">
            <h3 class="card-title light-300">Award Ceremony</h3>
            <!-- <p class="card-text">Mollit anim id est laborum.</p> -->
        </div>
    </div>
</a>
</div><!-- End Recent work -->

</div>
</div>
</section>
<!-- End Recent work -->

<!-- Start Social Sites -->
<section class="py-2 mb-5">
  <div class="container bg-light pt-5">
    <div class="recent-work-header row text-center pb-5">
       <h2 class="col-md-6 m-auto h2 semi-bold-600 py-3">Social Sites</h2>
   </div>

   <div class="row gy-5 g-lg-5 mb-4">

     <!-- Start Facebook -->
     <div class="col-lg-4 col-12">
        <section class="mb-5">
           <div class="container">
              <div class="fb-page" data-href="https://www.facebook.com/odysseyynepal/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/odysseyynepal/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/odysseyynepal/">Odyssey Nepal</a></blockquote></div>
          </div>
      </section>
  </div>
  <!-- End Facebook -->

  <!-- Start Twitter -->
  <div class="col-lg-4 col-12">
      <section class="mb-5">
         <div class="container">
            <a class="twitter-timeline" href="https://twitter.com/NepalOdyssey?ref_src=twsrc%5Etfw">Tweets by NepalOdyssey</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </section>
</div>
<!-- End Twitter -->
<!-- Start Instagram -->
<div class="col-lg-4 col-12">
  <section class="mb-5">
     <div class="container">
        <div class="embedsocial-hashtag" data-ref="8004188a39e95c63db3c49852d4ffe9562d0cec5" ><a class="feed-powered-by-es" href="https://embedsocial.com/products/embedfeed/" target="_blank" title="Powered by EmbedSocial">Powered by EmbedSocial<span>→</span></a></div><script>(function(d, s, id){var js; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/cdn/ht.js"; d.getElementsByTagName("head")[0].appendChild(js);}(document, "script", "EmbedSocialHashtagScript"));</script>
    </div>
</section>
</div>
<!-- End Instagram -->
</div>

</div>
</section>
<!-- End Social Sites -->

<!-- Start Footer -->
<footer class="bg-secondary pt-4">
    <div class="container">
       <div class="row py-4">

          <div class="col-lg-4 col-12 align-left">
             <a class="navbar-brand" href="index.php">
                <!-- <i class='bx bx-buildings bx-sm text-light'></i> -->
                <img class="nav_logo" src="./assets/img/logo.png" style="background: #fff;border: 1px solid white; border-radius: 40px;">
                <span class="text-light h5">Odyssey</span> <span class="text-light h5 semi-bold-600">Nepal</span>
            </a>
            <p class="text-light my-lg-4 my-2">
                You can connect us through these social sites.
            </p>
            <ul class="list-inline footer-icons light-300">
                <li class="list-inline-item m-0">
                   <a class="text-light" target="_blank" href="https://www.facebook.com/odysseyynepal">
                      <i class='bx bxl-facebook-square bx-md'></i>
                  </a>
              </li>
              <li class="list-inline-item m-0">
                  <a class="text-light" target="_blank" href="https://twitter.com/NepalOdyssey/status/1400059472026820609?ref_src=twsrc%5Etfw%7Ctwcamp%5Eembeddedtimeline%7Ctwterm%5Eprofile%3ANepalOdyssey%7Ctwgr%5EeyJ0ZndfZXhwZXJpbWVudHNfY29va2llX2V4cGlyYXRpb24iOnsiYnVja2V0IjoxMjA5NjAwLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X2hvcml6b25fdHdlZXRfZW1iZWRfOTU1NSI6eyJidWNrZXQiOiJodGUiLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X3R3ZWV0X2VtYmVkX2NsaWNrYWJpbGl0eV8xMjEwMiI6eyJidWNrZXQiOiJjb250cm9sIiwidmVyc2lvbiI6bnVsbH19%7Ctwcon%5Etimelinechrome&ref_url=https%3A%2F%2Flocalhost%2Fodyssey%2Findex.php">
                     <i class='bx bxl-twitter bx-md'></i>
                 </a>
             </li>
             <li class="list-inline-item m-0">
                 <a class="text-light" target="_blank" href="https://www.instagram.com/odysseyynepal/?fbclid=IwAR0lltjzHYv6y_BKoWVEVWKK5A217zo3RT-B5B8EX99M890VWSRqLKUnaV4">
                    <i class='bx bxl-instagram bx-md'></i>
                </a>
            </li>
        </ul>
    </div>

    <div class="col-lg-5 col-md-4 my-sm-0 mt-4">
       <h3 class="h4 pb-lg-3 text-light light-300">Quick Links</h3>
       <ul class="list-unstyled text-light light-300">
         <li class="pb-2">
            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light" href="index.php">Home</a>
        </li>
        <li class="pb-2">
            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="about.php">About Us</a>
        </li>
        <li class="pb-2">
            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="gallery.php">Gallery</a>
        </li>
        <li class="pb-2">
            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="our-team.php">Our Team</a>
        </li>
        <li class="pb-2">
            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="departments.php">Departments</a>
        </li>
        <li class="pb-2">
            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="contact.php">Contact</a>
        </li>
    </ul>
</div>

<div class="col-lg-3 col-md-4 my-sm-0 mt-4">
 <h2 class="h4 pb-lg-3 text-light light-300">For Contact</h2>
 <ul class="list-unstyled text-light light-300">
    <li class="pb-2">
       <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text-light py-1" href="tel:+977 980-8429293">+977 980-8429293</a>
   </li>
   <li class="pb-2">
       <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1" href="mailto:odysseynepal@outlook.com">odysseynepal@outlook.com</a>
   </li>
</ul>
</div>

</div>
</div>

<div class="w-100 bg-primary py-3">
  <div class="container">
     <div class="row pt-2">
        <div class="col-lg-6 col-sm-12">
           <p class="text-lg-start text-center text-light light-300">
              © Copyright 2021 Odyssey Nepal. All Rights Reserved.
          </p>
      </div>
      <div class="col-lg-6 col-sm-12">
          <p class="text-lg-end text-center text-light light-300">
             Designed by <a rel="sponsored" class="text-decoration-none text-light" href="https://templatemo.com/" target="_blank"><strong>Bijen Shrestha</strong></a>
         </p>
     </div>
 </div>
</div>
</div>

</footer>
<!-- End Footer -->


<!-- Bootstrap -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Load jQuery require for isotope -->
<script src="assets/js/jquery.min.js"></script>
<!-- Isotope -->
<script src="assets/js/isotope.pkgd.js"></script>
<!-- Page Script -->
<script>
   $(window).load(function() {
                // init Isotope
                var $projects = $('.projects').isotope({
                   itemSelector: '.project',
                   layoutMode: 'fitRows'
               });
                $(".filter-btn").click(function() {
                   var data_filter = $(this).attr("data-filter");
                   $projects.isotope({
                      filter: data_filter
                  });
                   $(".filter-btn").removeClass("active");
                   $(".filter-btn").removeClass("shadow");
                   $(this).addClass("active");
                   $(this).addClass("shadow");
                   return false;
               });
            });
        </script>
        <!-- Templatemo -->
        <script src="assets/js/templatemo.js"></script>
        <!-- Custom -->
        <script src="assets/js/custom.js"></script>
        <!-- Facebook -->
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="XanR8BdA"></script>

    </body>

    </html>
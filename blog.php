<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
  ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog - Anyar Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Anyar
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<header id="header" class="fixed-top d-flex align-items-center header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">ALLUC</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php #hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php #about">About</a></li>
          <li><a class="nav-link scrollto" href="index.php #services">Services</a></li>
          <li><a class="nav-link scrollto " href="index.php #portfolio">Cars</a></li>
          <li><a class="nav-link scrollto" href="index.php #team">Founder</a></li>
          <li><a class="nav-link scrollto" href="index.php #contact">Contact</a></li>
          <li><a class="active" href="blog.php">Car-Details</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          
          <li><a class="cta d-none d-md-block" href="index.php?logout='1'" class="scrollto">Sign out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
        </ol>
        <h2>Blog</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/portfolio/1-Chevrolet-Silverado.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.php">Chevrolet Excelsior</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.php"><time datetime="2020-01-01">August 28, 2023</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.php">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Discover the unparalleled thrill of the Chevrolet Excelsior, where driving becomes a symphony of joy and performance. 
                  Crafted with precision and powered by innovation, this remarkable vehicle embodies the spirit of adventure.
                </p>
                <div class="read-more">
                  <a href="blog-single.php">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/portfolio/rJlD2JZv-i-LSr5pYcD-(edit).jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.php">Maserati Trident</a>
              </h2>

              <div class="entry-meta">
                <ul>
            
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.php"><time datetime="2020-01-01">August 23, 2023</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.php">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>      
                  Indulge in the epitome of automotive allure with the Maserati Trident. This sleek masterpiece is more than a car – 
                  it's an experience waiting to be embraced. Picture yourself cruising through the streets in unparalleled style, 
                  the Trident's dynamic curves and powerful presence turning heads at every corner. Feel the thrill of precision 
                  engineering at your fingertips, where performance meets perfection. From its luxurious interior to the exhilarating roar 
                  of its engine, every moment behind the wheel is an ode to sophistication. Elevate your journey, choose the Maserati Trident,
                  and make every drive an unforgettable adventure in elegance and prestige. Rent the legend, drive the legacy.  
               </p>
                <div class="read-more">
                  <a href="blog-single.php">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/portfolio/230509104454-02-ford-ranger-reveal.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.php">Ford</a>
              </h2>

              <div class="entry-meta">
                <ul>
 
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.php"><time datetime="2020-01-01">July 29, 2023</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.php">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Unleash the spirit of adventure with the iconic Ford – where innovation meets the open road. 
                  Picture yourself behind the wheel, conquering both city streets and untamed highways. 
                  The Ford experience is more than a ride; it's a journey marked by reliability, power, and an unmistakable sense of freedom. 
                  From its bold design to cutting-edge technology, every detail embodies the spirit of exploration. 
                  Whether you're cruising through urban landscapes or navigating off-road terrain, the Ford promises an exhilarating ride. 
                  Elevate your drive, choose Ford, and transform every moment into an unforgettable voyage. 
                  Rent the legacy, embrace the road, and let the thrill of a Ford redefine your journey.
                </p>
                <div class="read-more">
                  <a href="blog-single.php">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/portfolio/3_Ferrari-Pista-Spider-rear-3-4.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.php">Ferrari</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.php"><time datetime="2020-01-01">July 1, 2023</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.php">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                Ignite your senses and embrace the thrill of the extraordinary with Ferrari – the epitome of automotive excellence. 
                Step into the realm of unparalleled luxury and performance, 
                where every curve is a masterpiece and every engine roar is a symphony of power. 
                Renting a Ferrari is not just a drive; it's an immersive experience that elevates your journey to a realm of pure exhilaration.
                 Picture yourself in the driver's seat, conquering the road with the iconic prancing horse emblem leading the way.
                  From the sleek design to the heart-pounding speed, Ferrari delivers a driving adventure that transcends the ordinary. 
                  Seize the opportunity to command this Italian masterpiece, rent a Ferrari, 
                  and turn every moment on the road into a chapter of prestige and excitement. Unleash the power, 
                  embrace the style – rent a Ferrari and let the road become your stage.
                </p>
                <div class="read-more">
                  <a href="blog-single.php">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">Trucks/Pickup Trucks <span>(25)</span></a></li>
                  <li><a href="#">Vans/Minivans  <span>(12)</span></a></li>
                  <li><a href="#">Economy Cars <span>(5)</span></a></li>
                  <li><a href="#">Electric Cars<span>(22)</span></a></li>
                  <li><a href="#">Hybrid Cars<span>(8)</span></a></li>
                  <li><a href="#">Sports Cars <span>(14)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="assets/img/portfolio/1-Chevrolet-Silverado.jpg" alt="">
                  <h4><a href="blog-single.php">Chevrolet Excelsior</a></h4>
                  <time datetime="2020-01-01">August 28, 2023</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/portfolio/rJlD2JZv-i-LSr5pYcD-(edit).jpg" alt="">
                  <h4><a href="blog-single.php">Maserati Trident</a></h4>
                  <time datetime="2020-01-01">August 23, 2023</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/portfolio/230509104454-02-ford-ranger-reveal.jpg" alt="">
                  <h4><a href="blog-single.php">Ford</a></h4>
                  <time datetime="2020-01-01">July 29, 2023</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/portfolio/3_Ferrari-Pista-Spider-rear-3-4.jpg" alt="">
                  <h4><a href="blog-single.php">Ferrari</a></h4>
                  <time datetime="2020-01-01">July 1, 2023</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/portfolio/2022-mazda-cx-5-2p5-turbo-signature-123-1657559083.jpg" alt="">
                  <h4><a href="blog-single.php">Mazda</a></h4>
                  <time datetime="2020-01-01">May 14, 2023</time>
                </div>


              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Anyar</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Anyar</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
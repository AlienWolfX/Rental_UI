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

  <title>Car Details</title>
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
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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
          <li><a class="active" href="blog.php">Cars Detail</a></li>
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
          <button type="button" class=" btn btn-custom text-light" ><a href="home.php?logout='1'">Sign out</a></button>
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
          <li><a href="blog.php">Car Details</a></li>
        </ol>
        <h2>Car Details Single</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

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
              <h5 class="entry-meta">Rate:</h5>
              <div class="rating">  
                <input type="radio" name="star" id="star1"><label for="star1"></label>
                <input type="radio" name="star" id="star2"><label for="star2"></label>
                <input type="radio" name="star" id="star3"><label for="star3"></label>
                <input type="radio" name="star" id="star4"><label for="star4"></label>
                <input type="radio" name="star" id="star5"><label for="star5"></label>
              </div>
<div>
  
</div>
            
<br>
              <div class="entry-content">
                <p>
                Discover the unparalleled thrill of the Chevrolet Excelsior, where driving becomes a symphony of joy and performance. 
                Crafted with precision and powered by innovation, this remarkable vehicle embodies the spirit of adventure.
                </p>

                <p>
                Embark on an unforgettable journey of luxury and adventure – seize the moment and press 'Book Now' to transform your travel dreams into a reality!
                </p>

                <div class="d-flex justify-content-end entry-footer">
                  <button type="button" class="btn btn-warning text-light" style="background-color: #f6b024;"> <a href="b_index.php" class="text-light">Book Now!</a></button>
                </div>

             

              </div>
            </article><!-- End blog entry -->

            <div class="blog-author d-flex align-items-center">
              <img src="assets/img/blog/blog-author.jpg" class="rounded-circle float-left" alt="">
              <div>
                <h4>Jane Smith</h4>
                <div class="social-links">
                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
                My car rental experience was fantastic! The vehicle was in pristine condition, 
                and the entire process, from booking to returning, was incredibly efficient. 
                The staff was friendly and helpful, making sure all my needs were met. 
                Definitely my go-to choice for future rentals!       </p>
              </div>
            </div><!-- End blog author bio -->

            <div class="blog-comments">

              <h4 class="comments-count">6 Comments</h4>

              <div id="comment-1" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Georgia Reader</a></h5>
                    <time datetime="2020-01-01">01 September, 2023</time>
                    <p>
                    I had a wonderful experience with this car rental service. The selection of cars was impressive, and the one 
                    I chose exceeded my expectations. The check-in process was quick, and the staff provided excellent customer service. 
                    It made my trip much more enjoyable, and I will undoubtedly use this service again.
                    </p>
                  </div>
                </div>
              </div><!-- End comment #1 -->

              <div id="comment-2" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-2.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Aron Alvarado</a></h5>
                    <time datetime="2020-01-01">02 September, 2023</time>
                    <p>
                    Smooth and hassle-free car rental! The online reservation process was user-friendly, and when 
                    I arrived, the car was ready to go. Clean, well-maintained, and fuel-efficient – everything you'd want in a rental. 
                    The return process was equally easy. Highly recommend for a positive and stress-free experience.
                    </p>
                  </div>
                </div>

                <div id="comment-reply-1" class="comment comment-reply">
                  <div class="d-flex">
                    <div class="comment-img"><img src="assets/img/blog/comments-3.jpg" alt=""></div>
                    <div>
                      <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                      <time datetime="2020-01-01">04 September, 2023</time>
                      <p>
                      I completely agree. My recent experience with this car rental service echoed the sentiments expressed in this comment. 
                      The online reservation process was indeed user-friendly, making the entire booking experience seamless. 
                      Upon arrival, the car was impeccably prepared, reinforcing the commitment to cleanliness and maintenance. 
                      The efficiency of both the pickup and return processes truly made my trip stress-free. 
                      I wholeheartedly support and echo the recommendation for a positive and hassle-free car rental experience.
                      </p>
                    </div>
                  </div>

                  <div id="comment-reply-2" class="comment comment-reply">
                    <div class="d-flex">
                      <div class="comment-img"><img src="assets/img/blog/comments-4.jpg" alt=""></div>
                      <div>
                        <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                        <time datetime="2020-01-01">05 September, 2023</time>
                        <p>
                        I can relate completely! Just like the positive experience shared, 
                        my recent encounter with this car rental service mirrored the sentiments expressed here. 
                        The user-friendly online reservation process was a game-changer, ensuring a smooth and hassle-free booking from start to finish. 
                        The attention to detail in preparing the car showcased their commitment to cleanliness and maintenance, setting the stage for a comfortable journey. 
                        The efficiency in both pickup and return processes added an extra layer of convenience, making my entire trip truly stress-free. 
                        I wholeheartedly endorse and second the recommendation for anyone seeking a positive and seamless car rental experience  </p>
                      </div>
                    </div>

                  </div><!-- End comment reply #2-->

                </div><!-- End comment reply #1-->

              </div><!-- End comment #2-->

              <div id="comment-3" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-5.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Nolan Davidson</a> </h5>
                    <time datetime="2020-01-01">07 Jan, 2023</time>
                    <p>
                    Renting a car has never been so enjoyable! The staff was not only professional but also incredibly friendly, 
                    making me feel welcome from the moment I walked in. 
                    The vehicle was spotless, and I appreciated the attention to detail. Overall, a positive experience that enhanced my travel plans   </p>
                  </div>
                </div>

              </div><!-- End comment #3 -->

              <div id="comment-4" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-6.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Kay Duggan</a></h5>
                    <time datetime="2020-01-01">10 September, 2023</time>
                    <p>
                    Exceptional service and a fleet of well-maintained vehicles! The rental process was quick, 
                    and the staff demonstrated excellent customer care. The options available allowed me to choose the perfect car for my needs. 
                    A positive experience that added convenience and comfort to my trip. Will definitely use this car rental service again! </p>
                  </div>
                </div>

              </div><!-- End comment #4 -->

              <div class="reply-form">
                <h4>Leave a Reply</h4>
                <p>Your email address will not be published. Required fields are marked * </p>
                <form action="">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input name="name" type="text" class="form-control" placeholder="Your Name*">
                    </div>
                    <div class="col-md-6 form-group">
                      <input name="email" type="text" class="form-control" placeholder="Your Email*">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <input name="website" type="text" class="form-control" placeholder="Your Website">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Post Comment</button>

                </form>

              </div>

            </div><!-- End blog comments -->

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

              </div><!-- End sidebar recent posts-->


            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

<div class="footer-newsletter">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h4>Our Newsletter</h4>
        <p>Our newsletter delivers timely updates, exclusive content, and valuable insights 
          to keep you informed and engaged in the latest happenings and trends</p>
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
          <li><i class="bx bx-chevron-right"></i> <a href="#">Customer Service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Corporate Solutions</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Roadside Assistance</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Online Reservations</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Flexible Rental Periods</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Contact Us</h4>
        <p>
                      KM 7 NH1  Butuan City <br>               
                      Agusan Del Norte<br>
                      Philippines 8600 <br><br>
              <strong>Phone:</strong> 09631922544<br>
              <strong>Email:</strong> ALLUC@gmail.com<br>
            </p>

      </div>

      <div class="col-lg-3 col-md-6 footer-info">
        <h3>About ALLUC</h3>
        <p>Our organization's car rental service ensures seamless mobility solutions, offering a diverse fleet of 
          well-maintained vehicles to meet the varied needs of our members, 
          providing convenience and reliability for every journey</p>
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
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <title>About Us</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!--================ Start Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu" style="background-color: white">
      <!-- <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
              <input
                type="text"
                class="form-control"
                id="search_input"
                placeholder="Search Here"
              />
              <button type="submit" class="btn"></button>
              <span
                class="ti-close"
                id="close_search"
                title="Close Search"
              ></span>
            </form>
          </div>
        </div> -->
      <style>
        .navbar-brand.logo_h {
          font-family: 'sans-serif';
          font-weight: 600;
          font-size: 24px;
          letter-spacing: 0.5px;
        }
      </style>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.php">JSET</a>

          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div
            class="collapse navbar-collapse offset"
            id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about-us.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Gallery.php">Gallery</a>
              </li>
              <li class="nav-item submenu dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  data-toggle="dropdown"
                  role="button"
                  aria-haspopup="true"
                  aria-expanded="false">Projects</a>
                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="img/Projects.pdf">Completed Projects</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="">Future Projects</a>
                  </li>
                  <!-- <li class="nav-item">
                      <a class="nav-link" href="elements.html">Elements</a>
                    </li> -->
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="class.php" id="courses-link">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class="nav-item d-flex align-items-center ml-lg-3">
                <?php if (isset($_SESSION['user_id'])): ?>
                  <a href="logout.php" class="btn btn3">Logout</a>
                <?php endif; ?>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================ End Header Menu Area =================-->

  <!--================Home Banner Area =================-->
  <section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="banner_content text-center">
              <h2>Classes</h2>
              <div class="page_link">
                <a href="index.php">Home</a>
                <a href="about-us.php">classes</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->
  <style>
    .course-card {
      background: #fff;
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      margin-top: 20px display: flex;
      flex-direction: column;
      margin-top: 20px;
      transition: all 0.3s ease;

    }

    .course-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
    }

    .course-img img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      border-top-left-radius: 14px;
      border-top-right-radius: 14px;
    }

    .course-content {
      padding: 25px;
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }

    .course-content h4 {
      font-size: 18px;
      font-weight: 600;
      color: #002347;
      margin-bottom: 12px;
    }

    .course-content p {
      font-size: 14px;
      color: #6b6b6b;
      line-height: 1.7;
      flex-grow: 1;
    }

    .course-btn {
      display: block;
      text-align: center;
      padding: 12px;
      border: 1px solid #d6d9ff;
      border-radius: 6px;
      color: #002347;
      font-weight: 500;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .course-btn:hover {
      background: #3b4cca;
      color: #fff;
    }

    .course-btn.disabled {
      opacity: 0.4;
      pointer-events: none;
    }
  </style>
  <!--================ Start About Area =================-->
  <div class="courses-area section-padding40 fix mt-5">
    <h2 style="text-align:center">Our featured classes</h2>

    <div class="container">
      <div class="row justify-content-center">
        <!-- Card 1 -->
        <div class="col-lg-4 col-md-6 mb-4 d-flex mt-5">
          <div class="course-card w-100">
            <div class="course-img">
              <img src="img/8th-std-new.png" alt="">
            </div>
            <div class="course-content">
              <h4>8th standard</h4>
              <p>
                The automated process all your website tasks. Discover tools and
                techniques to engage effectively with vulnerable children and young people.
              </p>
              <a href="8thstandard.php" class="course-btn">View Subjects</a>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-4 col-md-6 mb-4 d-flex mt-5">
          <div class="course-card w-100">
            <div class="course-img">
              <img src="img/9th-std-new.png" alt="">
            </div>
            <div class="course-content">
              <h4>9th standard</h4>
              <p>
                The automated process all your website tasks. Discover tools and
                techniques to engage effectively with vulnerable children and young people.
              </p>
              <a href="9thstandard.php" class="course-btn">View Subjects</a>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-4 col-md-6 mb-4 d-flex mt-5">
          <div class="course-card w-100">
            <div class="course-img">
              <img src="img/10th.png" alt="">
            </div>
            <div class="course-content">
              <h4>10th standard</h4>
              <p>
                The automated process all your website tasks. Discover tools and
                techniques to engage effectively with vulnerable children and young people.
              </p>
              <a href="10thstandard.php" class="course-btn">View Subjects</a>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
  </div><br><br>
  <!-- Courses area End -->

  <!--================ End About Area =================-->


  <!--================ Start footer Area  =================-->
  <footer class="footer-area section_gap">
    <div class="container">
      <div class="row">
        <!-- Logo Section -->
        <div class="col-lg-3 col-md-6 single-footer-widget">
          <h4>JSET</h4>
          <span
            style="
                font-size: 24px;
                font-weight: bold;
                color: #333;
                max-width: 150px;
                margin-top: 10px;
                display: inline-block;
              ">
          </span>

          <p>
            Explore a variety of powerful learning features designed to help
            students succeed.
          </p>
        </div>

        <!-- Quick Links -->
        <div class="col-lg-3 col-md-6 single-footer-widget">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about-us.php">About Us</a></li>
            <li><a href="Videos.php">Classes</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>

        <!-- Contact Details -->
        <div class="col-lg-3 col-md-6 single-footer-widget">
          <h4>Contact Us</h4>
          <ul>
            <li><i class="ti-location-pin"></i> Bengaluru</li>
            <li><i class="ti-mobile"></i> +91 80885 25184</li>
            <li><i class="ti-email"></i> info@zameersirclasses.in</li>
          </ul>
        </div>

        <!-- Newsletter -->
        <div class="col-lg-3 col-md-6 single-footer-widget">
          <h4>Newsletter</h4>
          <div class="form-wrap" id="mc_embed_signup">
            <form
              target="_blank"
              action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
              method="get"
              class="form-inline">
              <input
                class="form-control"
                name="EMAIL"
                placeholder="Your Email Address"
                required=""
                type="email" />
              <button class="click-btn btn btn-default">
                <span>subscribe</span>
              </button>
            </form>
          </div>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div class="row footer-bottom d-flex justify-content-between">
        <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
          Copyright &copy;
          <script>
            document.write(new Date().getFullYear());
          </script>
          All rights reserved | Designed by
          <span class="designer">
            <!-- <i class="ti-heart" aria-hidden="true"></i> -->
            <a
              href="https://www.staticdevelopers.in/"
              target="_blank"
              class="text-white designer-link">CDP</a>
          </span>
        </p>

        <div class="col-lg-4 col-sm-12 footer-social">
          <a
            href="https://www.facebook.com/people/BZ-Zameer-Ahmed-Khan/100044670723173/#"><i class="ti-facebook"></i></a>
          <a href="https://www.instagram.com/b.z.zameerahmedkhan/"><i class="ti-instagram"></i></a>
          <a href="https://www.youtube.com/channel/UCTlvfqfwxHSRM-qJGXYZbkQ"><i class="ti-youtube"></i></a>
          <a href="https://x.com/BZZameerAhmedK"><i class="ti-twitter"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!--================ End footer Area  =================-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/owl-carousel-thumb.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <!--gmaps Js-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
  <script src="js/gmaps.min.js"></script>
  <script src="js/theme.js"></script>
</body>

</html>
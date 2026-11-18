<!DOCTYPE html>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
  <div class="top-bar">
    <div class="container d-flex justify-content-between align-items-center">

      <!-- Left Side -->
      <div class="top-left">
        <span><i class="fa fa-phone"></i> +91 80885 25188</span>
        <span class="divider"></span>
        <span><i class="fa fa-envelope"></i>info@krishnappasir.in</span>
      </div>

      <!-- Right Side -->
      <div class="top-right">
        <span class="follow-text">Follow Us :</span>

        <a href="https://www.facebook.com/mkrishnappa.official"><i class="fab fa-facebook-f"></i></a>
        <a href="https://x.com/mkrishnappa_MLA"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/mkrishnappa.official/"><i class="fab fa-instagram"></i></a>

        <span class="divider"></span>
      </div>

    </div>
  </div>
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
          <a class="navbar-brand logo_h" href="index.php">
            <img src="img/Logoweb.png" alt="JSET Logo" class="logo-img">
          </a>

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
              <h2>Gallery</h2>
              <div class="page_link">
                <a href="index.html">Home</a>
                <a href="about-us.html">Gallery</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!--================ Start Gallery Area =================-->
  <section class="gallery_area section_gap">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="main_title">
            <h2 class="mb-3">Gallery</h2>
            <p style="color: #043566;">A glimpse of important moments, events & achievements.</p>
          </div>
        </div>
      </div>

      <div class="row gallery-grid">
        <div class="col-lg-4 col-md-6">
          <div class="gallery_item wow fadeInUp" data-wow-delay="0.1s">
            <img class="img-fluid" src="img/Gallery/1.png" alt="" />
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="gallery_item wow fadeInUp" data-wow-delay="0.2s">
            <img class="img-fluid" src="img/Gallery/2.png" alt="" />
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="gallery_item wow fadeInUp" data-wow-delay="0.3s">
            <img class="img-fluid" src="img/Gallery/3.png" alt="" />
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="gallery_item wow fadeInUp" data-wow-delay="0.4s">
            <img class="img-fluid" src="img/Gallery/4.png" alt="" />
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="gallery_item wow fadeInUp" data-wow-delay="0.5s">
            <img class="img-fluid" src="img/Gallery/5.png" alt="" />
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="gallery_item wow fadeInUp" data-wow-delay="0.6s">
            <img class="img-fluid" src="img/Gallery/6.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Gallery Area =================-->
  <style>
    .gallery_item {
      margin-bottom: 30px;
      overflow: hidden;
      border-radius: 10px;
      position: relative;
    }

    .gallery_item img {
      width: 100%;
      transition: transform 0.4s ease;
    }

    .gallery_item:hover img {
      transform: scale(1.08);
    }
  </style>
  <!--================ Start footer Area  =================-->
  <footer class="footer-area section_gap">
    <div class="container">
      <div class="row">
        <!-- Logo Section -->
        <div class="col-lg-3 col-md-6 single-footer-widget">
          <a class="navbar-brand logo_h" href="index.php">
            <img src="img/logoweb.png" alt="JSET Logo" class="logo-img">
          </a>
          <span
            style="
                font-size: 24px;
                font-weight: bold;
                color: white;
                max-width: 150px;
                margin-top: 10px;
                display: inline-block;
              ">
          </span>

          <p style="color: white;">
            Explore a variety of powerful learning features designed to help
            students succeed.
          </p>
        </div>

        <!-- Quick Links -->
        <div class="col-lg-3 col-md-6 single-footer-widget">
          <h4 style="color: white;">Quick Links</h4>
          <ul>
            <li><a href="index.php" style="color: white;">Home</a></li>
            <li><a href="about-us.php" style="color: white;">About Us</a></li>
            <li><a href="class.php" style="color: white;">Classes</a></li>
            <li><a href="contact.php" style="color: white;">Contact</a></li>
          </ul>
        </div>

        <!-- Contact Details -->
        <div class="col-lg-3 col-md-6 single-footer-widget">
          <h4>Contact Us</h4>
          <ul>
            <li><i class="ti-location-pin"></i> Vijayanagar, Bengaluru</li>
            <li><i class="ti-mobile"></i> +91 80885 25188</li>
            <li><i class="ti-email"></i> info@krishnappasir.in</li>
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
            <a
              href="https://www.staticdevelopers.in/"
              target="_blank"
              class="text-white designer-link">CDP</a>
          </span>
        </p>

        <div class="col-lg-4 col-sm-12 footer-social">
          <a
            href="https://www.facebook.com/mkrishnappa.official"><i class="ti-facebook"></i></a>
          <a href="https://www.instagram.com/mkrishnappa.official/"><i class="ti-instagram"></i></a>

          <a href="https://x.com/mkrishnappa_MLA"><i class="ti-twitter"></i></a>
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
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
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <title>Video Classes</title>
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
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
            <img src="img/logoweb.png" alt="JSET Logo" class="logo-img">
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
                <a href="">Classes</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="video-popup" id="videoPopup">
    <div class="video-popup-content">
      <span class="video-close" id="closePopup">&times;</span>
      <iframe
        id="popupVideo"
        allowfullscreen
        allow="
            accelerometer;
            autoplay;
            clipboard-write;
            encrypted-media;
            gyroscope;
            picture-in-picture;
          "
        referrerpolicy="origin"
        src="">
      </iframe>
    </div>
  </div>

  <section class="video_area section_gap">
    <div class="container">
      <div class="row justify-content-center mb-4">
        <div class="col-lg-8 text-center">
          <h2>Video Classes</h2>
        </div>
      </div>
      <br /><br />

      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card video-card">
            <div class="ratio ratio-16x9">
              <iframe
                loading="lazy"
                title="Gumlet video player"
                src="https://play.gumlet.io/embed/6951b38d4c8a18286bfefc7f?background=false&autoplay=false&loop=false&disableControls=false"
                style="border: none"
                allow="
                    accelerometer;
                    gyroscope;
                    autoplay;
                    encrypted-media;
                    picture-in-picture;
                    fullscreen;
                  "
                allowfullscreen
                referrerpolicy="origin">
              </iframe>
              <div class="video-overlay"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title">Carbon & Its Compounds – Brush Up</h5>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card video-card">
            <div class="ratio ratio-16x10">
              <iframe
                loading="lazy"
                title="Gumlet video player"
                src="https://play.gumlet.io/embed/6951b38d4c8a18286bfefc77?background=false&autoplay=false&loop=false&disableControls=false"
                style="border: none"
                allow="
                    accelerometer;
                    gyroscope;
                    autoplay;
                    encrypted-media;
                    picture-in-picture;
                    fullscreen;
                  "
                referrerpolicy="origin">
              </iframe>
              <div class="video-overlay"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title">Carbon & Its Compounds – Brush Up</h5>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card video-card">
            <div class="ratio ratio-16x9">
              <iframe
                loading="lazy"
                title="Gumlet video player"
                src="https://play.gumlet.io/embed/6951b38daa03be0b83498f04?background=false&autoplay=false&loop=false&disableControls=false"
                style="border: none"
                allow="
                    accelerometer;
                    gyroscope;
                    autoplay;
                    encrypted-media;
                    picture-in-picture;
                    fullscreen;
                  "
                referrerpolicy="origin">
              </iframe>
              <div class="video-overlay"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title">Carbon & Its Compounds – Brush Up</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <style>
    /* ===============================
   VIDEO POPUP
   =============================== */

    .video-popup {
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, 0.8);
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    .video-popup-content {
      position: relative;
      width: 90%;
      max-width: 900px;
      background: #002347;
      padding: 15px;
      border-radius: 8px;
    }

    .video-popup-content iframe {
      width: 100%;
      height: 450px;
      border: none;
    }

    .video-close {
      position: absolute;
      top: -40px;
      right: 0;
      font-size: 28px;
      color: #fff;
      cursor: pointer;
    }

    /* ===============================
   VIDEO CARD GRID FIX
   =============================== */

    .video_area .row {
      margin-left: 0;
      margin-right: 0;
    }

    .video_area .col-lg-4,
    .video_area .col-md-6 {
      padding-left: 6px;
      padding-right: 6px;
    }

    /* Remove Bootstrap spacing */
    .video_area .mb-4 {
      margin-bottom: 0 !important;
    }

    /* ===============================
   VIDEO CARD BASE
   =============================== */

    .video-card {
      display: flex;
      flex-direction: column;
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
      border-radius: 6px;
      overflow: hidden;
      cursor: pointer;
      border: none;

      /* Animation */
      animation: fadeUp 0.7s ease forwards;
      opacity: 0;
      transform: translateY(20px);
    }

    /* Stagger animation */
    .video_area .col-lg-4:nth-child(1) .video-card {
      animation-delay: 0.1s;
    }

    .video_area .col-lg-4:nth-child(2) .video-card {
      animation-delay: 0.25s;
    }

    .video_area .col-lg-4:nth-child(3) .video-card {
      animation-delay: 0.4s;
    }

    /* ===============================
   VIDEO FRAME
   =============================== */

    .video-card .ratio {
      width: 100%;
      aspect-ratio: 16 / 9;
      margin: 0;
      padding: 0;
    }

    .video-card iframe {
      width: 100%;
      height: 100%;
      display: block;
      border: none;
      transition: transform 0.4s ease;
    }

    /* Click overlay */
    .video-overlay {
      position: absolute;
      inset: 0;
      cursor: pointer;
      z-index: 10;
      background: rgba(0, 0, 0, 0);
    }

    /* ===============================
   CARD BODY
   =============================== */

    .video-card .card-body {
      padding: 8px 10px;
      margin: 0;
      text-align: center;
    }

    .video-card .card-title {
      margin: 0;
      line-height: 1.4;
    }

    /* ===============================
   HOVER EFFECTS
   =============================== */

    .video-card {
      transition:
        transform 0.35s ease,
        box-shadow 0.35s ease;
    }

    .video-card:hover {
      transform: translateY(-8px) scale(1.02);
      box-shadow: 0 14px 30px rgba(0, 0, 0, 0.18);
    }

    .video-card:hover iframe {
      transform: scale(1.03);
    }

    /* ===============================
   ANIMATION
   =============================== */

    @keyframes fadeUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* ===============================
   MOBILE OPTIMIZATION
   =============================== */

    @media (max-width: 768px) {
      .video-popup-content iframe {
        height: 240px;
      }

      .video_area .col-lg-4,
      .video_area .col-md-6 {
        padding-left: 4px;
        padding-right: 4px;
      }
    }
  </style>

  <script>
    const popup = document.getElementById("videoPopup");
    const popupIframe = document.getElementById("popupVideo");

    // MODIFIED: Logic now copies the SRC instead of moving the element
    document.querySelectorAll(".video-card").forEach((card) => {
      card.addEventListener("click", function() {
        const cardIframe = this.querySelector("iframe");
        const videoSrc = cardIframe.getAttribute("src");

        // Set source and add autoplay parameter
        const autoplaySrc = videoSrc.replace(
          "autoplay=false",
          "autoplay=true",
        );

        popupIframe.setAttribute("src", autoplaySrc);
        popup.style.display = "flex";
      });
    });

    document
      .getElementById("closePopup")
      .addEventListener("click", closePopup);

    popup.addEventListener("click", (e) => {
      if (e.target === popup) closePopup();
    });

    function closePopup() {
      popup.style.display = "none";
      // Reset src to stop the video when closed
      popupIframe.setAttribute("src", "");
    }
  </script>

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

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/owl-carousel-thumb.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/theme.js"></script>
</body>

</html>
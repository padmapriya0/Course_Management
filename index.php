<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
if (isset($_SESSION['logout_success'])) {
  echo "<script>alert('Logout successful!');</script>";
  unset($_SESSION['logout_success']);
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
  <title>JSET</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="style.css">
  <style>
    .navbar-brand.logo_h {
      font-family: 'sans-serif';
      font-weight: 600;
      font-size: 24px;
      letter-spacing: 0.5px;
    }

    .feature-icon {
      display: block;
      font-size: 38px;
      color: #0b72ff;
      margin-bottom: 15px;
    }

    .top_logo {
      width: 100px;
      height: 100px;
    }

    .top-bar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 9999;
    }

    .ribbon {
      z-index: 9999;
      background-color: #1f2a44;
      background-image: linear-gradient(to bottom,
          rgba(31, 42, 68, 1) 0%,
          rgba(42, 56, 85, 0.85) 60%,
          rgba(42, 56, 85, 0.4) 100%);
      color: #f5c542;
      text-align: center;
      padding: 10px 0;
      font-weight: 600;
      letter-spacing: 1px;
      font-size: 14px;
      transition: all 0.3s ease;
    }

    .ribbon-track {
      display: flex;
      gap: 50px;
      white-space: nowrap;
      letter-spacing: 2px;
      font-weight: bold;
      animation: scroll 13s linear infinite;
    }

    .ribbon-track span {
      flex-shrink: 0;
      font-weight: 700;
    }

    @keyframes scroll {
      0% {
        transform: translateX(70vw);
      }

      100% {
        transform: translateX(-70vw);
      }
    }

    .site-navigation {
      background: #ffffff;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
      transition: all 0.3s ease;
      padding: 10px 30px;
      backdrop-filter: blur(10px);
    }

    .site-navigation .d-flex {
      padding: 0 30px;
    }

    .menu {
      list-style: none;
      display: flex;
      gap: 20px;
      justify-content: flex-end;
      align-items: center;
    }

    .menu li {
      display: inline-block;
    }

    .menu li a {
      position: relative;
      display: inline-block;
      padding: 8px 5px;
      text-decoration: none;
      color: #222;
      font-weight: 500;
    }

    .menu li a::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: -4px;
      width: 0;
      height: 3px;
      background: #ff6a00;
      transition: width 0.3s ease;
    }

    .menu li a:hover::after {
      width: 100%;
    }

    .menu li.active a::after {
      width: 100%;
    }

    .navbar-scrolled {
      background: #1a1a2e !important;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    .navbar-scrolled .menu li a {
      color: #fff;
    }

    .navbar-scrolled .menu li a::after {
      background: #00c6ff;
    }

    .single_course .btn {
      display: block;
      text-align: center;
      padding: 12px;
      border: 1px solid #525FE1;
      border-radius: 6px;
      color: #525FE1;
      font-weight: 500;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .single_course .btn:hover {
      color: #fff;
      border: 1px solid #F26B65;
      background: #F26B65;
    }

    .hero-section {
      position: relative;
      min-height: 100vh;
      background-image: url("img/home-bg3.jpeg");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* Overlay */
    .hero-section::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.2);
    }

    /* Content */
    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 850px;
      color: #fff;
    }

    .hero-content h1 {
      font-size: 60px;
      font-weight: 700;
      margin-bottom: 50px;
    }

    .hero-content h1 span {
      color: #fff;
    }

    .hero-content p {
      font-size: 18px;
      line-height: 1.8;
      margin: 0 auto;
    }

    /* Responsive */
    @media (max-width:768px) {
      .hero-section {
        min-height: 80vh;
        padding: 60px 20px;
      }

      .hero-content h1 {
        font-size: 40px;
      }

      .hero-content p {
        font-size: 16px;
      }
    }


    /* Section */
    .edu-category-section {
      padding: 80px;
      background: #efeff3;
    }

    .edu-container {
      width: 100%;
    }

    .edu-heading {
      text-align: center;
      margin-bottom: 50px;
    }

    .edu-heading h2 {
      font-size: 36px;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .edu-heading p {
      color: #666;
      font-size: 16px;
    }

    /* Grid */
    .edu-category-grid {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 20px;
      flex-wrap: nowrap;
      /* Keeps all in one line */
    }

    /* Card */
    .edu-card {
      flex: 1;
      min-width: 170px;
      background: #fff;
      border-radius: 15px;
      padding: 25px 15px;
      text-align: center;
      text-decoration: none;
      box-shadow: 0 8px 25px rgba(0, 0, 0, .12);
      transition: .35s ease;
      border: 1px solid #eee;
    }

    .edu-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
    }

    .edu-card h4 {
      margin-top: 18px;
      color: #222;
      font-size: 18px;
      font-weight: 600;
    }

    /* Icon */
    .edu-icon {
      width: 50px;
      height: 50px;
      margin: auto;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-size: 28px;
      font-weight: bold;
    }

    .icon-blue {
      background: #3b82f6;
    }

    .icon-green {
      background: #22c55e;
    }

    .icon-orange {
      background: #f97316;
    }

    .icon-purple {
      background: #8b5cf6;
    }

    .icon-red {
      background: #ef4444;
    }

    .icon-dark {
      background: #111827;
    }

    /* Responsive */
    @media(max-width:992px) {
      .edu-category-grid {
        flex-wrap: wrap;
        justify-content: center;
      }

      .edu-card {
        flex: 0 0 calc(33.33% - 20px);
      }
    }

    @media(max-width:576px) {
      .edu-card {
        flex: 0 0 calc(50% - 15px);
      }
    }

    .our-classes {
      margin-top: 60px;
    }
  </style>


</head>

<body>
  <div class="ribbon">
    <div class="ribbon-track">
      <span>Upcoming Event • Upcoming Event • Upcoming Event • Upcoming Event •</span>
    </div>
  </div>
  <!--================ Start Header Menu Area =================-->
  <header class="header_area">

    <div class="main_menu" style="background-color: white">

      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          div.box
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
                <a class="nav-link" href="instructors.php">Instructors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="class.php" id="courses-link">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="classes.php" id="courses-link">Live Class</a>
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
  <!-- Video Popup -->

  <div id="videoPopup" class="video-popup">
    <div class="video-popup-content">

      <!-- Close Button -->
      <span id="closePopup" class="close-btn">&times;</span>

      <!-- Video (Switched from iframe to video tag) -->
      <video
        id="introVideo"
        width="100%"
        height="500"
        controls
        playsinline>
        <source src="img/intro.mp4" type="video/mp4">
      </video>

    </div>
  </div>

  <!-- CSS -->

  <!-- JavaScript -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const popup = document.getElementById("videoPopup");
      const video = document.getElementById("introVideo");
      const closeBtn = document.getElementById("closePopup");

      // Show only once per session
      if (!sessionStorage.getItem("videoShown")) {
        popup.classList.add("show");
        video.play();
        sessionStorage.setItem("videoShown", "true");
      }

      function stopVideo() {
        // Pause video
        video.pause();

        // Reset to beginning
        video.currentTime = 0;

        // Force browser to stop downloading/playing
        video.load();

        // Hide popup
        popup.classList.remove("show");
      }

      closeBtn.addEventListener("click", stopVideo);

      popup.addEventListener("click", function(e) {
        if (e.target === popup) {
          stopVideo();
        }
      });
    });
  </script>

  <!--================ Start Home Banner Area =================-->
  <section class="home_bg hero-section">
    <div class="overlay"></div>
    <div class="container h-100">
      <div class="row h-100 align-items-end justify-content-start pb-3">
        <!-- <div class="col-lg-8">
          <div class="hero-content">
            <h1><span>Shri. B. S. Suresh</span></h1>
            <p>
              A Indian politician from Karnataka affiliated with the Indian National Congress (INC). He represents the Hebbal constituency in the Karnataka Legislative Assembly and currently serves as Minister for Urban Development in the state government.
            </p>
          </div>
        </div> -->
      </div>
    </div>
  </section>

  <section class="count_area counter_feature">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="single-counter">
            <span class="ti-folder sc_one"></span>
            <h2 class="counter-num">8</h2>
            <p>Our Online Course</p>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="single-counter">
            <span class="ti-medall-alt sc_two"></span>
            <h2 class="counter-num">5</h2>
            <p>Academic Programs</p>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="single-counter">
            <span class="ti-id-badge sc_three"></span>
            <h2 class="counter-num">12000</h2>
            <p>Certified Students</p>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="single-counter">
            <span class="ti-user sc_four"></span>
            <h2 class="counter-num">14000</h2>
            <p>Enrolled Students</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Home Banner Area =================-->

  <!-- feature start -->
  <section class="top_cat__area section-padding"
    style="background-image: url(assets/img/bg/shape-1.png); background-size:cover; background-position:center;">
    <div class="container">
      <div class="section-title text-center mb-5" data-aos="fade-up">
        <h2>Awesome Features</h2>
        <p>Explore a variety of powerful learning features designed to help students succeed.</p>
      </div>

      <div class="row">

        <!-- ITEM -->
        <div class="col-lg-4 col-md-6 col-12 mb-4 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="single_tp feature-card w-100">
            <div class="tp-content">
              <i class="fas fa-spa feature-icon"></i>
              <h3>Yoga Classes for Students</h3>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 mb-4 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="single_tp feature-card w-100">
            <div class="tp-content">
              <i class="fas fa-brain feature-icon"></i>
              <h3>Psychometric Tests</h3>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 mb-4 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="single_tp feature-card w-100">
            <div class="tp-content">
              <i class="fas fa-lightbulb feature-icon"></i>
              <h3>Application-Based Learning</h3>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 mb-4 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="single_tp feature-card w-100">
            <div class="tp-content">
              <i class="fas fa-medal feature-icon"></i>
              <h3>NTSE / Olympiad Coaching</h3>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 mb-4 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="single_tp feature-card w-100">
            <div class="tp-content">
              <i class="fas fa-palette feature-icon"></i>
              <h3>Creative Thinking Workshops</h3>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 mb-4 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="single_tp feature-card w-100">
            <div class="tp-content">
              <i class="fas fa-chart-line feature-icon"></i>
              <h3>Analytical & Logical Reasoning</h3>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--================ End Feature Area =================-->

  <section class="ab_area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
          data-wow-offset="0">
          <div class="ab_img">
            <img src="img/about.png" class="img-fluid" alt="image">
          </div>
        </div>

        <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
          data-wow-offset="0">
          <div class="ab_content">
            <h2>Shri. B. S. Suresh</h2>
            <p>Byrathi Suresh is an Indian politician from Karnataka affiliated with the Indian National Congress (INC). As Minister for Urban Development & Town Planning, Byrathi Suresh handles one of the most critical departments in a rapidly urbanising state like Karnataka.</p>

            <h2>Role and Responsibilities</h2>
            <p><strong>Position:</strong>Urban Development Minister of Karnataka.</p>
            <p><strong>Assumed Office:</strong> 13 May 2023.</p>
            <p><strong>Responsibilities:</strong> Urban infrastructure development Town planning regulations and master plans Smart city implementation Urban local body governance Housing and layout approvals Development authorities (BDA and others).</p>
            <br>
            <a class="btn_one btn btn-outline-success" href="about-us.php">Learn More <i class="ti-arrow-top-right"></i></a>
          </div>
        </div>

        <!-- category -->
        <section class="edu-category-section mb-5" style="width: 1600px;">
          <div class="edu-container">

            <div class="edu-heading">
              <h2>Find Out by Popular Categories</h2>
              <p>
                Explore a wide range of learning options and gain new skills with our structured courses.
              </p>
            </div>

            <div class="edu-category-wrapper">
              <div class="edu-category-grid">

                <a href="#" class="edu-card">
                  <div class="edu-icon icon-purple">11</div>
                  <h4>11th Standard</h4>
                </a>

                <a href="#" class="edu-card">
                  <div class="edu-icon icon-red">12</div>
                  <h4>12th Standard</h4>
                </a>

                <a href="#" class="edu-card">
                  <div class="edu-icon icon-dark">
                    <i class="fa fa-robot"></i>
                  </div>
                  <h4>AI & ML</h4>
                </a>

              </div>
            </div>
          </div>
        </section>


        <!-- <section class="home_course section-padding ">
          <div class="container">

            <div class="row mb-4">
              <div class="col-lg-8">
                <div class="section-title">
                  <h2 class="fw-bold our-classes">Our featured classes</h2>
                </div>
              </div>

              <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="cour_btn">
                  <a href="class.php" class="btn_one">View all Courses <i class="ti-arrow-top-right"></i></a>
                </div>
              </div>
            </div>

            <div class="row g-4">

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="single_course card border-0 shadow-sm h-100 text-center p-3">
                  <div class="single_c_img">
                    <img src="img/8th-std-new.png" class="img-fluid" alt="course-image" />
                    <span>8th Grade</span>
                  </div>
                  <p class="text-muted">
                    The automated process all your website tasks. Discover tools and techniques to engage
                    effectively with vulnerable children and young people.
                  </p>
                  <a href="<?php echo isset($_SESSION['user_id']) ? '8thstandard.php' : 'login.php'; ?>" class="course-btn">
                    View Subjects
                  </a>
                </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="single_course card border-0 shadow-sm h-100 text-center p-3">
                  <div class="single_c_img">
                    <img src="img/9th-std-new.png" class="img-fluid" alt="course-image" />
                    <span>9th Grade</span>
                  </div>
                  <p>The automated process all your website tasks. Discover tools and techniques to engage
                    effectively with vulnerable children and young people.</p>
                  <a href="<?php echo isset($_SESSION['user_id']) ? '9thstandard.php' : 'login.php'; ?>" class="course-btn">
                    View Subjects
                  </a>
                </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="single_course card border-0 shadow-sm h-100 text-center p-3">
                  <div class="single_c_img">
                    <img src="img/10th.png" class="img-fluid" alt="course-image" />
                    <span>10th Grade</span>
                  </div>
                  <p>The automated process all your website tasks. Discover tools and techniques to engage
                    effectively with vulnerable children and young people.</p>
                  <a href="<?php echo isset($_SESSION['user_id']) ? '10thstandard.php' : 'login.php'; ?>" class="course-btn">
                    View Subjects
                  </a>
                </div>
              </div>

            </div>
          </div>
        </section><br><br><br><br> -->


        <!--================ Start About Area =================-->
        <div class="footer section-padding">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="single_footer">
                  <p>Explore a variety of powerful learning features designed to help students succeed.</p>
                  <div class="social_profile">
                    <ul>
                      <li><a class="f_facebook" href=""><i class="fa-solid fa-x"></i></a></li>
                      <li><a class="f_twitter" href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                      <li><a class="f_instagram" href="https://www.instagram.com/dr.nagalakshmii?igsh=MmM0ZTc4Z3Bub3M1"><i class="fa-brands fa-instagram"></i></a></li>
                      <li><a class="f_linkedin" href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div><!--- END COL -->
              <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="single_footer">
                  <h4>Quick Links</h4>
                  <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="class.php">Classes</a></li>
                    <li><a href="contact.php">Contact</a></li>
                  </ul>
                </div>
              </div><!--- END COL -->
              <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="single_footer">
                  <h4>Popular Courese</h4>
                  <ul>
                    <!-- <li><a href="8thstandard.php">8th Grade</a></li>
                    <li><a href="9thstandard.php">9th Grade</a></li>
                    <li><a href="10thstandard.php">10th Grade</a></li> -->
                    <li><a href="#">11th Grade</a></li>
                    <li><a href="#">12th Grade</a></li>
                  </ul>
                </div>
              </div><!--- END COL -->
              <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="single_footer">
                  <h4>Contact Info</h4>
                  <div class="sf_contact">
                    <span class="ti-map"></span>
                    <p>1st Floor, Karnataka Housing Board Building, Cauvery Bhawan, K.G. Marg, Bengaluru - 560009</p>
                  </div>
                  <div class="sf_contact">
                    <span class="ti-mobile"></span>
                    <p>+91 9972333083</p>
                  </div>
                  <div class="sf_contact">
                    <span class="ti-email"></span>
                    <p>iasforfree@gmail.com</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- END FOOTER -->

        <!-- START FOOTER COPYRIGHT -->
        <div class="foot_copy text-center">
          <div class="footer_copyright">
            <p class="text-center">&copy; 2024. All Rights Reserved • Designed by <a href="https://staticdevelopers.in/">CDP</a></p>
          </div>
        </div>
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
        <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
        <script>
          AOS.init({
            duration: 1000,
            once: true
          });
        </script>
</body>

</html>
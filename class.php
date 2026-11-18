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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
              <li class="nav-item ">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about-us.php">About</a>
              </li>
              <li class="nav-item active">
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

  <!--================Home Banner Area =================-->
  <section class="section-top">
    <div class="container">
      <div class="col-lg-10 offset-lg-1 text-center">
        <div class="section-top-title">
          <h1>Classes</h1>
          <ul class="list-unstyled d-flex justify-content-center gap-2">
            <li><a href="index.php">Home</a></li>
            <li>/</li>
            <li>Classes</li>
          </ul>

        </div>
      </div>
    </div>
  </section><br><br><br><br></br>



  <!--================End Home Banner Area =================-->
  <style>
    /* .course-card {
      background: #fff;
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      margin-top: 20px display: flex;
      flex-direction: column;
      margin-top: 20px;
      transition: all 0.3s ease;

    } */

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
  <section class="home_course section-padding">
    <div class="container">

      <div class="row mb-4">
        <div class="col-lg-8">
          <div class="section-title">
            <h2 class="fw-bold">Our featured classes</h2>
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

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="single_course card border-0 shadow-sm h-100 text-center p-3">
            <div class="single_c_img">
              <img src="img/11th.png" class="img-fluid" alt="course-image" />
              <span>11th Grade</span>
            </div>
            <p>Coming Soon</p>
            <a href="<?php echo isset($_SESSION['user_id']) ? '' : 'login.php'; ?>" class="course-btn">
              View Subjects
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="single_course card border-0 shadow-sm h-100 text-center p-3">
            <div class="single_c_img">
              <img src="img/12th.png" class="img-fluid" alt="course-image" />
              <span>12th Grade</span>
            </div>
            <p>Coming Soon</p>
            <a href="<?php echo isset($_SESSION['user_id']) ? '' : 'login.php'; ?>" class="course-btn">
              View Subjects
            </a>
          </div>
        </div>

      </div>
    </div>
  </section><br><br><br><br>
  <!-- Courses area End -->

  <!--================ End About Area =================-->


  <!--================ Start footer Area  =================-->
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
              <li><a href="8thstandard.php">8th Grade</a></li>
              <li><a href="9thstandard.php">9th Grade</a></li>
              <li><a href="10thstandard.php">10th Grade</a></li>
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
            <!-- <div class="sf_contact">
              <span class="ti-mobile"></span>
              <p><a href="tel:+88457845695">Contact Whatsapp</a></p>
            </div> -->
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
  <div class="foot_copy">
    <div class="footer_copyright">
      <p>&copy; 2024. All Rights Reserved • Designed by <a href="https://staticdevelopers.in/">CDP</a></p>
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
</body>

</html>
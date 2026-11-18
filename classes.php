<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
if (isset($_SESSION['logout_success'])) {
  echo "<script>alert('Logout successful!');</script>";
  unset($_SESSION['logout_success']);
}
?>
<?php

$conn = new mysqli("localhost", "root", "", "bsuresh");

$result = $conn->query("SELECT * FROM zoom_classes ORDER BY start_time ASC");

?>

<!DOCTYPE html>
<html>

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
  <style>
    .navbar-brand.logo_h {
      font-family: 'sans-serif';
      font-weight: 600;
      font-size: 24px;
      letter-spacing: 0.5px;
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

    body {
      font-family: Arial;
      background: #f5f5f5;
    }


    .class-box {
      background: white;
      padding: 20px;
      margin: 20px;
      border-radius: 10px;
    }

    .join-btn {
      background: #2D8CFF;
      color: white;
      padding: 10px 15px;
      text-decoration: none;
      border-radius: 5px;
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
              <li class="nav-item">
                <a class="nav-link" href="instructors.php">Instructors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="class.php" id="courses-link">Courses</a>
              </li>
              <li class="nav-item active">
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

  <section class="section-top">
    <div class="container">
      <div class="col-lg-10 offset-lg-1 text-center">
        <div class="section-top-title">
          <h1>Live Class</h1>
          <ul class="list-unstyled d-flex justify-content-center gap-2">
            <li><a href="index.php">Home </a></li>
            <li>/ </li>
            <li>Live Class </li>
          </ul>

        </div>
      </div>
    </div>
  </section><br>

  <h1>Upcoming Zoom Classes</h1>

  <?php while ($row = $result->fetch_assoc()) { ?>

    <div class="class-box">

      <h2><?= $row['topic'] ?></h2>

      <p>
        Start Time:
        <?= $row['start_time'] ?>
      </p>

      <a class="join-btn"
        href="<?= htmlspecialchars($row['join_url']) ?>"
        target="_blank">
        Join Class
      </a>

    </div>

  <?php } ?>

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
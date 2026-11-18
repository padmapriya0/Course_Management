<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <title>Instructors</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />

  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    .instructor-section {
      max-width: 1200px;
      margin: 0 auto;
      padding: 40px 20px;
      font-family: Arial, sans-serif;
      text-align: center;
    }

    .section-title {
      font-size: 28px;
      font-weight: 700;
      color: #666;
      margin-bottom: 40px;
    }

    .instructor-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }

    /* Responsive Grid for Tablets/Mobile */
    @media (max-width: 992px) {
      .instructor-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 600px) {
      .instructor-grid {
        grid-template-columns: 1fr;
      }
    }

    .instructor-card {
      background: #fff;
      border: 1px solid #e2e8f0;
      border-radius: 12px;
      padding: 16px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .instructor-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .img-container {
      width: 100%;
      height: 220px;
      border-radius: 10px;
      overflow: hidden;
      margin-bottom: 16px;
    }

    .img-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .content {
      display: flex;
      flex-direction: column;
      align-items: center;
      flex-grow: 1;
      justify-content: space-between;
      width: 100%;
    }

    .content h3 {
      font-size: 18px;
      font-weight: 700;
      color: #555;
      margin: 0 0 8px 0;
    }

    .content p {
      font-size: 13px;
      color: #777;
      margin: 2px 0;
      line-height: 1.4;
    }

    .content p strong {
      color: #555;
    }

    .btn-learn {
      display: inline-block;
      margin-top: 16px;
      background-color: #f7786b;
      color: #fff;
      padding: 8px 24px;
      border-radius: 20px;
      text-decoration: none;
      font-size: 12px;
      font-weight: 600;
      transition: background-color 0.2s ease;
    }

    .btn-learn:hover {
      background-color: #0b5ed7;
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
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about-us.php">About</a>
              </li>
              <li class="nav-item active">
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

  <!--================Home Banner Area =================-->
  <section class="section-top">
    <div class="container">
      <div class="col-lg-10 offset-lg-1 text-center">
        <div class="section-top-title">
          <h1>Instructors</h1>
          <ul class="list-unstyled d-flex justify-content-center gap-2">
            <li><a href="index.php"> Home</a></li>
            <li> / </li>
            <li> Instructors</li>
          </ul>

        </div>
      </div>
    </div>
  </section><br><br>

  <!--================End Home Banner Area =================-->

  <!--================Instructors start =================-->
  <section class="instructor-section">

    <h2 class="section-title">Our Instructors</h2>

    <div class="instructor-grid">

      <!-- Card 1 -->
      <div class="instructor-card">
        <div class="img-container">
          <img src="img/pdfs/mohit.jpeg" alt="Mohit Singla">
        </div>
        <div class="content">
          <h3>Mohit Singla</h3>
          <p><strong>Qualification:</strong> Bachelor of Technology (B.Tech) – Mechanical Engineering</p>
          <p><strong>Experience:</strong> 16+ Years of Teaching Experience</p>
          <a href="img/pdfs/Mohit_Singla.pdf" target="_blank" class="btn-learn">Learn More</a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="instructor-card">
        <div class="img-container">
          <img src="img/pdfs/satyam.jpeg" alt="Satyam Kumar">
        </div>
        <div class="content">
          <h3>Satyam Kumar</h3>
          <p><strong>Qualification:</strong> Bachelor of Technology (B.Tech) – Civil Engineering</p>
          <p><strong>Experience:</strong> 11+ Years of Teaching Experience</p>
          <a href="img/pdfs/Satyam_Kumar.pdf" target="_blank" class="btn-learn">Learn More</a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="instructor-card">
        <div class="img-container">
          <img src="img/pdfs/deepali.jpeg" alt="Deepali Manchanda">
        </div>
        <div class="content">
          <h3>Deepali Manchanda</h3>
          <p><strong>Qualification:</strong> Master of Science (M.Sc.) – Botany</p>
          <p><strong>Experience:</strong> 8+ Years of Teaching Experience</p>
          <a href="img/pdfs/Deepali_Manchanda.pdf" target="_blank" class="btn-learn">Learn More</a>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="instructor-card">
        <div class="img-container">
          <img src="img/pdfs/kavitha.jpeg" alt="Kavitha Nagalapur">
        </div>
        <div class="content">
          <h3>Kavitha Nagalapur</h3>
          <p><strong>Qualification:</strong> Master of Science (M.Sc.) – Organic Chemistry</p>
          <p><strong>Experience:</strong> 12+ Years of Teaching Experience</p>
          <a href="img/pdfs/Kavitha_Nagalapur.pdf" target="_blank" class="btn-learn">Learn More</a>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="instructor-card">
        <div class="img-container">
          <img src="img/pushpa.jpeg" alt="Pushpa Mirajkar">
        </div>
        <div class="content">
          <h3>Pushpa Mirajkar</h3>
          <p><strong>Qualification:</strong> M.Sc. in Mathematics</p>
          <p><strong>Experience:</strong> 22+ Years of Teaching Experience</p>
          <a href="#" target="_blank" class="btn-learn">Learn More</a>
        </div>
      </div>

    </div>

  </section>
  <!--================Instructors end =================-->

  <br><br><br><br>

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
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
  <title>Contact</title>
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
              <li class="nav-item ">
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
              <li class="nav-item active">
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
        <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s"
          data-wow-offset="0">
          <h1>Get In Touch</h1>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li> / Contact</li>
          </ul>
        </div><!-- //.HERO-TEXT -->
      </div><!--- END COL -->
    </div><!--- END CONTAINER -->
  </section><br><br><br><br>
  <!--================End Home Banner Area =================-->

  <!--================Contact Area =================-->
  <div id="contact" class="contact_area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
          data-wow-offset="0">
          <div class="contact">
            <form class="form" name="enq" method="post" action="contact.php"
              onsubmit="return validation();">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="">Name</label>
                  <input type="text" name="name" class="form-control" required="required">
                </div>
                <div class="form-group col-md-6">
                  <label for="">Your Email</label>
                  <input type="email" name="email" class="form-control" required="required">
                </div>
                <div class="form-group col-md-12">
                  <label for="">Your Subject</label>
                  <input type="text" name="subject" class="form-control" required="required">
                </div>
                <div class="form-group col-md-12">
                  <label for="">Your Message</label>
                  <textarea rows="6" name="message" class="form-control"
                    required="required"></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <button type="submit" value="Send message" name="submit" id="submitButton"
                    class="btn_one" title="Submit Your Message!">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div><!-- END COL  -->
        <div class="col-lg-5 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
          data-wow-offset="0">
          <div class="single_address sa_one">
            <i class="ti-map"></i>
            <h4>Our Location</h4>
            <p>Doddahalli , Kanakapura Dist Karnataka 562126</p>
          </div>
          <div class="single_address sa_three mt-5">
            <i class="ti-email"></i>
            <h4>Send email</h4>
            <p>dk@dkshivakumar.com</p>
          </div>
        </div><!-- END COL  -->
      </div><!-- END ROW -->
    </div><!--- END CONTAINER -->
  </div><br><br><br><br>
  <!--================ start footer Area  =================-->
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

  <!--================Contact Success and Error message Area =================-->
  <div id="success" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close">
            <i class="ti-close"></i>
          </button>
          <h2>Thank you</h2>
          <p>Your message is successfully sent...</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modals error -->

  <div id="error" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close">
            <i class="ti-close"></i>
          </button>
          <h2>Sorry !</h2>
          <p>Something went wrong</p>
        </div>
      </div>
    </div>
  </div>
  <!--================End Contact Success and Error message Area =================-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/stellar.js"></script>
  <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/owl-carousel-thumb.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <!--gmaps Js-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
  <script src="js/gmaps.min.js"></script>
  <script src="js/contact.js"></script>
  <script src="js/theme.js"></script>
</body>

</html>
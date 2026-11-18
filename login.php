<?php
session_start();
require 'db.php';

$error = "";

/* Show logout message */
if (isset($_SESSION['logout_success'])) {
    echo "<script>alert('Logout successful!');</script>";
    unset($_SESSION['logout_success']);
}

/* Prevent multiple login */
if (isset($_SESSION['user_id'])) {
    header("Location: courses.php");
    exit;
}

if (isset($_POST['submit'])) {

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $error = "Please enter both email and password!";
    } else {

        $stmt = $conn->prepare(
            "SELECT id, name, password, role, active_sessions 
             FROM users 
             WHERE email = ? 
             LIMIT 1"
        );
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($user = $result->fetch_assoc()) {

            if (password_verify($password, $user['password'])) {

                if ($user['active_sessions'] >= 2) {
                    $error = "This account is already logged in on 2 systems!";
                } else {

                    $ip = $_SERVER['REMOTE_ADDR'];

                    $update = $conn->prepare(
                        "UPDATE users 
                         SET active_sessions = active_sessions + 1,
                             last_login_ip = ?
                         WHERE id = ?"
                    );
                    $update->bind_param("si", $ip, $user['id']);
                    $update->execute();
                    $update->close();

                    $_SESSION['user_id']   = $user['id'];
                    $_SESSION['user_name'] = $user['name'];
                    $_SESSION['user_role'] = $user['role'];

                    header("Location: class.php");
                    exit;
                }
            } else {
                $error = "Invalid password!";
            }
        } else {
            $error = "No account found with that email!";
        }

        $stmt->close();
    }
}
?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="css/auth.css">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <main class="login-body" data-vide-bg="assets/img/login-bg.mp4">
        <form class="form-default" action="" method="POST">


            <div class="login-form">
                <div class="logo-login">
                    <a href="index.php"><img src="assets/img/logo/loder.png" alt=""></a>
                </div>
                <h2>Login Here</h2>

                <?php if ($error): ?>
                    <div class="alert alert-danger" style="padding: 10px; margin-bottom: 15px; border-radius: 5px;">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>

                <div class="form-input">
                    <label for="name">Email</label>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-input">
                    <label for="name">Password</label>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-input pt-30">
                    <input type="submit" name="submit" value="login">
                </div>

                <!-- <a href="#" class="forget">Forget Password</a>
                <a href="register.php" class="registration">Registration</a> -->
            </div>
        </form>

    </main>


    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <script src="./assets/js/jquery.vide.js"></script>

    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <script src="./assets/js/gijgo.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <script src="./assets/js/jquery.barfiller.js"></script>

    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>


</html>
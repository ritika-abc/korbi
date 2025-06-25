<?php
session_start();


include "site_connection.php";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $result = mysqli_query($con, "select * 
     from user_register WHERE email='$email' and password='$password'   ");
    $user_matched = mysqli_num_rows($result);
    if ($user_matched > 0) {
        $_SESSION['password'] = $password;
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $id;
        $_SESSION['name'] = $name;


        header("location:index.php");
    } else {
        echo "not matched !!!!";
    }
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>KORBI </title>
 
     <!-- Favicon -->
   <link rel="shortcut icon" type="image/x-icon" href="image/logo/korbi.png" />

    <!-- CSS
    ============================================ -->

    <!-- Vendor CSS (Contain Bootstrap, Icon Fonts) -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/Pe-icon-7-stroke.css" />

    <!-- Plugin CSS (Global Plugins Files) -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .list>li::marker {
            color: red;
            font-size: 1.5em
        }
    </style>
</head>

<body>
     
    <div class="main-wrapper">

         
        <!-- Begin Main Content Area -->
        <main class="main-content">

            <div class="login-register-area section-space-y-axis-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <form method="post">
                                <div class="login-form" style="border-left: 3px solid #ee3231;">
                                  <div class="text-center">
                                     <a href="/"> <img src="image/logo/korbi.png" height="70px" width="200px" alt="">  </a>
                                  </div>
                                    <h4 class="login-title">Login</h4>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>Email Address*</label>
                                            <input type="email" name="email" placeholder="Email Address">
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Password</label>
                                            <input type="password" name="password" placeholder="Password">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="check-box">
                                                <input type="checkbox" id="remember_me">
                                                <label for="remember_me">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pt-1 mt-md-0">
                                            <div class="forgotton-password_info">
                                                <a href="register.php"> Create an account.</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 pt-5">
                                           <ul class="quantity-with-btn  ">
                                                <li class="affiliate-btn-wrap">
                                                    <button type="submit" name="submit" class="btn btn-custom-size lg-size text-white btn-primary" href="product.php">Login
                                                        Now</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="col-lg-6 pt-10 pt-lg-0">
                            <form action="#">
                                <div class="login-form">
                                    <h4 class="login-title">Register</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <label>First Name</label>
                                            <input type="text" placeholder="First Name">
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <label>Last Name</label>
                                            <input type="text" placeholder="Last Name">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Email Address*</label>
                                            <input type="email" placeholder="Email Address">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Password</label>
                                            <input type="password" placeholder="Password">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Confirm Password</label>
                                            <input type="password" placeholder="Confirm Password">
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-custom-size lg-size btn-primary">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div> -->
                    </div>
                </div>
            </div>
        </main>
        <!-- Main Content Area End Here -->

      
    </div>

    <!-- Global Vendor, plugins JS -->

    <!-- JS Files
    ============================================ -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>

    <!--Plugins JS-->
    <script src="assets/js/plugins/wow.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.js"></script>
    <script src="assets/js/plugins/parallax.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/tippy.min.js"></script>
    <script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
    <script src="assets/js/plugins/mailchimp-ajax.js"></script>

    <!--Main JS (Common Activation Codes)-->
    <script src="assets/js/main.js"></script>

</body>

</html>
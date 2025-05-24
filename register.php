<?php
include "site_connection.php";
if (isset($_POST['submit'])) {
    // Get form data
    $name = test_input($_POST['name']);
    $password = test_input($_POST['password']);
    $email = test_input($_POST['email']);
    $mobile_number = test_input($_POST['mobile_number']);

    // Server-side validation
    $errors = [];

    // Check if name is empty
    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    // Check if password is empty
    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    // Check if email is empty or invalid
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Check if mobile number is empty or invalid
    if (empty($mobile_number)) {
        $errors[] = "Mobile number is required.";
    } elseif (!preg_match("/^[0-9]{10}$/", $mobile_number)) {
        $errors[] = "Mobile number must be 10 digits.";
    }

    // If there are any errors, show them and stop the execution
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // Check if the user already exists in the database
        $sql = "SELECT * FROM user_register WHERE name='$name' AND password='$password' AND email='$email'";
        $emailresult = mysqli_query($con, $sql);
        $user_matched = mysqli_num_rows($emailresult);

        if ($user_matched > 0) {
            echo "You have already registered!";
        } else {
            // Insert new user into the database
            $insrt = mysqli_query($con, "INSERT INTO user_register (name, password, email, mobile_number) VALUES ('$name', '$password', '$email', '$mobile_number')");
            if ($insrt) {
                header("Location: login.php");
                exit();
            } else {
                echo "There was an error registering your account.";
            }
        }
    }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>









<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Korbi</title>
    <meta name="robots" content="index, follow" />
    <meta name="description"
        content="Korbi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />

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
                            <form method="post" onsubmit="return validateForm()">
                                <div class="login-form" style="border-left: 3px solid #ee3231;">
                                    <div class="text-center">
                                        <a href="/"> <img src="image/logo/korbi.png" height="70px" width="200px" alt=""> </a>
                                    </div>
                                    <h4 class="login-title">Register</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <label>First Name</label>
                                            <input type="text" id="name" name="name" placeholder="First Name">
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <label>Phone</label>
                                            <input type="number" id="mobile_number" name="mobile_number" placeholder="Phone">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Email Address*</label>
                                            <input type="email" id="email" name="email" placeholder="Email Address">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Password</label>
                                            <input type="password" id="password" name="password" placeholder="Password">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Confirm Password</label>
                                            <input type="password" placeholder="Confirm Password">
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-custom-size lg-size btn-primary" name="submit" type="submit">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </main>
        <!-- Main Content Area End Here -->


    </div>
    <script>
        function validateForm() {
            var name = document.getElementById('name').value;
            var password = document.getElementById('password').value;
            var email = document.getElementById('email').value;
            var mobile_number = document.getElementById('mobile_number').value;

            // Check if all fields are filled
            if (name == "" || password == "" || email == "" || mobile_number == "") {
                alert("All fields are required!");
                return false;
            }

            // Check if mobile number is a valid number
            var phoneRegex = /^[0-9]{10}$/;
            if (!phoneRegex.test(mobile_number)) {
                alert("Please enter a valid mobile number (10 digits).");
                return false;
            }

            // Check if email format is correct
            var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }

            return true;
        }
    </script>
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
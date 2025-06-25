 <?php
    // session_start();
    // require_once 'site_connection.php';

    // // // Ensure user is logged in
    // // if (!isset($_SESSION['user_email'])) {
    // //     header("Location: login.php");
    // //     exit();
    // // }

    // // $user_email = $_SESSION['user_email']; // Get the user's email from session
    // echo  $email = $_SESSION['email']; // Assuming you store id in the session as well

    ?>
<style>
    .table-content table td.product-thumbnail img {
    width: 200px !important;
    height: 200px !important;
    object-fit: cover;
}
</style>

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

 </head>

 <body>
     <?php
        include "nav.php";

        ?>
    
<?php
include "footer.php";
?>
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
     <title>Tromic - Cart</title>
     <meta name="robots" content="index, follow" />
     <meta name="description" content="Tromic car accessories bootstrap 5 template is an awesome website template for any modern car accessories shop.">
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

 </head>

 <body>
     <?php
        include "nav.php";

        ?>
     <main class="main-content">
         <div class="breadcrumb-area breadcrumb-height" data-bg-image="image/banner/bg-scaled.jpeg">
             <div class="container h-100">
                 <div class="row h-100">
                     <div class="col-lg-12">
                         <div class="breadcrumb-item text-night-rider">
                             <h2 class="breadcrumb-heading text-white">Add To Cart </h2>
                             <ul>
                                 <li>
                                     <a href="/" class="text-white"> Home/</a>
                                 </li>
                                 <li class="text-white">Cart</li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="cart-area section-space-y-axis-100">
             <div class="container">
                 <div class="row">
                     <div class="col-12">
                         <form action="edit-cart.php" method="POST">
                             <div class="table-content table-responsive">
                                 <table class="table">
                                     <thead>
                                         <tr>
                                             <th class="product_remove">Remove</th>
                                             <th class="product-thumbnail">Image</th>
                                             <th class="cart-product-name">Product</th>
                                             <th class="product-price">Unit Price</th>
                                             <th class="product-quantity">Quantity</th>
                                             <th class="product-subtotal">Total</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php

                                            $s = "SELECT * FROM `cart` WHERE `email` = '$email'";
                                            $q = mysqli_query($con, $s);
                                            while ($row = mysqli_fetch_array($q)) {
                                            ?>
                                             <tr>
                                                 <td class="product_remove">
                                                     <a href="remove-cat.php?product_id=<?php echo $row['product_id']; ?>">
                                                         <i class="pe-7s-trash" data-tippy="Remove" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder"></i>
                                                     </a>
                                                 </td>
                                                 <td class="product-thumbnail">
                                                     <a href="#">
                                                         <img src="./admin/image/<?php echo $row['image'] ?>" class="rounded" height="200px" width="200px"  alt="<?php echo $row['name'] ?>">
                                                     </a>
                                                 </td>
                                                 <td class="product-name">
                                                     <a href="#"><?php echo $row['name']; ?></a>
                                                 </td>
                                                 <td class="product-price">
                                                     <span class="amount">₹<?php echo $row['price']; ?></span>
                                                 </td>

                                                 <td class="quantity">
                                                     <div class="cart-plus-minus">
                                                         <input class="cart-plus-minus-box" name="quantity[<?php echo $row['product_id']; ?>]" value="<?php echo $row['quantity']; ?>" type="text">
                                                         <div class="dec qtybutton">
                                                             <i class="fa fa-minus"></i>
                                                         </div>
                                                         <div class="inc qtybutton">
                                                             <i class="fa fa-plus"></i>
                                                         </div>
                                                     </div>
                                                 </td>
                                                 <td class="product-subtotal">
                                                     <span class="amount">₹<?php echo $row['price'] * $row['quantity']; ?></span>
                                                 </td>
                                             </tr>
                                         <?php
                                            }
                                            ?>
                                     </tbody>
                                 </table>
                             </div>

                             <div class="row">
                                 <div class="col-12">
                                     <div class="coupon-all">
                                         <div class="coupon2">
                                             <input class="button" name="update_cart" value="Update Cart" type="submit">
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <!-- <div class="row">
                                 <div class="col-md-5 ml-auto">
                                     <div class="cart-page-total">
                                         <h2>Cart Totals</h2>
                                         <ul>
                                             <?php
                                                $total = 0;
                                                $s = "SELECT * FROM `cart` WHERE `email` = '$email'";
                                                $q = mysqli_query($con, $s);
                                                while ($row = mysqli_fetch_array($q)) {
                                                    $total += $row['price'] * $row['quantity'];
                                                }
                                                ?>
                                             <li>Subtotal <span>$<?php echo number_format($total, 2); ?></span></li>
                                             <li>Total <span>$<?php echo number_format($total, 2); ?></span></li>
                                         </ul>
                                         <a href="checkout.php">Proceed to Checkout</a>
                                     </div>
                                 </div>
                             </div> -->
                             <!-- <div class="row">
                                 <div class="col-md-5 ml-auto">
                                     <div class="cart-page-total">
                                         <h2>Cart Totals</h2>
                                         <ul>
                                             <?php
                                                $total = 0;
                                                $total_discount = 0;

                                                // Fetch cart items for the current user
                                                $s = "SELECT * FROM `cart` WHERE `email` = '$email'";
                                                $q = mysqli_query($con, $s);

                                                // Count the total number of items in the cart
                                                $total_items_in_cart = 0;
                                                while ($row = mysqli_fetch_array($q)) {
                                                    $total_items_in_cart += $row['quantity'];
                                                }

                                                // Reset the query to calculate the total price and discount
                                                $q = mysqli_query($con, $s);
                                                while ($row = mysqli_fetch_array($q)) {
                                                    $product_id = $row['product_id'];
                                                    $quantity = $row['quantity'];

                                                    // Get product details
                                                    $product_query = "SELECT * FROM product WHERE id = '$product_id'";
                                                    $product_result = mysqli_query($con, $product_query);
                                                    $product = mysqli_fetch_assoc($product_result);

                                                    $price = $product['price'];
                                                    $discount = 0;

                                                    // Apply discount based on the total number of items in the cart
                                                    if ($total_items_in_cart == 2) {
                                                        $discount = 10; // 10% discount for 2 items
                                                    } elseif ($total_items_in_cart == 3) {
                                                        $discount = 15; // 15% discount for 3 items
                                                    } elseif ($total_items_in_cart >= 4) {
                                                        $discount = 20; // 20% discount for 4 or more items
                                                    }

                                                    // Calculate the discounted price
                                                    $discounted_price = $price - ($price * ($discount / 100));

                                                    // Calculate the total price for this product after applying the discount
                                                    $total_item_price = $discounted_price * $quantity;

                                                    // Update the overall total price and discount
                                                    $total += $total_item_price;
                                                    $total_discount += ($price * $quantity) - $total_item_price; // Total discount applied to this product
                                                }
                                                ?>
                                             <li>Subtotal <span>$<?php echo number_format($total + $total_discount, 2); ?></span></li>
                                             <li>Discount <span>-$<?php echo number_format($total_discount, 2); ?></span></li>
                                             <li>Total <span>$<?php echo number_format($total, 2); ?></span></li>
                                         </ul>
                                         <a href="checkout.php">Proceed to Checkout</a>
                                     </div>
                                 </div>
                             </div> -->
                             <div class="row">
                                 <div class="col-md-5 ml-auto">
                                     <div class="cart-page-total">
                                         <h2>Cart Totals</h2>
                                         <ul>
                                             <?php
                                                $total = 0;
                                                $total_discount = 0;

                                                // Fetch cart items for the current user
                                                $s = "SELECT * FROM `cart` WHERE `email` = '$email'";
                                                $q = mysqli_query($con, $s);

                                                // Count the total number of items in the cart
                                                $total_items_in_cart = 0;
                                                while ($row = mysqli_fetch_array($q)) {
                                                    $total_items_in_cart += $row['quantity'];
                                                }

                                                // Fetch applicable discount from the database based on total items
                                                $discount_query = "SELECT * FROM discounts WHERE min_items <= $total_items_in_cart AND status = 1 ORDER BY min_items DESC LIMIT 1";
                                                $discount_result = mysqli_query($con, $discount_query);
                                                $discount_percentage = 0;

                                                if (mysqli_num_rows($discount_result) > 0) {
                                                    // Fetch the applicable discount
                                                    $discount_data = mysqli_fetch_assoc($discount_result);
                                                    $discount_percentage = $discount_data['discount_percentage'];
                                                }

                                                // Reset the query to calculate the total price and discount
                                                $q = mysqli_query($con, $s);
                                                while ($row = mysqli_fetch_array($q)) {
                                                    $product_id = $row['product_id'];
                                                    $quantity = $row['quantity'];

                                                    // Get product details
                                                    $product_query = "SELECT * FROM product WHERE id = '$product_id'";
                                                    $product_result = mysqli_query($con, $product_query);
                                                    $product = mysqli_fetch_assoc($product_result);

                                                    $price = $product['price'];

                                                    // Calculate the discounted price
                                                    $discounted_price = $price - ($price * ($discount_percentage / 100));

                                                    // Calculate the total price for this product after applying the discount
                                                    $total_item_price = $discounted_price * $quantity;

                                                    // Update the overall total price and discount
                                                    $total += $total_item_price;
                                                    $total_discount += ($price * $quantity) - $total_item_price; // Total discount applied to this product
                                                }
                                                ?>
                                             <li>Subtotal <span>₹<?php echo number_format($total + $total_discount, 2); ?></span></li>
                                             <li>Discount <span>-₹<?php echo number_format($total_discount, 2); ?></span></li>
                                             <li>Total <span>₹<?php echo number_format($total, 2); ?></span></li>
                                         </ul>
                                         <a href="checkout.php">Proceed to Checkout</a>
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

     <!-- Begin Footer Area -->
     <div class="footer-area">
         <div class="footer-top section-space-y-axis-100 text-lavender" data-bg-image="assets/images/background-img/1-4-1920x419.png">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-3">
                         <div class="widget-item">
                             <div class="footer-logo pb-4">
                                 <a href="index.html">
                                     <img src="assets/images/logo/light.png" alt="Logo">
                                 </a>
                             </div>
                             <p class="short-desc mb-2">Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempor incidi ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                             <div class="social-link pt-2">
                                 <ul>
                                     <li>
                                         <a href="#" data-tippy="Twitter" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                             <i class="fa fa-twitter"></i>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#" data-tippy="Tumblr" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                             <i class="fa fa-tumblr"></i>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#" data-tippy="Facebook" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                             <i class="fa fa-facebook"></i>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#" data-tippy="Instagram" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                             <i class="fa fa-instagram"></i>
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-4 pt-8 pt-lg-0">
                         <div class="widget-item">
                             <h3 class="widget-title mb-5">Quick Links</h3>
                             <ul class="widget-list-item">
                                 <li>
                                     <i class="fa fa-chevron-right"></i>
                                     <a href="#">Support</a>
                                 </li>
                                 <li>
                                     <i class="fa fa-chevron-right"></i>
                                     <a href="#">Helpline</a>
                                 </li>
                                 <li>
                                     <i class="fa fa-chevron-right"></i>
                                     <a href="#">Courses</a>
                                 </li>
                                 <li>
                                     <i class="fa fa-chevron-right"></i>
                                     <a href="#">About</a>
                                 </li>
                                 <li>
                                     <i class="fa fa-chevron-right"></i>
                                     <a href="#">Event</a>
                                 </li>
                                 <li>
                                     <i class="fa fa-chevron-right"></i>
                                     <a href="#">Subject</a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-4 pt-8 pt-lg-0">
                         <div class="widget-item">
                             <h3 class="widget-title mb-5">Company</h3>
                             <ul class="widget-list-item">
                                 <li>
                                     <i class="fa fa-chevron-right"></i>
                                     <a href="#">About</a>
                                 </li>
                                 <li>
                                     <i class="fa fa-chevron-right"></i>
                                     <a href="#">Blog</a>
                                 </li>
                                 <li>
                                     <i class="fa fa-chevron-right"></i>
                                     <a href="#">Speakers</a>
                                 </li>
                                 <li>
                                     <i class="fa fa-chevron-right"></i>
                                     <a href="#">Contact</a>
                                 </li>
                                 <li>
                                     <i class="fa fa-chevron-right"></i>
                                     <a href="#">Tricket</a>
                                 </li>
                                 <li>
                                     <i class="fa fa-chevron-right"></i>
                                     <a href="#">Seminar</a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-4 pt-8 pt-lg-0">
                         <div class="widget-item">
                             <h3 class="widget-title mb-5">About Tromic</h3>
                             <ul class="widget-list-item">
                                 <li>
                                     <i class="fa fa-chevron-right"></i>
                                     <a href="#">How to Shop</a>
                                 </li>
                                 <li>
                                     <i class="fa fa-chevron-right"></i>
                                     <a href="#">Contact us</a>
                                 </li>
                                 <li>
                                     <i class="fa fa-chevron-right"></i>
                                     <a href="#">My Wishlist</a>
                                 </li>
                                 <li>
                                     <i class="fa fa-chevron-right"></i>
                                     <a href="#">Checkout</a>
                                 </li>
                                 <li>
                                     <i class="fa fa-chevron-right"></i>
                                     <a href="#">Log in</a>
                                 </li>
                                 <li>
                                     <i class="fa fa-chevron-right"></i>
                                     <a href="#">Help</a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                     <div class="col-lg-3 pt-8 pt-lg-0">
                         <div class="widget-item">
                             <h3 class="widget-title mb-5">Store Information.</h3>
                         </div>
                         <div class="widget-contact-info pb-2">
                             <ul>
                                 <li>
                                     2005 Stokes Isle Apartment. 896, Washington 10010, USA,
                                 </li>
                                 <li>
                                     <a href="mailto://info@example.com">info@example.com</a>
                                 </li>
                                 <li>
                                     <a href="tel://+68-120034509">(+68) 120034509</a>
                                 </li>
                             </ul>
                         </div>
                         <div class="payment-method">
                             <a href="#">
                                 <img src="assets/images/payment/1.png" alt="Payment Method">
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="footer-bottom bg-midnight-express py-3">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="copyright">
                             <span class="copyright-text">© 2022 Tromic Made with <i class="fa fa-heart text-danger"></i> by <a href="https://themeforest.net/user/codecarnival/portfolio" rel="noopener" target="_blank">CodeCarnival</a> </span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Footer Area End Here -->

     <!-- Begin Scroll To Top -->
     <a class="scroll-to-top" href="">
         <i class="fa fa-chevron-up"></i>
     </a>
     <!-- Scroll To Top End Here -->

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
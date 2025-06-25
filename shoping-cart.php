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
    include "site_connection.php";
    $discount_query = "SELECT * FROM discounts ORDER BY id DESC";
    $result = mysqli_query($con, $discount_query);

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
                                             <th class="cart-product-name">Product Name</th>
                                             <th class="cart-product-name">Holder Type</th>
                                             <th class="cart-product-name">Light Color Led</th>
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
                                                         <img src="./admin/image/<?php echo $row['image'] ?>" class="rounded" height="200px" width="200px" alt="<?php echo $row['name'] ?>">
                                                     </a>
                                                 </td>
                                                 <td class="product-name">
                                                     <a href="#"><?php echo $row['name']; ?> </a>
                                                 </td>
                                                 <td class="product-name">
                                                     <a href="#"> <?php echo $row['holder']; ?></a>
                                                 </td>
                                                 <td class="product-name">
                                                     <a href="#"><?php echo $row['light']; ?> </a>
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
                                             <li>Discount (<?php echo $discount_percentage . '%' ?>) <span>-₹<?php echo number_format($total_discount, 2); ?></span></li>
                                             <li>Total <span>₹<?php echo number_format($total, 2); ?></span></li>
                                         </ul>
                                         <a href="checkout.php">Proceed to Checkout</a>
                                     </div>
                                 </div>

                             </div>
                             <?php
                                $show = "SELECT * FROM show_discount where `status`='show'";
                                $result1 = mysqli_query($con, $show);
                                while ($pr = mysqli_fetch_assoc($result1)) {
                                ?>
                                 <div class="row my-5">
                                     <div class="col-md-5 ml-auto">
                                         <div class=" border shadow-sm p-3">
                                             <small>
                                                 <h5>Existing Discount Rules</h5>



                                                 <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                                     <p>Buy <b><u><?php echo $row['min_items']; ?> Products</u></b> and get <b><u><?php echo $row['discount_percentage']; ?>% Discount</u></b></p>
                                                 <?php endwhile; ?>

                                             </small>



                                         </div>
                                     </div>
                                 </div>
                             <?php } ?>
                         </form>
                     </div>

                 </div>
             </div>
         </div>
     </main>
     <!-- Main Content Area End Here -->
     <?php
        include "footer.php";
        ?>
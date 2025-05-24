<?php

// condition / working cart


session_start();
require_once 'site_connection.php';

// Ensure user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// $user_email = $_SESSION['user_email']; // Get the user's email from session
$email = $_SESSION['email']; // Assuming you store id in the session as well
 
// Check if the form was submitted
if (isset($_POST['product_id'])) {
    // Get product details from the POST request
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_size = $_POST['product_size'];
    $product_color = $_POST['product_color'];
    $quantity = $_POST['quantity'];  // Default quantity is 1 (You can add an input field for quantity if required)

    // Check if the product is already in the cart
    $query = "SELECT * FROM cart WHERE email = '$email' AND product_id = '$product_id'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        // Product already in cart, update quantity
        $query = "UPDATE cart SET quantity = quantity + 1 WHERE email = '$email' AND product_id = '$product_id'";
        mysqli_query($con, $query);
    } else {
        // Product not in cart, insert new product
        $query = "INSERT INTO cart (product_id, email, name, price, image, size, color , quantity)
                  VALUES ('$product_id', '$email', '$product_name', '$product_price', '$product_image', '$product_size', '$product_color',  '$quantity')";
        mysqli_query($con, $query);
    }

    // Redirect to the cart page
    header("Location: shoping-cart.php");
    exit();
}  
?>



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

                // Fetch discount rules from the database
                $discount_query = "SELECT * FROM discounts WHERE min_items <= $total_items_in_cart AND status = 1";
                $discount_result = mysqli_query($con, $discount_query);
                $discount_percentage = 0;
                while ($discount_row = mysqli_fetch_assoc($discount_result)) {
                    // Take the highest discount applicable
                    if ($discount_row['min_items'] <= $total_items_in_cart) {
                        $discount_percentage = $discount_row['discount_percentage'];
                    }
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

                    // Apply discount
                    $discounted_price = $price - ($price * ($discount_percentage / 100));

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
</div>

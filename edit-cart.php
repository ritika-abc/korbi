<?php

// working quiry
// session_start();
// include "site_connection.php";

// // Ensure user is logged in
// if (!isset($_SESSION['email'])) {
//     header("Location: login.php");
//     exit();
// }

// $email = $_SESSION['email']; // User's email
// $id = $_SESSION['id']; // Assuming you store user_id in session

// // Handle update of cart items
// if (isset($_POST['update_cart'])) {
//     if (isset($_POST['quantity'])) {
//         foreach ($_POST['quantity'] as $product_id => $quantity) {

//             $quantity = (int)$quantity;
//             if ($quantity > 0) {
//                 $update_query = "UPDATE cart SET quantity = $quantity WHERE product_id = $product_id AND email = '$email'";
//                 mysqli_query($con, $update_query);
//             }
//         }
//     }
//     header("Location: shoping-cart.php");
//     exit();
// }


// if (isset($_GET['action']) && $_GET['action'] == 'remove' && isset($_GET['product_id'])) {
//     $product_id = $_GET['product_id'];
//     $delete_query = "DELETE FROM cart WHERE product_id = $product_id AND email = '$email'";
//     mysqli_query($con, $delete_query);
//     header("Location: shoping-cart.php");
//     exit();
// }
?>



<?php
session_start();
include "site_connection.php";

// Ensure user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$email = $_SESSION['email']; // User's email
$id = $_SESSION['id']; // Assuming you store user_id in session

// Fetch cart items and calculate the discount for each
$cart_items = [];
$total_price = 0;
$total_discount = 0;

// Get cart items for the current user
$cart_query = "SELECT * FROM cart WHERE email = '$email'";
$cart_result = mysqli_query($con, $cart_query);

// Count the total number of items in the cart
$total_items_in_cart = 0;
while ($cart_item = mysqli_fetch_assoc($cart_result)) {
    $total_items_in_cart += $cart_item['quantity'];
}

$cart_items = [];
$total_price = 0;
$total_discount = 0;

// Get cart items for the current user
$cart_query = "SELECT * FROM cart WHERE email = '$email'";
$cart_result = mysqli_query($con, $cart_query);

while ($cart_item = mysqli_fetch_assoc($cart_result)) {
    $product_id = $cart_item['product_id'];
    $quantity = $cart_item['quantity'];

    // Get product details (including price)
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
    $total_price += $total_item_price;
    $total_discount += ($price * $quantity) - $total_item_price;

    $cart_items[] = [
        'product_id' => $product_id,
        'quantity' => $quantity,
        'name' => $product['name'],
        'price' => $price,
        'discount' => $discount,
        'discounted_price' => $discounted_price,
        'total_item_price' => $total_item_price
    ];
}

// Handle update of cart items
if (isset($_POST['update_cart'])) {
    if (isset($_POST['quantity'])) {
        foreach ($_POST['quantity'] as $product_id => $quantity) {
            $quantity = (int)$quantity;
            if ($quantity > 0) {
                // Update cart item quantity in the database
                $update_query = "UPDATE cart SET quantity = $quantity WHERE product_id = $product_id AND email = '$email'";
                mysqli_query($con, $update_query);
            }
        }
    }
    header("Location: shoping-cart.php");
     
}
?>
 
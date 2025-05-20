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

// Handle update of cart items
if (isset($_POST['update_cart'])) {
    if (isset($_POST['quantity'])) {
        foreach ($_POST['quantity'] as $product_id => $quantity) {
            // Update cart item quantity in the database
            $quantity = (int)$quantity;
            if ($quantity > 0) {
                $update_query = "UPDATE cart SET quantity = $quantity WHERE product_id = $product_id AND email = '$email'";
                mysqli_query($con, $update_query);
            }
        }
    }
    header("Location: shoping-cart.php");
    exit();
}

// Handle removal of item from cart
if (isset($_GET['action']) && $_GET['action'] == 'remove' && isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $delete_query = "DELETE FROM cart WHERE product_id = $product_id AND email = '$email'";
    mysqli_query($con, $delete_query);
    header("Location: shoping-cart.php");
    exit();
}
?>

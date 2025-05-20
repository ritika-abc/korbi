<?php
session_start();
require_once 'site_connection.php';

// // Ensure user is logged in
// if (!isset($_SESSION['user_email'])) {
//     header("Location: login.php");
//     exit();
// }

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




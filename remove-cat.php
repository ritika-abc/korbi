<?php

session_start();
 

echo $email = $_SESSION['email']; 
include "site_connection.php";

$product_id = $_GET['product_id'];
$del = "DELETE FROM `cart` WHERE `product_id`='$product_id' and `email`='$email'";
$query = mysqli_query($con, $del);

if ($query) {
    header("location:shoping-cart.php");
}

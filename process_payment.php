<?php
session_start();
include "site_connection.php";
if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
}


?>


   <?php
    include "site_connection.php";

    ?>
   <?php

    if (isset($_POST['payment_id']) && isset($_POST['price']) && isset($_POST['name'])) {
        $paymentId = $_POST['payment_id'];
        $price = $_POST['price'];
        $name = $_POST['name'];
        $quantity = $_POST['quantity'];
        $light = $_POST['light'];
        $holder = $_POST['holder'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $user_name = $_POST['user_name'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $mobile = $_POST['mobile'];
        $note = $_POST['note'];
        $oredr_status = $_POST['oredr_status'];
        $subtotal = $_POST['subtotal'];
        $discount = $_POST['discount'];
        $og_price = $_POST['og_price'];

        try {
            $sql = "INSERT INTO `order` (name, price, status, payment_id,quantity,light,holder,email,country,user_name,address,city,state,zip,mobile,note,oredr_status,discount,subtotal,og_price) VALUES (?, ?, 'paid', ?,?,?,?,?,?,?,?,?,?,?,?,?,'Pending',?,?,?)";
            $stmt = $con->prepare($sql);

            if ($stmt->execute([$name, $price, $paymentId, $quantity, $light, $holder, $email, $country, $user_name, $address, $city, $state, $zip, $mobile, $note,$discount,$subtotal,$og_price])) {
                echo "Seeded";


                    echo $email = $_SESSION['email'];



                    $del = "DELETE FROM `cart` WHERE   `email`='$email'";
                    $query = mysqli_query($con, $del);
            } else {
                echo "Not Seeded";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    ?> 
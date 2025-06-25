<?php
include "connection.php";
 
$id = $_GET['id'];
$del = "DELETE FROM `discounts` WHERE `id`='$id'";
$query = mysqli_query($conn, $del);

if ($query) {
    header("location:discount.php");
}
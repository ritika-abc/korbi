<?php
    include "site_connection.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $payment_id = $_POST['payment_id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $light = $_POST['light'];
    $holder = $_POST['holder'];
    $email = $_POST['email'];

    // Connect to database
 
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Insert into DB
    $stmt = $con->prepare("INSERT INTO order (payment_id, name, price, quantity, light, holder, email) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdiiss", $payment_id, $name, $price, $quantity, $light, $holder, $email);
    $stmt->execute();
    $stmt->close();
    $con->close();

    // Redirect or thank user
    header("Location: thank_you.php");
    exit();
}
?>

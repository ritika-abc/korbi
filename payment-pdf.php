<?php
require_once('tcpdf/tcpdf.php');
include "site_connection.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Get order info
    $sel = "SELECT * FROM `order` WHERE `id` = '$id'";
    $qu = mysqli_query($con, $sel);
    $row = mysqli_fetch_assoc($qu);

    if (!$row) {
        die("Order not found.");
    }

    $email = $row['email']; // Use order's email for cart

    // ----- START TCPDF -----
    $pdf = new TCPDF();
    $pdf->AddPage();
    $pdf->SetFont('helvetica', '', 11);

    $html = '
    
    <h2 align="center">Order Details - KORBI Japanese LED Bulbs</h2><hr><br> ';
 
    $html .= '
    <table cellpadding="5" cellspacing="0" border="1">
        <tr><td><strong>Order ID</strong></td><td>#' . $row['id'] . '</td></tr>
        <tr><td><strong>Date</strong></td><td>' . $row['created_at'] . '</td></tr>
        <tr><td><strong>Customer Name</strong></td><td>' . $row['user_name'] . '</td></tr>
        <tr><td><strong>Mobile</strong></td><td>' . $row['mobile'] . '</td></tr>
        <tr><td><strong>Email</strong></td><td>' . $row['email'] . '</td></tr>
        <tr><td><strong>Address</strong></td><td>' . $row['address'] . ', ' . $row['city'] . ', ' . $row['state'] . ', ' . $row['country'] . ' - ' . $row['pincode'] . '</td></tr>
        <tr><td><strong>Product</strong></td><td>' . $row['name']  . '</td></tr>
        <tr><td><strong>Holder / Light</strong></td><td>' . $row['holder'] . ' / ' . $row['light'] . '</td></tr>
        <tr><td><strong>Quantity</strong></td><td>' . $row['quantity'] . '</td></tr>
        <tr><td><strong>Price</strong></td><td>' . $row['price'] . '</td></tr>
        <tr><td><strong>Payment Method</strong></td><td>' . $row['payment'] . '(Online)'. '</td></tr>
        <tr><td><strong>Payment ID</strong></td><td>' . $row['payment_id'] . '</td></tr>
        <tr><td><strong>Status</strong></td><td>' . $row['status'] . '</td></tr>
        <tr><td><strong>Note</strong></td><td>' . $row['note'] . '</td></tr>
    </table>';

    // ----- Calculate Subtotal, Discount, and Total from Cart -----
    
    // ----- Add Totals to PDF -----
    $html .= '<br><br><table cellpadding="5" cellspacing="0" border="1" width="100%">
                <tr><td><strong>Subtotal</strong></td><td> ' .  $row['og_price'] .' X ' . $row['quantity']. ' = <i>INR ' .  $row['subtotal'] .'</i></td></tr>
                <tr><td><strong>Discount </strong></td><td> ' .      $row['discount'] .   '</td></tr>
                <tr><td><strong>Total</strong></td><td><strong>INR ' . $row['price'] . '</strong></td></tr>
              </table>';

    $html .= "<br><br><i>This is a system-generated fee receipt. Thank you for your order!</i>";

    $pdf->writeHTML($html);
    $pdf->Output('Fee_Receipt_Order_' . $row['id'] . '.pdf', 'I');
    exit();
} else {
    echo "Order ID not specified.";
}
?>

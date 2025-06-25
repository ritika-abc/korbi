<?php
    
?>


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

        <div class="account-page-area section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav myaccount-tab-trigger" id="account-page-tab" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active" id="account-orders-tab" data-bs-toggle="tab" href="#account-orders" role="tab" aria-controls="account-orders" aria-selected="false">Orders</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="account-details-tab" data-bs-toggle="tab" href="#account-details" role="tab" aria-controls="account-details" aria-selected="false">Account Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="account-logout-tab" href="logout.php" role="tab" aria-selected="false">Logout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content myaccount-tab-content" id="account-page-tab-content">

                            <div class="tab-pane fade fade show active" id="account-orders" role="tabpanel" aria-labelledby="account-orders-tab">
                                <div class="myaccount-orders">
                                    <h4 class="small-title">MY ORDERS</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <tbody>
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Holder</th>
                                                  
                                                    <th>Price </th>
                                                    <th>Discount </th>
                                                    <th>Download </th>
                                                </tr>
                                                <?php
                                                $s = "SELECT * FROM `order` WHERE `email` = '$email' ORDER BY id DESC";
                                                $q = mysqli_query($con, $s);
                                                while ($row = mysqli_fetch_array($q)) {

                                                ?>
                                                    <tr>
                                                        <td><a class="account-order-id" href="#">#<?php echo $row['id']  ?></a></td>
                                                        <td><?php echo $row['created_at'] ?></td>
                                                        <td><?php
                                                            if ($row['oredr_status'] == 'Cancelled-By-Supplier') {
                                                                echo "<small><span class='btn btn-warning btn-sm' >" . $row['oredr_status'] . "</span></small>";
                                                            } else if ($row['oredr_status'] == 'Delivered') {
                                                                echo "<span class='btn btn-success btn-sm'>" . $row['oredr_status'] . "</span>";
                                                            } else {
                                                                echo "<span class='btn btn-danger btn-sm'>" . $row['oredr_status'] . "</span>";
                                                            }


                                                            ?></td>
                                                        <td><?php echo $row['holder'] ?></td>
                                                       
                                                        <td><small>₹<?php echo $row['og_price']; ?> X <?php echo $row['quantity']; ?> = <?php echo $row['price'] ?></small> </td>
                                                        <td><?php echo $row['discount'] ?> </td>
                                                        <td>
                                                            <form method="POST" action="payment-pdf.php?id=<?php echo $row['id'] ?>">
                                                                <button type="submit" class="btn btn-dark" name="generate_pdf"> PDF</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-details" role="tabpanel" aria-labelledby="account-details-tab">
                                <div class="myaccount-details">
                                    <?php
                                    $s = "SELECT * FROM `user_register` WHERE `email` = '$email'";
                                    $q = mysqli_query($con, $s);
                                    while ($row = mysqli_fetch_array($q)) {

                                    ?>
                                        <form action="#" class="myaccount-form">
                                            <div class="myaccount-form-inner">
                                                <div class="single-input single-input-half">
                                                    <label>User Name*</label>
                                                    <input type="text" value="<?php echo $row['name'] ?>" disabled>
                                                </div>

                                                <div class="single-input single-input-half">
                                                    <label>Email*</label>
                                                    <input type="email" value="<?php echo $row['email'] ?>" disabled>
                                                </div>
                                                <div class="single-input">
                                                    <label>Phone Number*</label>
                                                    <input type="number" value="<?php echo $row['mobile_number'] ?>" disabled>
                                                </div>
                                                <div class="single-input">
                                                    <label>Password*</label>
                                                    <input type="password" value="<?php echo $row['password'] ?>" disabled>
                                                </div>

                                            </div>
                                        </form>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    include "footer.php";
    ?>
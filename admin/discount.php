<?php
include "connection.php";

// Fetch discount rules from the database
$discount_query = "SELECT * FROM discounts ORDER BY id DESC";
$result = mysqli_query($conn, $discount_query);

// Message to show alerts
$alert_message = "";
$alert_class = "";

if (isset($_POST['submit'])) {
    if (isset($_POST['min_items']) && isset($_POST['discount_percentage'])) {
        $min_items = (int)$_POST['min_items'];
        $discount_percentage = (int)$_POST['discount_percentage'];

        // Check for duplicate entry
        $check_query = "SELECT * FROM discounts WHERE min_items = $min_items AND discount_percentage = $discount_percentage";
        $check_result = mysqli_query($conn, $check_query);

        if (mysqli_num_rows($check_result) > 0) {
            $alert_message = "This discount rule already exists!";
            $alert_class = "alert-warning";
        } else {
            $insert_query = "INSERT INTO discounts (min_items, discount_percentage) VALUES ($min_items, $discount_percentage)";
            if (mysqli_query($conn, $insert_query)) {
                $alert_message = "Discount rule added successfully!";
                $alert_class = "alert-success";

                // Refresh the list
                $discount_query = "SELECT * FROM discounts ORDER BY id DESC";
                $result = mysqli_query($conn, $discount_query);
            } else {
                $alert_message = "Failed to add discount rule.";
                $alert_class = "alert-danger";
            }
        }
    }
}
?>

<!--  -->
<?php


$sql_select = "select * from `show_discount` where `id`='1'";
$data = mysqli_query($conn, $sql_select);
$row1 = mysqli_fetch_assoc($data);

if (isset($_POST['update'])) {
    $status = $_POST['status'];


    $sql_update = "update `show_discount` set `status`='$status'  where `id`='1'";
    mysqli_query($conn, $sql_update);
    header("location:discount.php");
}

?>
<?php include_once 'header.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage Discounts</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Manage Discounts</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add Discount Rule</h3>
                        </div>
                        <div class="card-body">

                            <!-- Alert Message -->
                            <?php if (!empty($alert_message)): ?>
                                <div class="alert <?php echo $alert_class; ?> alert-dismissible fade show" role="alert">
                                    <?php echo $alert_message; ?>

                                </div>
                            <?php endif; ?>

                            <!-- Discount Form -->
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="min_items">Min Items:</label>
                                    <input type="number" class="form-control" name="min_items" required>
                                </div>
                                <div class="mb-3">
                                    <label for="discount_percentage">Discount Percentage:</label>
                                    <input type="number" name="discount_percentage" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-success mb-4" name="submit">Add Discount</button>
                            </form>

                            <!-- Discount Table -->
                            <h3>Existing Discount Rules</h3>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Min Items (Product)</th>
                                    <th>Discount Percentage</th>
                                    <th>Status</th>
                                </tr>
                                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                    <tr>
                                        <td><?php echo $row['min_items']; ?></td>
                                        <td><?php echo $row['discount_percentage']; ?>%</td>
                                        <td><a href="disable_discount.php?id=<?php echo $row['id']; ?>">Disable</a></td>
                                    </tr>
                                <?php endwhile; ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 bg-white py-3 px-3">
                    <div class="  ">
                        <form action="#" method="post">
                            <div class="form-check">
                                <input class="form-check-input"
                                    type="radio"
                                    name="status"
                                    id="radioDefault1"
                                    value="show"
                                    <?php if ($row1['status'] == "show") echo "checked"; ?>>
                                <label class="form-check-label" for="radioDefault1">
                                    Show Discount
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input"
                                    type="radio"
                                    name="status"
                                    id="radioDefault2"
                                    value="hide"
                                    <?php if ($row1['status'] != "show") echo "checked"; ?>>
                                <label class="form-check-label" for="radioDefault2">
                                    Not Show Discount
                                </label>
                            </div>
                            <input type="submit" class="btn btn-success btn-sm my-3" name="update" value="Update">
                        </form>

                        <hr>
                        <address>NOTE : "If you want to show the discount table on the <u>Cart page</u>, please click the checkbox."</address>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include_once 'footer.php'; ?>
<?php include_once 'scripts.php'; ?>
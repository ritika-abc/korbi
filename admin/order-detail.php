<?php include_once 'header.php';

$id = $_GET['id'];

$sql_select = "select * from `order` where `id`='$id'";
$data = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_assoc($data);

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Details of Product to Deliver</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Details of Product to Deliver</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <table id="example2" class="table table-bordered">

                            <tr>
                                <th>Current Delivery Status</th>
                                <td><i><?php
                                        if ($row['oredr_status'] == 'Cancelled-By-Supplier') {
                                            echo "<span class='btn btn-warning'>" . $row['oredr_status'] . "</span>";
                                        } else if ($row['oredr_status'] == 'Delivered'){
                                            echo "<span class='btn btn-success'>" . $row['oredr_status'] . "</span>";
                                        } else{
                                            echo "<span class='btn btn-danger'>" . $row['oredr_status'] . "</span>";
                                        }
                                        
                                        
                                        ?></i></td>
                            </tr>
                            <tr>
                                <th>Product ID</th>
                                <td>#<?php echo $row['id']; ?></td>
                            </tr>
                            <tr>
                                <th>Date Of Payment </th>
                                <td><?php echo $row['created_at']; ?></td>
                            </tr>
                            <tr>
                                <th>Product -Delivered Date </th>
                                <td><?php echo $row['delivered_date']; ?></td>
                            </tr>
                            <tr>
                                <th>Name of Product</th>
                                <td><?php echo $row['name']; ?></td>
                            </tr>
                            <tr>
                                <th>Holder Name</th>
                                <td><B><?php echo $row['holder']; ?></B></td>
                            </tr>
                            <tr>
                                <th>Light Name</th>
                                <td><B><?php echo $row['light']; ?></B></td>
                            </tr>
                            <tr>
                                <th>Price </th>
                                <td>Rs.<?php echo $row['price']; ?></td>
                            </tr>
                            <tr>
                                <th>Number of Product </th>
                                <td><?php echo $row['quantity']; ?></td>
                            </tr>
                            <tr>
                                <th>Payment</th>
                                <td class="text-capitalize"><?php echo $row['status']; ?></td>
                            </tr>
                            <tr>
                                <th>Note</th>
                                <td class="text-capitalize"><?php echo $row['note']; ?></td>
                            </tr>
                            <!-- ------------------------------------------------------ -->
                            <tr>
                                <td colspan="2" class="text-danger">Customer Details</td>
                            </tr>
                            <tr>
                                <th>Customer Name</th>
                                <td class="text-capitalize"><?php echo $row['user_name']; ?></td>
                            </tr>
                            <tr>
                                <th>Delivery Address</th>
                                <td><?php echo $row['address']; ?></td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td><?php echo $row['country']; ?></td>
                            </tr>
                            <tr>
                                <th>City / State</th>
                                <td><?php echo $row['city']; ?> / <?php echo $row['state']; ?></td>
                            </tr>
                            <tr>
                                <th>Pincode</th>
                                <td><?php echo $row['zip']; ?></td>
                            </tr>
                            <tr>
                                <th>Customer number</th>
                                <td><?php echo $row['mobile']; ?></td>
                            </tr>

                            <tr>
                                <th>Customer Email ID</th>
                                <td><?php echo $row['email']; ?></td>
                            </tr>
                            <tr>
                                <th>Payment Id</th>
                                <td><?php echo $row['payment_id']; ?></td>
                            </tr>
                            <tr>
                                <th>Payment Mode</th>
                                <td>Online</td>
                            </tr>


                        </table>

                        <a href="edit-order-status.php?e_id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit Order Status</a>
                        <br>
                        <a href="view-all-orders.php" class="btn btn-primary">Back to View Order List</a>

                    </div>
                    <!-- /.card -->
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!--/.col (right) -->
</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include_once 'footer.php'; ?>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include_once 'scripts.php'; ?>
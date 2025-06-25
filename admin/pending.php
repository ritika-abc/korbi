<?php include_once 'header.php';


?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>View Past Order Data</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">View Past Orders Data</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php
              include "connection.php"; // database configuration
              /* Calculate Offset Code */
              $limit = 50;
              if (isset($_GET['page'])) {
                $page = $_GET['page'];
              } else {
                $page = 1;
              }
              $offset = ($page - 1) * $limit;
              /* select query of user table with offset and limit */
              $sql = "SELECT * FROM `order` where `oredr_status`='Pending' ORDER BY id DESC LIMIT {$offset},{$limit}";
              $result = mysqli_query($conn, $sql) or die("Query Failed.");
              if (mysqli_num_rows($result) > 0) {
              ?>
                <table id="example2" class="table table-bordered table-hover display_past_order_admin_page_change">
                  <thead>
                    <tr>
                      <th>S. No</th>
                      <th>Order Date</th>
                      
                      <th>Client Name</th>
                      <th>Price</th>
                      <th>Quantity</th>
                     
                      <th>Country</th>
                      <th>City & Pincode</th>
                      <th>Number</th>
                      <th>Payment</th>
                      <th>Order Status</th>
                      <th>Details</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $serial = $offset + 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                      <tr>
                        <td><?php echo $serial; ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                        <td class="text-capitalize"><?php echo $row['user_name']; ?></td>
                    <td>₹<?php echo $row['price']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                   
                        <td><?php echo $row['country']; ?></td>
                        <td class="text-capitalize"><?php echo $row['city']; ?>-<?php echo $row['zip']; ?></td>
                   
                        <td><?php echo $row['mobile']; ?></td>
                        <td  class="text-capitalize"><?php echo $row['status']; ?></td>
                        <td><?php
                                        if ($row['oredr_status'] == 'Cancelled-By-Supplier') {
                                            echo "<span class='btn btn-warning'>" . $row['oredr_status'] . "</span>";
                                        } else if ($row['oredr_status'] == 'Delivered'){
                                            echo "<span class='btn btn-success'>" . $row['oredr_status'] . "</span>";
                                        } else{
                                            echo "<span class='btn btn-danger'>" . $row['oredr_status'] . "</span>";
                                        }
                                        
                                        
                                        ?></td>
                        <td><a href="order-detail.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Details</a></td>

                      </tr>
                    <?php
                      $serial++;
                    } ?>
                  </tbody>
                </table>
              <?php
              } else {
                echo "<h3>No Results Found.</h3>";
              }
              // show pagination
              $sql1 = "SELECT * FROM `order`";
              $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");

              if (mysqli_num_rows($result1) > 0) {

                $total_records = mysqli_num_rows($result1);

                $total_page = ceil($total_records / $limit);

                echo '<ul class="pagination ">';
                if ($page > 1) {
                  echo '<li class="page-item"><a class="page-link" href="view-all-orders.php?page=' . ($page - 1) . '">Prev</a></li>';
                }
                for ($i = 1; $i <= $total_page; $i++) {
                  if ($i == $page) {
                    $active = "activebtn";
                  } else {
                    $active = " ";
                  }
                  echo '<li class="page-item' . $active . '"><a class="page-link"  href="view-all-orders.php?page=' . $i . '">' . $i . '</a></li>';
                }
                if ($total_page > $page) {
                  echo '<li class="page-item"><a class="page-link" href="vview-all-orders.php?page=' . ($page + 1) . '">Next</a></li>';
                }

                echo '</ul>';
              }
              ?>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
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











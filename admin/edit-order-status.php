<?php include_once 'header.php';

$view_id = $_GET['e_id'];

$sql_select = "select * from `order` where `id`='$view_id'";
$data = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_assoc($data);

if (isset($_POST['edited_order'])) {
  $oredr_status = $_POST['oredr_status'];
  $delivered_date	 = $_POST['delivered_date'];

  $sql_update = "update `order` set `oredr_status`='$oredr_status',`delivered_date`='$delivered_date' where `id`='$view_id'";
  mysqli_query($conn, $sql_update);

  header('location:order-detail.php?id=' . $row['id']);
}

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
            <form method="post" enctype="multipart/form-data">
              <div class="card-body">
                <table id="example2" class="table  mb-5">

                  <tr>
                    <th>Current Delivery Status</th>
                    <td>
                      <select class="form-control" name="oredr_status" required>
                        <option <?php if ($row['oredr_status'] == "Cancelled-By-Supplier") {
                                  echo "selected";
                                } ?>>Pending</option>
                        <option <?php if ($row['oredr_status'] == "Delivered") {
                                  echo "selected";
                                } ?>>Delivered</option>
                        <option <?php if ($row['oredr_status'] == "Cancelled-By-Supplier") {
                                  echo "selected";
                                } ?>>Cancelled-By-Supplier</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <th>Delivered Date	</th>
                    <td>
                     <input type="date" name="delivered_date" class="form-control" value="<?php echo $row['delivered_date'] ?>"  require>
                    </td>
                  </tr>



                  </tr>

                </table>

                <button type="submit" class="btn btn-primary" name="edited_order">Change Current Delivery Status</button>

              </div>
            </form>
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
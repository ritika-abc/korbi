  <?php
    include "connection.php";



    $sql = "SELECT* FROM `login` WHERE `id`='1'";
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($query)) {
        # to select all the data
        $name = $row['name'];
        $password = $row['password'];
        $email = $row['email'];
    }

    ?>

  <!-- update -->

  <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $sql = "UPDATE login SET name='$name', email='$email', password='$password' WHERE id='1'";
        $q = mysqli_query($conn,$sql);
    }
    ?>




  <?php include_once 'header.php';


    ?>

  <style>
      table,
      tr,
      td {
          border: none !important;
      }
  </style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="text-success">Welcome Admin</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                          <li class="breadcrumb-item active">Profile</li>
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
                              <h3 class="card-title">Profile</h3>
                          </div>

                          <div class="card-body">
                              <form action="profile.php" method="POST">
                                  <table class="table table-bordered">
                                      <tr>
                                          <td>User Name</td>
                                          <td><input type="text" class="form-control" value="<?php echo $name ?>" name="name"></td>
                                      </tr>
                                      <tr>
                                          <td>User Email Id</td>
                                          <td><input type="email" class="form-control" value="<?php echo $email ?>" name="email"></td>
                                      </tr>

                                      <tr>
                                          <td>Password</td>
                                          <td>
                                              <div class="input-group">
                                                  <input type="password" class="form-control" value="<?php echo $password ?>" id="password" name="password">
                                                  <div class="input-group-append">
                                                      <button type="button" class="btn btn-secondary" onclick="togglePassword()">Show</button>
                                                  </div>
                                              </div>
                                          </td>
                                      </tr>
                                  </table>
                                  <input type="hidden" name="user_id" value="<!-- your user ID here -->">
                                  <button type="submit" name="submit" class="btn btn-primary">Update</button>
                              </form>
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

      <script>
          function togglePassword() {
              const passwordField = document.getElementById("password");
              const button = event.target;
              if (passwordField.type === "password") {
                  passwordField.type = "text";
                  button.textContent = "Hide";
              } else {
                  passwordField.type = "password";
                  button.textContent = "Show";
              }
          }
      </script>

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
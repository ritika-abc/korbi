<?php include_once 'connection.php';

if (!isset($_SESSION['login_id'])) {
  header('location:index.php');
}

/* To find the URL */
$url =  isset($_SERVER['HTTPS']) &&
  $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";

$url = $_SERVER['REQUEST_URI'];
 
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KORBI Japanese LED Bulbs</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <!-- <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
  <!-- JQVMap -->
  <!-- <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css"> -->
  <!-- summernote -->
  <!-- <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css"> -->

  <!-- Ion Slider -->
  <!-- <link rel="stylesheet" href="plugins/ion-rangeslider/css/ion.rangeSlider.min.css"> -->
  <!-- bootstrap slider -->
  <!-- <link rel="stylesheet" href="plugins/bootstrap-slider/css/bootstrap-slider.min.css"> -->

  <!-- Bootstrap Color Picker -->
  <!-- <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css"> -->
  <!-- Select2 -->
  <!-- <link rel="stylesheet" href="plugins/select2/css/select2.min.css"> -->
  <!-- <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css"> -->
  <!-- Bootstrap4 Duallistbox -->
  <!-- <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css"> -->
  <!-- BS Stepper -->
  <!-- <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css"> -->
  <!-- dropzonejs -->
  <!-- <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css"> -->

  <!-- CodeMirror -->
  <!-- <link rel="stylesheet" href="plugins/codemirror/codemirror.css"> -->
  <!-- <link rel="stylesheet" href="plugins/codemirror/theme/monokai.css"> -->
  <!-- SimpleMDE -->
  <!-- <link rel="stylesheet" href="plugins/simplemde/simplemde.min.css"> -->

 

  <!-- flag-icon-css -->
  <link rel="stylesheet" href="plugins/flag-icon-css/css/flag-icon.min.css">

  <style>
    .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: right;
      padding-right: .75rem;
    }

    .color-palette.disabled {
      text-align: center;
      padding-right: 0;
      display: block;
    }

    .color-palette-set {
      margin-bottom: 15px;
    }

    .color-palette span {
      display: none;
      font-size: 12px;
    }

    .color-palette:hover span {
      display: block;
    }

    .color-palette.disabled span {
      display: block;
      text-align: left;
      padding-left: .75rem;
    }

    .color-palette-box h4 {
      position: absolute;
      left: 1.25rem;
      margin-top: .75rem;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
    }

    .btn-primary-page {
      background-color: white;
      color: #007bff;
      border: 1px solid #007bff;
      border-radius: 10%;
    }

    .btn-primary-page-active {
      color: #fff;
      background-color: #0069d9;
      border-color: #0062cc;
      border-radius: 10%;
    }
  </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="dashboard.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="profile.php" class="nav-link" style="color: black;"><b>Profile</b></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        

        
    
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="dashboard.php" class="brand-link bg-white">
        <img src="logo/korbi.png" height="80px" width="200px" alt="Header Logo">

      </a>

      <!-- Sidebar -->
      <div class="sidebar">


        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div> -->

        <!-- Dashboard -->
        <nav class="mt-2 my-5">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item <?php if ($url == "admin/dashboard.php") {
                                  echo "menu-open";
                                } ?>">
              <a href="dashboard.php" class="nav-link <?php if ($url == "admin/dashboard.php") {
                                                        echo "active";
                                                      } ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>
              <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="dashboard.php" class="nav-link <?php if ($url == "/yom/admin/dashboard.php") {
                                                          echo "active";
                                                        } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            </ul> -->
            </li>
          </ul>


          <!-- Slider -->


          <!-- Services -->
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item <?php if ($url == "admin/add-product.php" || $url == "admin/view-product.php") {
                                  echo "menu-open";
                                } ?>">
              <a href="#" class="nav-link <?php if ($url == "admin/add-product.php" || $url == "admin/view-product.php") {
                                            echo "active";
                                          } ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Products
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="view-product.php" class="nav-link <?php if ($url == "admin/view-product.php") {
                                                                echo "active";
                                                              } ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View/Manage Product</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
          <!-- Services -->
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item  ">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Discount  Offer
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="discount.php" class="nav-link  ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Discount</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>






          <!-- Contact Us -->
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item <?php if ($url == "admin/contacted-us.php") {
                                  echo "menu-open";
                                } ?>">
              <a href="#" class="nav-link <?php if ($url == "admin/contacted-us.php") {
                                            echo "active";
                                          } ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Data of Contacted-Us
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="contacted-us.php" class="nav-link <?php if ($url == "admin/contacted-us.php") {
                                                                echo "active";
                                                              } ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Contacted-Us Data</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>

          <!-- Contact Us -->
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item <?php if ($url == "admin/view-received-order.php" || $url == "admin/view-all-orders.php") {
                                  echo "menu-open";
                                } ?>">
              <a href="#" class="nav-link <?php if ($url == "admin/view-received-order.php" || $url == "admin/view-all-orders.php") {
                                            echo "active";
                                          } ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Orders
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>


              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="view-all-orders.php" class="nav-link <?php if ($url == "admin/view-all-orders.php") {
                                                                  echo "active";
                                                                } ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Orders Data</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>






          <!-- Log-out -->
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="log-out.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Log-out
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
<?php include_once 'header.php';

if (isset($_GET['e_id']))
{
    $edit_id = $_GET['e_id'];
}

$sql_select = "select * from `product` where `id`='$edit_id'";
$data = mysqli_query($conn,$sql_select);
$row = mysqli_fetch_assoc($data);

$tag = explode(', ',$row['tag']);
$tag_length = count($tag);

$size = explode(', ',$row['size']);
$size_length = count($size);

$color = explode(', ',$row['color']);
$color_length = count($color);


if (isset($_POST['edited_product']))
{
    $name = $_POST['name'];
    $price = $_POST['price'];
 
    $one_line_title = $_POST['one_line_title'];
 
    
    $stock = $_POST['stock'];

    $image1_e = $_FILES['image1']['name'];
    if ($image1_e=="")
    {
        $image1=$row['image1'];
    }
    else
    {
        unlink('image/'.$row['image1']);

        $image1 = rand(1,1000000).$_FILES['image1']['name'];
        $path1 = 'image/'.$image1;
        move_uploaded_file($_FILES['image1']['tmp_name'],$path1);
    }

    $image2_e = $_FILES['image2']['name'];
    if ($image2_e=="")
    {
        $image2=$row['image2'];
    }
    else
    {
        unlink('image/'.$row['image2']);

        $image2 = rand(1,1000000).$_FILES['image2']['name'];
        $path2 = 'image/'.$image2;
        move_uploaded_file($_FILES['image2']['tmp_name'],$path2);
    }

    $image3_e = $_FILES['image3']['name'];
    if ($image3_e=="")
    {
        $image3=$row['image3'];
    }
    else
    {
        unlink('image/'.$row['image3']);

        $image3 = rand(1,1000000).$_FILES['image3']['name'];
        $path3 = 'image/'.$image3;
        move_uploaded_file($_FILES['image3']['tmp_name'],$path3);
    }


    $sql_update = "update `product` set `name`='$name',`price`='$price',`one_line_title`='$one_line_title',`image1`='$image1',`image2`='$image2',`image3`='$image3',`stock`='$stock' where `id`='$edit_id'";
    mysqli_query($conn,$sql_update);

    $sql_update_cart = "update `cart` set `name`='$name',`price`='$price',`image`='$image1' where `product_id`='$edit_id'";
    mysqli_query($conn,$sql_update_cart);

    header('location:view-more-product.php?v_id='.$row['id']);

} 

?>

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Product</h1>
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
                <h3 class="card-title">Edit This Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Stock</label>
                    <select class="form-control" name="stock" required>
                      <option selected disabled>-Select Avilability of Product-</option>
                      <option <?php if($row['stock']=="In Stock"){echo "selected";} ?>>In Stock</option>
                      <option <?php if($row['stock']=="Out of Stock"){echo "selected";} ?>>Out of Stock</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Name/Title of Product</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Title of New Photo" name="name" maxlength="40" required value="<?php echo @$row['name']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" maxlength="50" placeholder="Enter Some Details of New Photo" name="price" maxlength="50" required value="<?php echo @$row['price']; ?>">
                  </div>

                  

                 
 
 
 

                  <div class="form-group">
                    <label for="exampleInputPassword1">One Line Title of Product</label>
                    <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter One Line Title of Product" name="one_line_title" maxlength="100" required><?php echo $row['one_line_title']; ?></textarea>
                  </div>

                   
                  <div class="form-group">
                    <label for="exampleInputFile">Image 1 (Main Image)</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image1">
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label></div>
                    </div> 
                  </div>
                   <label for="exampleInputFile">Current Image-1 (Main Image) of Product</label>
                        <div style="width: 200px; height: 200px;">
                            <img src="image/<?php echo $row['image1']; ?>" style="height: 100%; width: 100%; object-fit: cover; object-position: top;">
                        </div>
                  <br>  

                  <div class="form-group">
                    <label for="exampleInputFile">Image 2</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image2">
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                      </div>
                    </div> 
                  </div>
                  <label for="exampleInputFile">Current Image-2 of Product</label>
                        <div style="width: 200px; height: 200px;">
                            <img src="image/<?php echo $row['image2']; ?>" style="height: 100%; width: 100%; object-fit: cover; object-position: top;">
                        </div>
                  <br>
<!-- this is an error page -->
                  <div class="form-group">
                    <label for="exampleInputFile">Image 3</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image3">
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                      </div>
                    </div> 
                  </div>
                  <label for="exampleInputFile">Current Image-3 of Product</label>
                  <div style="width: 200px; height: 200px;">
                      <img src="image/<?php echo $row['image3']; ?>" style="height: 100%; width: 100%; object-fit: cover; object-position: top;">
                  </div>

                <!-- /.card-body -->
           
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="edited_product">Submit</button>
                </div>

              </div>
              </form>
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
 
<!-- 
   



-->
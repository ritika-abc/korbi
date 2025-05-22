<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Korbi</title>
    <meta name="robots" content="index, follow" />
    <meta name="description"
        content="Korbi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />

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
    <style>
        .list>li::marker {
            color: red;
            font-size: 1.5em
        }
    </style>
</head>

<body>
    <?php
    include "nav.php";
    ?>
    <!-- Begin Main Content Area -->
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="image/banner/second-1536x1024.jpeg">
             
        </div>
        <div class="shop-area section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-xl-3 col-lg-4 order-lg-1 order-2 pt-10 pt-lg-0">
                        <div class="sidebar-area style-2">
                            <div class="widgets-searchbox widgets-area py-6 mb-9">
                                <form id="widgets-searchbox" action="#">
                                    <input class="input-field" type="text" placeholder="Search">
                                    <button class="widgets-searchbox-btn" type="submit">
                                        <i class="pe-7s-search"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="widgets-area mb-9">
                                <h2 class="widgets-title mb-5">Product Categories</h2>
                                <div class="widgets-item">
                                    <ul class="widgets-category">
                                        <li>
                                            <a href="#">Accesasories
                                                <span>(6)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Computer
                                                <span>(4)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Covid-19
                                                <span>(2)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Electronics
                                                <span>(6)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Frame Sunglasses
                                                <span>(12)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Furniture
                                                <span>(7)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Genuine Leather
                                                <span>(9)</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widgets-area widgets-filter mb-9">
                                <h2 class="widgets-title mb-5">Price Filter</h2>
                                <div class="price-filter">
                                    <input type="text" class="tromic-range-slider" name="tromic-range-slider" value="" data-type="double" data-min="16" data-from="16" data-to="300" data-max="350" data-grid="false" />
                                </div>
                            </div>
                            <div class="widgets-area mb-9">
                                <h2 class="widgets-title mb-5">Color</h2>
                                <div class="widgets-item">
                                    <ul class="widgets-checkbox">
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="color-selection-1">
                                            <label class="label-checkbox mb-0" for="color-selection-1">Red
                                                <span>(12)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="color-selection-2" checked>
                                            <label class="label-checkbox mb-0" for="color-selection-2">Light Black
                                                <span>(09)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="color-selection-3">
                                            <label class="label-checkbox mb-0" for="color-selection-3">Dark Blue
                                                <span>(7)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="color-selection-4">
                                            <label class="label-checkbox mb-0" for="color-selection-4">Gray
                                                <span>(11)</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widgets-area mb-9">
                                <h2 class="widgets-title mb-5">Size</h2>
                                <div class="widgets-item">
                                    <ul class="widgets-checkbox">
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="size-selection-1">
                                            <label class="label-checkbox mb-0" for="size-selection-1">M<span>(12)</span></label>
                                        </li>
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="size-selection-2" checked>
                                            <label class="label-checkbox mb-0" for="size-selection-2">L<span>(09)</span></label>
                                        </li>
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="size-selection-3">
                                            <label class="label-checkbox mb-0" for="size-selection-3">XL<span>(07)</span></label>
                                        </li>
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="size-selection-4">
                                            <label class="label-checkbox mb-0" for="size-selection-4">XXL<span>(11)</span></label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widgets-area">
                                <h2 class="widgets-title mb-5">Tag</h2>
                                <div class="widgets-item">
                                    <ul class="widgets-tags">
                                        <li>
                                            <a href="#">Auto Parts</a>
                                        </li>
                                        <li>
                                            <a href="#">Car Parts</a>
                                        </li>
                                        <li>
                                            <a href="#">Automobil Parts</a>
                                        </li>
                                        <li>
                                            <a href="#">Car</a>
                                        </li>
                                        <li>
                                            <a href="#">Auto Parts</a>
                                        </li>
                                        <li>
                                            <a href="#">Cat Parts</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-xl-12  ">
                        <div class="product-topbar">
                            <ul>
                                <li class="page-count">
                                    <span> </span> Product Found of <span> </span>
                                </li>
                                
                                <li class="short">
                                    <select class="nice-select rounded-0">
                                        <option value="1">Sort by Default</option>
                                        <option value="2">Sort by Popularity</option>
                                        <option value="3">Sort by Rated</option>
                                        <option value="4">Sort by Latest</option>
                                        <option value="5">Sort by High Price</option>
                                        <option value="6">Sort by Low Price</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content text-charcoal pt-8">
                            <div class="tab-pane fade show active" id="grid-view" role="tabpanel" aria-labelledby="grid-view-tab">

                                <div class="product-grid-view row">
                                    <?php
                                    include "site_connection.php";
                                    $q = "SELECT * FROM `product`   ";  // Retrieve 6 products
                                    $a = mysqli_query($con, $q);
                                    while ($row = mysqli_fetch_array($a)) {
                                    ?>
                                        <div class="col-xl-3 col-sm-6 my-4">
                                            <form action="cart.php" method="POST">
                                                <div class="product-item w-100">
                                                    <div class="product-img img-zoom-effect">
                                                        <a href="single-product.php?id=<?php echo $row['id'] ?>">
                                                            <img class=" " src="./admin/image/<?php echo $row['image1'] ?>" height="300px" width="100%"  style="object-fit:cover" alt="<?php echo $row['name'] ?>">
                                                           
                                                        </a>
                                                    </div>
                                                    <div class="product-content  w-100 py-2 px-3" style="background-color: #ffffffab;">
                                                        <a class="product-name pb-1" href="single-product.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a>
                                                        <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>"> <!-- Product ID -->
                                                        <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>"> <!-- Product Name -->
                                                        <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>"> <!-- Product Price -->
                                                        <input type="hidden" name="product_image" value="<?php echo $row['image1']; ?>"> <!-- Product Image -->
                                                        <input type="hidden" name="product_size" value="<?php echo $row['size']; ?>"> <!-- Product Size -->
                                                        <input type="hidden" name="quantity" value="1"> <!-- Product Size -->
                                                        <input type="hidden" name="product_color" value="<?php echo $row['color']; ?>"> <!-- Product Color -->
                                                        <input type="hidden" name="user_email" value="<?php echo isset($_SESSION['user_email']) ? $_SESSION['user_email'] : ''; ?>"> <!-- User email, assuming the user is logged in -->


                                                        <div class="price-box">
                                                            <div class="price-box-holder">
                                                                <span>Price:</span>
                                                                <span class="new-price text-primary"><b class="text-danger"><?php echo "₹" . $row['price']; ?></b></span>
                                                            </div>
                                                        </div>

                                                        <div class="product-add-action w-100">
                                                            <ul class="w-100">
                                                                <li class="text-center">
                                                                    <button name="submit" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" class="btn btn-danger d-block  text-white" style="width: 200px;" type="submit"><i class="pe-7s-cart text-white"></i> Add To Cart</button>
                                                                    <!-- <button name="submit" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" type="submit"><i class="pe-7s-cart"></i></button> -->

                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    <?php } ?>
                                </div>



                            </div>
                         
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Main Content Area End Here -->
 <?php 

include "footer.php";

?>
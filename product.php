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
    <!-- Begin Main Content Area  -->
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="image/banner/bg-2-2048x1388.jpeg">
            <!-- <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item text-night-rider">
                                <h2 class="breadcrumb-heading">Product Style</h2>
                                <ul>
                                    <li>
                                        <a href="index.html">Home /</a>
                                    </li>
                                    <li>Single Product Variable</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
        </div>
        <?php
        include "site_connection.php";

        $q = "SELECT * FROM `product` limit 1 ";  // Retrieve 6 products
        $a = mysqli_query($con, $q);
        while ($row = mysqli_fetch_array($a)) {
        ?>
            <div class="single-product-area section-space-top-100">
                <form action="cart.php" method="post">
                    <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>"> <!-- Product ID -->
                    <!-- <input type="hidden" name="holder" value="1"> -->

                    <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>"> <!-- Product Name -->
                    <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>"> <!-- Product Price -->
                    <input type="hidden" name="product_image" value="<?php echo $row['image1']; ?>"> <!-- Product Image -->
                    <input type="hidden" name="product_size" value="<?php echo $row['size']; ?>"> <!-- Product Size -->
                    <input type="hidden" name="quantity" value="1"> <!-- Product Size -->
                    <input type="hidden" name="product_color" value="<?php echo $row['color']; ?>"> <!-- Product Color -->
                    <input type="hidden" name="user_email" value="<?php echo isset($_SESSION['user_email']) ? $_SESSION['user_email'] : ''; ?>"> <!-- User email, assuming the user is logged in -->


                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-product-img">
                                    <div class="swiper-container single-product-slider">
                                        <div class="swiper-wrapper ">
                                            <div class="swiper-slide">
                                                <a href="./admin/image/<?php echo $row['image1'] ?>" class="single-img gallery-popup">
                                                    <img class="img-full" src="./admin/image/<?php echo $row['image1'] ?>" alt="Product Image">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="./admin/image/<?php echo $row['image2'] ?>" class="single-img gallery-popup">
                                                    <img class="img-full" src="./admin/image/<?php echo $row['image2'] ?>" alt="Product Image">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="./admin/image/<?php echo $row['image3'] ?>" class="single-img gallery-popup">
                                                    <img class="img-full" src="./admin/image/<?php echo $row['image3'] ?>" alt="Product Image">
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="thumbs-arrow-holder">
                                        <div class="swiper-container single-product-thumbs">
                                            <div class="swiper-wrapper">
                                                <a href="#" class="swiper-slide">
                                                    <img class="img-full" src="./admin/image/<?php echo $row['image1'] ?>" alt="Product Thumnail">
                                                </a>
                                                <a href="#" class="swiper-slide">
                                                    <img class="img-full" src="./admin/image/<?php echo $row['image2'] ?>" alt="Product Thumnail">
                                                </a>
                                                <a href="#" class="swiper-slide">
                                                    <img class="img-full" src="./admin/image/<?php echo $row['image3'] ?>" alt="Product Thumnail">
                                                </a>

                                            </div>
                                        </div>
                                        <!-- Add Arrows -->
                                        <div class=" thumbs-button-wrap d-none d-md-block">
                                            <div class="thumbs-button-prev">
                                                <i class="pe-7s-angle-left"></i>
                                            </div>
                                            <div class="thumbs-button-next">
                                                <i class="pe-7s-angle-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pt-9 pt-lg-0">
                                <div class="single-product-content">
                                    <h2 class="title mb-3"><?php echo $row['name'] ?></h2>
                                    <div class="price-box pb-3">
                                        <span class="new-price text-danger">₹<?php echo $row['price'] ?></span>
                                    </div>

                                    <div class="selector-wrap color-option">
                                        <span class="selector-title border-bottom-0">Light Color Led</span>
                                        <select name="light" class="nice-select wide border-bottom-0 rounded-0" required>

                                            <option value="ALL WEATHER (WARM WHITE)" <?php if ($row['light'] == 'ALL WEATHER (WARM WHITE)') echo 'selected'; ?>>All Weather (Warm White)</option>
                                            <option value="CLEAR SKY (COOL WHITE)" <?php if ($row['light'] == 'CLEAR SKY (COOL WHITE)') echo 'selected'; ?>>Clear Sky (Cool White)</option>
                                        </select>
                                    </div>
                                    <div class="selector-wrap pb-55">
                                        <span class="selector-title">Holder Type</span>
                                        <select name="holder" class="nice-select wide rounded-0"  >                                        
                                            <option value="H1" <?php if ($row['holder'] == 'H1') echo 'selected'; ?>>H1</option>
                                            <option value="H4" <?php if ($row['holder'] == 'H4') echo 'selected'; ?>>H4</option>
                                            <option value="H7" <?php if ($row['holder'] == 'H7') echo 'selected'; ?>>H7</option>
                                            <option value="H8" <?php if ($row['holder'] == 'H8') echo 'selected'; ?>>H8</option>
                                            <option value="H11" <?php if ($row['holder'] == 'H11') echo 'selected'; ?>>H11</option>
                                            <option value="HB3" <?php if ($row['holder'] == 'HB3') echo 'selected'; ?>>HB3</option>
                                            <option value="HIR2" <?php if ($row['holder'] == 'HIR2') echo 'selected'; ?>>HIR2</option>
                                            <option value="9005" <?php if ($row['holder'] == '9005') echo 'selected'; ?>>9005</option>
                                            <option value="9012" <?php if ($row['holder'] == '9012') echo 'selected'; ?>>9012</option>
                                        </select>
                                    </div>
                                    <p class="short-desc mb-9"><?php echo $row['one_line_title'] ?></p>
                                    <ul class="quantity-with-btn pb-9">
                                        <li class="quantity d-none">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" value="1" type="text">
                                            </div>
                                        </li>
                                        <li class="add-to-cart">
                                            <button class="btn btn-custom-size lg-size btn-primary" name="submit">Add to cart</button>
                                        </li>

                                    </ul>
                                    <div class="product-category pb-3">
                                        <span class="title">Technology : <i class="text-dark">LED FLIP CHIP</i></span>

                                    </div>
                                    <div class="product-category pb-3">
                                        <span class="title">Color Temperature : <i class="text-dark">4k All Weather & 6k
                                                Clear Sky</i></span>

                                    </div>
                                    <div class="product-category pb-3">
                                        <span class="title">Warranty : <i class="text-dark">1 + 1 Year Extendable</i></span>

                                    </div>


                                    <div class="product-category social-link align-items-center pb-lg-8">
                                        <span class="title pe-3">Share:</span>
                                        <ul>
                                            <li>
                                                <a href="#" data-tippy="Pinterest" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-pinterest-p"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-tippy="Twitter" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-tippy="Tumblr" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-tumblr"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-tippy="Dribbble" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-dribbble"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        <?php } ?>
        <div class="product-tab-area section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav product-tab-nav mb-10" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="tab-btn" id="information-tab" data-bs-toggle="tab" href="#information"
                                    role="tab" aria-controls="information" aria-selected="false">
                                    Information
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="active tab-btn" id="description-tab" data-bs-toggle="tab"
                                    href="#description" role="tab" aria-controls="description" aria-selected="true">
                                    DATA
                                </a>
                            </li>

                        </ul>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="tab-content product-tab-content">
                                    <div class="tab-pane fade" id="information" role="tabpanel"
                                        aria-labelledby="information-tab">
                                        <div class="product-information-body">
                                            <h4 class="title text-danger">Product Information</h4>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Holder Types Available</th>
                                                    <td>H1, H4, H7, H8, H11, HB3, HIR2, 9005, 9012</td>
                                                </tr>
                                                <tr>
                                                    <th>Technology </th>
                                                    <td>LED FLIP CHIP</td>
                                                </tr>
                                                <tr>
                                                    <th>Product Legal Advice</th>
                                                    <td>Specifically Designed For Indian Right Hand Drive Conditions
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Color Temperature</th>
                                                    <td>4k All Weather & 6k Clear Sky</td>
                                                </tr>
                                                <tr>
                                                    <th>Application</th>
                                                    <td>High Beam, Low Beam & Fog Lamps</td>
                                                </tr>
                                                <tr>
                                                    <th>Waterproof Rating</th>
                                                    <td>IP 68 - Adapatble For Snow, Rain, Fog & Dust</td>
                                                </tr>
                                                <tr>
                                                    <th>Warranty</th>
                                                    <td>1 + 1 YEAR EXTENDABLE</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show active" id="description" role="tabpanel"
                                        aria-labelledby="description-tab">
                                        <div class="product-description-body">
                                            <div class="  ">
                                                <h4 class="title text-danger">Electric Data</h4>
                                                <table class="table table-bordered my-3">
                                                    <tr>
                                                        <th>Power Input</th>
                                                        <td>70 WATTS</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Operating Voltage </th>
                                                        <td>13.5V +/- 20%</td>
                                                    </tr>
                                                    <tr>
                                                        <th> Nominal Wattage</th>
                                                        <td>62 WATTS</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nominal Voltage</th>
                                                        <td>12.0V</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Input Voltage</th>
                                                        <td>DC9 – 16V</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Working Current</th>
                                                        <td>5.19A</td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            Lifespan Tc</th>
                                                        <td>30000 HR</td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <div class="my-6">
                                                <h4 class="title text-danger">Physical Attributes & Dimensions</h4>
                                                <table class="table table-bordered my-3">
                                                    <tr>
                                                        <th>Product Weight</th>
                                                        <td> 50 GRAMS (BULB ONLY)</td>

                                                    </tr>
                                                    <tr>
                                                        <th>Length </th>
                                                        <td>75MM X 37MM</td>

                                                    </tr>


                                                </table>
                                            </div>
                                            <div class="my-6">
                                                <h4 class="title text-danger">

                                                    Photometric Data</h4>
                                                <table class="table table-bordered my-3">
                                                    <tr>
                                                        <th>Color Temperature</th>
                                                        <td>4300 KELVIN</td>
                                                        <td>6500 KELVIN</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nominal Luminious
                                                            Flux </th>
                                                        <td>8400 LUMENS</td>
                                                        <td>8400 LUMENS</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Light Color Led</th>
                                                        <td>All Weather (Warm White)</td>
                                                        <td>Clear Sky (Cool White)</td>
                                                    </tr>

                                                </table>
                                            </div>
                                            <div class="my-6">
                                                <h4 class="title text-danger">Logistic Data</h4>
                                                <table class="table table-bordered my-3">
                                                    <tr>
                                                        <th rowspan="3"> Korbi Box Unit With 1 <br>
                                                            Pair Led Bulbs, Fitting <br>
                                                            Tool, Zip Ties & <br>
                                                            Warranty Card
                                                        </th>

                                                    </tr>
                                                    <tr>
                                                        <td> Dimensions</td>
                                                        <td>Packed Box Weight</td>

                                                    </tr>
                                                    <tr>
                                                        <td> 230MM X 145MM X 80MM</td>
                                                        <td> 0.55KG (550 GRAMS)</td>

                                                    </tr>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="reviews" role="tabpanel"
                                        aria-labelledby="reviews-tab">
                                        <div class="product-review-body">
                                            <div class="blog-comment">
                                                <h4 class="heading mb-7">3 Comments</h4>
                                                <div class="blog-comment-item mb-8">
                                                    <div class="blog-comment-img">
                                                        <img src="assets/images/blog/avatar/3-1-101x101.png"
                                                            alt="User Image">
                                                    </div>
                                                    <div class="blog-comment-content pb-8">
                                                        <div class="user-meta">
                                                            <span><strong>Aidyn Cody -</strong> Jul 21,2022 at 15
                                                                hours
                                                                ago</span>
                                                        </div>
                                                        <p class="user-comment mb-4">Lorem ipsum dolor sit amet,
                                                            consectetur
                                                            adipisicing elit, sed do eiusmod tempor inci labore et
                                                            dol magna
                                                            aliqua. Ut enim ad minim veniam quis nostrud</p>
                                                        <a class="btn btn-custom-size comment-btn"
                                                            href="#">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="blog-comment-item relpy-item mb-8">
                                                    <div class="blog-comment-img">
                                                        <img src="assets/images/blog/avatar/3-2-101x101.png"
                                                            alt="User Image">
                                                    </div>
                                                    <div class="blog-comment-content pb-8">
                                                        <div class="user-meta">
                                                            <span><strong>Aidyn Cody -</strong> Jul 21,2022 at 15
                                                                hours
                                                                ago</span>
                                                        </div>
                                                        <p class="user-comment mb-4">Lorem ipsum dolor sit amet,
                                                            consectetur
                                                            adipisicing elit, sed do eiusmod tempor inci labore et
                                                            dol magna
                                                            aliqua. Ut enim ad minim veniam quis nostrud</p>
                                                        <a class="btn btn-custom-size comment-btn"
                                                            href="#">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="blog-comment-item">
                                                    <div class="blog-comment-img">
                                                        <img src="assets/images/blog/avatar/3-3-101x101.png"
                                                            alt="User Image">
                                                    </div>
                                                    <div class="blog-comment-content">
                                                        <div class="user-meta">
                                                            <span><strong>Aidyn Cody -</strong> Jul 21,2022 at 15
                                                                hours
                                                                ago</span>
                                                        </div>
                                                        <p class="user-comment mb-4">Lorem ipsum dolor sit amet,
                                                            consectetur
                                                            adipisicing elit, sed do eiusmod tempor inci labore et
                                                            dol magna
                                                            aliqua. Ut enim ad minim veniam quis nostrud</p>
                                                        <a class="btn btn-custom-size comment-btn"
                                                            href="#">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="feedback-area pt-10">
                                                <h2 class="heading mb-3">Add a review</h2>
                                                <p class="short-desc mb-3">Your email address will not be published.
                                                </p>
                                                <div class="rating-box">
                                                    <span>Your rating</span>
                                                    <ul class="ps-4">
                                                        <li><i class="fa fa-star" data-tippy="1 star"
                                                                data-tippy-inertia="true"
                                                                data-tippy-animation="shift-away"
                                                                data-tippy-delay="50" data-tippy-arrow="true"
                                                                data-tippy-theme="sharpborder"></i></li>
                                                        <li><i class="fa fa-star" data-tippy="2 star"
                                                                data-tippy-inertia="true"
                                                                data-tippy-animation="shift-away"
                                                                data-tippy-delay="50" data-tippy-arrow="true"
                                                                data-tippy-theme="sharpborder"></i></li>
                                                        <li><i class="fa fa-star" data-tippy="3 star"
                                                                data-tippy-inertia="true"
                                                                data-tippy-animation="shift-away"
                                                                data-tippy-delay="50" data-tippy-arrow="true"
                                                                data-tippy-theme="sharpborder"></i></li>
                                                        <li><i class="fa fa-star" data-tippy="4 star"
                                                                data-tippy-inertia="true"
                                                                data-tippy-animation="shift-away"
                                                                data-tippy-delay="50" data-tippy-arrow="true"
                                                                data-tippy-theme="sharpborder"></i></li>
                                                        <li><i class="fa fa-star" data-tippy="5 star"
                                                                data-tippy-inertia="true"
                                                                data-tippy-animation="shift-away"
                                                                data-tippy-delay="50" data-tippy-arrow="true"
                                                                data-tippy-theme="sharpborder"></i></li>
                                                    </ul>
                                                </div>
                                                <form class="feedback-form pt-8" action="#">
                                                    <div class="group-input">
                                                        <div class="form-field me-md-6 mb-6 mb-md-0">
                                                            <input type="text" name="name" placeholder="Your Name*"
                                                                class="input-field">
                                                        </div>
                                                        <div class="form-field me-md-6 mb-6 mb-md-0">
                                                            <input type="text" name="email"
                                                                placeholder="Your Email*" class="input-field">
                                                        </div>
                                                        <div class="form-field">
                                                            <input type="text" name="number"
                                                                placeholder="Phone number" class="input-field">
                                                        </div>
                                                    </div>
                                                    <div class="form-field mt-6">
                                                        <textarea name="message" placeholder="Message"
                                                            class="textarea-field"></textarea>
                                                    </div>
                                                    <div class="button-wrap mt-8">
                                                        <button type="submit" value="submit"
                                                            class="btn btn-custom-size lg-size btn-primary"
                                                            name="submit">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- Main Content Area End Here  -->
    <?php


    include "footer.php";

    ?>
<?php
session_start();
include "site_connection.php";
if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
    //  echo "<script>alert('" . $email  . "')</script>";

    $user = "SELECT * FROM `user_register` WHERE `email`='$email'";
    $q = mysqli_query($con, $user);
    while ($user_row = mysqli_fetch_array($q)) {
        $name = $user_row['name'];
    }
}


?>



<div class="preloader-activate preloader-active open_tm_preloader">
    <div class="preloader-area-wrap">
        <div class="spinner d-flex justify-content-center align-items-center h-100">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
</div>
<div class="main-wrapper">

    <!-- Begin Main Header Area -->
    <header class="main-header-area">
        <div class="header-top border-bottom d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="header-top-left">
                            <ul class="dropdown-wrap text-matterhorn">
                                <!-- <li class="dropdown">
                                        <button class="btn btn-link dropdown-toggle ht-btn" type="button"
                                            id="languageButton" data-bs-toggle="dropdown" aria-label="language"
                                            aria-expanded="false">
                                            English
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="languageButton">
                                            <li><a class="dropdown-item" href="#">French</a></li>
                                            <li><a class="dropdown-item" href="#">Italian</a></li>
                                            <li><a class="dropdown-item" href="#">Spanish</a></li>
                                        </ul>
                                    </li> -->
                                <li class="dropdown">
                                    <button class="btn btn-link dropdown-toggle ht-btn" type="button"
                                        id="currencyButton" data-bs-toggle="dropdown" aria-label="currency"
                                        aria-expanded="false">
                                        USD
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="currencyButton">
                                        <li><a class="dropdown-item" href="#">GBP</a></li>
                                        <li><a class="dropdown-item" href="#">ISO</a></li>
                                    </ul>
                                </li>
                                <li>
                                    Call Us
                                    <a href="tel://3965410">3965410</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="header-top-right text-matterhorn">
                            <p class="shipping mb-0"><small>KORBI: The Light Samurai—Mastering the art of
                                    illumination for every journey.</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-sticky py-6 py-lg-0">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="header-middle-wrap position-relative">

                            <a href="index.html" class="header-logo">
                                <img src="image/logo/korbi.png" height="80px" width="200px" alt="Header Logo">
                            </a>

                            <div class="main-menu d-none d-lg-block">
                                <nav class="main-nav">
                                    <ul>
                                        <li class="drop-holder">
                                            <a href="index.html">Home
                                                <i class="pe-7s-angle-down"></i>
                                            </a>
                                            <ul class="drop-menu">
                                                <li>
                                                    <a href="index.html">Home One</a>
                                                </li>
                                                <li>
                                                    <a href="index-2.html">Home Two</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="megamenu-holder">
                                            <a href="shop.html">Shop
                                                <i class="pe-7s-angle-down"></i>
                                            </a>
                                            <ul class="drop-menu megamenu">
                                                <li>
                                                    <span class="title">Shop Layout</span>
                                                    <ul>
                                                        <li>
                                                            <a href="shop.html">Shop Default</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-grid-fullwidth.html">Shop Grid
                                                                Fullwidth</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list-fullwidth.html">Shop List
                                                                Fullwidth</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list-left-sidebar.html">Shop List Left
                                                                Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list-right-sidebar.html">Shop List Right
                                                                Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <span class="title">Product Style</span>
                                                    <ul>
                                                        <li>
                                                            <a href="single-product-variable.html">Single Product
                                                                Variable</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-product-group.html">Single Product
                                                                Group</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-product.html">Single Product Default</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-product-affiliate.html">Single Product
                                                                Affiliate</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-product-sale.html">Single Product
                                                                Sale</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-product-sticky.html">Single Product
                                                                Sticky</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <span class="title">Product Related</span>
                                                    <ul>
                                                        <li>
                                                            <a href="my-account.html">My Account</a>
                                                        </li>
                                                        <li>
                                                            <a href="login-register.html">Login | Register</a>
                                                        </li>
                                                        <li>
                                                            <a href="cart.html">Shopping Cart</a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">Wishlist</a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">Compare</a>
                                                        </li>
                                                        <li>
                                                            <a href="checkout.html">Checkout</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="banner">
                                                        <img src="assets/images/megamenu/banner/1.jpg"
                                                            alt="Menu Banner">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-holder">
                                            <a href="#">Pages
                                                <i class="pe-7s-angle-down"></i>
                                            </a>
                                            <ul class="drop-menu">
                                                <li>
                                                    <a href="about.html">About</a>
                                                </li>
                                                <li>
                                                    <a href="faq.html">FAQ</a>
                                                </li>
                                                <li>
                                                    <a href="404.html">Error 404</a>
                                                </li>
                                                <li class="drop-holder">
                                                    <a href="#">Multi Dropdown</a>
                                                    <ul class="drop-menu">
                                                        <li class="drop-holder">
                                                            <a href="#">Level 02</a>
                                                            <ul class="drop-menu">
                                                                <li>
                                                                    <a href="#">Level 03</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-holder">
                                            <a href="blog.html">Blog
                                                <i class="pe-7s-angle-down"></i>
                                            </a>
                                            <ul class="drop-menu">
                                                <li>
                                                    <a href="blog-listview.html">Blog List View</a>
                                                </li>
                                                <li>
                                                    <a href="blog-detail.html">Blog Detail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right">
                                <ul>
                                    <li class="dropdown d-none d-lg-block">
                                        <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button"
                                            id="settingButton" data-bs-toggle="dropdown" aria-label="setting"
                                            aria-expanded="false">
                                            <i class="pe-7s-user"></i>
                                        </button>
                                        <ul class="dropdown-menu right-side" aria-labelledby="settingButton">
                                            <li><a class="dropdown-item text-capitalize" href="#"><?php echo $name ?></a></li>
                                            <li><a class="dropdown-item" href="my-account.html">My account</a></li>
                                            <li><a class="dropdown-item" href="login-register.html">Login |
                                                    Register</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#exampleModal" class="search-btn bt" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <i class="pe-7s-search"></i>
                                        </a>
                                    </li>
                                    <li class="d-none d-lg-block">
                                        <a href="wishlist.html">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                    </li>
                                    <li class="minicart-wrap me-3 me-lg-0">
                                        <a href="#miniCart" class="minicart-btn toolbar-btn">
                                            <i class="pe-7s-shopbag"></i>
                                            <span class="quantity">5</span>
                                        </a>
                                    </li>
                                    <li class="mobile-menu_wrap d-block d-lg-none">
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                            <i class="pe-7s-menu"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu_wrapper" id="mobileMenu">
            <div class="tromic-offcanvas-body">
                <div class="inner-body">
                    <div class="tromic-offcanvas-top">
                        <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                    </div>
                    <div class="offcanvas-user-info text-center px-6 pb-5">
                        <div class=" text-silver">
                            <p class="shipping mb-0">Free delivery on order over <span
                                    class="text-primary">$200</span></p>
                        </div>
                        <ul class="dropdown-wrap justify-content-center text-silver">
                            <li class="dropdown dropup">
                                <button class="btn btn-link dropdown-toggle ht-btn" type="button"
                                    id="languageButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                    English
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="languageButtonTwo">
                                    <li><a class="dropdown-item" href="#">French</a></li>
                                    <li><a class="dropdown-item" href="#">Italian</a></li>
                                    <li><a class="dropdown-item" href="#">Spanish</a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropup">
                                <button class="btn btn-link dropdown-toggle ht-btn usd-dropdown" type="button"
                                    id="currencyButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                    USD
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="currencyButtonTwo">
                                    <li><a class="dropdown-item" href="#">GBP</a></li>
                                    <li><a class="dropdown-item" href="#">ISO</a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropup">
                                <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button"
                                    id="settingButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="pe-7s-users"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingButtonTwo">
                                    <li><a class="dropdown-item" href="my-account.html">My account</a></li>
                                    <li><a class="dropdown-item" href="login-register.html">Login | Register</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="wishlist.html">
                                    <i class="pe-7s-like"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="offcanvas-menu_area">
                        <nav class="offcanvas-navigation">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Home
                                            <i class="pe-7s-angle-down"></i>
                                        </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="index.html">
                                                <span class="mm-text">Home One</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">
                                                <span class="mm-text">Home Two</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="about.html">
                                        <span class="mm-text">About Us</span>
                                    </a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Shop
                                            <i class="pe-7s-angle-down"></i>
                                        </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">
                                                <span class="mm-text">Shop Layout
                                                    <i class="pe-7s-angle-down"></i>
                                                </span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop.html">
                                                        <span class="mm-text">Shop Default</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-grid-fullwidth.html">
                                                        <span class="mm-text">Shop Grid Fullwidth</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-right-sidebar.html">
                                                        <span class="mm-text">Shop Right Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-fullwidth.html">
                                                        <span class="mm-text">Shop List Fullwidth</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-left-sidebar.html">
                                                        <span class="mm-text">Shop List Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-right-sidebar.html">
                                                        <span class="mm-text">Shop List Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">
                                                <span class="mm-text">Product Style
                                                    <i class="pe-7s-angle-down"></i>
                                                </span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="single-product.html">
                                                        <span class="mm-text">Single Product Default</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-group.html">
                                                        <span class="mm-text">Single Product Group</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-variable.html">
                                                        <span class="mm-text">Single Product Variable</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sale.html">
                                                        <span class="mm-text">Single Product Sale</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sticky.html">
                                                        <span class="mm-text">Single Product Sticky</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-affiliate.html">
                                                        <span class="mm-text">Single Product Affiliate</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">
                                                <span class="mm-text">Product Related
                                                    <i class="pe-7s-angle-down"></i>
                                                </span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="my-account.html">
                                                        <span class="mm-text">My Account</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="login-register.html">
                                                        <span class="mm-text">Login | Register</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html">
                                                        <span class="mm-text">Shopping Cart</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <span class="mm-text">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <span class="mm-text">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="checkout.html">
                                                        <span class="mm-text">Checkout</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Pages
                                            <i class="pe-7s-angle-down"></i>
                                        </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="faq.html">
                                                <span class="mm-text">Frequently Questions</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="404.html">
                                                <span class="mm-text">Error 404</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Blog
                                            <i class="pe-7s-angle-down"></i>
                                        </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">
                                                <span class="mm-text">Blog Holder
                                                    <i class="pe-7s-angle-down"></i>
                                                </span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="blog.html">
                                                        <span class="mm-text">Blog Default</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-listview.html">Blog List View</a>
                                                </li>
                                                <li>
                                                    <a href="blog-detail.html">Blog Detail</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        <span class="mm-text">Contact</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            data-tippy="Close" data-tippy-inertia="true" data-tippy-animation="shift-away"
                            data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-search">
                            <span class="searchbox-info">Start typing and press Enter to search or ESC to
                                close</span>
                            <form action="#" class="hm-searchbox">
                                <input type="text" name="Search entire store here..."
                                    value="Search entire store here..."
                                    onblur="if(this.value==''){this.value='Search entire store here...'}"
                                    onfocus="if(this.value=='Search entire store here...'){this.value=''}">
                                <button class="search-btn" type="submit" aria-label="searchbtn"><i
                                        class="pe-7s-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-minicart_wrapper" id="miniCart">
            <div class="tromic-offcanvas-body">
                <div class="minicart-content">
                    <div class="minicart-heading">
                        <h4 class="mb-0">Shopping Cart</h4>
                        <a href="#" class="button-close"><i class="pe-7s-close" data-tippy="Close"
                                data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50"
                                data-tippy-arrow="true" data-tippy-theme="sharpborder"></i></a>
                    </div>
                    <ul class="minicart-list">
                        <li class="minicart-product">
                            <a class="product-item_remove" href="#"><i class="pe-7s-trash"
                                    data-tippy="Wanna Remove?" data-tippy-inertia="true"
                                    data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                    data-tippy-theme="sharpborder"></i></a>
                            <a href="shop.html" class="product-item_img">
                                <img class="img-full" src="assets/images/product/small-size/1-1-70x70.png"
                                    alt="Product Image">
                            </a>
                            <div class="product-item_content">
                                <a class="product-item_title" href="shop.html">Tail Light</a>
                                <span class="product-item_quantity">1 x $80.00</span>
                            </div>
                        </li>
                        <li class="minicart-product">
                            <a class="product-item_remove" href="#"><i class="pe-7s-trash"
                                    data-tippy="Wanna Remove?" data-tippy-inertia="true"
                                    data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                    data-tippy-theme="sharpborder"></i></a>
                            <a href="shop.html" class="product-item_img">
                                <img class="img-full" src="assets/images/product/small-size/1-2-70x70.png"
                                    alt="Product Image">
                            </a>
                            <div class="product-item_content">
                                <a class="product-item_title" href="shop.html">Wiper Blades</a>
                                <span class="product-item_quantity">1 x $80.00</span>
                            </div>
                        </li>
                        <li class="minicart-product">
                            <a class="product-item_remove" href="#">
                                <i class="pe-7s-trash" data-tippy="Wanna Remove?" data-tippy-inertia="true"
                                    data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                    data-tippy-theme="sharpborder"></i>
                            </a>
                            <a href="shop.html" class="product-item_img">
                                <img class="img-full" src="assets/images/product/small-size/1-3-70x70.png"
                                    alt="Product Image">
                            </a>
                            <div class="product-item_content">
                                <a class="product-item_title" href="shop.html">Suspension</a>
                                <span class="product-item_quantity">1 x $80.00</span>
                            </div>
                        </li>
                        <li class="minicart-product">
                            <a class="product-item_remove" href="#">
                                <i class="pe-7s-trash" data-tippy="Wanna Remove?" data-tippy-inertia="true"
                                    data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                    data-tippy-theme="sharpborder"></i>
                            </a>
                            <a href="shop.html" class="product-item_img">
                                <img class="img-full" src="assets/images/product/small-size/1-4-70x70.png"
                                    alt="Product Image">
                            </a>
                            <div class="product-item_content">
                                <a class="product-item_title" href="shop.html">Air Filter</a>
                                <span class="product-item_quantity">1 x $80.00</span>
                            </div>
                        </li>
                        <li class="minicart-product">
                            <a class="product-item_remove" href="#">
                                <i class="pe-7s-trash" data-tippy="Wanna Remove?" data-tippy-inertia="true"
                                    data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                    data-tippy-theme="sharpborder"></i>
                            </a>
                            <a href="shop.html" class="product-item_img">
                                <img class="img-full" src="assets/images/product/small-size/1-5-70x70.png"
                                    alt="Product Image">
                            </a>
                            <div class="product-item_content">
                                <a class="product-item_title" href="shop.html">Car Brakes</a>
                                <span class="product-item_quantity">1 x $80.00</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="minicart-item_total">
                    <span>Subtotal</span>
                    <span class="ammount">$240.00</span>
                </div>
                <div class="group-btn_wrap d-grid gap-2">
                    <a href="cart.html" class="btn btn-dark btn-primary-hover">View Cart</a>
                    <a href="checkout.html" class="btn btn-dark btn-primary-hover">Checkout</a>
                </div>
            </div>
        </div>
        <div class="global-overlay"></div>
    </header>
    <!-- Main Header Area End Here -->
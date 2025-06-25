 
 
 
 
 
 
<?php
//     include "site_connection.php";
//    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//         $payment_id = $_POST['payment_id'];
//         $price = $_POST['price'];
//         $name = $_POST['name'];
//         $quantity = $_POST['quantity'];
//         $user_name = $_POST['user_name'];
//         $light = $_POST['light'];
//         $holder = $_POST['holder'];
//         $email = $_POST['email'];



//         $ins = "INSERT INTO `order`(`payment_id`, `name`, `email`, `quantity`, `price`, `light`, `holder`) VALUES ('$payment_id','$name','$email','$quantity','$price','$light','$holder')";
//         $s = mysqli_query($con, $ins);
//     } else {

//         echo "Invalid request method";
//     }

?>
 
 
 
 
 
 
 
 
 
 
 
 <!DOCTYPE html>
 <html lang="eng">

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
         <form id="paymentForm" method="POST" action="process_payment.php">
             <div class="checkout-area section-space-y-axis-100">
                 <div class="container">
                     <div class="row">
                         <div class="col-12">
                             <div class="coupon-accordion">
                                 <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                                 <div id="checkout-login" class="coupon-content">
                                     <div class="coupon-info">
                                         <p class="coupon-text mb-1">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est
                                             sit amet ipsum luctus.</p>
                                         <form action="javascript:void(0)">
                                             <p class="form-row-first">
                                                 <label class="mb-1">Username or email <span class="required">*</span></label>
                                                 <input type="text">
                                             </p>
                                             <p class="form-row-last">
                                                 <label>Password <span class="required">*</span></label>
                                                 <input type="text">
                                             </p>
                                             <p class="form-row">
                                                 <input type="checkbox" id="remember_me">
                                                 <label for="remember_me">Remember me</label>
                                             </p>
                                             <p class="lost-password"><a href="#">Lost your password?</a></p>
                                         </form>
                                     </div>
                                 </div>

                                 <div id="checkout_coupon" class="coupon-checkout-content">
                                     <div class="coupon-info">
                                         <form action="javascript:void(0)">
                                             <p class="checkout-coupon">
                                                 <input placeholder="Coupon code" type="text">
                                                 <input class="coupon-inner_btn" value="Apply Coupon" type="submit">
                                             </p>
                                         </form>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-lg-6 col-12">
                             <form action="javascript:void(0)">
                                 <div class="checkbox-form">
                                     <h3>Billing Details</h3>
                                     <div class="row">
                                         <div class="col-md-12">
                                             <div class="country-select clearfix">
                                                 <label>Country <span class="required">*</span></label>
                                                 <select name="" class=" form-control">

                                                     <option>Select</option>
                                                     <option value="Albania">Albania</option>
                                                     <option value="Algeria">Algeria</option>
                                                     <option value="Andorra">Andorra</option>
                                                     <option value="Angola">Angola</option>
                                                     <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                     <option value="Argentina">Argentina</option>
                                                     <option value="Armenia">Armenia</option>
                                                     <option value="Australia">Australia</option>
                                                     <option value="Austria">Austria</option>
                                                     <option value="Azerbaijan">Azerbaijan</option>
                                                     <option value="Bahamas">Bahamas</option>
                                                     <option value="Bahrain">Bahrain</option>
                                                     <option value="Bangladesh">Bangladesh</option>
                                                     <option value="Barbados">Barbados</option>
                                                     <option value="Belarus">Belarus</option>
                                                     <option value="Belgium">Belgium</option>
                                                     <option value="Belize">Belize</option>
                                                     <option value="Benin">Benin</option>
                                                     <option value="Bhutan">Bhutan</option>
                                                     <option value="Bolivia">Bolivia</option>
                                                     <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                     <option value="Botswana">Botswana</option>
                                                     <option value="Brazil">Brazil</option>
                                                     <option value="Brunei">Brunei</option>
                                                     <option value="Bulgaria">Bulgaria</option>
                                                     <option value="Burkina Faso">Burkina Faso</option>
                                                     <option value="Burundi">Burundi</option>
                                                     <option value="Cabo Verde">Cabo Verde</option>
                                                     <option value="Cambodia">Cambodia</option>
                                                     <option value="Cameroon">Cameroon</option>
                                                     <option value="Canada">Canada</option>
                                                     <option value="Central African Republic">Central African Republic</option>
                                                     <option value="Chad">Chad</option>
                                                     <option value="Chile">Chile</option>
                                                     <option value="China">China</option>
                                                     <option value="Colombia">Colombia</option>
                                                     <option value="Comoros">Comoros</option>
                                                     <option value="Congo">Congo</option>
                                                     <option value="Costa Rica">Costa Rica</option>
                                                     <option value="Croatia">Croatia</option>
                                                     <option value="Cuba">Cuba</option>
                                                     <option value="Cyprus">Cyprus</option>
                                                     <option value="Czech Republic">Czech Republic</option>
                                                     <option value="Denmark">Denmark</option>
                                                     <option value="Djibouti">Djibouti</option>
                                                     <option value="Dominica">Dominica</option>
                                                     <option value="Dominican Republic">Dominican Republic</option>
                                                     <option value="Ecuador">Ecuador</option>
                                                     <option value="Egypt">Egypt</option>
                                                     <option value="El Salvador">El Salvador</option>
                                                     <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                     <option value="Eritrea">Eritrea</option>
                                                     <option value="Estonia">Estonia</option>
                                                     <option value="Eswatini">Eswatini</option>
                                                     <option value="Ethiopia">Ethiopia</option>
                                                     <option value="Fiji">Fiji</option>
                                                     <option value="Finland">Finland</option>
                                                     <option value="France">France</option>
                                                     <option value="Gabon">Gabon</option>
                                                     <option value="Gambia">Gambia</option>
                                                     <option value="Georgia">Georgia</option>
                                                     <option value="Germany">Germany</option>
                                                     <option value="Ghana">Ghana</option>
                                                     <option value="Greece">Greece</option>
                                                     <option value="Grenada">Grenada</option>
                                                     <option value="Guatemala">Guatemala</option>
                                                     <option value="Guinea">Guinea</option>
                                                     <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                     <option value="Guyana">Guyana</option>
                                                     <option value="Haiti">Haiti</option>
                                                     <option value="Honduras">Honduras</option>
                                                     <option value="Hungary">Hungary</option>
                                                     <option value="Iceland">Iceland</option>
                                                     <option value="India" selected>India</option>
                                                     <option value="Indonesia">Indonesia</option>
                                                     <option value="Iran">Iran</option>
                                                     <option value="Iraq">Iraq</option>
                                                     <option value="Ireland">Ireland</option>
                                                     <option value="Israel">Israel</option>
                                                     <option value="Italy">Italy</option>
                                                     <option value="Jamaica">Jamaica</option>
                                                     <option value="Japan">Japan</option>
                                                     <option value="Jordan">Jordan</option>
                                                     <option value="Kazakhstan">Kazakhstan</option>
                                                     <option value="Kenya">Kenya</option>
                                                     <option value="Kiribati">Kiribati</option>
                                                     <option value="Korea, North">Korea, North</option>
                                                     <option value="Korea, South">Korea, South</option>
                                                     <option value="Kosovo">Kosovo</option>
                                                     <option value="Kuwait">Kuwait</option>
                                                     <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                     <option value="Laos">Laos</option>
                                                     <option value="Latvia">Latvia</option>
                                                     <option value="Lebanon">Lebanon</option>
                                                     <option value="Lesotho">Lesotho</option>
                                                     <option value="Liberia">Liberia</option>
                                                     <option value="Libya">Libya</option>
                                                     <option value="Liechtenstein">Liechtenstein</option>
                                                     <option value="Lithuania">Lithuania</option>
                                                     <option value="Luxembourg">Luxembourg</option>
                                                     <option value="Madagascar">Madagascar</option>
                                                     <option value="Malawi">Malawi</option>
                                                     <option value="Malaysia">Malaysia</option>
                                                     <option value="Maldives">Maldives</option>
                                                     <option value="Mali">Mali</option>
                                                     <option value="Malta">Malta</option>
                                                     <option value="Marshall Islands">Marshall Islands</option>
                                                     <option value="Mauritania">Mauritania</option>
                                                     <option value="Mauritius">Mauritius</option>
                                                     <option value="Mexico">Mexico</option>
                                                     <option value="Micronesia">Micronesia</option>
                                                     <option value="Moldova">Moldova</option>
                                                     <option value="Monaco">Monaco</option>
                                                     <option value="Mongolia">Mongolia</option>
                                                     <option value="Montenegro">Montenegro</option>
                                                     <option value="Morocco">Morocco</option>
                                                     <option value="Mozambique">Mozambique</option>
                                                     <option value="Myanmar">Myanmar</option>
                                                     <option value="Namibia">Namibia</option>
                                                     <option value="Nauru">Nauru</option>
                                                     <option value="Nepal">Nepal</option>
                                                     <option value="Netherlands">Netherlands</option>
                                                     <option value="New Zealand">New Zealand</option>
                                                     <option value="Nicaragua">Nicaragua</option>
                                                     <option value="Niger">Niger</option>
                                                     <option value="Nigeria">Nigeria</option>
                                                     <option value="North Macedonia">North Macedonia</option>
                                                     <option value="Norway">Norway</option>
                                                     <option value="Oman">Oman</option>
                                                     <option value="Pakistan">Pakistan</option>
                                                     <option value="Palau">Palau</option>
                                                     <option value="Palestine">Palestine</option>
                                                     <option value="Panama">Panama</option>
                                                     <option value="Papua New Guinea">Papua New Guinea</option>
                                                     <option value="Paraguay">Paraguay</option>
                                                     <option value="Peru">Peru</option>
                                                     <option value="Philippines">Philippines</option>
                                                     <option value="Poland">Poland</option>
                                                     <option value="Portugal">Portugal</option>
                                                     <option value="Qatar">Qatar</option>
                                                     <option value="Romania">Romania</option>
                                                     <option value="Russia">Russia</option>
                                                     <option value="Rwanda">Rwanda</option>
                                                     <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                     <option value="Saint Lucia">Saint Lucia</option>
                                                     <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                     <option value="Samoa">Samoa</option>
                                                     <option value="San Marino">San Marino</option>
                                                     <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                     <option value="Saudi Arabia">Saudi Arabia</option>
                                                     <option value="Senegal">Senegal</option>
                                                     <option value="Serbia">Serbia</option>
                                                     <option value="Seychelles">Seychelles</option>
                                                     <option value="Sierra Leone">Sierra Leone</option>
                                                     <option value="Singapore">Singapore</option>
                                                     <option value="Slovakia">Slovakia</option>
                                                     <option value="Slovenia">Slovenia</option>
                                                     <option value="Solomon Islands">Solomon Islands</option>
                                                     <option value="Somalia">Somalia</option>
                                                     <option value="South Africa">South Africa</option>
                                                     <option value="South Sudan">South Sudan</option>
                                                     <option value="Spain">Spain</option>
                                                     <option value="Sri Lanka">Sri Lanka</option>
                                                     <option value="Sudan">Sudan</option>
                                                     <option value="Suriname">Suriname</option>
                                                     <option value="Sweden">Sweden</option>
                                                     <option value="Switzerland">Switzerland</option>
                                                     <option value="Syria">Syria</option>
                                                     <option value="Taiwan">Taiwan</option>
                                                     <option value="Tajikistan">Tajikistan</option>
                                                     <option value="Tanzania">Tanzania</option>
                                                     <option value="Thailand">Thailand</option>
                                                     <option value="Timor-Leste">Timor-Leste</option>
                                                     <option value="Togo">Togo</option>
                                                     <option value="Tonga">Tonga</option>
                                                     <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                     <option value="Tunisia">Tunisia</option>
                                                     <option value="Turkey">Turkey</option>
                                                     <option value="Turkmenistan">Turkmenistan</option>
                                                     <option value="Tuvalu">Tuvalu</option>
                                                     <option value="Uganda">Uganda</option>
                                                     <option value="Ukraine">Ukraine</option>
                                                     <option value="United Arab Emirates">United Arab Emirates</option>
                                                     <option value="United Kingdom">United Kingdom</option>
                                                     <option value="United States">United States</option>
                                                     <option value="Uruguay">Uruguay</option>
                                                     <option value="Uzbekistan">Uzbekistan</option>
                                                     <option value="Vanuatu">Vanuatu</option>
                                                     <option value="Vatican City">Vatican City</option>
                                                     <option value="Venezuela">Venezuela</option>
                                                     <option value="Vietnam">Vietnam</option>
                                                     <option value="Yemen">Yemen</option>
                                                     <option value="Zambia">Zambia</option>
                                                     <option value="Zimbabwe">Zimbabwe</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="col-md-12">
                                             <div class="checkout-form-list">
                                                 <label>First Name <span class="required">*</span></label>
                                                 <input placeholder="" name="name" type="text">
                                             </div>
                                         </div>


                                         <div class="col-md-12">
                                             <div class="checkout-form-list">
                                                 <label>Address <span class="required">*</span></label>
                                                 <input name="address" placeholder="Street address" type="text">
                                             </div>
                                         </div>
                                         <div class="col-md-12">
                                             <div class="checkout-form-list">
                                                 <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                             </div>
                                         </div>
                                         <div class="col-md-12">
                                             <div class="checkout-form-list">
                                                 <label>Town / City <span class="required">*</span></label>
                                                 <input type="text">
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                 <label>State / County <span class="required">*</span></label>
                                                 <input placeholder="" type="text">
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                 <label>Postcode / Zip <span class="required">*</span></label>
                                                 <input placeholder="" type="text">
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                 <label>Email Address <span class="required">*</span></label>
                                                 <input placeholder="" type="email">
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                 <label>Phone <span class="required">*</span></label>
                                                 <input type="text">
                                             </div>
                                         </div>
                                         <div class="col-md-12">
                                             <div class="checkout-form-list create-acc">
                                                 <input id="cbox" type="checkbox">
                                                 <label for="cbox">Create an account?</label>
                                             </div>
                                             <div id="cbox-info" class="checkout-form-list create-account">
                                                 <p>Create an account by entering the information below. If you are a returning
                                                     customer please login at the top of the page.</p>
                                                 <label>Account password <span class="required">*</span></label>
                                                 <input placeholder="password" type="password">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="different-address">
                                         <div class="ship-different-title">
                                             <h3>
                                                 <label>Ship to a different address?</label>
                                                 <input id="ship-box" type="checkbox">
                                             </h3>
                                         </div>
                                         <div id="ship-box-info" class="row">
                                             <div class="col-md-12">
                                                 <div class="myniceselect country-select clearfix">
                                                     <label>Country <span class="required">*</span></label>
                                                     <select class="myniceselect nice-select wide">
                                                         <option data-display="Bangladesh">Bangladesh</option>
                                                         <option value="uk">London</option>
                                                         <option value="rou">Romania</option>
                                                         <option value="fr">French</option>
                                                         <option value="de">Germany</option>
                                                         <option value="aus">Australia</option>
                                                     </select>
                                                 </div>
                                             </div>
                                             <div class="col-md-12">
                                                 <div class="checkout-form-list">
                                                     <label>First Name <span class="required">*</span></label>
                                                     <input placeholder="" type="text">
                                                 </div>
                                             </div>
                                             <div class="col-md-12">
                                                 <div class="checkout-form-list">
                                                     <label>Last Name <span class="required">*</span></label>
                                                     <input placeholder="" type="text">
                                                 </div>
                                             </div>
                                             <div class="col-md-12">
                                                 <div class="checkout-form-list">
                                                     <label>Company Name</label>
                                                     <input placeholder="" type="text">
                                                 </div>
                                             </div>
                                             <div class="col-md-12">
                                                 <div class="checkout-form-list">
                                                     <label>Address <span class="required">*</span></label>
                                                     <input placeholder="Street address" type="text">
                                                 </div>
                                             </div>
                                             <div class="col-md-12">
                                                 <div class="checkout-form-list">
                                                     <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                                 </div>
                                             </div>
                                             <div class="col-md-12">
                                                 <div class="checkout-form-list">
                                                     <label>Town / City <span class="required">*</span></label>
                                                     <input type="text">
                                                 </div>
                                             </div>
                                             <div class="col-md-12">
                                                 <div class="checkout-form-list">
                                                     <label>State / County <span class="required">*</span></label>
                                                     <input placeholder="" type="text">
                                                 </div>
                                             </div>
                                             <div class="col-md-12">
                                                 <div class="checkout-form-list">
                                                     <label>Postcode / Zip <span class="required">*</span></label>
                                                     <input placeholder="" type="text">
                                                 </div>
                                             </div>
                                             <div class="col-md-12">
                                                 <div class="checkout-form-list">
                                                     <label>Email Address <span class="required">*</span></label>
                                                     <input placeholder="" type="email">
                                                 </div>
                                             </div>
                                             <div class="col-md-12">
                                                 <div class="checkout-form-list">
                                                     <label>Phone <span class="required">*</span></label>
                                                     <input type="text">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="order-notes">
                                             <div class="checkout-form-list checkout-form-list-2">
                                                 <label>Order Notes</label>
                                                 <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </form>
                         </div>
                         <div class="col-lg-6 col-12">
                             <div class="your-order">
                                 <h3>Your order</h3>
                                 <div class="your-order-table ">
                                     <div class="row">
                                         <div class="col-12">

                                             <div class="table-content  ">
                                                 <table class="table">
                                                     <thead>
                                                         <tr>

                                                             <th class="cart-product-name">Product Name</th>

                                                             <th class="product-price">Unit Price</th>

                                                             <th class="product-subtotal">Total</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                         <?php

                                                            $s = "SELECT * FROM `cart` WHERE `email` = '$email'";
                                                            $q = mysqli_query($con, $s);
                                                            while ($row = mysqli_fetch_array($q)) {

                                                            ?>
                                                                <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>">
                                                                <input type="text" name="quantity"  id="quantity" value="<?php echo $row['quantity']; ?>">
                                                                <input type="text" name="user_name" id="user_name" value="<?php echo $row['name']; ?>">
                                                                <input type="text" name="light" id="light" value="<?php echo $row['light']; ?>">
                                                                <input type="text" name="holder" id="holder" value="<?php echo $row['holder']; ?>">
                                                                <input type="text"  name="email"  id="email" value="<?php echo $row['email']; ?>">
                                                                <input type="text"  name="payment_id"  id="payment_id" value="sdfsdf">
                                                             <tr>


                                                                 <td class="product-name">
                                                                     <a href="#"><?php echo $row['name']; ?> </a>
                                                                 </td>

                                                                 <td class="product-price">
                                                                     <span class="amount">₹<?php echo $row['price']; ?> X <?php echo $row['quantity']; ?></span>
                                                                 </td>


                                                                 <td class="product-subtotal">
                                                                     <span class="amount">₹<?php echo $row['price'] * $row['quantity']; ?></span>
                                                                 </td>
                                                             </tr>
                                                         <?php
                                                            }
                                                            ?>
                                                     </tbody>
                                                 </table>
                                             </div>




                                             <div class="row mb-3">
                                                 <div class="col-md-12 ml-auto">
                                                     <div class="cart-page-total">
                                                         <h2>Cart Totals</h2>
                                                         <ul>
                                                             <?php
                                                                $total = 0;
                                                                $total_discount = 0;

                                                                // Fetch cart items for the current user
                                                                $s = "SELECT * FROM `cart` WHERE `email` = '$email'";
                                                                $q = mysqli_query($con, $s);

                                                                // Count the total number of items in the cart
                                                                $total_items_in_cart = 0;
                                                                while ($row = mysqli_fetch_array($q)) {
                                                                    $total_items_in_cart += $row['quantity'];
                                                                }

                                                                // Fetch applicable discount from the database based on total items
                                                                $discount_query = "SELECT * FROM discounts WHERE min_items <= $total_items_in_cart AND status = 1 ORDER BY min_items DESC LIMIT 1";
                                                                $discount_result = mysqli_query($con, $discount_query);
                                                                $discount_percentage = 0;

                                                                if (mysqli_num_rows($discount_result) > 0) {
                                                                    // Fetch the applicable discount
                                                                    $discount_data = mysqli_fetch_assoc($discount_result);
                                                                    $discount_percentage = $discount_data['discount_percentage'];
                                                                }

                                                                // Reset the query to calculate the total price and discount
                                                                $q = mysqli_query($con, $s);
                                                                while ($row = mysqli_fetch_array($q)) {
                                                                    $product_id = $row['product_id'];
                                                                    $quantity = $row['quantity'];

                                                                    // Get product details
                                                                    $product_query = "SELECT * FROM product WHERE id = '$product_id'";
                                                                    $product_result = mysqli_query($con, $product_query);
                                                                    $product = mysqli_fetch_assoc($product_result);

                                                                    $price = $product['price'];

                                                                    // Calculate the discounted price
                                                                    $discounted_price = $price - ($price * ($discount_percentage / 100));

                                                                    // Calculate the total price for this product after applying the discount
                                                                    $total_item_price = $discounted_price * $quantity;

                                                                    // Update the overall total price and discount
                                                                    $total += $total_item_price;
                                                                    $total_discount += ($price * $quantity) - $total_item_price; // Total discount applied to this product
                                                                }
                                                                ?>
                                                             <li>Subtotal <span>₹<?php echo number_format($total + $total_discount, 2); ?></span></li>
                                                             <li>Discount <span>-₹<?php echo number_format($total_discount, 2); ?></span></li>
                                                             <li>Total <span>₹<?php echo number_format($total, 2); ?></span></li>
                                                         </ul>
                                                         <input type="text" id="price" name="price" value="1"> <br>

                                                     </div>
                                                 </div>
                                             </div>


                                         </div>

                                     </div>

                                 </div>
                                 <div class="payment-method">
                                     <div class="payment-accordion">
                                         <div id="accordion">
                                             <div class="card">
                                                 <div class="card-header" id="#payment-1">
                                                     <h5 class="panel-title">
                                                         <a href="#" class="" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                                             Direct Bank Transfer.
                                                         </a>
                                                     </h5>
                                                 </div>
                                                 <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                                     <div class="card-body">
                                                         <p>Make your payment directly into our bank account. Please use your Order
                                                             ID as the payment
                                                             reference. Your order won’t be shipped until the funds have cleared in
                                                             our account.</p>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="card">
                                                 <div class="card-header" id="#payment-2">
                                                     <h5 class="panel-title">
                                                         <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">
                                                             Cheque Payment
                                                         </a>
                                                     </h5>
                                                 </div>
                                                 <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                                     <div class="card-body">
                                                         <p>Make your payment directly into our bank account. Please use your Order
                                                             ID as the payment
                                                             reference. Your order won’t be shipped until the funds have cleared in
                                                             our account.</p>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="card">
                                                 <div class="card-header" id="#payment-3">
                                                     <h5 class="panel-title">
                                                         <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">
                                                             PayPal
                                                         </a>
                                                     </h5>
                                                 </div>
                                                 <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                                     <div class="card-body">
                                                         <p>Make your payment directly into our bank account. Please use your Order
                                                             ID as the payment
                                                             reference. Your order won’t be shipped until the funds have cleared in
                                                             our account.</p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="order-button-payment">
                                           <input type="button" class="btn btn-dark" id="rzp-button1" value="Pay Now">
                                             <!-- <input type="submit"  name="submit" class="btn btn-dark"  > </input> -->

                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </form>
     </main>
     <!-- Main Content Area End Here -->




     <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
     <script src="https://checkout.razorpay.com/v1/checkout.js"></script>



<script>
function pay_now() {
 
    var name = document.getElementById("name").value;
    var price = document.getElementById("price").value;
    var quantity = document.getElementById("quantity").value;
    var user_name = document.getElementById("user_name").value;
    var light = document.getElementById("light").value;
    var holder = document.getElementById("holder").value;
    var email = document.getElementById("email").value;

    var actual_amount = price * 100;

    var options = {
        "amount": actual_amount,
        "currency": "INR",
        "name": name_b,
        "image": "https://ramlakhanyatra.com/admin/assets/img/logo.webp",
        "handler": function (response) {
            // Insert Razorpay payment ID and other fields into the form
            document.getElementById("payment_id").value = response.razorpay_payment_id;
            document.getElementById("name").value = name;
            document.getElementById("price").value = price;
            document.getElementById("quantity").value = quantity;
            document.getElementById("light").value = light;
            document.getElementById("holder").value = holder;
            document.getElementById("email").value = email;

            // Submit the form
            document.getElementById("paymentForm").submit();
        },
        "theme": {
            "color": "#000000"
        }
    };

    var rzp1 = new Razorpay(options);
    rzp1.open();
}
document.getElementById("rzp-button1").onclick = function (e) {
    pay_now();
    e.preventDefault();
}
</script>



 









     <?php
        include "footer.php";

        ?>
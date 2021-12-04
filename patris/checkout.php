<?php

include 'connect.php';

error_reporting(0);

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

else {
    $user = $_SESSION['username'];
}

?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Patris Official Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="produk/logo.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- preloader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>

    <!-- header section start -->
    <header class="header pt-30 pb-30  header-sticky header-static"
        style="padding-top: 30px; padding-bottom: 15px; top: 0px;">
        <div class="container-fluid">
            <div class="header-nav position-relative">
                <div class="row align-items-center">


                    <div class="col-xl-5 col-lg-6 hidden-md position-static">
                        <div class="header-nav">
                            <nav>
                                <ul>
                                    <li><a href="index.php"><span
                                                style="font-size: 15px; margin-right: 20px;margin-left: 15px;">Home</span></a>
                                    </li>
                                    <li class="position-static"><a href="shop.php"><span
                                                style="font-size: 15px;margin-right: 20px;">Shop</span></a></li>
                                    <li><a href="contact.php"><span
                                                style="font-size: 15px;margin-right: 20px;">Contact</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-3">
                        <div class="logo">
                            <a href="index.php"><img src="produk/logo2.png" alt=""></a>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-3 col-6 col-md-6 col-sm-6 col-9">
                        <div class="header-right" style="font-size: 15px; margin-right: 20px;margin-left: 15px;">
                            <ul class="text-right">
                            <li><a href="
                                <?php
                                if (isset($_SESSION['username'])) {
                                    echo "account.php";
                                } else {
                                    echo "login.php";
                                }
                                ?>
                                " class="account"><i class="fal fa-user-friends"></i>
                                        <article class="account-registar d-inline-block">
                                            <?php
                                            if (isset($_SESSION['username'])) {
                                                echo $user;
                                            } else {
                                                echo "Login/Sign Up";
                                            }
                                            ?>
                                        </article>
                                    </a></li>
                                <li><a href="javascript:void(0)"><i class="fal fa-search"></i></a>

                                    <!-- search popup -->
                                    <div id="search-popup">
                                        <div class="close-search-popup">
                                            <i class="fal fa-times"></i>
                                        </div>
                                        <div class="search-popup-inner mt-135">
                                            <div class="search-title text-center">
                                                <h2>Search</h2>
                                            </div>

                                            <div class="search-content pt-55">
                                                <ul class="text-center">
                                                    <li><a href="javascript:void(0)" class="active">All categories</a>
                                                    </li>
                                                    <li><a href="javascript:void(0)">Sepatu</a></li>
                                                    <li><a href="javascript:void(0)">Wedges</a></li>
                                                    <li><a href="javascript:void(0)">Sandal</a></li>
                                                    <li><a href="javascript:void(0)">Sepatu-Sandal</a></li>
                                                </ul>

                                                <div class="search-form mt-35">
                                                    <form action="#" method="post">
                                                        <input type="text" placeholder="Search Products...">
                                                        <button type="submit"><i class="fal fa-search"></i></button>
                                                    </form>
                                                </div>

                                                <div class="search-result-list">
                                                    <ul class="text-left">
                                                        <li class="d-block d-flex align-items-center">
                                                            <div class="search-result-img">
                                                                <img src="img/product/1.jpg" class="w-100" alt="">
                                                            </div>
                                                            <div class="search-result-desc pl-10">
                                                                <a href="single-product.php" class="title px-0">ELLE
                                                                    -
                                                                    Recliner syntheti chair</a>
                                                                <div class="price">$<span>399</span></div>
                                                            </div>
                                                        </li>
                                                        <li class="d-block d-flex align-items-center">
                                                            <div class="search-result-img">
                                                                <img src="img/product/2.jpg" class="w-100" alt="">
                                                            </div>
                                                            <div class="search-result-desc pl-10">
                                                                <a href="single-product.php"
                                                                    class="title px-0">RIMINI -
                                                                    Folding leather deck chair</a>
                                                                <div class="price">$<span>399</span></div>
                                                            </div>
                                                        </li>
                                                        <li class="d-block d-flex align-items-center">
                                                            <div class="search-result-img">
                                                                <img src="img/product/3.jpg" class="w-100" alt="">
                                                            </div>
                                                            <div class="search-result-desc pl-10">
                                                                <a href="single-product.php"
                                                                    class="title px-0">LANDSCAPE
                                                                    - Folding fabric deck chair</a>
                                                                <div class="price">$<span>399</span></div>
                                                            </div>
                                                        </li>
                                                        <li class="d-block d-flex align-items-center">
                                                            <div class="search-result-img">
                                                                <img src="img/product/1.jpg" class="w-100" alt="">
                                                            </div>
                                                            <div class="search-result-desc pl-10">
                                                                <a href="single-product.php" class="title px-0">ELLE
                                                                    -
                                                                    Recliner syntheti chair</a>
                                                                <div class="price">$<span>399</span></div>
                                                            </div>
                                                        </li>
                                                        <li class="d-block d-flex align-items-center">
                                                            <div class="search-result-img">
                                                                <img src="img/product/2.jpg" class="w-100" alt="">
                                                            </div>
                                                            <div class="search-result-desc pl-10">
                                                                <a href="single-product.php"
                                                                    class="title px-0">RIMINI -
                                                                    Folding leather deck chair</a>
                                                                <div class="price">$<span>399</span></div>
                                                            </div>
                                                        </li>
                                                        <li class="d-block d-flex align-items-center">
                                                            <div class="search-result-img">
                                                                <img src="img/product/3.jpg" class="w-100" alt="">
                                                            </div>
                                                            <div class="search-result-desc pl-10">
                                                                <a href="single-product.php"
                                                                    class="title px-0">LANDSCAPE
                                                                    - Folding fabric deck chair</a>
                                                                <div class="price">$<span>399</span></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </li>
                                <li><a href="cart.php"><i class="fal fa-shopping-bag"><span>5</span></i></a>
                                    <div class="minicart">
                                        <div class="minicart-body">
                                            <div class="minicart-content">
                                                <ul class="text-left">
                                                    <li>
                                                        <div class="minicart-img">
                                                            <a href="single-product.php" class="p-0"><img
                                                                    src="img/product/1.jpg" class="w-100" alt=""></a>
                                                        </div>
                                                        <div class="minicart-desc">
                                                            <a href="single-product.php" class="p-0">Capitalize on
                                                                low
                                                                hanging fruit t</a>
                                                            <strong>1 × $250.00</strong>
                                                        </div>
                                                        <div class="remove">
                                                            <i class="fal fa-times"></i>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="minicart-img">
                                                            <a href="single-product.php" class="p-0"><img
                                                                    src="img/product/2.jpg" class="w-100" alt=""></a>
                                                        </div>
                                                        <div class="minicart-desc">
                                                            <a href="single-product.php" class="p-0">Leather
                                                                Courriere
                                                                duffle ba</a>
                                                            <strong>1 × $150.00</strong>
                                                        </div>
                                                        <div class="remove">
                                                            <i class="fal fa-times"></i>
                                                        </div>
                                                    </li>


                                                    <li>
                                                        <div class="minicart-img">
                                                            <a href="single-product.php" class="p-0"><img
                                                                    src="img/product/3.jpg" class="w-100" alt=""></a>
                                                        </div>
                                                        <div class="minicart-desc">
                                                            <a href="single-product.php" class="p-0">Party Supplies
                                                                Around Cupcake</a>
                                                            <strong>1 × $150.00</strong>
                                                        </div>
                                                        <div class="remove">
                                                            <i class="fal fa-times"></i>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="minicart-checkout">
                                            <div class="minicart-checkout-heading mt-8 mb-25 overflow-hidden">
                                                <strong class="float-left">Subtotal:</strong>
                                                <span class="price float-right">503.00</span>
                                            </div>
                                            <div class="minicart-checkout-links">
                                                <a href="cart.php"
                                                    class="generic-btn black-hover-btn text-uppercase w-100 mb-20">View
                                                    cart</a>
                                                <a href="checkout.php"
                                                    class="generic-btn black-hover-btn text-uppercase w-100 mb-20">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fal fa-align-right"></i></a>
                                    <ul class="submenu bold-content text-right">
                                        <li><a href="account.php">My Account</a></li>
                                        <li><a href="checkout.php">Checkout</a></li>
                                        <li><a href="shop.php">Shop</a></li>
                                        <li><a href="order.php">My Order</a></li>
                                        <li><a href="logout.php">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu visible-sm">
                <div id="mobile-menu">
                    <ul>
                        <li><a class="pl-3" href="javascript:void(0)" href="index.php">Home</a></li>
                        <li><a class="pl-3" href="javascript:void(0)" href="shop.php">Shop</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <!-- /. mobile nav -->
        </div>
    </header>
    <!-- header section end -->



    <!-- shop body section start -->
    <main>

        <!-- breadcrumb-area-start -->
        <section class="breadcrumb-area" data-background="img/bg/page-title.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-content" style="flex-direction: column;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                                </ol>
                            </nav>
                            <h2 class="cart-title mt-40">Cart</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- checkout-area start -->
        <section class="checkout-area pb-70">
            <div class="container">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="checkbox-form">
                                <h3>Billing Details</h3>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>First Name <span class="required">*</span></label>
                                            <input type="text" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Last Name <span class="required">*</span></label>
                                            <input type="text" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Company Name</label>
                                            <input type="text" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Address <span class="required">*</span></label>
                                            <input type="text" placeholder="Street address" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Town / City <span class="required">*</span></label>
                                            <input type="text" placeholder="Town / City" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>State / County <span class="required">*</span></label>
                                            <input type="text" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Postcode / Zip <span class="required">*</span></label>
                                            <input type="text" placeholder="Postcode / Zip" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Email Address <span class="required">*</span></label>
                                            <input type="email" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Phone <span class="required">*</span></label>
                                            <input type="text" placeholder="Postcode / Zip" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list create-acc">
                                            <input id="cbox" type="checkbox" />
                                            <label>Create an account?</label>
                                        </div>
                                        <div id="cbox_info" class="checkout-form-list create-account">
                                            <p>Create an account by entering the information below. If you are a
                                                returning
                                                customer please login at the top of the page.</p>
                                            <label>Account password <span class="required">*</span></label>
                                            <input type="password" placeholder="password" />
                                        </div>
                                    </div>
                                </div>

                                <div class="order-notes">
                                    <div class="checkout-form-list">
                                        <label>Order Notes</label>
                                        <textarea id="checkout-mess" cols="30" rows="10"
                                            placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="your-order mb-30 ">
                                <h3>Your order</h3>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">$165.00</span>
                                                </td>
                                            </tr>
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    Vestibulum dictum magna <strong class="product-quantity"> ×
                                                        1</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">$50.00</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Cart Subtotal</th>
                                                <td><span class="amount">$215.00</span></td>
                                            </tr>
                                            <tr class="shipping">
                                                <th>Shipping</th>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <input type="radio" />
                                                            <label>
                                                                Flat Rate: <span class="amount">$7.00</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" />
                                                            <label>Free Shipping:</label>
                                                        </li>
                                                        <li></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td><strong><span class="amount">$215.00</span></strong>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <div class="payment-method">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        Direct Bank Transfer
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Make your payment directly into our bank account. Please use your
                                                    Order ID
                                                    as the payment
                                                    reference. Your order won’t be
                                                    shipped until the funds have cleared in our account.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button class="btn-link collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        Cheque Payment
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Please send your cheque to Store Name, Store Street, Store Town,
                                                    Store
                                                    State / County, Store
                                                    Postcode.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn-link collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        PayPal
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Pay via PayPal; you can pay with your credit card if you don’t have
                                                    a
                                                    PayPal account.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-button-payment mt-20">
                                        <button type="submit" class="btn theme-btn">Place order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- checkout-area end -->


    </main>







    <!-- footer section start -->
    <section class="footer">

        <!-- footer top -->

        <div class="footer-bottom pt-77" style="background-color: #F0628C;">
            <div class="container-1180">
                <div class="footer-bottom-wrapper">
                    <div class="footer-bottom-primary pb-60">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-9">
                                <div class="footer-item has-desc">
                                    <div class="footer-logo mb-25">
                                        <img src="produk/logo patris 2.png" width="120" height="90" href="index.php">
                                        <p style="color: #FFFFFF;font-size: 20px;font-weight: 20px;margin-top: 40px;">
                                            Customer Service</p>
                                        <p style="color: #FFFFFF;font-size: 20px;font-weight: 20px;margin-top: 40px;">
                                            Jam
                                            Kerja: 09.00 s/d 15.00 WIB</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-12">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                                        <div class="footer-menu">
                                            <ul>
                                                <li><a href="index.php"
                                                        style="color: #FFFFFF;font-size: 20px;font-weight: 20px;">Home</a>
                                                </li>
                                                <li><a href="account.php"
                                                        style="color: #FFFFFF;font-size: 20px;font-weight: 20px; margin-top: 30px;">My
                                                        account</a></li>
                                                <li><a href="checkout.php"
                                                        style="color: #FFFFFF;font-size: 20px;font-weight: 20px;margin-top: 30px;">Checkout</a>
                                                </li>
                                                <li><a href="shop.php"
                                                        style="color: #FFFFFF;font-size: 20px;font-weight: 20px;margin-top: 30px;">Shop</a>
                                                </li>
                                                <li><a href="contact.php" style="color: #FFFFFF; font-size: 20px;font-weight: 20px;margin-top: 30px;">Contact</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 hidden-sm"
                                        style="margin-left:100px;">
                                        <div class="footer-menu">
                                            <ul>
                                                <li style="color: #FFFFFF;font-size: 20px;font-weight: 20px;">Follow Us:
                                                </li>
                                                <li
                                                    style="color: #FFFFFF; font-size: 20px;font-weight: 20px;margin-top: 30px;">
                                                    <img
                                                        src="https://img.icons8.com/material-rounded/50/ffffff/instagram-new.png" />
                                                    Patris.Official
                                                </li>
                                                <li
                                                    style="color: #FFFFFF; font-size: 20px;font-weight: 20px;margin-top: 30px;">
                                                    <img
                                                        src="https://img.icons8.com/material-rounded/50/ffffff/twitter.png" />
                                                    Patris_Shoes</a>
                                                </li>
                                                <li
                                                    style="color: #FFFFFF; font-size: 20px;font-weight: 20px;margin-top: 30px;">
                                                    <img
                                                        src="https://img.icons8.com/ios-filled/50/ffffff/facebook--v1.png" />
                                                    PATRIS SHOES</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- footer section end -->






    <!-- product popup start -->
    <section id="product-popup">
        <div class="product-popup-overlay"></div>
        <div class="product-popup-container">
            <div class="product-inner w-100">
                <div class="product-inner-content">
                    <div class="quick-close-action"><i class="fal fa-times"></i></div>
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="product-popup-1">
                                    <div class="product-popup-img">
                                        <img src="img/product/10.jpg" class="w-100" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product-popup-2">
                                    <div class="product-popup-img">
                                        <img src="img/product/11.jpg" class="w-100" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product-popup-3">
                                    <div class="product-popup-img">
                                        <img src="img/product/12.jpg" class="w-100" alt="">
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-pills justify-content-center mt-10" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="active" data-toggle="pill" href="#product-popup-1">
                                        <img src="img/product/10.jpg" class="w-100" alt="">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="" data-toggle="pill" href="#product-popup-2">
                                        <img src="img/product/11.jpg" class="w-100" alt="">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="" data-toggle="pill" href="#product-popup-3">
                                        <img src="img/product/12.jpg" class="w-100" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6">
                            <div class="product-content">
                                <div class="product-title">
                                    <h2>Nari Narwhal Usb...</h2>
                                </div>
                                <div class="price">$<span>44.00</span>–<span>$250.00</span></div>
                                <a href="single-product.php" class="all-feature">See all feature</a>
                                <div class="quick-quantity mt-30">
                                    <form action="#" method="POST">
                                        <input type="number" value="1">
                                        <button type="submit" class="generic-btn red-hover-btn text-capitalize">add to
                                            cart</a>
                                    </form>
                                </div>

                                <div class="product-desc pb-20 mt-25 gray-border-top">
                                    <p class="mb-0">Typi non habent claritatem insitam, est usus legentis in iis qui
                                        facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius
                                        quod ii legunt saepius. Claritas est etiam processus A Capitalize on low hanging
                                        fruit to identify a ballpark value added activity to beta test. Override the
                                        digital...ditional clickthroughs from DevOps. Nanotechnology immersion along the
                                        information highway will close the […]</p>
                                </div>
                                <div class="product-list mt-25">
                                    <ul>
                                        <li>– Light green crewnec...t.</li>
                                        <li>– Hand pockets.</li>
                                        <li>– Relaxed fit.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product popup end -->

    <!-- startup popup start -->
    <section id="startup-popup">
        <div class="product-popup-overlay has-startup" style="opacity: 1;visibility: visible"></div>
        <div class="startup-popup-body">
            <div class="startup-body-content h-100">
                <div class="row justify-content-end h-100">
                    <div class="col-6 h-100">
                        <div class="startup-popup-inner h-100">
                            <div class="close-search-popup">
                                <i class="fal fa-times"></i>
                            </div>
                            <div class="startup-popup-main-content">
                                <h2>Get Our Email Letter</h2>
                                <p class="mb-0">Subscribe to the Mazia store mailing list to receive updates on new
                                    arrivals, special offers
                                    and other discount information.</p>
                                <div class="startup-subscribe-form">
                                    <form action="#" method="POST">
                                        <input type="text" placeholder="Subscribe to our newsletter" class="mb-30">
                                        <button class="generic-btn red-hover-btn text-uppercase">Subscribe now</button>
                                    </form>
                                </div>
                            </div>
                            <div class="startup-popup-sub-content">
                                <div class="popup-warning">
                                    <input type="checkbox" id="startup-popup-hidden">
                                    <label for="startup-popup-hidden">Do not show the popup again</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- startup popup end -->














    <!-- JS here -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/one-page-nav-min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/fontawesome.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
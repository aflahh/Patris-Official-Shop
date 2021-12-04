<?php

include 'connect.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
}

$id = $_GET['id'];

$sql = "SELECT * FROM product, category where product_category = category_id and product_id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$sql2 = "SELECT product_id, customer_name, review_rating, review_desc FROM review r, orders o, customer c where r.order_id = o.order_id and o.customer_id = c.customer_id and r.product_id = '$id'";
$result2 = mysqli_query($conn, $sql2);
$num = $result2->num_rows;
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
    <header class="header pt-30 pb-30  header-sticky header-static" style="padding-top: 30px; padding-bottom: 15px; top: 0px;">
        <div class="container-fluid">
            <div class="header-nav position-relative">
                <div class="row align-items-center">


                    <div class="col-xl-5 col-lg-6 hidden-md position-static">
                        <div class="header-nav">
                            <nav>
                                <ul>
                                    <li><a href="indexAdmin.php"><span style="font-size: 15px; margin-right: 20px;margin-left: 15px;">Home</span></a>
                                    </li>
                                    <li class="position-static"><a class="active" href="productAdmin.php"><span style="font-size: 15px;margin-right: 20px;">Product</span></a></li>
                                    <li><a href="contact.php"><span style="font-size: 15px;margin-right: 20px;">Contact</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-3">
                        <div class="logo">
                            <a href="indexAdmin.php"><img src="produk/logo2.png" alt=""></a>
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
                                                    <li><a href="javascript:void(0)" class="active">All categories</a></li>
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
                                                                <a href="detailproduct.php" class="title px-0">ELLE -
                                                                    Recliner syntheti chair</a>
                                                                <div class="price">$<span>399</span></div>
                                                            </div>
                                                        </li>
                                                        <li class="d-block d-flex align-items-center">
                                                            <div class="search-result-img">
                                                                <img src="img/product/2.jpg" class="w-100" alt="">
                                                            </div>
                                                            <div class="search-result-desc pl-10">
                                                                <a href="detailproduct.php" class="title px-0">RIMINI -
                                                                    Folding leather deck chair</a>
                                                                <div class="price">$<span>399</span></div>
                                                            </div>
                                                        </li>
                                                        <li class="d-block d-flex align-items-center">
                                                            <div class="search-result-img">
                                                                <img src="img/product/3.jpg" class="w-100" alt="">
                                                            </div>
                                                            <div class="search-result-desc pl-10">
                                                                <a href="detailproduct.php" class="title px-0">LANDSCAPE
                                                                    - Folding fabric deck chair</a>
                                                                <div class="price">$<span>399</span></div>
                                                            </div>
                                                        </li>
                                                        <li class="d-block d-flex align-items-center">
                                                            <div class="search-result-img">
                                                                <img src="img/product/1.jpg" class="w-100" alt="">
                                                            </div>
                                                            <div class="search-result-desc pl-10">
                                                                <a href="detailproduct.php" class="title px-0">ELLE -
                                                                    Recliner syntheti chair</a>
                                                                <div class="price">$<span>399</span></div>
                                                            </div>
                                                        </li>
                                                        <li class="d-block d-flex align-items-center">
                                                            <div class="search-result-img">
                                                                <img src="img/product/2.jpg" class="w-100" alt="">
                                                            </div>
                                                            <div class="search-result-desc pl-10">
                                                                <a href="detailproduct.php" class="title px-0">RIMINI -
                                                                    Folding leather deck chair</a>
                                                                <div class="price">$<span>399</span></div>
                                                            </div>
                                                        </li>
                                                        <li class="d-block d-flex align-items-center">
                                                            <div class="search-result-img">
                                                                <img src="img/product/3.jpg" class="w-100" alt="">
                                                            </div>
                                                            <div class="search-result-desc pl-10">
                                                                <a href="detailproduct.php" class="title px-0">LANDSCAPE
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
                                                            <a href="detailproduct.php" class="p-0"><img src="img/product/1.jpg" class="w-100" alt=""></a>
                                                        </div>
                                                        <div class="minicart-desc">
                                                            <a href="detailproduct.php" class="p-0">Capitalize on low
                                                                hanging fruit t</a>
                                                            <strong>1 × $250.00</strong>
                                                        </div>
                                                        <div class="remove">
                                                            <i class="fal fa-times"></i>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="minicart-img">
                                                            <a href="detailproduct.php" class="p-0"><img src="img/product/2.jpg" class="w-100" alt=""></a>
                                                        </div>
                                                        <div class="minicart-desc">
                                                            <a href="detailproduct.php" class="p-0">Leather Courriere
                                                                duffle ba</a>
                                                            <strong>1 × $150.00</strong>
                                                        </div>
                                                        <div class="remove">
                                                            <i class="fal fa-times"></i>
                                                        </div>
                                                    </li>


                                                    <li>
                                                        <div class="minicart-img">
                                                            <a href="detailproduct.php" class="p-0"><img src="img/product/3.jpg" class="w-100" alt=""></a>
                                                        </div>
                                                        <div class="minicart-desc">
                                                            <a href="detailproduct.php" class="p-0">Party Supplies
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
                                                <a href="cart.php" class="generic-btn black-hover-btn text-uppercase w-100 mb-20">View
                                                    cart</a>
                                                <a href="checkout.php" class="generic-btn black-hover-btn text-uppercase w-100 mb-20">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fal fa-align-right"></i></a>
                                    <ul class="submenu bold-content text-right">
                                        <li><a href="account.php">My Account</a></li>
                                        <li><a href="checkout.php">Checkout</a></li>
                                        <li><a href="productAdmin.php">Product</a></li>
                                        <li><a href="order.php">My Order</a></li>
                                        <?php if (isset($_SESSION['username'])) echo '<li><a href="logout.php">Logout</a></li>'; ?>
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
                        <li><a class="pl-3" href="javascript:void(0)" href="indexAdmin.php">Home</a></li>
                        <li><a class="pl-3" href="javascript:void(0)" href="productAdmin.php">Product</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <!-- /. mobile nav -->
        </div>
    </header>
    <!-- header section end -->


    <!-- single product start -->
    <section class="single-product mb-90">
        <div class="container-fluid">
            <nav aria-label="breadcrumb" class="mb-40">
                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="indexAdmin.php">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="productAdmin.php">Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="productAdmin.php?cat=<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></a></li>
                </ol>
            </nav>
            <div class="shop-wrapper">
                <div class="single-product-top">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-12">
                            <div class="shop-img">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="tab-1">
                                                <div class="product-img">
                                                    <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($row['product_image']) . '"class="w-100" alt="">'; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12">
                            <div class="single-product-sidebar">
                                <div class="product-content">
                                    <div class="single-product-title">
                                        <h2><?php echo $row['product_name']; ?></h2>
                                    </div>
                                    <div class="single-product-price">Rp. <?php echo $row['product_price']; ?></div>
                                    <div class="single-product-desc mb-25">
                                        <p>PATRIS OFFICIAL STORE - FASHION STYLE.</p>
                                        <p><?php echo $row['product_desc']; ?></p>
                                        <p>Material: High Quality Synthetic Leather</p>
                                        <p>Size: <?php echo $row['product_size']; ?></p>
                                        <p>Weight: <?php echo $row['product_weight']; ?> gram</p>
                                        <p>100% Brand New and High Quality!</p>
                                        <p>Stock available: <?php echo $row['product_stock']; ?></p>
                                    </div>

                                    <div class="quick-quantity mt-0">
                                        <form action="#" method="POST">
                                            <input type="number" class="mb-20" value="1" min="1" max="<?php echo $row['product_stock']; ?>" style="margin-right: 20px; width: 119px;">
                                            <button type="submit" class="list-add-cart-btn red-hover-btn border-0" style="padding-left: 80px;padding-right: 80px;transition: all .5s;">add
                                                to
                                                cart
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-product-bottom mt-80 gray-border-top">
                    <ul class="nav nav-pills justify-content-center mt-100" role="tablist">
                        <li class="nav-item">
                            <a class="active" data-toggle="pill" href="#desc-tab-2">Reviews (<?php echo $num; ?>)</a>
                        </li>
                    </ul>
                    <div class="container container-1200">
                        <div class="tab-content mt-60">
                            <div class="tab-pane fade show active" id="desc-tab-2">
                                <div class="single-product-tab-content">
                                    <h3 class="title mb-30">Reviews</h3>
                                    <?php
                                    if ($num == 0) {
                                        echo '<p>There are no reviews yet.</p>';
                                    } else {
                                        echo '<div class="review-box-item">
                                        <div class="review-box-content">
                                            <div class="row">';

                                        while ($row2 = mysqli_fetch_assoc($result2)) {
                                            echo
                                            '
                                                        <div class="col-7">
                                                            <div class="author-name">
                                                                <h6>' . $row2['customer_name'] . '</h6>
                                                                <div class="content">
                                                                    <p class="mb-0">' . $row2['review_desc'] . '</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-5 pr-5-px pl-0">
                                                            <div class="rating text-right">';
                                            for ($i = 0; $i < $row2['review_rating']; $i++) {
                                                echo '<i class="fal fa-star red-color"></i>';
                                            }
                                            for ($i = $row2['review_rating']; $i < 5; $i++) {
                                                echo '<i class="fal fa-star"></i>';
                                            }
                                            echo
                                            '</div>
                                                        </div>
                                                        ';
                                        }

                                        echo '
                                            </div>
                                        </div>
                                    </div>';
                                    } ?>

                                    <!-- <h4>Add a review</h4>

                                    <form action="#" method="POST">
                                        <label for="rating">Your Rating</label>
                                        <input type="radio" class="d-none" id="rating">
                                    </form>
                                    <p class="star-rating">
                                        <a href="javascript:void(0)"><i class="fal fa-star"></i></a>
                                        <a href="javascript:void(0)"><i class="fal fa-star"></i></a>
                                        <a href="javascript:void(0)"><i class="fal fa-star"></i></a>
                                        <a href="javascript:void(0)"><i class="fal fa-star"></i></a>
                                        <a href="javascript:void(0)"><i class="fal fa-star"></i></a>
                                    </p>

                                    <div class="form-group">
                                        <label for="review">Review</label>
                                        <textarea name="review" id="review" cols="30" rows="6" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name <span class="required">*</span></label>
                                        <input type="text" name="name" id="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email <span class="required">*</span></label>
                                        <input type="email" name="email" id="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox-input">
                                            <input type="checkbox" id="condition" name="condition">
                                        </div>
                                        <label for="condition">Save my name, email, and website in this browser for the
                                            next time I comment.</label>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="generic-btn red-hover-btn" style="font-size: 14px !important;">Submit</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- single product end -->
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
                                        <img src="produk/logo patris 2.png" width="120" height="90" href="indexAdmin.php">
                                        <p style="color: #FFFFFF;font-size: 20px;font-weight: 20px;margin-top: 40px;">
                                            Customer Service</p>
                                        <p style="color: #FFFFFF;font-size: 20px;font-weight: 20px;margin-top: 40px;">Jam
                                            Kerja: 09.00 s/d 15.00 WIB</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-12">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                                        <div class="footer-menu">
                                            <ul>
                                                <li><a href="indexAdmin.php" style="color: #FFFFFF;font-size: 20px;font-weight: 20px;">Home</a>
                                                </li>
                                                <li><a href="account.php" style="color: #FFFFFF;font-size: 20px;font-weight: 20px; margin-top: 30px;">My
                                                        account</a></li>
                                                <li><a href="checkout.php" style="color: #FFFFFF;font-size: 20px;font-weight: 20px;margin-top: 30px;">Checkout</a>
                                                </li>
                                                <li><a href="productAdmin.php" style="color: #FFFFFF;font-size: 20px;font-weight: 20px;margin-top: 30px;">Shop</a>
                                                </li>
                                                <li><a href="contact.php" style="color: #FFFFFF; font-size: 20px;font-weight: 20px;margin-top: 30px;">Contact</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 hidden-sm" style="margin-left:100px;">
                                        <div class="footer-menu">
                                            <ul>
                                                <li style="color: #FFFFFF;font-size: 20px;font-weight: 20px;">Follow Us:
                                                </li>
                                                <li style="color: #FFFFFF; font-size: 20px;font-weight: 20px;margin-top: 30px;">
                                                    <img src="https://img.icons8.com/material-rounded/50/ffffff/instagram-new.png" />
                                                    Patris.Official
                                                </li>
                                                <li style="color: #FFFFFF; font-size: 20px;font-weight: 20px;margin-top: 30px;">
                                                    <img src="https://img.icons8.com/material-rounded/50/ffffff/twitter.png" />
                                                    Patris_Shoes</a>
                                                </li>
                                                <li style="color: #FFFFFF; font-size: 20px;font-weight: 20px;margin-top: 30px;">
                                                    <img src="https://img.icons8.com/ios-filled/50/ffffff/facebook--v1.png" />
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
                            <div class="tab-content">
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
                            <ul class="nav nav-pills justify-content-center mt-10" role="tablist">
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
                                <a href="detailproduct.php" class="all-feature">See all feature</a>
                                <div class="quick-quantity mt-30">
                                    <form action="#" method="POST">
                                        <input type="number" value="1">
                                        <button type="submit" class="generic-btn red-hover-btn text-capitalize">add to
                                            cart</button>
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
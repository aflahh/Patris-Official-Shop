<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: ./dashboard.php/product/paper-dashboard-2
* Copyright 2020 Creative Tim (./dashboard.php)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php

include 'connect.php';



$sql = "SELECT order_receiver from orders where order_id=''";
$query = mysqli_query($conn, $sql);

$sql2 = "SELECT order_province from orders where order_id=''";
$query2 = mysqli_query($conn, $sql2);

$sql3 = "SELECT order_city from orders where order_id=''";
$query3 = mysqli_query($conn, $sql3);

$sql4 = "SELECT order_address from orders where order_id=''";
$query4 = mysqli_query($conn, $sql4);

$sql5 = "SELECT product_id from order_detail where order_id=''";
$query5 = mysqli_query($conn, $sql5);

$sql6 = "SELECT quantity from order_detail where order_id=''";
$query6 = mysqli_query($conn, $sql6);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Patris Official Shop Admin
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <style>
        .dashboard-color {
            background-color: coral;
        }

        input[type=submit]{
            font-family: sans-serif;
            font-size: 15px;
            background: #F0628C;
            color: white;
            border: #F0628C 3px solid;
            border-radius: 5px;
            padding: 12px 20px;
            margin-top: 10px;
         }
        .tombol {
           margin-top: 60px;
           margin-bottom: 30px;
           margin-right: 20px;
           text-align: right;
        }
        input[type=submit]:hover{
            opacity:0.9;
        }
    </style>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="demo/demo.css" rel="stylesheet" />
    <link href="css/css.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar dashboard-color" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="./dashboard.php" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="img/logo.png">
                    </div>
                </a>
                <a href="./dashboard.php" class="simple-text logo-normal">
                    Dashboard
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="./dashboard.php">
                            <i>
                                <img
                                    src="https://img.icons8.com/material-outlined/24/fa314a/dashboard-layout.png" /></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="productAdmin.php">
                            <i><img src="https://img.icons8.com/ios-filled/50/fa314a/women-shoe-side-view.png" /></i>
                            <p>Produk</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="./pesananAdmin.php">
                            <i><img src="https://img.icons8.com/ios-filled/50/fa314a/order-history.png" /></i>
                            <p>Pesanan</p>
                        </a>
                    </li>
                    <li>
                        <a href="./ulasanAdmin.php">
                            <i>
                                <img
                                    src="https://img.icons8.com/external-bearicons-glyph-bearicons/64/fa314a/external-positive-review-reputation-bearicons-glyph-bearicons.png" />
                            </i>
                            <p>Ulasan</p>
                        </a>
                    </li>
                    <li>
                        <a href="./tables.php">
                            <i><img src="https://img.icons8.com/ios-filled/64/fa314a/combo-chart.png" /></i>
                            <p>Statistik Penjualan</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:;">Patris Official Shop ~ Admin</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li>
                                <a class="nav-brand text-danger" href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header ">
                                <h5 class="card-title">List Order</h5>
                                <p class="card-category">All Order in Patris Official Shop</p>
                            </div>
                            <div class="card-body">
                                <div style=" margin-left : 10px">
                                <table style="width:500px ; margin-bottom:100px ;" border="1">
                                <tr>
                                    <td style="background-color:#F0628C; color: white;">Penerima</td>
                                    <td><?php echo mysqli_num_rows($query)?></td>
                                </tr>
                                <tr>
                                    <td style="background-color:#F0628C; color: white;">Provinsi</td>
                                    <td><?php echo mysqli_num_rows($query2)?></td>
                                </tr>
                                <tr>
                                    <td style="background-color:#F0628C; color: white;">Kota</td>
                                    <td><?php echo mysqli_num_rows($query3)?></td>
                                </tr>
                                <tr>
                                    <td style="background-color:#F0628C; color: white;">Alamat</td>
                                    <td><?php echo mysqli_num_rows($query4)?></td>
                                </tr>
                                </table>

                                <table style="width:900px ; margin-bottom:100px ; text-align: center;" border="1">
                                        <thead style="background-color:#F0628C;">
                                        <tr style="color: white" >
                                            <!-- <th style="text-align:center;">ID</th> -->
                                            <th>ID Product</th>
                                            <!-- <th>Gambar</th> -->
                                            
                                            <th>Quantity</th>
                                            <!-- <th>Status</th>
                                            <th>Harga</th>
                                            <th>Tindakan</th> -->
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td><?php echo mysqli_num_rows($query5)?></td>
                                        <td><?php echo mysqli_num_rows($query6)?></td>
                                    </tbody>
                                </table>

                        </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>
    <script>
        $(document).ready(function () {
            // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
            demo.initChartsPages();
        });
    </script>
</body>

</html>

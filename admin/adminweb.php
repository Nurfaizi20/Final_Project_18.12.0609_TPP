<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Breezy Guitar</title>
    <!-- Favicon icon -->
    <link rel="icon" type="asset/image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="asset/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="asset/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="asset/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="asset/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="adminweb.php?module=home">
                    <b class="logo-abbr"><img src="asset/images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="asset/images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="asset/images/bgbg.png" width="180" height="38"alt="">  <!-- INI ADALAH LOGO QUIXLAB -->
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="badge badge-pill gradient-1">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">3 New Messages</span>  
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-1">3</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/1.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Saiful Islam</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/2.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Adam Smith</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Can you do me a favour?</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/3.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Barak Obama</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/4.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Hilari Clinton</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hello</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">2 New Notifications</span>  
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-2">5</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events near you</h6>
                                                    <span class="notification-text">Within next 5 days</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Started</h6>
                                                    <span class="notification-text">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Ended Successfully</h6>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events to Join</h6>
                                                    <span class="notification-text">After two days</span> 
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>

                        <li class="icons dropdown d-none d-md-flex">
                            <?php
                        if (isset($_SESSION['namauser'])) { ?>
                            <a href="javascript:void(0)" class="log-user" >
                               <?php echo $_SESSION['namauser']; ?> 
                            </a>
                            <?php
                        }
                        ?>
                         
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="upload/<?php echo $_SESSION['foto']; ?>" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="adminweb.php?module=profile"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href="logout.php"><i class="icon-key"></i> <span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="adminweb.php?module=home" aria-expanded="false">
                            <span class="nav-text">Home</span>
                        </a>
                       
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a  href="adminweb.php?module=merek" aria-expanded="false">
                            <span class="nav-text">Merek</span>
                        </a>   
                    </li>
                      <li class="mega-menu mega-menu-sm">
                        <a  href="adminweb.php?module=kategori" aria-expanded="false">
                            <span class="nav-text">Kategori</span>
                        </a> 
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a  href="adminweb.php?module=produk" aria-expanded="false">
                            <span class="nav-text">Produk</span>    
                        </a>
                       
                    </li>
                    <li>
                        <a class="" href="adminweb.php?module=biaya" aria-expanded="false">
                            <span class="nav-text">Biaya Kirim</span>
                        </a>
                        
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a  href="adminweb.php?module=order" aria-expanded="false">
                            <span class="nav-text">Order</span>    
                        </a>
                       
                    </li>
                      <li class="mega-menu mega-menu-sm">
                        <a  href="adminweb.php?module=transaksi" aria-expanded="false">
                            <span class="nav-text">Transaksi</span>    
                        </a>
                       
                    </li>
                      <li class="mega-menu mega-menu-sm">
                        <a  href="adminweb.php?module=customer" aria-expanded="false">
                            <span class="nav-text">Customer</span>    
                        </a>
                       
                    </li>
                    
                    
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        






        <!-- <ISI KONTEN> -->

         <?php
      if ($_GET['module'] == 'home') {
        # code...
        include "module/home/home.php";
        //kategori
        } else if ($_GET['module'] == 'merek') {
        # code...
        include "module/merek/merek.php";
        }
        else if ($_GET['module'] == 'tambah_merek') {
        # code...
        include "module/merek/tambah_merek.php";
        }
         else if ($_GET['module'] == 'aksi_tambah_merek') {
        # code...
        include "module/merek/aksi_tambah_merek.php";
        }
          else if ($_GET['module'] == 'edit_merek') {
        # code...
        include "module/merek/edit_merek.php";
        }else if ($_GET['module'] == 'aksi_edit_merek') {
        # code...
        include "module/merek/aksi_edit_merek.php";
        }else if ($_GET['module'] == 'aksi_hapus_merek') {
        # code...
        include "module/merek/aksi_hapus_merek.php";
        }
        else if ($_GET['module'] == 'kategori') {
        # code...
        include "module/kategori/kategori.php";
        }
        else if ($_GET['module'] == 'tambah_kategori') {
        # code...
        include "module/kategori/tambah_kategori.php";
        }
         else if ($_GET['module'] == 'aksi_tambah_kategori') {
        # code...
        include "module/kategori/aksi_tambah_kategori.php";
        }
          else if ($_GET['module'] == 'edit_kategori') {
        # code...
        include "module/kategori/edit_kategori.php";
        }else if ($_GET['module'] == 'aksi_edit_kategori') {
        # code...
        include "module/kategori/aksi_edit_kategori.php";
        }else if ($_GET['module'] == 'aksi_hapus_kategori') {
        # code...
        include "module/kategori/aksi_hapus_kategori.php";
        }
        else if ($_GET['module'] == 'daerah') {
        # code...
        include "module/daerah/daerah.php";
        }
        else if ($_GET['module'] == 'tambah_daerah') {
        # code...
        include "module/daerah/tambah_daerah.php";
        }
         else if ($_GET['module'] == 'aksi_tambah_daerah') {
        # code...
        include "module/daerah/aksi_tambah_daerah.php";
        }
          else if ($_GET['module'] == 'edit_daerah') {
        # code...
        include "module/daerah/edit_daerah.php";
        }else if ($_GET['module'] == 'aksi_edit_daerah') {
        # code...
        include "module/daerah/aksi_edit_daerah.php";
        }else if ($_GET['module'] == 'aksi_hapus_daerah') {
        # code...
        include "module/daerah/aksi_hapus_daerah.php";
        }

        else if ($_GET['module'] == 'biaya') {
        # code...
        include "module/biaya/biaya.php";
        }
        else if ($_GET['module'] == 'tambah_biaya') {
        # code...
        include "module/biaya/tambah_biaya.php";
        }
         else if ($_GET['module'] == 'aksi_tambah_biaya') {
        # code...
        include "module/biaya/aksi_tambah_biaya.php";
        }
          else if ($_GET['module'] == 'edit_biaya') {
        # code...
        include "module/biaya/edit_biaya.php";
        }else if ($_GET['module'] == 'aksi_edit_biaya') {
        # code...
        include "module/biaya/aksi_edit_biaya.php";
        }else if ($_GET['module'] == 'aksi_hapus_biaya') {
        # code...
        include "module/biaya/aksi_hapus_biaya.php";
        }


         else if ($_GET['module'] == 'produk') {
        # code...
        include "module/produk/produk.php";
        }
        else if ($_GET['module'] == 'tambah_produk') {
        # code...
        include "module/produk/tambah_produk.php";
        }
         else if ($_GET['module'] == 'aksi_tambah_produk') {
        # code...
        include "module/produk/aksi_tambah_produk.php";
        }
          else if ($_GET['module'] == 'edit_produk') {
        # code...
        include "module/produk/edit_produk.php";
        }else if ($_GET['module'] == 'aksi_edit_produk') {
        # code...
        include "module/produk/aksi_edit_produk.php";
        }else if ($_GET['module'] == 'aksi_hapus_produk') {
        # code...
        include "module/produk/aksi_hapus_produk.php";
        }else if ($_GET['module'] == 'order') {
        # code...
        include "module/order/order.php";
        } else if ($_GET['module'] == 'aksi_hapus_order') {
        # code...
        include "module/order/aksi_hapus_order.php";
        }else if ($_GET['module'] == 'aksi_edit_order') {
        # code...
        include "module/order/aksi_edit_order.php";
        }
        else if ($_GET['module'] == 'detail_order') {
        # code...
        include "module/order/detail_order.php";
        }else if ($_GET['module'] == 'transaksi') {
        # code...
        include "module/transaksi/transaksi.php";
        } else if ($_GET['module'] == 'aksi_hapus_transaksi') {
        # code...
        include "module/transaksi/aksi_hapus_transaksi.php";
        }else if ($_GET['module'] == 'detail_transaksi') {
        # code...
        include "module/transaksi/detail_transaksi.php";
        }else if ($_GET['module'] == 'customer') {
        # code...
        include "module/customer/customer.php";
        }else if ($_GET['module'] == 'aksi_edit_customer') {
        # code...
        include "module/customer/aksi_edit_customer.php";
        }else if ($_GET['module'] == 'profile') {
        # code...
        include "module/profile/profile.php";
        } else if ($_GET['module'] == 'aksi_simpan') {
        # code...
        include "module/profile/aksi_simpan.php";
        } else if ($_GET['module'] == 'logout') {
        # code...
        include "module/profile/logout.php";
        }
        //kategori
        else {
        include "module/home/home.php";
      }
       ?>












        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Breezy Guitar</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="asset/plugins/common/common.min.js"></script>
    <script src="asset/js/custom.min.js"></script>
    <script src="asset/js/settings.js"></script>
    <script src="asset/js/gleek.js"></script>
    <script src="asset/js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="asset/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="asset/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="asset/plugins/d3v3/index.js"></script>
    <script src="asset/plugins/topojson/topojson.min.js"></script>
    <script src="asset/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="asset/plugins/raphael/raphael.min.js"></script>
    <script src="asset/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="asset/plugins/moment/moment.min.js"></script>
    <script src="asset/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="asset/plugins/chartist/js/chartist.min.js"></script>
    <script src="asset/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="asset/js/dashboard/dashboard-1.js"></script>

</body>

</html>
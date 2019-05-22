<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />

  <title>Tugas Akhir</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url(); ?>/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url(); ?>/assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>/assets/css/demo.css" rel="stylesheet" />

    <!-- Data Table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>


</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="<?php echo base_url(); ?>/assets/img/sidebar-5.jpg">
  

      <div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    DISTRIBUSI GAS ELPIJI
                </a>
            </div>

            <ul class="nav">
        <li>
                     <a href="<?php echo site_url()."/Pengecer/index/"; ?>">
                        <i class="pe-7s-note2"></i>
                        <p>DATA PENGECER </p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url()."/DisPangkalan/index/"; ?>">
                        <i class="pe-7s-note2"></i>
                        <p>DATA DISTRIBUSI PENGECER </p>
                    </a>
                </li>
        <li>
                    <a href="<?php echo site_url()."/ReturnBarang/index/"; ?>">
                        <i class="pe-7s-note2"></i>
                        <p>DATA RETURN BARANG </p>
                    </a>
                </li>
                     <li>
                    <a href="<?php echo site_url()."/StockElpiji/index/"; ?>">
                        <i class="pe-7s-note2"></i>
                        <p>DATA STOCK ELPIJI </p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url()."/Logbook/logbook/"; ?>">
                        <i class="pe-7s-note2"></i>
                        <p>LOGBOOK PANGKALAN </p>
                    </a>
                </li>
                     <li>
                    <a href="<?php echo site_url()."/Broadcast/index/"; ?>">
                        <i class="pe-7s-note2"></i>
                        <p>BROADCAST </p>
                    </a>
                </li>
                <!-- <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li> -->
        
            </ul>
      </div>
    </div>

    <div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">PANGKALAN</a>
                </div>
                <div class="collapse navbar-collapse">
                   <!--  <ul class="nav navbar-nav navbar-left">
                       <!--  <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li> -->
                        <!-- <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
                  <p class="hidden-lg hidden-md">
                    5 Notifications
                    <b class="caret"></b>
                  </p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                <p class="hidden-lg hidden-md">CARI</p>
                            </a>
                        </li>
                    </ul> -->

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="#">
                               <p>AKUN</p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url()."/Login/logout/"; ?>">
                                <p>KELUAR</p>
                            </a>
                        </li>
            <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

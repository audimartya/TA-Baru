<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
<!--   <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> -->

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


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="<?php echo base_url(); ?>/assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->
  

      <div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    DISTRIBUSI GAS ELPIJI
                </a>
            </div>

            <ul class="nav">
               
              <!--   <li>
                   <a href="<?php echo base_url(); ?>index.php/C_Agen/index/">
                        <i class="pe-7s-user"></i>
                        <p>Data Agen </p>
                    </a>
                </li> -->
        <li>
                    <a href="<?php echo base_url(); ?>index.php/C_Pangkalan/index/">
                        <i class="pe-7s-note2"></i>
                        <p>Data Pangkalan </p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/C_DistribusiPangkalan/index/">
                        <i class="pe-7s-note2"></i>
                        <p>Data Distribusi Agen </p>
                    </a>
                </li>
                 <li>
                    <a href="<?php echo site_url()."/Pengecer/panggilpengecer/"; ?>">
                        <i class="pe-7s-note2"></i>
                        <p>Data Pengecer </p>
                    </a>
                </li>
                <li>
                     <a href="<?php echo site_url()."/Logbook/panggillogbook/"; ?>">
                        <i class="pe-7s-note2"></i>
                        <p>Data Distribusi Pangkalan </p>
                    </a>
                </li>
                <li>
                      <a href="<?php echo site_url()."/ReturnBarang/panggilreturnbarang/"; ?>">
                        <i class="pe-7s-note2"></i>
                        <p>Data Return Barang </p>
                    </a>
                </li>
        
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
                    <a class="navbar-brand" href="#">AGEN</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                       <!--  <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li> -->
                       <!--  <li class="dropdown">
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
                        </li> -->
                       <!--  <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                <p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li> -->
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                       <!--  <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                    Dropdown
                    <b class="caret"></b>
                  </p>

                              </a> -->
                             <!--  <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li> -->
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
            <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

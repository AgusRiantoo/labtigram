<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Labtigram | <?php echo $judul?> </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/build/css/custom.min.css');?>" rel="stylesheet">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url('admin'); ?>" class="site_title"><i class="fa fa-laptop"></i> <span>Labtigram</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo  base_url('assets/foto.jpg')?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Admin</h3>
                <ul class="nav side-menu">
                  <li>
                    <a href="<?php echo base_url('admin/index'); ?>"><i class="fa fa-home"></i> Dashboard</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/gambar'); ?>"><i class="fa fa-image"></i> Gambar</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/video'); ?>"><i class="fa fa-film"></i> Video</a>
                  </li>
                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">


                <li>
                  <a href="<?php echo base_url() ?>admin/logout">
                    <i class="fa fa-power-off fa-5x"></i> Logout
                  </a>

                </li>
              </ul>
            </nav>
          </div>
        </div>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Labtigram</title>

  <!-- CSS  -->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/fonts/material-icons/material-icons.css'); ?>" />
  <link href="<?php echo base_url('assets/css/materialize.css') ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url('assets/css/style.css') ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>

<!-- menu -->
  <nav class="brown lighten-2" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="<?php echo base_url() ?>" class="brand-logo">Labtigram</a>

   <?php if ($this->session->userdata('isLogin')) : ?>

    <!-- menu normal -->
    <ul class="right hide-on-med-and-down">
      <li><a href="<?php echo base_url('user') ?>">Home</a></li>
      <li><a href="<?php echo base_url('user/profile') ?>">Profile</a></li>
      <li><a href="<?php echo base_url('user/about') ?>">About</a></li>
      <li><a href="<?php echo base_url('welcome/logout') ?>">Logout</a></li>
    </ul>
    <!-- end menu normal -->
  </ul>
  
    <!-- menu mobile -->
    <ul id="slide-out" class="side-nav">
    <li>
      <div class="userView">
        <div class="background">
          <img src="<?php echo base_url('assets/bahan1.jpg'); ?>">
        </div>
        <img class="circle" src="<?php echo base_url('assets/').$user->avatar; ?>">
        <span class="white-text name"><?php echo $user->nama; ?></span>
        <span class="white-text email"><?php echo $user->email; ?></span>
      </div>
    </li>
      <li><a href="<?php echo base_url() ?>">Home</a></li>
      <li><a href="<?php echo base_url('user/profile') ?>">Profile</a></li>
      <li><a href="<?php echo base_url('user/about') ?>">About</a></li>
      <li><a href="<?php echo base_url('user/logout') ?>">Logout</a></li>
  </ul>
    <!-- menu mobile -->
  <?php endif ?>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
  </nav>
<!-- end menu -->
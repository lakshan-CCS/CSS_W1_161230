<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Clasified">
    <meta name="generator" content="Wordpress! - Open Source Content Management">
    <title>VisitSriLankaOne.com</title>

     <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
    <!-- Material CSS -->
    <link rel="stylesheet" href="assets/css/material-kit.css" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
        <!-- Line Icons CSS -->
    <link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css">
    <!-- Line Icons CSS -->
    <link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/extras/animate.css" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/extras/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="assets/extras/settings.css" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">
        <!-- Bootstrap Select -->
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/visitlk.css">
    <!-- test css -->

    <!-- test css -->
  </head>

  <body>
    <!-- Header Section Start -->
        <div class="header">
          <nav class="navbar navbar-default main-navigation" role="navigation">
            <div class="container">
              <div class="navbar-header">
                <!-- Stat Toggle Nav Link For Mobiles -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <!-- End Toggle Nav Link For Mobiles -->
                <a class="navbar-brand logo" href="<?php echo base_url(); ?>"><img src="assets/img/logo.png" alt=""></a>
              </div>
              <!-- brand and toggle menu for mobile End -->

              <!-- Navbar Start -->
              <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="<?php echo base_url(); ?>"><i class="lnr lnr-home"></i> Home</a></li>
                  <li><a href="<?php echo base_url(); ?>about-us"><i class="lnr lnr-home"></i> About Us</a></li>
                  <li><a href="<?php echo base_url(); ?>services"><i class="lnr lnr-hand"></i> Services</a></li>
                  <li><a href="<?php echo base_url(); ?>packages"><i class="lnr lnr-screen"></i> Packages</a></li>
                  <li class="postadd">
                    <a class="btn btn-danger btn-post" href="<?php echo base_url(); ?>req-for-a-quote"><span class="fa fa-plus-circle"></span> Req Quote</a>
                  </li>
                </ul>
              </div>
              <!-- Navbar End -->
            </div>
          </nav>
          <!-- Off Canvas Navigation -->
          <div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
          <!--- Off Canvas Side Menu -->
            <div class="close" data-toggle="offcanvas" data-target=".navmenu">
                <i class="fa fa-close"></i>
            </div>
              <h3 class="title-menu">All Pages</h3>
              <ul class="nav navmenu-nav"> <!--- Menu -->
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="<?php echo base_url(); ?>about-us">About us</a></li>
                <li><a href="<?php echo base_url(); ?>category">Packages</a></li>
                <li><a href="<?php echo base_url(); ?>contact-us">Contact Us</a></li>
            </ul><!--- End Menu -->
          </div> <!--- End Off Canvas Side Menu -->
          <div class="tbtn wow pulse" id="menu" data-wow-iteration="infinite" data-wow-duration="500ms" data-toggle="offcanvas" data-target=".navmenu">
            <p><i class="fa fa-file-text-o"></i> All Pages</p>
          </div>
        </div>
        <!-- Header Section End -->

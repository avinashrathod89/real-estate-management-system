<?php
$session = session();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('static/admin/'); ?>assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url('static/admin/'); ?>assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url('static/admin/'); ?>assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url('static/admin/'); ?>assets/vendors/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet"
    href="<?= base_url('static/admin/'); ?>assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= base_url('static/admin/'); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url('static/admin/');?>assets/css/custom.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?= base_url('static/admin/'); ?>assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">

    <!-- navbar -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <a class="navbar-brand brand-logo" href="index.html"><img
            src="<?= base_url('static/admin/'); ?>assets/images/logo.svg" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img
            src="<?= base_url('static/admin/'); ?>assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>

        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
              aria-expanded="false">
              <div class="nav-profile-img">
                <img src="<?= base_url('static/admin/'); ?>assets/images/faces/face28.jpg" alt="image">
                <span class="availability-status online"></span>
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black"><?= $session->get('fullname'); ?></p> <!-- ✅ Changed -->
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="<?= base_url('logout'); ?>">
                <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>

    <!-- sidebar -->
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="<?= base_url('static/admin/'); ?>assets/images/faces/face28.jpg" alt="profile" />
                <span class="login-status online"></span>
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2"><?= $session->get('fullname'); ?></span> <!-- ✅ Changed -->
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('dashboard'); ?>">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-view-dashboard-outline menu-icon"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('brokers'); ?>">
              <span class="menu-title">Brokers</span>
              <i class="mdi mdi-account-multiple menu-icon"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('properties'); ?>">
              <span class="menu-title">Properties</span>
              <i class="mdi mdi-home-city-outline menu-icon"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('enquiries'); ?>">
              <span class="menu-title">Enquiries</span>
              <i class="mdi mdi-email-outline menu-icon"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('contacts'); ?>">
              <span class="menu-title">Contacts</span>
              <i class="mdi mdi-phone-outline menu-icon"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('staff'); ?>">
              <span class="menu-title">Staff</span>
              <i class="mdi mdi-account-tie menu-icon"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('appointments'); ?>">
              <span class="menu-title">Appointments</span>
              <i class="mdi mdi-calendar-check-outline menu-icon"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('signout'); ?>">
              <span class="menu-title">Logout</span>
              <i class="mdi mdi-logout menu-icon"></i>
            </a>
          </li>


        </ul>
      </nav>
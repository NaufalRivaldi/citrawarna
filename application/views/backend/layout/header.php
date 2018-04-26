<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url() ?>assets/img/icon.png">

    <title><?= $title ?> - Admin CWA</title>
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>assets/css/dashboard.css" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>">
    <!-- CKEDITOR -->
    <script src="<?= base_url('assets/ckeditor/ckeditor.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-warning flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?= base_url('backend/dashboard') ?>">Toko Cat Citra Warna</a>
      
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?=base_url()?>backend/logout">Sign out</a>
        </li>
      </ul>
    </nav>
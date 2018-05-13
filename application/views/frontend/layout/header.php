<?php 
$title = $this->home_model->get_setting('title');
$description = $this->home_model->get_setting('description');
$keywords = $this->home_model->get_setting('keyword');



 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="<?= $keywords['value'] ?>">
	<meta property="og:title" content="<?= $title['value'] ?>">
	<meta property="og:image" content="<?= base_url('assets/img/cwa_banner.jpg') ?>">
	<meta property="description" content="<?= $description['value'] ?>">
	<meta name="description" content="<?= $description['value'] ?>">
	<meta property="og:description" content="<?= $description['value'] ?>">
	<title><?= $page. ' - ' .$title['value'] ?></title>
	<link rel="icon" href="<?= base_url() ?>assets/img/icon.png">
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/DataTables/datatables.min.css'); ?>"/>
	
</head>
<body>
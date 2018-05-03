<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="<?= $keywords ?>">
	<meta property="og:title" content="<?= $title ?>">
	<meta property="og:image" content="<?= base_url('assets/img/cwa_banner.jpg') ?>">
	<meta property="description" content="<?= $description ?>">
	<meta name="description" content="<?= $description ?>">
	<meta property="og:description" content="<?= $description ?>">
	<title>Welcome - <?= $title ?></title>
	<link rel="icon" href="<?= base_url() ?>assets/img/icon.png">
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.css'); ?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-red fixed-top">
		<div class="container">
		  	<a class="navbar-brand" href="#">
				<img src="<?= base_url('assets/img/logo-new.jpg') ?>" class="brand" alt="logo">
			</a>
			<ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="#">HOME</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">PRODUK</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">ARTIKEL</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">HUBUNGI KAMI</a>
		      </li>
		    </ul>
		</div>
	</nav>
	<div class="nav-break" style=""></div>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ">
			      <li class="nav-item">
			        <a class="kat" href="#">Home</a>
			      </li>
			      <li class="nav-item">
			        <a class="kat" href="#">Features</a>
			      </li>
			      <li class="nav-item">
			        <a class="kat" href="#">Pricing</a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="kat" href="#">Dropdown link</a>
			        <ul>
			        	<li><a href="">List 1</a></li>
			        	<li>List 1</li>
			        	<li>List 1</li>
			        </ul>

			      </li>
		    	</ul>    
			</div>
		</div>
	</nav>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		</ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      	<img class="d-block w-100" src="<?= base_url('upload/slideshow/Ramadhan.jpg') ?>" class="img-fluid" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      	<img class="d-block w-100" src="<?= base_url('upload/slideshow/banner.jpg') ?>" class="img-fluid" alt="First slide">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    	<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	    	<span class="sr-only">Next</span>
	  </a>
	</div>
	<div class="container">
		<br>
		<h1 align="center">About Us</h1>
		<hr>
		<div class="row">
			<h5 class="about">Citra Warna adalah toko cat terbesar di Bali, yang menyediakan produk-produk berkualitas, dan menjamin harga termurah.
			Cabang kami tersebar didaerah Denpasar, Nusadua, Ubud, Tabanan, Singaraja dan akan terus berkembang. 
			Berikut adalah kelebihan berbelanja di Citra Warna yang tidak akan anda dapatkan di toko lain</h5>

		</div>
		<br>
		<div class="row">
			<div class="col-md-4">
				<h4 align="center"><b>Jaminan Harga termurah</b></h4>
				<img src="assets/img/logo-new.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-md-4">
				<h4 align="center"><b>Produk Terlengkap</b></h4>
				<img src="assets/img/logo-new.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-md-4">
				<h4 align="center"><b>Banyak Pilihan Warna</b></h4>
				<img src="assets/img/logo-new.jpg" alt="" class="img-fluid">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-4">
				<h4 align="center"><b>Jasa Pengecekan Tembok</b></h4>
				<img src="assets/img/logo-new.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-md-4">
				<h4 align="center"><b>Melayani Pembelian Partai Besar / Kecil</b></h4>
				<img src="assets/img/logo-new.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-md-4">
				<h4 align="center"><b>Delivery Service</b></h4>
				<img src="assets/img/logo-new.jpg" alt="" class="img-fluid">
			</div>
		</div>
	</div>
	
	<script src="<?= base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery-ui.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>
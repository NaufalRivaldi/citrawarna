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
	<nav>
		<div class="navbar">
			<div class="container">
				<div class="flex-container">
					<div class="nav-brand">
						<a href="#">
							<img src="<?= base_url('assets/img/logo-new.jpg') ?>" alt="logo" class="logo-brand">
						</a>
					</div>
					<ul>
						<li><a href="">HOME</a></li>
						<li><a href="">PRODUK</a></li>
						<li><a href="">ARTIKEL</a></li>
						<li><a href="">CONTACT</a></li>
					</ul>
					<div class="mobile-responsive">
						<div class="btn-cok">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</nav>
	<nav class="nav-second">
		<div class="flex-container-second">
			<div class="container">
				<ul>
					<li class="list"><a href="">Semua Kategori</a></li>
					<li class="list"><a href="">Cat Tembok</a></li>
					<li class="list"><a href="">Cat Kayu</a></li>
					<li class="list"><a href="">Cat Besi</a></li>
					<li class="list"><a href="">Cat Duco</a></li>
					<li class="list"><a href="">Thinner</a></li>
					<li class="list"><a href="">Cat Genteng</a></li>
					<li class="list"><a href="">Cat Waterproofing</a></li>
					<li class="list"><a href="#">Lain - Lain</a>
						<div class="dropdown">
							<a href=""></a>
							<a href="#">Modacon</a>
							<a href="#">Link 1</a>
							<a href="#">Link 1</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- menu mobile -->
	<ul class="menu-mobile" type="circle">
		<li><a href="">HOME</a></li>
		<li><a href="">PRODUK</a></li>
		<li><a href="">ARTIKEL</a></li>
		<li><a href="">CONTACT</a></li>
		<hr>
		<b> - Kategori - </b>
		<li class="list"><a href="">Semua Kategori</a></li>
		<li class="list"><a href="">Cat Tembok</a></li>
		<li class="list"><a href="">Cat Kayu</a></li>
		<li class="list"><a href="">Cat Besi</a></li>
		<li class="list"><a href="">Cat Duco</a></li>
		<li class="list"><a href="">Thinner</a></li>
		<li class="list"><a href="">Genteng</a></li>
		<li class="list"><a href="">Waterproofing</a></li>
		<li class="list"><a href="#">Lain - Lain</a>
			<div class="dropdown">
				<a href=""></a>
				<a href="#">Modacon</a>
				<a href="#">Link 1</a>
				<a href="#">Link 1</a>
			</div>
		</li>
	</ul>
	
	<img src="<?= base_url('upload/slideshow/Ramadhan.jpg') ?>" alt="" class="img-fluid img-position" id="img-position">

	<div class="container-fluid">
		<br>
		<div class="container">
			<h1 align="center">ABOUT US</h1>
			<hr>
			<div class="row">
				<div class="col-md-7">
					<p class="about"><b class="sorot"> CITRA WARNA </b> adalah toko cat terbesar di Bali, yang menyediakan produk-produk berkualitas, dan menjamin harga termurah. Cabang kami tersebar didaerah Denpasar, Nusadua, Ubud, Tabanan, Singaraja dan akan terus berkembang. </p>
					<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
					    VISI & MISI 
					</a>
					<div class="collapse" id="collapseExample">
					  <div class="card card-body">
					    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
					  </div>
					</div>
				</div>
				<div class="col-md-5">
					<img src="<?= base_url('assets/img/gif1.gif') ?>" alt="" class="img-fluid">
				</div>	
			</div>
			

		</div>
	</div>	
	


	<script src="<?= base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery-ui.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/custom.js') ?>"></script>
</body>
</html>
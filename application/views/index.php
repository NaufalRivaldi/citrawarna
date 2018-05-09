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
					<a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
					    <img src="<?= base_url('assets/img/visimisi.png') ?>" alt="visimisi" width="390px">
					</a>
					<div class="collapse" id="collapseExample">
					  <div class="card-theme card-body " style="">
					   <h4>Visi</h4>
					   <ul>
					   		<li>Membentuk karakter guna kesejahteraan bersama di PT. Citra Warna Jaya Abadi</li>
					   </ul>
					   <h4>Misi</h4>
					   <ol>
					   		<li>Memberikan pelayanan dan edukasi pengecatan yang optimal kepada pelanggan</li>
					   		<li>Memberikan pilihan produk yang berkualitas dengan pilihan yang lengkap</li>
					   		<li>Memberikan harga yang kompetitif</li>
					   </ol>
					  </div>
					</div>
					<br><br>
					<a data-toggle="collapse" href="#collapseBudaya" role="button" aria-expanded="false" aria-controls="collapseBudaya">
					    <img src="<?= base_url('assets/img/budaya.png') ?>" alt="visimisi" width="390px">
					</a>
					<div class="collapse" id="collapseBudaya">
					  <div class="card-theme card-body " style="">
					  	<img src="<?= base_url('assets/img/budayaa.png') ?>" alt="" class="img-fluid">
					  </div>
					</div>
				</div>
				<div class="col-md-5">
					<img src="<?= base_url('assets/img/gif1.gif') ?>" alt="" class="img-fluid">
				</div>	
			</div>
			<br><br>
			
			<h1 align="center">OUR SERVICE</h1>
			<hr>
			<div class="row">
				<div class="col-md-4">
					<h5 align="center" class="service-title">Jaminan Harga Termurah</h5>
					<center><img src="<?= base_url('assets/img/features-2.png') ?>" alt="features-3" class="service"></center>
					<p align="center">Kami menjamin toko kami dengan harga yang paling murah, apabila ada yang lebih murah, kami ganti selisihnya. (syarat dan ketentuan berlaku)</p>
				</div>
				<div class="col-md-4">
					<h5 align="center" class="service-title">Produk Terlengkap</h5>
					<center><img src="<?= base_url('assets/img/features-1.png') ?>" alt="" class="service"></center>
					<p align="center">Segala jenis cat dan keperluan pengecatan anda ada disini, mulai dari thinner, kuas, amplas dan sebagainya</p>
				</div>
				<div class="col-md-4">
					<h5 align="center" class="service-title">Banyak Pilihan Warna</h5>
					<center><img src="<?= base_url('assets/img/features-3.png') ?>" alt="features-3" class="service"></center>
					<p align="center">Warna apapun yang anda inginkan ada disini, karena kami juga memiliki mesin tinting untuk membuat cat dengan warna yang anda inginkan</p>
				</div>
				<div class="col-md-4">
					<h5 align="center" class="service-title">Jasa Pengecekan Tembok</h5>
					<center><img src="<?= base_url('assets/img/features-4.png') ?>" alt="features-3" class="service"></center>
					<p align="center">Menyediakan layanan jasa pengecekan kesiapan atau kesehatan tembok sebelum melakukan pengecatan, GRATIS tidak dipungut biaya (Khusus area denpasar)</p>
				</div>
				<div class="col-md-4" class="service-title">
					<h5 align="center" class="service-title">Melayani Segala Partai Pembelian</h5>
					<center><img src="<?= base_url('assets/img/features-5.png') ?>" alt="features-3" class="service"></center>
					<p align="center">Pembelian dalam jumlah besar hingga lebih dari 10 pail, atau pembelian hanya 1 kaleng, kami akan tetap melayani anda dengan sebaik-baiknya</p>
				</div>
				<div class="col-md-4">
					<h5 align="center" class="service-title">Delivery Service</h5>
					<center><img src="<?= base_url('assets/img/features-6.png') ?>" alt="features-3" class="service"></center>
					<p align="center">Kami juga melayani jasa pengiriman barang ke lokasi anda dengan ketentuan yang berlaku</p>
				</div>
			</div>
			<br><br>
			<?php $namaFile = "roti.jpg"; ?>

			<h2 align="center" class="section-title">PRODUK UNGGULAN KAMI</h2>
			<hr>
			<p class="unggulan">"Produk unggulan kami memiliki kualitas yang lebih baik dari produk lain"</p>
			<br>
			<div class="row justify-content-center">
				<div class="col-md-3 centered">
					<a href="">
						<div class="text-product">See Details &nbsp; <i class="fa fa-eye"></i>
							<div class="img-product" style="background: url('upload/produk/<?= $namaFile?>') no-repeat; background-position: center; background-size: cover;">
							</div>
						</div>
						<p class="product-name">WELDON WALLPAINT </p>	
						<p class="kat-name">Cat Tembok</p>
					</a>
				</div>
				<div class="col-md-3 centered">
					<a href="">
						<div class="text-product">See Details &nbsp; <i class="fa fa-eye"></i>
							<div class="img-product" style="background: url('upload/produk/weldon.jpg') no-repeat; background-position: center; background-size: cover;">
							</div>
						</div>
						<p class="product-name">WELDON WALLPAINT </p>	
						<p class="kat-name">Cat Tembok</p>
					</a>
				</div>
				<div class="col-md-3 centered">
					<a href="">
						<div class="text-product">See Details &nbsp; <i class="fa fa-eye"></i>
							<div class="img-product" style="background: url('upload/produk/weldon.jpg') no-repeat; background-position: center; background-size: cover;">
							</div>
						</div>
						<p class="product-name">WELDON WALLPAINT </p>	
						<p class="kat-name">Cat Tembok</p>
					</a>
				</div>
				<div class="col-md-3 centered">
					<a href="">
						<div class="text-product">See Details &nbsp; <i class="fa fa-eye"></i>
							<div class="img-product" style="background: url('upload/produk/weldon.jpg') no-repeat; background-position: center; background-size: cover;">
							</div>
						</div>
						<p class="product-name">WELDON WALLPAINT </p>	
						<p class="kat-name">Cat Tembok</p>
					</a>
				</div>
				<div class="col-md-3 centered">
					<a href="">
						<div class="text-product">See Details &nbsp; <i class="fa fa-eye"></i>
							<div class="img-product" style="background: url('upload/produk/weldon.jpg') no-repeat; background-position: center; background-size: cover;">
							</div>
						</div>
						<p class="product-name">WELDON WALLPAINT </p>	
						<p class="kat-name">Cat Tembok</p>
					</a>
				</div>
				<div class="col-md-3 centered">
					<a href="">
						<div class="text-product">See Details &nbsp; <i class="fa fa-eye"></i>
							<div class="img-product" style="background: url('upload/produk/weldon.jpg') no-repeat; background-position: center; background-size: cover;">
							</div>
						</div>
						<p class="product-name">WELDON WALLPAINT </p>	
						<p class="kat-name">Cat Tembok</p>
					</a>
				</div>
				<div class="col-md-3 centered">
					<a href="">
						<div class="text-product">See Details &nbsp; <i class="fa fa-eye"></i>
							<div class="img-product" style="background: url('upload/produk/weldon.jpg') no-repeat; background-position: center; background-size: cover;">
							</div>
						</div>
						<p class="product-name">WELDON WALLPAINT </p>	
						<p class="kat-name">Cat Tembok</p>
					</a>
				</div>
				<div class="col-md-3 centered">
					<a href="">
						<div class="text-product">See Details &nbsp; <i class="fa fa-eye"></i>
							<div class="img-product" style="background: url('upload/produk/weldon.jpg') no-repeat; background-position: center; background-size: cover;">
							</div>
						</div>
						<p class="product-name">WELDON WALLPAINT </p>	
						<p class="kat-name">Cat Tembok</p>
					</a>
				</div>
			</div>
			<br><br>
			
			<h1 align="center">HUBUNGI KAMI</h1>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<p>Nama Lengkap :</p>
					<input type="text" class="form-control">
					<p>Email :</p>
					<input type="text" class="form-control">
					<p>No. Telp :</p>
					<input type="text" class="form-control">
					<p>Subject :</p>
					<input type="text" class="form-control">
				</div>
			</div>
		</div>
	</div>	
	<br>
	

	<script src="<?= base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery-ui.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/custom.js') ?>"></script>
</body>
</html>
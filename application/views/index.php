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
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-red">
		<div class="container">
		  	<a class="navbar-brand" href="#">
				<img src="<?= base_url('assets/img/logo-new.jpg') ?>" class="brand" alt="logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
			    <ul class="navbar-nav">
			      <li class="nav-item active">
			        <a class="nav-link" href="#">Home</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Features</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Pricing</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Dropdown link</a>
			      </li>
			    </ul>
			</div>
		</div>
	</nav>
	
	<script src="<?= base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery-ui.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>
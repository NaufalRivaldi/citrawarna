	
	<nav>
		<div class="navbar bg-dark">
			<div class="container">
				<div class="flex-container">
					<div class="nav-brand">
						<a href="<?= base_url() ?>">
							<img src="<?= base_url('assets/img/logo-new.jpg') ?>" alt="logo" class="logo-brand">
						</a>
					</div>
					<ul>
						<li><a href="<?= base_url() ?>">HOME</a></li>
						<li><a href="<?= base_url('product/kategori') ?>">PRODUK</a></li>
						<li><a href="<?= base_url('artikel') ?>">ARTIKEL</a></li>
						<li><a href="#lokasi">LOKASI KAMI</a></li>
						<li><a href="#contact">CONTACT</a></li>
					</ul>
					<div class="mobile-responsive">
						<div class="btn-cok bg-dark">
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
					<?php $nav = $this->db->order_by('parent_of', 'asc')->get('kat_barang')->result_array(); 
						foreach($nav as $link) {
					?>
					<li class="list">
						<a href="<?= base_url('product/kategori/'.$link['kd_kategori']) ?>">
							<?= $link['desk_kategori'] ?>		
						</a>
					</li>
					
					<?php } ?>
					<!-- coding buat navbar kalo sewaktu diperlukan
					<li class="list"><a href="<?= base_url('product/kategori/lain') ?>">Lain - Lain</a>
						<div class="dropdown">
							<a href=""></a>
							<a href="#">Modacon</a>
							<a href="#">Link 1</a>
							<a href="#">Link 1</a>
						</div>
					</li> -->
				</ul>
			</div>
		</div>
	</nav>
	<!-- menu mobile -->
	<ul class="menu-mobile" type="circle">
		<li><a href="<?= base_url() ?>">HOME</a></li>
		<li><a href="<?= base_url('product/kategori') ?>">PRODUK</a></li>
		<li><a href="<?= base_url('artikel') ?>">ARTIKEL</a></li>
		<li><a href="#lokasi">LOKASI KAMI</a></li>
		<li><a href="#contact">CONTACT</a></li>
		<hr>
		<b> - Kategori - </b>
		<?php $nav = $this->db->order_by('parent_of', 'asc')->get('kat_barang')->result_array(); 
				foreach($nav as $link) { ?>
			<li class="list">
				<a href="<?= base_url('product/kategori/'.$link['kd_kategori']) ?>">
					<?= $link['desk_kategori'] ?>		
				</a>
			</li>			
		<?php } ?>
			<!-- <div class="dropdown">
				<a href=""></a>
				<a href="#">Modacon</a>
				<a href="#">Link 1</a>
				<a href="#">Link 1</a>
			</div> -->
		</li>
	</ul>
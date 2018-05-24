<?php $img = $this->db->order_by('tanggal', 'desc')->where('stat', 1)->get('slideshow')->row_array(); ?>

<img src="<?= base_url('upload/slideshow/'.$img['img']) ?>" alt="sampul" class="img-fluid img-position" id="img-position">


	<div class="container-fluid">
		<br>
		<div class="container">
			<h1 align="center">ABOUT US</h1>
			<hr>
			<div class="row">
				<div class="col-md-7">
					<p class="about"><b class="sorot"> CITRA WARNA </b> adalah toko cat terbesar di Bali, yang menyediakan produk-produk berkualitas, dan menjamin harga termurah. Cabang kami tersebar didaerah Denpasar, Nusadua, Ubud, Tabanan, Singaraja dan akan terus berkembang. </p>
					<a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
					    <img src="<?= base_url('assets/img/visimisi.jpg') ?>" alt="visimisi" width="100%">
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
					    <img src="<?= base_url('assets/img/budaya.jpg') ?>" alt="visimisi" width="100%">
					</a>
					<div class="collapse" id="collapseBudaya">
					  <div class="card-theme card-body " style="">
					  	<img src="<?= base_url('assets/img/budayaa.png') ?>" alt="" class="img-fluid">
					  </div>
					</div>
					<br><br>
				</div>
				<div class="col-md-5" style="text-align:center">
					<img src="<?= base_url('assets/img/bawacat.png') ?>" alt="mascot" width="210px;">
				</div>	
			</div>
			<br><br>
			
			<h1 align="center">OUR SERVICE</h1>
			<hr>
			<div class="row">
				<div class="col-md-4">
					<center><img src="<?= base_url('assets/img/features-2.png') ?>" alt="features-3" class="service"></center>
					<h5 align="center" class="service-title"><b>Jaminan Harga Termurah</b></h5>
					<p align="center">Kami menjamin toko kami dengan harga yang paling murah, apabila ada yang lebih murah, kami ganti selisihnya. (syarat dan ketentuan berlaku)</p>
				</div>
				<div class="col-md-4">
					<center><img src="<?= base_url('assets/img/features-1.png') ?>" alt="" class="service"></center>
					<h5 align="center" class="service-title"><b>Produk Terlengkap</b></h5>
					<p align="center">Segala jenis cat dan keperluan pengecatan anda ada disini, mulai dari thinner, kuas, amplas dan sebagainya</p>
				
				</div>
				<div class="col-md-4">
					<center><img src="<?= base_url('assets/img/features-3.png') ?>" alt="features-3" class="service"></center>
					<h5 align="center" class="service-title"><b>Banyak Pilihan Warna</b></h5>
					<p align="center">Warna apapun yang anda inginkan ada disini, karena kami juga memiliki mesin tinting untuk membuat cat dengan warna yang anda inginkan</p>
				
				</div>
				<div class="col-md-4">
					<center><img src="<?= base_url('assets/img/features-4.png') ?>" alt="features-3" class="service"></center>
					<h5 align="center" class="service-title"><b>Jasa Pengecekan Tembok</b></h5>
					<p align="center">Menyediakan layanan jasa pengecekan kesiapan atau kesehatan tembok sebelum melakukan pengecatan, GRATIS tidak dipungut biaya (Khusus area denpasar)</p>
				</div>
				<div class="col-md-4" class="service-title">
					<center><img src="<?= base_url('assets/img/features-5.png') ?>" alt="features-3" class="service"></center>
					<h5 align="center" class="service-title"><b>Melayani Segala Partai Pembelian</b></h5>
					<p align="center">Pembelian dalam jumlah besar hingga lebih dari 10 pail, atau pembelian hanya 1 kaleng, kami akan tetap melayani anda dengan sebaik-baiknya</p>
				</div>
				<div class="col-md-4">
					<center><img src="<?= base_url('assets/img/features-6.png') ?>" alt="features-3" class="service"></center>
					<h5 align="center" class="service-title"><b>Delivery Service</b></h5>
					<p align="center">Kami juga melayani jasa pengiriman barang ke lokasi anda dengan ketentuan yang berlaku</p>
				</div>
			</div>
			<br><br>
			<?php $barangs = $this->home_model->get_barang_unggulan(8); ?>

			<h2 align="center" class="section-title">PRODUK UNGGULAN KAMI</h2>
			<hr>
			<p class="unggulan">"Produk unggulan kami memiliki kualitas yang lebih baik dari produk lain"</p>
			<br>
			<div class="row justify-content-center">
				<?php foreach($barangs as $barang) { ?>
				<div class="col-md-3 centered">
					<a href="<?= base_url('product/view/').$barang['kd_merk'] ?>">
						<div class="text-product">See Details &nbsp; <i class="fa fa-eye"></i>
							<div class="img-product" style="background: url('upload/produk/thumbs/<?= $barang['foto']?>') no-repeat; background-position: center; background-size: cover; ">
							</div>
						</div>
						<p class="product-name"><?= $barang['nm_barang'] ?> </p>	
						<p class="kat-name"><?= $barang['desk_kategori'] ?></p>
					</a>
				</div>
				<?php } ?>
				
			</div>
			<br>
			<div class="row justify-content-center">
				<div class="col-md-4">
					<a href="<?= base_url('product/kategori/45') ?>" class="btn btn-warning btn-block btn-lg">Lihat Semua Produk</a>
				</div>
			</div>
			<hr>

			<br><br>
			<h1 align="center">ARTIKEL TERBARU</h1>
			<hr>
			<div class="row">
				<?php $articles = $this->home_model->get_new_artikel(3); 
				foreach($articles as $artikel) { ?>
				<div class="col-md-4">
					<div class="body-article">
						<a href="<?= base_url('artikel/read/').$artikel['link'] ?>">
							<div class="img-article" style="background: url('upload/artikel/thumbs/<?= $artikel['img'] ?>') no-repeat; background-position: center; background-size: cover;"></div>
							<div class="judul-article">
								<b><?= $artikel['judul'] ?></b>
							</div>
							<hr>
						</a> 
						<div class="desc-article">
							<p>Published : <?= $artikel['tanggal'] ?> <br> Kategori : <?= $artikel['nama_kategori'] ?></p>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			<br>
			<div class="row justify-content-center">
				<div class="col-md-4">
					<a href="<?= base_url('artikel') ?>" class="btn btn-warning btn-block btn-lg">Tampilkan Lebih Banyak</a>
				</div>
			</div>

			<br><br>
			<h1 align="center">ARTIKEL TERPOPULER</h1>
			<hr>
			<div class="row">
				<?php $popularArticles = $this->home_model->get_popular_artikel(); 
				foreach($popularArticles as $article) { ?>
				<div class="col-md-4">
					<div class="body-article">
						<a href="<?= base_url('artikel/read/').$article['link'] ?>">
							<div class="img-article" style="background: url('upload/artikel/thumbs/<?= $article['img'] ?>') no-repeat; background-position: center; background-size: cover;"></div>
							<div class="judul-article">
								<b><?= $article['judul'] ?></b>
							</div>
							<hr>
						</a> 
						<div class="desc-article">
							<p>Published : <?= $article['tanggal'] ?> <br> Kategori : <?= $article['nama_kategori'] ?></p>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>

			<br>
			<div class="row justify-content-center">
				<div class="col-md-4">
					<a href="<?= base_url('artikel') ?>" class="btn btn-warning btn-block btn-lg">Tampilkan Lebih Banyak</a>
				</div>
			</div>
			<hr>
			<br>

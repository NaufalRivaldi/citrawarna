<!-- LOAD HEADER -->
<?php $this->load->view('frontend/layout/header'); ?>
	<!-- LOAD NAVBAR -->
	<?php $this->load->view('frontend/layout/navbar'); ?>
	
	<img src="<?= base_url('upload/slideshow/Beauty.jpg') ?>" alt="" class="img-fluid img-position" id="img-position">

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
			<?php $namaFile = "weldon.jpg"; ?>

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
			<h1 align="center">ARTIKEL TERBARU</h1>
			<hr>
			<div class="row">
				<div class="col-md-4">
					<div class="body-article">
						<a href="">
							<div class="img-article" style="background: url('upload/artikel/cat-cwa.jpg') no-repeat; background-position: center; background-size: cover;"></div>
							<div class="judul-article">
								<b>Merek Cat Tembok  </b>
							</div>
							<hr>
						</a> 
						<div class="desc-article">
							<p>Published : 10-05-2018 - Kategori : Tips & Trick</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="body-article">
						<a href="">
							<div class="img-article" style="background: url('upload/artikel/cat-cwa.jpg') no-repeat; background-position: center; background-size: cover;"></div>
							<div class="judul-article">
								<b>Merek Cat Tembok Berdasarkan Kebutuhan</b>
							</div>
							<hr>
						</a> 
						<div class="desc-article">
							<p>Published : 10-05-2018 - Kategori : Tips & Trick</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="body-article">
						<a href="">
							<div class="img-article" style="background: url('upload/artikel/cat-cwa.jpg') no-repeat; background-position: center; background-size: cover;"></div>
							<div class="judul-article">
								<b>Merek Cat Tembok Berdasarkan Kebutuhan Berdasarkan Kebutuhan</b>
							</div>
							<hr>
						</a> 
						<div class="desc-article">
							<p>Published : 10-05-2018 - Kategori : Tips & Trick</p>
						</div>
					</div>
				</div>
			</div>
			<br><br>

			<!-- LOKASI SECTION -->
			<h1 align="center">LOKASI KAMI</h1>
			<hr>
			<p class="unggulan">"Temukan toko cat Citra Warna terdekat anda"</p>
			
			<br>
			<div class="row">
				<div class="col-md-4">
					<strong>Citra Warna Imam Bonjol 1</strong>
					<br>
					Jl Imam Bonjol 257 AB, Denpasar. <br>Tel : (0361)489306, 489307, 085102091930
					<hr>
				</div>
				<div class="col-md-4">
					<strong>Citra Warna Imam Bonjol 2</strong>
					<br>
					Jl Imam Bonjol 350, Denpasar. <br>Tel : (0361)485084, 485035, 085100103423
					<hr>
				</div>
				<div class="col-md-4">
					<strong>Citra Warna Buluh Indah</strong>
					<br>
					Jl Buluh Indah 22 AB, Denpasar. <br>Tel : 085100104115, 085100815759
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<strong>Citra Warna Canggu</strong>
					<br>
					Jl Raya Canggu, Ruko Anyar Kencana no 9, Kerobokan. Tel : (0361)9002586, 085101284515
					<hr>
				</div>
				<div class="col-md-4">
					<strong>Citra Warna Teuku Umar Barat</strong>
					<br>
					Jl Teuku Umar Barat 343, Kerobokan. <br>Tel : (0361)735115
					<hr>
				</div>
				<div class="col-md-4">
					<strong>Citra Warna Sunset Road</strong>
					<br>
					Jl Sunset Road, Ruko Sunset Plaza no 16, Kuta.
					<br>Tel : (0361)8476780, 085101181956
					<hr>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<strong>Citra Warna Gatot Subroto</strong>
					<br>
					Jl Gatot Subroto 155 A, Denpasar. Tel : (0361)240941, 240942, 085100341549
					<hr>
				</div>
				<div class="col-md-4">
					<strong>Citra Warna Ubud</strong>
					<br>
					Jl Tjokorda Rai Pudak, Br Yangloni, Desa Peliatan, Gianyar. <br> Tel (0361)978220, 082339649722
					<hr>
				</div>
				<div class="col-md-4">
					<strong>Citra Warna Mumbul Nusa Dua</strong>
					<br>
					Jl By Pass Ngurah Rai (Seberang Krematorium Kertha Semadi). <br> Tel : 0895334122805
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<strong>Citra Warna Mahendradatha</strong>
					<br>
					Jl Mahendradatha no 89X, Denpasar. <br> Tel 0895606305726
					<hr>
				</div>
				<div class="col-md-4">
					<strong>Citra Warna Semabaung Gianyar </strong>
					<br>
					Jl Mahendradatta no 15 blok 1, Semabaung - Gianyar. Tel : 085 337 259 006
					<hr>
				</div>
				<div class="col-md-4">
					<strong>Citra Warna Kediri Tabanan</strong>
					<br>
					Jl By Pass Ir. Soekarno No. 90x, Kediri Tabanan. Tel : 081237816322
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<strong>Citra Warna Panjer </strong>
					<br>
					Jl Tukad Yeh Aya No. 127 X/A. Tel : 081237821646
					<hr>
				</div>
				<div class="col-md-4">
					<strong>Citra Warna Dalung</strong>
						<br>
						Jl Raya Padang Luwih Pertokoan Sutra Mas, Kav A8. Tel : 0361428939, 082235015265, 0895410917930
					<hr>
				</div>
				<div class="col-md-4">
					<strong>Citra Warna Singaraja</strong>
					<br>
					Jl A Yani no. 194A Kelurahan Banyuasri - Singaraja Tel : 081237691264
					<hr>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<br>
					<script src="http://maps.google.com/maps/api/js?key=AIzaSyC4xI03S7A49UtfJRr8cyE7IMptn3XTPKw" 
	          type="text/javascript"></script>
					<div id="map" style="width: 100%; height: 250px;"></div>
					<script type="text/javascript">
					    var locations = [
					      ['Citra Warna Imam Bonjol 1', -8.6831194,115.1961952, 1],
					      ['Citra Warna Imam Bonjol 2', -8.6980697,115.1855397, 2],
					      ['Citra Warna Buluh Indah', -8.6500855,115.1953654, 3],
					      ['Citra Warna Canggu', -8.6464189,115.1656472, 4],
					      ['Citra Warna Teuku Umar Barat', -8.6720333,115.1731858, 5],
					      ['Citra Warna Sunset Road', -8.696235,115.1758945, 6],
					      ['Citra Warna Gatot Subroto', -8.6357431,115.2299356, 7],
					      ['Citra Warna Ubud', -8.5258281,115.271246, 8],
					      ['Citra Warna Nusa Dua', -8.784843, 115.195003, 9],
					      ['Citra Warna Mahendradatta', -8.664949, 115.189706, 10],
					      ['Citra Warna Semabaung', -8.534997, 115.307913, 11],
					      ['Citra Warna Dalung', -8.635750, 115.175192],
					      ['Citra Warna Panjer', -8.677053, 115.239976],
					      ['Citra Warna Kediri Tabanan', -8.549910, 115.123622]
					    ];

					    var map = new google.maps.Map(document.getElementById('map'), {
					      zoom: 12,
					      center: new google.maps.LatLng(-8.6595943,115.2019129),
					      mapTypeId: google.maps.MapTypeId.ROADMAP
					    });

					    var infowindow = new google.maps.InfoWindow();

					    var marker, i;

					    for (i = 0; i < locations.length; i++) {  
					      marker = new google.maps.Marker({
					        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
					        map: map
					      });

					      google.maps.event.addListener(marker, 'click', (function(marker, i) {
					        return function() {
					          infowindow.setContent(locations[i][0]);
					          infowindow.open(map, marker);
					        }
					      })(marker, i));
					    }
					</script>
					
				</div>
			</div>
			<br><br>
			
			<h1 align="center">HUBUNGI KAMI</h1>
			<hr>
			<br>
		
		</div>	
	</div>
	<br>
	

	<script src="<?= base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery-ui.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/custom.js') ?>"></script>
</body>
</html>
<!-- LOAD HEADER -->
<?php $this->load->view('frontend/layout/header'); ?>
	<!-- LOAD NAVBAR -->
	<?php $this->load->view('frontend/layout/navbar'); ?>

	<div class="container-fluid">
		<br>
		<div class="container body-artikel">
			<div class="row justify-content-center">
				<h1><?= $artikel['judul'] ?></h1>
			</div>
			<div class="row justify-content-center">
				Post : <?= $artikel['tanggal'] ?>. Kategori : <?= $artikel['nama_kategori'] ?>
				<img src="<?= base_url('upload/artikel/').$artikel['img'] ?>" alt="<?= $artikel['img'] ?>" class="img-artikel">
			</div>
			<div class="row">
				<div class="isi-artikel">
					<?= $artikel['isi'] ?>
					<br>
					<?php //share facebook button 
					$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http"). "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

					<iframe src="https://www.facebook.com/plugins/share_button.php?href=<?= $actual_link ?>&layout=button_count&size=small&mobile_iframe=true&appId=140351823309332&width=81&height=20" width="81" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
				</div>
			</div>

			<div class="row">
				<div class="isi-artikel">
					<div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.0&appId=140351823309332&autoLogAppEvents=1';
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>

					<div class="fb-comments" data-href="<?= $actual_link ?>" data-numposts="5"></div>
				</div>
			</div>
			
			<div class="row">
				<h2 style="margin:8px 0px 18px 18px">Baca Juga</h2>
			</div>
			
			<div class="row">
				
				<?php $articles = $this->home_model->get_home_artikel(3);

				foreach($articles as $artikel) { ?>
				<div class="col-md-4">
					<div class="body-article">
						<a href="<?= base_url('artikel/read/').$artikel['link'] ?>">
							<div class="img-article" style="background: url('<?= base_url() ?>/upload/artikel/thumbs/<?= $artikel['img'] ?>') no-repeat; background-position: center; background-size: cover;"></div>
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
		</div>
	</div>

	
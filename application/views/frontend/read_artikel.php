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
				<img src="<?= base_url('upload/artikel/').$artikel['img'] ?>" alt="<?= $artikel['img'] ?>" class="img-artikel">
			</div>
			<div class="row">
				<div class="isi-artikel">
					<?= $artikel['isi'] ?>
				</div>
			</div>
			<div class="row">
				<h2 style="margin:8px 0px 18px 18px">Baca Juga</h2>
			</div>
			
			<div class="row">
				
				<?php $articles = $this->home_model->get_home_artikel();

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

	
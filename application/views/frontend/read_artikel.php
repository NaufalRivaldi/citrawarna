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
		</div>
	</div>

	<script src="<?= base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery-ui.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/custom.js') ?>"></script>
</body>
</html>
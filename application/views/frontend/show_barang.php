<!-- LOAD HEADER -->
<?php $this->load->view('frontend/layout/header'); ?>
	<!-- LOAD NAVBAR -->
	<?php $this->load->view('frontend/layout/navbar'); ?>

	<div class="container-fluid">
		<br>
		<div class="container body-barang">
			
			<div class="row">
				<div class="col-md-3">
					<img src="<?= base_url('upload/produk/').$barang['foto'] ?>" alt="$barang['foto']" class="img-fluid img-barang">
				</div>
				<div class="col-md-9">
					<div class="judul-barang">
						<h1><?= $barang['nm_barang'] ?></h1><br>
						Kategori : <?= $barang['desk_kategori']." " .$barang['nm_jenis'] ?>
					</div>
					<div class="deskripsi-barang">
						"<?= $barang['deskripsi'] ?>"
					</div>
					<?php $last_update = $this->home_model->get_setting('last_raw_update'); ?>
					<div class="keterangan-barang">
						<p><b>*Data stok dan harga update per tanggal <?= $last_update['value'] ?></b></p>
						<p><b>*klik nama barang untuk melihat stok di masing-masing cabang</b></p>
					</div>
					
					
				</div>
			</div>
			<br><br>
			<div class="row">
				<table class="table table-sm table-striped table-hover" id="example">
					<tr>
						<thead>
							<th>No</th>
							<th>Kode</th>
							<th>Nama Barang</th>
							<th>Harga</th>
							<th>Keterangan</th>
						</thead>
					</tr>
					<?php $no=1; foreach($raw as $row) {  ?>
					<tr class="<?=($row['jumlah']>0 ? '' : 'not-active') ?>">
						<td><?= $no++ ?></td>
						<td><a href="#"><?= $row['kd_barang'] ?></a></td>
						<td>
							<a href="<?= base_url('produk/view/'.strtolower(str_replace(" ", "-", $row['nm_barang']))) ?>"><?= $row['nm_barang'] ?></a>
						</td>
						<td><a href="#"><?= $row['harga'] ?></a></td>
						<td><a href="#"><?= ($row['jumlah']>0 ? "Ada" : "Kosong") ?></a></td>
					</tr>
					<?php } ?>
		
				</table>
	
			</div>
			
			
			
		</div>
	</div>

	<script src="<?= base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery-ui.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/custom.js') ?>"></script>
</body>
</html>
<br>
	<div class="container body-artikel">	
		<h1>PILIH KATEGORI PRODUK</h1>
		<br>	
		<div class="row">
			<?php $kategori = $this->db->order_by('parent_of', 'asc')->get('kat_barang')->result_array(); 
				foreach($kategori as $list) {
			?>
			<div class="col-md-4">
				<a href="<?= base_url('product/kategori/'.$list['kd_kategori']) ?>">
					<img src="<?= base_url('assets/img/unggulan.jpg') ?>" alt="" class="img-fluid">
					<h2><?= $list['desk_kategori'] ?></h2>
				</a>
			</div>
		<?php } ?>
			
		</div>
	</div>

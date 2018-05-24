<br>
	<div class="container body-list">	
		<h1>PILIH KATEGORI PRODUK</h1>
		<br>	

		<div class="row">
			<div class="col-md-12">
				<div class="list-kategori">
					<ul>
					<?php $kategori = $this->db->order_by('parent_of', 'asc')->get('kat_barang')->result_array(); 
						foreach($kategori as $list) { ?>
						<li><a href="<?= base_url('product/kategori/'.$list['kd_kategori']) ?>"><i class="fa fa-angle-double-right"></i> <?= $list['desk_kategori'] ?></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
	
		</div>
	</div>

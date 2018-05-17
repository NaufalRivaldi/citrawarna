
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
				<?php if($detail==0) { ?>
					<table class="table table-sm table-striped table-hover" id="example">
					<tr>
						<thead>
							<th>No</th>
							<th>Kode</th>
							<th>Nama Barang</th>
							<th>Harga</th>
							<th>Stock</th>
						</thead>
					</tr>
					<?php $no=1; foreach($raw as $row) {  ?>
					<tr class="<?=($row['jumlah']>0 ? '' : 'not-active') ?>">
						<td><?= $no++ ?></td>
						<td><a href="<?= base_url('product/detail/'.strtolower(str_replace(" ", "_", $row['nm_barang']))) ?>"><?= $row['kd_barang'] ?></a></td>
						<td>
							<a href="<?= base_url('product/detail/'.strtolower(str_replace(" ", "_", $row['nm_barang']))) ?>"><?= $row['nm_barang'] ?></a>
						</td>
						<td><b><?= $row['harga'] ?></b></td>
						<td style="<?= ($row['jumlah']>0 ? "color:green" : "color:red") ?>"><?= ($row['jumlah']>0 ? "Ada" : "Kosong") ?></td>
					</tr>
					<?php } ?>
		
					</table>
				<?php } else { ?>
			
					<table class="table table-sm table-striped table-hover" id="example">
					<tr>
						<thead>
							<th>No</th>
							<th>Kode</th>
							<th>Nama Barang</th>
							<th>Harga</th>
							<th>Stock</th>
							<th>Lokasi</th>
						</thead>
					</tr>
					<?php $no=1; foreach($raw as $row) { 
					//kalau cabang nambah, tulis disini 
						$lokasi = '';
							switch ($row['kd_gudang']) {
								case 'CW1':
									$lokasi = " Citra Warna Imam Bonjol 1";
									break;
								case 'CW2':
									$lokasi = " Citra Warna Imam Bonjol 2";
									break;
								case 'CW3':
									$lokasi = " Citra Warna Buluh Indah";
									break;
								case 'CW4':
									$lokasi = " Citra Warna Canggu";
									break;
								case 'CW5':
									$lokasi = " Citra Warna Teuku Umar";
									break;
								case 'CW6' : 
									$lokasi = " Citra Warna Sunset Road";
									break;
								case 'CW7' : 
									$lokasi = " Citra Warna Gatot Subroto  ";
									break;
								case 'CW8' : 
									$lokasi = " Citra Warna Ubud ";
									break;
								case 'CW9' : 
									$lokasi = " Citra Warna Mumbul Nusa Dua ";
									break;
								case 'CA0' : 
									$lokasi = " Citra Warna Mahendradata ";
									break;
								case 'CA1' : 
									$lokasi = " Citra Warna Semabaung Gianyar  ";
									break;
								case 'CA2' : 
									$lokasi = " Citra Warna Kediri Tabanan";
									break;
								case 'CA3' : 
									$lokasi = " Citra Warna Panjer";
									break;
								case 'CA4' : 
									$lokasi = " Citra Warna Dalung";
									break;
								case 'CA5' : 
									$lokasi = " Citra Warna Singaraja";
									break;

							}
						?>
					<tr class="<?=($row['jumlah']>0 ? '' : 'not-active') ?>">
						<td><?= $no++ ?></td>
						<td><a href="<?= base_url('product/detail/'.strtolower(str_replace(" ", "_", $row['nm_barang']))) ?>"><?= $row['kd_barang'] ?></a></td>
						<td>
							<a href="<?= base_url('product/detail/'.strtolower(str_replace(" ", "_", $row['nm_barang']))) ?>"><?= $row['nm_barang'] ?></a>
						</td>
						<td><b><?= $row['harga'] ?></b></td>
						<td style="<?= ($row['jumlah']>0 ? "color:green" : "color:red") ?>"><?= ($row['jumlah']>0 ? "Ada" : "Kosong") ?></td>
						<td><?=  $lokasi ?></td>
					</tr>
					<?php } ?>
		
				</table>
				<?php } ?>
	
			</div>
			
			
			
		</div>
	</div>
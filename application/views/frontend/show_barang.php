
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
						Kategori : <a href="<?= base_url('product/kategori/'.$barang['kd_kategori']) ?>"><?= $barang['desk_kategori'] ?></a> <?= $barang['nm_jenis'] ?>
					</div>
					<div class="deskripsi-barang">
						"<?= $barang['deskripsi'] ?>"
					</div>

					<?php //share facebook button 
					$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http"). "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

					<iframe src="https://www.facebook.com/plugins/share_button.php?href=<?= $actual_link ?>&layout=button_count&size=small&mobile_iframe=true&appId=140351823309332&width=81&height=20" width="81" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

					
					<?php $last_update = $this->home_model->get_setting('last_raw_update'); ?>
					<div class="keterangan-barang">
						<p><b>*Data stok dan harga update per tanggal <?= $last_update['value'] ?></b></p>
						<p><b>*Stock & Harga dapat berubah sewaktu-waktu</b></p>
						<p><b>*klik nama barang untuk melihat stok di masing-masing cabang</b></p>
					</div>
				</div>
			</div>
			<br><br>
			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-product" role="tab" aria-controls="nav-product" aria-selected="true">Product</a>
					<?php 
						if($teknis->num_rows() != 0){ 
						$data_teknis = $teknis->row_array();
						$tekniss = true;
					?>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-teknis" role="tab" aria-controls="nav-teknis" aria-selected="false">Teknis</a>
					<?php } else { $tekniss=false; } ?>
					<!-- <a class="nav-item nav-link" id="nav-warna-tab" data-toggle="tab" href="#nav-warna" role="tab" aria-controls="nav-warna" aria-selected="false">Warna</a> -->
				</div>
			</nav>

			<div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-product"  role="tabpanel" aria-labelledby="nav-product-tab" >
						<br>
						<div class="row">
							<div class="col-md-12 font-product">
							
							<?php if($detail==0) { ?>
								<table class="table " id="myTable">
									<thead class="thead-light">
										<tr>
											<th>No</th>
											<th>Kode</th>
											<th>Nama Barang</th>
											<th>Harga</th>
											<th>Stock</th>
										</tr>
									</thead>
									<tbody>
									<?php $no=1; foreach($raw as $row) {  
										//nama barang yang aneh2 harus direplace lalu dikembalikan lagi untuk where
										$url = $row['nm_barang'];
										if(strpos($url, '"')){
											$url = str_replace('"', "~", $url);
										} else if(strpos($url, "(")){
											$url = str_replace(str_split('()'), str_split('<>'), $url);
										} else if(strpos($url, "/")){
											$url = str_replace('/', "^", $url);
										}

										?>
										<tr class="<?=($row['jumlah']>0 ? '' : 'not-active') ?>">
											<td><?= $no++ ?></td>
											<td><a href="<?= base_url('product/detail/'.strtolower(str_replace(" ", "_", $url))) ?>"><?= $row['kd_barang'] ?></a></td>
											<td>
												<a href="<?= base_url('product/detail/'.strtolower(str_replace(" ", "_", $url))) ?>"><?= $row['nm_barang'] ?></a>
											</td>
											<td><b>Rp. <?= number_format($row['harga']) ?></b></td>
											<td style="<?= ($row['jumlah']>0 ? "color:green" : "color:red") ?>"><?= ($row['jumlah']>0 ? "Ada" : "Kosong") ?></td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
							<?php } else { ?>
								<table class="table table-sm table-striped table-hover" id="myTable">
									<thead>
										<tr>
											<th>No</th>
											<th>Kode</th>
											<th>Nama Barang</th>
											<th>Harga</th>
											<th>Stock</th>
											<th>Lokasi</th>
										</tr>
									</thead>
									<tbody>
									<?php $no=1; foreach($raw as $row) { 
										$lokasi = $this->home_model->cabang_name($row['kd_gudang']);
										$url = $row['nm_barang'];
										if(strpos($url, '"')){
											$url = str_replace('"', "~", $url);
										} 

										?>
										<tr class="<?=($row['jumlah']>0 ? '' : 'not-active') ?>">
											<td><?= $no++ ?></td>
											<td><a href="<?= base_url('product/detail/'.strtolower(str_replace(" ", "_", $url))) ?>"><?= $row['kd_barang'] ?></a></td>
											<td>
												<a href="<?= base_url('product/detail/'.strtolower(str_replace(" ", "_", $url))) ?>"><?= $row['nm_barang'] ?></a>
											</td>
											<td><b>Rp. <?= number_format($row['harga']) ?></b></td>
											<td align="center" style="<?= ($row['jumlah']>0 ? "color:green" : "color:red") ?>"><b><?= ($row['jumlah']>0 ? $row['jumlah']: "Kosong") ?></b></td>
											<td><?=  $lokasi ?></td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
							<?php } ?>
							</div>			
						</div>						
				</div>
				<?php if($tekniss == true){ ?>
				<div class="tab-pane fade" id="nav-teknis" role="tabpanel" aria-labelledby="nav-teknis-tab">
					<br>
					<?php echo $data_teknis['detail_teks'] ?>
				</div>
				<?php } ?>
				<!--
				<div class="tab-pane fade" id="nav-warna" role="tabpanel" aria-labelledby="nav-warna-tab">
					<br>
					SHOW WARNA
					<hr>
				</div> -->
			</div>

			
		</div>
	</div>
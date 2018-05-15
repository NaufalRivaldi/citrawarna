			<br><br>
			<h1 align="center">LOKASI KAMI</h1>
			<hr>
			<p class="unggulan">"Temukan toko cat Citra Warna terdekat anda"</p>
			
			<br>
			<div class="row">
				<?php $cabang = $this->home_model->get_cabang(); 
					foreach($cabang as $toko) {	?>
					<div class="col-md-4">
						<strong><?= $toko['nm_cbg'] ?></strong>
						<br>
						<?= $toko['alamat'] ?> <br> Telp : <?= $toko['telp'] ?>
						<hr>
					</div>
				<?php } ?>
			</div>
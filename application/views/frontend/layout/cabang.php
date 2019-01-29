		
			<br><br>
			<h1 align="center" id="lokasi">LOKASI KAMI</h1>
			<hr>
			<p class="unggulan">"Temukan toko cat Citra Warna terdekat anda"</p>
			
			<br>
			<!-- cabang pc -->
			<div class="cabang_pc">
				<?php $cabang = $this->home_model->get_cabang(); $no1 = 1; $no2 = 3;
					$last_cabang = $this->home_model->getLast_cabang();
					foreach($cabang as $toko) {	?>
						<?php if ($toko['id_cabang'] == $no1): ?>
							<div class="row">
						<?php $no1 += 3; endif ?>
						<div class="col-md-4">
							<strong><?= $toko['nm_cbg'] ?></strong>
							<br>
							<?= $toko['alamat'] ?> <br> Telp : <?= $toko['telp'] ?>
						</div>
						<?php if ($toko['id_cabang'] == $no2): ?>
							<div class="col-md-12">
								<hr>
							</div>
							</div>
						<?php $no2 += 3; endif ?>
						<?php if ($toko['id_cabang'] == $last_cabang->id_cabang): ?>
							</div>
						<?php endif ?>
				<?php } ?>
			</div>

			<!-- cabang mobile -->
			<div class="cabang_mobile">
				<div class="container">
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
				</div>
			</div>
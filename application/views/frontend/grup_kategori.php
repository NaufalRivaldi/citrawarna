<br>
	<div class="container body-list">	
		<h1>Kategori <?= $kategori['nama_kategori'] ?> </h1>
		<br>
		<div class="row">
			<?php 
			if($artikels){
				foreach($artikels as $artikel) { ?>
				<div class="col-md-4">
					<div class="body-article">
						<a href="<?= base_url('artikel/read/').$artikel['link'] ?>">
							<div class="img-article" style="background: url('<?= base_url() ?>upload/artikel/thumbs/<?= $artikel['img'] ?>') no-repeat; background-position: center; background-size: cover;"></div>
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
			<?php } else { ?>
			<h3>Tidak ada data</h3>
		<?php } ?>
		</div>
	</div>


<div class="container-fluid">
		<br>
		<div class="container body-artikel">	
		<h1>DATA ARTIKEL</h1>
		<br>	
		<div class="row">
			<?php 
				foreach($artikels as $artikel) { ?>
				<div class="col-md-4">
					<div class="body-article">
						<a href="<?= base_url('artikel/read/').$artikel['link'] ?>">
							<div class="img-article" style="background: url('upload/artikel/thumbs/<?= $artikel['img'] ?>') no-repeat; background-position: center; background-size: cover;"></div>
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
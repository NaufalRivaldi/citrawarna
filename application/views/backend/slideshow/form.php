<h4><?= $title ?> </h4>
<hr>
<form action="<?= base_url($form_action)?>" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-6">
			Tanggal : 
			<input type="text" value="<?= date('Y-m-d') ?>" name="tanggal" class="form-control">
		</div>
		<div class="col-md-6">
			z-index :
			<input type="number" name="z-index" class="form-control" value="<?= $input['z-index'] ?>">
		</div>
		<div class="col-md-6">
			Judul
			<input type="text" name="judul" class="form-control" value="<?= $input['judul'] ?>">
		</div>
		<div class="col-md-6">
			Url Target (example : produk/envi)
			<input type="text" name="url" class="form-control" value="<?= $input['url'] ?>">
		</div>
		<div class="col-md-6">
			Img
			<input type="file" name="img" class="form-control">
		</div>
		
		<div class="col-md-12">
			<br>
			<input type="submit" value="Simpan" class="btn btn-primary btn-block">
		</div>
		
	</div>
</form>
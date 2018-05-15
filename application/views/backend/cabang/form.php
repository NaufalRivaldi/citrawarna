<h4><?= $title ?></h4>
<hr>
<form action="<?= base_url($form_action) ?>" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-12">
			Nama Cabang :
			<input type="text" class="form-control" name="nm_cbg" value="<?= $input['nm_cbg'] ?>">
		</div>
		<div class="col-md-12">
			Alamat :
			<input type="text" class="form-control" name="alamat" value="<?= $input['alamat'] ?>">
		</div>
		<div class="col-md-12">
			telp (apabila lebih dari 1 beri tanda koma (,) ) :
			<input type="text" class="form-control" name="telp" value="<?= $input['telp'] ?>">
		</div>
		<div class="col-md-12">
			<br>
			<input type="submit" class="btn btn-primary" value="Simpan">
		</div>
	</div>
</form>
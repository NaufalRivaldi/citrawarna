<h4><?= $title ?></h4>
<hr>
<form action="<?= base_url($form_action) ?>" method="post" enctype="multipart/form-data">
    <!-- hidden -->
    <input type="hidden" name="id_cabang" value="<?= $data->id_cabang ?>">

	<div class="row">
		<div class="col-md-12">
			Nama Cabang :
			<input type="text" class="form-control" name="nm_cbg" value="<?= $data->nm_cbg ?>" required>
		</div>
		<div class="col-md-12">
			Alamat :
			<input type="text" class="form-control" name="alamat" value="<?= $data->alamat ?>" required> 
		</div>
		<div class="col-md-12">
			telp (apabila lebih dari 1 beri tanda koma (,) ) :
			<input type="text" class="form-control" name="telp" value="<?= $data->telp ?>" required>
		</div>
		<div class="col-md-12">
			<br>
			<input type="submit" class="btn btn-primary" value="Simpan">
		</div>
	</div>
</form>
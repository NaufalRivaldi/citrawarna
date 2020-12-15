
<h4><?= $title ?></h4>
<hr>
<form action="<?= base_url($form_action) ?>" method="post" enctype="multipart/form-data">
	<div class="row">	
		<input type="hidden" name="tanggal" value="<?= date('Y-m-d H:i:s') ?>">
		<div class="col-md-6">
			Judul Artikel : 
			<input type="text" class="form-control" name="judul" value="<?= $input['judul'] ?>" required>
		</div>
		<div class="col-md-6">
			Keyword : 
			<input type="text" class="form-control" name="keyword" value="<?= $input['keyword'] ?>" required>
		</div>
		<div class="col-md-12">
			Excerpt (Kutipan) 
			<textarea name="excerpt" class="form-control" required><?= $input['excerpt'] ?></textarea>
		</div>
		<div class="col-md-12">
			Isi Artikel 
			<textarea name="isi" class="form-control" required><?= $input['isi'] ?></textarea>
		</div>
		<div class="col-md-6">
			Kategori Artikel 
			<?= form_dropdown('id_kategori', getDropdownList('kategori', ['id_kategori', 'nama_kategori']), $input['id_kategori'], 'class="form-control"') ?>
		</div>
		<div class="col-md-6">
			Cover 
			<input type="file" class="form-control-file" name="img">
		</div>

		<div class="col-md-12" align="right">
		<br>
			<input type="checkbox" name="stat" checked="true" value="1"> Langsung tampilkan artikel
			<input type="submit" class="btn btn-lg" value="Simpan">
		</div>	
	</div>
</form>
<br><br><br>
<script>
	CKEDITOR.replace( 'isi');
	

</script>
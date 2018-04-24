<h4>Tambah Data Artikel</h4>
<hr>
<form action="<?= base_url('add/artikel') ?>" method="post" enctype="multipart/form-data">
	<div class="row">	
		<div class="col-md-6">
			Judul Artikel : 
			<input type="text" class="form-control" name="judul" value="<?= $input['judul'] ?>">
		</div>
		<div class="col-md-6">
			Keyword : 
			<input type="text" class="form-control" name="keyword" value="<?= $input['keyword'] ?>">
		</div>
		<div class="col-md-12">
			Excerpt (Kutipan) 
			<textarea name="excerpt" class="form-control"><?= $input['excerpt'] ?></textarea>
		</div>
		<div class="col-md-12">
			Isi Artikel 
			<textarea name="isi" class="form-control"><?= $input['isi'] ?></textarea>
		</div>
		<div class="col-md-6">
			Kategori Artikel 
			<?= form_dropdown('id_kategori', getDropdownList('kategori', ['id_kategori', 'nama_kategori']), $input['id_kategori'], 'class="form-control"') ?>
		</div>
		<div class="col-md-6">
			Cover 
			<input type="file" class="form-control" name="keyword">
		</div>

		<div class="col-md-12" align="right">
		<br>
			<input type="checkbox" value="1" name="stat" checked="true"> Langsung tampilkan artikel
			<input type="submit" class="btn btn-lg" value="Simpan" name="simpan">
		</div>	
	</div>
</form>
<br><br><br>

<script>
	 CKEDITOR.replace( 'isi' );

</script>
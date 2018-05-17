<h4><?= $title ?></h4>
<hr>
<form action="<?= base_url($form_action) ?>" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-6">
			Kode Merek : (jika paladin gold or silver gunakan PLDN_G(gold) or PLDN_V(silver))
			<input type="text" class="form-control" name="kd_merk" value="<?= $input['kd_merk'] ?>">
		</div>
		<div class="col-md-6">
			Nama Barang :
			<input type="text" class="form-control" name="nm_barang" value="<?= $input['nm_barang'] ?>">
		</div>
		<div class="col-md-6">
			Kategori :
			<?= form_dropdown('kd_kategori', getDropdownList('kat_barang', ['kd_kategori', 'desk_kategori']), $input['kd_kategori'], 'class="form-control"') ?>
		</div>
		<div class="col-md-6">
			Jenis (kosongkan jika tidak ada) :
			<?= form_dropdown('kd_jenis', getDropdownList('jenis', ['kd_jenis', 'nm_jenis']), $input['kd_jenis'], 'class="form-control"') ?>
		</div>
		<div class="col-md-12">
			Deskripsi Produk :
			<textarea name="deskripsi" class="form-control"><?= $input['deskripsi'] ?></textarea>
		</div>
		<div class="col-md-6">
			Tag :
			<input type="text" name="tag" class="form-control" value="<?= $input['tag'] ?>">
		</div>
		<div class="col-md-6">
			No Index :
			<input type="text" name="no_index" class="form-control" value="<?= $input['no_index'] ?>">
		</div>
		<div class="col-md-6">
			Produk Unggulan ?
			<select name="unggulan" class="form-control">
				<option value="">- Pilih -</option>
				<option value="y" <?= ($input['unggulan']=='y' ? 'selected' : '') ?>> True </option>
				<option value="n" <?= ($input['unggulan']=='n' ? "selected" : '') ?>> False </option>
			</select>
		</div>
		<div class="col-md-6">
			Foto
			<input type="file" name="foto" class="form-control">
		</div>
		<div class="col-md-6">
			<input type="hidden" name="stat" value="1">
		</div>
		<div class="col-md-12">
		<br>
			<input type="submit" class="btn btn-primary btn-block" value="Simpan">
		</div>
	</div>
</form>
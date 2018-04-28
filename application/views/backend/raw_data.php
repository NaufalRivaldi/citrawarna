<h4>Insert saldo stock</h4>
<hr>
<p>File harus dalam format CSV</p>
<div class="row">
	<div class="col-md-6">
		<form action="<?= base_url('raw'); ?>" method="post" enctype="multipart/form-data">
			<input type="file" name="csv" class="form-control">
			<br>
			<input type="submit" class="btn btn-secondary btn-lg" value="Simpan" name="upload">
		</form>
	</div>
</div>


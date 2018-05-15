<h4>Insert saldo stock</h4>
<hr>

<?php 
$last_upload = strtotime($get_last_upload['value']);
$last_update = strtotime($get_last_update['value']);

if($last_upload > $last_update){ ?>
	<a href="<?= base_url('raw/update') ?>" class="btn btn-primary">Update</a>
	<br><br>
<?php } else{ ?>
	
<?php 
	$change1 = str_replace("-", "", $get_last_upload['value']);
	$change2 = str_replace(" ", "", $change1);
	$change3 = str_replace(":", "", $change2);
	$newName = $change3.".csv";
	
	if(is_file("upload/raw/$newName")){ ?>
		<a href='<?= base_url('raw/flush') ?>' class='btn btn-warning'>Clear Old Raw</a>

	<?php } } ?>


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
<br>



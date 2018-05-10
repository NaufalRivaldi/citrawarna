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
<div class="row">
	<table class="table table-sm" id="example">
		<tr>
		<thead>
			<td>kd_merk</td>
			<td>nm_barang</td>
			<td>Harga</td>
			</thead>
		</tr>
		
	</table>

	<script>
		var data = <?php echo json_encode($raw) ?>;
		$('#example').DataTable( {
	    data: data,
	    columns: [
	        { data: 'kd_barang' },
	        { data: 'nm_barang',  "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
            $(nTd).html("<a href='detail/"+oData.nm_barang+"'>"+oData.nm_barang+"</a>");
        	} },
        	{ data: 'harga' },
	    ]
	} );
	</script>
	
	
	
</div>



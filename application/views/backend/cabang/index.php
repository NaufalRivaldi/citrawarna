<h3>Data Cabang</h3>
<a href="<?= base_url('crud/cabang_add') ?>" class="btn btn-primary">Tambah Cabang</a>
<br><br>
<table class="table table-sm">
	<tr>
		<th>No</th>
		<th>Nama Cabang</th>
		<th>Alamat</th>
		<th>Telp</th>
		
	</tr>
	<?php $no=1; foreach($cabang as $row) { ?>
	<tr>
		<td><?= $no++ ?></td>
		<td><?= $row['nm_cbg'] ?></td>
		<td><?= $row['alamat'] ?></td>
		<td><?= $row['telp'] ?></td>
		<td>
			<a href="<?= base_url('crud/cabang_edit/').$row['id_cabang'] ?>" class="btn btn-sm btn-warning"><i class="fa fa-cog"></i></a> |
			<a href="<?= base_url('crud/cabang_delete/').$row['id_cabang'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghapus data?')"><i class="fa fa-trash"></i></a> 
		</td>
	</tr>
	<?php } ?>
	
</table>
<h3>Sssshh, it's Secret~</h3>

<table class="table">
	<tr>
		<td>No</td>
		<td>Username</td>
		<td>Action</td>
	</tr>
	<?php $no=1; 
	foreach($blocked as $row){
	?>
	<tr>
		<td><?= $no++ ?></td>
		<td><?= $row['username'] ?></td>
		<td>
			<a href="<?= base_url('backend/unblock/'.$row['username']) ?>" class="btn btn-warning btn-sm" onclick="return confirm('Yakin gan?')">Unblock</a> 
			<a href="<?= base_url('backend/del_user/'.$row['username']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin gan?')">Hapus User</a> 
		</td>
	</tr>
	<?php } ?>

</table>
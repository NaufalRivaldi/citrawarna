<h3>Data Artikel</h3>
<a href="<?= base_url('add/artikel') ?>" class="btn btn-primary">Tambah Artikel</a>
<br><br>
<table class="table table-sm">
	<tr>
		<th>No</th>
		<th>Judul</th>
		<th>Tanggal</th>
		<th>Excerpt</th>
		<th>Kategori</th>
		<th>Image</th>
	</tr>
	<?php $no=1; 
		foreach($artikel as $row) {
	?>
	<tr>
		<td><?= $no++ ?></td>
		<td><?= $row['judul'] ?></td>
		<td><?= $row['tanggal'] ?></td>
		<td><?= $row['excerpt'] ?></td>
		<td><?= $row['nama_kategori'] ?></td>
		<td><img src="<?= base_url('upload/artikel/').$row['img']?>" alt="<?= $row['img'] ?>" width="80"></td>
	</tr>
	<?php } ?>
</table>
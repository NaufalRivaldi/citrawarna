<h3>Data Barang</h3>
<a href="<?= base_url('crud/barang_add') ?>" class="btn btn-primary">Tambah Barang</a>
<br><br>
<table class="table table-sm">
	<tr>
		<th>No</th>
		<th>Kode Merek</th>
		<th>Nama Barang</th>
		<th>Deskripsi</th>
		<th>Kategori</th>
		<th>Unggulan</th>
		<th>Stat</th>
		<th>Foto</th>
		<th>Action</th>
	</tr>
	<?php $no=1; foreach($barang as $row) { ?>
	<tr>
		<td><?= $no++ ?></td>
		<td><?= $row['kd_merk'] ?></td>
		<td><?= $row['nm_barang'] ?></td>
		<td><?= substr($row['deskripsi'],0, 30) ?>[...]</td>
		<td><?= $row['desk_kategori']. ", " .$row['nm_jenis'] ?></td>
		<td><?= $row['unggulan'] ?></td>
		<td><?php if($row['stat'] == 1) echo "Active"; else echo "Not Active" ?></td>
		<td><img src="<?= base_url('upload/produk/thumbs/').$row['foto'] ?>" alt="<?= $row['foto'] ?>" width="90">	</td>
		<td>
			<a href="<?= base_url('crud/barang_edit/').$row['id_barang'] ?>" class="btn btn-sm btn-warning"><i class="fa fa-cog"></i></a> |
			<a href="<?= base_url('crud/barang_delete/').$row['id_barang'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghapus data?')"><i class="fa fa-trash"></i></a> 
		</td>
	</tr>
	<?php } ?>
	
</table>
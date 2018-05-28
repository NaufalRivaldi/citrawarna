<h3>Data Image Home Slideshow</h3>
<a href="<?= base_url('crud/slideshow_add') ?>" class="btn btn-primary">Tambah Gambar</a>
<b style="color:red">*Note : Ukuran ideal slideshow ... x ... apabila tidak, layout web akan terlihat berantakan</b>
<table class="table">
	<tr>
		<td>No</td>
		<td>Tanggal</td>
		<td>Judul</td>
		<td>Url</td>
		<td>Img</td>
		<td>No Index</td>
		<td>Status</td>
		<td>Action</td>
	</tr>
	<?php $no=1; foreach($slideshow as $row) { ?>
	<tr>
		<td><?= $no++ ?></td>
		<td><?= $row['tanggal'] ?></td>
		<td><?= $row['judul'] ?></td>
		<td><?= $row['url'] ?></td>
		<td><img src="<?= base_url('upload/slideshow/thumbs/').$row['img'] ?>" alt="<?= $row['img'] ?>" width="100"> </td>
		<td><?= $row['z-index'] ?></td>
		<td><?php if($row['stat'] == 1) echo "Aktif"; else echo "tidak Aktif"; ?></td>
		<td>
			<a href="<?= base_url('crud/enable_slide/').$row['id_slideshow'] ?>" class="<?php if($row['stat'] == 1) echo "disabled"; ?>">Aktifkan</a><br>
			<a href="<?= base_url('crud/disable_slide/').$row['id_slideshow'] ?>" class="<?php if($row['stat'] == 0) echo "disabled"; ?>">Nonaktifkan</a> <br>
			<a href="#">Hapus</a>
		</td>
	</tr>
	<?php } ?>
</table>

<nav>
  <ul class="pagination">
      <?= $paginate ?>
  </ul>
</nav>

<style>
.disabled {
   	color:grey;
   	pointer-events: none;
   	cursor: default;
}
</style>

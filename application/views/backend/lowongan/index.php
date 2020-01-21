<h3>Lowongan</h3>
<a href="<?= site_url('admin/lowongan/form') ?>" class="btn btn-primary">Tambah Data</a>
<br><br>
<table class="table table-sm myTable">
	<thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
            
        </tr>
    </thead>
	<tbody>
        <?php if(!empty($lowongan)): ?>
            <?php $no=1; foreach($lowongan as $row) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->tgl ?></td>
                <td><?= $row->judul ?></td>
                <td><?= $row->deskripsi ?></td>
                <td>
                    <a href="<?= site_url('admin/lowongan/edit/').$row->id ?>" class="btn btn-sm btn-warning"><i class="fa fa-cog"></i></a> |
                    <a href="<?= site_url('admin/lowongan/delete/').$row->id ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghapus data?')"><i class="fa fa-trash"></i></a> 
                </td>
            </tr>
            <?php } ?>
        <?php endif ?>
    </tbody>
	
</table>
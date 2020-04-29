<h3>Struktur Organisasi</h3>
<a href="<?= site_url('admin/bagan/form') ?>" class="btn btn-primary">Tambah Data</a>
<br><br>
<table class="table table-sm myTable">
	<thead>
        <tr>
            <th>No</th>
            <th>Struktur Organisasi</th>
            <th>Aksi</th>
            
        </tr>
    </thead>
	<tbody>
        <?php if(!empty($bagan)): ?>
            <?php $no=1; foreach($bagan as $row) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><img src="<?= base_url('upload/bagan/').$row->bagan ?>" alt="<?= $row->bagan ?>" width="90">	</td>
                <td>
                    <a href="<?= site_url('admin/testimoni/edit/').$row->id ?>" class="btn btn-sm btn-warning"><i class="fa fa-cog"></i></a> |
                    <a href="<?= site_url('admin/testimoni/delete/').$row->id ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghapus data?')"><i class="fa fa-trash"></i></a> 
                </td>
            </tr>
            <?php } ?>
        <?php endif ?>
    </tbody>
	
</table>
<h3>Testimoni</h3>
<a href="<?= site_url('admin/testimoni/form') ?>" class="btn btn-primary">Tambah Data</a>
<br><br>
<table class="table table-sm myTable">
	<thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Bintang</th>
            <th>Keterangan</th>
            <th>Aksi</th>
            
        </tr>
    </thead>
	<tbody>
        <?php if(!empty($testimoni)): ?>
            <?php $no=1; foreach($testimoni as $row) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->nama ?></td>
                <td><?= $row->email ?></td>
                <td><?= $row->bintang ?></td>
                <td><?= $row->keterangan ?></td>
                <td>
                    <a href="<?= site_url('admin/testimoni/edit/').$row->id ?>" class="btn btn-sm btn-warning"><i class="fa fa-cog"></i></a> |
                    <a href="<?= site_url('admin/testimoni/delete/').$row->id ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghapus data?')"><i class="fa fa-trash"></i></a> 
                </td>
            </tr>
            <?php } ?>
        <?php endif ?>
    </tbody>
	
</table>
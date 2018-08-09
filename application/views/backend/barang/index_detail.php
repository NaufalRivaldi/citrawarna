<h3>Detail data barang</h3>

<div class="row">
    <div class="col-md-12">
        <a href="<?= base_url('crud/detail_add') ?>" class="btn btn-primary">Add Detail Barang</a>
    </div>
</div>
<br>
<table class="table table-sm" id="myTable">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Detail</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach($detail_barang as $row)  : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['kd_merk']." - ". $row['nm_barang'] ?></td>
            <td><?= substr(strip_tags($row['detail_teks']), 0, 30) ?>[...]</td>
            <td>
                <a href="<?= base_url('crud/detail_edit/'.$row['kd_merk']) ?>" class="btn btn-sm btn-warning" ><i class="fa fa-cog"></i></a> |
                <a href="<?= base_url('crud/detail_delete/'.$row['kd_merk']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus data?')" ><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>


<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
$.extend( true, $.fn.dataTable.defaults, {
    "pageLength": 25
} );
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
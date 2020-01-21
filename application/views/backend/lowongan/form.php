<h3>Form Lowongan</h3>
<div class="card">
    <div class="card-header">
        <a href="<?= site_url('admin/lowongan/') ?>" class="btn btn-success btn-sm">Kembali</a>
    </div>
    <div class="card-body">
        <form action="<?= site_url('admin/lowongan/store') ?>" method="POST">
            <div class="form-group">
                <label for="judul">Nama Lowongan</label>
                <input type="text" class="form-control" id="judul" name="judul">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="5" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </form>
    </div>
</div>

<script>
	CKEDITOR.replace('deskripsi');
</script>
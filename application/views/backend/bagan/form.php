<h3>Form Struktur Organisasi</h3>
<div class="card">
    <div class="card-header">
        <a href="<?= site_url('admin/bagan/') ?>" class="btn btn-success btn-sm">Kembali</a>
    </div>
    <div class="card-body">
        <form action="<?= site_url('admin/bagan/store') ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="bagan">Gambar Struktur Organisasi</label>
                <input type="file" name="bagan" class="form-control-file">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </form>
    </div>
</div>
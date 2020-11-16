<h3>Form Testimoni</h3>
<div class="card">
    <div class="card-header">
        <a href="<?= site_url('admin/testimoni/') ?>" class="btn btn-success btn-sm">Kembali</a>
    </div>
    <div class="card-body">
        <form action="<?= base_url($form_action) ?>" method="POST">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= !empty($testimoni->nama) ? $testimoni->nama : '' ?>">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?= !empty($testimoni->email) ? $testimoni->email : '' ?>">
                <small id="emailHelp" class="form-text text-muted">Jika tidak ada tidak perlu diisikan.</small>
            </div>
            <div class="form-group">
                <label for="bintang">Bintang</label>
                <select name="bintang" id="bintang" class="form-control">
                    <?php for($i = 1; $i<=5; $i++) { ?>
                    <option value="<?= $i ?>" <?= !empty($testimoni->bintang) ? $testimoni->bintang == $i ? 'selected' : '' : '' ?>><?= $i ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea name="keterangan" id="keterangan" rows="5" class="form-control"><?= !empty($testimoni->keterangan) ? $testimoni->keterangan : '' ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </form>
    </div>
</div>
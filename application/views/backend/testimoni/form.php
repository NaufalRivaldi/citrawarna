<h3>Form Testimoni</h3>
<div class="card">
    <div class="card-header">
        <a href="<?= site_url('admin/testimoni/') ?>" class="btn btn-success btn-sm">Kembali</a>
    </div>
    <div class="card-body">
        <form action="<?= site_url('admin/testimoni/store') ?>" method="POST">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
                <small id="emailHelp" class="form-text text-muted">Jika tidak ada tidak perlu diisikan.</small>
            </div>
            <div class="form-group">
                <label for="bintang">Bintang</label>
                <select name="bintang" id="bintang" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea name="keterangan" id="keterangan" rows="5" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </form>
    </div>
</div>
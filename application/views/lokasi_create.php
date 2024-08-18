<h1>Tambah Lokasi Baru</h1>
<form action="<?php echo site_url('lokasi/store'); ?>" method="post">
    <div class="form-group">
        <label for="nama_lokasi">Nama Lokasi:</label>
        <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi" required>
    </div>
    <div class="form-group">
        <label for="negara">Negara:</label>
        <input type="text" class="form-control" id="negara" name="negara" required>
    </div>
    <div class="form-group">
        <label for="provinsi">Provinsi:</label>
        <input type="text" class="form-control" id="provinsi" name="provinsi" required>
    </div>
    <div class="form-group">
        <label for="kota">Kota:</label>
        <input type="text" class="form-control" id="kota" name="kota" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo site_url('welcome'); ?>" class="btn btn-secondary">Kembali</a>
</form>
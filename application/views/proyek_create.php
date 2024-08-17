<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Proyek</title>
</head>
<body>
    <h1>Tambah Proyek Baru</h1>
    <form action="<?php echo site_url('proyek/store'); ?>" method="post">
        <label>Nama Proyek:</label>
        <input type="text" name="nama_proyek" required><br>
        <label>Client:</label>
        <input type="text" name="client" required><br>
        <label>Tanggal Mulai:</label>
        <input type="datetime-local" name="tgl_mulai" required><br>
        <label>Tanggal Selesai:</label>
        <input type="datetime-local" name="tgl_selesai" required><br>
        <label>Pimpinan Proyek:</label>
        <input type="text" name="pimpinan_proyek" required><br>
        <label>Keterangan:</label>
        <textarea name="keterangan"></textarea><br>
        <label>Lokasi:</label>
        <select name="locations[]" multiple>
            <?php foreach ($locations as $location) { ?>
                <option value="<?php echo $location['id']; ?>"><?php echo $location['namaLokasi']; ?></option>
            <?php } ?>
        </select><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>

<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Tambah Lokasi</title>
</head>

<body>
    <h1>Tambah Lokasi Baru</h1>
    <form action="<?php echo site_url('lokasi/store'); ?>" method="post">
        <label>Nama Lokasi:</label>
        <input type="text" name="nama_lokasi" required><br>
        <label>Negara:</label>
        <input type="text" name="negara" required><br>
        <label>Provinsi:</label>
        <input type="text" name="provinsi" required><br>
        <label>Kota:</label>
        <input type="text" name="kota" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>
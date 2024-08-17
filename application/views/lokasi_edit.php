<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Lokasi</title>
</head>

<body>
    <h1>Edit Lokasi</h1>
    <form action="<?php echo site_url('lokasi/update/' . $lokasi['id']); ?>" method="post">
        <label>Nama Lokasi:</label>
        <input type="text" name="nama_lokasi" value="<?php echo $lokasi['namaLokasi']; ?>" required><br>
        <label>Negara:</label>
        <input type="text" name="negara" value="<?php echo $lokasi['negara']; ?>" required><br>
        <label>Provinsi:</label>
        <input type="text" name="provinsi" value="<?php echo $lokasi['provinsi']; ?>" required><br>
        <label>Kota:</label>
        <input type="text" name="kota" value="<?php echo $lokasi['kota']; ?>" required><br>
        <button type="submit">Update</button>
    </form>
</body>

</html>
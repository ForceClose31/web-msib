<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Proyek</title>
</head>

<body>
    <h1>Edit Proyek</h1>
    <form action="<?php echo site_url('proyek/update/' . $proyek['id']); ?>" method="post">
        <label>Nama Proyek:</label>
        <input type="text" name="nama_proyek" value="<?php echo $proyek['namaProyek']; ?>" required><br>
        <label>Client:</label>
        <input type="text" name="client" value="<?php echo $proyek['client']; ?>" required><br>
        <label>Tanggal Mulai:</label>
        <input type="datetime-local" name="tgl_mulai" value="<?php echo $proyek['tglMulai']; ?>" required><br>
        <label>Tanggal Selesai:</label>
        <input type="datetime-local" name="tgl_selesai" value="<?php echo $proyek['tglSelesai']; ?>" required><br>
        <label>Pimpinan Proyek:</label>
        <input type="text" name="pimpinan_proyek" value="<?php echo $proyek['pimpinanProyek']; ?>" required><br>
        <label>Keterangan:</label>
        <textarea name="keterangan"><?php echo $proyek['keterangan']; ?></textarea><br>
        <label>Lokasi:</label>
        <select name="locations[]" multiple>
            <?php foreach ($locations as $location) { ?>
                <option value="<?php echo $location['id']; ?>" <?php echo in_array($location['id'], $proyek['locations']) ? 'selected' : ''; ?>>
                    <?php echo $location['namaLokasi']; ?>
                </option>
            <?php } ?>
        </select><br>
        <button type="submit">Update</button>
    </form>
</body>

</html>
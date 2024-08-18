<h1>Edit Proyek</h1>
<form action="<?php echo site_url('proyek/update/' . $proyek['id']); ?>" method="post">
    <div class="form-group">
        <label for="nama_proyek">Nama Proyek:</label>
        <input type="text" class="form-control" id="nama_proyek" name="nama_proyek" value="<?php echo $proyek['namaProyek']; ?>" required>
    </div>
    <div class="form-group">
        <label for="client">Client:</label>
        <input type="text" class="form-control" id="client" name="client" value="<?php echo $proyek['client']; ?>" required>
    </div>
    <div class="form-group">
        <label for="tgl_mulai">Tanggal Mulai:</label>
        <input type="datetime-local" class="form-control" id="tgl_mulai" name="tgl_mulai" value="<?php echo $proyek['tglMulai']; ?>" required>
    </div>
    <div class="form-group">
        <label for="tgl_selesai">Tanggal Selesai:</label>
        <input type="datetime-local" class="form-control" id="tgl_selesai" name="tgl_selesai" value="<?php echo $proyek['tglSelesai']; ?>" required>
    </div>
    <div class="form-group">
        <label for="pimpinan_proyek">Pimpinan Proyek:</label>
        <input type="text" class="form-control" id="pimpinan_proyek" name="pimpinan_proyek" value="<?php echo $proyek['pimpinanProyek']; ?>" required>
    </div>
    <div class="form-group">
        <label for="keterangan">Keterangan:</label>
        <textarea class="form-control" id="keterangan" name="keterangan" rows="3"><?php echo $proyek['keterangan']; ?></textarea>
    </div>

    <div class="form-group">
        <label for="location">Lokasi:</label>
        <select class="form-control" id="locations" name="location">
            <?php foreach ($locations as $location) { ?>
                <option value="<?php echo $location['id']; ?>" <?php echo ($location['id'] == $proyek['locations']) ? 'selected' : ''; ?>>
                    <?php echo $location['namaLokasi']; ?>
                </option>
            <?php } ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="<?php echo site_url('welcome'); ?>" class="btn btn-secondary">Kembali</a>
</form>
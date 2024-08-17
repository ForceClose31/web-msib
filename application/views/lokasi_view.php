<!DOCTYPE html>
<html>

<head>
    <title>Lokasi List</title>
</head>

<body>
    <h1>Lokasi List</h1>
    <a href="<?php echo site_url('lokasi/create'); ?>">Add New Lokasi</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Lokasi</th>
            <th>Negara</th>
            <th>Provinsi</th>
            <th>Kota</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($lokasi_list as $lokasi) { ?>
            <tr>
                <td><?php echo $lokasi['id']; ?></td>
                <td><?php echo $lokasi['namaLokasi']; ?></td>
                <td><?php echo $lokasi['negara']; ?></td>
                <td><?php echo $lokasi['provinsi']; ?></td>
                <td><?php echo $lokasi['kota']; ?></td>
                <td>
                    <a href="<?php echo site_url('lokasi/edit/' . $lokasi['id']); ?>">Edit</a> |
                    <a href="<?php echo site_url('lokasi/delete/' . $lokasi['id']); ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>
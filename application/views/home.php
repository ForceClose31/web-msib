<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
	<title>Halaman Utama</title>
</head>

<body>
	<h1>Daftar Proyek</h1>
	<a href="<?php echo site_url('proyek/create'); ?>">Tambah Proyek Baru</a>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Nama Proyek</th>
			<th>Client</th>
			<th>Tanggal Mulai</th>
			<th>Tanggal Selesai</th>
			<th>Pimpinan Proyek</th>
			<th>Keterangan</th>
			<th>Actions</th>
		</tr>
		<?php foreach ($projects as $project) { ?>
			<tr>
				<td><?php echo $project['id']; ?></td>
				<td><?php echo $project['namaProyek']; ?></td>
				<td><?php echo $project['client']; ?></td>
				<td><?php echo $project['tglMulai']; ?></td>
				<td><?php echo $project['tglSelesai']; ?></td>
				<td><?php echo $project['pimpinanProyek']; ?></td>
				<td><?php echo $project['keterangan']; ?></td>
				<td>
					<a href="<?php echo site_url('proyek/edit/' . $project['id']); ?>">Edit</a> |
					<a href="<?php echo site_url('proyek/delete/' . $project['id']); ?>">Delete</a>
				</td>
			</tr>
		<?php } ?>
	</table>

	<h1>Daftar Lokasi</h1>
	<a href="<?php echo site_url('lokasi/create'); ?>">Tambah Lokasi Baru</a>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Nama Lokasi</th>
			<th>Negara</th>
			<th>Provinsi</th>
			<th>Kota</th>
			<th>Actions</th>
		</tr>
		<?php foreach ($locations as $location) { ?>
			<tr>
				<td><?php echo $location['id']; ?></td>
				<td><?php echo $location['namaLokasi']; ?></td>
				<td><?php echo $location['negara']; ?></td>
				<td><?php echo $location['provinsi']; ?></td>
				<td><?php echo $location['kota']; ?></td>
				<td>
					<a href="<?php echo site_url('lokasi/edit/' . $location['id']); ?>">Edit</a> |
					<a href="<?php echo site_url('lokasi/delete/' . $location['id']); ?>">Delete</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>

</html>
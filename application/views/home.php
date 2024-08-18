<h1 class="mb-4">Daftar Proyek</h1>
<a href="<?php echo site_url('proyek/create'); ?>" class="btn btn-primary mb-3">Tambah Proyek Baru</a>
<table class="table table-striped table-bordered">
	<thead>
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
	</thead>
	<tbody>
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
					<a href="<?php echo site_url('proyek/edit/' . $project['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
					<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $project['id']; ?>" data-type="proyek">Delete</button>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>

<h1 class="mt-4 mb-4">Daftar Lokasi</h1>
<a href="<?php echo site_url('lokasi/create'); ?>" class="btn btn-primary mb-3">Tambah Lokasi Baru</a>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nama Lokasi</th>
			<th>Negara</th>
			<th>Provinsi</th>
			<th>Kota</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($locations as $location) { ?>
			<tr>
				<td><?php echo $location['id']; ?></td>
				<td><?php echo $location['namaLokasi']; ?></td>
				<td><?php echo $location['negara']; ?></td>
				<td><?php echo $location['provinsi']; ?></td>
				<td><?php echo $location['kota']; ?></td>
				<td>
					<a href="<?php echo site_url('lokasi/edit/' . $location['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
					<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $location['id']; ?>" data-type="lokasi">Delete</button>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>
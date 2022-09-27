<?= $this->extend('templete') ?>
<?= $this->section('content') ?>
<div class="p-5">
	<a href="/create" type="button" class="btn btn-primary mb-3">Tambah</a>
	<table class="table table-striped table-dark">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">NPM</th>
				<th scope="col">Nama</th>
				<th scope="col">Alamat</th>
				<th scope="col">Deskripsi</th>
				<th scope="col">Created_At</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1;
			foreach ($mahasiswa as $mhs) : ?>
				<tr>
					<th scope="row"><?= $i ?></th>
					<td><?= $mhs['npm'] ?></td>
					<td><?= $mhs['nama'] ?></td>
					<td><?= $mhs['alamat'] ?></td>
					<td><?= $mhs['deskripsi'] ?></td>
					<td><?= $mhs['create_at'] ?></td>
					<td>
						<div class="d-flex">
							<a class="btn btn-warning" href="/edit/<?= $mhs['id'] ?>">Edit</a>
							<form action="/delete/<?= $mhs['id'] ?>" method="post">
								<input name="_method" value="DELETE" type="hidden">
								<button class="btn btn-danger" type="submit">Delete</button>
							</form>
						</div>
					</td>
				</tr>
			<?php $i++;
			endforeach ?>
		</tbody>
	</table>
</div>
<?= $this->endSection() ?>
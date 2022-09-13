<div class="p-5">
    <a href="/create" type="button" class="btn btn-primary mb-3">Tambah</a>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NPM</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
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
                    <td><?= $mhs['create_at'] ?></td>
                </tr>
            <?php $i++;
            endforeach ?>
        </tbody>
    </table>
</div>
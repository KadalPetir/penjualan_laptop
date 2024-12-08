<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Suppliers</h1>
    <a href="suppliers/create" class="btn btn-primary mb-3">Tambah Suppliers</a>
    <table class="table table-bordered"> 
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($suppliers as $item) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $item['name']; ?></td>
                    <td><?= $item['phone']; ?></td>
                    <td><?= $item['email']; ?></td>
                    <td><?= $item['address']; ?></td>
                    <td>
                        <a href="suppliers/edit/<?= $item['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="suppliers/delete/<?= $item['id']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>
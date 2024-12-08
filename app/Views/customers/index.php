<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Customers</h1>

    <a href="customers/create" class="btn btn-primary mb-3">Tambah Customer</a>

    <table class="table table-bordered"> 
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($customers as $item) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $item['name']; ?></td>
                    <td><?= $item['email']; ?></td>
                    <td><?= $item['phone']; ?></td>
                    <td><?= $item['address']; ?></td>
                    <td>
                        <a href="customers/edit/<?= $item['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="customers/delete/<?= $item['id']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>
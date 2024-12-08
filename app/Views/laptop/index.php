<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Daftar Laptop</h1>
    <a href="laptop/create/" class="btn btn-primary mb-3">Tambah Laptop</a>
    <table class="table table-bordered"> 
        <thead>
            <tr>
                <th>No</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Processor</th>
                <th>Ram</th>
                <th>Storage</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Release Date</th>
                <th>Description</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($laptop as $item) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $item['brand']; ?></td>
                    <td><?= $item['model']; ?></td>
                    <td><?= $item['processor']; ?></td>
                    <td><?= $item['ram']; ?></td>
                    <td><?= $item['storage']; ?></td>
                    <td><?= $item['price']; ?></td>
                    <td><?= $item['stock']; ?></td>
                    <td><?= $item['release_date']; ?></td>
                    <td><?= $item['description']; ?></td>
                    <td>
                        <a href="laptop/edit/<?= $item['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="laptop/delete/<?= $item['id']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>
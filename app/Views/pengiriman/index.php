<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Daftar Pengiriman</h1>
    <a href="pengiriman/create/" class="btn btn-primary mb-3">Tambah Pengiriman</a>
    <table class="table table-bordered"> 
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Pengiriman</th>
                <th>alamat pengiriman</th>
                <th>Status Pengiriman</th>
                <th>Biaya Pengiriman</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($pengiriman as $item) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $item['tanggal_pengiriman']; ?></td>
                    <td><?= $item['alamat_pengiriman']; ?></td>
                    <td><?= $item['status_pengiriman']; ?></td>
                    <td><?= $item['biaya_pengiriman']; ?></td>
                    <td>
                        <a href="pengiriman/edit/<?= $item['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="pengiriman/delete/<?= $item['id']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>
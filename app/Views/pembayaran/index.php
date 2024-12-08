<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Daftar pembayaran</h1>
    <a href="pembayaran/create/" class="btn btn-primary mb-3">Tambah pembayaran</a>
    <table class="table table-bordered"> 
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Pembayaran</th>
                <th>Jumlah Pembayaran</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($pembayaran as $item) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $item['jenis_pembayaran']; ?></td>
                    <td><?= $item['jumlah_pembayaran']; ?></td>
                    <td><?= $item['tanggal']; ?></td>
                    <td><?= $item['status']; ?></td>
                    <td>
                        <a href="pembayaran/edit/<?= $item['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="pembayaran/delete/<?= $item['id']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>
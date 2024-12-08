<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Daftar Sales</h1>
    <a href="sales/create/" class="btn btn-primary mb-3">Tambah Sales</a>
    <table class="table table-bordered"> 
        <thead>
            <tr>
                <th>No</th>
                <th>Customer Name</th>
                <th>Sales Date</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Payment Method</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($sales as $item) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $item['customer_name']; ?></td>
                    <td><?= $item['sale_date']; ?></td>
                    <td><?= $item['quantity']; ?></td>
                    <td><?= $item['total_price']; ?></td>
                    <td><?= $item['payment_method']; ?></td>
                    <td>
                        <a href="sales/edit/<?= $item['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="sales/delete/<?= $item['id']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    pelanggan
</div>

<?= $this->endSection(); ?>
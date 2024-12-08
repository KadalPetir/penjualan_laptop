<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Tambah Sales</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Customers Name</label>
            <input type="text" name="customer_name" class="form-control" required>
        </div>
        <div class="form-group">
             <label for="">Sale Date</label>
                <input type="date" name="sale_date" class="form-control" required>
        </div>
        <div class="form-group">
             <label for="">Quantity</label>
                <input type="number" name="quantity" class="form-control" required>
        </div>
        <div class="form-group">
             <label for="">Total Price</label>
                <input type="number" name="total_price" class="form-control" required>
        </div>
        <div class="form-group">
             <label for="">Payment Method</label>
                <input type="text" name="payment_method" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Customer ID:</label>
            <select name="customers_id" class="form-control">
                <?php foreach ($customers as $item) : ?>
                    <option value="<?= $item['id'] ?>" class="form-control"><?= $item['id'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Pembayaran ID:</label>
            <select name="laptop_id" class="form-control">
                <?php foreach ($laptop as $item) : ?>
                    <option value="<?= $item['id'] ?>" class="form-control"><?= $item['id'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/sales" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->endSection(); ?>
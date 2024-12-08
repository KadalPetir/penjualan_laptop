<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Edit Pengiriman</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Tanggal Pengiriman</label>
            <input type="date" name="tanggal_pengiriman" class="form-control" value="<?= $pengiriman['tanggal_pengiriman']; ?>" required>
        </div>
        <div class="form-group">
            <label for="">Alamat Pengiriman</label>
            <input type="text" name="alamat_pengiriman" class="form-control" value="<?= $pengiriman['alamat_pengiriman']; ?>" required>
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <select name="status_pengiriman" class="form-control" required>
                <option value="">Pilih Status</option>
                <option value="Selesai">Selesai</option>
                <option value="Dikirim">Dikirim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Biaya Pengiriman</label>
            <input type="number" name="biaya_pengiriman" class="form-control" value="<?= $pengiriman['biaya_pengiriman']; ?>" required>
        </div>
        <div class="form-group">
            <label for="">Sales ID:</label>
            <select name="sales_id" class="form-control">
                <?php foreach ($sales as $item) : ?>
                    <option value="<?= $item['id'] ?>" <?= isset($pengiriman['sales_id']) && $pengiriman['sales_id'] == $item['id'] ? 'selected' : ''; ?>><?= $item['id'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/pembayaran" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->endSection(); ?>
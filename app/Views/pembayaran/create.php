<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Tambah Pembayaran</h1>
    <form action="" method="post">
    <div class="form-group">
            <label for="">Jenis Pembayaran</label>
            <select name="jenis_pembayaran" class="form-control" required>
                <option value="">Pilih Status</option>
                <option value="Tunai">Tunai</option>
                <option value="Transfer">Transfer</option>
            </select>
        </div>
        <div class="form-group">
             <label for="nomor">Jumlah Pembayaran</label>
                <input type="number" name="jumlah_pembayaran" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <select name="status" class="form-control" required>
                <option value="">Pilih Status</option>
                <option value="Selesai">Selesai</option>
                <option value="Belum">Belum Selesai</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Sales ID:</label>
            <select name="sales_id" class="form-control">
                <?php foreach ($sales as $item) : ?>
                    <option value="<?= $item['id'] ?>" class="form-control"><?= $item['id'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
       
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/pembayaran" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->endSection(); ?>
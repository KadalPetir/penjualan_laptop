<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Tambah Laptop</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Brand</label>
            <input type="text" name="brand" class="form-control" value="<?= $laptop['brand']; ?>" required>
        </div>
        <div class="form-group">
             <label for="nomor">Model</label>
                <input type="text" name="model" class="form-control"value="<?= $laptop['model']; ?>"required>
        </div>
        <div class="form-group">
            <label for="">Processor</label>
            <input type="text" name="processor" class="form-control" value="<?= $laptop['processor']; ?>" required>
        </div>
        <div class="form-group">
             <label for="nomor">Ram</label>
                <input type="number" name="ram" class="form-control" value="<?= $laptop['ram']; ?>" required>
        </div>
        <div class="form-group">
            <label for="">Storage</label>
            <input type="number" name="storage" class="form-control" value="<?= $laptop['storage']; ?>" required>
        </div>
        <div class="form-group">
             <label for="nomor">Price</label>
                <input type="number" name="price" class="form-control" value="<?= $laptop['price']; ?>" required>
        </div>
        <div class="form-group">
            <label for="">Stok</label>
            <input type="number" name="stock" class="form-control" value="<?= $laptop['stock']; ?>" required>
        </div>
        <div class="form-group">
             <label for="nomor">Release Date</label>
                <input type="date" name="release_date" class="form-control" value="<?= $laptop['release_date']; ?>" required>
        </div>
        <div class="form-group">
             <label for="nomor">Description</label>
                <input type="text" name="description" class="form-control" value="<?= $laptop['description']; ?>" required>
        </div>
        <div class="form-group">
            <label for="">Suppliers ID:</label>
            <select name="suppliers_id" class="form-control">
                <?php foreach ($suppliers as $item) : ?>
                    <option value="<?= $item['id'] ?>" <?= isset($laptop['suppliers_id']) && $laptop['suppliers_id'] == $item['id'] ? 'selected' : ''; ?>><?= $item['id'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
       
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/laptop" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->endSection(); ?>
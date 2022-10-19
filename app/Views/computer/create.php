<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Computer</h6>
    </div>
    <div class="card-body container-fluid">
        <form action="/computer/create" method="POST">
            <?= csrf_field(); ?>
            <div class="mb-2">
                <label for="assetsNumber" class="form-label">Asset Number</label>
                <input type="text" class="form-control <?= $validation->hasError('asset_number') ? 'is-invalid' : ''; ?>" id="assetsNumber" name="asset_number" placeholder="Asset Number" value="<?= old('asset_number'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('asset_number'); ?>
                </div>
            </div>
            <div class="mb-2">
                <label for="idComputer" class="form-label">ID Computer</label>
                <input type="text" class="form-control <?= $validation->hasError('id_computer') ? 'is-invalid' : ''; ?>" id="idComputer" name="id_computer" placeholder="ID Computer" value="<?= old('id_computer'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('id_computer'); ?>
                </div>
            </div>
            <div class="mb-2">
                <label for="jenis" class="form-label">Jenis</label>
                <select name="jenis" id="jenis" class="form-control <?= $validation->hasError('jenis') ? 'is-invalid' : ''; ?>">
                    <option selected disabled>Pilih Jenis</option>
                    <option value="Laptop">Laptop</option>
                    <option value="PC">PC</option>
                </select>
                <div class="invalid-feedback">
                    <?= $validation->getError('jenis'); ?>
                </div>
            </div>
            <div class="mb-2">
                <label for="namaProduk" class="form-label">Nama Produk</label>
                <select name="nama_produk" id="namaProduk" class="form-control <?= $validation->hasError('nama_produk') ? 'is-invalid' : ''; ?>">
                    <option selected disabled>Pilih Nama Produk</option>
                    <option value="Dell Latitude 3420">Dell Latitude 3420</option>
                    <option value="Dell Optiplex 5090">Dell Optiplex 5090</option>
                </select>
                <div class="invalid-feedback">
                    <?= $validation->getError('nama_produk'); ?>
                </div>
            </div>
            <div class="mb-2">
                <label for="serialNumber" class="form-label">Serial Number</label>
                <input type="text" class="form-control <?= $validation->hasError('serial_number') ? 'is-invalid' : ''; ?>" id="serialNumber" name="serial_number" placeholder="Serial Number" value="<?= old('serial_number'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('serial_number'); ?>
                </div>
            </div>
            <div class="mb-2">
                <label for="user" class="form-label">User</label>
                <input type="text" class="form-control <?= $validation->hasError('user') ? 'is-invalid' : ''; ?>" id="user" name="user" placeholder="User" value="<?= old('user'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('user'); ?>
                </div>
            </div>
    </div>
    <div class="modal-footer">
        <a href="/computer" class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</a>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </div>
    </form>
</div>
<?= $this->endSection(); ?>
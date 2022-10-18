<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Computer</h6>
    </div>
    <div class="card-body">
        <form action="/computer/create" method="POST">
            <?= csrf_field(); ?>
            <div class="modal-body">
                <div class="row mb-2">
                    <div class="col-6">
                        <label for="assetsNumber" class="form-label">Asset Number</label>
                        <input type="text" class="form-control" id="assetsNumber" name="asset_number" placeholder="Asset Number">
                    </div>
                    <div class="col-6">
                        <label for="idComputer" class="form-label">ID Computer</label>
                        <input type="text" class="form-control" id="idComputer" name="id_computer" placeholder="ID Computer">
                    </div>
                </div>
                <div class="mb-2">
                    <label for="jenis" class="form-label">Jenis</label>
                    <select name="jenis" id="jenis" class="form-control">
                        <option selected disabled>Pilih Jenis</option>
                        <option value="Laptop">Laptop</option>
                        <option value="PC">PC</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="namaProduk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="namaProduk" name="nama_produk" placeholder="Nama Produk">
                </div>
                <div class="mb-2">
                    <label for="serialNumber" class="form-label">Serial Number</label>
                    <input type="text" class="form-control" id="serialNumber" name="serial_number" placeholder="Serial Number">
                </div>
                <div class="mb-2">
                    <label for="user" class="form-label">User</label>
                    <input type="text" class="form-control" id="user" name="user" placeholder="User">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>
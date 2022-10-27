<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
    </div>
    <div class="card-body container-fluid">
        <form action="/create-printer" method="POST">
            <?= csrf_field(); ?>

            <div class="row">

                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm mb-2">
                            <label for="assetsNumber" class="form-label">Asset Number</label>
                            <input type="text" class="form-control <?= $validation->hasError('asset_number') ? 'is-invalid' : ''; ?>" id="assetsNumber" name="asset_number" placeholder="Asset Number" value="<?= old('asset_number'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('asset_number'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm mb-2">
                            <label for="idComputer" class="form-label">ID Asset</label>
                            <input type="text" class="form-control <?= $validation->hasError('id_asset') ? 'is-invalid' : ''; ?>" id="idComputer" name="id_asset" placeholder="ID Asset" value="<?= old('id_asset'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('id_asset'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm mb-2">
                            <label for="serialNumber" class="form-label">Serial Number</label>
                            <input type="text" class="form-control <?= $validation->hasError('serial_number') ? 'is-invalid' : ''; ?>" id="serialNumber" name="serial_number" placeholder="Serial Number" value="<?= old('serial_number'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('serial_number'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm mb-2">
                            <label for="ipAdress" class="form-label">IP Address</label>
                            <input type="text" class="form-control <?= $validation->hasError('ip_address') ? 'is-invalid' : ''; ?>" id="ipAdress" name="ip_address" placeholder="IP Address" value="<?= old('ip_address'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('ip_address'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm mb-2">
                            <label for="jenis" class="form-label">Jenis</label>
                            <select name="jenis" id="jenis" class="form-control <?= $validation->hasError('jenis') ? 'is-invalid' : ''; ?>">
                                <option selected disabled>Pilih Jenis</option>
                                <option value="Laptop">Laptop</option>
                                <option value="PC">PC</option>
                                <option value="Printer">Printer</option>
                                <option value="Network">Network</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('jenis'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm mb-2">
                            <label for="namaProduk" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control <?= $validation->hasError('nama_produk') ? 'is-invalid' : ''; ?>" id="namaProduk" name="nama_produk" placeholder="Nama Produk" value="<?= old('nama_produk'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_produk'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm mb-2">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <select name="lokasi" id="lokasi" class="form-control <?= $validation->hasError('lokasi') ? 'is-invalid' : ''; ?>">
                                <option selected disabled>Pilih Lokasi</option>
                                <option value="PLANT 1">PLANT 1</option>
                                <option value="PLANT 2">PLANT 2</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('lokasi'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <div class="modal-footer">
        <a href="/printer" class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</a>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('.form-check-input').click(function() {
            if ($(this).is(':checked')) {
                $('#macAdress').attr('disabled', false);
            } else {
                $('#macAdress').attr('disabled', true);
            }
        });
    });
</script>
<?= $this->endSection(); ?>
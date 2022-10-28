<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
    </div>
    <div class="card-body container-fluid">
        <form action="/create-peminjaman" method="get">
            <?= csrf_field(); ?>

            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm mb-2">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control <?= $validation->hasError('nama') ? 'is-invalid' : ''; ?>" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= old('nama'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm mb-2">
                            <label for="nip" class="form-label">NIP</label>
                            <input type="text" class="form-control <?= $validation->hasError('nip') ? 'is-invalid' : ''; ?>" id="nip" name="nip" placeholder="Nomor Induk Pegawai" value="<?= old('nip'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nip'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm mb-2">
                            <label for="departemen" class="form-label">Departemen</label>
                            <select name="departemen" id="departemen" class="form-control <?= $validation->hasError('departemen') ? 'is-invalid' : ''; ?>">
                                <option selected disabled>Pilih Departemen</option>
                                <option value="Laptop">Laptop</option>
                                <option value="PC">PC</option>
                                <option value="Printer">Printer</option>
                                <option value="Network">Network</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('departemen'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm mb-2">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="text" class="form-control <?= $validation->hasError('jumlah') ? 'is-invalid' : ''; ?>" id="jumlah" name="jumlah" placeholder="Jumlah" value="<?= old('jumlah'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('jumlah'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-center">Barang yang di Pinjam</h5>
                            <?php $barang = ['Laptop', 'PC', 'Mouse', 'Keyboard', 'Monitor', 'Speaker', 'HDMI/VGA/Connector', 'Lainnya'];
                            for ($i = 0; $i < count($barang); $i++) : ?>
                                <div class="form-check col-sm-3">
                                    <input name="barang" class="form-check-input" type="checkbox" value="<?= $barang[$i]; ?>" id="<?= $barang[$i]; ?>">
                                    <label class="form-check-label mb-2" for="<?= $barang[$i]; ?>">
                                        <?= $barang[$i]; ?>
                                    </label>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm mt-2">
                    <div class="form-check">
                        <input name="barang" class="form-check-input" type="checkbox" value="" id="">
                        <label class="form-check-label mb-2 text-justify" for="">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore eligendi ullam eum sit accusantium quasi!
                        </label>
                    </div>
                </div>
            </div>

    </div>
    <div class="modal-footer">
        <a href="/computer" class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</a>
        <button type="submit" class="btn btn-primary">Ajukan</button>
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
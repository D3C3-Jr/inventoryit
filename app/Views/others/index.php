<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>
<h3><?= $title; ?></h3>
<a href="/create-others" class="btn btn-primary mt-2 mb-2">Tambah data</a>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Others</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive table-sm table-hover">
            <table class="table table-bordered" id="dataTable">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama Produk</th>
                        <th>IP Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($others as $other) : ?>
                        <tr>
                            <td><?= $other['id_asset']; ?></td>
                            <td><?= $other['nama_produk']; ?></td>
                            <td><?= $other['ip_address']; ?></td>
                            <td><a href="/detail-other/<?= $other['id']; ?>">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
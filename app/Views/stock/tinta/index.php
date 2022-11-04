<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>
<h3><?= $title; ?></h3>
<a href="/create-printer" class="btn btn-primary mt-2 mb-2">Tambah data</a>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Tinta</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive table-sm table-hover">
            <table class="table table-bordered" id="dataTable">
                <thead class="table-dark">
                    <tr>
                        <th>Tanggal</th>
                        <th>Model</th>
                        <th width="10px">Cyan</th>
                        <th width="10px">Magenta</th>
                        <th width="10px">Yellow</th>
                        <th width="10px">Black</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tintas as $tinta) : ?>
                        <tr>
                            <td><?= date("i, d M Y", strtotime($tinta['tanggal'])); ?></td>
                            <td><?= $tinta['model']; ?></td>
                            <td><?= $tinta['c']; ?></td>
                            <td><?= $tinta['m']; ?></td>
                            <td><?= $tinta['y']; ?></td>
                            <td><?= $tinta['k']; ?></td>
                            <td><a href="/detail-tinta/<?= $tinta['id']; ?>">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
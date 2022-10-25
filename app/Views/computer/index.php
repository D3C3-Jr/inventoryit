<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>
<h3><?= $title; ?></h3>
<a href="/create" class="btn btn-primary mt-2 mb-2">Tambah data</a>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Computer</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive table-sm table-hover">
            <table class="table table-bordered" id="dataTable">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Jenis</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($computers as $computer) : ?>
                        <tr>
                            <td><?= $computer['id_asset']; ?></td>
                            <td><?= $computer['user']; ?></td>
                            <td><?= $computer['jenis']; ?></td>
                            <td><a href="/computer/detail/<?= $computer['id']; ?>">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
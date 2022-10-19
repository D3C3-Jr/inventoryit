<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>
<h3><?= $title; ?></h3>
<a href="/computer/create" class="btn btn-primary mt-2 mb-2">Tambah data</a>
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
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($computers as $computer) : ?>
                        <tr onclick="detail()">
                            <td><?= $computer['id_computer']; ?></td>
                            <td><?= $computer['user']; ?></td>
                            <td><?= $computer['jenis']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function detail() {
        window.location.href = '/computer/detail/<?= $computer['id']; ?>'
    }
</script>
<?= $this->endSection(); ?>
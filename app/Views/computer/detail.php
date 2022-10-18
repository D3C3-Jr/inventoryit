<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>
<h3><?= $title; ?></h3>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Detail Data Computer</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive mb-2">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>User</th>
                        <th>ID</th>
                        <th>Asset Number</th>
                        <th>Jenis</th>
                        <th>Nama Produk</th>
                        <th>Serial Number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $computer['user']; ?></td>
                        <td><?= $computer['id_computer']; ?></td>
                        <td><?= $computer['asset_number']; ?></td>
                        <td><?= $computer['jenis']; ?></td>
                        <td><?= $computer['nama_produk']; ?></td>
                        <td><?= $computer['serial_number']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="/computer/edit/<?= $computer['id']; ?>" class="btn btn-warning btn-circle"><span class="fa fa-pencil-alt"></span></a>
        <button class="btn btn-danger btn-circle" onclick="hapus()"><span class="fa fa-trash"></span></button>
        <a href="/computer" class="btn btn-primary btn-circle"><span class="fa fa-undo"></span></a>
    </div>
</div>
<script>
    function hapus() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                );
                window.location.href = '/computer/delete/<?= $computer['id']; ?>'
            }
        })
    }
</script>
<?= $this->endSection(); ?>
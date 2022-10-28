<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>
<h3><?= $title; ?></h3>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Detail Data Network</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive mb-2">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Asset Number</th>
                        <th>Jenis</th>
                        <th>Nama Produk</th>
                        <th>Serial Number</th>
                        <th>IP Adress</th>
                        <th>Mac Adress</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($network > 0) : ?>
                        <tr>
                            <td><?= $network['id_asset']; ?></td>
                            <td><?= $network['asset_number']; ?></td>
                            <td><?= $network['jenis']; ?></td>
                            <td><?= $network['nama_produk']; ?></td>
                            <td><?= $network['serial_number']; ?></td>
                            <td><?= $network['ip_address']; ?></td>
                            <td><?= $network['mac_address']; ?></td>
                        </tr>
                    <?php else : ?>
                        <tr>
                            <td colspan="8" class="text-center">Data tidak di temukan</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-sm-6 mb-1">
                <a href="/network" class="btn btn-primary btn-block"><i class="fa fa-arrow-left"></i> Kembali </a>
            </div>
            <div class="col-sm-6 mb-1">
                <form class="d-inline" action="/delete-network/<?= $network['id']; ?>" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger btn-block" id="deleteForm"><i class="fa fa-trash-alt"></i> Hapus </button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $('#deleteForm').on('click', function(e) {
        e.preventDefault();
        var form = $(this).parents('form');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success',
                );
                form.submit();
            }
        });
    });
</script>

<?= $this->endSection(); ?>
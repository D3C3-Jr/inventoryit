<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>
<h3><?= $title; ?></h3>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Detail Data Printer</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive mb-2">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Jenis</th>
                        <th>Nama Produk</th>
                        <th>Serial Number</th>
                        <th>Lokasi</th>
                        <th>IP Address</th>
                        <th>Mac Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($printer > 0) : ?>
                        <tr>
                            <td><?= $printer['id_asset']; ?></td>
                            <td><?= $printer['jenis']; ?></td>
                            <td><?= $printer['nama_produk']; ?></td>
                            <td><?= $printer['serial_number']; ?></td>
                            <td><?= $printer['lokasi']; ?></td>
                            <td><?= $printer['ip_address']; ?></td>
                            <td><?= $printer['mac_address']; ?></td>
                        </tr>
                    <?php else : ?>
                        <tr>
                            <td colspan="8" class="text-center">Data tidak di temukan</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <!-- <a href="/computer/edit/<?= $computer['id']; ?>" class="btn btn-warning btn-circle"><span class="fa fa-pencil-alt"></span></a> -->
        <button class="btn btn-danger btn-circle" onclick="hapus()"><span class="fa fa-trash"></span></button>
        <a href="/printer" class="btn btn-primary btn-circle"><span class="fa fa-undo"></span></a>
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
                window.location.href = '/printer/delete/<?= $printer['id']; ?>'
            }
        })
    }
</script>
<?= $this->endSection(); ?>
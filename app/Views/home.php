<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-xl-3 col-md-6 mb-2">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body computer">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Jumlah Laptop</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $laptop; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-laptop fa-3x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-2">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body computer">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Jumlah PC</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pc; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-desktop fa-3x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-2">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body printer">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Jumlah Printer</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $printer; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-print fa-3x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-2">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body network">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                            Jumlah Network</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $network; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-network-wired fa-3x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.printer').click(function() {
            document.location.href = "/printer"
        });
        $('.computer').click(function() {
            document.location.href = "/computer"
        });
        $('.network').click(function() {
            document.location.href = "/network"
        });
    });
</script>
<?= $this->endSection(); ?>
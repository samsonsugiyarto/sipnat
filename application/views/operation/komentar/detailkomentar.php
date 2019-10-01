<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/default.jpg'); ?>" class="card-img">

            </div>

            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">Nabilla Nur Fadillah</h5>
                    <p class="card-text">27/09/2019 | 12.14</p>
                </div>
            </div>

        </div>
    </div>
    <br>

    <h5><b>Uraian Komentar</b></h5>
    <p>Luar biasa.... :)</p>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
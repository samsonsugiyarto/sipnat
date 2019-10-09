<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="card mb-2 col-lg-5">
        <div class="row no-gutters">
            <div class="col-md-3">
                <img src="<?= base_url('assets/img/profile/default.jpg'); ?>" class="card-img">

            </div>

            <div class="col-md-5">
                <div class="card-body">
                    <h5 class="card-title"><b>Nabilla Nur Fadillah</b></h5>
                    <p class="card-text">Perempuan</p>
                    <p class="card-text">nurfadillahnabilla@gmail.com</p>
                    <p class="card-text">0895634687760</p>

                </div>
            </div>


        </div>
        <!-- /.container-fluid -->

    </div>
</div>
</div>
<!-- End of Main Content -->
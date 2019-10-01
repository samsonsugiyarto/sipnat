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
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">52739</h5>
                    <p class="card-text">Endang Setyawati, M.Kom</p>
                    <p class="card-text">Perempuan</p>
                    <p class="card-text">Mengajar Mata Kuliah Ansi</p>
                    <p class="card-text">endangb17@gmail.com</p>
                    <p class="card-text">089563</p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
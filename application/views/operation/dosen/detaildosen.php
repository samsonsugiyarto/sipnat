<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail Dosen</h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/dosen/') . $dosen['image']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $dosen['nik']; ?></h5>
                    <p class="card-text"><?= $dosen['name']; ?></p>
                    <p class="card-text"><?= $dosen['jk']; ?></p>
                    <p class="card-text"><?= $dosen['mengajar']; ?></p>
                    <p class="card-text"><?= $dosen['email']; ?></p>
                    <p class="card-text"><?= $dosen['hp']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <a href="<?= base_url('operation/dosen'); ?>" class="btn btn-danger">Kembali</a>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
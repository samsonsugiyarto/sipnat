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
                <img src="<?= base_url('assets/img/profile/mahasiswa/') . $mahasiswa['image']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $mahasiswa['nim']; ?></h5>
                    <p class="card-text"><?= $mahasiswa['name']; ?></p>
                    <p class="card-text"><?= $mahasiswa['jk']; ?></p>
                    <p class="card-text"><?= $mahasiswa['jurusan']; ?></p>
                    <p class="card-text"><?= $mahasiswa['email']; ?></p>
                    <p class="card-text"><?= $mahasiswa['hp']; ?></p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
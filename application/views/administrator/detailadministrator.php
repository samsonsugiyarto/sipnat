<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail Admin</h1>
    <a href="<?= base_url('administrator'); ?>" class="btn btn-danger mb-2">Kembali</a>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $admin['image']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $admin['name']; ?></h5>
                    <p class="card-text"><?= $admin['jk']; ?></p>
                    <p class="card-text"><?= $admin['email']; ?></p>
                    <p class="card-text"><?= $admin['hp']; ?></p>
                    <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $admin['date_created']); ?> </small></p>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<!-- End of Main Content -->
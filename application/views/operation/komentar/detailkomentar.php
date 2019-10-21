<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <h1 class="h5 mb-2">Detail Komentar</h1>

    <?php if ($komen['id'] == $komen['id_komentar']) : ?>
        <a class="disable-links mb-2 btn btn-warning tombol-konfir " href="<?= base_url() ?>operation/konfirkomen/<?= $komen['id']; ?>">Konfirmasi</a>
    <?php else : ?>
        <a class=" btn btn-warning mb-2 tombol-konfir " href="<?= base_url() ?>operation/konfirkomen/<?= $komen['id']; ?>">Konfirmasi</a>

    <?php endif; ?>
    <a class=" btn btn-danger mb-2 " href="<?= base_url() ?>operation/komentar">Kembali</a>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="card col-lg-6">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $komen['image']; ?>" class="card-img">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title"><?= $komen['nama']; ?></h5>
                    <p class="card-text text-muted">Berkomentar sejak <?= $komen['waktu']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-6">
            <h5><b>Uraian Komentar</b></h5>
            <p style="background-color: #00000012; padding: 12px; border-radius: 8px;"> <?= $komen['uraian']; ?></p>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <a href="<?= base_url('operation/kandidat'); ?>" class="btn btn-danger">Kembali</a>


    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="row justify-content-center">
        <h4 class=" mb-4" style="font-weight: bold;">KANDIDAT <?= $kandidat['no_kandidat']; ?></h4>
    </div>


    <div class="row justify-content-around">

        <div class="card mb-3 col-lg-5">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="<?= base_url('assets/img/profile/kandidat/') . $kandidat['foto_ketua']; ?>" class="card-img">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title"><b>Calon Ketua Senat</b></h5>
                        <p class="card-text"> <?= $kandidat['nama']; ?></p>
                        <p class="card-text"> <?= $kandidat['jk_ketua']; ?></p>
                        <p class="card-text"> <?= $kandidat['email_ketua']; ?></p>
                        <p class="card-text"> <?= $kandidat['hp_ketua']; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3 col-lg-5">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="<?= base_url('assets/img/profile/kandidat/') . $kandidat['foto_wakil']; ?>" class="card-img">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title"><b>Calon Wakil Ketua</b></h5>
                        <p class="card-text"><?= $kandidat['wakil']; ?></p>
                        <p class="card-text"><?= $kandidat['jk_wakil']; ?></p>
                        <p class="card-text"><?= $kandidat['email_wakil']; ?></p>
                        <p class="card-text"><?= $kandidat['hp_wakil']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-center mt-3">
        <div class="col-">
            <h5><b>Visi</b></h5>
        </div>
    </div>
    <div class="row justify-content-center ">
        <div class="col-">
            <p><?= $kandidat['visi']; ?></p>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col-11">
            <h5><b>Misi</b></h5>
            <p class="col-6"><?= $kandidat['misi']; ?></p>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col-11">
            <h5><b>Uraian</b></h5>
            <p class="col-6"><?= $kandidat['uraian']; ?></p>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="card mb-2 col-lg-10">
        <div class="row no-gutters">
            <div class="col-md-3">
                <img src="<?= base_url('assets/img/profile/default.jpg'); ?>" class="card-img">

            </div>

            <div class="col-md-3">
                <div class="card-body">
                    <h5 class="card-title"><b>Ketua Senat Periode 2018/2019</b></h5>
                    <p class="card-text">Nomor Kandidat 2</p>
                    <p class="card-text">Kevin</p>

                </div>
            </div>
            <div class="col-md-3">
                <img src="<?= base_url('assets/img/profile/default.jpg'); ?>" class="card-img">

            </div>

            <div class="col-md-3">
                <div class="card-body">
                    <h5 class="card-title"><b>Wakil Ketua Senat Periode 2018/2019</b></h5>
                    <p class="card-text">No Kandidat 2</p>
                    <p class="card-text">Agnes</p>

                </div>
            </div>
        </div>
    </div>
    <br>
    <h5><b>Visi</b></h5>
    <p>Menjadikan kampus yang sejahtera</p>
    <br>
    <h5><b>Misi</b></h5>
    <p>1. Mengadakan berbagai lomba</p>
    <p>2. Menjadikan kampus yang humanis</p>
    <p>3. Menjadikan kampus yang humanis</p>
    <br>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
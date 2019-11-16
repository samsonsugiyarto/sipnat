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

    <div class="container">
        <div class="row  mt-3">
            <div class="col-sm-6">
                <h5><b>Visi</b></h5>
            </div>
        </div>
        <div class="row  ">
            <div class="col-sm-6">
                <p><?= $kandidat['visi']; ?></p>
            </div>
        </div>

        <div class="row ">
            <div class="col-sm-6 ">
                <h5><b>Misi</b></h5>
            </div>
        </div>
        <div class="row ">
            <div class="col-sm-6">
                <p style="text-align: justify;"><?= $kandidat['misi']; ?></p>

            </div>
        </div>

        <div class="row ">
            <div class="col-sm-6">
                <h5><b>Uraian</b></h5>
            </div>
        </div>
        <div class="row ">
            <div class="col-sm-9">
                <p style="text-align: justify;"><?= $kandidat['uraian']; ?></p>
            </div>
        </div>
        <?php

        $id_kan = $kandidat['no_kandidat'];
        $query = "SELECT kampanye.file_name
        FROM kampanye INNER JOIN kandidat
        ON kandidat.no_kandidat = kampanye.no_kandidat
        WHERE kampanye.no_kandidat = $id_kan ; ";
        $kampanye = $this->db->query($query)->result_array();

        $query1 = "SELECT kampanyevideo.*
        FROM kampanyevideo INNER JOIN kandidat
        ON kandidat.no_kandidat = kampanyevideo.no_kandidat
        WHERE kampanyevideo.no_kandidat = $id_kan ";
        $kampanyevideo = $this->db->query($query1)->result_array();
        ?>

        <div class="form-group row  ">
            <div class="col-sm-9">
                <div class="row">
                    <?php foreach ($kampanye as $panye) : ?>

                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/kampanye/') . $panye['file_name']; ?>" class="img-thumbnail">
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="row py-4">
                        <?php foreach ($kampanyevideo as $panyevideo) : ?>
                            <div class="col-sm-6">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <video controls>
                                        <source src="<?= base_url('assets/video/kampanye/') . $panyevideo['file_name']; ?>"> </video>
                                    </div>
                                    
                            </div>
                        <?php endforeach; ?>
                    </div>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Begin Page Content -->
<link rel="stylesheet" href="<?= base_url('assets/css/coblos.css'); ?>">
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php if ($this->session->flashdata('message')) : ?>

        <div class="flash-pilih" data-flashpilih="<?= $this->session->flashdata('message'); ?>"></div>
    <?php endif; ?>



    <div class="row justify-content-around text-center">
        <?php foreach ($kandidat as $kand) : ?>
            <div class="col-sm-4">
                <?php if ($kand['no_kandidat'] == 1) : ?>
                    <h1 class="btn btn-success btn-circle">
                        <?= $kand['no_kandidat']; ?>
                    </h1>

                <?php elseif ($kand['no_kandidat'] == 2) : ?>
                    <h1 class="btn btn-danger btn-circle">
                        <?= $kand['no_kandidat']; ?>
                    </h1>

                <?php elseif ($kand['no_kandidat'] == 3) : ?>
                    <h1 class="btn btn-warning btn-circle">
                        <?= $kand['no_kandidat']; ?>
                    </h1>
                <?php elseif ($kand['no_kandidat'] == 4) : ?>
                    <h1 class="btn btn-primary btn-circle">
                        <?= $kand['no_kandidat']; ?>
                    </h1>

                <?php endif; ?>

                <div class="row justify-content-around text-center ">
                    <div class="card-group">
                        <div class="card" style="float: left;">
                            <img src="<?= base_url('assets/img/profile/kandidat/') . $kand['foto_ketua']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $kand['nama']; ?></h5>
                                <p class="card-text">Calon Ketua Senat.</p>
                            </div>
                        </div>
                        <div class="card two" style="float: left;">
                            <img src="<?= base_url('assets/img/profile/kandidat/') . $kand['foto_wakil']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $kand['wakil']; ?></h5>
                                <p class="card-text">Calon Wakil Ketua Senat.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row justify-content-around text-center pb-4">
                    <div style=" padding-top: 10px;">
                        <?php if ($pilih) : ?>

                            <?php if ($kand['no_kandidat'] == 1) : ?>
                                <a href="<?= base_url('coblos/pilih/') . $kand['no_kandidat']; ?>" class=" disable-links btn btn-secondary btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Anda Sudah Memilih</span>
                                </a>
                            <?php elseif ($kand['no_kandidat'] == 2) : ?>
                                <a href="<?= base_url('coblos/pilih/') . $kand['no_kandidat']; ?>" class="disable-links btn btn-secondary btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Anda Sudah Memilih</span>
                                </a>
                            <?php elseif ($kand['no_kandidat'] == 3) : ?>
                                <a href="<?= base_url('coblos/pilih/') . $kand['no_kandidat']; ?>" class="disable-links btn btn-secondary btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Anda Sudah Memilih</span>
                                </a>

                            <?php elseif ($kand['no_kandidat'] == 4) : ?>
                                <a href="<?= base_url('coblos/pilih/') . $kand['no_kandidat']; ?>" class="disable-links btn btn-secondary btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Anda Sudah Memilih</span>
                                </a>
                            <?php endif; ?>


                        <?php else : ?>
                            <?php if ($kand['no_kandidat'] == 1) : ?>
                                <a class="btn btn-success btn-icon-split btn-sm pilihkon" href="<?= base_url('coblos/pilih/') . $kand['no_kandidat']; ?>">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Pilih Kandidat No. <?= $kand['no_kandidat']; ?></span>
                                </a>
                            <?php elseif ($kand['no_kandidat'] == 2) : ?>
                                <a class="btn btn-danger btn-icon-split btn-sm pilihkon" href="<?= base_url('coblos/pilih/') . $kand['no_kandidat']; ?>">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Pilih Kandidat No. <?= $kand['no_kandidat']; ?></span>
                                </a>
                            <?php elseif ($kand['no_kandidat'] == 3) : ?>
                                <a class="btn btn-warning btn-icon-split btn-sm pilihkon" href="<?= base_url('coblos/pilih/') . $kand['no_kandidat']; ?>">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Pilih Kandidat No. <?= $kand['no_kandidat']; ?></span>
                                </a>
                            <?php elseif ($kand['no_kandidat'] == 4) : ?>
                                <a class="btn btn-primary btn-icon-split btn-sm pilihkon" href="<?= base_url('coblos/pilih/') . $kand['no_kandidat']; ?>">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Pilih Kandidat No. <?= $kand['no_kandidat']; ?></span>
                                </a>
                            <?php endif; ?>

                        <?php endif; ?>

                    </div>
                </div>
                <!-- Button trigger modal -->
                <a href="" class="btn btn-secondary mb-3" data-toggle="modal" data-target="#detailModal<?= $kand['no_kandidat']; ?>">Detail Kandidat</a>

                <!-- Modal -->
                <div class="modal fade" id="detailModal<?= $kand['no_kandidat']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-gray-800" id="exampleModalCenterTitle">Detail Kandidat No. <?= $kand['no_kandidat']; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row justify-content-center">
                                        <div class="col-sm-12 ">
                                            <h4>Visi</h4>
                                            <p><?= $kand['visi']; ?></p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-sm-12 ">
                                            <h4>Misi</h4>
                                            <p style="text-align: justify;"><?= $kand['misi']; ?></p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-sm-12 ">
                                            <h4>Tentang</h4>
                                            <p style="text-align: justify;"><?= $kand['uraian']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        <?php endforeach; ?>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
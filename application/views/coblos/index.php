<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php if ($this->session->flashdata('message')) : ?>

        <div class="flash-pilih" data-flashpilih="<?= $this->session->flashdata('message'); ?>"></div>
    <?php endif; ?>

    <div class="row justify-content-around">

        <?php foreach ($kandidat as $kand) : ?>

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

            <?php endif; ?>
        <?php endforeach; ?>

    </div>
    <div class="row justify-content-around">
        <?php foreach ($kandidat as $kand) : ?>
            <div class="card-group" style="width: 350px;">
                <div class="card" style="float: left;">
                    <img src="<?= base_url('assets/img/profile/kandidat/') . $kand['foto_ketua']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $kand['nama']; ?></h5>
                        <p class="card-text">Calon Ketua Senat.</p>
                    </div>
                </div>
                <div class="card" style="float: left;">
                    <img src="<?= base_url('assets/img/profile/kandidat/') . $kand['foto_wakil']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $kand['wakil']; ?></h5>
                        <p class="card-text">Calon Wakil Ketua Senat.</p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>


    <div class="row justify-content-around">
        <?php foreach ($kandidat as $kand) : ?>
            <div style=" padding-top: 10px;">
                <?php if ($pilih) : ?>

                    <?php if ($kand['no_kandidat'] == 1) : ?>
                        <a href="<?= base_url('coblos/pilih/') . $kand['no_kandidat']; ?>" class=" disable-links btn btn-secondary btn-icon-split btn-sm">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Pilih Kandidat No. <?= $kand['no_kandidat']; ?></span>
                        </a>
                    <?php elseif ($kand['no_kandidat'] == 2) : ?>
                        <a href="<?= base_url('coblos/pilih/') . $kand['no_kandidat']; ?>" class="disable-links btn btn-secondary btn-icon-split btn-sm">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Pilih Kandidat No. <?= $kand['no_kandidat']; ?></span>
                        </a>
                    <?php elseif ($kand['no_kandidat'] == 3) : ?>
                        <a href="<?= base_url('coblos/pilih/') . $kand['no_kandidat']; ?>" class="disable-links btn btn-secondary btn-icon-split btn-sm">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Pilih Kandidat No. <?= $kand['no_kandidat']; ?></span>
                        </a>
                    <?php endif; ?>



                <?php else : ?>
                    <?php if ($kand['no_kandidat'] == 1) : ?>
                        <a href="<?= base_url('coblos/pilih/') . $kand['no_kandidat']; ?>" class="btn btn-success btn-icon-split btn-sm">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Pilih Kandidat No. <?= $kand['no_kandidat']; ?></span>
                        </a>
                    <?php elseif ($kand['no_kandidat'] == 2) : ?>
                        <a href="<?= base_url('coblos/pilih/') . $kand['no_kandidat']; ?>" class="btn btn-danger btn-icon-split btn-sm">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Pilih Kandidat No. <?= $kand['no_kandidat']; ?></span>
                        </a>
                    <?php elseif ($kand['no_kandidat'] == 3) : ?>
                        <a href="<?= base_url('coblos/pilih/') . $kand['no_kandidat']; ?>" class="btn btn-warning btn-icon-split btn-sm">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Pilih Kandidat No. <?= $kand['no_kandidat']; ?></span>
                        </a>
                    <?php endif; ?>

                <?php endif; ?>

            </div>
        <?php endforeach; ?>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
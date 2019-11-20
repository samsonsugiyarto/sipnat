<div class="container-fluid ">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>votelist.css">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> Vote List</h1>

    <!-- <div class="row justify-content-around">

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

    <div class="row justify-content-around mt-2">
        <?php foreach ($kandidat as $kand) : ?>

            <h5>Jumlah Suara <?= $kand['jumlah_suara']; ?></h5>
        <?php endforeach; ?>
    </div>
    <div class="row justify-content-around ">
        <?php foreach ($kandidat as $kand) : ?>
            <div class="row ">
                <div class="col">
                    <h3><?php
                            $a = $kand['jumlah_suara'];
                            $b = $js['jsuara'];
                            if ($b != 0) {
                                $hasil = round($kand['jumlah_suara'] / $js['jsuara'] * 100);
                            } else {
                                $hasil = $kand['jumlah_suara'];
                            }
                            echo $hasil; ?> %</h3>
                </div>
            </div>

        <?php endforeach; ?>

    </div> -->
    <?php if ($this->session->flashdata('message')) : ?>

        <div class="flash-pemilih" data-flashpemilih="<?= $this->session->flashdata('message'); ?>"></div>
    <?php endif; ?>

    <div class="row hapuspemilih">
        <div class="col-sm-2">
            <a href="<?= base_url('operation/hapusDataPemilih'); ?>" class="btn btn-danger mb-3 hapus-coblos ">Hapus Semua Data</a>

        </div>
        <div class="col-sm-10">
            <p class=" text-gray-800">*Hati - Hati data Pemilih akan terhapus semua!</p>
        </div>
    </div>



    <div class="row  ">
        <div class="col-lg-12">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table table-bordered table-hover  " id="reminders">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Role</th>
                            <th scope="col">Waktu</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i = 1; ?>
                        <?php foreach ($datapemilih as $pemilih) : ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $pemilih['id_pemilih']; ?></td>
                                <td><?= $pemilih['name']; ?></td>
                                <td><?= $pemilih['tipe']; ?></td>
                                <td><?= date('d F Y H:i:s', $pemilih['waktu']); ?></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>


</div>
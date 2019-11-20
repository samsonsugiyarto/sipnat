<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jurusan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jurusan ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas  fa-graduation-cap fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('operation'); ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Lihat Detail Jurusan</span>
                </a>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Mahasiswa Aktif</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $mahasiswa ?>
                            </div>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <div class=" pl-4 text-xs font-weight-bold text-gray-600 text-uppercase mb-1">Dari <?= $mhs ?> Mahasiswa Terdaftar</div>
                <a href="<?= base_url('operation/mahasiswa'); ?>" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Lihat Detail Mahasiswa</span>
                </a>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Dosen Aktif</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $dosen ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-male fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <div class=" pl-4 text-xs font-weight-bold text-gray-600 text-uppercase mb-1">Dari <?= $dsn ?> Dosen Terdaftar</div>
                <a href="<?= base_url('operation/dosen'); ?>" class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Lihat Detail Dosen</span>
                </a>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pimpinan Aktif</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pimpinan ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-secret fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <div class=" pl-4 text-xs font-weight-bold text-gray-600 text-uppercase mb-1">Dari <?= $pimp ?> Pimpinan Terdaftar</div>
                <a href="<?= base_url('operation/pimpinan'); ?>" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Lihat Detail Pimpinan</span>
                </a>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Kandidat</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kandidat ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('operation/kandidat'); ?>" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Lihat Detail Kandidat</span>
                </a>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-secondary  shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Komentar Terkonfirmasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kon_komentar ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <div class=" pl-4 text-xs font-weight-bold text-gray-600 text-uppercase mb-1">Dari <?= $komentar ?> Komentar</div>
                <a href="<?= base_url('operation/komentar'); ?>" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Lihat Komentar</span>
                </a>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <?php if ($user['role_id'] == 1) : ?>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Administrator</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $admin ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-history fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('administrator'); ?>" class="btn btn-warning btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                        <span class="text">Lihat Administrator</span>
                    </a>
                </div>
            </div>
        <?php endif; ?>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success  shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Riwayat</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $riwayat ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-history fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('riwayat/riwayat'); ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Lihat Riwayat</span>
                </a>
            </div>
        </div>


    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
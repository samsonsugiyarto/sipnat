<!doctype html>
<html lang="en" id="home">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- My css-->
    <link rel="stylesheet" href="<?= base_url('assets/css/reset.css'); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="<?= base_url('assets/img/logostikom.png'); ?>">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>SIPNAT | Sistem Informasi Pemilihan Senat Mahasiswa</title>
</head>

<style>
    body {
        background-color: #fffdfdcc;
    }
</style>

<body data-spy="scroll" data-target="#navbar-example2" data-offset="160">


    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg sticky-top" id="navbar-example2">
        <div class="container">
            <a class="navbar-brand page-scroll" href="#home"> <img id="logo" alt="Logo" src="<?= base_url('assets/img/logostikom.png') ?>" width="65" height="65"> <span>SIPNAT<b>Sistem Informasi Pemilihan Senat Mahasiswa</b></span> </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active   page-scroll" href="#home">Home <span class="sr-only"></span></a>
                    <a class="nav-item nav-link page-scroll" href="#voting">Voting <span></span></a>
                    <a class="nav-item nav-link  page-scroll" href="#personil">Tentang Senat</a>
                    <a class="nav-item nav-link  page-scroll" href="#gallery">Galeri </a>
                    <a class="nav-item nav-link" href="<?= base_url('home/kampanye'); ?>">Kampanye</a>
                    <a class="nav-item nav-link" href="<?= base_url('home/riwayatsenat'); ?>">Riwayat Senat</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-item nav-link btn btn-primary text-white tombol " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Login
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url('auth'); ?>">Admin</a>
                            <a class="dropdown-item" href="<?= base_url('auth/pimpinan'); ?>">Pimpinan STIKOM</a>
                            <a class="dropdown-item" href="<?= base_url('auth/dosen'); ?>">Dosen</a>
                            <a class="dropdown-item" href="<?= base_url('auth/mahasiswa'); ?>">Mahasiswa</a>
                        </div>
                    </li>

                </div>

            </div>


            </data-spy="scroll">
    </nav>
    <!-- akhir Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron  jumbotron-fluid">
        <div class="container">

            <!-- info panel -->
            <div class="row justify-content-center">
                <div class="col-7 col-md-5 info-panel">
                    <p>Waktu hitung mundur</p>
                    <h4 id="teks"></h4>
                </div>
            </div>
        </div>
        <!-- <script src=" <?= base_url('assets/js/hitungmundur.js'); ?>"></script> -->
        <!-- akhir info panel -->
        <div class="cover-overlay  ">
            <div class="container">
                <h1 class="display-4"><span>Pemilihan Ketua Senat Mahasiswa</span> </h1>
                <h1 class="display-3 ">STIKOM Yos Sudarso Purwokerto </h1>
            </div>
        </div>
        <!-- container -->

    </div>

    <!-- akhir Jumbotron -->

    <!-- Workingspace -->
    <section id="voting">
        <div class="container gallery-container">
            <div class="row workingspace">
                <div class="col-lg">
                    <h2><span>LIVE </span>Voting </h2>
                    <!-- desain voting card -->
                    <!-- <div class="row justify-content-around pt-4">
                    <?php foreach ($kandidat as $kand) : ?>
                        <div class="card-group">
                            <div class="card cardfoto">
                                <img src="<?= base_url('assets/img/profile/kandidat/') . $kand['foto_ketua']; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $kand['nama']; ?></h5>
                                    <p class="card-text">Ketua Senat</p>
                                </div>
                            </div>
                            <div class="card cardfoto">
                                <img src="<?= base_url('assets/img/profile/kandidat/') . $kand['foto_wakil']; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $kand['wakil']; ?></h5>
                                    <p class="card-text">Wakil Ketua Senat</p>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
                <div class="row justify-content-around mt-2">
                    <?php foreach ($kandidat as $kand) : ?>
                        <div class="col-4">
                            <?php
                            $a = $kand['jumlah_suara'];
                            $b = $js['jsuara'];
                            if ($b != 0) {
                                $hasil = round($kand['jumlah_suara'] / $js['jsuara'] * 100);
                            } else {
                                $hasil = $kand['jumlah_suara'];
                            }
                            ?>
                            <h3><span><?= $hasil ?> %</span></h3>

                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="row justify-content-around">
                    <?php foreach ($kandidat as $kand) : ?>
                        <div class="col">
                            <h3 style="font-size: 17px;"> <?= $kand['jumlah_suara']; ?> Suara</h3>
                        </div>
                    <?php endforeach; ?>
                </div> -->
                    <!-- Akhir desain voting card -->
                    <div class="row vote ">
                        <!-- <canvas id="myChart" width="1" height="1"></canvas> -->
                        <div class="col-sm-6  ">
                            <div id="piechart" class="chart"></div>
                        </div>
                        <div class="col-sm-6 py-5 ">
                            <h3>TOTAL<br>
                                <P>Suara Masuk</P><span> <?= $js['jsuara'] ?> Suara</span>
                            </h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="row justify-content-center " id="personil">
        <div class="col-sm-5 zero-panel text-center tentang  ">
            <h1 class="h2">TENTANG SEMA SYS</h1>
            <div id="accordion" class="mt-4">
                <div class="card">
                    <div class="card-header" id="heading-1">
                        <h5 class="mb-0">
                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                VISI SEMA SYS
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-1" class="collapse" data-parent="#accordion" aria-labelledby="heading-1">
                        <div class="card-body isi">
                            “ Terwujudnya Senat Mahasiswa yang profesional dan humanis yang dapat mengayomi aspirasi mahasiswa untuk membentuk generasi yang unggul”
                        </div>
                    </div>
                </div>

            </div>
            <div id="accordion" class="mt-3">
                <div class="card">
                    <div class="card-header" id="heading-2">
                        <h5 class="mb-0">
                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                Misi SEMA SYS
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                        <div class="card-body isi" style="text-align: justify;">
                            Memaksimalkan fungsi Senat.<br><br>
                            Menampung aspirasi mahasiswa dari semua golongan tanpa membeda bedakan.<br><br>
                            Menjalankan program kerja yang dibutuhkan mahasiswa.<br><br>
                            Menjadikan senat sebagai sumber informasi terpercaya bagi mahasiswa
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>


    <!-- TEAM -->
    <!-- <div class="row justify-content-center" id="personil">
        <div class="col-12 zero-panel text-center tentang">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card-deck">
                        <div class="card cardedit">
                            <img src="<?= base_url('assets/img/default.jpg') ?>" class="card-img-top" alt="...">
                            <div class="card-body isicard">
                                <h5 class="card-title">Feni Lestari</h5>
                                <p class="card-text">Ketua Senat</p>
                            </div>
                        </div>
                        <div class="card cardedit">
                            <img src="<?= base_url('assets/img/default.jpg') ?>" class="card-img-top" alt="...">
                            <div class="card-body isicard">
                                <h5 class="card-title">Agnes Shita</h5>
                                <p class="card-text">Wakil Ketua Senat</p>
                            </div>
                        </div>
                        <div class="card cardedit">
                            <img src="<?= base_url('assets/img/default.jpg') ?>" class="card-img-top" alt="...">
                            <div class="card-body isicard">
                                <h5 class="card-title">Veby</h5>
                                <p class="card-text">Sekretaris Senat</p>
                            </div>
                        </div>
                        <div class="card cardedit">
                            <img src="<?= base_url('assets/img/default.jpg') ?>" class="card-img-top" alt="...">
                            <div class="card-body isicard">
                                <h5 class="card-title">Axel Haryanto</h5>
                                <p class="card-text">Bendahara Senat</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- END TEAM -->

    <div class="container gallery-container" id="gallery">
        <br>
        <h1>Galeri</h1>

        <p class="page-description text-center">Galeri Kegiatan Senat</p>

        <div class="tz-gallery">

            <div class="row">

                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a class="lightbox" href="<?= base_url('assets/img/gallery/1.jpg') ?>">
                            <img src="<?= base_url('assets/img/gallery/1.jpg') ?>" alt="Park">
                        </a>
                        <div class="caption">
                            <h3>STUDY BANDING
                            </h3>
                            <p>Study Banding dengan BEM IT TELKOM PURWOKETO.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a class="lightbox" href="<?= base_url('assets/img/gallery/2.jpg') ?>">
                            <img src="<?= base_url('assets/img/gallery/2.jpg') ?>" alt="Park">
                        </a>
                        <div class="caption">
                            <h3>STUDY BANDING</h3>
                            <p>Study Banding dengan BEM Universitas AMIKOM.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a class="lightbox" href="<?= base_url('assets/img/gallery/3.jpg') ?>">
                            <img src="<?= base_url('assets/img/gallery/3.jpg') ?>" alt="Park">
                        </a>
                        <div class="caption">
                            <h3>SEMINAR START-UP</h3>
                            <p>Seminar Start-Up kolaborasi dengan Innocircle.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a class="lightbox" href="<?= base_url('assets/img/gallery/4.jpg') ?>">
                            <img src="<?= base_url('assets/img/gallery/4.jpg') ?>" alt="Park">
                        </a>
                        <div class="caption">
                            <h3>UPACARA</h3>
                            <p>Upacara dalam rangka memperingati Hari Pendidikan Nasional dan HUR RI ke 74.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a class="lightbox" href="<?= base_url('assets/img/gallery/5.jpg') ?>">
                            <img src="<?= base_url('assets/img/gallery/5.jpg') ?>" alt="Park">
                        </a>
                        <div class="caption">
                            <h3>SEMINAR</h3>
                            <p>Seminar Peran Millenials dalam Menjaga Pluralitas NKRI & Buka Bersama.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a class="lightbox" href="<?= base_url('assets/img/gallery/6.jpg') ?>">
                            <img src="<?= base_url('assets/img/gallery/6.jpg') ?>" alt="Park">
                        </a>
                        <div class="caption">
                            <h3>DIES NATALIS</h3>
                            <p>Lomba menghias tumpeng.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a class="lightbox" href="<?= base_url('assets/img/gallery/7.jpg') ?>">
                            <img src="<?= base_url('assets/img/gallery/7.jpg') ?>" alt="Park">
                        </a>
                        <div class="caption">
                            <h3>DIES NATALIS</h3>
                            <p>Kompetisi Mobile Legends.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a class="lightbox" href="<?= base_url('assets/img/gallery/8.jpg') ?>">
                            <img src="<?= base_url('assets/img/gallery/8.jpg') ?>" alt="Park">
                        </a>
                        <div class="caption">
                            <h3>PORS 2019</h3>
                            <p>Olahraga Futsal.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a class="lightbox" href="<?= base_url('assets/img/gallery/9.jpg') ?>">
                            <img src="<?= base_url('assets/img/gallery/9.jpg') ?>" alt="Park">
                        </a>
                        <div class="caption">
                            <h3>PORS 2019</h3>
                            <p>Olahraga Bulu Tangkis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a class="lightbox" href="<?= base_url('assets/img/gallery/10.jpg') ?>">
                            <img src="<?= base_url('assets/img/gallery/10.jpg') ?>" alt="Park">
                        </a>
                        <div class="caption">
                            <h3>BANYUMAS CAMPUS EXPO</h3>
                            <p>Tim Formatur Banyumas Campus Expo 2020.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a class="lightbox" href="<?= base_url('assets/img/gallery/11.jpg') ?>">
                            <img src="<?= base_url('assets/img/gallery/11.jpg') ?>" alt="Park">
                        </a>
                        <div class="caption">
                            <h3>EVENT Bersama GUSDURIAN</h3>
                            <p>Nobar dan doa bersama untuk para pahlawan dalam rangka memperingati hari pahlawan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a class="lightbox" href="<?= base_url('assets/img/gallery/12.jpg') ?>">
                            <img src="<?= base_url('assets/img/gallery/12.jpg') ?>" alt="Park">
                        </a>
                        <div class="caption">
                            <h3>MAKRAB 2019</h3>
                            <p>Seni Tari dalam Acara Malam Keakraban Mahasiswa Baru 2019</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a class="lightbox" href="<?= base_url('assets/img/gallery/13.jpg') ?>">
                            <img src="<?= base_url('assets/img/gallery/13.jpg') ?>" alt="Park">
                        </a>
                        <div class="caption">
                            <h3>MAKRAB 2019</h3>
                            <p>Suasana dalam Acara Malam Keakraban Mahasiswa Baru 2019</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a class="lightbox" href="<?= base_url('assets/img/gallery/14.jpg') ?>">
                            <img src="<?= base_url('assets/img/gallery/14.jpg') ?>" alt="Park">
                        </a>
                        <div class="caption">
                            <h3>BAKSOS 2019</h3>
                            <p>Bakti Sosial SEMA bersama Mahasiswa baru 2019</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a class="lightbox" href="<?= base_url('assets/img/gallery/15.jpg') ?>">
                            <img src="<?= base_url('assets/img/gallery/15.jpg') ?>" alt="Park">
                        </a>
                        <div class="caption">
                            <h3>BAKSOS 2019</h3>
                            <p>Bakti Sosial SEMA bersama Mahasiswa Baru 2019</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a class="lightbox" href="<?= base_url('assets/img/gallery/16.jpg') ?>">
                            <img src="<?= base_url('assets/img/gallery/16.jpg') ?>" alt="Park">
                        </a>
                        <div class="caption">
                            <h3>INISIASI MABA 2019</h3>
                            <p>Inisiasi Mahasiswa Baru 2019</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a class="lightbox" href="<?= base_url('assets/img/gallery/17.jpg') ?>">
                            <img src="<?= base_url('assets/img/gallery/17.jpg') ?>" alt="Park">
                        </a>
                        <div class="caption">
                            <h3>LDK 2019</h3>
                            <p>Latihan Dasar Kepemimpinan 2019</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-6 col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video controls>
                            <source src="<?= base_url('assets/video/INISIASI_2019.mp4'); ?>"> </video>
                    </div>
                    <div class="caption">
                        <h3 class="mt-2">INISIASI 2019</h3>
                        <p>Cuplikan video kegiatan inisisasi 2019</p>
                    </div>
                </div>

            </div>

        </div>

    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <script>
        baguetteBox.run('.tz-gallery');
    </script>
    <div class="container komen-container  mt-4" id="komen">
        <div class="overflow-auto" style=" width:auto; height:600px; ;
        ">
            <div class="sticky-top" style="background-color: white; border-radius: 30px;">

                <h1 class="py-3  pl-4 "><?= $hitungkomen ?> Komentar</h1>
            </div>
            <div class="row justify-content-start  mt-3">

                <div class="col-sm-7 komen  mt-1">
                    <?php foreach ($komentar as $komen) : ?>
                        <?php
                        $user = $this->db->get_where('user', ['id' => $komen['user_id']])->row_array();
                        $pimpinan = $this->db->get_where('pimpinan', ['nidn' => $komen['user_id']])->row_array();
                        $dosen = $this->db->get_where('dosen', ['nik' => $komen['user_id']])->row_array();
                        $mhs = $this->db->get_where('mahasiswa', ['nim' => $komen['user_id']])->row_array();
                        ?>
                        <div class="row">
                            <div class="col-auto-12">
                                <img style="height: 3rem; width: 3rem;" src=" <?php if ($komen['role_id'] == 1 || $komen['role_id'] == 2) : ?>
                        <?= base_url('assets/img/profile/') . $user['image']; ?>
                        <?php elseif ($komen['role_id'] == 3) : ?>
                        <?= base_url('assets/img/profile/pimpinan/') . $pimpinan['image']; ?>

                        <?php elseif ($komen['role_id'] == 4) : ?>
                        <?= base_url('assets/img/profile/dosen/') . $dosen['image']; ?>

                        <?php elseif ($komen['role_id'] == 5) : ?>
                        <?= base_url('assets/img/profile/mahasiswa/') . $mhs['image']; ?>
                        <?php endif; ?>" class="img-profile rounded-circle float-left" alt="...">

                                <?php if ($komen['role_id'] == 1 || $komen['role_id'] == 2) : ?>
                                    <h6><?= ucwords(strtolower($user['name'])); ?> <small class="text-muted">Admin </small></h6>
                                <?php elseif ($komen['role_id'] == 3) : ?>

                                    <h6><?= ucwords(strtolower($pimpinan['name'])); ?></h6>
                                <?php elseif ($komen['role_id'] == 4) : ?>

                                    <h6><?= ucwords(strtolower($dosen['name'])); ?></h6>

                                <?php elseif ($komen['role_id'] == 5) : ?>

                                    <h6><?= ucwords(strtolower($mhs['name'])); ?></h6>
                                <?php endif; ?>


                                <h5> <?= time_since($komen['waktu']); ?></h5>
                                <p><?= $komen['uraian']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- akhir container -->

    <!-- Footer -->
    <footer>
        <div class="container text-center ">
            <div class="row">
                <div class="col-sm-12 ">
                    <p>&copy; copyright 2019 | STIKOM Yos Sudarso Purwokerto</p>
                    <!-- <p>&copy; copyright 2019 | built with <i class="fas fa-heart"></i> by. <a href="http://instagram.com/samsonsugiyarto">Team A</a></p> -->
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>Sistem Informasi Pemilihan Senat</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Akhir Footer -->
    <!-- Optional JavaScript -->

    <!-- Script Diagram Pie/donat Voting -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable(
                [
                    ['Nama Kandidat', 'Suara'],
                    <?php foreach ($kandidat as $kand) {
                        // $a = $kand['jumlah_suara'];
                        // $b = $js['jsuara'];
                        // if ($b != 0) {
                        //     $hasil = round($kand['jumlah_suara'] / $js['jsuara'] * 100, 2);
                        // } else {
                        //     $hasil = $kand['jumlah_suara'];
                        // }

                        echo "['" . $kand['nama'] . "', " . $kand['jumlah_suara'] . "],";
                    } ?>


                ]);

            var options = {
                backgroundColor: 'none',
                pieHole: 0.50,
                pieSliceBorderColor: 'none',
                chartArea: {
                    top: 30,
                    width: "90%",
                    height: "90%",

                },
                pieSliceBorderColor: 'black',
                pieSliceTextStyle: {
                    fontName: 'Poppins',
                    color: 'black',
                    bold: true,
                    fontSize: '16',

                },
                tooltip: {
                    textStyle: {
                        fontName: 'Poppins',
                        color: 'black'
                    },
                    showColorCode: true,
                    // text: 'value',


                },

                legend: {
                    position: 'top',
                    alignment: 'center',
                    textStyle: {
                        color: 'black',
                        fontSize: '14',
                        // bold: true,
                        fontName: 'Poppins'

                    }
                },
                colors: ["#3366cc", "#dc3912", "#ff9900", "#109618", "#990099", "#0099c6", "#dd4477", "#66aa00", "#b82e2e", "#316395", "#3366cc", "#994499", "#22aa99", "#aaaa11", "#6633cc", "#e67300", "#8b0707", "#651067", "#329262", "#5574a6", "#3b3eac", "#b77322", "#16d620", "#b91383", "#f4359e", "#9c5935", "#a9c413", "#2a778d", "#668d1c", "#bea413", "#0c5922", "#743411"],


            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
    <!-- Akhir Script Diagram Pie -->



    <!-- Diagram -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <!-- <Script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myDoughnutChart = new Chart(ctx, {
            type: 'doughnut',
            // type: 'pie',
            data: {
                datasets: [{
                    data: [

                        <?php foreach ($kandidat as $kand) {


                            $a = $kand['jumlah_suara'];
                            $b = $js['jsuara'];
                            if ($b != 0) {
                                $hasil = round($kand['jumlah_suara'] / $js['jsuara'] * 100);
                            } else {
                                $hasil = $kand['jumlah_suara'];
                            }

                            echo   $hasil .  ",";
                        } ?>
                    ],
                    backgroundColor: [
                        'rgba(170, 139, 0, 0.897)',
                        'rgba(11, 0, 170, 0.74)',
                        'rgba(170, 0, 0, 0.74)'

                    ],
                    borderColor: [
                        'rgb(255, 208, 0)',
                        'rgb(0, 68, 255)',
                        'rgb(255, 0, 0)'

                    ]
                }],

                labels: [
                    <?php foreach ($kandidat as $kand) {
                        echo "'" . $kand['nama'] . "',";
                    } ?>
                ],





            },
            options: {


                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            return data['labels'][tooltipItem['index']] + ': ' + data['datasets'][0]['data'][tooltipItem['index']] + '%';
                        }
                    },

                    bodyFontSize: 18
                },
                legend: {
                    position: 'right',
                    labels: {
                        fontSize: 18,
                        fontColor: 'rgb(255, 255, 255)'
                    }
                }


            },


        });
    </Script> -->
    <!-- Akhir Diagram -->
    <!-- Hitung Mundur -->
    <?php
    $date = $countdown['date'];
    $tt = strtotime($date);
    $newDateY = date("Y", $tt);
    $newDateMD = date("M d", $tt);
    $time = $countdown['time'];
    ?>

    <script>
        const tanggalTujuan = new Date('<?= $newDateMD; ?>, <?= $newDateY; ?> <?= $time; ?>').getTime();
        // const tanggalTujuan = new Date('Dec 02, 2021 16:00:00').getTime();


        const hitungMundur = setInterval(function() {

            const sekarang = new Date().getTime();
            const selisih = tanggalTujuan - sekarang;


            const hari = Math.floor(selisih / (1000 * 60 * 60 * 24));

            const jam = Math.floor(selisih % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));

            const menit = Math.floor(selisih % (1000 * 60 * 60) / (1000 * 60));

            const detik = Math.floor(selisih % (1000 * 60) / 1000);

            var txtj = " jam ";
            var tjam = txtj.fontsize(2);
            var txtm = " menit ";
            var tmenit = txtm.fontsize(2);
            var txtd = " detik ";
            var tdetik = txtd.fontsize(2);

            const teks = document.getElementById('teks');
            teks.innerHTML = jam + tjam + menit + tmenit + detik + tdetik;

            if (selisih < 0) {
                clearInterval(hitungMundur);
                teks.innerHTML = 'Waktu Anda HABIS!';

            }

        }, 1000);
    </script>
    <!-- Akhir Hitung Mundur -->









    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
        $('.navbar-nav a').on('click', function() {
            $('.navbar-nav a').removeClass('active');
            $(this).addClass('active');
        });
    </script>
    <script>
        src = "<?= base_url('assets/js/jquery.easing.1.3.js') ?>"
    </script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'>
        < script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity = "sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin = "anonymous" >
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="<?= base_url('assets/js/pindahnav.js'); ?>">
    </script>






</body>

</html>
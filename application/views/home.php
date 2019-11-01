<!doctype html>
<html lang="en" id="home">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- My css-->
    <link rel="stylesheet" href="assets/css/reset.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">






    <link rel="icon" type="image/png" href="<?= base_url('assets/img/logostikom.png'); ?>">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">

    <title>SIPNAT | Sistem Informasi Pemilihan Senat</title>
</head>

<style>
    body {
        background-color: #fffdfdcc;
    }
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg sticky-top">
        <div class="container">
            <img class="logo" src="assets/img/logostikom.png">
            <a class="navbar-brand page-scroll" href="#home">SIPNAT</a>
            <h1 class="navbar-brand2">Sistem Informasi Pemilihan Ketua SENAT</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active  page-scroll" href="#home">Home <span class="sr-only"></span></a>
                    <a class="nav-item nav-link page-scroll" href="#voting">Voting <span></span></a>
                    <a class="nav-item nav-link  page-scroll" href="#gallery">Galeri</a>
                    <a class="nav-item nav-link  page-scroll" href="#personil">Tentang Senat</a>
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

        </div>
    </nav>
    <!-- akhir Navbar -->

    <!-- Jumbotron -->
    <div class="cover-overlay ">
        <div class="jumbotron  jumbotron-fluid">
            <div class="container">
                <h1 class="display-4"><span>Pemilihan Ketua SENAT</span> </h1>
                <h1 class="display-3">STIKOM Yos Sudarso Purwokerto </h1>
            </div>
        </div>
    </div>

    <!-- akhir Jumbotron -->


    <!-- container -->
    <div class="container">

        <!-- info panel -->
        <div class="row justify-content-center">
            <div class="col-5 info-panel">
                <h4 id="teks"></h4>
                <p>Waktu hitung mundur.</p>
            </div>
        </div>
    </div>
    <script src="assets/js/hitungmundur.js"></script>
    <!-- akhir info panel -->


    <!-- Workingspace -->
    <section id="voting">
        <div class="row workingspace">
            <div class="col-lg">
                <h2><span>LIVE </span>Voting </h2>
                <div class="row justify-content-around pt-4">
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
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-5 py-4">
                        <canvas id="myChart" width="1" height="1"></canvas>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-sm-12">
                        <h3 style="font-size: 21px; color:rgba(255, 255, 255, 0.750);">Total Suara Masuk : <?= $js['jsuara'] ?> Suara</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Gallery-->

    <div class="container2 gambar" id="gallery">
        <h1>Gallery Kegiatan SENAT</h1>
        <div class="row justify-content-center">
            <div class="row">
                <div class="center">
                    <ul class="gambar2">
                        <li>
                            <a href="#gambar-1">
                                <img src="assets/img/thumb/1.png" alt="Inisiasi">
                                <span>Inisiasi</span>
                            </a>
                        </li>
                        <div class="overlay" id="gambar-1">
                            <a href="#gallery" class="close">X CLOSE</a>
                            <img src="assets/img/full/1.png" alt="Inisiasi">
                        </div>
                        <li>
                            <a href="#gambar-2">
                                <img src="assets/img/thumb/baksosthumb.png" alt="Baksos">
                                <span>Baksos</span>
                            </a>
                        </li>
                        <div class="overlay" id="gambar-2">
                            <a href="#" class="close">X CLOSE</a>
                            <img src="assets/img/full/baksos.png" alt="Baksos">
                        </div>
                        <li>
                            <a href="#gambar-3">
                                <img src="assets/img/thumb/diesthumb.png" alt="Dies">
                                <span>Dies Natalis</span>
                            </a>
                        </li>
                        <div class="overlay" id="gambar-3">
                            <a href="#" class="close">X CLOSE</a>
                            <img src="assets/img/full/dies.png" alt="Dies">
                        </div>
                        <li>
                            <a href="#gambar-4">
                                <img src="assets/img/thumb/bukberthumb.png" alt="Bukber">
                                <span>Bukber</span>
                            </a>
                        </li>
                        <div class="overlay" id="gambar-4">
                            <a href="#" class="close">X CLOSE</a>
                            <img src="assets/img/full/bukber.png" alt="Bukber">
                        </div>
                        <li>
                            <a href="#gambar-5">
                                <img src="assets/img/thumb/lantikthumb.png" alt="Lantik">
                                <span>Pelantikan Senat</span>
                            </a>
                        </li>
                        <div class="overlay" id="gambar-5">
                            <a href="#" class="close">X CLOSE</a>
                            <img src="assets/img/full/lantik.png" alt="Lantik">
                        </div>


                        <div class="clear"></div>
                    </ul>




                </div>
            </div>

        </div>
    </div>


    <!-- akhir Gallery -->
    <div class="row justify-content-center" id="personil">
        <div class="col-12 zero-panel text-center background1">
            <div class="font">
                <h1>TENTANG SENAT</h1>
            </div>
            <div class="row mt-4 justify-content-center">
                <div class="col-md-auto visibtn">
                    <h2 class="badge badge-pill badge-success"><span>VISI</span> </h2>
                </div>
            </div>
            <div class="row mt-3 justify-content-center">
                <div class="col-mx-auto">
                    <figure class="figurevisi visi">
                        Menjadikan Kampus Humanis dan Unggul dalam Bidang Cyber Akademik
                    </figure>

                </div>
            </div>

            <div class="row mt-2 justify-content-center">
                <div class="col-md-auto visibtn">
                    <h2 class="badge badge-pill badge-danger"><span>MISI</span> </h2>
                </div>
            </div>

            <div class="row mt-3 justify-content-center">
                <div class="col-auto">
                    <figure class="figuremisi misi">
                        1. Ikut Serta Kegiatan Kampus <br>
                        2. Mengadakan acara Inisiasi 2019 <br>
                        3. Study banding ke kampus lain
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- TEAM -->
    <div class="row justify-content-center" id="personil">
        <div class="col-12 zero-panel text-center background1">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card-deck">
                        <div class="card cardedit">
                            <img src="<?= base_url('assets/img/personil/feni.png') ?>" class="card-img-top" alt="...">
                            <div class="card-body isicard">
                                <h5 class="card-title">Feni Lestari</h5>
                                <p class="card-text">Ketua Senat</p>
                            </div>
                        </div>
                        <div class="card cardedit">
                            <img src="<?= base_url('assets/img/personil/shita.png') ?>" class="card-img-top" alt="...">
                            <div class="card-body isicard">
                                <h5 class="card-title">Agnes Shita</h5>
                                <p class="card-text">Wakil Ketua Senat</p>
                            </div>
                        </div>
                        <div class="card cardedit">
                            <img src="<?= base_url('assets/img/personil/vebi.png') ?>" class="card-img-top" alt="...">
                            <div class="card-body isicard">
                                <h5 class="card-title">Veby</h5>
                                <p class="card-text">Sekretaris Senat</p>
                            </div>
                        </div>
                        <div class="card cardedit">
                            <img src="<?= base_url('assets/img/personil/axel.png') ?>" class="card-img-top" alt="...">
                            <div class="card-body isicard">
                                <h5 class="card-title">Axel Haryanto</h5>
                                <p class="card-text">Bendahara Senat</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- END TEAM -->


    <div class="row justify-content-start mt-3">
        <div class="col-sm-5  komen">
            <?php foreach ($komentar as $komen) : ?>
                <?php
                    $user = $this->db->get_where('user', ['name' => $komen['nama']])->row_array();
                    $pimpinan = $this->db->get_where('pimpinan', ['name' => $komen['nama']])->row_array();
                    $dosen = $this->db->get_where('dosen', ['name' => $komen['nama']])->row_array();
                    $mhs = $this->db->get_where('mahasiswa', ['name' => $komen['nama']])->row_array();
                    ?>
                <div class="row">
                    <div class="col-auto-12">
                        <img style="height: 4rem; width: 4rem;" src=" <?php if ($komen['role_id'] == 1 || $komen['role_id'] == 2) : ?>
                        <?= base_url('assets/img/profile/') . $user['image']; ?>
                        <?php elseif ($komen['role_id'] == 3) : ?>
                        <?= base_url('assets/img/profile/pimpinan/') . $pimpinan['image']; ?>

                        <?php elseif ($komen['role_id'] == 4) : ?>
                        <?= base_url('assets/img/profile/dosen/') . $dosen['image']; ?>

                        <?php elseif ($komen['role_id'] == 5) : ?>
                        <?= base_url('assets/img/profile/mahasiswa/') . $mhs['image']; ?>
                        <?php endif; ?>" class="img-profile rounded-circle float-left" alt="...">

                        <?php if ($komen['role_id'] == 1 || $komen['role_id'] == 2) : ?>
                            <h6><?= $komen['nama']; ?> <small class="text-muted">Admin </small></h6>

                        <?php else : ?>
                            <h6><?= $komen['nama']; ?></h6>
                        <?php endif; ?>

                        <h5> <?= timesampai(strtotime($komen['waktu'])); ?></h5>
                        <p><?= $komen['uraian']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- akhir container -->

    <!-- Footer -->
    <footer>
        <div class="container text-center ">
            <div class="row">
                <div class="col-sm-12 ">
                    <p>&copy; copyright 2019 | built with <i class="fas fa-heart"></i> by. <a href="http://instagram.com/samsonsugiyarto">Team A</a></p>
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


    <!-- Diagram -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <Script>
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
                    labels: {
                        fontSize: 18,
                        fontColor: 'rgb(255, 255, 255)'
                    }
                }


            },


        });
    </Script>
    <!-- Akhir Diagram -->

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
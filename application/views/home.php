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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">


    <link rel="icon" type="image/png" href="<?= base_url('assets/img/logostikom.png'); ?>">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

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
                    <a class="nav-item nav-link  page-scroll" href="#personil">Tentang Senat</a>
                    <a class="nav-item nav-link  page-scroll" href="#gallery">Galeri</a>
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
    <div class="jumbotron  jumbotron-fluid">
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
        <div class="cover-overlay ">
            <div class="container">
                <h1 class="display-4"><span>Pemilihan Ketua SENAT</span> </h1>
                <h1 class="display-3">STIKOM Yos Sudarso Purwokerto </h1>
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
            <h1>TENTANG SENAT</h1>
            <div id="accordion" class="mt-4">
                <div class="card">
                    <div class="card-header" id="heading-1">
                        <h5 class="mb-0">
                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                VISI Senat
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-1" class="collapse" data-parent="#accordion" aria-labelledby="heading-1">
                        <div class="card-body isi">
                            Menjadikan Kampus yang humnis dan unggul berprestasi dalam bidang komputer
                        </div>
                    </div>
                </div>

            </div>
            <div id="accordion" class="mt-3">
                <div class="card">
                    <div class="card-header" id="heading-2">
                        <h5 class="mb-0">
                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                Misi Senat Senat
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                        <div class="card-body isi" style="text-align: justify;">
                            1. Aktif dalam kegiatan kampus <br>
                            2. Mengadakan Baksos <br>
                            3. Mengadkan Inisiasi
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>


    <!-- TEAM -->
    <div class="row justify-content-center" id="personil">
        <div class="col-12 zero-panel text-center tentang">
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

    <!-- END TEAM -->


    <div class="container gallery-container" id="gallery">
        <br>

        <h1>Galeri</h1>

        <p class="page-description text-center">Galeri Kegiatan Senat</p>

        <div class="tz-gallery">

            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="<?= base_url('assets/img/gallery/park.jpg') ?>">
                        <img src="<?= base_url('assets/img/gallery/park.jpg') ?>" alt="Park">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="<?= base_url('assets/img/gallery/bridge.jpg') ?>">
                        <img src="<?= base_url('assets/img/gallery/bridge.jpg') ?>" alt="Bridge">
                    </a>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a class="lightbox" href="<?= base_url('assets/img/gallery/tunnel.jpg') ?>">
                        <img src="<?= base_url('assets/img/gallery/tunnel.jpg') ?>" alt="Tunnel">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="<?= base_url('assets/img/gallery/coast.jpg') ?>">
                        <img src="<?= base_url('assets/img/gallery/coast.jpg') ?>" alt="Coast">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="<?= base_url('assets/img/gallery/rails.jpg') ?>">
                        <img src="<?= base_url('assets/img/gallery/rails.jpg') ?>" alt="Rails">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="<?= base_url('assets/img/gallery/traffic.jpg') ?>">
                        <img src="<?= base_url('assets/img/gallery/traffic.jpg') ?>" alt="Traffic">
                    </a>
                </div>

            </div>

        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <script>
        baguetteBox.run('.tz-gallery');
    </script>

    <div class="container komen-container mt-4">
        <h1 class="py-3 pl-4">Komentar</h1>
        <div class="row justify-content-start mt-3">

            <div class="col-sm-9 komen mt-1">
                <?php foreach ($komentar as $komen) : ?>
                    <?php
                        $user = $this->db->get_where('user', ['id' => $komen['user_id']])->row_array();
                        $pimpinan = $this->db->get_where('pimpinan', ['nidn' => $komen['user_id']])->row_array();
                        $dosen = $this->db->get_where('dosen', ['nidn' => $komen['user_id']])->row_array();
                        $mhs = $this->db->get_where('mahasiswa', ['nim' => $komen['user_id']])->row_array();
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
                                <h6><?= $user['name']; ?> <small class="text-muted">Admin </small></h6>
                            <?php elseif ($komen['role_id'] == 3) : ?>

                                <h6><?= $pimpinan['name']; ?></h6>
                            <?php elseif ($komen['role_id'] == 4) : ?>

                                <h6><?= $dosen['name']; ?></h6>

                            <?php elseif ($komen['role_id'] == 5) : ?>

                                <h6><?= $mhs['name']; ?></h6>
                            <?php endif; ?>






                            <h5> <?= time_since($komen['waktu']); ?></h5>
                            <p><?= $komen['uraian']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
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
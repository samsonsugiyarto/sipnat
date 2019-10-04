<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- My css-->
    <link rel="stylesheet" href="../assets/css/reset.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/riwayat.css">




    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">

    <title>SIPNAT | Sistem Informasi Pemilihan Senat</title>
</head>

<body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <img class="logo" src="../assets/img/logostikom.png">
            <a class="navbar-brand" href="#">SIPNAT</a>
            <h1 class="navbar-brand2" href="#">Sistem Informasi Pemilihan Ketua SENAT</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="<?= base_url('home'); ?>">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="<?= base_url('home/kampanye'); ?>">Kampanye</a>
                    <a class="nav-item nav-link" href="#">Galeri</a>
                    <a class="nav-item nav-link" href="#">Tentang Senat</a>
                    <a class="nav-item nav-link active" href="<?= base_url('home/riwayatsenat'); ?>">Riwayat Senat </a>
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
    <script src="../assets/js/hitungmundur.js"></script>
    <!-- akhir info panel -->


    <!-- Begin Page Content -->
    <div class="container">
        <div class="row workingspace">
            <div class="col-lg">
                <h2><span>RIWAYAT SENAT</span> </h2>
            </div>
        </div>
        <div class="container">
            <div class="row workingspace">
                <div class="col-lg">
                    <h4><span>PERIODE SENAT 2018/2019</span> </h4>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="card-group">
                    <div class="col-sm-6">
                        <div class="card">
                            <img src="<?= base_url('assets/img/profile/default.jpg') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kevin Ryan S</h5>
                                <p class="card-text">Ketua Senat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <img src="<?= base_url('assets/img/profile/default.jpg') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Agnes Wulan A</h5>
                                <p class="card-text">Wakil Ketua Senat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row mt-5 justify-content-center">
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




            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
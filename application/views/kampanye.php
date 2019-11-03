<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- My css-->
    <link rel="stylesheet" href="../assets/css/reset.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url('assets/css/kampanye.css') ?>">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">

    <title>SIPNAT | Sistem Informasi Pemilihan Senat</title>
</head>

<body>


    <!-- Begin Page Content -->
    <!-- Navbar -->
    <nav class="navbar  navbar-dark bg-dark navbar-expand-lg sticky-top">
        <div class="container">
            <img class="logo" src="<?= base_url('assets/img/logostikom.png') ?>">
            <a class="navbar-brand page-scroll" href="#home">SIPNAT</a>
            <h1 class="navbar-brand2">Sistem Informasi Pemilihan Ketua SENAT</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link  page-scroll" href="<?= base_url('home') ?>">Home <span class="sr-only"></span></a>
                    <a class="nav-item nav-link active" href="<?= base_url('home/kampanye'); ?>">Kampanye</a>
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
    <?php foreach ($kandidat as $kan) : ?>
        <div class="jumbotron text-center">
            <div class="row justify-content-center">
                <div class="col- status">
                    <p>Calon Kandidat <?= $kan['no_kandidat']; ?></p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col- " style="padding: 12px;">
                    <img src="<?= base_url('assets/img/profile/kandidat/') . $kan['foto_ketua']; ?>" class="rounded-circle img-fluid" alt="">
                    <h4><?= $kan['nama']; ?></h4>
                    <p>Calon Ketua Senat</p>
                </div>
                <div class="col- " style="padding: 12px;">
                    <img src="<?= base_url('assets/img/profile/kandidat/') . $kan['foto_wakil']; ?>" class="rounded-circle img-fluid" alt="">
                    <h4><?= $kan['wakil']; ?></h4>
                    <p>Calon Wakil Ketua Senat</p>
                </div>
            </div>

        </div>


        <!-- Akhir jumbotron -->


        <!-- visi -->
        <section class="visi" id="visi">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="text-center">VISI</h2>
                        <hr>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-9 text-center">
                        <p><?= $kan['visi']; ?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Akhir visi -->
        <!-- Misi -->
        <section class="misi" id="misi">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="text-center">MISI</h2>
                        <hr>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-6 text-center">
                        <p><?= $kan['misi']; ?></p>
                    </div>

                </div>
            </div>
        </section>

        <!-- Akhir misi -->
        <!-- Tentang -->
        <section class="tentang" id="tentang">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="text-center">TENTANG</h2>
                        <hr>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-10 text-center">
                        <p><?= $kan['uraian']; ?></p>
                    </div>
                </div>


                <!-- Protfolio -->

                <div class="row">
                    <div class="col-sm-3 mb-4">
                        <img class="img-fluid img-thumbnail" src="<?= base_url('assets/img/2.jpeg') ?>" alt="">
                    </div>
                    <div class="col-sm-3 mb-4">
                        <img class="img-fluid img-thumbnail" src="<?= base_url('assets/img/2.jpeg') ?>" alt="">
                    </div>
                    <div class="col-sm-3 mb-4">
                        <img class="img-fluid img-thumbnail" src="<?= base_url('assets/img/2.jpeg') ?>" alt="">
                    </div>
                    <div class="col-sm-3 mb-4">
                        <img class="img-fluid img-thumbnail" src="<?= base_url('assets/img/2.jpeg') ?>" alt="">
                    </div>
                </div>
            </div>


            <!-- Akhir portfolio -->
        </section>
        <hr style="width: 100%;">
    <?php endforeach; ?>
    <!-- Akhir tentang -->

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
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
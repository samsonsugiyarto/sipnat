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
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">

    <title>Kampanye | Sistem Informasi Pemilihan Senat</title>
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/logostikom.png'); ?>">
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
        <div class="container">
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
        </div>


        <!-- Akhir jumbotron -->


        <!-- visi -->
        <section class="visi" id="visi">
            <div class="container gallery-container">
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
            <div class="container gallery-container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="text-center">MISI</h2>
                        <hr>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-6 " style="text-align: justify;">
                        <p><?= $kan['misi']; ?></p>
                    </div>

                </div>
            </div>
        </section>

        <!-- Akhir misi -->
        <!-- Tentang -->
        <section class="tentang" id="tentang">
            <div class="container gallery-container" id="gallery">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="text-center">TENTANG</h2>
                        <hr>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-10 " style="text-align: justify;">
                        <p><?= $kan['uraian']; ?></p>
                    </div>
                </div>


                <?php

                    $id_kan = $kan['no_kandidat'];
                    $query = "SELECT kampanye.file_name
                    FROM kampanye INNER JOIN kandidat
                    ON kandidat.no_kandidat = kampanye.no_kandidat
                    WHERE kampanye.no_kandidat = $id_kan ; ";
                    $kampanye = $this->db->query($query)->result_array();

                    $query1 = "SELECT kampanyevideo.file_name
                    FROM kampanyevideo INNER JOIN kandidat
                    ON kandidat.no_kandidat = kampanyevideo.no_kandidat
                    WHERE kampanyevideo.no_kandidat = $id_kan ";
                    $kampanyevideo = $this->db->query($query1)->result_array();

                    ?>

                <!-- Protfolio -->
                <div class="tz-gallery ">
                    <div class="row">
                        <?php foreach ($kampanye as $panye) : ?>
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox" href="<?= base_url('assets/img/kampanye/') . $panye['file_name']; ?>">
                                    <img src="<?= base_url('assets/img/kampanye/') . $panye['file_name'] ?>" alt="Park">
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="row">
                        <?php foreach ($kampanyevideo as $panyevideo) : ?>
                            <div class="col-sm-6 col-md-6">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <video controls>
                                        <source src="<?= base_url('assets/video/kampanye/') . $panyevideo['file_name']; ?>"> </video>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>



            </div>


            <!-- Akhir portfolio -->
        </section>
        <br>
        <br>
    <?php endforeach; ?>
    <!-- Akhir tentang -->

    <!-- Footer -->
    <footer>
        <div class="container text-center ">
            <div class="row">
                <div class="col-sm-12 ">
                    <p>&copy; copyright 2019 | STIKOM Yos Sudarso Purwokerto</p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <script>
        baguetteBox.run('.tz-gallery');
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
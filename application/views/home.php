<!doctype html>
<html lang="en" id="home">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- My css-->
    <link rel="stylesheet" href="assets/css/reset.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">


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
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <img class="logo" src="assets/img/logostikom.png">
            <a class="navbar-brand page-scroll" href="#home">SIPNAT</a>
            <h1 class="navbar-brand2">Sistem Informasi Pemilihan Ketua SENAT</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active  page-scroll" href="#home">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link page-scroll" href="#voting">Voting <span class="sr-only"></span></a>
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
                    <div class="card-group">
                        <div class="card cardfoto">
                            <img src="<?= base_url('assets/img/profile/default.jpg') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Axel Haryanto</h5>
                                <p class="card-text">Ketua Senat</p>
                            </div>
                        </div>
                        <div class="card cardfoto">
                            <img src="<?= base_url('assets/img/profile/default.jpg') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Hanit Jatmika</h5>
                                <p class="card-text">Wakil Ketua Senat</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-group">
                        <div class="card cardfoto">
                            <img src="<?= base_url('assets/img/profile/default.jpg') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Feni Lestari</h5>
                                <p class="card-text">Ketua Senat.</p>
                            </div>
                        </div>
                        <div class="card cardfoto">
                            <img src="<?= base_url('assets/img/profile/default.jpg') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Agnes Shita</h5>
                                <p class="card-text">Wakil Ketua Senat.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-around pt-3">
                    <h3><span>60%</span> </h3>
                    <h3><span>40%</span> </h3>
                </div>
                <div class="row justify-content-around">
                    <h6>6 suara</h6>
                    <h6>4 Suara </h6>
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
                            <a href="#" class="close">X CLOSE</a>
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

    <!-- TEAM -->
    <div class="row justify-content-center" id="personil">
        <div class="col-12 zero-panel text-center background1">
            <div class="font">
                <h1>PERSONIL SENAT</h1>
                Inilah personil SENAT periode 2017-2018
            </div>
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
    <div class="row justify-content-start">
        <div class="col-6 komen">
            <div class="row">
                <div class="col-auto">
                    <img style="max-width: 80px;" src="<?= base_url('assets/img/profile/default.jpg'); ?>" class="rounded-circle float-left" alt="...">
                    <h6>Samson Sugiyarto</h6>
                    <h5>Post on 12-10-2019 13:50</h5>
                    <p>Hallo. jangan golput guys</p>
                </div>
            </div>
            <div class="row">
                <div class="col-auto komen2">
                    <img style="max-width: 85px;" src="<?= base_url('assets/img/profile/default.jpg'); ?>" class="rounded-circle float-left" alt="...">
                    <h6>Nabilla Nur Fadillah</h6>
                    <h5>Post on 13-10-2019 12:53</h5>
                    <p>Semoga pemilihan senat dilancarkan kegiatanya. amin</p>
                </div>
            </div>


        </div>


    </div>







    <!-- akhir container -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

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
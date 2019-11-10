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
                <table class="table table-bordered table-hover" id="reminders">
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

    <div class="container">
        <div class="row justify-content-center">
            <div class="row vote">
                <!-- <canvas id="myChart" width="1" height="1"></canvas> -->
                <div class="col-sm-6  ">
                    <div id="piechart" class="chart"></div>
                </div>
                <div class="col-sm-6 py-5 text-center ">
                    <h3>TOTAL<br>
                        <P>Suara Masuk</P><span> <?= $js['jsuara'] ?> Suara</span>
                    </h3>
                </div>
            </div>
        </div>
    </div>


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





</div>


</div>
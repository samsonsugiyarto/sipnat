<div class="container-fluid ">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>statistik.css">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> Statistik</h1>


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
                            <th scope="col">Role</th>
                            <th scope="col">Mencoblos</th>
                            <th scope="col">Aktif</th>
                            <th scope="col">TIdak Aktif</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th><?= 1 ?></th>
                            <td>Pimpinan</td>
                            <td><?= $coblospimp['coblos']; ?></td>
                            <td><?= $pimpinan; ?></td>
                            <td><?= $tdkpimp; ?></td>
                            <td><?= $totalpimp; ?></td>
                        </tr>

                        <tr>
                            <th><?= 2 ?></th>
                            <td>Dosen</td>
                            <td><?= $coblosdsn['coblos']; ?></td>
                            <td><?= $dosen; ?></td>
                            <td><?= $tdkdsn; ?></td>
                            <td><?= $totaldsn; ?></td>
                        </tr>

                        <tr>
                            <th><?= 3 ?></th>
                            <td>Mahasiswa</td>
                            <td><?= $coblosmhs['coblos']; ?></td>
                            <td><?= $mahasiswa; ?></td>
                            <td><?= $tdkmhs; ?></td>
                            <td><?= $totalmhs; ?></td>
                        </tr>

                        <tr>
                            <th style="display: none;">4</th>
                            <td colspan="2" style="font-weight: bold;">TOTAL SELURUH</td>
                            <td style="font-weight: bold;"><?= $totalpilih; ?></td>
                            <td style="font-weight: bold;"><?= $totalaktif; ?></td>
                            <td style="font-weight: bold;"><?= $tdkaktif; ?></td>
                            <td style="font-weight: bold;"><?= $total; ?></td>
                        </tr>
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
<div class="container-fluid">

    <!-- Page Heading -->
    <input type="hidden" <?= $title; ?>>
    <h1 type="hidden" class="h3 mb-4 text-gray-800"> Vote List</h1>

    <div class="row justify-content-around">

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

    </div>



</div>

</div>
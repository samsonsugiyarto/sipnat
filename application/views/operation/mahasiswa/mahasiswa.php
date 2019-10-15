<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800"><?= $title; ?></h1>



    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>


            <?php endif; ?>


            <?php if ($this->session->flashdata('message')) : ?>

                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <?php endif; ?>

            <a href="<?= base_url('operation/tambahmahasiswa'); ?>" class="btn btn-success mb-3">Tambah Mahasiswa</a>

            <div class="table-responsive">

                <table class="table table-bordered table-hover" id="dataTable">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>JK</th>
                            <th>Jurusan</th>
                            <th>Email</th>
                            <th>HP</th>
                            <th>Aktif</th>

                            <th>Opsi</th>
                        </tr>
                    </thead>

                    <?php

                    $query = "SELECT * 
            FROM mahasiswa INNER JOIN jurusan
              ON mahasiswa.kode_jurusan = jurusan.id  
              ORDER BY mahasiswa.nim ASC
         ";
                    $datamhs = $this->db->query($query)->result_array();
                    ?>

                    <tbody>

                        <?php $i = 1; ?>
                        <?php foreach ($datamhs as $mhs) : ?>

                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $mhs['nim']; ?></td>
                                <td><?= $mhs['name']; ?></td>
                                <td><?= $mhs['jk']; ?></td>
                                <td><?= $mhs['nama_jurusan']; ?></td>
                                <td><?= $mhs['email']; ?></td>
                                <td><?= $mhs['hp']; ?></td>
                                <td><?= $mhs['is_active']; ?></td>


                                <td>
                                    <div class="dropdown ">
                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            opsi
                                        </button>
                                        <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                            <a class=" btn btn-success btn-sm" href="<?= base_url() ?>operation/detailmahasiswa/<?= $mhs['nim']; ?>">detail</a>
                                            <a class="btn btn-warning btn-sm" href="<?= base_url() ?>operation/editmahasiswa/<?= $mhs['nim']; ?>">edit</a>
                                            <a class=" btn btn-danger btn-sm tombol-hapus" href="<?= base_url() ?>operation/hapusmahasiswa/<?= $mhs['nim']; ?>">hapus</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
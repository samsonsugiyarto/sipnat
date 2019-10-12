<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>



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

            <a href="<?= base_url('operation/tambahmahasiswa'); ?>" class="btn btn-success mb-1">Tambah Mahasiswa</a>

            <div class="row">
                <div class="col-md-7">
                    <?= $this->pagination->create_links(); ?>
                    <h6 class="pt-3">Result : <?= $total_rows; ?></h6>
                </div>
                <div class="col-md-5">
                    <form action="<?= base_url('operation/mahasiswa'); ?>" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search keyword.." name="keyword" autocomplete="off" autofocus>
                            <div class="input-group-append">
                                <input class="btn btn-primary" value=" cari " type="submit" name="submit">
                            </div>
                        </div>
                    </form>
                </div>

            </div>

            <div class="table-responsive">

                <table class="table table-bordered table-sm">
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

                    <tbody>
                        <?php if (empty($mahasiswa)) : ?>
                            <tr>
                                <td colspan="12">
                                    <div class="alert alert-danger" role="alert">
                                        Tidak ada Data
                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?>
                        <?php foreach ($mahasiswa as $mhs) : ?>
                            <tr>
                                <th scope="row"><?= ++$start ?></th>
                                <td><?= $mhs['nim']; ?></td>
                                <td><?= $mhs['name']; ?></td>
                                <td><?= $mhs['jk']; ?></td>
                                <td><?= $mhs['jurusan']; ?></td>
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
<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>


            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="<?= base_url('operation/tambahmahasiswa'); ?>" class="btn btn-success mb-3">Tambah Mahasiswa</a>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                <tfoot class="thead-dark">
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
                                </tfoot>
                                <tbody>

                                    <?php $i = 1; ?>
                                    <?php foreach ($mahasiswa as $mhs) : ?>
                                        <tr>
                                            <th scope="row"><?= $i ?></th>
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
                                                        <a class=" btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusModal" href="<?= base_url() ?>operation/hapusmahasiswa/<?= $mhs['nim']; ?>">hapus</a>
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
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->

<!-- Hapus Modal-->
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Mahasiswa</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Apakah Anda yakin ingin menghapus mahasiswa ini?</div>
            <div class="modal-footer">

                <a class="btn btn-danger" href="<?= base_url() ?>operation/hapusmahasiswa/<?= $mhs['nim']; ?>">Hapus</a>
                <a class="btn btn-warning" href="<?= base_url('operation/mahasiswa'); ?>">Batal</a>
            </div>
        </div>
    </div>
</div>
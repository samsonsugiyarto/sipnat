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

            <a href="<?= base_url('operation/tambahmahasiswa'); ?>" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">JK</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Email</th>
                        <th scope="col">HP</th>
                        <th scope="col">Aktif</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>

                        <td>1</td>
                        <td>201601001</td>
                        <td>Nabilla Nur Fadillah</td>
                        <td>Perempuan</td>
                        <td>S1 Sistem Informasi</td>
                        <td>nurfadillaha@gmail.com</td>
                        <td>089563</td>
                        <td>Y</td>
                        <td>
                            <a href="<?= base_url('operation/detailmahasiswa'); ?>" class="badge badge-warning">detail</a>
                            <a href="<?= base_url('operation/editmahasiswa'); ?>" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger" data-toggle="modal" data-target="#hapusModal">hapus</a>
                        </td>
                    </tr>


                </tbody>
            </table>
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
                <button class="btn btn-danger" type="button" data-dismiss="modal">Hapus</button>
                <a class="btn btn-primary" href="<?= base_url('operation/mahasiswa'); ?>">Batal</a>
            </div>
        </div>
    </div>
</div>
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

            <a href="<?= base_url('operation/tambahpimpinan'); ?>" class="btn btn-success mb-3">Tambah Pimpinan</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIDN</th>
                        <th scope="col">Nama</th>
                        <th scope="col">JK</th>
                        <th scope="col">jabatan</th>
                        <th scope="col">Email</th>
                        <th scope="col">HP</th>
                        <th scope="col">Aktif</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i = 1; ?>
                    <?php foreach ($pimpinan as $pimp) : ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $pimp['nidn']; ?></td>
                            <td><?= $pimp['name']; ?></td>
                            <td><?= $pimp['jk']; ?></td>
                            <td><?= $pimp['jabatan']; ?></td>
                            <td><?= $pimp['email']; ?></td>
                            <td><?= $pimp['hp']; ?></td>
                            <td><?= $pimp['is_active']; ?></td>
                            <td>
                                <a href="<?= base_url() ?>operation/detailpimpinan/<?= $pimp['nidn']; ?>" class="badge badge-primary">detail</a>
                                <a href="<?= base_url() ?>operation/editpimpinan/<?= $pimp['nidn']; ?>" class="badge badge-warning">edit</a>
                                <a href="<?= base_url() ?>operation/hapuspimpinan/<?= $pimp['nidn']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">hapus</a>

                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>

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
                <h5 class="modal-title" id="exampleModalLabel">Hapus Dosen</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Apakah Anda yakin ingin menghapus dosen ini?</div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Hapus</button>
                <a class="btn btn-primary" href="<?= base_url('operation/dosen'); ?>">Batal</a>
            </div>
        </div>
    </div>
</div>
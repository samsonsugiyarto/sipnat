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

            <a href="<?= base_url('operation/tambahkandidat'); ?>" class="btn btn-primary mb-3">Tambah Kandidat</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No Kandidat</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Visi</th>
                        <th scope="col">Misi</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>

                        <td>1</td>
                        <td>1</td>
                        <td>Feni Lestari</td>
                        <td>Menjadikan kampus yang humanis</td>
                        <td>Menjadikan kampus yang humanis</td>
                        <td>
                            <a href="<?= base_url('operation/detailkandidat'); ?>" class="badge badge-warning">detail</a>
                            <a href="<?= base_url('operation/editkandidat'); ?>" class="badge badge-success">edit</a>
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
<!-- Hapus Modal-->
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Kandidat</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Apakah Anda yakin ingin menghapus kandidat ini?</div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Hapus</button>
                <a class="btn btn-primary" href="<?= base_url('operation/kandidat'); ?>">Batal</a>
            </div>
        </div>
    </div>
</div>
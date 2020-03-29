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

            <?php if ($this->session->flashdata('message')) : ?>

                <div class="flashdatadosen" data-flashdatadosen="<?= $this->session->flashdata('message'); ?>"></div>
            <?php endif; ?>

            <a href="<?= base_url('operation/tambahdosen'); ?>" class="btn btn-success mb-3">Tambah Dosen</a>
            <div class="table-responsive">

                <table class="table table-bordered table-hover" id="dataTable">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">JK</th>
                            <th scope="col">Mengajar</th>
                            <th scope="col">Email</th>
                            <th scope="col">HP</th>
                            <th scope="col">Status Aktif</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i = 1; ?>
                        <?php foreach ($dosen as $dsn) : ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $dsn['nik']; ?></td>
                                <td><?= $dsn['name']; ?></td>
                                <td><?= $dsn['jk']; ?></td>
                                <td><?= $dsn['mengajar']; ?></td>
                                <td><?= $dsn['email']; ?></td>
                                <td><?= $dsn['hp']; ?></td>
                                  <td>         
                                    <?php $aktif = $dsn['is_active'];?>
                                    <div class=" form-check">
                                        <input type="checkbox" class="form-check-input aktifdsn" <?= ($aktif==1 ? 'checked data-status="0" ' : 'data-status="1"' );?> data-nik="<?= $dsn['nik']; ?>"   />        
                                        <?php if ($aktif == 1){
                                            echo "Aktif";
                                        }
                                        else{
                                            echo "Pasif";
                                        }?>
                                    </div>
                                </td>


                                <td>
                                    <div class="dropdown ">
                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            opsi
                                        </button>
                                        <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                            <a class=" btn btn-success btn-sm" href="<?= base_url() ?>operation/detaildosen/<?= $dsn['nik']; ?>">detail</a>
                                            <a class="btn btn-warning btn-sm" href="<?= base_url() ?>operation/editdosen/<?= $dsn['nik']; ?>" class="badge badge-warning">edit</a>
                                            <a class=" btn btn-danger btn-sm tombol-hapusdosen" href="<?= base_url() ?>operation/hapusdosen/<?= $dsn['nik']; ?>">hapus</a>
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
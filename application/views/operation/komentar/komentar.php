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

                <div class="flashdatakomen" data-flashdatakomen="<?= $this->session->flashdata('message'); ?>"></div>
            <?php endif; ?>

            <a href="<?= base_url('operation/tambahkomentar'); ?>" class="btn btn-success mb-3">Tambah Komentar</a>
            <div class="table-responsive">

                <table class="table table-bordered table-hover" id="dataTable">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Role Id</th>
                            <th scope="col">Role</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Uraian</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $query = "SELECT * 
            FROM komentar LEFT JOIN konfir_komentar
              ON komentar.id = konfir_komentar.id_komentar
              ORDER BY komentar.waktu ASC";
                        $data = $this->db->query($query)->result_array(); ?>

                        <?php $i = 1; ?>
                        <?php foreach ($data as $komen) : ?>
                            <?php
                                $roleid =  $komen['role_id'];
                                $query1 = "SELECT * 
                                FROM komentar  JOIN user_role
                                ON komentar.role_id = user_role.id
                                WHERE  komentar.role_id = $roleid
                                ORDER BY komentar.waktu ASC";
                                $data1 = $this->db->query($query1)->row_array(); ?>

                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $komen['nama']; ?></td>
                                <td><?= $komen['role_id']; ?></td>
                                <td> <?= $data1['role']; ?> </td>
                                <td><?= $komen['waktu']; ?></td>
                                <td><?= word_limiter($komen['uraian'], 4); ?></td>

                                <td>
                                    <?php if ($komen['id'] == $komen['id_komentar']) : ?>
                                        <a class="disable-links badge badge-warning tombol-konfir " href="<?= base_url() ?>operation/konfirkomen/<?= $komen['id']; ?>">Konfirmasi</a>
                                    <?php else : ?>
                                        <a class="badge badge-warning tombol-konfir " href="<?= base_url() ?>operation/konfirkomen/<?= $komen['id']; ?>">Konfirmasi</a>

                                    <?php endif; ?>

                                    <a class="badge badge-success " href="<?= base_url() ?>operation/detailkomentar/<?= $komen['id']; ?>">detail</a>
                                    <a class=" badge badge-danger tombol-hapuskomen" href="<?= base_url() ?>operation/hapuskomentar/<?= $komen['id']; ?>">hapus</a>

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
                <h5 class="modal-title" id="exampleModalLabel">Hapus Komentar</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Apakah Anda yakin ingin menghapus komentar ini?</div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Hapus</button>
                <a class="btn btn-primary" href="<?= base_url('operation/komentar'); ?>">Batal</a>
            </div>
        </div>
    </div>
</div>
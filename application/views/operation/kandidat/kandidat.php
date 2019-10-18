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

                <div class="flashkandidat" data-flashkandidat="<?= $this->session->flashdata('message'); ?>"></div>
            <?php endif; ?>


            <a href="<?= base_url('operation/tambahkandidat'); ?>" class="btn btn-primary mb-3">Tambah Kandidat</a>
            <table class="table table-bordered table-hover" id="dataTable">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No Kandidat</th>
                        <th scope="col">Nama</th>

                        <th scope="col">Jenis Kelamin</th>

                        <th scope="col">Email</th>

                        <th scope="col">No HP</th>

                        <th scope="col">Visi</th>
                        <th scope="col">Misi</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i = 1; ?>
                    <?php foreach ($kandidat as $kan) : ?>

                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $kan['no_kandidat']; ?></td>
                            <td><?= $kan['nama']; ?></td>
                            <td><?= $kan['jk_ketua']; ?></td>

                            <td><?= $kan['email_ketua']; ?></td>
                            <td><?= $kan['hp_ketua']; ?></td>
                            <td><?= $kan['visi']; ?></td>
                            <td><?= word_limiter($kan['misi'], 4); ?></td>


                            <td>
                                <div class="dropdown ">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        opsi
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                        <a class=" btn btn-success btn-sm" href="<?= base_url() ?>operation/detailkandidat/<?= $kan['no_kandidat']; ?>">detail</a>
                                        <a class="btn btn-warning btn-sm" href="<?= base_url() ?>operation/editkandidat/<?= $kan['no_kandidat']; ?>">edit</a>
                                        <a class="btn btn-danger btn-sm tombol-hapuskandidat" href="<?= base_url() ?>operation/hapuskandidat/<?= $kan['no_kandidat']; ?>">hapus</a>
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
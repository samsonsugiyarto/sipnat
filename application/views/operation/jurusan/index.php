<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



    <div class="row">
        <div class="col-lg">

            <?php if ($this->session->flashdata('message')) : ?>

                <div class="juru" data-juru="<?= $this->session->flashdata('message'); ?>"></div>
            <?php endif; ?>

            <a href="" class="btn btn-success mb-3" data-toggle="modal" data-target="#newSubMenuModal">Tambah Jurusan</a>

            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Jurusan</th>
                            <th scope="col">Jumlah Mahasiswa</th>
                            <th scope="col">Opsi</th>

                        </tr>
                    </thead>

                    </tbody>
                    <tbody>

                        <?php $i = 1; ?>
                        <?php foreach ($menu as $m) : ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $m['nama_jurusan']; ?></td>

                                <?php foreach ($jumlah_mhs as $jum) : ?>

                                    <?php if ($jum['nama_jurusan'] == $m['nama_jurusan']) : ?>

                                        <td>
                                            <?= $jum['total']; ?>

                                        </td>

                                    <?php endif ?>

                                <?php endforeach; ?>

                                <td>
                                    <div class="dropdown ">
                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            opsi
                                        </button>
                                        <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                            <a class="btn btn-warning btn-sm" href="<?= base_url() ?>operation/editjurusan/<?= $m['id']; ?>" class="badge badge-warning">edit</a>
                                            <a class=" btn btn-danger btn-sm tombol-hapusjur" href="<?= base_url() ?>operation/hapusjurusan/<?= $m['id']; ?>">hapus</a>
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


<!-- Modal -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModalLabel">Form Tambah Jurusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('operation'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Nama Jurusan" required>
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" nama="tambah" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
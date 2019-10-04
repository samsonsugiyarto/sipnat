<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



    <div class="row">
        <div class="col-lg">

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-success mb-3" data-toggle="modal" data-target="#newSubMenuModal">Tambah Jurusan</a>
            <table class="table table-hover">
                <thead>
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
                            <td><?= $m['jumlah_mhs']; ?></td>
                            <td>
                                <a href="<?= base_url() ?>operation/detailjurusan/<?= $m['id']; ?>" class="badge badge-primary">detail</a>
                                <a href="<?= base_url() ?>operation/editjurusan/<?= $m['id']; ?>" class="badge badge-warning">edit</a>
                                <a href="<?= base_url() ?>operation/hapusjurusan/<?= $m['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">hapus</a>

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
                    <div class="form-group">
                        <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Mahasiswa" required>
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
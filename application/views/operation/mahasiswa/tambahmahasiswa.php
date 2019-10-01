<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">


            <form class="mahasiswa" method="post" action="<?= base_url('operation/tambahmahasiswa'); ?>">
                <div class="form-group row">
                    <label for="nim" class="col-sm-3 col-form-label">NIM</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nim" name="nim" value="<?= set_value('nim'); ?>">
                        <?= form_error('nim', ' <small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                        <?= form_error('nama', ' <small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="passwordmhs1" name="passwordmhs1">
                        <?= form_error('passwordmhs1', ' <small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Repeat Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="passwordmhs2" name="passwordmhs2">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="form-check form-check-inline pl-3">
                        <input class="form-check-input" type="radio" name="jk" id="jk" value="L">
                        <label class="form-check-label" for="jk">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" id="jk" value="P">
                        <label class="form-check-label" for="jk">Perempuan</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="namalengkap" class="col-sm-3 col-form-label">Jurusan</label>
                    <div class="col-sm-9">
                        <select name="jurusan" id="jurusan" class="form-control col-sm-9">

                            <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
                            <option value="D3 Komputerisasi Akuntansi">D3 Komputerisasi Akuntansi</option>
                            <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
                            <option value="S1 Teknik Multimedia & Jaringan">S1 Teknik Multimedia & Jaringan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="emailmhs" name="emailmhs" value="<?= set_value('emailmhs'); ?>">
                        <?= form_error('emailmhs', ' <small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hp" class="col-sm-3 col-form-label">Handphone</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="hpmhs" name="hpmhs" value="<?= set_value('hpmhs'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Aktif</label>
                    <div class="form-check form-check-inline pl-3">
                        <input class="form-check-input" type="radio" name="aktif" id="aktif" value="1">
                        <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="aktif" id="aktif" value="0">
                        <label class="form-check-label">Tidak</label>

                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">Foto</div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/profile/default.jpg') ?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Pilih foto</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah</button>

                        <button type="submit" class="btn btn-danger">Batal</button>
                    </div>
                </div>

            </form>


        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
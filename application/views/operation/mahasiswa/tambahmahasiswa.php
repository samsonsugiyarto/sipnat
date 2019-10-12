<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart('operation/tambahmahasiswa'); ?>


            <div class="form-group row">
                <label for="nim" class="col-sm-3 col-form-label">NIM</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukan NIM">
                    <?= form_error('nim', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>

            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Lengkap">
                    <?= form_error('nama', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="passwordmhs1" name="passwordmhs1" placeholder="Masukan password">
                    <?= form_error('passwordmhs1', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Repeat Password</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="passwordmhs2" name="passwordmhs2" placeholder="Ulangi password">
                </div>
            </div>

            <div class="form-group row">
                <label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="form-check form-check-inline pl-3">
                    <input type="radio" name="jk" value="L" <?php echo  set_radio('jk', 'L', TRUE); ?> />
                    <label class="form-check-label" for="jk">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="jk" value="P" <?php echo  set_radio('jk', 'P'); ?> />
                    <label class="form-check-label" for="jk">Perempuan</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="jurusan" class="col-sm-3 col-form-label">Jurusan</label>
                <div class="col-sm-9">
                    <select name="jurusan" class="form-control col-sm-9">
                        <option value="S1 Sistem Informasi" <?= set_select('jurusan', 'SI Sistem Informasi', TRUE); ?>>SI Sistem Informasi</option>
                        <option value="S1 Teknik Multimedia dan Jaringan" <?= set_select('jurusan', 'S1 Teknik Multimedia dan Jaringan'); ?>>SI Teknik Multimedia dan Jaringan</option>
                        <option value="S1 Teknik Informatika" <?= set_select('jurusan', 'SI Teknik Informatika'); ?>>SI Teknik Informatika</option>
                        <option value="D3 Komputerisasi Akuntansi" <?= set_select('jurusan', 'D3 Komputerisasi Akuntansi'); ?>>D3 Komputerisasi Akuntansi</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="emailmhs" name="emailmhs" placeholder="Masukan email valid">
                    <?= form_error('emailmhs', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="hp" class="col-sm-3 col-form-label">Handphone</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="hpmhs" name="hpmhs" placeholder="Masukan Nomer HP">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Aktif</label>
                <div class="form-check form-check-inline pl-3">
                    <input type="radio" name="aktif" value="1" <?php echo  set_radio('aktif', '1', TRUE); ?> />
                    <label class="form-check-label">Ya</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="aktif" value="0" <?php echo  set_radio('aktif', '0'); ?> />
                    <label class="form-check-label">Tidak</label>

                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">Foto</div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/profile/mahasiswa/default.jpg') ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="imagemhs" name="imagemhs">
                                <label class="custom-file-label" for="imagemhs">Pilih foto</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="<?= base_url('operation/mahasiswa'); ?>" class="btn btn-danger">Kembali</a>

                </div>
            </div>

            </form>


        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
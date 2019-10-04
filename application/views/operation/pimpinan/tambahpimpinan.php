<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart('operation/tambahpimpinan'); ?>

            <div class="form-group row">
                <label for="nidn" class="col-sm-3 col-form-label">NIDN</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nidn" name="nidn" value="<?= set_value('nidn'); ?>">
                    <?= form_error('nidn', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="namalengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="namalengkap" name="namalengkap" value="<?= set_value('namalengkap'); ?>">
                    <?= form_error('namalengkap', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="password" name="password" value="">
                    <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="password2" class="col-sm-3 col-form-label">Repeat Password</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="password2" name="password2" value="">
                    <?= form_error('password2', ' <small class="text-danger pl-3">', '</small>'); ?>
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
                <label for="mengajar" class="col-sm-3 col-form-label">Jabatan</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= set_value('jabatan'); ?>">
                    <?= form_error('jabatan', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                    <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="hp" class="col-sm-3 col-form-label">Handphone</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="hp" name="hp" value="<?= set_value('hp'); ?>">
                    <?= form_error('hp', ' <small class="text-danger pl-3">', '</small>'); ?>
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
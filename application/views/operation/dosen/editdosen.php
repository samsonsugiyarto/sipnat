<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart(); ?>
            <input type="hidden" name="nik" value="<?= $dosen['nik']; ?>">
            <div class="form-group row">
                <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nik" name="nik" value="<?= $dosen['nik']; ?>" readonly>
                    <?= form_error('nik', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="namalengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="namalengkap" name="namalengkap" value="<?= $dosen['name']; ?>">
                    <?= form_error('namalengkap', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="passworddosen1" name="passworddosen1">
                    <?= form_error('passworddsn1', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Repeat Password</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="passworddosen2" name="passworddosen2">
                </div>
            </div>

            <div class="form-group row">
                <?php
                $jk = $dosen['jk']; ?>
                <label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="form-check form-check-inline pl-3">
                    <input type="radio" name="jk" <?php if ($jk == 'L') {
                                                        echo 'checked';
                                                    } ?> value="L">
                    <label class="form-check-label" for="jk">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="jk" <?php if ($jk == 'P') {
                                                        echo 'checked';
                                                    } ?> value="P">
                    <label class="form-check-label" for="jk">Perempuan</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="mengajar" class="col-sm-3 col-form-label">Mengajar</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="mengajar" name="mengajar" value="<?= $dosen['mengajar']; ?>">
                    <?= form_error('mengajar', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="email" name="email" value="<?= $dosen['email']; ?>">
                    <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="hp" class="col-sm-3 col-form-label">Handphone</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="hp" name="hp" value="<?= $dosen['hp']; ?>">
                    <?= form_error('hp', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <?php
                $aktif = $dosen['is_active']; ?>
                <label for="aktif" class="col-sm-3 col-form-label">Aktif</label>
                <div class="form-check form-check-inline pl-3">
                    <input type="radio" name="aktifdosen" <?php if ($aktif == '1') {
                                                                echo 'checked';
                                                            } ?> value="1">
                    <label class="form-check-label" for="aktifdosen">Ya</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="aktifdosen" <?php if ($aktif == '0') {
                                                                echo 'checked';
                                                            } ?> value="0">
                    <label class="form-check-label" for="aktifdosen">Tidak</label>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">Foto</div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/profile/dosen/') . $dosen['image']; ?>" class="img-thumbnail">
                        </div>

                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">Ganti Foto</div>
                <div class="col-sm-9">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="imagedosen" name="imagedosen">
                        <label class="custom-file-label" for="image">Pilih foto</label>
                    </div>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Perbarui</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <a href="<?= base_url('operation/dosen'); ?>" class="btn btn-danger">Kembali</a>
                </div>
            </div>
            </form>


        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
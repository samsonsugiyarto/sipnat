<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <h1 class="h5 mb-4 ">Form Edit Admin</h1>

    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart(); ?>
            <input type="hidden" name="id" value="<?= $admin['id']; ?>">
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="email" name="email" value="<?= $admin['email']; ?>" readonly>
                    <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $admin['name']; ?>">
                    <?= form_error('nama', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <?php
                $jk = $admin['jk']; ?>
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
                <label for="password" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="password" name="password">
                    <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="password2" class="col-sm-3 col-form-label">Repeat Password</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="password2" name="password2">
                </div>
            </div>
            <div class="form-group row">
                <label for="hp" class="col-sm-3 col-form-label">Hp</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="hp" name="hp" value="<?= $admin['hp']; ?>">
                    <?= form_error('hp', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <?php
                $aktif = $admin['is_active']; ?>
                <label for="aktif" class="col-sm-3 col-form-label">Aktif</label>
                <div class="form-check form-check-inline pl-3">
                    <input type="radio" name="aktif" <?php if ($aktif == '1') {
                                                            echo 'checked';
                                                        } ?> value="1">
                    <label class="form-check-label" for="aktif">Ya</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="aktif" <?php if ($aktif == '0') {
                                                            echo 'checked';
                                                        } ?> value="0">
                    <label class="form-check-label" for="aktif">Tidak</label>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">Foto</div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/profile/') . $admin['image']; ?>" class="img-thumbnail">
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
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <a href="<?= base_url('administrator'); ?>" class="btn btn-danger">Batal</a>
                </div>
            </div>

            </form>


        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
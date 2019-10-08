<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart('dosen'); ?>

            <div class="form-group row">
                <label for="nidn" class="col-sm-3 col-form-label">NIDN</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nidn" name="nidn" value="52739" readonly> </div>
            </div>
            <div class="form-group row">
                <label for="namalengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="namalengkap" name="namalengkap" value="Endang Setyawati, M.Kom">
                    <?= form_error('name', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input ml-3" type="radio" name="jkl" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="jkl">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jkp" id="inlineRadio2" value="option2" checked>
                    <label class="form-check-label" for="jkp">Perempuan</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="mengajar" class="col-sm-3 col-form-label">Mengajar</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="mengajar" name="mengajar" value="Ansi">
                    <?= form_error('name', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="email" name="email" value="endangb17@gmail.com">
                    <?= form_error('name', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="hp" class="col-sm-3 col-form-label">Handphone</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="hp" name="hp" value="089563">
                    <?= form_error('name', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>

            </div>

            <div class="form-group row">
                <div class="col-sm-3">Foto</div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/profile/default.jpg') ?>" class="img-thumbnail">
                        </div>

                    </div>
                </div>
                <div class="col-sm-3">Ganti Foto</div>
                <div class="col-sm-9">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Pilih foto</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12 pl-5 ml-5">
                    <button type="submit" class="btn btn-primary ml-5">Perbarui</button>
                    <button type="submit" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-danger">Batal</button>
                </div>
            </div>

            </form>



        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
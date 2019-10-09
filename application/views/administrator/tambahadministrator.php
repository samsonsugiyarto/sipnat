<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart('administrator/index'); ?>

            <div class="form-group row">
                <label for="namalengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="namalengkap" name="namalengkap" value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="jenkel" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="form-check form-check-inline pl-3">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline  pl-3">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="email" name="email" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="hp" class="col-sm-3 col-form-label">Hp</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="hp" name="hp" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="aktif" class="col-sm-3 col-form-label">Aktif</label>
                <div class="form-check form-check-inline pl-3">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                </div>
                <div class="form-check form-check-inline  pl-3">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
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
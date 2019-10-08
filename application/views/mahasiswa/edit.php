<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart('user/edit'); ?>

            <div class="form-group row">
                <label for="nim" class="col-sm-3 col-form-label">NIM</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nim" name="nim" value="201601041" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" name="name" value="Samson Sugiyarto">
                    <?= form_error('name', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input ml-3" type="radio" name="jkl" id="inlineRadio1" value="option1" checked>
                    <label class="form-check-label" for="jkl">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jkp" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="jkp">Perempuan</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="namalengkap" class="col-sm-3 col-form-label">Jurusan</label>
                <div class="col-sm-9">
                    <select name="jurusan" id="jurusan" class="form-control col-sm-9">

                        <option value="">S1 Sistem Informasi</option>
                        <option value="">D3 Komputerisasi Akuntansi</option>
                        <option value="">S1 Teknik Informatika</option>
                        <option value="">S1 Teknik Multimedia & Jaringan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="email" name="email" value="samsonsugiyarto123@gmail.com">
                    <?= form_error('name', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="hp" class="col-sm-3 col-form-label">Handphone</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="hp" name="hp" value="08956376556">
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
            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Perbarui</button>
                    <button type="submit" class="btn btn-warning">Reset</button>
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
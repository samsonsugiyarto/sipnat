<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">


            <?= form_open_multipart('user/edit'); ?>
            <div class="form-group row">
                <label for="nokandidat" class="col-sm-3 col-form-label">No Kandidat</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nokandidat" name="nokandidat" value="1">
                </div>
            </div>
            <div class="form-group row">
                <label for="namalengkapketua" class="col-sm-3 col-form-label">Nama Lengkap Ketua</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="namalengkapketua" name="namalengkapketua" value="Feni Lestari">
                </div>
            </div>
            <div class="form-group row">
                <label for="namalengkapwakil" class="col-sm-3 col-form-label">Nama Lengkap Wakil</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="namalengkapwakil" name="namalengkapwakil" value="Agnes Shita">
                </div>
            </div>
            <div class="form-group row">
                <label for="jenkelketua" class="col-sm-3 col-form-label">Jenis Kelamin Ketua</label>
                <div class="form-check form-check-inline pl-3">
                    <input class="form-check-input" type="radio" name="jkk" id="jkk" value="option1">
                    <label class="form-check-label" for="jkk">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jkp" id="jkp" value="option2" checked>
                    <label class="form-check-label" for="jkp">Perempuan</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="jenkelwakketua" class="col-sm-3 col-form-label">Jenis Kelamin Wakil Ketua</label>
                <div class="form-check form-check-inline pl-3">
                    <input class="form-check-input" type="radio" name="jkwkl" id="jkwkl" value="option1">
                    <label class="form-check-label" for="jkwkl">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jkwkp" id="jkwkp" value="option2" checked>
                    <label class="form-check-label" for="jkwkp">Perempuan</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="emailkan" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="email" name="email" value="feni@gmail.com">
                </div>
            </div>
            <div class="form-group row">
                <label for="hpkan" class="col-sm-3 col-form-label">Hp</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="hp" name="hp" value="08967999">
                </div>
            </div>
            <div class="form-group row">
                <label for="visikan" class="col-sm-3 col-form-label">Visi</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="visi" name="visi" value="Menjadikan kampus yang humanis">
                </div>
            </div>
            <div class="form-group row">
                <label for="misikan" class="col-sm-3 col-form-label">Misi</label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="Menjadikan kampus yang humanis"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">Foto Ketua</div>
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
            <div class="form-group row">
                <div class="col-sm-3">Foto Wakil Ketua</div>
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
            <div class="form-group row">
                <label for="uraian" class="col-sm-3 col-form-label">Uraian</label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart('operation/riwayat'); ?>
            <div class="form-group row">
                <label for="jabatan" class="col-sm-3 col-form-label">Tahun Jabatan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="jabatan" name="jabatan" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="nokandidat" class="col-sm-3 col-form-label">No Kandidat</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nokandidat" name="nokandidat" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="namalengkapketua" class="col-sm-3 col-form-label">Ketua</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="namalengkapketua" name="namalengkapketua" value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="namalengkapwakil" class="col-sm-3 col-form-label">Wakil Ketua</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="namalengkapwakil" name="namalengkapwakil" value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="visikan" class="col-sm-3 col-form-label">Visi</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="namalengkapwakil" name="namalengkapwakil" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="misikan" class="col-sm-3 col-form-label">Misi</label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
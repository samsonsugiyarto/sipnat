<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart('operation/tambahkandidat'); ?>
            <div class="form-group row">
                <label for="nokandidat" class="col-sm-3 col-form-label">No Kandidat</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nokandidat" name="nokandidat" placeholder="isikan no kandidat" value="<?= set_value('nokandidat'); ?>">
                    <?= form_error('nokandidat', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="namalengkapketua" class="col-sm-3 col-form-label">Nama Lengkap Ketua</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="namalengkapketua" name="namalengkapketua" placeholder="isikan nama lengkap ketua" value="<?= set_value('namalengkapketua'); ?>">
                    <?= form_error('namalengkapketua', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="namalengkapwakil" class="col-sm-3 col-form-label">Nama Lengkap Wakil</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="namalengkapwakil" name="namalengkapwakil" placeholder="isikan nama lengkap wakil" value="<?= set_value('namalengkapwakil'); ?>">
                    <?= form_error('namalengkapwakil', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="jk_ketua" class="col-sm-3 col-form-label">Jenis Kelamin Ketua</label>
                <div class="form-check form-check-inline pl-3">
                    <input type="radio" name="jk_ketua" value="L" <?= set_radio('jk_ketua', 'L', TRUE); ?> />
                    <label class="form-check-label" for="jk_ketua">&nbsp;Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="jk_ketua" value="P" <?= set_radio('jk_ketua', 'P'); ?> />
                    <label class="form-check-label" for="jk_ketua">&nbsp;Perempuan</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="jk_wakil" class="col-sm-3 col-form-label">Jenis Kelamin Wakil</label>
                <div class="form-check form-check-inline pl-3">
                    <input type="radio" name="jk_wakil" value="L" <?= set_radio('jk_wakil', 'L', TRUE); ?> />
                    <label class="form-check-label" for="jk_wakil">&nbsp;Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="jk_wakil" value="P" <?= set_radio('jk_wakil', 'P'); ?> />
                    <label class="form-check-label" for="jk_wakil">&nbsp;Perempuan</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="email_ketua" class="col-sm-3 col-form-label">Email Ketua</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="email_ketua" name="email_ketua" placeholder="isikan email ketua" value="<?= set_value('email_ketua'); ?>">
                    <?= form_error('email_ketua', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="email_wakil" class="col-sm-3 col-form-label">Email Wakil</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="email_wakil" name="email_wakil" placeholder="isikan email wakil" value="<?= set_value('email_wakil'); ?>">
                    <?= form_error('email_wakil', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="hp_ketua" class="col-sm-3 col-form-label">Hp Ketua</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="hp_ketua" name="hp_ketua" placeholder="isikan no hp ketua" value="<?= set_value('hp_ketua'); ?>">
                    <?= form_error('hp_ketua', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="hp_wakil" class="col-sm-3 col-form-label">Hp wakil</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="hp_wakil" name="hp_wakil" placeholder="isikan no hp wakil" value="<?= set_value('hp_wakil'); ?>">
                    <?= form_error('hp_wakil', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="visi" class="col-sm-3 col-form-label">Visi</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="visi" name="visi" placeholder="isikan visi" value="<?= set_value('visi'); ?>">
                    <?= form_error('visi', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="misi" class="col-sm-3 col-form-label">Misi</label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="misi" name="misi" placeholder="isikan misi" rows="5"><?= set_value('misi'); ?></textarea>
                    <?= form_error('misi', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">Foto Ketua</div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/profile/kandidat/default.jpg') ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto_ketua" name="foto_ketua">
                                <label class="custom-file-label" for="foto_ketua">Pilih foto</label>
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
                            <img src="<?= base_url('assets/img/profile/kandidat/default.jpg') ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto_wakil" name="foto_wakil">
                                <label class="custom-file-label" for="foto_wakil">Pilih foto</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="uraian" class="col-sm-3 col-form-label">Uraian</label>
                <div class="col-sm-8">
                    <textarea class="form-control" id="uraian" name="uraian" rows="8" placeholder="isikan uraian..."><?= set_value('uraian'); ?></textarea>
                    <?= form_error('uraian', ' <small class="text-danger pl-3">', '</small>'); ?>

                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="<?= base_url('operation/kandidat'); ?>" class="btn btn-danger">Batal</a>
                </div>
            </div>

            </form>


        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
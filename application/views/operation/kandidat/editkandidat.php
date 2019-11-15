<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form Edit Kandidat</h1>

    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart(); ?>
            <input type="hidden" name="no_kandidat" value="<?= $kandidat['no_kandidat'] ?>">
            <div class="form-group row">
                <label for="nokandidat" class="col-sm-3 col-form-label">No Kandidat</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nokandidat" name="nokandidat" value="<?= $kandidat['no_kandidat']; ?>" readonly> <?= form_error('nokandidat', ' <small class="text-danger pl-3">', '</small>'); ?> </div>
            </div>
            <div class="form-group row">
                <label for="namalengkapketua" class="col-sm-3 col-form-label">Nama Lengkap Ketua</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="namalengkapketua" name="namalengkapketua" value="<?= $kandidat['nama']; ?>">
                    <?= form_error('namalengkapketua', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="namalengkapwakil" class="col-sm-3 col-form-label">Nama Lengkap Wakil</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="namalengkapwakil" name="namalengkapwakil" value="<?= $kandidat['wakil']; ?>">
                    <?= form_error('namalengkapwakil', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <?php
                $jk_ket = $kandidat['jk_ketua']; ?>
                <label for="jk_ket" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="form-check form-check-inline pl-3">
                    <input type="radio" name="jk_ket" <?php if ($jk_ket == 'L') {
                                                            echo 'checked';
                                                        } ?> value="L">
                    <label class="form-check-label" for="jk_ket">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="jk_ket" <?php if ($jk_ket == 'P') {
                                                            echo 'checked';
                                                        } ?> value="P">
                    <label class="form-check-label" for="jk_ket">Perempuan</label>
                </div>
            </div>
            <div class="form-group row">
                <?php
                $jk_wak = $kandidat['jk_wakil']; ?>
                <label for="jk_wak" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="form-check form-check-inline pl-3">
                    <input type="radio" name="jk_wak" <?php if ($jk_wak == 'L') {
                                                            echo 'checked';
                                                        } ?> value="L">
                    <label class="form-check-label" for="jk_wak">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="jk_wak" <?php if ($jk_wak == 'P') {
                                                            echo 'checked';
                                                        } ?> value="P">
                    <label class="form-check-label" for="jk_wak">Perempuan</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="email_ketua" class="col-sm-3 col-form-label">Email Ketua</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="email_ketua" name="email_ketua" value="<?= $kandidat['email_ketua']; ?>">
                    <?= form_error('email_ketua', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="email_wakil" class="col-sm-3 col-form-label">Email Wakil</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="email_wakil" name="email_wakil" value="<?= $kandidat['email_wakil']; ?>">
                    <?= form_error('email_wakil', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="hp_ketua" class="col-sm-3 col-form-label">Hp Ketua</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="hp_ketua" name="hp_ketua" value="<?= $kandidat['hp_ketua']; ?>">
                    <?= form_error('hp_ketua', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="hp_wakil" class="col-sm-3 col-form-label">Hp wakil</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="hp_wakil" name="hp_wakil" value="<?= $kandidat['hp_wakil']; ?>">
                    <?= form_error('hp_wakil', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="visi" class="col-sm-3 col-form-label">Visi</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="visi" name="visi" value="<?= $kandidat['visi']; ?>">
                    <?= form_error('visi', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="misi" class="col-sm-3 col-form-label">Misi</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="misi" name="misi" rows="5"><?= $kandidat['misi']; ?></textarea>
                    <?= form_error('misi', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">Foto Ketua</div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/profile/kandidat/') . $kandidat['foto_ketua']; ?>?>" class="img-thumbnail">
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
                            <img src="<?= base_url('assets/img/profile/kandidat/') . $kandidat['foto_wakil']; ?>?>" class="img-thumbnail">
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
                <div class="col-sm-3">Foto kampanye</div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto_kampanye" name="upload_Files[]" multiple />
                                <label class="custom-file-label" for="foto_kampanye">Pilih beberapa foto</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php

            $id_kan = $kandidat['no_kandidat'];
            $query = "SELECT kampanye.file_name
            FROM kampanye INNER JOIN kandidat
            ON kandidat.no_kandidat = kampanye.no_kandidat
            WHERE kampanye.no_kandidat = $id_kan ; ";
            $kampanye = $this->db->query($query)->result_array();
            ?>

            <div class="form-group row justify-content-end ">
                <div class="col-sm-9">
                    <div class="row">
                        <?php foreach ($kampanye as $panye) : ?>

                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/kampanye/') . $panye['file_name']; ?>" class="img-thumbnail">
                                <a class="btn btn-danger btn-sm hapuskampanye" href="<?= base_url() ?>operation/hapuskampanye/<?= $panye['file_name']; ?>">hapus</a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="uraian" class="col-sm-3 col-form-label">Uraian</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="uraian" name="uraian" rows="8"><?= $kandidat['uraian']; ?></textarea>
                    <?= form_error('uraian', ' <small class="text-danger pl-3">', '</small>'); ?>

                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-9">
                    <input type="submit" class="btn btn-primary" name="submitForm" id="submitForm " value="Edit"></input>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <a href="<?= base_url('operation/kandidat'); ?>" class="btn btn-danger">Kembali</a>
                </div>
            </div>

            </form>


        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
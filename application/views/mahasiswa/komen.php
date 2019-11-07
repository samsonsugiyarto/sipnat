<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?php if ($this->session->flashdata('message')) : ?>

                <div class="flashdatakomen" data-flashdatakomen="<?= $this->session->flashdata('message'); ?>"></div>
            <?php endif; ?>

            <?= form_open_multipart('user/komentar'); ?>

            <div class="form-group row">
                <label for="komentar" class="col-sm-4 col-form-label">Tambah Komentar</label>
            </div>
            <div class="form-group row">
                <div class="col-sm-8">
                    <textarea class="form-control" id="komentar" name="komentar" rows="5" placeholder="Tambah komentar disini..."></textarea>
                    <?= form_error('komentar', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-success">Kirim</button>
                    <a href="<?= base_url('user'); ?>" class="btn btn-danger">Kembali</a>
                </div>
            </div>
            </form>


        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
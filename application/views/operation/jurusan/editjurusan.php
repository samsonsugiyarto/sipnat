<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Jurusan</h1>

    <div class="row">
        <div class="col-lg-8">


            <?= form_open_multipart('operation/editjurusan'); ?>
            <input type="hidden" name="id" value="<?= $jurusan['id']; ?>">
            <div class="form-group row">
                <label for="namajur" class="col-sm-3 col-form-label">Nama Jurusan</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $jurusan['nama_jurusan']; ?>" required>
                    <small class="text-danger pl-3"> <?= form_error('jurusan'); ?></small>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-10 pl-4">
                    <button type="submit" class="btn btn-primary ml-5">Perbarui</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <a href="<?= base_url('operation'); ?>" class="btn btn-danger">Kembali</a>
                </div>
            </div>

            </form>


        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
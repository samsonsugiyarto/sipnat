<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart('operation/index'); ?>

            <div class="form-group row">
                <label for="namajurusan" class="col-sm-3 col-form-label">Nama Jurusan</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="namajurusan" name="namajurusan" value="S1 Sistem Informasi">
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlahmhs" class="col-sm-3 col-form-label">Jumlah Mahasiswa</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="jumlahmhs" name="jumlahmhs" value="250">
                    <?= form_error('name', ' <small class="text-danger pl-3">', '</small>'); ?>
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
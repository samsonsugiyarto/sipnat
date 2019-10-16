<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?= $jurusan['nama_jurusan']; ?></h5>

            <p class="card-text"><?= $jurusan['total']; ?></p>
            <a href="<?= base_url('operation'); ?>" class="btn btn-primary">Kembali</a>
        </div>
    </div>


    <!-- /.container-fluid -->
</div>

</div>
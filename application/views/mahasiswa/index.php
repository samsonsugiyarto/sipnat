<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <?php
    $nim =  $this->session->userdata('nim');
    $query = "SELECT * 
    FROM mahasiswa INNER JOIN jurusan
    ON mahasiswa.kode_jurusan = jurusan.id
    WHERE mahasiswa.nim = $nim  
    ORDER BY mahasiswa.nim ASC
    ";
    $datamhs = $this->db->query($query)->row_array();
    ?>

    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/mahasiswa/') . $datamhs['image']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $datamhs['nim']; ?></h5>
                    <p class="card-text"><?= $datamhs['name']; ?></p>
                    <?php if($datamhs['jk'] == "L"):?>
                       <p class="card-text">Laki - Laki</p>
                       <?php else:?>
                         <p class="card-text">Perempuan</p>
                     <?php endif;?>
                     <p class="card-text"><?= $datamhs['nama_jurusan']; ?></p>
                     <p class="card-text"><?= $datamhs['email']; ?></p>
                     <p class="card-text"><?= $datamhs['hp']; ?></p>
                 </div>
             </div>
         </div>
     </div>

 </div>
 <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
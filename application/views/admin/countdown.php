<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>

            <?= form_open_multipart(); ?>


            <div class="form-group row">
                <label for="date" class="col-sm-3 col-form-label">Date</label>
                <div class="col-sm-9">
                    <input type="date" id="date" class="form-control" name="date" >
                    <?= form_error('date', ' <small class="text-danger pl-3">', '</small>'); ?>

                </div>

            </div>
            <div class="form-group row">
                <label for="time" class="col-sm-3 col-form-label">Time</label>
                <div class="col-sm-9">
                    <input type="time" id="time" class="form-control" name="time" step="1">
                    <?= form_error('time', ' <small class="text-danger pl-3">', '</small>'); ?>

                </div>

            </div>


            <div class="form-group row justify-content-end">
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <!-- <a href="<?= base_url('operation/mahasiswa'); ?>" class="btn btn-danger">Kembali</a> -->

                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <div class="form-check row mb-4">  
                 <div class="col-sm-9">
                    <div id="countdown1">
                        <?php $aktif = $countdown['status'];?>
                          
                             <input type="checkbox" class="form-check-input" <?= ($aktif==1 ? 'checked data-status="0" ' : 'data-status="1"' );?>    />
                       
                        <label class="form-check-label">Munculkan Countdown? </label>
                    </div>
                </div>
            </div>

            </form>

            <div class="row">
                <div class="col-sm">
                    <?php $date = $countdown['date'];
                    $tt = strtotime($date);
                    $newDate = date("d M, Y", $tt);
                    $time = $countdown['time']; ?>
                    <p>Countdown di atur : <br> <?= $newDate; ?> Jam <?= $time; ?></p>
                        
                </div>
               
            </div>


        </div>

    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
 <?php $aktif = $countdown['status'];?>

<script>

    $('.form-check-input').on('click', function() {
           const status = $(this).data('status');

           $.ajax({
               url: "<?= base_url('admin/countdownaccess'); ?>",
               type: 'post',
               data: {
                   status: status,
               },
               success: function() {
                   document.location.href = "<?= base_url('admin/countdown'); ?>";

                    
               }
           });
       });


    $('#countdown1').append(function(){
        if (<?= $aktif;?> == 1) {
            return '<div id="addme"><div class="col-sm-9"><p>Waktu hitung mundur</p><h4 id="teks"></h4></div></div>';
        }else{
            $('#countdown1').find('#addme').remove();
        }
    });

    
    //  function(){
    //     var $this = $(this);
    //     if (<?= $aktif;?> == 1) {
    //         var newInput = $('<div id="addme"><div class="col-sm-9"><p>Waktu hitung mundur</p><h4 id="teks"></h4></div></div>');
    //         $('#countdown1').append(newInput);
    //     }else{
    //         $('#countdown1').find('#addme').remove();
    //     }
    // };



</script>


<!-- Hitung Mundur -->
<?php
$date = $countdown['date'];
$tt = strtotime($date);
$newDateY = date("Y", $tt);
$newDateMD = date("M d", $tt);
$time = $countdown['time'];
?>

<script>
    const tanggalTujuan = new Date('<?= $newDateMD; ?>, <?= $newDateY; ?> <?= $time; ?>').getTime();
    // const tanggalTujuan = new Date('Dec 02, 2021 16:00:00').getTime();


    const hitungMundur = setInterval(function() {

        const sekarang = new Date().getTime();
        const selisih = tanggalTujuan - sekarang;


        const hari = Math.floor(selisih / (1000 * 60 * 60 * 24));

        const jam = Math.floor(selisih % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));

        const menit = Math.floor(selisih % (1000 * 60 * 60) / (1000 * 60));

        const detik = Math.floor(selisih % (1000 * 60) / 1000);

        var txtj = " jam ";
        var tjam = txtj.fontsize(2);
        var txtm = " menit ";
        var tmenit = txtm.fontsize(2);
        var txtd = " detik ";
        var tdetik = txtd.fontsize(2);

        const teks = document.getElementById('teks');
        teks.innerHTML = jam + tjam + menit + tmenit + detik + tdetik;

        if (selisih < 0) {
            clearInterval(hitungMundur);
            teks.innerHTML = 'Waktu Anda HABIS!';

        }

    }, 1000);
</script>
<!-- Akhir Hitung Mundur -->
   <!-- Footer -->
   <footer class="sticky-footer bg-white">
       <div class="container my-auto">
           <div class="copyright text-center my-auto">
               <span>Copyright &copy; Web PPL <?= date('Y'); ?></span>
           </div>
       </div>
   </footer>
   <!-- End of Footer -->


   </div>
   <!-- End of Content Wrapper -->

   </div>
   <!-- End of Page Wrapper -->

   <!-- Scroll to Top Button-->
   <a class="scroll-to-top rounded" href="#page-top">
       <i class="fas fa-angle-up"></i>
   </a>

   <!-- Logout Modal-->
   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Apakah ingin keluar?</h5>
                   <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">×</span>
                   </button>
               </div>
               <div class="modal-body">Pilih "Logout" jika ingin mengakhiri sesi.</div>
               <div class="modal-footer">
                   <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                   <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
               </div>
           </div>
       </div>
   </div>



   <!-- Bootstrap core JavaScript-->


   <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>

   <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


   <!-- Core plugin JavaScript-->
   <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
   <!-- Custom scripts for all pages-->
   <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

   <!-- <script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>

   <script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script> -->
   <script src='https://www.google.com/recaptcha/api.js'></script>

   <!-- <script src="//code.jquery.com/jquery-3.4.1.min.js"></script> -->
   <script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
   <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
   <script src="//cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
   <script src="//cdn.datatables.net/buttons/1.5.6/js/buttons.bootstrap4.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
   <script src="//cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
   <script src="//cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
   <script src="//cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script>


   <script>
       $(document).ready(function() {
           var table = $('#reminders').DataTable({
               //"dom": 'Blfrtip',
               "aLengthMenu": [
                   [10, 25, 50, 100, 250, 500, -1],
                   [10, 25, 50, 100, 250, 500, 'All']
               ],
               "oLanguage": {
                   "sInfo": 'Total _TOTAL_ Data ditampilkan (_START_ sampai _END_)',
                   "sLengthMenu": 'Tampilkan _MENU_ Data',
                   "sInfoEmpty": 'Tidak ada Data.',
                   "sSearch": 'Pencarian:',
                   "sEmptyTable": 'Tidak ada Data di dalam Database',
                   "sZeroRecords": 'Tidak ada data yang cocok',
                   "sInfoFiltered": '(tersaring dari _MAX_ total data yang masuk)',
                   "oPaginate": {
                       "sNext": 'Selanjutnya',
                       "sLast": 'Terakhir',
                       "sFirst": 'Pertama',
                       "sPrevious": 'Sebelumnya'
                   }
               },
               "initComplete": function() {
                   $("#reminders").show();
               },
               "buttons": ['copy', 'csv', 'excel', 'pdf', 'print', 'colvis']
           });
           table.buttons().container().appendTo(`#reminders_wrapper .col-md-6:eq(0)`);
       });
   </script>

   <script type="text/javascript">
       $(document).ready(function() {
           var table = $('#dataTable').dataTable({

               "aLengthMenu": [
                   [10, 25, 50, 100, 250, 500, -1],
                   [10, 25, 50, 100, 250, 500, 'All']
               ],
               "oLanguage": {
                   "sInfo": 'Total _TOTAL_ Data ditampilkan (_START_ sampai _END_)',
                   "sLengthMenu": 'Tampilkan _MENU_ Data',
                   "sInfoEmpty": 'Tidak ada Data.',
                   "sSearch": 'Pencarian:',
                   "sEmptyTable": 'Tidak ada Data di dalam Database',
                   "sZeroRecords": 'Tidak ada data yang cocok',
                   "sInfoFiltered": '(tersaring dari _MAX_ total data yang masuk)',
                   "oPaginate": {
                       "sNext": 'Selanjutnya',
                       "sLast": 'Terakhir',
                       "sFirst": 'Pertama',
                       "sPrevious": 'Sebelumnya'
                   }
               }
           });

       });
   </script>




   <!-- <script>
       $(document).ready(function() {
           $.noConflict();
           var table = $('#dataTable').DataTable();
       });
   </script> -->



   <script>
       $('.custom-file-input').on('change', function() {
           let fileName = $(this).val().split('\\').pop();
           $(this).next('.custom-file-label').addClass("selected").html(fileName);
       });


       $('.form-check-input').on('click', function() {
           const menuId = $(this).data('menu');
           const roleId = $(this).data('role');

           $.ajax({
               url: "<?= base_url('admin/changeaccess'); ?>",
               type: 'post',
               data: {
                   menuId: menuId,
                   roleId: roleId
               },
               success: function() {
                   document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
               }
           });
       });
   </script>
   <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
   <script src="<?= base_url('assets/js/sweetalert/sweetalert2.all.min.js'); ?>"></script>
   <script src="<?= base_url('assets/js/scriptsweet.js'); ?>"></script>
   <script src="<?= base_url('assets/js/sweet2.js'); ?>"></script>
   <script src="<?= base_url('assets/js/sweet3.js'); ?>"></script>
   <script src="<?= base_url('assets/js/sweet4.js'); ?>"></script>
   <script src="<?= base_url('assets/js/sweet5.js'); ?>"></script>
   <script src="<?= base_url('assets/js/sweet6.js'); ?>"></script>
   <script src="<?= base_url('assets/js/sweet7.js'); ?>"></script>
   <script src="<?= base_url('assets/js/sweet8.js'); ?>"></script>
   <script src="<?= base_url('assets/js/sweet9.js'); ?>"></script>

   </body>

   </html>
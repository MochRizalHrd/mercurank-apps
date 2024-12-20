</div><!-- /.container-fluid -->
</div><!-- /.content -->
</div><!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <!-- Kosongkan untuk menghapus elemen kanan bawah -->
    </div>
    <strong>Copyright &copy; 2024 Mercu Rank | Universitas Mercu Buana Yogyakarta.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div><!-- ./wrapper -->

<!-- Scripts -->
<!-- jQuery -->
<script src="<?= base_url('admin/template/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('admin/template/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- DataTables & Plugins -->
<script src="<?= base_url('admin/template/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('admin/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('admin/template/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('admin/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('admin/template/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('admin/template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('admin/template/plugins/jszip/jszip.min.js') ?>"></script>
<script src="<?= base_url('admin/template/plugins/pdfmake/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('admin/template/plugins/pdfmake/vfs_fonts.js') ?>"></script>
<script src="<?= base_url('admin/template/plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('admin/template/plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('admin/template/plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('admin/template/dist/js/adminlte.min.js') ?>"></script>

<!-- Page specific script -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true
        });
    });
</script>
</body>

</html>
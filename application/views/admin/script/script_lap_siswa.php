<script type="text/javascript">
var URL = '<?php echo base_url(); ?>';
var table;

$(document).ready(function() {
    table = $('#tabel_lap_siswa').DataTable({
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "ordering": true,
            "searching": true,
            "order": [],

            "ajax": {
                "url": "<?php echo base_url('admin/manage_lap_siswa/get_data_lap_siswa')?>",
                "type": "POST"
            },

            "coloumnDefs": [
                {
                    "targets": [0],
                    "orderable": false,
                },
            ],

            "language": {
                "sProcessing": "Memuat Data....",
                "lengthMenu": "Data yang ditampilkan : _MENU_",
                "loadingRecords": "Memuat....",
                "zeroRecords": "Tidak ada data yang sesuai",
                "info": "_START_ - _END_ of _TOTAL_",
                "infoEmpty": "Tidak ada data pada database",
                "sEmptyTable": "Tidak ada data pada database",
                "paginate": {
                    "next": ">",
                    "previous": "<"
                },
                "search": "Pencarian :"
            },

            "bPaginate": true,
            "sPaginationType": "simple",
        });
});
</script>
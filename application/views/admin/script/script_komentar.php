<script type="text/javascript">
var URL = '<?php echo base_url(); ?>';
var table;

$(document).ready(function() {
    table = $('#tabel_komentar').DataTable({
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "ordering": true,
            "searching": true,
            "order": [],

            "ajax": {
                "url": "<?php echo base_url('admin/manage_komentar/get_data_komentar')?>",
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

function deleteById(id, type) {
    if (type == 'delete') {
        var komentar_id = id;
        Swal.fire({
            title: 'Hapus Data',
            text: 'Yakin ingin menghapus komentar?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then((result)=> {
            if (result.isConfirmed) {
                $.ajax({
                    url: URL+'admin/manage_komentar/hapusKomentar',
                    type: 'POST',
                    data: {komentar_id:id},
                    success: function(response){
                            Swal.fire({
                                icon: 'success',
                                title: 'Data berhasil dihapus',
                                timer: 700,
                                showCancelButton: false,
                                showConfirmButton: false,
                                text: response.sukses
                            })
                            table.ajax.reload();
                            tampil_data();
                    }
                })
            }
        })
    }
}
</script>
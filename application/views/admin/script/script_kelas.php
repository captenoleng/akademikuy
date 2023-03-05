<script type="text/javascript">
var URL = '<?php echo base_url(); ?>';
var table;

$(document).ready(function() {
    table = $('#tabel_kelas').DataTable({
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "ordering": true,
            "searching": true,
            "order": [],

            "ajax": {
                "url": "<?php echo base_url('admin/manage_kelas/get_data_kelas')?>",
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

function tambahKelas(){
    var data = $('#formtambah').serialize();
    $.ajax({
        url: URL+'admin/manage_kelas/tambahKelas',
        type: 'POST',   
        data: data,
        dataType: 'json',
        success: function(response){
            console.log(response);
            Swal.fire({
                icon: 'success',
                title: 'Data Berhasil Ditambahkan',
                timer: 700,
                showCancelButton: false,
                showConfirmButton: false,
                text: response.sukses
            });
            $("#ModalTambahKelas").modal('hide');
            table.ajax.reload();
            tampil_data();
        }
    })
}

//ambil data update
function updateById(id, type) {
    if (type == 'update') {
        var kelas_id = id;
        $.ajax({
            url: URL+'admin/manage_kelas/ambilDataByKelas_id',
            type: 'POST',
            data: {kelas_id:kelas_id},
            dataType: 'json',
            success: function(response){
                console.log(response);
                $("#ModalEditKelas").modal('show');
                $('input[name="kelas_id"]').val(response[0].kelas_id);
                $('input[name="nama_kelas"]').val(response[0].nama_kelas);
                $('select[name="nip"]').find(':selected').val(response[0].nip);
            }
        })
    }
}

//proses update
function updateKelas(){   
    var data = $('#formedit').serialize();
    $.ajax({
        url: URL+'admin/manage_kelas/perbaruiKelas',
        type: 'POST',
        data: data,
        dataType: 'json',
        success: function(response){
            console.log(response);
            Swal.fire({
                icon: 'success',
                title: 'Data Berhasil Diupdate',
                timer: 700,
                showCancelButton: false,
                showConfirmButton: false,
                text: response.sukses
            });
            $("#ModalEditKelas").modal('hide');
            table.ajax.reload();
            tampil_data();
        }
    })
}

function deleteById(id, type) {
    if (type == 'delete') {
        var kelas_id = id;
        Swal.fire({
            title: 'Hapus Data',
            text: 'Yakin ingin menghapus data kelas?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then((result)=> {
            if (result.isConfirmed) {
                $.ajax({
                    url: URL+'admin/manage_kelas/hapusKelas',
                    type: 'POST',
                    data: {kelas_id:kelas_id},
                    success: function(response){
                            Swal.fire({
                                icon: 'success',
                                title: 'Data berhasil dihapus',
                                timer: 700,
                                showCancelButton: false,
                                showConfirmButton: false,
                                text: response.sukses
                            });
                            table.ajax.reload();
                            tampil_data();
                    }
                })
            }
        })
    }
}
</script>
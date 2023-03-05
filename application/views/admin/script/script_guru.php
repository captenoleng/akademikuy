<script type="text/javascript">
var URL = '<?php echo base_url(); ?>';
var table;

$(document).ready(function() {
    table = $('#tabel_guru').DataTable({
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "ordering": true,
            "searching": true,
            "order": [],

            "ajax": {
                "url": "<?php echo base_url('admin/manage_guru/get_data_guru')?>",
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

function tambahGuru(){
    var data = $('#formtambah').serialize();
    $.ajax({
        url: URL+'admin/manage_guru/tambahGuru',
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
            $("#ModalTambahGuru").modal('hide');
            table.ajax.reload();
            tampil_data();
        }
    })
}

//ambil data update
function updateById(id, type) {
    if (type == 'update') {
        var id = id;
        $.ajax({
            url: URL+'admin/manage_guru/ambilDataById',
            type: 'POST',
            data: {id:id},
            dataType: 'json',
            success: function(response){
                console.log(response);
                $("#ModalEditGuru").modal('show');
                $('input[name="id"]').val(response[0].id);
                $('input[name="nama_user"]').val(response[0].nama_user);
                $('input[name="password"]').val("");
                
            }
        })
    }
}

//proses update
function updateGuru(){   
    var data = $('#formedit').serialize();
    $.ajax({
        url: URL+'admin/manage_guru/perbaruiGuru',
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
            $("#ModalEditGuru").modal('hide');
            table.ajax.reload();
            tampil_data();
        }
    })
}

function deleteById(id, type) {
    if (type == 'delete') {
        var id = id;
        Swal.fire({
            title: 'Hapus Data',
            text: 'Yakin ingin menghapus data guru?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then((result)=> {
            if (result.isConfirmed) {
                $.ajax({
                    url: URL+'admin/manage_guru/hapusGuru',
                    type: 'POST',
                    data: {id:id},
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
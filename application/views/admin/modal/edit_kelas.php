<div class="modal fade" id="ModalEditKelas" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Kelas</h5>
        <button type="button" class="btn btn-close" data-dismiss="modal" aria-hidden="true"></button>
      </div>

      <form id="formedit" action="javascript:updateKelas();">
      <div class="modal-body">
        <div class="pesan" style="display: none"></div>
        <div class="mb-3">
         <label for="">ID Kelas</label>
         <input type="text" name="kelas_id" class="form-control" readonly/>
        </div>
        <div class="mb-3">
         <label for="">Nama Kelas</label>
         <input type="text" name="nama_kelas" class="form-control" required/>
        </div>
        <div class="mb-3">
         <label for="">Nip Pengajar</label>
         <select class="js-example-basic-single" name="nip" required>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" value="reset">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.js-example-basic-single').select2({
            placeholder: 'Pilih NIP Pengajar',
            minimumInputLength: 1,
            ajax: {
                url: '<?php echo base_url('admin/manage_kelas/getDataselect_nip_pengajar')  ?>',
                dataType: 'json',
                type: "post",
                delay: 250,
                data: function(params) {
                    console.log(params.term);
                    return {
                        search: params.term,
                    }
                },
                processResults: function(data) {
                    return {
                        results: data
                    };
                },
                cache: true
            }
        });
    });
</script>
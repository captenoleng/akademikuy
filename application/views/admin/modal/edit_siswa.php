<div class="modal fade" id="ModalEditSiswa" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Siswa</h5>
        <button type="button" class="btn btn-close" data-dismiss="modal" aria-hidden="true"></button>
      </div>

      <form id="formedit" action="javascript:updateSiswa();">
      <div class="modal-body">
        <div class="pesan" style="display: none"></div>
        <div class="mb-3">
         <label for="">Nama Siswa</label>
         <input type="text" name="nama_user" class="form-control" required/>
        </div>
        <div class="mb-3">
         <label for="">NIS</label>
         <input type="text" name="id" class="form-control" readonly/>
        </div>
        <div class="mb-3">
         <label for="">Password</label>
         <input type="password" name="password" class="form-control"/>
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
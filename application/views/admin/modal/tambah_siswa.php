<div class="modal fade" id="ModalTambahSiswa" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Siswa</h5>
        <button type="button" class="btn btn-close" data-dismiss="modal" aria-hidden="true"></button>
      </div>

      <form id="formtambah" action="javascript:tambahSiswa();">
      <div class="modal-body">
        <div class="mb-3">
         <label for="">Nama Siswa</label>
         <input type="text" name="nama_user" class="form-control" required/>
        </div>
        <div class="mb-3">
         <label for="">NIS</label>
         <input type="text" name="id" class="form-control" required/>
        </div>
        <div class="mb-3">
         <label for="">Password</label>
         <input type="password" name="password" class="form-control" required/>
        </div>
        <div class="mb-3">
         <input type="text" class="form-control" name="role" value="siswa" hidden>
        </div>
        <div class="mb-3">
         <input type="text" class="form-control" name="status" value="Tidak Login" hidden>
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
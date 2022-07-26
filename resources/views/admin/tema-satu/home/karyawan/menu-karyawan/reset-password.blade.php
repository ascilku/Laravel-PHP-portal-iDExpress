 
<?php if (session()->has('alert-success')): ?>
    <div class="alert-success" data-flashdata="{{session()->get('alert-success')}}">
<?php endif ?>

<!-- ======================== Model Hapus Karyawan ======================== -->
<div class="modal modal-blur fade" id="model_hapus_ayah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <div class="modal-title">Hapus Orang Data Tua.?</div>
            <div>Mengahapus Data Orang Tua, berarti juga menghapus semua data berkaitan dengan orang tua.</div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger" id="hapus_ayah" data-bs-dismiss="modal">Ya, Hapus Data Orang Tua</button>
        </div>
        </div>
    </div>
</div>


<div class="row row-cards bottom-footer">
    <div class="col-12">
               
              <form  action="{{route('ubah-password')}}" method="post" class="card ">
                <div class="card-header">
                      <h4 class="card-title">Ubah Password</h4> 
                      
                  </div>
                  <div class="card-body">
                    
                    <div class="row">
                      <div class="col-xl-6 center">
                        <div class="row">
                          <div class="col-md-6 col-xl-12">
                                {{ csrf_field() }}

                                

                                <input type="hidden" name="id_akun" value="{{$dahboard_akun_cookie->id}}">
                                <input type="hidden" name="id" id="id">
                                  

                                <div class="mb-3">
                                  <label class="form-label required">Input Nomor Pegawai</label>
                                  <input type="text" class="form-control" id="nik_pegawai" name="nik_pegawai" placeholder="Input Nomor Pegawai" required>
                                  <span id="nama_lengkap_error" class="text-danger"></span>
                                </div>

                                <div class="mb-3">
                                  <label class="form-label required">Ubah Password</label>
                                  <input type="text" class="form-control" id="nama_lengkap_" name="password" id="nama_lengkap" placeholder="Ubah Password." required>
                                  <span id="nama_lengkap_error" class="text-danger"></span>
                                </div>

                                <div class="mb-3">
                                  <label class="form-label required">Confirm Password</label>
                                  <input type="text" class="form-control" id="tempat_lahir_" name="confirm_password" placeholder="Confirm Password" required>
                                </div>
      
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="card-footer text-end">
                    <div class="d-flex">
                      <a href="#" class="btn btn-link">Hapus</a>
                      <button type="submit" class="btn btn-primary ms-auto">Kirim data</button>
                      {{-- <input type="submit" name="save" id="save" class="btn btn-info" value="Save" /> --}}
                    </div>
                  </div>

              </form>
        
    </div>
</div>
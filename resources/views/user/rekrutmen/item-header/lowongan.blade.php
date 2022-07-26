<?php if (session()->has('alert-peringatan')): ?>
    <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
<?php endif ?>

<?php if (session()->has('alert-success')): ?>
  <div class="alert-success" data-flashdata="{{session()->get('alert-success')}}">
<?php endif ?>
<?php if (count($rekrutment_lowongan_kerja) > 0): ?> 
     @foreach ($rekrutment_lowongan_kerja as $itemrekrutment_lowongan_kerja)
      
     
          <?php 
               date_default_timezone_set('Asia/Jakarta');
               $tgl_buka = $itemrekrutment_lowongan_kerja->tgl_buka;
               $tgl_tutup = $itemrekrutment_lowongan_kerja->tgl_tutup;
               $status = $itemrekrutment_lowongan_kerja->status;
               $tgl_tetap = date('Y-m-d');
          ?>
               <?php if ($status == 'Expired'): ?>
               <?php else: ?>
               
                    <div class="accordion-item">
                         <h2 class="accordion-header" id="heading-2">
                              <button class="accordion-button collapsed bg-dark text-white " type="button" data-bs-toggle="collapse" data-bs-target='#{{$itemrekrutment_lowongan_kerja->id_lowongan}}' aria-expanded="false">
                                   <div class=" width-font-full">
                                        <h4 class="font-color-small-hover">{{$itemrekrutment_lowongan_kerja->judul}}</h4>
                                        {{-- $tgl_buka >= $tgl_tetap  --}}
                                        <?php if ($tgl_tetap < $tgl_buka): ?>
                                             <small class="font-color-small container">Coming</small>
                                        <?php elseif ($tgl_tetap <= $tgl_tutup): ?>
                                             <small class="font-color-small container">Buka</small>  
                                        <?php else: ?>     
                                             <small class="font-color-small- container">Tutup</small>                
                                        <?php endif ?>

                                   </div>
                              </button>
                         </h2>
                         <div id='{{$itemrekrutment_lowongan_kerja->id_lowongan}}' class="accordion-collapse collapse" data-bs-parent="#accordion-example">
                              <div class="accordion-body pt-3">
                                   <div class="col-sm-12 col-lg-12">
                                        <div class="card card-sm">
                                             <?php if (!isset($itemrekrutment_lowongan_kerja->nama_file)): ?>
                                                  
                                             <?php else: ?> 
                                                  <a href="#" class="d-block">
                                                       <img src="{{ asset('') }}file/rekrutment/lowongan-kerja/{{$itemrekrutment_lowongan_kerja->nama_file}}" class="card-img-top">
                                                  </a>
                                             <?php endif ?> 
                                             
                                             <div class="card-body">
                                                  <div class="d-flex align-items-center">
                                                       <div>
                                                            <div>Waktu Buka <label class="font-color-small-lowongan">Mulai {{date('d F Y', strtotime($itemrekrutment_lowongan_kerja->tgl_buka))}}</label> s/d <label class="font-color-small-lowongan"> {{date('d F Y', strtotime($itemrekrutment_lowongan_kerja->tgl_tutup))}}</label></div>
                                                            <div>{{$itemrekrutment_lowongan_kerja->deskripsi}}</div>

                                                            

                                                            
                                                                      

                                                                      <?php if ($tgl_tetap < $tgl_buka): ?>
                                                                           <div class="text-muted hight-top">
                                                                                <a href="#" class="btn btn-outline-warning">
                                                                                COMING
                                                                                </a>
                                                                           </div> 
                                                                      <?php elseif ($tgl_tetap <= $tgl_tutup): ?>
                                                                           <div class="text-muted hight-top">
                                                                                <a href="{{route('aply-pekerjaan', ['id' => Crypt::encrypt($itemrekrutment_lowongan_kerja->id), 'id_perusahaan' => Crypt::encrypt($itemrekrutment_lowongan_kerja->perusahaan->id)])}}" class="btn btn-outline-primary">
                                                                                     Aply Pekerjaan
                                                                                </a>
                                                                           </div>
                                                                      <?php else: ?>     
                                                                           <div class="text-muted hight-top">
                                                                                <a href="" class="btn btn-outline-warning">
                                                                                     TUTUP
                                                                                </a>
                                                                           </div>              
                                                                      <?php endif ?>
                                                            
                                                                 
                                                            
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               <?php endif ?> 
    
     @endforeach
<?php else: ?>
     <strong class="alert-login-success font-color-small-">Catatan ! </strong>Tidak Ada Lowongan Saat Ini. Silahkan Pantau Terus Yah Website Kami Untuk Melihat Lowongan
<?php endif ?>


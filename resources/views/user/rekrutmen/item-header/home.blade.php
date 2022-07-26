<?php if (session()->has('alert-peringatan')): ?>
    <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
<?php endif ?>
               <div class="card">
                    <div class="card-body">
                         <div class="row">
                                   <div class="col-sm-12">
                                        <h1 class="font-lowongan"> Cara Lihat Lowongan dan Apply Lowongan</h1>
                                   </div>
                                   <div class="dropdown-divider"></div>
                                   
                                   <div class="col-md-4 hight-top">
                                        <img src="{{ asset('') }}file/lowongan/satu.png" class="card-img-top">
                                   </div>
                                           
                                   <div class="col-md-7 ">
                                        <div class="font-lowongan-pont-satu ">1. Klik atau Pilih Menu Lowongan.</div>
                                        <p class="hight-top font-color-small font-size-point">Pilih menu lowongan untuk melihat lowongan apa saja yang terbuka.</p>
                                        <img src="{{ asset('') }}file/lowongan/dua.png" class="card-img-top font-lowongan-pont-satu">
                                        <div class="hight-top font-lowongan-pont-satu">2. Klik List Lowongan Di samping Menu.</div>
                                        <p class="hight-top font-color-small font-size-point">Silahkan anda memilih lowongan pekerjaan yang tertera untuk di aply.</p>
                                   </div>

                                   <div class="col-md-12 hight-top ">
                                        <img src="{{ asset('') }}file/lowongan/tiga.png" class="card-img-top">
                                        <div class="font-lowongan-pont-satu ">3. Klik List Lowongan Di samping Menu.</div>
                                        <p class="hight-top font-color-small font-size-point">Pastikan anda sudah mengisi item data diri {Data Diri, Data Orang Tua, Pendidikan Formal, Pendidikan Non Formal dan Upload File Anda}.</p>
                                   </div>

                                   
                         </div>
                         <div class="col-sm-6 font-lowongan-pont-satu">
                              
                         </div>
                              
                    </div>
               </div>
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');  {{route('login')}}
// });

//======================================================================
//========================= Routs Perusahaan ===========================
//======================================================================

Route::get     ('/'                          ,'user_page\C_User@index');

Route::post    ('/reset-login'           ,'C_Akses@resetLogin')   ->name('reset-login');

Route::post    ('/login-dashboard'           ,'C_Akses@loginQuery')   ->name('loginQuery');
Route::get     ('/login-dashboard'           ,'C_Akses@login')->name('login-dashboard');
Route::post     ('/ubah-password'           ,'C_Akses@ubahPassword')->name('ubah-password');

Route::get     ('/login-logout'              ,'C_Akses@logout')->name('login-logout');

Route::get     ('/dashboard-panel'           ,'C_Dashboard@index')->name('dashboard_panel');

Route::get     ('/regist-perusahaan'                ,'C_Akses@regist_perusahaan')->name('regist_perusahaan');
Route::post    ('/regist-perusahaan'                ,'C_Akses@registPerusahaanCreate')->name('regist-perusahaan');
Route::post    ('/create-data-perusahaan'                ,'perusahaan\C_Perusahaan@createDataPerusahaan')->name('create-data-perusahaan');



//======================================================================
//======================= Routs Rekrutment User ========================
//======================================================================

Route::get     ('/login-user'                ,'C_AksesUser@login_user')->name('login-user');
Route::post    ('/login-user'                ,'C_AksesUser@loginQuery')->name('login_rekrutmen');
Route::post    ('/regist-rekrutmen'                ,'C_AksesUser@regist_rekrutmen')->name('regist_rekrutmen');

Route::get     ('/regist-user'                ,'C_AksesUser@regist_user')->name('regist_user');

Route::get     ('/rekrutmen'                 ,'user_page\C_Rekrutmen@index') ->name('rekrutmen');
Route::post    ('/rekrutmen/data-diri'                 ,'user_page\C_DataDiri@insertData')   ->name('data_diri');

Route::post    ('/rekrutmen/data-orang-tua'                 ,'user_page\C_Data_Orang_Tua@insertData')   ->name('data_orang_tua');

Route::post    ('/rekrutmen/pendidikan-formal'                 ,'user_page\C_Pendidikan@insertPendidikanFormal')   ->name('pendidikan-formal_');

Route::get    ('/rekrutmen/aply-pekerjaan/{id}/{id_perusahaan}'                 ,'user_page\C_Aply_Pekerjaan@aplyPekerjaan')   ->name('aply-pekerjaan');


Route::post    ('/rekrutmen/pendidikan-non-formal'                 ,'user_page\C_Pendidikan@insertPendidikanNonFormal')   ->name('pendidikan-non-formal');
Route::post    ('/rekrutmen/upload-file-pribadi'                 ,'user_page\C_Pendidikan@insertUploadFilePribadi')   ->name('upload-file-pribadi');

Route::get     ('/rekrutmen/cv'         ,'user_page\C_CV@index');
Route::get     ('/cv/user'         ,'user_page\C_CV@cv')->name('cv');

Route::get     ('/login-logout-user'         ,'C_AksesUser@logout');

Route::post    ('rekrutmen/reset-login'           ,'C_AksesUser@resetLogin')   ->name('reset-login-user');

Route::get     ('/cv/exel'         ,'user_page\C_CV@cvExel')->name('cv-pdf');




//======================================================================
//======================= Routs Master Karyawan ========================
//======================================================================

//=========================== Routs Lowongan ===========================

Route::get    ('/dashboard-panel/lowongan-pekerjaan'                 ,'admin_page\C_Lowongan_pekerjaan@LowonganPekerjaan')   ->name('lowongan-pekerjaan');
Route::post    ('/dashboard-panel/create-lowongan'                 ,'admin_page\C_Lowongan_pekerjaan@createLowongan')   ->name('create-lowongan');

Route::get    ('/dashboard-panel/hapus-lowongan'                 ,'admin_page\C_Lowongan_pekerjaan@hapusLowongan')   ->name('hapus-lowongan');
Route::get    ('/dashboard-panel/hapus-user'                 ,'admin_page\C_Lowongan_pekerjaan@hapusUser')   ->name('hapus-user');

Route::get     ('/dashboard-panel/detail-user'         ,'admin_page\C_Lowongan_pekerjaan@cv')->name('detail-pelamar');

//======================= Routs Assets Karyawan ========================

Route::post    ('/dashboard-panel/create-jabatan'                 ,'admin_page\C_Jabatan@insertJabatan')   ->name('create_jabatan');
Route::post    ('/dashboard-panel/edit-jabatan'                 ,'admin_page\C_Jabatan@editJabatan')   ->name('edit-jabatan');
Route::post    ('/dashboard-panel/create-master-jabatan'                 ,'admin_page\C_Jabatan_Gaji@insertJabatanGaji')   ->name('create_master_jabatan');
Route::get    ('/dashboard-panel/hapus-jabatan'                 ,'admin_page\C_Jabatan_Gaji@hapus_jabatan')   ->name('hapus-jabatan');
Route::get    ('/dashboard-panel/hapus-per-jabatan'                 ,'admin_page\C_Jabatan_Gaji@hapus_per_jabatan')   ->name('hapus_per_jabatan');
// Route::get    ('/dashboard-panel/history-jabatan-gaji/{key}'                        ,'admin_page\C_Jabatan_Gaji@historyJabatan')   ->name('history-jabatan-gaji');
// Route::get    ('/dashboard-panel/jabatan-karyawan-/{key}'                        ,'admin_page\C_Jabatan_Gaji@historyJabatan')   ->name('jabatan-karyawan');

Route::post    ('/dashboard-panel/gaji'                                 ,'admin_page\C_Gaji@insertGaji')   ->name('create_gaji');
Route::post    ('/dashboard-panel/edit-gaji'                            ,'admin_page\C_Gaji@editGaji')   ->name('edit-gaji');
Route::get    ('/dashboard-panel/gaji/{id}'                             ,'admin_page\C_Gaji@deleteJabatanGaji')   ->name('hapus-gaji');

Route::post    ('/dashboard-panel/create-karyawan-aktif'                ,'admin_page\C_Karyawan@createKaryawanAktif')   ->name('create-karyawan-aktif');
Route::post    ('/dashboard-panel/create-karyawan-aktif-exel'           ,'admin_page\C_Karyawan@createKaryawanAktifExel')   ->name('create-karyawan-aktif-exel');

Route::post     ('/dashboard-panel/create-kontrak'                       ,'admin_page\C_Kontrak@createKontrak')   ->name('create-kontrak');
Route::post      ('/dashboard-panel/kontrak-print/'                        ,'admin_page\C_Kontrak@printKontrak')   ->name('kontrak_print');
Route::post      ('/dashboard-panel/edit-kontrak/'                        ,'admin_page\C_Kontrak@editKontrak')   ->name('edit-kontrak');

Route::get      ('/dashboard-panel/kontrak/{key}'                        ,'admin_page\C_Kontrak@kontrak')   ->name('kontrak');

Route::get    ('/dashboard-panel/karyawan/{key}'                        ,'admin_page\C_Karyawan@karyawanAktif')   ->name('karyawan-aktif');
Route::get    ('/dashboard-panel/karyawan'                        ,'admin_page\C_Karyawan@karyawan')   ->name('karyawan');


Route::get    ('/dashboard-panel/jabatan-karyawan/{key}'                        ,'admin_page\C_Jabatan_Gaji@jabatanKaryawan')   ->name('jabatan');


Route::post    ('/create-data-karyawan'                ,'admin_page\C_Karyawan@createDataKaryawan')->name('create-data-karyawan');

Route::get    ('/dashboard-panel/penempatan-karyawan/{key}'                        ,'admin_page\C_Penempatan@penempatanKaryawan')   ->name('penempatan');
Route::post    ('/dashboard-panel/create-penempatan'                 ,'admin_page\C_Penempatan@createPenempatan')   ->name('create_penempatan');


// Route::post    ('/dashboard-panel/create-master-jabatan'                 ,'admin_page\C_Jabatan_Gaji@insertJabatanGaji')   ->name('create_master_jabatan');
Route::post    ('/dashboard-panel/create-master-penempatan'                 ,'admin_page\C_Penempatan@insertRiwPenempatan')   ->name('create_master_penempatan');
Route::get    ('/dashboard-panel/hapus-penempatan'                          ,'admin_page\C_Penempatan@hapusPenempatan')   ->name('hapus-penempatan');

Route::get    ('/dashboard-panel/hapus-per-penempatan'                 ,'admin_page\C_Penempatan@hapusPerPenempatan')   ->name('hapus_per_penempatan');

// ========================== Routs absensi diri ================================
Route::get    ('/dashboard-panel/absensi-diri/{key}'                        ,'karyawan\C_Absensi@absensiData')   ->name('absensi-diri');

// ========================== Routs absensi diri ================================
Route::get    ('/dashboard-panel/kontrak-diri/{key}'                        ,'karyawan\C_Kontrak@kontrak')   ->name('kontrak-diri');

// ========================== Routs Kehadiran ================================
Route::get    ('/dashboard-panel/kehadiran-diri/{key}'                        ,'karyawan\C_Kehadiran@index')   ->name('kehadiran-absensi-diri');

// ========================== Routs absensi ================================
Route::get    ('/dashboard-panel/absensi/{key}'                        ,'admin_page\C_Absensi@index')   ->name('absensi');
Route::post    ('/dashboard-panel/create-absensi-exel'           ,'admin_page\C_Absensi@createExelAbsensi')   ->name('create-absensi-exel');

// ========================== Routs Laporan ================================
Route::get    ('/dashboard-panel/gaji-bulanan/{key}'                        ,'admin_page\C_Lapo_Gaji@index')   ->name('gaji-bulanan');

// ========================== Routs Kehadiran ================================
Route::get    ('/dashboard-panel/kehadiran/{key}'                        ,'admin_page\C_Kehadiran@index')   ->name('kehadiran-absensi');
Route::post    ('/dashboard-panel/create-absensi-exel'           ,'admin_page\C_Absensi@createExelAbsensi')   ->name('create-absensi-exel');

// ======================= Routs Insentif KPI ==============================

Route::get    ('/dashboard-panel/Insentif/{key}'                        ,'admin_page\C_Insentif_KPI@index')   ->name('Insentif');
Route::post    ('/dashboard-panel/create-Insentif-exel'           ,'admin_page\C_Insentif_KPI@createExelKPI')   ->name('create-Insentif-exel');
Route::get    ('/dashboard-panel/Insentif-kpi/{key}'                        ,'admin_page\C_Insentif_KPI@index')   ->name('Insentif-kpi');
Route::post    ('/dashboard-panel/create-Dana-Insentif-KPI'           ,'admin_page\C_Insentif_KPI@createDanaKPI')   ->name('create_dana_insentif_kpi');
Route::post    ('/dashboard-panel/create-orang-kpi'           ,'admin_page\C_Insentif_KPI@createOrangKpi')   ->name('create_orang_kpi');

// ======================= Routs Insentif kurir ==============================

Route::get    ('/dashboard-panel/Insentif-kurir/{key}'                        ,'admin_page\C_Insentif_Kurir@index')   ->name('Insentif-kurir');
Route::post    ('/dashboard-panel/create-Insentif-exel-kurir'           ,'admin_page\C_Insentif_Kurir@createExelKurir')   ->name('create-Insentif-exel-kurir');

// ======================= Routs tunjangan ==============================

Route::get    ('/dashboard-panel/tunjangan'                          ,'admin_page\C_Tunjangan@tunjangan')   ->name('tunjangan');
Route::post    ('/dashboard-panel/create-tunjangan'                          ,'admin_page\C_Tunjangan@createTunjangan')   ->name('create-tunjangan');
Route::get    ('/dashboard-panel/hapus-tunjangan'                          ,'admin_page\C_Tunjangan@hapusTunjangan')   ->name('hapus-tunjangan');
Route::get    ('/dashboard-panel/lihat-tunjangan'                          ,'admin_page\C_Tunjangan@tunjangan')   ->name('lihat-tunjangan');
Route::get    ('/dashboard-panel/hapus-per-tunjangan'                 ,'admin_page\C_Tunjangan@hapus_per_jabatan')   ->name('hapus_per_tunjangan');
// ======================= Routs Karyawan ==============================

Route::get    ('/dashboard-panel/status-kepegawaian'                          ,'admin_page\C_Master_Karyawan@statusKepegawaian')   ->name('status_kepegawaian');

Route::post    ('/dashboard-panel/status-akun'                          ,'admin_page\C_Master_Karyawan@statusAkun');
Route::get    ('/dashboard-panel/hapus-akun'                 ,'user_page\C_User@hapusAkun')   ->name('hapus-akun');

Route::post    ('/dashboard-panel/create-karyawan-recruitment'          ,'admin_page\C_Master_Karyawan@createKaryawanRecruitment')   ->name('create-karyawan-recruitment');

Route::post    ('/dashboard-panel/detail-karyawan'          ,'admin_page\C_Master_Karyawan@detailKaryawan');


Route::post    ('/dashboard-panel/data-orang-tua'                 ,'admin_page\C_Data_Orang_Tua@insertData')   ->name('data_orang_tua_karyawan');
Route::get    ('/dashboard-panel/data-orang-tua/hapus'                 ,'admin_page\C_Data_Orang_Tua@hapusOrangTua')   ->name('hapus_orang_tua');

Route::post    ('/dashboard-panel/pendidikan-formal'                 ,'admin_page\C_Pendidikan@insertPendidikanFormal')   ->name('pendidikan-formal');
Route::get    ('/dashboard-panel/riwayat-pendidikan-formal/hapus'                 ,'admin_page\C_Pendidikan@hapusRiwayat')   ->name('hapus_pendidikan_formal');

Route::post    ('/dashboard-panel/upload-file-pribadi'                 ,'admin_page\C_File_Pribadi@insertUploadFilePribadi')   ->name('upload-file-pribadi-karyawan');
Route::get    ('/dashboard-panel/upload-file-pribadi/hapus'                 ,'admin_page\C_File_Pribadi@hapusRiwayat')   ->name('hapus_file_pribadi');

Route::post    ('/dashboard-panel/pendidikan-non-formal'                 ,'admin_page\C_Pendidikan@insertPendidikanNonFormal')   ->name('pendidikan-non-formal-karyawan');
Route::get    ('/dashboard-panel/pendidikan-non-formal/hapus'                 ,'admin_page\C_Pendidikan@hapusNonFormal')   ->name('hapus_upload_file_pribadi');

Route::get    ('dashboard-panel/kehadiran'                ,'admin_page\C_Kehadiran@kehadiran')->name('kehadiran');

// ======================= Routs pesan ==============================

Route::post    ('/dashboard-panel/create-pesan'                         ,'user_page\C_Aply_Pekerjaan@createPesan')   ->name('create-pesan');
Route::get    ('/rekrutmen/create-status'                          ,'user_page\C_Aply_Pekerjaan@createStatus')   ->name('create-status');

Route::get    ('/lihat-file'                          ,'user_page\C_Aply_Pekerjaan@createStatus')   ->name('lihat-file');

// ======================= Routs it admin ==============================

Route::get    ('/akses-it-admin'                                        ,'it_page\C_Akses_ItAdmin@aksesITAdmin');
Route::post    ('/akses-it-admin/create-akun-akses'                     ,'it_page\C_Akses_ItAdmin@createAkunAkses')->name('create-akun-akses');
Route::post    ('/akses-it-admin/create-akun-akses-akun'                ,'it_page\C_Akses_ItAdmin@createAkunAksesAkun')->name('create-akun-akses-akun');


Route::post    ('/dashboard-panel/status-perusahaan'                          ,'perusahaan\C_Perusahaan@statusPerusahaan');

Route::get    ('/dashboard-panel/management-perusahaan'                          ,'perusahaan\C_Perusahaan@perusahaan')->name('management-perusahaan');


// ======================= Routs it dokumentasi ==============================

Route::get    ('dashboard-panel/dokumentasi'                                        ,'admin_page\C_Dokumentasi@index')->name('dokumentasi');
Route::get      ('dashboard-panel/dokumentasi/{key}'                        ,'admin_page\C_Dokumentasi@downloadDokumentasi')   ->name('download-dokumentasi');
Route::get      ('dashboard-panel/download-laporan-gaji/{key}'                        ,'admin_page\C_Dokumentasi@downloadDokumentasiLaporanGaji')   ->name('download-laporan-gaji');


// Route::get('/getmacshellexec',function()
//     {
//         $shellexec = shell_exec('getmac'); 
//         dd($shellexec);
//     }
// );          

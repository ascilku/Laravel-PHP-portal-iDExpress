<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class M_Akun extends Model
{

    // ini tabel akun
    protected $table = "akun";

    protected $fillable = ['id_akses', 'id_tema', 'id_perusahaan', 'nik', 'password',  'show_pass',  'email',  'no_hp',  'token',  'status',  'created_at',  'updated_at', ];

    public function akses()
    {
        return $this->belongsTo('App\Models\M_Akses', 'id_akses');
    }

    public function data_karyawan()
    { 
        return $this->hasOne('App\Models\admin\M_Data_Karyawan', 'id_akun')->orderBy('id', 'desc');
    }

    public function tunjangan()
    { 
        return $this->hasOne('App\Models\admin\M_Tunjangan', 'id_akun')->orderBy('id', 'desc');
    }

    public function riw_tunjangan()
    { 
        return $this->hasOne('App\Models\admin\M_Riw_Tunjangan', 'id_akun')->orderBy('id', 'desc');
    }

    public function perusahaan()
    {
        return $this->belongsTo('App\Models\M_Perusahaan', 'id_perusahaan');
    }

    public function jabatan_gaji()
    { 
        return $this->hasOne('App\Models\admin\M_Jabatan_Gaji', 'id_akun')->orderBy('created_at', 'desc');
    }

    public function riw_jabatan_gaji()
    { 
        return $this->hasOne('App\Models\admin\M_Riw_Jabatan_Gaji', 'id_akun')->orderBy('created_at', 'desc');
    }

    public function data_diri()
    {
        return $this->hasOne('App\Models\rekrutmen\M_DataDiri', 'id_akun');
    }

    public function orang_kpi()
    {
        return $this->hasOne('App\Models\admin\M_Orang_KPI', 'id_akun');
    }

    public function absensi()
    {
        return $this->hasOne('App\Models\admin\M_Absensi', 'id_akun');
    }

    public function kurir()
    {
        return $this->hasOne('App\Models\admin\M_I_Kurir', 'id_akun');
    }

    public function data_orang_tua()
    { 
        return $this->hasMany('App\Models\rekrutmen\M_Data_Orang_Tua', 'id_akun');
    }

    public function pendidikan_formal()
    { 
        return $this->hasMany('App\Models\rekrutmen\M_Pendidikan_Formal', 'id_akun');
    }

    public function pendidikan_non_formal()
    { 
        return $this->hasMany('App\Models\rekrutmen\M_Pendidikan_Non_Formal', 'id_akun');
    }

    public function file_pribadi()
    { 
        return $this->hasMany('App\Models\rekrutmen\M_Uplod_File', 'id_akun');
    }

    public function aply_lowongan()
    { 
        return $this->hasMany('App\Models\rekrutmen\M_Aply_Lowongan', 'id_akun')->orderBy('id', 'DESC');
    }

    public function aply_lowongan_()
    { 
        return $this->hasOne('App\Models\rekrutmen\M_Aply_Lowongan', 'id_akun')->orderBy('id', 'DESC');
    }

    public function riw_penempatan_wilayah()
    { 
        return $this->hasOne('App\Models\admin\M_Riw_Penempatan_Wilayah', 'id_akun')->orderBy('id', 'DESC');
    }

    public function penempatan_wilayah()
    { 
        return $this->hasOne('App\Models\admin\M_Penempatan_Wilayah', 'id_akun')->orderBy('id', 'DESC');
    }

    public function riw_jabatan()
    { 
        return $this->hasOne('App\Models\admin\M_Riw_Jabatan', 'id_akun')->orderBy('created_at', 'desc');
    }

    // untuk admin

    public function karpkwtyawan()
    { 
        return $this->hasOne('App\Models\admin\M_Karyawan', 'id_akun');
    }

    public function kontrak()
    { 
        return $this->hasOne('App\Models\admin\M_Kontrak', 'id_akun')->orderBy('id', 'desc');
    }

    public function kontrak_semua()
    { 
        return $this->hasMany('App\Models\admin\M_Kontrak', 'id_akun');
    }

    public function kpi()
    { 
        return $this->hasMany('App\Models\admin\M_I_KPI', 'id_akun');
    }
    
}

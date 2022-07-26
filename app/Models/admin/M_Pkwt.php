<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class M_Pkwt extends Model
{
    //
    protected $table = "pkwt";

    public function kontrak()
    { 
        return $this->belongsTo('App\Models\admin\M_Kontrak', 'id_kontrak')->orderBy('id', 'desc');
    }

    public function tunjangan_pkwt()
    {
        return $this->belongsTo('App\Models\admin\M_Tunjangan', 'id_tunjangan');
    }

    public function rwy_tunjangan_pkwt()
    {
        return $this->belongsTo('App\Models\admin\M_Riw_Tunjangan', 'id_tunjangan');
    }

    public function jabatan_gaji_pkwt()
    {
        return $this->belongsTo('App\Models\admin\M_Jabatan_Gaji', 'id_jabatan_gaji');
    }

    public function riw_jabatan_gaji()
    { 
        return $this->belongsTo('App\Models\admin\M_Riw_Jabatan_Gaji', 'id_jabatan_gaji');
        // return $this->hasOne('App\Models\admin\M_Riw_Jabatan_Gaji', 'id_akun')->orderBy('created_at', 'desc');
    }

    public function riw_penempatan_wilayah_pkwt()
    {
        return $this->belongsTo('App\Models\admin\M_Riw_Penempatan_Wilayah', 'id_riw_penempatan_wilayah');
    }

    public function penempatan_wilayah_riw()
    {
        return $this->belongsTo('App\Models\admin\M_Penempatan_Wilayah', 'id_riw_penempatan_wilayah');
    }

    // public function jabatan_gaji_pkwt()
    // {
    //     return $this->belongsTo('App\Models\admin\M_Jabatan_Gaji', 'id_jabatan_gaji');
    // }

    
}

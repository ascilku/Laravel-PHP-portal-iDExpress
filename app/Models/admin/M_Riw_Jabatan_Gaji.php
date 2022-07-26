<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class M_Riw_Jabatan_Gaji extends Model
{
    //
    protected $table = "rwy_jabatan_gaji";

    public function jabatan()
    { 
        return $this->belongsTo('App\Models\admin\M_Jabatan', 'id_jabatan');
    }

    public function pkwt()
    { 
        return $this->hasOne('App\Models\admin\M_Pkwt', 'id_jabatan_gaji')->orderBy('id', 'desc');
    }

    public function gaji()
    { 
        return $this->belongsTo('App\Models\admin\M_Gaji', 'id_gaji');
    }

    public function riw_jabatan()
    { 
        return $this->hasOne('App\Models\admin\M_Riw_Jabatan', 'id_jabatan_gaji');
    }

    public function akun()
    {
        return $this->belongsTo('App\Models\M_Akun', 'id_akun');
    }
}
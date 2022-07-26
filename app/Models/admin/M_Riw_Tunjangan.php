<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class M_Riw_Tunjangan extends Model
{
    //
    protected $table = "rwy_tunjangan";

    public function akun()
    {
        return $this->belongsTo('App\Models\M_Akun', 'id_akun');
    }

    public function pkwt()
    { 
        return $this->hasOne('App\Models\admin\M_Pkwt', 'id_tunjangan')->orderBy('id', 'desc');
    }
}

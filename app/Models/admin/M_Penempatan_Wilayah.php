<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class M_Penempatan_Wilayah extends Model
{
    //
    protected $table = "penempatan_wilayah";

    public function akun()
    {
        return $this->belongsTo('App\Models\M_Akun', 'id_akun');
    }

    public function penempatan()
    {
        return $this->belongsTo('App\Models\admin\M_Penempatan', 'id_penempatan')->orderBy('id', 'desc');
    }

    public function pkwt()
    { 
        return $this->hasOne('App\Models\admin\M_Pkwt', 'id_riw_penempatan_wilayah')->orderBy('id', 'desc');
    }

}

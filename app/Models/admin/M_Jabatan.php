<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class M_Jabatan extends Model
{
    //
    protected $table = "jabatan";

    public function riw_jabatan()
    { 
        return $this->hasMany('App\Models\admin\M_Riw_Jabatan', 'id_jabatan');
    }

    public function jabatan_gaji()
    { 
        return $this->hasOne('App\Models\admin\M_Jabatan_Gaji', 'id_jabatan');
    }

}

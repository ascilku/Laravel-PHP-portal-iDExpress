<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class M_Gaji extends Model
{
    //
    protected $table = "gaji";
    protected $fillable = ['nominal_gaji', 'status'];

    public function riw_jabatan()
    { 
        return $this->hasMany('App\Models\admin\M_Riw_Jabatan', 'id_gaji');
    }

    public function jabatan_gaji()
    { 
        return $this->hasMany('App\Models\admin\M_Jabatan_Gaji', 'id_gaji');
    }
    
}

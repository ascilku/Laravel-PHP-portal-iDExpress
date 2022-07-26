<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class M_Data_Karyawan extends Model
{
    //
    protected $table = "data_karyawan";

    public function akun()
    {
        return $this->belongsTo('App\Models\M_Akun', 'id_akun');
    }
    
}

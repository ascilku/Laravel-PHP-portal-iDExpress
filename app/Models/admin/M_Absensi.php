<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class M_Absensi extends Model
{
    //
    protected $table = "absensi";

    public function akun()
    {
        return $this->belongsTo('App\Models\M_Akun', 'id_akun');
    }
}

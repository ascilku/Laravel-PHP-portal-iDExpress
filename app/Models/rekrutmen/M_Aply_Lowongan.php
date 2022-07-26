<?php

namespace App\Models\rekrutmen;

use Illuminate\Database\Eloquent\Model;

class M_Aply_Lowongan extends Model
{
    //
    protected $table = "aply_lowongan";

    public function akun()
    {
        return $this->belongsTo('App\Models\M_Akun', 'id_akun');
    }

    public function lowongan_kerja()
    { 
        return $this->belongsTo('App\Models\rekrutmen\M_Lowongan_Kerja', 'id_lowongan_kerja');
    }
}

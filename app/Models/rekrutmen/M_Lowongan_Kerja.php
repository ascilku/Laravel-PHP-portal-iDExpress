<?php

namespace App\Models\rekrutmen;

use Illuminate\Database\Eloquent\Model;

class M_Lowongan_Kerja extends Model
{
    //
    protected $table = "lowongan_kerja";

    public function lowongan_kerja()
    { 
        return $this->hasMany('App\Models\rekrutmen\M_Aply_Lowongan', 'id_lowongan_kerja');
    }

    public function perusahaan()
    {
        return $this->belongsTo('App\Models\M_Perusahaan', 'id_perusahaan');
    }

}

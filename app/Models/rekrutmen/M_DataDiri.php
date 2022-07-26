<?php

namespace App\Models\rekrutmen;

use Illuminate\Database\Eloquent\Model;

class M_DataDiri extends Model
{
    //
    protected $table = "data_diri";

    public function akun()
    {
        return $this->belongsTo('App\Models\M_Akun', 'id_akun');
    }

}

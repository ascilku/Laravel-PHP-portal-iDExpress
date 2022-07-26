<?php

namespace App\Models\rekrutmen;

use Illuminate\Database\Eloquent\Model;

class M_Uplod_File extends Model
{
    //
    protected $table = "dokumen";

    public function akun()
    {
        return $this->belongsTo('App\Models\M_Akun', 'id_akun');
    }
}

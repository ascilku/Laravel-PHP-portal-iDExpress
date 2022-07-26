<?php

namespace App\Models\rekrutmen;

use Illuminate\Database\Eloquent\Model;


class M_Data_Orang_Tua extends Model
{
    //
    protected $table = "orang_tua";

    public function akun()
    {
        return $this->belongsTo('App\Models\M_Akun', 'id_akun');
    }

}

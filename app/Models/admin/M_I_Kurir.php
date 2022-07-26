<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class M_I_Kurir extends Model
{
    //
    protected $table = "insentif_kurir";

    public function akun()
    {
        return $this->belongsTo('App\Models\M_Akun', 'id_akun');
    }
}

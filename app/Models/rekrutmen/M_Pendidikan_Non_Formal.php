<?php

namespace App\Models\rekrutmen;

use Illuminate\Database\Eloquent\Model;

class M_Pendidikan_Non_Formal extends Model
{
    //
    protected $table = "pendidikan_non_formal";

    public function akun()
    {
        return $this->belongsTo('App\Models\M_Akun', 'id_akun');
    }
}

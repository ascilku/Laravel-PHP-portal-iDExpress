<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class M_Kontrak extends Model
{
    //
    protected $table = "kontrak";

    public function akun()
    {
        return $this->belongsTo('App\Models\M_Akun', 'id_akun');
    }

    public function pkwt()
    { 
        return $this->hasOne('App\Models\admin\M_Pkwt', 'id_kontrak')->orderBy('id', 'desc');
    }

}

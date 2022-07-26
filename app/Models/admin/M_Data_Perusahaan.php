<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class M_Data_Perusahaan extends Model
{
    //
    protected $table = "data_perusahaan";

    public function perusahaan()
    {
        return $this->belongsTo('App\Models\M_Perusahaan', 'id_perusahaan');
    }
}

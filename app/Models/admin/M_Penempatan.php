<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class M_Penempatan extends Model
{
    //
    protected $table = "penempatan";

    public function riw_penempatan()
    { 
        return $this->hasOne('App\Models\admin\M_Riw_Penempatan_Wilayah', 'id_penempatan')->orderBy('id', 'desc');
    }

}

<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class M_I_KPI extends Model
{
    //
    protected $table = "insentif_kpi";

    public function akun()
    {
        return $this->belongsTo('App\Models\M_Akun', 'id_akun');
    }

    public function orang_kpi()
    {
        return $this->belongsTo('App\Models\admin\M_Orang_KPI', 'id_orang_kpi');
    }
    
}

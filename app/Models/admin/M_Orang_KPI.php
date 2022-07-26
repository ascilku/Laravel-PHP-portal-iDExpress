<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class M_Orang_KPI extends Model
{
    //
    protected $table = "orang_kpi";

    public function akun()
    {
        return $this->belongsTo('App\Models\M_Akun', 'id_akun');
    }

    public function rpkpi()
    {
        return $this->belongsTo('App\Models\admin\M_RP_KPI', 'id_rp_kpi');
    }

    public function kpi_()
    { 
        return $this->hasOne('App\Models\admin\M_I_KPI', 'id_orang_kpi');
    }

}

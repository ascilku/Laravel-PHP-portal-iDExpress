<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class M_RP_KPI extends Model
{
    protected $table = "rp_kpi";

    public function orang_kpi()
    {
        return $this->hasOne('App\Models\rekrutmen\M_Orang_KPI', 'id_rp_kpi');
    }
}

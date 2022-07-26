<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Akses extends Model
{
    // ini tabel akses
    protected $table = "akses";

    public function akun()
    {
        return $this->hasOne('App\Models\M_Akun');
    }

    public function perusahaan()
    {
        return $this->hasOne('App\Models\M_Perusahaans');
    }
}

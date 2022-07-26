<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Perusahaan extends Model
{
    //
    protected $table = "perusahaan";

    protected $fillable = ['status'];
   
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'token',
    // ];

    public function akses()
    {
        return $this->belongsTo('App\Models\M_Akses', 'id_akses');
    }

    public function data_perusahaan()
    {
        return $this->hasOne('App\Models\admin\M_Data_Perusahaan', 'id_perusahaan');
    }

    public function akun()
    {
        return $this->hasOne('App\Models\M_Akun');
    }

    public function lowongan_kerja()
    {
        return $this->hasOne('App\Models\rekrutmen\M_Lowongan_Kerja', 'id_perusahaan');
    }

    

}

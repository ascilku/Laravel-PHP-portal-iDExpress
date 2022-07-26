<?php

use Illuminate\Database\Seeder;
use App\Models\M_Akses;
use App\Models\M_Perusahaan;

class Makassar_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ini akun perusahaan makassar
        $Seeder_AkunIT_Akses                = new M_Akses();
            $Seeder_AkunIT_Akses->akses     = 'Admin Super';
        $Seeder_AkunIT_Akses->save();

        $Seeder_AkunIT_Akun                     = new M_Perusahaan();
            $Seeder_AkunIT_Akun->id_akses       = $Seeder_AkunIT_Akses->id;
            $Seeder_AkunIT_Akun->nama            = 'Makassar';
            $Seeder_AkunIT_Akun->nik            = '00000';
            $Seeder_AkunIT_Akun->password       = Hash::make('00000');
            $Seeder_AkunIT_Akun->show_pass      = '00000';
            $Seeder_AkunIT_Akun->email          = '00000@gmail.com';
            $Seeder_AkunIT_Akun->no_hp          = '00000';
            $Seeder_AkunIT_Akun->token          = '00000';
        $Seeder_AkunIT_Akun->save();
    }
}

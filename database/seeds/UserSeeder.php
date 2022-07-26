<?php

use Illuminate\Database\Seeder;

use App\Models\M_Akses;
use App\Models\M_Akun;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Seeder_AkunIT_Akses                = new M_Akses();
            $Seeder_AkunIT_Akses->akses     = 'User';
        $Seeder_AkunIT_Akses->save();

        $Seeder_AkunIT_Akun                     = new M_Akun();
            $Seeder_AkunIT_Akun->id_akses       = $Seeder_AkunIT_Akses->id;
            $Seeder_AkunIT_Akun->nik            = '88888';
            $Seeder_AkunIT_Akun->password       = Hash::make('88888');
            $Seeder_AkunIT_Akun->show_pass      = '88888';
            $Seeder_AkunIT_Akun->email          = '88888@gmail.com';
            $Seeder_AkunIT_Akun->no_hp          = '88888';
            $Seeder_AkunIT_Akun->status         = 'aktif';
        $Seeder_AkunIT_Akun->save();
    }
}

<?php

use Illuminate\Database\Seeder;

use App\Models\M_Akses;
use App\Models\M_Akun;

class ITSeeder extends Seeder
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
            $Seeder_AkunIT_Akses->akses     = 'IT Admin';
        $Seeder_AkunIT_Akses->save();

        $Seeder_AkunIT_Akun                     = new M_Akun();
            $Seeder_AkunIT_Akun->id_akses       = $Seeder_AkunIT_Akses->id;
            $Seeder_AkunIT_Akun->nik            = '00000';
            $Seeder_AkunIT_Akun->password       = Hash::make('00000');
            $Seeder_AkunIT_Akun->show_pass      = '00000';
            $Seeder_AkunIT_Akun->email          = '00000@gmail.com';
            $Seeder_AkunIT_Akun->no_hp          = '00000';
            $Seeder_AkunIT_Akun->status         = 'aktif';
        $Seeder_AkunIT_Akun->save();

        // $Seeder_AkunIT_Akun                     = new M_Akun();
        //     $Seeder_AkunIT_Akun->id_akses       = $Seeder_AkunIT_Akses->id;
        //     $Seeder_AkunIT_Akun->nik            = '2124000043';
        //     $Seeder_AkunIT_Akun->password       = Hash::make('ITAdmin24');
        //     $Seeder_AkunIT_Akun->show_pass      = 'ITAdmin24';
        //     $Seeder_AkunIT_Akun->email          = 'kwawank74@gmail.com';
        //     $Seeder_AkunIT_Akun->no_hp          = '895336510174';
        //     $Seeder_AkunIT_Akun->status         = 'aktif';
        // $Seeder_AkunIT_Akun->save();

        // $Seeder_AkunIT_Akun                     = new M_Akun();
        //     $Seeder_AkunIT_Akun->id_akses       = $Seeder_AkunIT_Akses->id;
        //     $Seeder_AkunIT_Akun->nik            = '2024000022';
        //     $Seeder_AkunIT_Akun->password       = Hash::make('ITAdmin24');
        //     $Seeder_AkunIT_Akun->show_pass      = 'ITAdmin24';
        //     $Seeder_AkunIT_Akun->email          = 'nurkaidir@gmail.com';
        //     $Seeder_AkunIT_Akun->no_hp          = '89677635194';
        //     $Seeder_AkunIT_Akun->status         = 'aktif';
        // $Seeder_AkunIT_Akun->save();
    }
}

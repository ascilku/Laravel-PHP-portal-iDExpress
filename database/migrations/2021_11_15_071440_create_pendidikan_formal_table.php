<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikanFormalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan_formal', function (Blueprint $table) {
            $table->id();

            $table->bigInteger("id_akun")->unsigned();
            $table->foreign("id_akun")
                  ->references('id')
                  ->on('akun')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->enum("pendidikan", 
                        [
                            'MI',
                            'MTS',
                            'SD',
                            'SMP',
                            'SMA',
                            'SMK',
                            'D1',
                            'D2',
                            'D3',
                            'D4',
                            'S1',
                            'S2',
                            'S3'
                        ]
            );

            $table->string('gelar');
            $table->string('nama_univ');
            $table->string('akredi_univ');
            $table->string('jurusan');
            $table->string('akredi_jur');
            $table->date('mulai_studi');
            $table->date('akhir_studi');
            $table->string('nilai');
            $table->string('no_ijazah');
            $table->string('ijazah');
            $table->string('transkrip');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendidikan_formal');
    }
}

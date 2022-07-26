<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontrakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontrak', function (Blueprint $table) {
            $table->id();

            $table->bigInteger("id_akun")->unsigned();
            $table->foreign("id_akun")
                  ->references('id')
                  ->on('akun')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->date('tanggal_awal');  
            $table->date('tanggal_akhir');  
            $table->string('ttd')->nullable();

            $table->enum("jenis", 
                                    [
                                     'PKWT I',
                                     'PKWT II',
                                     'PKWT III',
                                     'PKKF'
                                    ]
                        );

            $table->string('no_kontrak');
            $table->string('bulan');
            $table->string('tahun');
            
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
        Schema::dropIfExists('kontrak');
    }
}

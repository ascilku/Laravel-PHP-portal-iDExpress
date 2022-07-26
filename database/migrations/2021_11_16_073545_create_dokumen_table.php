<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumen', function (Blueprint $table) {
            $table->id();

            $table->bigInteger("id_akun")->unsigned();
            $table->foreign("id_akun")
                  ->references('id')
                  ->on('akun')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->string('nama_file');
            $table->string('status_pemilikan');
            $table->enum('jenis', 
                                    ['SKCK',
                                     'KTP',
                                     'KARTU KELUARGA',
                                     'SIM',
                                     'STNK',
                                     'FOTO MOTOR',
                                     'BPJS KESEHATAN',
                                     'PBJS KETENAGAKERJAAN'
                                    ]
                        );
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
        Schema::dropIfExists('dokumen');
    }
}

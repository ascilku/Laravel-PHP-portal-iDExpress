<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikanNonFormalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan_non_formal', function (Blueprint $table) {
            $table->id();

            $table->bigInteger("id_akun")->unsigned();
            $table->foreign("id_akun")
                  ->references('id')
                  ->on('akun')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->string('pelaksana')->nullable();
            $table->string('nomor_pelaksana')->nullable();
            $table->string('nama_sertifikat')->nullable();
            $table->string('kode_sertifikat')->nullable();
            $table->string('nama_pemimpin')->nullable();
            $table->date('tahun_terbit');
            $table->date('tahun_akhir_terbit');
            $table->string('sertifikat')->nullable();

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
        Schema::dropIfExists('pendidikan_non_formal');
    }
}

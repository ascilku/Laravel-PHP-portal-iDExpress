<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrangTuaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orang_tua', function (Blueprint $table) {
            $table->id();

            $table->bigInteger("id_akun")->unsigned();
            $table->foreign("id_akun")
                  ->references('id')
                  ->on('akun')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

                  $table->string('hubungan');
                  $table->string('nama_lengkap');
                  $table->string('tempat_lahir');
                  $table->date('tanggal_lahir');
                  $table->string('agama');

                  $table->string('alamat_ktp');
                  $table->string('provinsi_ktp');
                  $table->string('kota_ktp');
                  $table->string('kabupaten_ktp');

                  $table->string('kecamatan_ktp');
                  $table->string('kelurahan_ktp');
                  $table->string('no_hp');
                //   ->nullable();
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
        Schema::dropIfExists('orang_tua');
    }
}

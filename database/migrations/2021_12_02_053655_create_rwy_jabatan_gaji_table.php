<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRwyJabatanGajiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rwy_jabatan_gaji', function (Blueprint $table) {
            $table->id();

            $table->bigInteger("id_akun")->unsigned();
            $table->foreign("id_akun")
                  ->references('id')
                  ->on('akun')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->bigInteger("id_jabatan")->unsigned();
            $table->foreign("id_jabatan")
                  ->references('id')
                  ->on('jabatan')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->bigInteger("id_gaji")->unsigned()->nullable();
            $table->foreign("id_gaji")
                  ->references('id')
                  ->on('gaji')
                  ->onDelete('SET NULL')
                  ->onUpdate('CASCADE');

            $table->date('tanggal_jabatan');    
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
        Schema::dropIfExists('rwy_jabatan_gaji');
    }
}

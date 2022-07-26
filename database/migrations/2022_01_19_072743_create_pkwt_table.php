<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePkwtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkwt', function (Blueprint $table) {
            $table->id();

            $table->bigInteger("id_kontrak")->unsigned();
            $table->foreign("id_kontrak")
                  ->references('id')
                  ->on('kontrak')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->bigInteger("id_tunjangan")->unsigned()->nullable();
            $table->foreign("id_tunjangan")
                  ->references('id')
                  ->on('rwy_tunjangan')
                  ->onDelete('SET NULL')
                  ->onUpdate('CASCADE');

            $table->bigInteger("id_jabatan_gaji")->unsigned()->nullable();
            $table->foreign("id_jabatan_gaji")
                  ->references('id')
                  ->on('rwy_jabatan_gaji')
                  ->onDelete('SET NULL')
                  ->onUpdate('CASCADE');

            $table->bigInteger("id_riw_penempatan_wilayah")->unsigned()->nullable();
            $table->foreign("id_riw_penempatan_wilayah")
                  ->references('id')
                  ->on('penempatan_wilayah')
                  ->onDelete('SET NULL')
                  ->onUpdate('CASCADE');

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
        Schema::dropIfExists('pkwt');
    }
}

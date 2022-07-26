<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPerusahaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_perusahaan', function (Blueprint $table) {
            $table->id();

            $table->bigInteger("id_perusahaan")->unsigned();
            $table->foreign("id_perusahaan")
                  ->references('id')
                  ->on('perusahaan')
                  ->onDelete("CASCADE")
                  ->onUpdate('CASCADE');

            // $table->string('nama_pt');
            $table->string('nama_pemilik');
            $table->string('foto');
            $table->text('alamat');                       
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('kelurahan');
            
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
        Schema::dropIfExists('data_perusahaan');
    }
}

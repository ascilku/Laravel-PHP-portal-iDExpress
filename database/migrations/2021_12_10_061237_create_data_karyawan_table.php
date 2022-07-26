<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_karyawan', function (Blueprint $table) {
            $table->id();

            $table->bigInteger("id_akun")->unsigned();
            $table->foreign("id_akun")
                  ->references('id')
                  ->on('akun')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            // $table->bigInteger("id_dokumen")->unsigned()->nullable();
            // $table->foreign("id_dokumen")
            //       ->references('id')
            //       ->on('dokumen')
            //       ->onDelete('SET NULL')
            //       ->onUpdate('CASCADE');

            // $table->enum("status_kepegawaian", 
            //                         [
            //                          'Kontrak',
            //                          'Tetap',
            //                          'Kurir Even',
            //                          'Kurir Freelance',
            //                          'Outshorcing'
            //                         ]
            //             )->nullable();

            $table->string('dingtalk')->nullable();
            $table->string('norek')->nullable();
            $table->string('bank')->nullable();
            $table->string('kode_bank')->nullable();

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
        Schema::dropIfExists('data_karyawan');
    }
}

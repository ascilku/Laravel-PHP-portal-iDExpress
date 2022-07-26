<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLowonganKerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongan_kerja', function (Blueprint $table) {
            $table->id();

            $table->bigInteger("id_akun")->unsigned();
            $table->foreign("id_akun")
                  ->references('id')
                  ->on('akun')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->bigInteger("id_perusahaan")->unsigned();
            $table->foreign("id_perusahaan")
                  ->references('id')
                  ->on('perusahaan')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->string('id_lowongan');
            $table->text('judul');
            $table->text('deskripsi');
            $table->date('tgl_buka');
            $table->date('tgl_tutup');
            $table->string('nama_file')->nullable();
            $table->enum('status', 
                                    ['Buka',
                                     'Tidak',
                                     'Expired'
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
        Schema::dropIfExists('lowongan_kerja');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAplyLowonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aply_lowongan', function (Blueprint $table) {
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
            
            $table->bigInteger("id_lowongan_kerja")->unsigned()->nullable();
            $table->foreign("id_lowongan_kerja")
                  ->references('id')
                  ->on('lowongan_kerja')
                  ->onDelete('SET NULL')
                  ->onUpdate('CASCADE');
            
            $table->enum('status', 
                                    ['Buka',
                                     'Tidak',
                                     'Expired'
                                    ]
                        );

            $table->text('keterangan');

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
        Schema::dropIfExists('aply_lowongan');
    }
}

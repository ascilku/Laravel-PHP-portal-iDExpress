<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerusahaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id();

            $table->bigInteger("id_akses")->unsigned();
            $table->foreign("id_akses")
                  ->references('id')
                  ->on('akses')
                  ->onDelete("CASCADE")
                  ->onUpdate('CASCADE');

            $table->bigInteger("id_tema")->unsigned()->nullable();
            $table->foreign("id_tema")
                  ->references('id')
                  ->on('tema')
                  ->onDelete('SET NULL')
                  ->onUpdate('CASCADE');
            $table->string('nama');
            $table->string('nik');
            $table->string('password');
            $table->string('show_pass');
            // $table->string('status');
            $table->string('email');
            $table->string('no_hp');
            $table->string('token')->nullable();
            
            $table->enum("status", 
                                    ['aktif',
                                     'tidak'
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
        Schema::dropIfExists('perusahaan');
    }
}

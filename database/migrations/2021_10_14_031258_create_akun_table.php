<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akun', function (Blueprint $table) {
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

            $table->bigInteger("id_perusahaan")->unsigned()->nullable();
            $table->foreign("id_perusahaan")
                  ->references('id')
                  ->on('perusahaan')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->string('nik')->nullable();
            $table->string('password');
            $table->string('show_pass');
            // $table->string('status');
            $table->string('email')->nullable();
            $table->string('no_hp')->nullable();
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
        Schema::dropIfExists('akun');
    }
}

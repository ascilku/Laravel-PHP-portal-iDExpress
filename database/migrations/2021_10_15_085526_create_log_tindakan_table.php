<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogTindakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_tindakan', function (Blueprint $table) {
            $table->id();

            $table->bigInteger("id_logLogin")->unsigned();
            $table->foreign("id_logLogin")
                  ->references('id')
                  ->on('log_login')
                  ->onDelete("CASCADE")
                  ->onUpdate('CASCADE');
            
                  $table->bigInteger("id_akun")->unsigned();
                  $table->foreign("id_akun")
                        ->references('id')
                        ->on('akun')
                        ->onDelete("CASCADE")
                        ->onUpdate('CASCADE');
            
            $table->string('log');

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
        Schema::dropIfExists('log_tindakan');
    }
}

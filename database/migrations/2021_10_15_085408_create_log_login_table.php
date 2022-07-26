<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_login', function (Blueprint $table) {
            $table->id();

            $table->bigInteger("id_akun")->unsigned();
            $table->foreign("id_akun")
                  ->references('id')
                  ->on('akun')
                  ->onDelete("CASCADE")
                  ->onUpdate('CASCADE');
            
            $table->enum("status", 
                                    ['online',
                                     'offline'
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
        Schema::dropIfExists('log_login');
    }
}

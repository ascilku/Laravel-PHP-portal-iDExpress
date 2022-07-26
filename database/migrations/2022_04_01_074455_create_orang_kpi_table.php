<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrangKpiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orang_kpi', function (Blueprint $table) {
            $table->id();

            $table->bigInteger("id_akun")->unsigned();
            $table->foreign("id_akun")
                  ->references('id')
                  ->on('akun')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->bigInteger("id_rp_kpi")->unsigned();
            $table->foreign("id_rp_kpi")
                  ->references('id')
                  ->on('rp_kpi')
                  ->onDelete('CASCADE')
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
        Schema::dropIfExists('orang_kpi');
    }
}

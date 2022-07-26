<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsentifKpiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insentif_kpi', function (Blueprint $table) {
            $table->id();

            $table->bigInteger("id_akun")->unsigned();
            $table->foreign("id_akun")
                  ->references('id')
                  ->on('akun')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            // $table->bigInteger("id_orang_kpi")->unsigned();
            // $table->foreign("id_orang_kpi")
            //       ->references('id')
            //       ->on('orang_kpi')
            //       ->onDelete('CASCADE')
            //       ->onUpdate('CASCADE');

            $table->smallInteger('hujau')->nullable();
            $table->smallInteger('merah')->nullable();
            $table->date('date_kpi');

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
        Schema::dropIfExists('insentif_kpi');
    }
}

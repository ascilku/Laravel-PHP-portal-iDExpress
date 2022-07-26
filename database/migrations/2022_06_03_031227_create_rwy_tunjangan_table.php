<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRwyTunjanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rwy_tunjangan', function (Blueprint $table) {
            $table->id();

            $table->bigInteger("id_akun")->unsigned();
            $table->foreign("id_akun")
                  ->references('id')
                  ->on('akun')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->bigInteger('tunj_jabatan')->default(0);
            $table->bigInteger('tunj_kendaraan')->default(0);

            // $table->bigInteger('insent_delivery')->default(0);
            // $table->bigInteger('insent_pickup')->default(0);
            // $table->bigInteger('insent_kpi')->default(0);

            $table->bigInteger('pendapatan_lain')->default(0);

            // $table->bigInteger('bbm_crf')->default(0); // untuk kurir freelance
            // $table->bigInteger('bbm_crk')->default(0); // untuk kurir kontrak
            // $table->bigInteger('pulsa_data')->default(0); // untuk kurir freelance, kurir kontrak dan vth

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
        Schema::dropIfExists('rwy_tunjangan');
    }
}

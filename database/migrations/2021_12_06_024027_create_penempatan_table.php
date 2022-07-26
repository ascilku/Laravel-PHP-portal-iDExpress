<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenempatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penempatan', function (Blueprint $table) {
            $table->id();
            
            $table->string('alamat')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kota')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('alokasi')->nullable(); // Nama TH atau TH Polewali /penempatan
            $table->string('kode_alokasi')->nullable(); // kode TH atau TH_PWX01 /kode penempatan
            
            $table->enum("status_th", 
                                    [
                                     'TH',
                                     'VTH',
                                     'FB',
                                     'HO'
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
        Schema::dropIfExists('penempatan');
    }
}

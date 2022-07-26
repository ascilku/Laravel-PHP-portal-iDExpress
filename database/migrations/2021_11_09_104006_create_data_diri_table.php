<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataDiriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_diri', function (Blueprint $table) {
            $table->id();

            $table->bigInteger("id_akun")->unsigned();
            $table->foreign("id_akun")
                  ->references('id')
                  ->on('akun')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->string('foto')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('nama_panggilan')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();              
            $table->string('nik')->nullable();              
            $table->string('email')->nullable();


            $table->string('agama')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('status_perkawinan')->nullable();

            // $table->enum("agama", 
            //                         [
            //                          'ISLAM',
            //                          'KRISTEN PROTESTAN',
            //                          'KRISTEN KATHOLIK',
            //                          'HINDU',
            //                          'BUDHA',
            //                          'KONG HU CHU'
            //                         ]
            //             )->nullable();

            // $table->enum("jenis_kelamin", 
            //                         ['LAKI-LAKI',
            //                          'PEREMPUAN'
            //                         ]
            //             )->nullable();

            // $table->enum("status_perkawinan", 
            //                         ['SUDAH KAWIN',
            //                          'BELUM KAWIN',
            //                          'JANDA',
            //                          'DUDA'
            //                         ]
            //             )->nullable();

            $table->string('no_bpjs')->nullable();
            $table->string('tinggi_badan')->nullable();
            $table->string('berat_badan')->nullable();
            $table->string('golongan_darah')->nullable();

            // $table->enum("golongan_darah", 
            //                         ['A',
            //                          'B',
            //                          'AB',
            //                          'O'
            //                         ]
            //             )->nullable();

            $table->string('suku')->nullable();
            $table->string('total_saudara')->nullable();
            $table->text('alamat_ktp')->nullable();                       
            $table->string('provinsi_ktp')->nullable();
            $table->string('kota_ktp')->nullable();
            $table->string('kabupaten_ktp')->nullable();
            $table->string('kecamatan_ktp')->nullable();
            $table->string('kelurahan_ktp')->nullable();
            $table->string('pos_ktp')->nullable();

            $table->text('alamat_domisili')->nullable();                       
            $table->string('provinsi_domisili')->nullable();
            $table->string('kota_domisili')->nullable();
            $table->string('kabupaten_domisili')->nullable();
            $table->string('kecamatan_domisili')->nullable();
            $table->string('kelurahan_domisili')->nullable();

            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->string('nomor_whatsapp')->nullable();
            $table->string('nomor_hp')->nullable();
            $table->text('cerita_diri')->nullable();

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
        Schema::dropIfExists('data_diri');
    }
}

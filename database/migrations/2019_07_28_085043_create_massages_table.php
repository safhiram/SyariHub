<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMassagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('massages', function (Blueprint $table) {
            $table->bigIncrements('id');
            //isi dari database apa aja
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('alamat_ktp');
            $table->string('alamat_tinggal');
            $table->string('no_ktp');
            $table->string('pendidikan');
            $table->string('hp_android');
            $table->string('keahlian');
            $table->string('status');
            $table->string('pengalaman');
            $table->string('darimana');
            $table->string('alasan');
            $table->string('jam_kerja');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('massages');
    }
}

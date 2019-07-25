<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNannysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nannys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('no_ktp');
            $table->string('no_whatsapp');
            $table->string('alamat_ktp');
            $table->string('alamat_domisili');
            $table->string('pendidikan');
            $table->string('khatam_AlQuran');
            $table->string('hobi');
            $table->string('jml_anak');
            $table->string('pengalaman');
            $table->string('penjelasan1');
            $table->string('penjelasan2');
            $table->string('penjelasan3');
            $table->mediumText('foto_ktp')->nullable();
            $table->mediumText('foto_diri')->nullable();
            $table->mediumText('foto_ijazah')->nullable();
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
        Schema::dropIfExists('nannys');
    }
}

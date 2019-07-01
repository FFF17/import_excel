<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lengkap');
            $table->integer('nim');
            $table->string('konsentrasi');
            $table->string('alamat_rumah');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('no_handphone');
            $table->string('email');
            $table->text('rencana_skripsi');
            $table->string('dosen_1');
            $table->string('dosen_2');
            $table->string('reguler');
            $table->string('tanggal')->nullable();
            $table->string('id_dosen')->nullable();
            $table->string('id_kaprodi')->nullable();
            $table->string('id_reviewer')->nullable();
            $table->string('ruang')->nullable();
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
        Schema::dropIfExists('siswas');
    }
}

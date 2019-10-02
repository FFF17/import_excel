<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nidn');
            $table->string('nama_dosen');
            $table->string('jk');
            $table->string('gelar');
            $table->string('pendidikan');
            $table->string('homebase');
            $table->string('bidang_ilmu');
            $table->string('tanggal')->nullable();
            $table->string('jam')->nullable();
            $table->string('ruang')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('dosens');
    }
}

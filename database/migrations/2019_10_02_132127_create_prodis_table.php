<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_prodi');
            $table->string('tanggal')->nullable();
            $table->string('jam')->nullable();
            $table->string('ruangan')->nullable();
            $table->timestamps();
        });
           DB::table('prodis')->insert(
            array(

                'nama_prodi' => 'Akuntansi S1',
               
                ));
             DB::table('prodis')->insert(
            array(

                'nama_prodi' => 'Hukum S1',
               
                ));

  DB::table('prodis')->insert(
            array(

                'nama_prodi' => 'Ilmu Komputer S1',
               
                ));

  DB::table('prodis')->insert(
            array(

                'nama_prodi' => 'Manajemen S1',
               
                ));

  DB::table('prodis')->insert(
            array(

                'nama_prodi' => 'Matematika S1',
               
                ));

  DB::table('prodis')->insert(
            array(

                'nama_prodi' => 'Pendidikan Matematika S1',
               
                ));

  DB::table('prodis')->insert(
            array(

                'nama_prodi' => 'Pendidikan Teknologi Informasi S1',
               
                ));

  DB::table('prodis')->insert(
            array(

                'nama_prodi' => 'Sistem Informasi S1',
               
                ));

  DB::table('prodis')->insert(
            array(

                'nama_prodi' => 'Statistika S1',
               
                ));

  DB::table('prodis')->insert(
            array(

                'nama_prodi' => 'Teknik Industri S1',
               
                ));

  DB::table('prodis')->insert(
            array(

                'nama_prodi' => 'Teknik Sipil S1',
               
                ));


    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prodis');
    }
}

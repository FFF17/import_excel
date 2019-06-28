<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{



        public function dosen()
    {
        return $this->belongsTo('App\Dosen', 'nama_dosen');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Print extends Model
{
     public function siswa()
    {
        return $this->belongsTo('App\Siswa', 'id_siswa');
    }
     public function dosen()
    {
        return $this->belongsTo('App\Dosen', 'id_dosen');
    }
}

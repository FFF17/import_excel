<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Output extends Model
{
    public function siswaa()
    {
        return $this->belongsTo('App\Siswa', 'id_siswa');
    }
     public function dosend()
    {
        return $this->belongsTo('App\Dosen', 'id_dosen');
    }
}

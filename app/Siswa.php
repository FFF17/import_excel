<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
        public function dosens()
    {
        return $this->belongsTo('App\Dosen', 'id_dosen');
    }
       public function users()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
}

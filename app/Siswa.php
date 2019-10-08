<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{


        public function prodi()
    {
        return $this->belongsTo('App\Prodi', 'id_prodi');
    }
        public function dosen()
    {
        return $this->belongsTo('App\Dosen', 'dosen_1');
    }
     public function dosens()
    {
        return $this->belongsTo('App\Dosen', 'dosen_2');
    }
     
     public function reviewer()
    {
        return $this->belongsTo('App\Dosen', 'id_reviewer');
    }
    public function dekan()
    {
        return $this->belongsTo('App\Dosen', 'id_dekan');
    }
     
      public function kaprodi()
    {
        return $this->belongsTo('App\Dosen', 'id_kaprodi');
    }
    public function dos(){

        return $this->belongsTo(Dosen::class);
    }
}

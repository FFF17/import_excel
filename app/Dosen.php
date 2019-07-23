<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
	 
	  public function siswa(){
        return $this->belongsTo('App\Siswa');
    }
    }

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
    public function usuario(){
        return $this->belongsTo('App\User');
    }

    public function convocatorias(){
        return $this->hasMany('App\Convocatoria');
    }

    public function convocatoria(){
        return $this->belongsTo('App\Convocatoria');
    }
}
